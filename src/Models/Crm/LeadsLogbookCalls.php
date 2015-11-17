<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class LeadsLogbookCalls extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'leads_logbook_calls';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

    public function caller()
    {
        return $this->belongsTo(AffiliateUser::class, 'id', 'caller');
    }

    public function lead()
    {
        return $this->belongsTo(AffiliateUser::class, 'caller', 'id');
    }

}