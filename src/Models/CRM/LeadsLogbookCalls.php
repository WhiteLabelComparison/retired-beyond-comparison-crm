<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class LeadsLogbookCalls extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_logbook_calls';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

}