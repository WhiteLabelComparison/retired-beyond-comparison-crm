<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Wlc;

use Illuminate\Database\Eloquent\Model;

class AffPartClawbackBill extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'aff_part_clawback_bill';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}