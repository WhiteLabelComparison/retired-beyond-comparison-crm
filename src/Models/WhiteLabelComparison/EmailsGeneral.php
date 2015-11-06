<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\WhiteLabelComparison;

use Illuminate\Database\Eloquent\Model;

class EmailsGeneral extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'emails_general';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}