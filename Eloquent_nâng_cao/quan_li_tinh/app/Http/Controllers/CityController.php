<?php

namespace App\Http\Controllers;
use App\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CityController extends Controller
{
    public  function index(){
        $cities = City::all();
        return view('cities.list' , compact('cities'));
    }

    public function create(){
        return view('cities.create');
    }

    public  function store(Request $request){
        $city = new City();
        $city-> name = $request->input('name');
        $city->save();

        Session::flash('success', 'Tạo mới thành công');
        return redirect()->route('cities.index');
    }
    public  function edit($id){
        $city = City::findOrFail($id);
        return view('cities.edit', compact('city'));
    }
    public function update(Request $request, $id){
        $city = City::findOrFail($id);;
        $city->name = $request->input('name');
        $city->save();
        Session::flash('success','thêm thành công');
        return redirect()->route('cities.index');
    }
}
