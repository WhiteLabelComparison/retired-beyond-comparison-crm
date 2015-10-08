<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CstExisFamIncBenPoli extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_exis_fam_inc_ben_poli';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'FIB_Provider',
        'FIB_mntly_Sum_Asurd',
        'FIB_Term',
    ];

}