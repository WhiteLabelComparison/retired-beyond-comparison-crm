<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CstCreditHistory extends Model
{

    public $timestamp = false;

    protected $dates = [
        'Default_Date',
        'Default_2_Date',
        'Default_3_Date',
        'CCJ_Date',
        'CCJ_Settled_Date',
        'Debt_Mngmnt_strt_date',
        'Date_DM_lst_rwd',
        'Debt_Mngmnt_strt_date',
        'CCJ_4_Date',
        'IVA_Start_Date',
        'Date_of_Bnkrpcy',
        'Dschrg_Date_Frm_Bnkrpcy',
    ];

    protected $primaryKey = 'id';

    protected $table = 'cst_credit_history';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'Credit_Profile',
        'Curr_lvl_of_debt',
        'Any_Defaults',
        'No_of_Defaults',
        'Any_ccjs',
        'In_DMP',
        'In_IVA',
        'In_Trust_Deed',
        'Evr_Declrd_Bnkrpt',
        'Default_Against',
        'Default_Balance',
        'Dfult_Cmpny_Nme',
        'Default_Date',
        'Default_2_Against',
        'Default_2_Balance',
        'Dfult_2_Cmpny_Nme',
        'Default_2_Date',
        'Default_3_Against',
        'Default_3_Balance',
        'Dfult_3_Cmpny_Nme',
        'Default_3_Date',
        'Default_4_Against',
        'Default_4_Balance',
        'Dfult_4_Cmpny_Nme',
        'Default_4_Date',
        'CCJ_Against',
        'CCJ_Balance',
        'CCJ_Cmpny_Nme',
        'CCJ_Date',
        'CCJ_Settled',
        'CCJ_Settled_Date',
        'CCJ_2_Against',
        'CCJ_2_Balance',
        'CCJ_2_Cmpny_Nme',
        'CCJ_2_Date',
        'CCJ_2_Settled',
        'CCJ_2_Settled_Date',
        'Debt_Mngmnt_blnce',
        'Debt_Mngmnt_strt_date',
        'Date_DM_lst_rwd',
        'No_of_DM_Crditrs',
        'Insolvancy_Practitioner',
        'IVA_mntly_paymnt',
        'CCJ_3_Against',
        'CCJ_3_Balance',
        'CCJ_3_Cmpny_Nme',
        'CCJ_3_Date',
        'CCJ_3_Settled',
        'CCJ_3_Settled_Date',
        'CCJ_4_Against',
        'CCJ_4_Balance',
        'CCJ_4_Cmpny_Nme',
        'CCJ_4_Date',
        'CCJ_4_Settled',
        'CCJ_4_Settled_Date',
        'DM_managed_by',
        'DM_mntly_paymnt',
        'IVA_Start_Date',
        'IVA_Balance',
        'No_of_IVA Crditrs',
        'Date_of_Bnkrpcy',
        'Dschrg_Date_Frm_Bnkrpcy',
    ];

}