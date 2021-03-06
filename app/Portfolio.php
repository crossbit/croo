<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Portfolio extends Model {
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'portfolios';
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
        'description',
        'category_id',
    ];
    public function getCategory() {
        return $this->hasOne('App\Category');
    }
    
    public function photos(){
        return $this->hasMany('App\Photo');
    }
}