<!DOCTYPE html>
<html>
<head>
    <title>Send Email</title>
</head>
<body>

<table>
<tr>
    <th>Origin</th>
    <th>Destination</th>
    <th>Space Available</th>
    <th>Driver</th>
</tr>
<tr>
    <td>{!! $posts->origin !!}</td>
    <td>{!! $posts->destination !!}</td>
    <td>{!! $posts->capacity!!}</td>
    <td>{!! $posts->user['name'] !!}</td>
</tr>
</table>
<p>Thank You for Booking Your Ride. Enjoy</p>
</body>
</html>