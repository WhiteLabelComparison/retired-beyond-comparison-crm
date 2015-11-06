<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Crm;

use Illuminate\Database\Eloquent\Model;

class CstSecLoanDet extends Model
{

    public $timestamp = false;

    protected $dates = [];

    protected $primaryKey = 'id';

    protected $table = 'cst_sec_loan_det';

    protected $connection = 'beyond-crm';

    protected $fillable = [];

}