<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrincipalSettings extends Model
{
    //
    protected  $fillable =[
        'office_en_name' ,
        'office_ar_name' ,
        'phone'  ,
        'ar_address',
        'en_address' ,
        'website_email',
        'logo' ,
        'ar_about' ,
        'en_about' ,
        'ar_privacy_term' ,
        'en_privacy_term' ,
        'en_questions',
        'ar_questions',
        'ar_teacher_terms',
        'en_teacher_terms',
        'ar_student_terms',
        'en_student_terms',
        'ar_parent_terms',
        'en_parent_terms',
        ] ;
}
