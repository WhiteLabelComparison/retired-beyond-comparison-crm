<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CstExisOverFifPlan extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_exis_over_fif_plan';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'Over_50s_Provider',
        'Over_50s_Sum_Asurd',
    ];

}