<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recruitment extends Model {

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'recruitments';

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
    ];

    public function tasks() {
        return $this->hasMany('App\Task');
    }

    public function needs() {
        return $this->hasMany('App\Need');
    }

    public function offers() {
        return $this->hasMany('App\Offer');
    }

}
