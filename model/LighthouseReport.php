<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class LighthouseReport
 * @package App\Model
 */
class LighthouseReport extends Model
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'url', 'report', 'created_at'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * User constructor.
     * @param array $attributes
     */
    public function __construct($attributes = [])
    {
        if(!is_array($attributes)) {
            $attributes = (array)$attributes;
        }
        parent::__construct($attributes);
    }
}
