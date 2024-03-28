<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    use HasFactory;

    protected $fillable = ["username" , "email" , "password","user_id"];

    public function todos()
    {
        return $this->hasMany(todo::class);
    }
}
