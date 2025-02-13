@extends('app')

@section('title', 'Page Not Found')

@section('description', 'We are sorry but we can\'t find this page. Contact local plumber in Lake Zurich, IL for more info.')

@section('content')

    <div id="error_page" class="interior_page">

        <section class="section_row py-3">
            <div class="content_wrap">

                <div class="row featurette">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="display-3 fw-bolder text-lg-start text-dark">
                            404
                        </h1>
                        <p>
                            No routes found.
                        </p>

                        <h4 class="fw-bolder text-start fs-3 mb-2">The page you were looking for could not be found</h4>
                        <br>
                        <p>
                            This could be the result of the page being removed, the name being changed or the page being temporarily unavailable
                        </p>
                        <br>
                        <br>

                        <h4 class="fw-bold text-start fs-3 mb-2">Troubleshooting</h4>
                        <br>
                        <p>
                            If you spelled the URL manually, double check the spelling
                        </p>
                        <p>
                            Go to our website's home page, and navigate to the content in question
                        </p>

                    </div>
                </div>
                <br>
            </div>

        </section>

    </div>

@endsection
