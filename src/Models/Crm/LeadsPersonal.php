<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class LeadsPersonal extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_personal';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

    public function customer()
    {
        return $this->hasOne(Customers::class, 'cUserID', 'UserID');
    }

    public function notes()
    {
        return $this->hasMany(LeadsPersonalCalls::class, 'lead', 'UserID');
    }

    public function adviser()
    {
        return $this->belongsTo(AffiliateUser::class, 'username', 'Adviser');
    }
}