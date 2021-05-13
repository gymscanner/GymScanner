<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brandsocialdata extends Model
{
    use HasFactory;
    public $table = "brands_social_data";
    protected $fillable = [

        'user_id',
        'name',
        'certificate_date',
        'type'
        
    ];

    public $timestamps = true;
}