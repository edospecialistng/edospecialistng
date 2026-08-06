<h2>Appointment Received</h2>

<p>Dear {{ $appointment->full_name }},</p>

<p>

Thank you for booking an appointment with
Edo Specialist Hospital.

</p>

<p>

Our appointment desk will contact you shortly
to confirm your booking.

</p>

<p>

<strong>Date:</strong>

{{ $appointment->appointment_date }}

</p>

<p>

<strong>Time:</strong>

{{ $appointment->appointment_time }}

</p>

<p>

Thank you.

</p>