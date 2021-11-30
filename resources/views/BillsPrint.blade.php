<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bills Print Details</title>
    <script type="text/javascript" src="{{asset('js/jquery.printPage.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
</head>
<body>
    <h1>Bills of {{$bill->billing_month}}, {{$bill->billing_year}}</h1>
    <p><b>Flat Name:</b>{{$flat->flat_name}}</p>
    <p><b>Tenant Name:</b>{{$tenant->name}}</p>
    <p><b>Rent:</b>{{$bill->rent}}</p>
    <p><b>Service Charge:</b>{{$bill->service_charge}}</p>
    <p><b>Electricity Bill:</b>{{$bill->electricity_bill}}</p>
    <p><b>Water Bill:</b>{{$bill->water_bill}}</p>
    <p><b> Bill:</b>{{$bill->gas_bill}}</p>
    <p><b>Telephone Bill:</b>{{$bill->telephone_bill}}</p>
    <p><b>Garage Bill:</b>{{$bill->garage_bill}}</p>
    <p><b>Total Bill:</b>{{$bill->total_bill}}</p>
</body>
</html>
