<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingShopModel extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'tb_landing_shop';

    protected $primaryKey = 'id';
    public $timestamp = false;
    //public $fillable = ['id', 'judul','penulis','tanggal','isi'];
}
