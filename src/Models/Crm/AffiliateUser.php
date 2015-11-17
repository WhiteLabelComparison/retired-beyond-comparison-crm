<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class AffiliateUser extends Model
{

    public $timestamp = false;

    protected $table = 'affiliates_users';

    protected $primaryKey = 'id';

    protected $dates = [];

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'username',
        'password',
        'email',
        'first_name',
        'last_name',
        'sales_admin',
        'sales_admin_s1',
        'sales_admin_s2',
        'refund',
        'customers',
        'sale_save',
        'extension',
    ];

    protected $hidden = [
        'passowrd',
    ];

    public function leads2()
    {
        return $this->hasMany(Leads2::class, 'Adviser', 'username');
    }

    public function leadsDebt()
    {
        return $this->hasMany(LeadsDebt::class, 'Adviser', 'username');
    }

    public function leadsFlightReclaim()
    {
        return $this->hasMany(LeadsFlightReclaim::class, 'Adviser', 'username');
    }

    public function leadsGuarantor()
    {
        return $this->hasMany(LeadsGuarantor::class, 'Adviser', 'username');
    }

    public function leadsLogbook()
    {
        return $this->hasMany(LeadsLogbook::class, 'Adviser', 'username');
    }

}