<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CstIncomeExpen extends Model
{
    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_income_expen';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'InE_Total2_incm',
        'InE_Mortgage',
        'InE_Sec_Charge',
        'InE_cc_Payments',
        'InE_Loan_Pymnts',
        'InE_Rent',
        'InE_Council_tax',
        'InE_Electricity',
        'InE_Gas_Heating',
        'InE_Water_Rates',
        'InE_TV_Licence',
        'InE_Sky_Cable',
        'InE_Broadband',
        'InE_Home_Phone',
        'InE_Ttl_Mob_Pne',
        'InE_Car_HP',
        'InE_Car_Ins',
        'InE_Car_Rung_Csts',
        'InE_Road_Tax',
        'InE_Life_Policies',
        'InE_BnC_Ins',
        'InE_Pensions',
        'InE_Endowments',
        'InE_Housekeeping',
        'Ine_Clothing',
        'Ine_Pets',
        'Ine_Other1_Expen',
        'Ine_Other2_Expen',
        'Ine_Other3_Expen',
        'Ine_Budget_To_Meet',
        'Ine_Mntly_Buffer_Zone',
        'Ine_Foreseeable_Fut',
        'Ine_Detail',
    ];
}