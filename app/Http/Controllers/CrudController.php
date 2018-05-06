<?php

namespace App\Http\Controllers;

use App\Specialization;
use Illuminate\Http\Request;
use App\Crud ;
use App\Message;
class CrudController extends Controller
{

    public function __construct()
    {
        $newMessages = Message::where('read', 0)->get();
        \view()->share([
            'newMessages' => $newMessages
        ]);
//        $this->middleware('auth') ;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request,$class)
    {

        $list = Crud::getClass($class)::all() ;

        if ($request->ajax()){
           return $list ;
        }
            return  view('admin.crud.index',[
                'title'=> __('lang.'.$class),
                'active'=> $class,
                'list' => $list,
                'url' => $request->path()
            ]) ;







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
    public function store(Request $request,$class)
    {
        //
        $rules = [
            'ar_name'=> 'required|unique:'.$class.'s' ,
            'en_name'=> 'required|unique:'.$class.'s'
        ] ;

        $this->validate($request ,$rules) ;
        Crud::getClass($class)::create([
            'ar_name'=> $request->get('ar_name'),
            'en_name'=> $request->get('en_name')
        ]);
        Session::Flash('success', __('dashboard.success'));

        return Redirect::back();
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request ,$class, $id)
    {
        //
        //
        $rules = [
            'ar_name'=> 'required|unique',
            'en_name'=> 'required|unique'
        ] ;

        $this->validate($request ,$rules) ;
        Crud::getClass($class)::find($id)->update([
            'ar_name'=> $request->get('ar_name'),
            'en_name'=> $request->get('en_name')
        ]);
        Session::Flash('success', __('dashboard.success'));

        return Redirect::back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($class,$id)
    {
        //
        Crud::getClass($class)::destroy($id);
        return redirect()->back();
    }
}
