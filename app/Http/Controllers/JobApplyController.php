<?php

namespace App\Http\Controllers;

use App\Models\JobApply;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobApplyController extends Controller
{
    // direct route job seeker page
    public function jobSeekerListPage(){
        $jobSeekers = JobApply::get();
        return view('admin.applyer.jobSeekerList', compact('jobSeekers'));
    }

    // job seeker delete
    public function jobSeekerDelete($id)
    {
        $jobSeeker = JobApply::findOrFail($id); // Use findOrFail for better error handling

        // Delete the CV file if it exists
        if ($jobSeeker->cv && Storage::exists('public/applyerCV/' . $jobSeeker->cv)) {
            Storage::delete('public/applyerCV/' . $jobSeeker->cv);
        }

        // Delete the current salary slip file if it exists
        if ($jobSeeker->current_salary_upload && Storage::exists('public/currentSalary/' . $jobSeeker->current_salary_upload)) {
            Storage::delete('public/currentSalary/' . $jobSeeker->current_salary_upload);
        }

        $jobSeeker->delete();
        return response()->json(['success' => 'Job seeker deleted successfully.'], 200);
    }
}
