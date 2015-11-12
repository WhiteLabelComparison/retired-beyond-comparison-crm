<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Wlc;

use Illuminate\Database\Eloquent\Model;

class LeadsSecuredLoanLog extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_secured_loan_log';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}