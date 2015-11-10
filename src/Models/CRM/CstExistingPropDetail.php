<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CstExistingPropDetail extends Model
{

    public $timestamp = false;

    protected $dates = [
        'Purchase_Date',
        'Approx_Date_Built',
    ];

    protected $primaryKey = 'id';

    protected $table = 'cst_existing_prop_details';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'Current_Residence',
        'Property_Type',
        'Type_Of_Cnstrctn',
        'Property_Value',
        'Purchase_Price',
        'Purchase_Date',
        'Approx_Date_Built',
        'No_Of_Bedrooms',
        'Lease_Type',
        'Lease_Term',
        'No_Of_Stories',
        'Flat_Floor',
    ];

}