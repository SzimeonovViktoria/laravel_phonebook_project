<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    /**
     * App\Models\UserEmail
     *
     * @property int                             $id
     * @property int                             $user_id Felhasználó azonosító
     * @property string                          $email   Email cim
     * @property \Illuminate\Support\Carbon|null $created_at
     * @property \Illuminate\Support\Carbon|null $updated_at
     * @property-read \App\Models\User|null      $user
     * @method static \Database\Factories\UserEmailFactory factory( $count = null, $state = [] )
     * @method static \Illuminate\Database\Eloquent\Builder|UserEmail newModelQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|UserEmail newQuery()
     * @method static \Illuminate\Database\Eloquent\Builder|UserEmail query()
     * @method static \Illuminate\Database\Eloquent\Builder|UserEmail whereCreatedAt( $value )
     * @method static \Illuminate\Database\Eloquent\Builder|UserEmail whereEmail( $value )
     * @method static \Illuminate\Database\Eloquent\Builder|UserEmail whereId( $value )
     * @method static \Illuminate\Database\Eloquent\Builder|UserEmail whereUpdatedAt( $value )
     * @method static \Illuminate\Database\Eloquent\Builder|UserEmail whereUserId( $value )
     * @mixin \Eloquent
     */
    class UserEmail extends Model{

        use HasFactory;

        /**
         * The attributes that are mass assignable.
         *
         * @var array<int, string>
         */
        protected $fillable = ['user_id', 'email'];

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
