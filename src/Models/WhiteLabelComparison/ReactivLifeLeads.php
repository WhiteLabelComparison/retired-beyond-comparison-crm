<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\WhiteLabelComparison;

use Illuminate\Database\Eloquent\Model;

class ReactivLifeLeads extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'reactiv_life_leads';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}