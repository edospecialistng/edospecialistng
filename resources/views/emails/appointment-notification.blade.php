<h2>New Appointment Booking</h2>

<p><strong>Name:</strong> {{ $appointment->full_name }}</p>

<p><strong>Email:</strong> {{ $appointment->email }}</p>

<p><strong>Phone:</strong> {{ $appointment->phone }}</p>

<p><strong>Department:</strong> {{ $appointment->department }}</p>

<p><strong>Date:</strong> {{ $appointment->appointment_date }}</p>

<p><strong>Time:</strong> {{ $appointment->appointment_time }}</p>

<p><strong>Consultation:</strong> {{ $appointment->consultation_type }}</p>

<p><strong>Message:</strong></p>

<p>{{ $appointment->additional_information }}</p>