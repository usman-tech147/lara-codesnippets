<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class T_User extends Model
{
    use HasFactory;

    protected $table = 't_users';

    protected $fillable =
        [
            'property_id',
            'first_name',
            'last_name',
            'email',
            'password',
            'secrete_question',
            'secrete_answer',
            'is_term_conditions',
            'is_active',
            'created_by',
            'updated_by',
            ];

    public function property()
    {
        return $this->belongsTo(M_Property::class);
    }
}
