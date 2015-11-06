<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class PurchasedLeads extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'PurchasedLeadID';

    protected $table = 'purchasedleads';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

}