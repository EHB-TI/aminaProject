<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contactverzoek</title>
</head>
<body>
<p>Naam: {{ $details['full_name'] }}</p>
<p>Email: {{ $details['email'] }}</p>
<p>Telefoonnummer: {{ $details['phone_number'] }}</p>
<p>Bericht:</p>
<p>{{ $details['message'] }}</p>
</body>
</html>