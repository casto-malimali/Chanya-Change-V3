<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form Submission</title>
</head>
<body>
    <h2>Contact Form Submission</h2>
    <p><strong>Name:</strong> {{ $contactData['fname'] }}</p>
    <p><strong>Phone:</strong> {{ $contactData['phone'] }}</p>
    <p><strong>Email:</strong> {{ $contactData['email'] }}</p>
    <p><strong>Service Type:</strong> {{ $contactData['type'] }}</p>
    <p><strong>Message:</strong> {{ $contactData['msg'] }}</p>
</body>
</html>
