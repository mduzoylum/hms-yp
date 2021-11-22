<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AltKategori extends Model
{
    use HasFactory;

    protected $table = "alt_kategori";
    protected $guarded = [];
    public $timestamps = false;

    public function ana_kategori()
    {
        return $this->belongsTo('App\Models\AnaKategori', 'kategori_id', 'id');
    }
}
