<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'is_admin',
        'email',
        'password',
        'tel',
        'birth_date',
        'cpf',
        'photo',
        'street',
        'number',
        'neighborhood',
        'city',
        'state',
        'cep',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }

    public function getUsers(string $search = null)
    {
      $users = $this->where(function ($query) use ($search)
      {
        if($search){
        $query->where('email', $search);
        $query->orWhere('name', 'LIKE', "%{$search}%");
        
        };
      })->paginate(5);

      return $users;
    }
}