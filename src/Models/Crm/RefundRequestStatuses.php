<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class RefundRequestStatuses extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'RefundRequestStatusID';

    protected $table = 'refundrequeststatuses';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

}