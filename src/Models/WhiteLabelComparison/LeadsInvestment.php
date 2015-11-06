<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\WhiteLabelComparison;

use Illuminate\Database\Eloquent\Model;

class LeadsInvestment extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_investment';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}