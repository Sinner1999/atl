<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use SoftDeletes;

    protected $table = 'phone';

    protected $fillable = [
        'phone', 'empl_id',
    ];

    protected $dates = ['deleted_at'];

    public function empl(){
        
        return $this->belongsTo('App\Empl');
    }
}
