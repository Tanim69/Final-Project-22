<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    // protected $fillabble=[ 'id','name','email','address','occupation','phonenumber',]

    protected $guarded=[];
}
