<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Wlc;

use Illuminate\Database\Eloquent\Model;

class LeadsDebtManagementLog extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_debt_management_log';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}