<?php

    namespace App\Http\Controllers;

    use App\Http\Resources\UserIndexResource;
    use App\Models\User;
    use Illuminate\Contracts\View\Factory;
    use Illuminate\Contracts\View\View;
    use Illuminate\Foundation\Application;
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Routing\Redirector;
    use Illuminate\Support\Facades\DB;

    class UserController extends Controller{

        public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application{

            $users = UserIndexResource::collection(
                User::select( [
                    'users.*',
                    DB::raw( "(SELECT GROUP_CONCAT(user_emails.email)  FROM user_emails WHERE user_emails.user_id = users.id) AS email" ),
                    DB::raw( "(SELECT GROUP_CONCAT(user_phone_numbers.phone_number)  FROM user_phone_numbers WHERE user_phone_numbers.user_id = users.id) AS phone_number" ),
                ] )
                    ->get()
            );

            return view( "welcome", compact( 'users' ) );
        }

        public function store(): Application|Redirector|RedirectResponse|\Illuminate\Contracts\Foundation\Application{

            $attributes = request()->validate( [
                'name'            => 'required|max:255',
                'home_country'    => 'sometimes|max:255',
                'home_city'       => 'sometimes|max:255',
                'home_address'    => 'sometimes|max:255',
                'mailing_country' => 'sometimes|max:255',
                'mailing_city'    => 'sometimes|max:255',
                'mailing_address' => 'sometimes|max:255',
                'email.*'         => 'required|email|unique:user_emails,email',
                'phone_number.*'  => 'sometimes|max:255',
            ] );

            try{
                DB::transaction( function() use ( $attributes ){

                    $id = User::create( [
                        'name'            => $attributes['name'],
                        'home_country'    => $attributes['home_country'],
                        'home_city'       => $attributes['home_city'],
                        'home_address'    => $attributes['home_address'],
                        'mailing_country' => $attributes['mailing_country'],
                        'mailing_city'    => $attributes['mailing_city'],
                        'mailing_address' => $attributes['mailing_address'],
                    ] )->id;

                    foreach( $attributes['email'] as $email ){
                        UserEmail::create( [
                            'user_id' => $id,
                            'email'   => $email,
                        ] );
                    }

                    foreach( $attributes['phone_number'] as $phone ){
                        if( $phone !== null ){
                            UserPhoneNumber::create( [
                                'user_id'      => $id,
                                'phone_number' => $phone,
                            ] );
                        }
                    }
                } );
            }
            catch( Throwable $e ){
                report( $e );
            }


            return redirect( '/' );
        }
    }
