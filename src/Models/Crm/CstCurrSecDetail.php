<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CstCurrSecDetail extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_curr_sec_details';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'Secured_Lender',
        'Loan_Acct',
        'Amount_Borrowed',
        'Amt_Outstanding',
        'Secured_Term',
        'Sec_Mnthly_Pymnt',
        'Sec_Repayment',
    ];

}