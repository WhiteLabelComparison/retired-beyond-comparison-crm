<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Wlc;

use Illuminate\Database\Eloquent\Model;

class IframesHeight extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'uid';

    protected $table = 'iframes_height';

    protected $connection = 'beyond-wlc';

    protected $fillable = [];

}