<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Wlc;

use Illuminate\Database\Eloquent\Model;

class LeadsLifeInsLog extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_life_ins_log';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}