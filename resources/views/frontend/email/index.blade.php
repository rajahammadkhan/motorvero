<!DOCTYPE html>
<html>
<head>
    <title>motorvero.com</title>
</head>
<body>
<h1><a href="{{url('detail'.'/'.$contact_dealer['id'])}}">{{ $contact_dealer['title'] }}</a></h1>
<p>{{ $contact_dealer['first_name'] }}</p>
<p>{{ $contact_dealer['last_name'] }}</p>
<p>{{ $contact_dealer['about_car'] }}</p>
<p>{{ $contact_dealer['zip'] }}</p>
<p>{{ $contact_dealer['phone'] }}</p>
<p>{{ $contact_dealer['comments'] }}</p>
<p>Thank you</p>
</body>
</html>
