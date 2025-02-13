@component('mail::message')
<div style="display: block; margin: 0 auto;">
<h2 style="font-size: 16px; font-weight: 500; color: #444; border-bottom: 1px solid #555; padding-bottom: 3px;">Plumbing Inquiry from: &nbsp;<b style="text-transform: uppercase;">{{ $data['location'] }}</b></h2>
<br>
<p style="font-size:15px;"><span style="display:inline-block; min-width: 130px; font-size: 11px; color: #555; text-transform: uppercase; font-weight: 500;">Customer Name: </span> {{ $data['name'] }}</p>
<p style="font-size:15px;"><span style="display:inline-block; min-width: 130px; font-size: 11px; color: #555; text-transform: uppercase; font-weight: 500;">Email: </span> <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></p>
<p style="font-size:15px;"><span style="display:inline-block; min-width: 130px; font-size: 11px; color: #555; text-transform: uppercase; font-weight: 500;">Phone: </span> <a href="tel:1-{{ $data['phone'] }}">{{ $data['phone'] }}</a></p>
<p style="font-size:15px;"><span style="display:inline-block; min-width: 130px; font-size: 11px; color: #555; text-transform: uppercase; font-weight: 500;">Message: </span> <span style="display: inline-block;">{{ $data['message'] }}</span></p>
</div>
@endcomponent

