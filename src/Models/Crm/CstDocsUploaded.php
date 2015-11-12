<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CstDebtDet extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_docs_uploaded';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'time_uploaded',
        'name',
        'display_name',
        'agent',
        'doc_type',
    ];

}