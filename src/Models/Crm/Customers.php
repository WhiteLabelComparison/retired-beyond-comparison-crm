<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'customers';

    protected $connection = 'beyond-crm';

    protected $fillable = [];


    public function lead()
    {
        $leads2 = Leads2::where('UserID', $this->cUserID)->first();
        if(is_null($leads2)) {
            return $leads2;
        }

        $leadSurvey = LeadsSurvey::where('UserID', $this->cUserID)->first();
        if(is_null($leadSurvey)) {
            return $leadSurvey;
        }

        return null;
    }

    public function notes()
    {
        return $this->hasMany(CustomerNotes::class, 'customer');
    }

    public function products()
    {
        return $this->belongsToMany(CustomerProducts::class, 'cst_prod_match', 'cid', 'pid');
    }

    public function agent()
    {
        return $this->belongsTo(AffiliateUser::class, 'agent', 'id');
    }



}