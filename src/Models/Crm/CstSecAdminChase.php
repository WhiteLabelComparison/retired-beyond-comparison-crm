<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CstSecAdminChase extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_sec_admin_chase';

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

        if($this->Date_DIP != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_DIP),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_DIP),
            ];
        }

        if($this->Date_Fee_Agreed != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Fee_Agreed),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Fee_Agreed),
            ];
        }

        if($this->Date_Irrevs != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Irrevs),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Irrevs),
            ];
        }

        if($this->Date_IDD != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_IDD),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_IDD),
            ];
        }

        if($this->Date_KFI != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_KFI),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_KFI),
            ];
        }

        if($this->Date_DPP != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_DPP),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_DPP),
            ];
        }

        if($this->Date_Future_Relship != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Future_Relship),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Future_Relship),
            ];
        }

        if($this->Date_Docs_Sent != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Docs_Sent),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Docs_Sent),
            ];
        }

        if($this->Date_Photo_ID != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Photo_ID),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Photo_ID),
            ];
        }

        if($this->Date_Photo_ID != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Photo_ID),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Photo_ID),
            ];
        }

        if($this->Date_Utility_Bills != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Utility_Bills),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Utility_Bills),
            ];
        }

        if($this->Date_Payslips != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Payslips),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Payslips),
            ];
        }

        if($this->Date_Accounts != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Accounts),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Accounts),
            ];
        }

        if($this->Date_Mort_Rec != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Mort_Rec),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Mort_Rec),
            ];
        }

        if($this->Date_Pension_Statement != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Pension_Statement),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Pension_Statement),
            ];
        }

        if($this->Date_Full_App != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Full_App),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Full_App),
            ];
        }

        if($this->Date_Solicitor_Instrd != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Solicitor_Instrd),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Solicitor_Instrd),
            ];
        }

        if($this->Date_Survey_Instructed != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Survey_Instructed),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Survey_Instructed),
            ];
        }

        if($this->Date_Suitability_Letter != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Suitability_Letter),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Suitability_Letter),
            ];
        }

        if($this->Date_Offer_Made != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Offer_Made),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Offer_Made),
            ];
        }

        if($this->Date_Offer_Accepted != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Offer_Accepted),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Offer_Accepted),
            ];
        }

        if($this->Date_Completed != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Completed),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Completed),
            ];
        }

        if($this->Date_Completed != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Broker_Fee_Paid),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Broker_Fee_Paid),
            ];
        }

        if($this->Date_Proc_Fee_Paid != '0000-00-00') {
            $statuses[] = [
                'client_product_id' => $productId,
                'status_id' => null, //todo add real id
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', $this->Date_Proc_Fee_Paid),
                'updated_at' => date('Y-m-d H:i:s', $this->Date_Proc_Fee_Paid),
            ];
        }

    }

}