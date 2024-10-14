<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
    protected $primaryKey = 'dishId';
    protected $fillable = ['userId', 'name', 'description'];
    public $timestamps = true; 

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function recipe(){
        return $this->hasMany(Recipe::class);
    }
}
