<section class="contact section" id="contact">

    <div class="container">

        <div class="section-header">

            <span class="section-tag">
                Contact Us
            </span>

            <h2>
                We're Here to Help
            </h2>

            <p>
                Contact Edo Specialist Hospital for appointments, enquiries,
                emergency services, or general healthcare information.
            </p>

        </div>

        <div class="contact-wrapper">

            <!-- Contact Information -->

            <div class="contact-info">

                <div class="contact-card">

                    <i class="fa-solid fa-location-dot"></i>

                    <div>

                        <h3>Hospital Address</h3>

                        <p>

                            Edo Specialist Hospital<br>
                            Benin City,<br>
                            Edo State, Nigeria.

                        </p>

                    </div>

                </div>

               

                <div class="contact-card">

                    <i class="fa-solid fa-envelope"></i>

                    <div>

                        <h3>Email</h3>

                        <p>

                            info@edospecialisthospitalng.com

                        </p>

                    </div>

                </div>

                <div class="contact-card">

                    <i class="fa-solid fa-clock"></i>

                    <div>

                        <h3>Opening Hours</h3>

                        <p>

                            Monday - Sunday<br>

                            Open 24 Hours

                        </p>

                    </div>

                </div>

            </div>

            <!-- Contact Form -->

            <div class="contact-form">

                <form wire:submit.prevent="sendMessage">

    @if(session()->has('contact_success'))
        <div class="alert alert-success">
            {{ session('contact_success') }}
        </div>
    @endif

    <input
        type="text"
        wire:model.defer="contact_name"
        placeholder="Full Name">

    @error('contact_name')
        <small class="text-danger">{{ $message }}</small>
    @enderror

    <input
        type="email"
        wire:model.defer="contact_email"
        placeholder="Email Address">

    @error('contact_email')
        <small class="text-danger">{{ $message }}</small>
    @enderror

    <input
        type="text"
        wire:model.defer="contact_subject"
        placeholder="Subject">

    @error('contact_subject')
        <small class="text-danger">{{ $message }}</small>
    @enderror

    <textarea
        rows="6"
        wire:model.defer="contact_message"
        placeholder="Message"></textarea>

    @error('contact_message')
        <small class="text-danger">{{ $message }}</small>
    @enderror

    <button
        type="submit"
        wire:loading.attr="disabled">

        <span wire:loading.remove>
            Send Message
        </span>

        <span wire:loading>
            Sending...
        </span>

    </button>

</form>

            </div>

        </div>

    </div>

</section>