<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CstFlightReclaimAdmin extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_flight_reclaim_admin';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'prod_id',
        'ppi_Pack_Sent',
        'ppi_Pack_Sent_date',
        'ppi_Pack_Rtrnd',
        'ppi_Pack_Rtrnd_date',
        'ppi_Engemnt_Signd',
        'ppi_Engemnt_Signd_date',
        'ppi_Ltr_Authrty',
        'ppi_Ltr_Authrty_date',
        'ppi_Qu_Completd',
        'ppi_Qu_Completd_date',
        'ppi_SAR_Sent',
        'ppi_SAR_Sent_date',
        'ppi_Claim_Letter',
        'ppi_Claim_Letter_date',
        'ppi_Chase_1_notes',
        'ppi_Chase_2_notes',
        'ppi_Chase_3_notes',
        'ppi_Referred_FOS',
        'ppi_Referred_FOS_date',
        'ppi_Funds_by_Client',
        'ppi_Funds_by_Client_date',
        'ppi_Fee_expected',
        'ppi_Fee_received',
        'ppi_Fee_received_date',
        'ppi_Date_Fee_Taken',
        'ppi_ackd',
        'No_ppi',
        'ppi_Engemnt_Signd_date_rec',
        'ppi_Ltr_Authrty_date_rec',
        'debt_mngmnt_comp',
        'ppi_SAR_ack_date',
        'ppi_FOS_ack_date',
        'ppi_amt_award',
        'ppi_offer_date',
        'ppi_cheque_date',
        'ppi_cheque_ref',
        'Lender_Outcome',
    ];

    public function getStatuses($leadId, $createdDate = null)
    {
        $statuses = [];

        $statuses[] = [
            'client_product_id' => $this->prod_id,
            'status_id' => 20,
            'user_id' => null,
            'created_at' => date('Y-m-d H:i:s', strtotime($createdDate)),
            'updated_at' => date('Y-m-d H:i:s', strtotime($createdDate)),
        ];

        if($this->ppi_Ltr_Authrty_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 23,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Ltr_Authrty_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Ltr_Authrty_date)),
            ];
        }

        if($this->ppi_Ltr_Authrty_date_rec != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 24,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Ltr_Authrty_date_rec)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Ltr_Authrty_date_rec)),
            ];
        }

        // Claim Sent
        if($this->ppi_SAR_Sent_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 25,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_SAR_Sent_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_SAR_Sent_date)),
            ];
        }

        // Claim Acknowledged
        if($this->ppi_SAR_ack_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 26,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_SAR_ack_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_SAR_ack_date)),
            ];
        }

        // Legal action taken
        if($this->ppi_Referred_FOS_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 33, //todo add id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Referred_FOS_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Referred_FOS_date)),
            ];
        }

        // Offer Made
        if($this->ppi_offer_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 57,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_offer_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_offer_date)),
            ];
        }

        // Client got funds
        if($this->ppi_Funds_by_Client_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 36,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Funds_by_Client_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Funds_by_Client_date)),
            ];
        }

        // fee taken
        if($this->ppi_Date_Fee_Taken != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 38,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Date_Fee_Taken)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Date_Fee_Taken)),
            ];
        }

        if($this->ppi_Fee_received_date != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 37,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Fee_received_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Fee_received_date)),
            ];

            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 39,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Fee_received_date)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($this->ppi_Fee_received_date)),
            ];
        }

        return $statuses;
    }

}