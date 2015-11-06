<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CstHiCoverReq extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_hi_cover_req';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'Type',
        'Buildings_excess',
        'Buildings_Voluntary',
        'Buildings_Accidental',
        'Contents_level',
        'Contents_excess',
        'Contents_Voluntary',
        'Contents_Accidental',
        'Legal_Protection',
        'Personal_possessions',
    ];

}