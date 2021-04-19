<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Postal_Code extends Model
{
    use HasFactory;

    protected $table = 'm_postal_codes';


    protected $fillable = [
        'prefecture_id',
        'postal_code',
        'city_code',
        'town',
        'area',
        'town_kana',
        'area_kana',
        'town_kanji',
        'area_kanji',
    ];

    public function prefecture()
    {
        return $this->belongsTo(M_Prefecture::class);
    }

    public function regional_offices()
    {
        return $this->hasMany(M_Regional_Office::class,'m_postal_code_id');
    }
}
