<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'tb_inventory';

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('name', 'like', '%'.$search.'%')
                         ->orWhere('model', 'like', '%'.$search.'%');
        });
    }
    
    protected $primaryKey = 'id';
    public $timestamp = false;
    //public $fillable = ['id', 'judul','penulis','tanggal','isi'];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
