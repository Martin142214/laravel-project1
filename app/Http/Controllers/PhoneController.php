<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{

    public function add(){
        return view('create');
    }

    public function create(Request $request){
        $this->validate($request, [
            'brand' => 'required',
            'model' => 'required',
            'description' => 'required'
        ]);

        $phone = new Phone();
        $phone->brand = $request->brand;
        $phone->model = $request->model;
        $phone->description = $request->description;
        $phone->productionDate = $request->productionDate;
        if ($request->hasFile('image'))
        {
            $file = $request->file('image')->store('public');
            $phone->image = $file;
            //$extension = $file->getClientOriginalExtension();
            //$fileName = $file . '.' . $extension;

            //$file->move('public/imgFiles/', $fileName);

            //var_dump($filePath);
            //die();
        }
        else {
            return dd($request->all());
        }

        $phone->save();

        return redirect('/show');
    }

    /*protected function setupListOperation()
    {
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->create(TRUE));
    }*/

    public function edit($id){
        $phone = Phone::find($id);

        return view('edit', compact('phone'));
    }

    public function update(Request $request, $id){
        $phone = Phone::find($id);

        $phone->brand = $request->brand;
        $phone->model = $request->model;
        $phone->description = $request->description;
        $phone->productionDate = $request->productionDate;
        if ($request->hasFile('image'))
        {
            $file = $request->file('image')->store('public');
            $phone->image = $file;
        }
        else {
            return $request;
        }
        $phone->save();

        return redirect('/show');
    }

    public function delete($id){
        $phone = Phone::find($id);
        $phone->delete();
        return redirect('/show');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $phones = Phone::where('brand', 'like','%'.$search.'%')
            ->orWhere('model', 'like','%'.$search.'%')
            ->orWhere('productionDate', 'like','%'.$search.'%')->get();
        return view('search', compact('phones'));
    }
}
