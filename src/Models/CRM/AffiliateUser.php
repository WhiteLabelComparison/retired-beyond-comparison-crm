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

}