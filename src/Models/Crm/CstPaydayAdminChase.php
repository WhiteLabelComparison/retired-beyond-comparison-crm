<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CstPaydayAdminChase extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_payday_admin_chase';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

    public function getStatuses($leadId, $createdDate = null)
    {


        return [
            [
                'client_product_id' => $this->prod_id,
                'status_id' => 20,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($createdDate)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($createdDate)),
            ],
        ];
    }

}