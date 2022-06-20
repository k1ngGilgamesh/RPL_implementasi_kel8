<?php

namespace App\Http\Controllers\Shelter;

use App\Http\Controllers\Controller;
use App\Models\Shelter as ModelsShelter ;
use Illuminate\Http\Request;

class ShelterController extends Controller
{
    public function getShelter(){
        $shelter = ModelsShelter::all();
        return view('tambahShelter',['shelter'=>$shelter]);
    }

    public function getShelterList(){
        $shelter = ModelsShelter::all();
        return view('shelter',['shelter'=>$shelter]);
    }
    public function editShelter(Request $request){
        $shelter = ModelsShelter::where('id', $request -> id) -> first();
        return view('editshelter',['shelter'=>$shelter]);
        // return response($request,200);
    }

    public function addShelter(Request $request){
        $document = $request -> file('image');
        $imagename = time().".".$document -> extension();
        $document -> move(public_path('images'),$imagename);
        $coba ['nameshelter'] = $request['nameshelter'];
        $coba ['location'] = $request['location'];
        $coba ['image'] = $imagename;
        $shelter = ModelsShelter::create($coba);
        return redirect()->action([ShelterController::class, 'getShelterList']);
    }

    public function updateShelter(Request $request){
        $shelter = ModelsShelter::where('id', $request -> id) -> first();
        $document = $request -> file('image');
        $imagename = time().".".$document -> extension();
        $document -> move(public_path('images'),$imagename);
        $shelter ['nameshelter'] = $request['nameshelter'];
        $shelter ['location'] = $request['location'];
        $shelter ['image'] = $imagename;
        $shelter -> save();
        return redirect()->action([ShelterController::class, 'getShelterList']);
        
    }

    public function deleteshelter(Request $request){
        $shelter = ModelsShelter::where('id', $request -> id) -> first();
        $shelter -> delete();
        return redirect()->action([ShelterController::class, 'getShelterList']);
    }
}
