<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tasks';
    
     /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        
        'name',
        'recruitment_id'
    ];
    public function recruitment() {
        return $this->belongsTo('App\Recruitment');
    }
}
