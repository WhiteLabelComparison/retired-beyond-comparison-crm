<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class DoNotCall extends Model
{

    public $timestamp = false;

    protected $dates = ['date_added'];

    protected $primaryKey = 'id';

    protected $table = 'do_not_call';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

}