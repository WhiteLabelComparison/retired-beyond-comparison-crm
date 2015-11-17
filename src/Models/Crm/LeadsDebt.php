<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use CaffeineAddicts\BeyondWhiteLabelCrm\Models\Wlc\LeadsDebtCalls;
use Illuminate\Database\Eloquent\Model;

class LeadsDebt extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_debt';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

    public function customer()
    {
        return $this->hasOne(Customers::class, 'cUserID', 'UserID');
    }

    public function notes()
    {
        return $this->hasMany(LeadsDebtCalls::class, 'lead', 'UserID');
    }

    public function adviser()
    {
        return $this->belongsTo(AffiliateUser::class, 'Adviser', 'username');
    }
}