<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CrossSellQstnsFixed extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cross_sell_qstns_sel';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'question',
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