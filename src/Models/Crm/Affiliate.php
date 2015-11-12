<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class Affiliate extends Model
{


    public $timestamp = false;

    protected $table = 'affiliates';

    protected $primaryKey = 'id';

    protected $dates = [];

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'username',
        'password',
        'api_key',
        'email',
        'Partner_Id',
        'introducerid',
        'commission',
        'billing_period',
        'leads_sales',
    ];

}