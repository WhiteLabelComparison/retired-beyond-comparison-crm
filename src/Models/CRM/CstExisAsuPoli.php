<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CstExisAsuPoli extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_exis_asu_poli';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'ASU_Provider',
        'ASU_Term',
        'ASU_mntly_amt',
        'ASU_Deferred_Period',
    ];

}