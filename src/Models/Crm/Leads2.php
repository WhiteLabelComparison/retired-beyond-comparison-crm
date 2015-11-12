<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class Leads2 extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_2';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

    public function customer()
    {
        return $this->hasOne(Customers::class, 'cUserID', 'UserID');
    }


}