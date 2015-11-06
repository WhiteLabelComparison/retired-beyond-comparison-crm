<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CallmeRes extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'callme_res';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'phone',
        'FirstName',
        'LastName',
        'rtime',
        'response',
    ];

}