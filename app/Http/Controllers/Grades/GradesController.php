<?php

namespace App\Http\Controllers\Grades;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Classroom;
use CodeZero\UniqueTranslation\UniqueTranslationRule;

class GradesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Grades=Grade::all();
        return view('dashboard.pages.Grades.Grades',compact('Grades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      
      //check data before 

    
       
       if (Grade::where('Name->ar', $request->Name)->orwhere('Name->en',$request->Name_en)->exists())
       {

        return redirect()->back()->withErrors(trans('Grades_trans.exists'));
        
    }

     //end check data before save

        $val=$request->validate([
            'Name'=>'required',
            'Name_en'=>'required',
            'Name.required'=>trans('validation.required'),
            'Name_en.required'=>trans('validation.required')
        ]);

        try{
       $Grade=new Grade();
       //حل اخر
     /*  $translations = [
        'en' => $request->Name_en,
         'ar' => $request->Name
       ];
      $Grade->setTranslations('Name', $translations);
      $Grade->Notes=$request->Notes;
      $Grade->save();
      */
       $Grade->Name = ['en' => $request->Name_en, 'ar' => $request->Name];
       $Grade->Notes=$request->Notes;
       $Grade->save();
       toastr()->success(trans('messages_trans.success'));
       return redirect()->route('Grades.index');
       
      //  $user_data=$request->only("email","password");
        // dd($user_data);
      //   if(Auth::attempt($user_data)){
      //     return redirect("/dashboard");
      //   }
      //   else{
    
      //    Session::flash('message',' UserName or password not vaild');
      //    return redirect("/login");
       //  }

      }
      catch (\Exception $e){
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function delete_all(Request $request)
    {
        //Request $request
        try{
            $delete_all_id=explode(",",$request->delete_all_id);
            Grade::whereIn('id',$delete_all_id)->delete();
           toastr()->error(trans('messages_trans.Delete'));
           return redirect()->route('Grades.index');
       }
      catch (\Exception $e){
          return redirect()->back()->withErrors(['error' => $e->getMessage()]);
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
     // return $request;
     try{
          $Grades=Grade::findorFail($request->id);
         // return $Grades;
         $Grades->update([
             $Grades->Name=['ar'=>$request->Name,'en'=>$request->Name_en],
             $Grades->Notes=$request->Notes,
         ]);
         toastr()->success(trans('messages_trans.Update'));
         return redirect()->route('Grades.index');
       //  $Grades=Grade::all();
       //  return view('dashboard.pages.Grades.Grades',compact('Grades'));
     }
    catch (\Exception $e){

        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        try{
            $Myclass_id=Classroom::where('Grade_Id',$request->id)->pluck('Grade_Id','Name_Class');
            // dd($Myclass_id);
            if($Myclass_id->count()==0){
            $Grades=Grade::findorFail($request->id)->delete();
           toastr()->error(trans('messages_trans.Delete'));
           return redirect()->route('Grades.index');
             }
             else{
                toastr()->error(trans('Grades_trans.Delete_Grade_error'));
                return redirect()->route('Grades.index');
             }
       }
      catch (\Exception $e){
          return redirect()->back()->withErrors(['error' => $e->getMessage()]);
      }

    }
}
