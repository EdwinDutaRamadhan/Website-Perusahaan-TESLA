<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandingModel extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'tb_landing';

    protected $primaryKey = 'id';
    public $timestamp = false;
    //public $fillable = ['id', 'judul','penulis','tanggal','isi'];
}
