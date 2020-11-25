<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empl extends Model
{
    use SoftDeletes;

    protected $table = 'empl';

    protected $fillable = [
        'name', 'email', 'posit_id',
    ];

    protected $dates = ['deleted_at'];

    public function posit(){
        
        return $this->belongsTo('App\Posit');
    }
    
    public function phone(){
        
        return $this->hasMany('App\Phone');
    }
}
