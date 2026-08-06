<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Appointment;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentNotification;
use App\Mail\AppointmentConfirmation;

class AppointmentForm extends Component
{
    public $full_name;

    public $email;

    public $phone;

    public $department;

    public $appointment_date;

    public $appointment_time;

    public $consultation_type;

    public $additional_information;

    protected $rules = [

        'full_name'=>'required',

        'email'=>'required|email',

        'phone'=>'required',

        'department'=>'required',

        'appointment_date'=>'required|date',

        'appointment_time'=>'required',

        'consultation_type'=>'required',

        'additional_information'=>'nullable'

    ];

    public function submit()
    {
        $this->validate();

        $appointment = Appointment::create([

            'full_name'=>$this->full_name,

            'email'=>$this->email,

            'phone'=>$this->phone,

            'department'=>$this->department,

            'appointment_date'=>$this->appointment_date,

            'appointment_time'=>$this->appointment_time,

            'consultation_type'=>$this->consultation_type,

            'additional_information'=>$this->additional_information,

        ]);

        Mail::to('info@edospecialisthospital.ng')
            ->send(new AppointmentNotification($appointment));

        Mail::to($this->email)
            ->send(new AppointmentConfirmation($appointment));

        session()->flash(
            'success',
            'Appointment booked successfully.'
        );

        $this->reset();
    }

    public function render()
    {
        return view('livewire.appointment-form');
    }
}