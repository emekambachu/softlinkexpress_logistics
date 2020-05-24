<!doctype html>
<html>
<head>
    <title>{{ $shipment->tracking_id }} - Cargo Base Logistics</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <link href="{{ asset('tracking/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
</head>
<body>

<div class="header">
    <h1>Shipment Track</h1>
</div>

<div class="content">
    <div class="content1">
        <h2>Shipment Tracking: {{ $shipment->tracking_id }}</h2>
    </div>
    <div class="content2">
        <div class="content2-header1">
            <p>Origin : <span>{{ $shipment->origin }}</span></p>
        </div>
        <div class="content2-header1">
            <p>Status : <span>{{ $shipment->destination }}</span></p>
        </div>
        <div class="content2-header1">
            <p>Date Started : <span>{{date('jS \of F Y', strtotime($shipment->created_at))}}</span></p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="content3">
        <div class="shipment">

            <div class="confirm">
                <div class="stop1" style="background-color: #98D091;">
                    <img src="{{ asset('tracking/images/confirm.png') }}" alt="confirm order">
                </div>
                <span class="line"></span>
                <p><strong>Shipped</strong></p>
            </div>

            @if(!empty($shipment->stop1))
            <div class="quality">
                <div class="stop1" style="background-color: #98D091;">
                    <img src="{{ asset('tracking/images/dispatch.png') }}" alt="quality check">
                </div>
                <span class="line"></span>
                <p>{{ $shipment->stop1 }}</p>
            </div>
            @else
            <div class="quality">
                <div class="stop1" style="background-color: #F5998E;">
                    <img src="{{ asset('tracking/images/dispatch.png') }}" alt="quality check">
                </div>
                <span class="line"></span>
                <p>Next Stop</p>
            </div>
            @endif

            @if(!empty($shipment->stop2))
                <div class="quality">
                    <div class="stop1" style="background-color: #98D091;">
                        <img src="{{ asset('tracking/images/dispatch.png') }}" alt="quality check">
                    </div>
                    <span class="line"></span>
                    <p>{{ $shipment->stop2 }}</p>
                </div>
            @else
                <div class="quality">
                    <div class="stop1" style="background-color: #F5998E;">
                        <img src="{{ asset('tracking/images/dispatch.png') }}" alt="quality check">
                    </div>
                    <span class="line"></span>
                    <p>Next Stop</p>
                </div>
            @endif

            @if(!empty($shipment->stop3))
                <div class="quality">
                    <div class="stop1" style="background-color: #98D091;">
                        <img src="{{ asset('tracking/images/dispatch.png') }}" alt="quality check">
                    </div>
                    <span class="line"></span>
                    <p>{{ $shipment->stop3 }}</p>
                </div>
            @else
                <div class="quality">
                    <div class="stop1" style="background-color: #F5998E;">
                        <img src="{{ asset('tracking/images/dispatch.png') }}" alt="quality check">
                    </div>
                    <span class="line"></span>
                    <p>Next Stop</p>
                </div>
            @endif

            <div class="delivery">
                <div class="imgcircle">
                    <img src="{{ asset('tracking/images/delivery.png') }}" alt="delivery">
                </div>
                <p>Product Delivered</p>
            </div>

            <div class="clear"></div>
        </div>
    </div>
</div>

<div class="footer">
    <p>Copyright {{ date('Y') }} © Cargo Base Logistics.</p>
</div>
</body>
</html>
