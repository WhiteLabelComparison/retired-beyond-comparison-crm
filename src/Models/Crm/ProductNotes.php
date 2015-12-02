<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class ProductNotes extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'product_notes';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

    public function product()
    {
        return $this->belongsTo(CustomerProducts::class, 'product');
    }

    public function agent()
    {
        return $this->belongsTo(AffiliateUser::class, 'agent');
    }




}