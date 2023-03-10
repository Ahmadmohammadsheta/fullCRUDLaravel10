<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
        'role',
        'created_by',
        'updated_by',
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

    /**
     * @return Attribute;
     */
    protected function role(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  ["admin", "user"][$value],
        );
    }

    /**
     * @return Attribute;
     */
    protected function createdBy(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  $value ? User::find($value)->name : 'self',
            set: fn ($value) =>  auth()->id() ?: '',
        );
    }

    /**
     * @return Attribute;
     */
    protected function updatedBy(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  $value ? User::find($value)->name : 'non',
            set: fn ($value) =>  auth()->id() ?: '',
        );
    }

    /**
     * @return Attribute;
     */
    protected function rememberToken(): Attribute
    {
        return new Attribute(
            get: fn ($value) =>  $value,
            set: fn ($value) => Str::random(10),
        );
    }

    /**
     * @return Attribute;
     */
    protected function password(): Attribute
    {
        return new Attribute(
            set: fn ($value) => $value ? bcrypt($value) : bcrypt('12345678'),
        );
    }
}
