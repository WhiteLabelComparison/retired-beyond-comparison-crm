<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CommissionPru extends Model
{

    public $timestamp = false;

    protected $dates = [
        'policyDoc',
        'settlementDate',
    ];

    protected $primaryKey = 'id';

    protected $table = 'commission_pru';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'cimport_id',
        'status',
        'errorMsg',
        'agencyNumber',
        'agencyName',
        'fcaNumber',
        'fcaNumber',
        'type',
        'RIName',
        'benefitName',
        'commissionType',
        'transactionType',
        'policyNumber',
        'policyDoc',
        'lifeAssuredName',
        'amount',
        'benefitPremium',
        'settlementDate',
        'settlementReferenceNumber',
    ];

}