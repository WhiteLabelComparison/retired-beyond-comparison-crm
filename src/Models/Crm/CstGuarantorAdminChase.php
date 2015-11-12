<?php namespace CaffeineAddicts\BeyondWhiteLabelCrm\Models\Crm;

use Illuminate\Database\Eloquent\Model;

class CstGuarantorAdminChase extends Model
{

    public $timestamp = false;

    protected $dates = [
        'Date_DIP',
        'Date_Fee_Agreed',
        'Date_Irrevs',
        'Date_IDD',
        'Date_KFI',
        'Date_DPP',
        'Date_Future_Relship',
        'Date_Docs_Sent',
        'Date_Photo_ID',
        'Date_Utility_Bills',
        'Date_Payslips',
        'Date_Accounts',
        'Date_Bank_Statements',
        'Date_Mort_Rec',
        'Date_Pension_Statement',
        'Date_Full_App',
        'Date_Solicitor_Instrd',
        'Date_Survey_Instructed',
        'Date_Offer_Made',
        'Date_Offer_Accepted',
        'Date_Completed',
        'Date_Broker_Fee_Paid',
        'Date_Proc_Fee_Paid',
    ];

    protected $primaryKey = 'id';

    protected $table = 'cst_guarantor_admin_chase';

    protected $connection = 'beyond-crm';

    protected $fillable = [
        'UserID',
        'prod_id',
        'DIP',
        'Date_DIP',
        'Fee_Agreement',
        'Date_Fee_Agreed',
        'Irrevs',
        'Date_Irrevs',
        'IDD',
        'Date_IDD',
        'KFI',
        'Date_KFI',
        'DPP',
        'Date_DPP',
        'Future_Relship',
        'Date_Future_Relship',
        'Docs_Sent',
        'Date_Docs_Sent',
        'Photo_ID',
        'Date_Photo_ID',
        'Utility_Bills',
        'Date_Utility_Bills',
        'Payslips',
        'Date_Payslips',
        'Three_y_Accounts',
        'Date_Accounts',
        'SA302_Rec',
        'Date_SA302_Rec',
        'Bank_Statements',
        'Date_Bank_Statements',
        'Date_Mort_Rec',
        'Pension_Statement',
        'Date_Pension_Statement',
        'Full_App',
        'Date_Full_App',
        'Land_Reg',
        'Date_Land_Reg',
        'Solicitor_Instrd',
        'Date_Solicitor_Instrd',
        'Solicitor_Company',
        'Solicitor_Contact',
        'Survey_Instructed',
        'Date_Survey_Instructed',
        'Suitability_Letter',
        'Date_Suitability_Letter',
        'Offer_Made',
        'Date_Offer_Made',
        'Offer_Accepted',
        'Date_Offer_Accepted',
        'Completed',
        'Date_Completed',
        'Broker_Fee_Paid',
        'Date_Broker_Fee_Paid',
        'Proc_Fee_Paid',
        'Date_Proc_Fee_Paid',
        'Admn_Expctd_Cmpltn',
        'Mort_Chase_Notes',
    ];

}