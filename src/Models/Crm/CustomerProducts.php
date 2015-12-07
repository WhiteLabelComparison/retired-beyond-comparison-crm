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

    public function adminChase($userId)
    {

        $chase = [];

        if($this->product == 'ppi_ins') {
            $chase = CstPpiAdmin::where('prod_id', $this->id)->where('UserID', $userId)->first();
        }

        if($this->product == 'pba_ins') {
            $chase = CstPbaAdminChase::where('prod_id', $this->id)->where('UserID', $userId)->first();
        }

        if($this->product == 'flight_reclaim') {
            $chase = CstFlightReclaimAdmin::where('prod_id', $this->id)->where('UserID', $userId)->first();
        }

        if($this->product == 'mort_ins') {
            $chase = CstMortAdminChase::where('prod_id', $this->id)->where('UserID', $userId)->first();
        }

        if($this->product == 'secured_ins') {
            $chase = CstSecAdminChase::where('prod_id', $this->id)->where('UserID', $userId)->first();
        }

        if($this->product == 'personal_ins') {
            $chase = CstPersonalAdminChase::where('prod_id', $this->id)->where('UserID', $userId)->first();
        }

        if($this->product == 'logbook_ins') {
            $chase = CstLogbookAdminChase::where('prod_id', $this->id)->where('UserID', $userId)->first();
        }

        if($this->product == 'guarantor_ins') {
            $chase = CstGuarantorAdminChase::where('prod_id', $this->id)->where('UserID', $userId)->first();
        }

        if($this->product == 'payday_ins') {
            $chase = CstPaydayAdminChase::where('prod_id', $this->id)->where('UserID', $userId)->first();
        }

        return is_null($chase)?[]:$chase;
    }

    public function notes()
    {
        return $this->hasMany(ProductNotes::class, 'product');
    }

}