<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teklif extends Model
{
    use HasFactory;

    protected $table = "teklif";
    protected $guarded = [];

    const CREATED_AT = 'olusturma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT = 'silinme_tarihi';

    public function detay()
    {
        return $this->hasOne('App\Models\TeklifDetay', 'teklif_id', 'id');
    }

    public function kullanici()
    {
        return $this->belongsTo('App\Models\Kullanici', 'teklif_olusturan', 'id');
    }
}
