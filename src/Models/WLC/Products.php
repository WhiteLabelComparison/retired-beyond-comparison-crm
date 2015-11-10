<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Wlc;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'products';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}