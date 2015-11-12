<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CstCurrMortDetail extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_curr_mort_details';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'Lender',
        'Mortgage_Acct',
        'Mortgage_Payment',
        'Outstanding_Mortgage',
        'Mort_Term',
        'Term_Remaining',
        'Mortgage_Type',
        'LTV',
        'Redmptn_Penalty',
        'Tie_In_Period',
    ];

}