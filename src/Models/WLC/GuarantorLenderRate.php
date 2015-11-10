<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Wlc;

use Illuminate\Database\Eloquent\Model;

class GuarantorLenderRate extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'guarantor_lender_rate';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}