<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CstExisBnc extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_exis_bnc';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'Bildins_Covr_Amt',
        'Cntnts_Covr_Amt',
    ];

}