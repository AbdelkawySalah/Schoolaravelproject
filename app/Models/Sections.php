<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Sections extends Model 
{
    use HasTranslations;
    public $translatable = ['Name_Section'];
    protected  $fillable=['Name_Section','Grade_Id ','Class_Id','Status'];
    protected $table = 'sections';
    public $timestamps = true;

    public function Grades()
    {
        return $this->belongsTo('App\Models\Grade', 'Grade_Id');
    }
    public function ClassesRoom()
    {
        return $this->belongsTo('App\Models\Classroom', 'Class_Id');
    }

}