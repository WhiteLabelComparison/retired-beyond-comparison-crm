<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\WhiteLabelComparison;

use Illuminate\Database\Eloquent\Model;

class LeadsEnergyLog extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'Leads_energy_log';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}