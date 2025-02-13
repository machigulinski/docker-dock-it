@component('mail::message')
<div style="display: inline-block; width: auto; margin: 0 auto;">
<h2 style="font-size: 16px; font-weight: 500; color: #444;">Hi Maxim, you just got a new review from:&nbsp; {{ $data['location'] }}</h2>
<br>
<p style="font-size:15px;"><span style="display:inline-block; min-width: 130px; font-size: 11px; color: #555; text-transform: uppercase; font-weight: 500;">Customer Name: </span> {{ $data['name'] }}</p>
<p style="font-size:15px;"><span style="display:inline-block; min-width: 130px; font-size: 11px; color: #555; text-transform: uppercase; font-weight: 500;">Email: </span> <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a></p>
<p style="font-size:15px;"><span style="display:inline-block; min-width: 130px; font-size: 11px; color: #555; text-transform: uppercase; font-weight: 500;">Stars Received: </span> {{ $data['rating'] }}</p>
<p style="font-size:15px;"><span style="display:inline-block; min-width: 130px; font-size: 11px; color: #555; text-transform: uppercase; font-weight: 500;">Review Content: </span> <span style="font-style: italic;">"{{ $data['review_content'] }}"</span></p>
</div>
@endcomponent
