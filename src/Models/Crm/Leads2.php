<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class Leads2 extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_2';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

    public function customer()
    {
        return $this->hasOne(Customers::class, 'cUserID', 'UserID');
    }

    public function notes()
    {
        return $this->hasMany(LeadsCalls::class, 'lead', 'UserID');
    }

    public function adviser()
    {
        return $this->belongsTo(AffiliateUser::class, 'Adviser', 'username');
    }

    public function needsAndPreferences()
    {
        return $this->hasONe(CstLiNeedsPrefs::class, 'cUserID', 'UserID');
    }

    public function coverRequested()
    {
        return $this->hasOne(CstLiCoverReq::class, 'cUserID', 'UserID');
    }

    public function existingLifePolicy()
    {
        return $this->hasMany(CstExisLifePoliDet::class, 'cUserID', 'UserID');
    }


}