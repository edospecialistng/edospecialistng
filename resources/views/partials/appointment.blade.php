<section class="appointment section" id="appointment">

    <div class="container">

        <div class="appointment-wrapper">

            <!-- Left Side -->

            <div class="appointment-image">

                <img src="{{ asset('images/appointment.jpg') }}" alt="Appointment">

                <div class="experience-card">

                    <h2>30+</h2>

                    <p>Years of Healthcare Excellence</p>

                </div>

            </div>

            <!-- Right Side -->

            <div class="appointment-form">

                <span class="section-tag">

                    Book Appointment

                </span>

                <h2>

                    Schedule Your Visit

                </h2>

                <p>

                    Complete the form below and our team will contact you to
                    confirm your appointment.

                </p>

              @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form wire:submit.prevent="submit">

    <div class="form-grid">

        <div class="form-group">

            <input
                type="text"
                wire:model.defer="full_name"
                placeholder="Full Name">

            @error('full_name')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="form-group">

            <input
                type="email"
                wire:model.defer="email"
                placeholder="Email Address">

            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="form-group">

            <input
                type="tel"
                wire:model.defer="phone"
                placeholder="Phone Number">

            @error('phone')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="form-group">

            <select wire:model.defer="department">

                <option value="">Select Department</option>

                <option value="Cardiology">Cardiology</option>

                <option value="Orthopaedics">Orthopaedics</option>

                <option value="Paediatrics">Paediatrics</option>

                <option value="Neurology">Neurology</option>

                <option value="General Surgery">General Surgery</option>

            </select>

            @error('department')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        <!--
        <div class="form-group">

            <select>

                <option>Select Doctor</option>

                <option>Dr. John Asemota</option>

                <option>Dr. Grace Omoregie</option>

                <option>Dr. Faith Osagie</option>

            </select>

        </div>
        -->

        <div class="form-group">

            <input
                type="date"
                wire:model.defer="appointment_date">

            @error('appointment_date')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="form-group">

            <input
                type="time"
                wire:model.defer="appointment_time">

            @error('appointment_time')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

        <div class="form-group">

            <select wire:model.defer="consultation_type">

                <option value="">Consultation Type</option>

                <option value="General Consultation">General Consultation</option>

                <option value="Specialist Consultation">Specialist Consultation</option>

                <option value="Emergency Visit">Emergency Visit</option>

            </select>

            @error('consultation_type')
                <small class="text-danger">{{ $message }}</small>
            @enderror

        </div>

    </div>

    <textarea
        rows="6"
        wire:model.defer="additional_information"
        placeholder="Additional Information"></textarea>

    @error('additional_information')
        <small class="text-danger">{{ $message }}</small>
    @enderror

    <button
        type="submit"
        wire:loading.attr="disabled">

        <span wire:loading.remove>
            <i class="fa-solid fa-calendar-check"></i>
            Book Appointment
        </span>

        <span wire:loading>
            <i class="fa-solid fa-spinner fa-spin"></i>
            Booking...
        </span>

    </button>

</form>

            </div>

        </div>

    </div>

</section>