<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Wlc;

use Illuminate\Database\Eloquent\Model;

class PartnersUsers extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'partners_users';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}