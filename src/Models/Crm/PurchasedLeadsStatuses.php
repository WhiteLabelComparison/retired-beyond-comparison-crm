<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class PurchasedLeadsStatuses extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'PurchasedLeadsStatusID';

    protected $table = 'purchasedleads';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

}