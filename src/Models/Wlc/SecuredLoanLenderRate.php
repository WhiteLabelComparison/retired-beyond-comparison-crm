<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Wlc;

use Illuminate\Database\Eloquent\Model;

class SecuredLoanLenderRate extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'secured_loan_lender_rate';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}