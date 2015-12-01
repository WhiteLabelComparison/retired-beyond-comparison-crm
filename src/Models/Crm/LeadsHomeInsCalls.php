<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class LeadsHomeInsCalls extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_home_ins_calls';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

    public function lead()
    {
        return $this->belongsTo(LeadsHomeIns::class, 'UserID', 'lead');
    }

    public function caller()
    {
        return $this->belongsTo(AffiliateUser::class, 'caller', 'id');
    }

}