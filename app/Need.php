<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Need extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'needs';
    
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
