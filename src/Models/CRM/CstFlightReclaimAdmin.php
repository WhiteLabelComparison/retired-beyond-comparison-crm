<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CstFlightReclaimAdmin extends Model
{

    public $timestamp = false;

    protected $dates = [
        'ppi_Pack_Sent_date',
        'ppi_Pack_Rtrnd_date',
        'ppi_Engemnt_Signd_date',
        'ppi_Qu_Completd_date',
        'ppi_SAR_Sent_date',
        'ppi_Referred_FOS_date',
        'ppi_Funds_by_Client_date',
        'ppi_Fee_received_date',
        'ppi_Date_Fee_Taken',
        'ppi_Engemnt_Signd_date_rec',
        'ppi_Ltr_Authrty_date_rec',
        'ppi_SAR_ack_date',
        'ppi_FOS_ack_date',
        'ppi_offer_date',
        'ppi_cheque_date',
    ];

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

}