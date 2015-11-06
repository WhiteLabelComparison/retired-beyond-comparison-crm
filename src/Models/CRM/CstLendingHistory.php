<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CstLendingHistory extends Model
{
    public $timestamp = false;

    protected $dates = [
        'Date_Sec_Loan_Takn',
    ];

    protected $primaryKey = 'id';

    protected $table = 'cst_lending_history';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'No_of_Exis_Mort',
        'No_Of_Sec_Loans',
        'No_Of_Crdt_Cards',
        'No_Of_Unsec_Loans',
        'Curr_Mort_Lender',
        'Mort_Type',
        'Mort_Acc',
        'Msd_Pymnts_In_12_Mnts',
        'Amt_Brwd',
        'Outstndg_Mort',
        'Original_Term',
        'Outstanding_Term',
        'Existin_Mort_Pymnt',
        'Rdmptn_Penlty',
        'Sec_Lender_Nme',
        'Sec_Loans_Bal',
        'Term_Of_Sec_Loan',
        'Sec_Mntly_pymnt',
        'Reason_For_Sec_Loan',
        'Mssd_Unsec_Loan_Pymnts',
        'Date_Sec_Loan_Takn',
        'Unsec1_Lender',
        'Unsec1_Bal',
        'Loan_1_Type',
        'Unsec1_Mntly_Pymnt',
        'Unsec2_Lender',
        'Unsec2_Bal',
        'Loan_2_Type',
        'Unsec2_Mntly_Pymnt',
        'Unsec3_Lender',
        'Unsec3_Bal',
        'Loan_3_Type',
        'Unsec3_Mntly_Pymnt',
        'Unsec4_Lender',
        'Unsec4_Bal',
        'Loan_4_Type',
        'Unsec4_Mntly_Pymnt',
        'CrdtCard_1_Compny',
        'CrdtCard_1_Bal',
        'CrdtCard_2_Compny',
        'CrdtCard_2_Bal',
        'CrdtCard_3_Compny',
        'CrdtCard_3_Bal',
        'CrdtCard_4_Compny',
        'CrdtCard_4_Bal',
        'Totl_Mntly_Morts',
        'Totl_Mntly_Sec_Pymnts',
        'Totl_Mntly_crdtcrds',
        'Totl_Mntly_Unsec_Pymnts',
        'Totl_Mntly_Pymnts',
    ];
}