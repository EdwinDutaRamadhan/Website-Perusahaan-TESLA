<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    //public $fillable = ['id','user_id','title', 'type','price', 'quantity','method','image','created_at','updated_at'];
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
