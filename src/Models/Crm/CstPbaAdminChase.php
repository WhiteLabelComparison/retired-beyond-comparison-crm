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

    public function getStatuses($lastStatus, $createdDate = null)
    {
        $statuses = [];

        $statuses[] = [
            'client_product_id' => $this->prod_id,
            'status_id' => 20,
            'user_id' => null,
            'created_at' => date('Y-m-d H:i:s', strtotime($createdDate)),
            'updated_at' => date('Y-m-d H:i:s', strtotime($createdDate)),
        ];

        if($this->pba_Pack_Sent_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 23,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->pba_Pack_Sent_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->pba_Pack_Sent_date)),
            ];
        }

        if($this->pba_Pack_Recd_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 24,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->pba_Pack_Recd_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->pba_Pack_Recd_date)),
            ];
        }

        if($this->pba_Claim_Letter_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 32,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->pba_Claim_Letter_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->pba_Pack_Recd_date)),
            ];
        }

        if($this->pba_Claim_ackd_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 46,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->pba_Claim_Letter_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->pba_Claim_Letter_date)),
            ];
        }

        if($this->pba_sent_FOS_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 35,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->pba_sent_FOS_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->pba_sent_FOS_date)),
            ];
        }

        if($this->pba_ackd_FOS_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 36,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->pba_ackd_FOS_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->pba_ackd_FOS_date)),
            ];
        }

        if($this->pba_date_invoiced != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 39,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->pba_date_invoiced)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->pba_date_invoiced)),
            ];
        }

        if($this->pba_comm_recd_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 40,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->pba_comm_recd_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->pba_comm_recd_date)),
            ];

            // Claim Complete
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 42,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->pba_comm_recd_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->pba_comm_recd_date)),
            ];
        }

        if($lastStatus == 12) {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 44,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ];
        }

        return $statuses;
    }

}