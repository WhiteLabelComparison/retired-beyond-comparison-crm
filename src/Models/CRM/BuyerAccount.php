<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class BuyerAccount extends Model
{

    public $timestamp = false;

    protected $dates = [
        'DateCreated',
        'DateModified',
        'DateLastLeadBought',
    ];

    protected $primaryKey = 'BuyerAccountID';

    protected $table = 'buyeraccounts';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserName',
        'Password',
        'Email',
        'Email2',
        'FirstName',
        'LastName',
        'CompanyName',
        'Balance',
        'Paused',
        'DateCreated',
        'DateModified',
        'DateLastLeadBought',
        'LeadsBy',
        'LeadsPrice',
        'LeadsCap',
        'LeadsCapToday',
        'Priority',
    ];

    protected $hidden = [
        'Password'
    ];

}