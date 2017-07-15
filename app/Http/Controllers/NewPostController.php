<?php

namespace App\Http\Controllers;

use App\posts;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class NewPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function form()
    {
        return view('pages.addNewPost');
    }

    public function store(Request $request)
    {
        $requestData = $request->all();
        $fillable = new posts();
        $fillable->fill($requestData);
        $fillable->url = str_slug($request->title);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = $file->getClientOriginalName();
            $fileName = $this->clearFileName($file);
            $file->move('images/cover', $fileName);

            $fillable->image = 'images/cover/' . $fileName;
        }else{
            $fillable->image = '';
        }
        $fillable->views = '0';
        $fillable->author = Auth::user()->name;
        $fillable->save();
        return redirect('/');

    }

    private function clearFileName($file = null)
    {
        if ($file === null)
            return null;

        $extension = (string) $file->getClientOriginalExtension();
        $full_name = $file->getClientOriginalName();
        $name = rtrim($full_name . mt_rand(1,5000) , '.' . $extension);

    	return str_slug($name) . '.' . $extension;
   }
}
