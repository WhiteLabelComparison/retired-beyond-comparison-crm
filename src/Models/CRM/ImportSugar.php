<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class ImportSugar extends Model
{

    public $timestamp = false;

    protected $dates = ['dob'];

    protected $primaryKey = 'id';

    protected $table = 'import_sugar';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

}