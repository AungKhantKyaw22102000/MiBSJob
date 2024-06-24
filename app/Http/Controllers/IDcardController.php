<?php

namespace App\Http\Controllers;

use App\Models\IDcard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class IDcardController extends Controller
{
    // direct route id card list page
    public function idCardListPage(){
        $idCards = IDcard::get();
        return view('admin.idCard.list', compact('idCards'));
    }

    // direct route id card create page
    public function idCardCreatePage(){
        return view('admin.idCard.create');
    }

    // direct route id card edit page
    public function idCardEditPage($id){
        $idCard = IDcard::first();
        return view('admin.idCard.edit', compact('idCard'));
    }

    // id card create
    public function idCardCreate(Request $request){
        $this->idCardCreateValidation($request, 'create');
        $data = $this->getidCardData($request);
        $fileName = uniqid() . $request->file('employeePhoto')->getClientOriginalName();
        $request->file('employeePhoto')->storeAs('public/employeePhoto',$fileName);
        $data['image'] = $fileName;

        IDcard::create($data);
        return redirect()->route('admin#idCardCreatePage');
    }

    // id card edit
    public function idCardEdit($id, Request $request){
        $this->idCardCreateValidation($request, 'update');
        $data = $this->getidCardData($request);
        if($request->hasFile('employeePhoto')){
            $dbImage = IDcard::where('id',$id)->first();
            $dbImage = $dbImage->image;

            if($dbImage != null){
                Storage::delete('public/employeePhoto/'.$dbImage);
            }

            $fileName = uniqid() . $request->file('employeePhoto')->getClientOriginalName();
            $request->file('employeePhoto')->storeAs('public/employeePhoto',$fileName);
            $data['image'] = $fileName;
        }

        IDcard::where('id', $id)->update($data);
        return redirect()->route('admin#idCardListPage');
    }

    // id card create validation
    private function idCardCreateValidation($request, $action){
        $validationRule = [
            'employeeId' => 'required',
            'employeeName' => 'required',
            'employeeDepartment' => 'required',
            'employeeAddress' => 'required',
        ];
        $validationRule['employeePhoto'] = $action == "create" ? "required|mimes:jpg,png,webp,jpeg,gif|file" : "mime:jpg,png,webp,jpeg,gif|file";
        Validator::make($request->all(), $validationRule)->validate();
    }

    // get id card data
    private function getidCardData($request){
        return [
            'employee_id' => $request->employeeId,
            'name' => $request->employeeName,
            'department' => $request->employeeDepartment,
            'address' => $request->employeeAddress,
        ];
    }
}
