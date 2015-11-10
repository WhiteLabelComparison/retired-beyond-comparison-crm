<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Wlc;

use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'partners';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

    public function users()
    {
        return $this->hasMany(PartnersUsers::class, 'aff_partner');
    }

}