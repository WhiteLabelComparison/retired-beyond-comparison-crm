<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CstDebtDet extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_debt_det';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'Total_Debt',
        'No_of_Crdt_Crds',
        'No_of_Loans',
        'No_of_Store_Crds',
        'No_of_Hp_Agrmnts',
        'Total_Mntly_Incm',
        'Total_Mntly_Expndtr',
        'Total_Dsposbl_incm',
        'Insolvency_Practioner',
        'IP_Address',
        'IP_Phone',
        'IP_Email',
    ];

}