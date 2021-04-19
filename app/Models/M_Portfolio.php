<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Portfolio extends Model
{
    use HasFactory;

    protected $table = 'm_portfolios';
    
    protected $fillable = [
        'name_eng',
        'name_jpn',
        'acquisition_date',
        'portfolio_manager',
        'status',
        'created_by',
        'updated_by',
    ];

    public function properties()
    {
        return $this->hasMany(M_Property::class,'regional_office_id');
    }


}
