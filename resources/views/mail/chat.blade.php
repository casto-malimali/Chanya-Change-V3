<!DOCTYPE html>
<html>
<head>
    <title>New Chat Form Submission</title>
</head>
<body>
<p>Dear, <i>Madam Pam</i></p>
<p>Hope this email finds you well.</p>
<p>Please review the data from the Chanyachange website</p>
    <h2>Chat Form Submission</h2>
    <p><strong>Name:</strong> {{ $chatData['name'] }}</p>
    <p><strong>Phone:</strong> {{ $chatData['phone'] }}</p>
    <p><strong>Email:</strong> {{ $chatData['email'] }}</p>
    <p><strong>Message:</strong> {{ $chatData['msg'] }}</p>
</body>
</html>
