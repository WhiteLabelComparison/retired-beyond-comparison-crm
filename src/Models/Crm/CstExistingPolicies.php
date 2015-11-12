<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CstExistingPolicies extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_existing_policies';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'Life_Insurance',
        'No_of_Life_Polics',
        'Crtcl_Illns_Covr',
        'No_of_Crtcl_Illns_Polics',
        'ASU_Cover',
        'No_of_ASU_Polics',
        'Income_Protection',
        'No_of_Incm_Prtctn_Polics',
        'Over_50s_Plan',
        'No_of_Over_50s_Plans',
        'Fmly_Incm_Bnft_Covr',
        'B_n_C_Covr',
    ];

}