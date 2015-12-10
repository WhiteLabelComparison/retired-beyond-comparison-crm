<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CstPpiAdmin extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_ppi_admin';

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

        if($this->ppi_Pack_Sent_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 23,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Pack_Sent_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Pack_Sent_date)),
            ];
        }

        if($this->ppi_Pack_Rtrnd_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 24,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Pack_Rtrnd_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Pack_Rtrnd_date)),
            ];
        }

        if($this->ppi_Ltr_Authrty_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 25,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Ltr_Authrty_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Ltr_Authrty_date)),
            ];
        }

        if($this->ppi_Ltr_Authrty_date_rec != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 26,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Ltr_Authrty_date_rec)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Ltr_Authrty_date_rec)),
            ];
        }


        if($this->ppi_SAR_Sent_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 27,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Ltr_Authrty_date_rec)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Ltr_Authrty_date_rec)),
            ];
        }

        if($this->ppi_SAR_ack_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 28,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_SAR_ack_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_SAR_ack_date)),
            ];
        }

        // sar fee
        if($this->ppi_cheque_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 29,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_cheque_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_cheque_date)),
            ];
        }

        if(boolval($this->ppi_ackd)) {

            $last = end($statuses);

            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 34,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($last['created_at'])),
                'updated_at' => date('Y-m-d H:i:s', strtotime($last['updated_at'])),
            ];
        }

        if(boolval($this->No_ppi)) {

            $last = end($statuses);

            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 33,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($last['created_at'])),
                'updated_at' => date('Y-m-d H:i:s', strtotime($last['updated_at'])),
            ];
        }

        if($this->ppi_Claim_Letter_date != '0000-00-00') {

            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 30,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Claim_Letter_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Claim_Letter_date)),
            ];
        }

        if($this->ppi_Referred_FOS_date != '0000-00-00') {

            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 35,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Referred_FOS_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Referred_FOS_date)),
            ];
        }

        if($this->ppi_FOS_ack_date != '0000-00-00') {

            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 36,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_FOS_ack_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_FOS_ack_date)),
            ];
        }

        // offer awarded
        if($this->ppi_offer_date != '0000-00-00') {

            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 37,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_offer_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_offer_date)),
            ];
        }

        if($this->ppi_Funds_by_Client_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 38,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Funds_by_Client_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Funds_by_Client_date)),
            ];
        }

        if($this->ppi_Date_Fee_Taken != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 40,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Date_Fee_Taken)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Date_Fee_Taken)),
            ];
        }

        if($this->ppi_Fee_received_date != '0000-00-00') {

            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 41,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Fee_received_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Fee_received_date)),
            ];
        }

        if($lastStatus == 14) {
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