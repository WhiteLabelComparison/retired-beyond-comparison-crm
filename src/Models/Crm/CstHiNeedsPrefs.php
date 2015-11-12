<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CstHiNeedsPrefs extends Model
{

    public $timestamps = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_hi_needs_prefs';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'sufficient_protection',
        'resolve',
        'review',
        'reasor',
    ];

}