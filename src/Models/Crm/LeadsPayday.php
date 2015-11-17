<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class LeadsPayday extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_payday';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

    public function customer()
    {
        return $this->hasOne(Customers::class, 'cUserID', 'UserID');
    }

    public function notes()
    {
        return $this->hasMany(LeadsPaydayCalls::class, 'lead', 'UserID');
    }

    public function adviser()
    {
        return $this->belongsTo(AffiliateUser::class, 'Adviser', 'username');
    }
}