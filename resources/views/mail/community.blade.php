<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h2>Contact Form Submission</h2>
    <p><strong>Name:</strong> {{ $communityData['name'] }}</p>
    <p><strong>Phone:</strong> {{ $communityData['phone'] }}</p>
    <p><strong>Email:</strong> {{ $communityData['email'] }}</p>
    <p><strong>Joined as:</strong> {{ $communityData['communityType'] }}</p>
    <p><strong>Description:</strong> {{ $communityData['description'] }}</p>
</body>
</html>
