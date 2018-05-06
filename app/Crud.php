<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    //
    static function jsonToModel($arr,$obj){
        $obj->forceFill($arr) ;
        return $obj ;
      }
    static function  getClass($class){
        $class_name = ucfirst($class);
        switch ($class_name) {
            case 'SchoolStage' :
                return SchoolStage::class;
                    break ;
            case 'HighSchoolStage' :
                return HighSchoolStage::class;
                    break ;
            case 'TeachingType' :
                return TeachingType::class;
                    break ;
            case 'Specialization' :
                return Specialization::class;
                break;
            case 'Country' :
                return Country::class ;
                break;
            case 'City' :
                return City::class;
                break;
            case 'Address' :
                return Address::class;
            case 'Subject' :
                return Subject::class ;
                break;
            case 'Curricula' :
                return Curricula::class;
                break;
            case "TeachingOptions" :
                return TeachingOption::class;
                break ;

        }

    }
}
