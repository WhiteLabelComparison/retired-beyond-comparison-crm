<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class Quotes2 extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'QuoteID';

    protected $table = 'quotes_2';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

}