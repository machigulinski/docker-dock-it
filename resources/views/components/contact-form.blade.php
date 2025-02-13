<form class="contact_form needs-validation" method="post" action="{{ url('request-submitted') }}" novalidate>
    @csrf
    <div class="row gy-2 gx-2">
        <div class="col-sm-6">
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" value="">
            <span class="invalid-feedback">{{ 'please enter your first name' }}</span>
            @error('firstname')
                <p class="php_form_error">{{ 'please enter your first name' }}</p>
            @enderror
        </div>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" value="">
            <span class="invalid-feedback">{{ 'please enter your last name' }}</span>
            @error('lastname')
                <p class="php_form_error">{{ 'please enter your last name' }}</p>
            @enderror
        </div>
        <div class="col-sm-5">
            <input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone (10 digits)" value="">
            <span class="invalid-feedback">enter a valid phone number</span>
            @error('phone')
                <p class="php_form_error">{{ 'enter a valid phone number' }}</p>
            @enderror
        </div>
        <div class="col-sm-7">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="" >
            <span class="invalid-feedback">{{ 'please enter a valid email address' }}</span>
            @error('phone')
                <p class="php_form_error">{{ 'please enter a valid email address' }}</p>
            @enderror
        </div>
        <div class="col-12">
            <input type="text" class="form-control" id="location" name="location" placeholder="Enter your location" value="">
            <span class="invalid-feedback">{{ 'please enter your location' }}</span>
            @error('location')
                <p class="php_form_error">{{ 'please enter your location' }}</p>
            @enderror
        </div>
        <div class="col-12 mt-0">
            <input type="text" name="subject" id="subject" placeholder="Subject">
            @if ($errors->has('subject'))
                <div class="alert alert-danger mt-2 mb-0">
                    {{ $errors->first('subject') }}
                </div>
            @endif
        </div>
        <div class="col-12">
            <textarea type="text" class="form-control" id="message" name="message" rows="5" cols="40" maxlength="1000" placeholder="Enter your inquiry" ></textarea>
            <span class="invalid-feedback">{{ 'please enter your message (min 10 characters)' }}</span>
            @error('message')
                <p class="php_form_error">{{ 'please enter your message (min 10 characters)' }}</p>
            @enderror
        </div>
        <div class="col-12 text-center pt-2">
            <input type="hidden" name="formLoadTime" value="{{ \Carbon\Carbon::now()->timestamp }}">
            @if ($errors->has('formLoadTime'))
                <div class="alert alert-danger mt-0 mb-2">
                    {{ $errors->first('formLoadTime') }}
                </div>
            @endif
            <button class="w-100 btn custom_button {{$button}} mt-0 mx-auto" type="submit">Submit</button>
        </div>
    </div>
</form>
