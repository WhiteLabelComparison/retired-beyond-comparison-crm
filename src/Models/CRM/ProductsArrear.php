<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class ProductsArrear extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'products_arrear';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

}