<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $fillable = ['id', 'user_id', 'title', 'type','price', 'quantity','created_at','updated_at'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
