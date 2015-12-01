<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CustomerProducts extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'customer_products';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

    public function customers()
    {
        return $this->belongsToMany(Customers::class, 'cst_prod_match', 'pid', 'cid');
    }

    public function adminChase($userId, $createdDate = null)
    {

        $statuses = [
            [
                'client_product_id' => null,
                'status_id' => 20,
                'user_id' => null,
                'created_at' => date('Y-m-d H:i:s', strtotime($createdDate)),
                'updated_at' => date('Y-m-d H:i:s', strtotime($createdDate)),
            ]
        ];

        if($this->product == 'ppi_ins') {
            $chase = CstPpiAdmin::where('prod_id', $this->id)->where('UserID', $userId)->first();
        }

        if($this->product == 'pba_ins') {
            $chase = CstPpiAdmin::where('prod_id', $this->id)->where('UserID', $userId)->first();
        }

        if($this->product == 'flight_reclaim') {
            $chase = CstFlightReclaimAdmin::where('prod_id', $this->id)->where('UserID', $userId)->frist();
        }

        if($this->product == 'mort_ins') {
            $chase = CstFlightReclaimAdmin::where('prod_id', $this->id)->where('UserID', $userId)->frist();
        }

        if($this->product == 'secured_ins') {
            $chase = CstSecAdminChase::where('prod_id', $this->id)->where('UserID', $userId)->frist();
        }

        if($this->product == 'personal_ins') {
            $chase = CstPersonalAdminChase::where('prod_id', $this->id)->where('UserID', $userId)->frist();
        }

        if($this->product == 'logbook_ins') {
            $chase = CstLogbookAdminChase::where('prod_id', $this->id)->where('UserID', $userId)->frist();
        }

        if($this->product == 'guarantor_ins') {
            $chase = CstGuarantorAdminChase::where('prod_id', $this->id)->where('UserID', $userId)->frist();
        }

        if($this->product == 'payday_ins') {
            $chase = CstPaydayAdminChase::where('prod_id', $this->id)->where('UserID', $userId)->frist();
        }

        if(!is_null($chase)) {
            if(boolval($chase->ppi_Pack_Sent) || $chase->ppi_Pack_Sent_date != '0000-00-00') {
                $statuses[] = [
                    'client_product_id' => null,
                    'status_id' => 21,
                    'user_id' => null,
                    'created_at' => date('Y-m-d H:i:s', strtotime($chase->ppi_Pack_Sent_date)),
                    'updated_at' => date('Y-m-d H:i:s', strtotime($chase->ppi_Pack_Sent_date)),
                ];
            }

            if(boolval($chase->ppi_Pack_Rtrnd) || $chase->ppi_Pack_Rtrnd_date != '0000-00-00') {
                $statuses[] = [
                    'client_product_id' => null,
                    'status_id' => 22,
                    'user_id' => null,
                    'created_at' => date('Y-m-d H:i:s', strtotime($chase->ppi_Pack_Rtrnd_date)),
                    'updated_at' => date('Y-m-d H:i:s', strtotime($chase->ppi_Pack_Rtrnd_date)),
                ];
            }

            //@todo find out what engagement send and include it maybe

            if(boolval($chase->ppi_Ltr_Authrty) || $chase->ppi_Ltr_Authrty_date != '0000-00-00') {
                $statuses[] = [
                    'client_product_id' => null,
                    'status_id' => 23,
                    'user_id' => null,
                    'created_at' => date('Y-m-d H:i:s', strtotime($chase->ppi_Ltr_Authrty_date)),
                    'updated_at' => date('Y-m-d H:i:s', strtotime($chase->ppi_Ltr_Authrty_date)),
                ];
            }

            if($chase->ppi_Ltr_Authrty_date_rec != '0000-00-00') {
                $status[] = [
                    'client_product_id' => null,
                    'status_id' => 24,
                    'user_id' => null,
                    'created_at' => date('Y-m-d H:i:s', strtotime($chase->ppi_Ltr_Authrty_date_rec)),
                    'updated_at' => date('Y-m-d H:i:s', strtotime($chase->ppi_Ltr_Authrty_date_rec)),
                ];
            }

            //@todo checks that SAR acknowledgment is the same as SAR received
            if(boolval($chase->ppi_SAR_Sent) || $chase->ppi_SAR_Sent_date != '0000-00-00') {
                $statuses[] = [
                    'client_product_id' => null,
                    'status_id' => 25,
                    'user_id' => null,
                    'created_at' => date('Y-m-d H:i:s', strtotime($chase->ppi_SAR_Sent_date)),
                    'updated_at' => date('Y-m-d H:i:s', strtotime($chase->ppi_SAR_Sent_date)),
                ];
            }

            if($chase->ppi_SAR_ack_date != '0000-00-00') {
                $statuses[] = [
                    'client_product_id' => null,
                    'status_id' => 26,
                    'user_id' => null,
                    'created_at' => date('Y-m-d H:i:s', strtotime($chase->ppi_SAR_ack_date)),
                    'updated_at' => date('Y-m-d H:i:s', strtotime($chase->ppi_SAR_ack_date)),
                ];
            }

            //SAR Fee Date
            if($chase->ppi_cheque_date != '0000-00-00') {
                //@todo work out what SAR fee date is any why it's linked to ppi_cheque_date
            }

            if(boolval($chase->ppi_ackd)) {

                $lastStatus = end($statuses);

                $status[] = [
                    'client_product_id' => null,
                    'status_id' => 30,
                    'user_id' => null,
                    'created_at' => date('Y-m-d H:i:s', $lastStatus['created_at']),
                    'updated_at' => date('Y-m-d H:i:s', $lastStatus['updated_at']),
                ];
            }

            if(boolval($chase->No_ppi)) {

                $lastStatus = end($statuses);

                $status[] = [
                    'client_product_id' => null,
                    'status_id' => 29,
                    'user_id' => null,
                    'created_at' => date('Y-m-d H:i:s', $lastStatus['created_at']),
                    'updated_at' => date('Y-m-d H:i:s', $lastStatus['updated_at']),
                ];
            }

            if(boolval($chase->ppi_ackd)) {

                $lastStatus = end($statuses);

                $status[] = [
                    'client_product_id' => null,
                    'status_id' => 30,
                    'user_id' => null,
                    'created_at' => date('Y-m-d H:i:s', $lastStatus['created_at']),
                    'updated_at' => date('Y-m-d H:i:s', $lastStatus['updated_at']),
                ];
            }


            if(boolval($chase->ppi_Referred_FOS) || $chase->ppi_Referred_FOS_date != '0000-00-00') {
                $status[] = [
                    'client_product_id' => null,
                    'status_id' => 31,
                    'user_id' => null,
                    'created_at' => date('Y-m-d H:i:s', strtotime($chase->ppi_Referred_FOS_date )),
                    'updated_at' => date('Y-m-d H:i:s', strtotime($chase->ppi_Referred_FOS_date )),
                ];
            }

            if($chase->ppi_FOS_ack_date != '0000-00-00') {
                $statuses[] = [
                    'client_product_id' => null,
                    'status_id' => 32,
                    'user_id' => null,
                    'created_at' => date('Y-m-d H:i:s', strtotime($chase->ppi_FOS_ack_date )),
                    'updated_at' => date('Y-m-d H:i:s', strtotime($chase->ppi_FOS_ack_date )),
                ];
            }

            //@todo funds by client
        }

        return $statuses;
    }

}