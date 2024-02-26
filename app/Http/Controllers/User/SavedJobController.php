<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use App\Models\SavedJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SavedJobController extends Controller
{
    public function history($userId = null)
    {
        // Assuming $userId is the authenticated user's ID if not provided
        if (!$userId) {
            $userId = Auth::id();
        }

        // Retrieve job applications for the user
        $appliedCareers = JobApplication::where('user_id', $userId)->get();

        // Retrieve distinct career_ids from saved jobs
        $distinctSavedJobIds = SavedJob::where('user_id', $userId)->distinct('career_id')->pluck('career_id');

        // Retrieve saved jobs for the user with related career information
        $savedJobs = SavedJob::where('user_id', $userId)->with('career')->get();

        return view('pages.user.applications', compact('appliedCareers', 'savedJobs'));
    }

    public function create()
    {
        return view('saved-jobs.create');
    }

    // public function saveJob(Request $request, $careerId)
    // {
    //     // Validasi jika diperlukan
    //     $request->validate([
    //         'user_id' => 'required',
    //         'is_saved' => 'required|boolean',
    //     ]);

    //     // Simpan data ke dalam tabel saved_jobs
    //     SavedJob::create([
    //         'user_id' => auth()->id(),
    //         'career_id' => $careerId,
    //         'is_saved' => $request->is_saved,
    //     ]);

    //     return redirect()->back()->with('success', 'Pekerjaan disimpan.');
    // }

    public function saveJob(Request $request, $careerId)
    {
        $request->validate([
            'user_id' => 'required',
            'is_saved' => 'required|boolean',
        ]);

        $user = auth()->user();

        // Check if the job is already saved
        $savedJob = SavedJob::where('user_id', $user->id)
            ->where('career_id', $careerId)
            ->first();

        // If the job is already saved, update the is_saved status
        if ($savedJob) {
            $savedJob->update(['is_saved' => $request->is_saved]);
        } else {
            // If not saved, create a new entry
            SavedJob::create([
                'user_id' => $user->id,
                'career_id' => $careerId,
                'is_saved' => $request->is_saved,
            ]);
        }

        return redirect()->back()->with('success', 'Pekerjaan disimpan.');
    }
}
