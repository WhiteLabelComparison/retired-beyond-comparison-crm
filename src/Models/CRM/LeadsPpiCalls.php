<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class LeadsPpiCalls extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_ppi_calls';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

}