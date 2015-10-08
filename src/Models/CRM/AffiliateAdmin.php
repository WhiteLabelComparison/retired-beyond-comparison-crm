<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class AffiliateAdmin extends Model
{

    public $timestamp = false;

    protected $table = 'affiliates_admin';

    protected $primaryKey = 'id';

    protected $dates = [];

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'username',
        'password',
        'email',
    ];

}