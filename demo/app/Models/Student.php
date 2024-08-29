<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=['name','email','address','image','gender','track_id'];
    // protected $guarded=[];

    function track()
    {
        return $this->belongsTo(Track::class);
    }

}
