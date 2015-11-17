<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Wlc;

use Illuminate\Database\Eloquent\Model;

class PartnersUsers extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'partners_users';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

    public function partner()
    {
        return $this->belongsTo(Partners::class, 'aff_partner');
    }

}