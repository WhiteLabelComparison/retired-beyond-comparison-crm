<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CstCurrentAsset extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_current_assets';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'App1_Home',
        'App2_Home',
        'App1_Other_Property',
        'App2_Other_Property',
        'App1_Cash',
        'App2_Cash',
        'App1_Invstmnt_Bnds',
        'App2_Invstmnt_Bnds',
        'App1_Pnsn_Fnds',
        'App2_Pnsn_Fnds',
        'App1_Shares',
        'App2_Shares',
        'App1_UT',
        'App2_UT',
        'App1_ISA',
        'App2_ISA',
        'App1_Busns_Asts',
        'App2_Busns_Asts',
        'App1_Othr_Asts',
        'App2_Othr_Asts',
        'App1_Total_Asts',
        'App2_Total_Asts',
    ];

}