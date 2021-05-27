<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
class UserController extends Controller
{


    public function form(request $request)
    {

        return view('register');
    }
    public function index(request $request)
    {    
        $new = new user();

        if ($request->file('image')) {
            $imagePath = $request->file('image');
            $imageName = $imagePath->getClientOriginalName();
    
            $path = $request->file('image')->storeAs('uploads', $imageName, 'public');
        }
    
        
     $new->fname=$request->fname;
     $new->lname=$request->lname;
     $new->email=$request->email;
     $new->gender=$request->gender;
     $new->phone=$request->phone;
     $new->Address=$request->Address;

     $new->role_id=0;     


     $new->city=$request->city;
     $new->country=$request->country;
     $new->image=$request->image  ;

     
    //  $new->image='/images/'.$new->id.'.jpg';
    //  $new->user_id = $new->id; 

     $new->save();
     
return redirect('/register')->with('success', 'your form has been submitted');
     
    }

    public function show(request $request)
    {

        $books = user::all();

        $books = user::where( function($query) use($request){
            return $request->role_id ?
                   $query->from('role_id')->where('id',$request->role_id) : '';
       })
    //    ->with('users')
       ->get();

$selected_id = [];
$selected_id['role_id'] = $request->role_id;
// $selected_id['color_id'] = $request->color_id;

// return view('test',compact('product','selected_id'));
return view('showuser',compact('books','selected_id'));
    }

    public function edit(request $request,$id)
    {

$books = user::find($id);

return view('edit')
    ->with('books', $books);

}

    public function update(Request $request,$id)
{
   
    $new = user:: find($id);
 
    $new->fname=$request->fname;
    $new->lname=$request->lname;
    $new->email=$request->email;
    $new->gender=$request->gender;
    $new->phone=$request->phone;
    $new->Address=$request->Address;


    $new->city=$request->city;
    $new->country=$request->country;
    $new->image=$request->image;


    // $new->update($request->all());

    $new->save();
    
return redirect('show');
   

    // Session::flash('flash_message', 'Task successfully added!');


}







public function destroy($id) 
{
    DB::delete('delete from users where id = ?',[$id]);
    return redirect('show')->with('success', 'delete successfully');;
}






}
