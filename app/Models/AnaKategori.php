<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnaKategori extends Model
{
    use HasFactory;

    protected $table = "ana_kategori";
    protected $guarded = [];
    public $timestamps = false;

    public function alt_kategori()
    {
        return $this->hasMany('App\Models\AltKategori', 'kategori_id', 'id');
    }
}
