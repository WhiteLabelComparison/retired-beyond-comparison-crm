<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class LeadsPersonalCalls extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_personal_calls';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

    public function lead()
    {
        return $this->belongsTo(LeadsPersonal::class, 'UserID', 'lead');
    }

    public function caller()
    {
        return $this->belongsTo(AffiliateUser::class, 'caller', 'id');
    }

}