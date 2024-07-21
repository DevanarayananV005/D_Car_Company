<?php

namespace App\Http\Controllers;
use App\Models\cars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{



   public function addcar(Request $request){
    $data=$request->validate([
        'type'=>'required',
        'brand'=>['required','min:3','max:20'],
        'name'=>['required','min:2','max:20'],
        'model'=>'required',
        'mileage'=>['required'],
        'price'=>['required'],
        'file' => ['required']

    ]);
    // , 'image', 'mimes:jpeg,jpg,png,gif'
    if ($request->hasFile('file')) {
        $imagePath = $request->file('file')->store('images', 'public');
        $data['file'] = $imagePath;
    }
    $newcar=cars::create($data);
    return redirect('/adminindex');
   }
   public function adminindex(){
        // Check if the user is authenticated as admin

    $adminindex = cars::all();
    return view('adminindex', ['car' => $adminindex]);
}
public function userindex(){
    // Check if the user is authenticated as admin

$userindex = cars::all();
return view('userindex', ['car' => $userindex]);
}
public function edit(cars $cars){
    return view ('edit',['cars'=>$cars]);
}
public function update(cars $cars, Request $request){
    $data=$request->validate([
        'type'=>'required',
        'brand'=>['required','min:3','max:20'],
        'name'=>['required','min:2','max:20'],
        'model'=>'required',
        'mileage'=>['required'],
        'price'=>['required']
    ]);
    $cars->update($data);
    return redirect(route('adminindex'));
}
public function destroy(cars $cars){
    $cars -> delete();
    return redirect(route('adminindex'));
}
public function adminlogout(){
    return redirect('/');
} 
}
