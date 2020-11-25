<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dept extends Model
{
    use SoftDeletes;

    protected $table = 'dept';

    protected $fillable = [
        'name',
    ];

    protected $dates = ['deleted_at'];
    
    public function posit(){
        
        return $this->hasMany('App\posit');
    }
}
