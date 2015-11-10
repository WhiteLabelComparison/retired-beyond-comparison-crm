<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Wlc;

use Illuminate\Database\Eloquent\Model;

class AcceptedPendingNotes extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'accepted_pending_notes';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}