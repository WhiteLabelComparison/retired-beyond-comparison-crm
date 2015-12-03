<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CstPensionAdminChase extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_pension_admin_chase';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

    public function getStatuses()
    {
        return [];
    }

}