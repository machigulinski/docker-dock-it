<form class="contact_form needs-validation" method="post" action="request-submitted" novalidate>
    @csrf
    <div class="row gy-3 gx-3">
        <div class="col-sm-6">
            <label for="firstname" class="form-label">First name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="John" value="">
            <span class="invalid-feedback">{{ 'please enter your first name' }}</span>
            @error('firstname')
                <p class="php_form_error">{{ 'please enter your first name' }}</span>
            @enderror
        </div>

        <div class="col-sm-6">
            <label for="lastname" class="form-label">Last name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Doe" value="">
            <span class="invalid-feedback">{{ 'please enter your last name' }}</span>
            @error('lastname')
                <p class="php_form_error">{{ 'please enter your last name' }}</span>
            @enderror
        </div>

        <div class="col-sm-6">
            <label for="phone" class="form-label">Phone</label>
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="555-555-5555" value="">
            <span class="invalid-feedback">please enter a valid phone number</span>
            @error('phone')
                <p class="php_form_error">{{ 'please enter a valid phone number' }}</span>
            @enderror
        </div>

        <div class="col-sm-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="" >
            <span class="invalid-feedback">{{ 'please enter a valid email address' }}</span>
            @error('phone')
                <p class="php_form_error">{{ 'please enter a valid email address' }}</span>
            @enderror
        </div>

        <div class="col-sm-12">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" name="location" placeholder="Enter your location" value="">
            <span class="invalid-feedback">{{ 'please enter your location' }}</span>
            @error('location')
                <p class="php_form_error">{{ 'please enter your location' }}</span>
            @enderror
        </div>

        <div class="col-12">
            <label for="message" class="form-label">Message</label>
            <textarea type="text" class="form-control" id="message" name="message" rows="3" cols="40" maxlength="1000" placeholder="Enter your inquiry" ></textarea>
            <span class="invalid-feedback">{{ 'please enter your message (10-1,000 characters)' }}</span>
            @error('message')
                <p class="php_form_error">{{ 'please enter your message (10-1,000 characters)' }}</span>
            @enderror
        </div>

        <div class="col-12">
            <div id="captcha_column" class="text-center">
                <div class="g-recaptcha text-center d-inline-block mx-auto" data-callback="recaptcha_callback" data-sitekey="{{config('services.recaptcha.site')}}"></div>
                <span class="form_error captchaError"></span>
                @error('g-recaptcha-response')
                    <p class="php_form_error">{{ $errors->first('g-recaptcha-response') }}</span>
                @enderror
            </div>
        </div>
    </div>
    <button class="w-100 btn custom_button {{$button}} mt-3" type="submit">Submit</button>
</form>

<script>
    function recaptcha_callback(){
        $('.captchaError').html('');
    }
</script>


