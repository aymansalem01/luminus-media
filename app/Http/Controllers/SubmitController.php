<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Contact;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class SubmitController extends Controller
{

    public function contact(Request $request)
    {

        $request->validate([
            'f_name' => 'required',
            'l_name' => 'required',
            'email' => 'required|email',
            'phone_number' => [
                'required',
                'regex:/^(079|077|078)\d{7}$/'
            ],
            'message' => 'nullable'
        ]);
        Contact::create([
            'name' => $request->f_name . ' ' . $request->l_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'message' => $request->message
        ]);
        return redirect()->back()->with(['success' => 'Thanks We will contact with you as soon as possible']);
    }



    public function booking(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'entity' => 'required',
            'email' => 'required |email',
            'phone_number' => [
                'required',
                'regex:/^(079|077|078)\d{7}$/'
            ],
            'start_date' => 'required',
            'duration' => 'required',
            'project_type' => 'required',

        ]);

        Booking::create([
            'name' => $request->name,
            'entity' => $request->entity,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'studios' => $request->studios,
            'start_date' => $request->start_date,
            'duration' => $request->duration,
            'project_type' => $request->project_type,
            'note' => $request->note
        ]);
        return redirect()->back()->with(['success' => 'Thanks We will contact with you as soon as possible']);
    }
}
