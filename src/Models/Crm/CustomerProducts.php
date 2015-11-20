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

}