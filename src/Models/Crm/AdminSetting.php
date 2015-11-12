<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class AdminSetting extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'setting_id';

    protected $table = 'admin_settings';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'lead_wait',
        'setting_value',
    ];

}