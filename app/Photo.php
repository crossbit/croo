<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Photo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'photos';
    
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
        
        'thumbnail',
        'img',
        'portfolio_id'
    ];
    public function setPortfolio() {
        return $this->belongsTo('App\Portfolio');
    }
}