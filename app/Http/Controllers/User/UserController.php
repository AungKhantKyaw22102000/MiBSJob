<?php

namespace App\Http\Controllers\User;

use App\Models\JobApply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    // direct route index page
    public function index(){
        return view('user.main.home');
    }

    // direct route contact page
    public function contactPage(){
        return view('user.contact.contact');
    }

    // direct route joining page
    public function joiningPage(){
        return view('user.joining.joiningForm');
    }

    // create applyer
    public function apply(Request $request){
        $this->applyerValidationCheck($request);
        $data = $this->getApplyerData($request);
        $data['apply_id'] = $this->generateApplyId();
        // Store the CV
        if($request->file('applyerCV')) {
            $cv = uniqid() . $request->file('applyerCV')->getClientOriginalName();
            $request->file('applyerCV')->storeAs('public/applyerCV', $cv);
            $data['cv'] = $cv;
        }

        // Store the current salary slip
        if($request->file('applyerCurrentPaySlip')) {
            $currentSalary = uniqid() . $request->file('applyerCurrentPaySlip')->getClientOriginalName();
            $request->file('applyerCurrentPaySlip')->StoreAs('public/currentSalary', $currentSalary);
            $dat['current_salary_upload'] = $currentSalary;
        }
        JobApply::create($data);
        return redirect()->route('user#home');
    }

    // Generate unique apply_id
    private function generateApplyId()
    {
        $applyId = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(10/strlen($x)) )),1,10);
        if(JobApply::where('apply_id', $applyId)->exists()) {
            return $this->generateApplyId();
        }
        return $applyId;
    }

    // applyer validation check
    private function applyerValidationCheck($request){
        Validator::make($request->all(),[
            'applyerName' => 'required',
            'applyerPhone' => 'required',
            'desiredPosition' => 'required',
            'applyerNrc' => 'required',
            'educationPurpose' => 'required',
            'educationLevel' => 'required',
            'workExperience' => 'required',
            'englishSkill' => 'required',
            'computerSkill' => 'required',
            'buemeseTypeSpeed' => 'required',
            'englishTypeSpeed' => 'required',
            'currentSalary' => 'required',
            'expectedSalary' => 'required',
            'nearestBusStop' => 'required',
            'shift' => 'nullable',
            'confirm' => 'nullable',
        ])->validate();
    }

    // get applyer data
    private function getApplyerData($request){
        return [
            'name' => $request->applyerName,
            'phone' => $request->applyerPhone,
            'desired_position' => $request->desiredPosition,
            'nrc' => $request->applyerNrc,
            'education_purpose' => $request->educationPurpose,
            'education_lv' => $request->educationLevel,
            'work_experience' => $request->workExperience,
            'english_skill' => $request->englishSkill,
            'computer_skill' => $request->computerSkill,
            'burmese_speed' => $request->buemeseTypeSpeed,
            'english_speed' => $request->englishTypeSpeed,
            'current_salary' => $request->currentSalary,
            'expected_salary' => $request->expectedSalary,
            'nearest_bus_station' => $request->nearestBusStop,
            'noticed_time' => $request->noticedTime,
            'shift' => $request->shift,
            'confirm' => $request->confirm,
        ];
    }
}
