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
        'img_path',
        'img_path2',
        'img_path3',
        'img_path4',
        'description',
        'category_id',
    ];

    public function getCategory() {
        return $this->hasOne('App\Category');
    }

}
