@extends('app')

@section('title', 'Message Successfully Sent')

@section('description', 'Thank you for contacting Northbrook DPS Plumbers.')

@section('content')

    <div id="thank_you_page" class="interior_page no_carousel">

        <section id="message_note_section" class="section_row py-5" >
            <div class="content_wrap">

                <h1 class="section_heading text-center mb-5">Submission Notice</h1>

                <div class="col-lg-12 text-center mb-4">

                    @if($success_note)

                        <p class="alert alert-success fs-5 fw_500">
                            {{ $success_note }}
                        </p>

                    @endif

                </div>
            </div>
        </section> <!--end of .row -->
    </div>

@endsection
