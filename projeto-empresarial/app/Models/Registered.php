<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registered extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
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
        'cep'
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