<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class LeadsMortgage extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_mortgage';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

    public function customer()
    {
        return $this->hasOne(Customers::class, 'cUserID', 'UserID');
    }

    public function notes()
    {
        return $this->hasMany(LeadsMortgageCalls::class, 'lead', 'UserID');
    }

    public function adviser()
    {
        return $this->belongsTo(AffiliateUser::class, 'username', 'Adviser');
    }

}