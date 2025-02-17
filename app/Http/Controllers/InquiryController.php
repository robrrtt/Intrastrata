<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Inquiry;
use Resend;
use Illuminate\Support\Facades\Storage;

class InquiryController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'contact_no' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',
        'file' => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048', // Accept images and PDFs up to 2MB
    ]);

    // Handle File Upload
    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/uploads', $fileName); // Store in 'storage/app/public/uploads'
    } else {
        $fileName = null;
    }

    // Save to Database
    $inquiry = Inquiry::create([
        'name' => $request->name,
        'contact_no' => $request->contact_no,
        'email' => $request->email,
        'message' => $request->message,
        'file_name' => $fileName,
    ]);

    // Send Email with File Attachment
    $this->sendEmail([
        'name' => $inquiry->name,
        'contact_no' => $inquiry->contact_no,
        'email' => $inquiry->email,
        'message' => $inquiry->message,
        'file_name' => $fileName,
    ]);

    return response()->json(['message' => 'Inquiry submitted successfully!'], 201);
}

    private function sendEmail($data)
    {
        // Resend client setup
        $resend = Resend::client(env('RESEND_API_KEY'));

        // Send the email
        $resend->emails->send([
            'from' => 'onboarding@resend.dev',
            'to' => 'rjanipin0610@gmail.com', // replace with your email
            'subject' => 'New Inquiry Received',
            'html' => view('emails.inquiry_received', $data)->render(),
        ]);
    }
}
