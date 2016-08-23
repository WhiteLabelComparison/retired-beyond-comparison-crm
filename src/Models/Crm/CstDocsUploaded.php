<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CstDocsUploaded extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_docs_uploaded';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'time_uploaded',
        'name',
        'display_name',
        'agent',
        'doc_type',
    ];
    
    public function client()
    {
        return $this->belongsTo(Customers::class, 'UserID', 'cUserID');
    }

    public function agent()
    {
        return $this->hasOne(AffiliateUser::class, 'id', 'agent');
    }

}