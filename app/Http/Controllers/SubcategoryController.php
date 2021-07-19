<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data']=Subcategory::all();
        return view('admin/Subcategory',$result);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_subcategory(Request $request,$id='')
    {
        //
        if($id>0){
            $arr=Subcategory::where(['id'=>$id])->get(); 

            $result['category_id']=$arr['0']->category_id;
            $result['Subcategory_name']=$arr['0']->Subcategory_name;
            $result['id']=$arr['0']->id;
        }else{
            $result['category_id']='';
            $result['Subcategory_name']='';
            $result['id']=0;
            
        }
        $result['category']=DB::table('categories')->where(['status'=>1])->get();

        return view('admin/manage_subcategory',$result);
    }

    public function manage_subcategory_process(Request $request)
    {
        //return $request->post();
   

        if($request->post('id')>0){
            $model=subcategory::find($request->post('id'));
            $msg="subcategory updated";
        }else{
            $model=new subcategory();
            $msg="subcategory inserted";
        }
        $model->category_id=$request->post('category_id');

        $model->Subcategory_name=$request->post('Subcategory_name');

        $model->status=1;
        $model->save();
        $request->session()->flash('message',$msg);
        return redirect('admin/Subcategory');
        
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function delete(Request $request,$id){
        $model=subcategory::find($id);
        $model->delete();
        $request->session()->flash('message','subcategory deleted');
        return redirect('admin/Subcategory');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function status(Request $request,$status,$id){
        $model=subcategory::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message','subCategory status updated');
        return redirect('admin/Subcategory');
    }
}
