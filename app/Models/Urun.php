<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urun extends Model
{
    use HasFactory;

    protected $table = "urun";
    protected $guarded = [];
    public $timestamps = false;

    public function ana_kategori()
    {
        return $this->belongsTo('App\Models\AnaKategori', 'ana_kategori', 'id');
    }

    public function alt_kategori()
    {
        return $this->belongsTo('App\Models\AltKategori', 'alt_kategori', 'id');
    }
}
