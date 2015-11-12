<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CommissionBri extends Model
{

    public $timestamp = false;

    protected $dates = [
        'premDueDate',
        'paidDate',
        'statementDate',
    ];

    protected $primaryKey = 'id';

    protected $table = 'commission_bri';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'cimport_id',
        'status',
        'errorMsg',
        'policyNo',
        'firstName',
        'surName',
        'premium',
        'frequency',
        'premDueDate',
        'commission',
        'type',
        'clawback',
        'importStatus',
        'paidDate',
        'Ref',
        'rep',
        'statementNumber',
        'statementDate',
        'accountNo',
    ];

}