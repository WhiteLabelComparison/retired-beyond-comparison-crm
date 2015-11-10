<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Wlc;

use Illuminate\Database\Eloquent\Model;

class CstPpiAdmin extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_ppi_admin';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}