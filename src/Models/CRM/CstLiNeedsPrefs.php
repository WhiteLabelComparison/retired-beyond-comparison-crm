<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CstLiNeedsPrefs extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_li_needs_prefs';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'det_clrd_if_die',
        'impact_1',
        'resolve_1',
        'review_1',
        'std_of_livin_if_die',
        'std_of_livin_if_ill',
        'impact_2',
        'resolve_2',
        'review_2',
        'resn_for_nt_rwng_2',
        'mntain_pymnt_if_ill',
        'impact_3',
        'resolve_3',
        'review_3',
        'resn_for_nt_rwng_3',
        'maintn_lyfst_if_ill',
        'impact_4',
        'resolve_4',
        'review_4',
        'resn_for_nt_rwng_4',
    ];

}