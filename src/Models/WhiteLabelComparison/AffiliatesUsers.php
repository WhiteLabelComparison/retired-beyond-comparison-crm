<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\WhiteLabelComparison;

use Illuminate\Database\Eloquent\Model;

class AffiliatesUsers extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'affiliates_users';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}