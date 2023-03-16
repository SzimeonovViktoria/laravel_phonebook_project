<?php

    namespace App\Models;

    // use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    /**
     * App\Models\User
     *
     * @property int                                                                             $id
     * @property string                                                                          $name
     * @property string                                                                          $avatar
     * @property string|null                                                                     $home_country
     * @property string|null                                                                     $home_city
     * @property string|null                                                                     $home_address
     * @property string|null                                                                     $mailing_country
     * @property string|null                                                                     $mailing_city
     * @property string|null                                                                     $mailing_address
     * @property \Illuminate\Support\Carbon|null                                                 $created_at
     * @property \Illuminate\Support\Carbon|null                                                 $updated_at
     * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UserEmail>       $emails
     * @property-read int|null                                                                   $emails_count
     * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\UserPhoneNumber> $phoneNumbers
     * @property-read int|null                                                                   $phone_numbers_count
     * @method static \Database\Factories\UserFactory factory( $count = null, $state = [] )
     * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|User query()
     * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatar( $value )
     * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt( $value )
     * @method static \Illuminate\Database\Eloquent\Builder|User whereHomeAddress( $value )
     * @method static \Illuminate\Database\Eloquent\Builder|User whereHomeCity( $value )
     * @method static \Illuminate\Database\Eloquent\Builder|User whereHomeCountry( $value )
     * @method static \Illuminate\Database\Eloquent\Builder|User whereId( $value )
     * @method static \Illuminate\Database\Eloquent\Builder|User whereMailingAddress( $value )
     * @method static \Illuminate\Database\Eloquent\Builder|User whereMailingCity( $value )
     * @method static \Illuminate\Database\Eloquent\Builder|User whereMailingCountry( $value )
     * @method static \Illuminate\Database\Eloquent\Builder|User whereName( $value )
     * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt( $value )
     * @mixin \Eloquent
     */
    class User extends Authenticatable{

        use HasFactory;

        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
        protected $fillable = [
            'name',
            'home_country',
            'home_city',
            'home_address',
            'mailing_country',
            'mailing_city',
            'mailing_address'
        ];

        protected $guarded = [];

        /**
         * The attributes that should be hidden for serialization.
         *
         * @var array<int, string>
         */
        protected $hidden = [
            'created_at',
            'updated_at'
        ];

        /**
         * The attributes that should be cast.
         *
         * @var array<string, string>
         */
        protected $casts = [

        ];

        public function emails(): HasMany{

            return $this->hasMany( UserEmail::class );
        }

        public function phoneNumbers(): HasMany{

            return $this->hasMany( UserPhoneNumber::class );
        }
    }
