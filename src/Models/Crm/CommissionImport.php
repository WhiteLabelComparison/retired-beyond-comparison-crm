<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CommissionsImport extends Model
{

    public $timestamp = false;

    protected $dates = [
        'uploadedOn',
    ];

    protected $primaryKey = 'id';

    protected $table = 'commissions_import';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'fileName',
        'importType',
        'uploadedBy',
        'refNo',
        'status',
        'errorMsg',
        'uploadedOn',
        'isDeleted',
    ];

}