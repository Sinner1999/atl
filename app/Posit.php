<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Posit extends Model
{
    use SoftDeletes;

    protected $table = 'posit';

    protected $fillable = [
        'name', 'dept_id',
    ];

    protected $dates = ['deleted_at'];

    public function dept(){
        
        return $this->belongsTo('App\Dept');
    }
    
    public function empl(){
        
        return $this->hasMany('App\Empl');
    }
}
