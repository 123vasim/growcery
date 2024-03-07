<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Categary;

class CategaryController extends Controller
{
    public function create(){
        return view('categary.create');
    }
    public function index(){
        $data = Categary::paginate(3);
        return view('categary.index',compact('data'));
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required|unique:categary',
            'description'=>'required',
            'status'=>'required',
        ]);
        $categary = new Categary();
        $categary->name= $request->name;
        $categary->description= $request->description;
        $categary->status= $request->status;
        $categary->save();
        return redirect('/categary/index')->with('success',"categary data created successfully");
    }
    public function delete($id)
    {
        Categary::where('id', $id)->delete();
    return redirect('/categary/index')->with('success',"categary data deleted successfully");
    }     
    public function edit($id){
        $data = Categary::where('id',$id)->first();
        
        return view('categary.edit',compact('data'));
    }   
    public function update(Request $request, $id)
    {
        $request->validate([
        'name' => 'required|unique:categary,name,'.$id,
        'description'  => 'required',
    ]);
        $categary_update =Categary::find($id);
        $categary_update->name= $request->name;
        $categary_update->description= $request->description;
        $categary_update->update();
        return redirect('/categary/index')->with('success',"categary data Updated successfully");
    }
    public function status($id){
        $data = Categary::where('id',$id)->first();
        if ($data->status==1) 
        {
            $data->status=0;
            $data->save();
        }
        else
        {
            $data->status=1;
            $data->save();
        }
        return redirect('/categary/index')->with('success',"categary status Updated");
    }
}