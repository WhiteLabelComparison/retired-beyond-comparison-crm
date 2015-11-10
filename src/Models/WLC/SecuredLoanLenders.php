<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Wlc;

use Illuminate\Database\Eloquent\Model;

class SecuredLoanLenders extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'secured_loan_lenders';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}