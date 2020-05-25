<img src="{{ asset('softlinkexpress_logo.png') }}" width="120">

<h3>Hello {{ $name }}</h3>
<h4>Tracking ID: {{ $tracking_id }}</h4><br>

<p>Your Parcel just arrived at {{ $location }}<br>
    <strong>Tracking ID:</strong> {{ $tracking_id }} <br><br>

    Track your shipment here <a href="{{ url('track-shipment') }}"><strong>here</strong></a>
</p><br><br>

<p align="center">
    For more info, contact <i>info@softlinkexpress.com</i>
</p>
