<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\WhiteLabelComparison;

use Illuminate\Database\Eloquent\Model;

class LeadsGuarantorCalls extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_guarantor_calls';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}