<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

use App\Models\ContactMessage;


class Home extends Component
{
    public $full_name;
    public $email;
    public $phone;
    public $department;
    public $appointment_date;
    public $appointment_time;
    public $consultation_type;
    public $additional_information;

    public $contact_name;

public $contact_email;

public $contact_subject;

public $contact_message;

    protected $rules = [
        'full_name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:20',
        'department' => 'required',
        'appointment_date' => 'required|date',
        'appointment_time' => 'required',
        'consultation_type' => 'required',
        'additional_information' => 'nullable|string',
   

    // Appointment Rules...
    'contact_name' => 'required|string|max:255',
    'contact_email' => 'required|email',
    'contact_subject' => 'required|string|max:255',
    'contact_message' => 'required|string|min:10',
];


    public function submit()
    {
        $this->validate();

      
        // Send email
        Mail::raw(
            "
Name: {$this->full_name}
Email: {$this->email}
Phone: {$this->phone}
Department: {$this->department}
Date: {$this->appointment_date}
Time: {$this->appointment_time}
Consultation: {$this->consultation_type}

Additional Information:
{$this->additional_information}
",
function ($message) {
  $bookingInfoMail = env('BOOKING_INFO_MAIL');

$message->to($bookingInfoMail)->subject($this->consultation_type . ' Appointment Request');
            }
        );

        session()->flash(
            'success',
            'Your appointment request has been submitted successfully.'
        );

        $this->reset();
    }

    public function render()
    {
        return view('livewire.home')
            ->layout('layouts.app');
    }







public function sendMessage()
{
    $this->validate([
        'contact_name' => 'required|string|max:255',
        'contact_email' => 'required|email',
        'contact_subject' => 'required|string|max:255',
        'contact_message' => 'required|string|min:10',
    ]);

    ContactMessage::create([
        'name' => $this->contact_name,
        'email' => $this->contact_email,
        'subject' => $this->contact_subject,
        'message' => $this->contact_message,
    ]);

    Mail::raw(
"
Name: {$this->contact_name}

Email: {$this->contact_email}

Subject: {$this->contact_subject}

Message:
{$this->contact_message}",
        function ($mail) {

            $mail->to(env('CONTACT_INFO_MAIL'))
                 ->replyTo($this->contact_email, $this->contact_name)
                 ->subject( $this->contact_subject);
        }
    );

    session()->flash(
        'contact_success',
        'Your message has been sent successfully.'
    );

    $this->reset([
        'contact_name',
        'contact_email',
        'contact_subject',
        'contact_message'
    ]);
}

}