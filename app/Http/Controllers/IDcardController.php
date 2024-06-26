<?php

namespace App\Http\Controllers;

use App\Models\IDcard;
use Barryvdh\DomPDF\Facade\Pdf;
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

    // view id card in pdf
    public function viewIdCard($id){
        $employee = IDcard::where('id', $id)->first();
        if (!$employee) {
            abort(404, 'Employee not found');
        }
        $data = [
            'employee' => $employee,
        ];
        $pdf = Pdf::loadView('admin/idCard/idcard', $data);
        return $pdf->stream('idcard.pdf');
    }

    // download id card in pdf
    public function downloadIdCard($id){
        $employee = IDcard::where('id', $id)->first();
        if(!$employee) {
            abort(404, 'Employee not found');
        }
        $data = [
            'employee' => $employee,
        ];
        $pdf = Pdf::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('admin/idCard/idcard', $data);
        return $pdf->download('idcard.pdf');
    }

    // id card create
    public function idCardCreate(Request $request){
        $this->idCardCreateValidation($request, 'create');
        $data = $this->getidCardData($request);
        $fileName = uniqid() . $request->file('employeePhoto')->getClientOriginalName();
        $request->file('employeePhoto')->storeAs('public/employeePhoto',$fileName);
        $data['image'] = $fileName;

        IDcard::create($data);
        return back()->with(['success' => 'ID Card Created successfully!']);
    }

    // id card edit
    public function idCardEdit(Request $request){
        $this->idCardCreateValidation($request, 'update');
        $data = $this->getidCardData($request);
        if($request->hasFile('employeePhoto')){
            $dbImage = IDcard::where('id',$request->id)->first();
            $dbImage = $dbImage->image;

            if($dbImage != null){
                Storage::delete('public/employeePhoto/'.$dbImage);
            }

            $fileName = uniqid() . $request->file('employeePhoto')->getClientOriginalName();
            $request->file('employeePhoto')->storeAs('public/employeePhoto',$fileName);
            $data['image'] = $fileName;
        }

        IDcard::where('id', $request->id)->update($data);
        return redirect()->route('admin#idCardListPage');
    }

    // id card delete
    public function idCardDelete($id) {
        $idCard = IDcard::find($id);
        if ($idCard) {
            Storage::delete('public/employeePhoto/' . $idCard->image);
            $idCard->delete();
        }
        return response()->json(['success' => 'ID Card Deleted Successfully.'], 200);
    }

    // id card create validation
    private function idCardCreateValidation($request, $action){
        $validationRule = [
            'employeeId' => 'required|unique:i_dcards,employee_id,'.$request->id,
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
