<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CrossSellQstns extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cross_sell_qstns';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'question',
        'field_type',
        'field_json',
        'sel_csq_json',
        'answer',
        'comparison',
        's_life',
        's_mort',
        's_sec',
        's_pen',
        's_debt',
        's_ppi',
        's_ppi',
        's_fli',
        's_per',
        's_pay',
        's_gua',
        's_log',
        's_home',
        's_pba',
        's_sur',
        'c_life',
        'c_mort',
        'c_sec',
        'c_pen',
        'c_debt',
        'c_ppi',
        'c_ppi',
        'c_fli',
        'c_per',
        'c_pay',
        'c_gua',
        'c_log',
        'c_home',
        'c_pba',
        'c_sur',
        'csq_status',
    ];

}