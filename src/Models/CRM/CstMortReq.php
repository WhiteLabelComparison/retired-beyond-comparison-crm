<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CstMortReq extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_mort_req';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'Resn_For_Borwin',
        'No_Of_Applicants',
        'Amount_Required',
        'Current_Value',
        'Amt_Of_Deposit',
        'Source_Of_Deposit',
        'Term_Required',
        'Reason_For_Term',
        'Prod_Type_Preference',
        'New_LTV',
        'upper_limit',
        'Reason_upper_limit',
        'interest_rate',
        'Resn_interest_rate',
        'Fix_mortgage',
        'Resn_Fix_mortgage',
        'fixed_term',
        'Resn_fixed_term',
        'variable_interest',
        'Res_variable_interest',
        'tracker_term',
        'Res_tracker_term',
        'initial_cash_sum',
        'Resn_initial_cash_sum',
        'discount_repymnts',
        'Resn_discnt_repymnts',
        'No_tie_ins',
        'full_repayment',
        'Resn_full_repayment',
        'part_repayment',
        'Resn_part_repayment',
        'vary_repayment',
        'Resn_vary_repayment',
        'Certainty_mort',
        'Resn_Certainty_mort',
        'HLC',
        'Speed_of_Mort',
        'Resn_for_speed',
        'Add_Fees_Loan',
        'Resn_Add_Fees_Loan',
        'Description',
        'funds_available',
        'clarification',
        'funds_to_repay',
        'Details',
        'Moving_House',
        'Change_Occupation',
        'Cng_Ocupatn_det',
    ];
}