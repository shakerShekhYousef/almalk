<?php

namespace App\Models;

use App\Models\Traits\UserTraits\UserRelationship;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Tymon\JWTAuth\Contracts\JWTSubject;

class User extends Authenticatable implements JWTSubject, MustVerifyEmail
{
    use HasFactory, Notifiable, HasRoles, UserRelationship,HasApiTokens;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'mobile_phone_number', 'isVerified', 'birthday',
        'office_phone', 'home_phone',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

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

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function sent()
    {
        return $this->hasMany(messages::class, 'sender_id');
    }

    // A user can also receive a message
    public function received()
    {
        return $this->hasMany(messages::class, 'sent_to_id');
    }

    public function sendMessageTo($recipient, $message, $subject)
    {
        return $this->sent()->create([
            'body' => $message,
            'subject' => $subject,
            'sent_to_id' => $recipient,
        ]);
    }
}
