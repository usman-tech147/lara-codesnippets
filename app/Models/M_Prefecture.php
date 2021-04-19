<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Prefecture extends Model
{
    use HasFactory;

    protected $table = 'prefectures';

    protected $fillable = ['prefecture_name_jpn', 'prefecture_name_eng'];

    public function mPostalCodes()
    {
        return $this->hasMany(M_Postal_Code::class,'prefecture_id');
    }


}
