<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CstLogbookAdminChase extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_logbook_admin_chase';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'prod_id',
        'DIP',
        'Date_DIP',
        'Fee_Agreement',
        'Date_Fee_Agreed',
        'Irrevs',
        'Date_Irrevs',
        'IDD',
        'Date_IDD',
        'KFI',
        'Date_KFI',
        'DPP',
        'Date_DPP',
        'Future_Relship',
        'Date_Future_Relship',
        'Docs_Sent',
        'Date_Docs_Sent',
        'Photo_ID',
        'Date_Photo_ID',
        'Utility_Bills',
        'Date_Utility_Bills',
        'Payslips',
        'Date_Payslips',
        'Three_y_Accounts',
        'Date_Accounts',
        'SA302_Rec',
        'Date_SA302_Rec',
        'Bank_Statements',
        'Date_Bank_Statements',
        'Date_Mort_Rec',
        'Pension_Statement',
        'Date_Pension_Statement',
        'Full_App',
        'Date_Full_App',
        'Land_Reg',
        'Date_Land_Reg',
        'Solicitor_Instrd',
        'Date_Solicitor_Instrd',
        'Solicitor_Company',
        'Solicitor_Contact',
        'Survey_Instructed',
        'Date_Survey_Instructed',
        'Suitability_Letter',
        'Date_Suitability_Letter',
        'Offer_Made',
        'Date_Offer_Made',
        'Offer_Accepted',
        'Date_Offer_Accepted',
        'Completed',
        'Date_Completed',
        'Broker_Fee_Paid',
        'Date_Broker_Fee_Paid',
        'Proc_Fee_Paid',
        'Date_Proc_Fee_Paid',
        'Admn_Expctd_Cmpltn',
        'Mort_Chase_Notes',
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

        if($this->Date_DIP != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 49,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_DIP),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_DIP),
            ];
        }

        if($this->Date_Fee_Agreed != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 46,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Fee_Agreed),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Fee_Agreed),
            ];
        }

//        if($this->Date_Irrevs != '0000-00-00') {
//            $statuses[] = [
//
//                'status_id' => null, //todo add real id
//                'user_id' => null,
//                'created_at' => date('Y-m-d H:i:s', $this->Date_Irrevs),
//                'updated_at' => date('Y-m-d H:i:s', $this->Date_Irrevs),
//            ];
//        }

        if($this->Date_IDD != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_IDD),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_IDD),
            ];
        }

        if($this->Date_KFI != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 48,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_KFI),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_KFI),
            ];
        }

        if($this->Date_DPP != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_DPP),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_DPP),
            ];
        }

//        if($this->Date_Future_Relship != '0000-00-00') {
//            $statuses[] = [
//
//                'status_id' => null, //todo add real id
//                'user_id' => null,
//                'created_at' => date('Y-m-d H:i:s', $this->Date_Future_Relship),
//                'updated_at' => date('Y-m-d H:i:s', $this->Date_Future_Relship),
//            ];
//        }

        if($this->Date_Docs_Sent != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 50,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Docs_Sent),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Docs_Sent),
            ];
        }

//        if($this->Date_Photo_ID != '0000-00-00') {
//            $statuses[] = [
//
//                'status_id' => null, //todo add real id
//                'user_id' => null,
//                'created_at' => date('Y-m-d H:i:s', $this->Date_Photo_ID),
//                'updated_at' => date('Y-m-d H:i:s', $this->Date_Photo_ID),
//            ];
//        }
//
//        if($this->Date_Photo_ID != '0000-00-00') {
//            $statuses[] = [
//
//                'status_id' => null, //todo add real id
//                'user_id' => null,
//                'created_at' => date('Y-m-d H:i:s', $this->Date_Photo_ID),
//                'updated_at' => date('Y-m-d H:i:s', $this->Date_Photo_ID),
//            ];
//        }
//
//        if($this->Date_Utility_Bills != '0000-00-00') {
//            $statuses[] = [
//
//                'status_id' => null, //todo add real id
//                'user_id' => null,
//                'created_at' => date('Y-m-d H:i:s', $this->Date_Utility_Bills),
//                'updated_at' => date('Y-m-d H:i:s', $this->Date_Utility_Bills),
//            ];
//        }
//
//        if($this->Date_Payslips != '0000-00-00') {
//            $statuses[] = [
//
//                'status_id' => null, //todo add real id
//                'user_id' => null,
//                'created_at' => date('Y-m-d H:i:s', $this->Date_Payslips),
//                'updated_at' => date('Y-m-d H:i:s', $this->Date_Payslips),
//            ];
//        }
//
//        if($this->Date_Accounts != '0000-00-00') {
//            $statuses[] = [
//
//                'status_id' => null, //todo add real id
//                'user_id' => null,
//                'created_at' => date('Y-m-d H:i:s', $this->Date_Accounts),
//                'updated_at' => date('Y-m-d H:i:s', $this->Date_Accounts),
//            ];
//        }
//
//            if($this->Date_Mort_Rec != '0000-00-00') {
//            $statuses[] = [
//
//                'status_id' => null, //todo add real id
//                'user_id' => null,
//                'created_at' => date('Y-m-d H:i:s', $this->Date_Mort_Rec),
//                'updated_at' => date('Y-m-d H:i:s', $this->Date_Mort_Rec),
//            ];
//        }

//        if($this->Date_Pension_Statement != '0000-00-00') {
//            $statuses[] = [
//
//                'status_id' => null, //todo add real id
//                'user_id' => null,
//                'created_at' => date('Y-m-d H:i:s', $this->Date_Pension_Statement),
//                'updated_at' => date('Y-m-d H:i:s', $this->Date_Pension_Statement),
//            ];
//        }

        if($this->Date_Full_App != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 51,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Full_App),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Full_App),
            ];
        }

        if($this->Date_Land_Reg != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 52,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Full_App),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Full_App),
            ];
        }

        if($this->Date_Solicitor_Instrd != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 53,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Solicitor_Instrd),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Solicitor_Instrd),
            ];
        }

        if($this->Date_Survey_Instructed != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 54,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Survey_Instructed),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Survey_Instructed),
            ];
        }

        if($this->Date_Suitability_Letter != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 55,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Suitability_Letter),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Suitability_Letter),
            ];
        }

        if($this->Date_Offer_Made != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 56,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Offer_Made),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Offer_Made),
            ];
        }

        if($this->Date_Offer_Accepted != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 57,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Offer_Accepted),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Offer_Accepted),
            ];
        }

        if($this->Date_Completed != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 40,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Completed),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Completed),
            ];
        }

        if($this->Date_Proc_Fee_Paid != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $this->prod_id,
                'status_id' => 39,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Proc_Fee_Paid),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Proc_Fee_Paid),
            ];
        }

        return $statuses;

    }

}