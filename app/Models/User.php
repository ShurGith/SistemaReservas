<?php

    namespace App\Models;

    // use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Database\Factories\UserFactory;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;

    class User extends Authenticatable
    {
        /** @use HasFactory<UserFactory> */
        use HasFactory, Notifiable;

        /**
         * The attributes that are mass assignable.
         *
         * @var list<string>
         */
        protected $fillable = [
            'name',
            'email',
            'password',
            'credit' .
            'is_active',
        ];

        /**
         * The attributes that should be hidden for serialization.
         *
         * @var list<string>
         */
        protected $hidden = [
            'password',
            'remember_token',
        ];

        public function bookings(): HasMany
        {
            return $this->hasMany(Booking::class);
        }

        public function hasCredit(): bool
        {
            return $this->credit > 0;
        }

        /**
         * Get the attributes that should be cast.
         *
         * @return array<string, string>
         */
        protected function casts(): array
        {
            return [
                'email_verified_at' => 'datetime',
                'password' => 'hashed',
                'credit' => 'int',
            ];
        }
    }
