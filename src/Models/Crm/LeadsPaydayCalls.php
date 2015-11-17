<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class LeadsPaydayCalls extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_payday_calls';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

    public function lead()
    {
        return $this->belongsTo(LeadsPayday::class, 'UserID', 'lead');
    }

    public function caller()
    {
        return $this->belongsTo(AffiliateUser::class, 'caller', 'id');
    }
}