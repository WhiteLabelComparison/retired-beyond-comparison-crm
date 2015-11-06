<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CstLiCoverReq extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_lending_history';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'mortgage_amt',
        'Existing_cover_life',
        'Shortfall_Life',
        'Existing_cover_ill',
        'Shortfall_ill',
        'death_anul_incm',
        'how_long_required',
        'Reason',
        'how_long_curr_save',
        'Exist_cover_benefit',
        'Shortfall_benefit',
        'lump_sum_cover',
        'Existing_Lump_Sum',
        'Shortfall_Lump_Sum',
        'immediate_capital',
        'Policy_Type',
        'Sum_Assured',
        'Term',
        'Operating_Type',
    ];

}