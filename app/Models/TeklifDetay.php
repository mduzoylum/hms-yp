<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TeklifDetay extends Model
{
    use HasFactory;

    protected $table = "teklif_detay";
    protected $guarded = [];

    const CREATED_AT = 'olusturma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT = 'silinme_tarihi';

    public function teklif()
    {
        return $this->belongsTo('App\Models\Teklif', 'teklif_id', 'id');
    }
}
