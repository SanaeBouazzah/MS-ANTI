<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
      'name',
      'email',
      'image',
      'password',
      'remember_token',
      'bio'
    ];

    public  function getImageAttribute($value){
      return $value??'images/inconnu.jpeg';
    }

    public function publications(){
      return $this->hasMany(Publication::class);
    }
}
