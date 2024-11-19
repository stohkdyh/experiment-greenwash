<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'age',
        'location',
        'occupation',
        'education',
        'income',
    ];
    // public function preTest()
    // {
    //     return $this->hasOne(PreTest::class, 'user_id');
    // }
}
