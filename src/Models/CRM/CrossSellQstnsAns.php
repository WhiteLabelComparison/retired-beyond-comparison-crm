<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CrossSellQstnsAns extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cross_sell_qstns_ans';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'question',
        'answer',
        'UserID',
        'time_saved',
    ];

}