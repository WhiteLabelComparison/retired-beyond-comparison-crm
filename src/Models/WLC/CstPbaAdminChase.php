<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Wlc;

use Illuminate\Database\Eloquent\Model;

class CstPbaAdminChase extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_pba_admin_chase';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}