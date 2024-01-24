<!DOCTYPE html>
<html lang="en">
<head>
    <title>Email</title>
</head>
<body>
    
    <p> Hello Admin, <b>{{ $clientData['first_name'] }} {{ $clientData['last_name'] }} </b> sent us an email.</p>
    <p> Message: <br> <i>{{ $clientData['message'] }}</i></p>
    <br> <br> <br>
    <h3> <i>Details </i> </h3>
    <p> Sender: <b><i>{{ $clientData['first_name'] }} {{ $clientData['last_name'] }}<i><b> </p>
    <p> Email: <b><i> {{ $clientData['email'] }} </i></b>

</body>
</html>