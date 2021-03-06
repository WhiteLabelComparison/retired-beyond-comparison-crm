<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CrossSellQstnsFixed extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cross_sell_qstns_fixed';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'column_name',
        'lead_type',
        'answer',
        'comparison',
        'c_life',
        'c_mort',
        'c_pen',
        'c_debt',
        'c_ppi',
        'c_fli',
        'c_per',
        'c_pay',
        'c_log',
        'c_gua',
        'c_home',
        'c_pba',
        'c_sur',
    ];

}