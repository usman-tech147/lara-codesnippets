<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Regional_Office extends Model
{
    use HasFactory;

    protected $table = 'm_regional_offices';
    
    protected $fillable = [
        'm_postal_code_id',
        'regional_office_name_jpn',
        'regional_office_name_eng',
        'address',
        'phone_number',
        'fax_number',
        'created_by',
        'updated_by',
    ];

    public function postal_code()
    {
        return $this->belongsTo(M_Postal_Code::class);
    }

    public function properties()
    {
        return $this->hasMany(M_Property::class,'regional_office_id');
    }
}
