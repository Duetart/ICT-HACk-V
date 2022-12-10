<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'account_type',
        'information',
        'photo',
        'student_rating',
        'student_employment_status',
        'verification_status',
        'information',
        'telegram_id',
        'telegram_auth_code',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isStudent(): bool
    {
        return $this->account_type === 'student';
    }

    public function isCompany(): bool
    {
        return $this->account_type === 'company';
    }

    public function update(array $attributes = [], array $options = []): bool
    {
        if (isset($attributes['password'])) {
            $attributes['password'] = bcrypt($attributes['password']);
        }

        return parent::update($attributes, $options);
    }

    public function no_telegram(): bool
    {
        return $this->telegram_id === null;
    }

    public function projects()
    {
        return DB::table('projects')->get();
    }
}
