<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    /**
     * App\Models\UserPhoneNumber
     *
     * @property int                             $id
     * @property int                             $user_id      Felhasználó azonosító
     * @property string                          $phone_number Telefonszám
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Models\User|null      $user
     * @method static \Database\Factories\UserPhoneNumberFactory factory( $count = null, $state = [] )
     * @method static \Illuminate\Database\Eloquent\Builder|UserPhoneNumber newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|UserPhoneNumber newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|UserPhoneNumber query()
     * @method static \Illuminate\Database\Eloquent\Builder|UserPhoneNumber whereCreatedAt( $value )
     * @method static \Illuminate\Database\Eloquent\Builder|UserPhoneNumber whereId( $value )
     * @method static \Illuminate\Database\Eloquent\Builder|UserPhoneNumber wherePhoneNumber( $value )
     * @method static \Illuminate\Database\Eloquent\Builder|UserPhoneNumber whereUpdatedAt( $value )
     * @method static \Illuminate\Database\Eloquent\Builder|UserPhoneNumber whereUserId( $value )
     * @mixin \Eloquent
     */
    class UserPhoneNumber extends Model{

        use HasFactory;

        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
        protected $fillable = ['user_id', 'phone_number'];

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
        protected $casts = [];

        public function user(): BelongsTo{

            return $this->belongsTo( User::class );
        }
    }
