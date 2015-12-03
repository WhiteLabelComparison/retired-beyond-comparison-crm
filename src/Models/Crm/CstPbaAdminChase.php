<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CstPbaAdminChase extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_pba_admin_chase';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

    public function getStatuses($productId, $createdDate = null)
    {
        $statuses = [];

        $statuses[] = [
            'client_product_id' => $productId,
            'status_id' => 20,
            'user_id' => null,
            'created_at' => date('Y-m-d H:i:s', strtotime($createdDate)),
            'updated_at' => date('Y-m-d H:i:s', strtotime($createdDate)),
        ];

        if($this->pba_Pack_Sent_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => 21,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->pba_Pack_Sent_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->pba_Pack_Sent_date)),
            ];
        }

        if($this->pba_Pack_Recd_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => 22,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->pba_Pack_Recd_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->pba_Pack_Recd_date)),
            ];
        }

        if($this->pba_Claim_Letter_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => 30,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->pba_Claim_Letter_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->pba_Pack_Recd_date)),
            ];
        }

        if($this->pba_Claim_ackd_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => 41,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->pba_Claim_Letter_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->pba_Claim_Letter_date)),
            ];
        }

        if($this->pba_sent_FOS_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => 33,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->pba_sent_FOS_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->pba_sent_FOS_date)),
            ];
        }

        if($this->pba_ackd_FOS_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => 34,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->pba_ackd_FOS_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->pba_ackd_FOS_date)),
            ];
        }

        if($this->pba_date_invoiced != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->pba_date_invoiced)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->pba_date_invoiced)),
            ];
        }

        if($this->pba_comm_recd_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => 38,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->pba_comm_recd_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->pba_comm_recd_date)),
            ];

            // Claim Complete
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => 39,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->pba_comm_recd_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->pba_comm_recd_date)),
            ];
        }
    }

}