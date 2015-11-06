<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\WhiteLabelComparison;

use Illuminate\Database\Eloquent\Model;

class UnsecuredLenderRate extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'unsecured_lender_rate';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}