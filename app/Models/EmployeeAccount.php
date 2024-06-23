<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeAccount extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'email',
        'password',
        'profile',
        'contact',
        'gender',
        'birthdate',
        'address',
        'position_id'
    ];
    public function position()
    {
        return $this->belongsTo(EmployeePosition::class,'position_id');
    }
}
