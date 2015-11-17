<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class LeadsFlightReclaimCalls extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_flight_reclaim_calls';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

    public function lead()
    {
        return $this->belongsTo(LeadsFlightReclaim::class, 'UserID', 'lead');
    }

    public function user()
    {
        return $this->belongsTo(AffiliateUser::class, 'caller', 'id');
    }

}