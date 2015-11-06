<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CstPersonalAdminChase extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_personal_admin_chase';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

}