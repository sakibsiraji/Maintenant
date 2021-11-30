<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Mail</title>
</head>
<body>
    <h2>Bills of {{$details['billing_month']}},{{$details['billing_year']}}</h2>
    <p>Rent: {{$details['rent']}}</p>
    <p>Service Charge: {{$details['service_charge']}}</p>
    <p>Electricity Bill: {{$details['electricity_bill']}}</p>
    <p>Electricity Bill Copy: {{$details['electricity_bill_copy']}}</p>
    <p>Water Bill: {{$details['water_bill']}}</p>
    <p>Gas Bill: {{$details['gas_bill']}}</p>
    <p>Telephone Bill: {{$details['telephone_bill']}}</p>
    <p>Garage Bill: {{$details['garage_bill']}}</p>
    <p>Total Bill: {{$details['total_bill']}}</p>
    <p>Comment: {{$details['comment']}}</p>
    <p>Thank You!</p>
</body>
</html>
