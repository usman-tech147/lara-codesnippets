<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Property extends Model
{
    use HasFactory;

    protected $table = 'm_properties';

    protected $fillable = [
        'regional_office_id',
        'portfolio_id',
        'fig_code',
        'jeed_no',
        'property_name_eng',
        'property_name_jpn',
        'rank',
        'address',
        'parking_flag',
        'acquistion_date',
        'location_map',
        'property_latitude',
        'property_longitude',
        'zoom',
        'create_by',
        'updated_by',
        'property_post_code',
        'regional_office_bank_account',
    ];

    public function regional_office()
    {
        return $this->belongsTo(M_Regional_Office::class);
    }

    public function users()
    {
        return $this->hasMany(T_User::class);
    }
}
