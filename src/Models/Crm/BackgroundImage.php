<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class BackgroundImage extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'background_image';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'name',
        'unique_docname',
    ];

}