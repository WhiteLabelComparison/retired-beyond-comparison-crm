<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class LeadsCalls extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_calls';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

    public function lead()
    {
        return $this->belongsTo(Leads2::class, 'UserID', 'lead');
    }

    public function caller()
    {
        return $this->belongsTo(AffiliateUser::class, 'caller', 'id');
    }

}