<?php 

namespace App\Http\Controllers\Classrooms;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Grade;

class ClassroomController extends Controller 
{


  
  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  { 

    $My_Classes=Classroom::all();
    $Grades=Grade::all();
    return view('dashboard.pages.My_Classes.My_Classes',compact('My_Classes','Grades'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {
    
     //check data before 

    
       
   
    
    // return $request;
     // return $request->List_Classes;
     //end check data before save
     $List_Classes=$request->List_Classes;

    

     $val=$request->validate([
      'List_Classes.*.Name'=>'required',
      'List_Classes.*.Name_class_en'=>'required',
      'List_Classes.*.Name.required'=>trans('validation.required'),
      'List_Classes.*.Name_class_en.required'=>trans('validation.required')
    ]);

    

try{ 
  
  foreach($List_Classes as $List_Classes)
  {
    
    if (Classroom::where('Name_Class->ar', $List_Classes['Name'])->orwhere('Name_Class->en',$List_Classes['Name_class_en'])->exists())
    {

    return redirect()->back()->withErrors(trans('My_Classes_trans.exists'));
     
 }
    $My_Classes=new Classroom();
    $My_Classes->Name_Class = ['en' => $List_Classes['Name_class_en'], 'ar' => $List_Classes['Name']];
    $My_Classes->Grade_Id=$List_Classes['Grade_id'];
   
    $My_Classes->save();
  
  }
  toastr()->success(trans('messages_trans.success'));
  return redirect()->route('Classroom.index');
}
catch (\Exception $e){
  return redirect()->back()->withErrors(['error' => $e->getMessage()]);
}
     

  } 

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request)
  {
     try{
      $My_Classes=Classroom::findorFail($request->id);
         // return $Grades;
         $My_Classes->update([
             $My_Classes->Name_Class=['ar'=>$request->Name,'en'=>$request->Name_en],
             $My_Classes->Grade_Id=$request->Grade_id,
         ]);
         toastr()->success(trans('messages_trans.Update'));
         return redirect()->route('Classroom.index');
     }
    catch (\Exception $e){

        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
      }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy(Request $request)
  
    {
      //
      try{
          $My_Classes=Classroom::findorFail($request->id)->delete();
         toastr()->error(trans('messages_trans.Delete'));
         return redirect()->route('Classroom.index');
     }
    catch (\Exception $e)
    {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }

  }



  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function delete_all(Request $request)
    {
      
      $delete_all_id = explode(",", $request->delete_all_id);
      //dd($delete_all_id);
        Classroom::whereIn('id', $delete_all_id)->Delete();
        toastr()->error(trans('messages.Delete'));
        return redirect()->route('Classroom.index');
    }

    public function Filter_Classes(Request $request)
    {
    //  return $request;
     $Grades = Grade::all();
      $Search = Classroom::select('*')->where('Grade_id','=',$request->Grade_id)->get();
       return view('dashboard.pages.My_Classes.My_Classes',compact('Grades'),compact('Search'));

    }

  
}



?>