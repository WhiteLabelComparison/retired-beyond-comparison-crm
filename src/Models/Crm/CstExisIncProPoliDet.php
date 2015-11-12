<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class cstExisIncProPoliDet extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_exis_inc_pro_poli_det';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'Incm_Prtctn_Prvidr',
        'Incm_Prtctn_term',
        'Incm_Prtctn_mntly_amt',
        'IP_Deferred_Period',
    ];

}