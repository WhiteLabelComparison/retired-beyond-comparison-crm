<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\WhiteLabelComparison;

use Illuminate\Database\Eloquent\Model;

class MortgageLenderRate extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'mortgage_lender_rate';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}