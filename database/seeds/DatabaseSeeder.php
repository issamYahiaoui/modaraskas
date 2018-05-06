<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\AccountingConstraint;
use App\FinancialMovement;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {



        $admin = \App\User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456'),
            'active' => 1 ,
            "type" => "admin"
        ]);

    for($i=1;$i<11;$i++){

        $teacher = \App\User::create([
            'name' => 'teacher '.$i,
            'email' => 'teacher'.$i.'@gmail.com',
            'password' => bcrypt('123456'),
            'active' => true,
            'type'=> 'teacher',
            'avatar' => $i.'.jpg',
            'country' => 'Algeria',
            'city' => 'Chlef Province'
        ]);
        $teacher->storeAccordingToType('teacher');
    }
        $parent =\App\User::create([
            'name' => 'parent',
            'email' => 'parent@gmail.com',
            'password' => bcrypt('123456'),
            'active' => true,
            'type'=> 'parent'
        ]);
        $parent->storeAccordingToType('parent');


        $student =  \App\User::create([
            'name' => 'student',
            'email' => 'student@gmail.com',
            'password' => bcrypt('123456'),
            'active' => true,
            'type'=> 'student',
            'avatar' => "student.png"
        ]);
        $student->storeAccordingToType('student');


         $schoolStages = ['primary','medium','high','international'];
         $highSchoolStages = ['primary','medium','high'];
         $specializations = ['mathimatic','physic','computer science'];
         $curriculas=['Saudian','American','French','Algerian','English'] ;
         $teachingTypes=['Normal','Online','Both'] ;
         $teachingOptions =[
             'Teaching one student at the appropriate student location' ,
             'Teaching to the student group at the appropriate student location',
             'Teaching one student at the appropriate teacher location',
             'Teaching a group of students at the appropriate teacher location',
             'Teaching a student online',
             'Teaching a group of students online'
         ] ;

         foreach ($schoolStages as $item){

             \App\SchoolStage::create([
                 'ar_name' => '',
                 'en_name' => $item,
             ]);
         }
        foreach ($highSchoolStages as $item){

            \App\HighSchoolStage::create([
                'ar_name' => '',
                'en_name' => $item,
            ]);
        }
        foreach ($specializations as $item){

            \App\Specialization::create([
                'ar_name' => '',
                'en_name' => $item,
            ]);
        }
        foreach ($curriculas as $item){

            \App\Curricula::create([
                'ar_name' => '',
                'en_name' => $item,
            ]);
        }
        foreach ($teachingTypes as $item){

            \App\TeachingType::create([
                'ar_name' => '',
                'en_name' => $item,
            ]);
        }
        foreach ($teachingOptions as $item){

            \App\TeachingOption::create([
                'ar_name' => '',
                'en_name' => $item,
            ]);
        }




























        //Principal  settings
        \App\PrincipalSettings::create([
            'office_ar_name' => 'مدرس خاص',
            'office_en_name' => 'Modaras kas',
            'phone' => '0664421310',
            'ar_address' => 'السعودية',
            'en_address' => 'Saudia',
            'website_email' => 'modaraskas@gmail.com',
            'logo' => 'logo',
            'en_about' => 'about us',
            'ar_about' => 'حولنا',
            'en_privacy_term' => 'privacy terms',
            'ar_privacy_term' => 'شروط الخصوصية',
        ]);



        \App\Carousel::create([
            'ar_title' => '',
            'en_title' => '',
            'img' => '1_1515891670sffQE.png',
        ]);
        \App\Carousel::create([
            'ar_title' => 'سير ذاتية للعاملين',
            'en_title' => '',
            'img' => 'slide1233.jpg',
        ]);
        \App\Carousel::create([
            'ar_title' => 'تواصل دائم و متابعة مستمرة',
            'en_title' => '',
            'img' => 'slide2.png',
        ]);

    }
}
