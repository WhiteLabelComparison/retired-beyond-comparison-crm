<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Wlc;

use Illuminate\Database\Eloquent\Model;

class LeadsFlightReclaimCalls extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_flight_reclaim_calls';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}