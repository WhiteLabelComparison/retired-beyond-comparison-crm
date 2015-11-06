<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\WhiteLabelComparison;

use Illuminate\Database\Eloquent\Model;

class CstFlightReclaimAdmin extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_flight_reclaim_admin';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}