<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Kullanici extends Authenticatable
{
    use HasFactory;

    protected $table = "kullanici";
    protected $guarded = [];

    const CREATED_AT = 'olusturma_tarihi';
    const UPDATED_AT = 'guncelleme_tarihi';
    const DELETED_AT = 'silinme_tarihi';

    public function teklif()
    {
        return $this->hasMany('App\Models\Teklif', 'teklif_olusturan', 'id');
    }
}
