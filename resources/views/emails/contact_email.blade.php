<!DOCTYPE html>
<html>

<head>
    <title>Contact Confirmation</title>
</head>

<body>
    <img src='#' class="logo" alt="Launch A Project Logo" style="display: block;margin-left:auto;margin-right:auto"
        height="50" width="150">
    <h2>Hi {{ $name }},</h2>
    <p>Your inquiry has been received. Here are the details:</p>
    <ul style="list-style-type:none">
        <li><b>Name: </b>{{ $name }}</li>
        <li><b>Email:</b> {{ $email }}</li>
        <li><b>Phone Number:</b> {{ $phoneNumber }}</li>
        <li><b>Inquiry:</b> {{ $inquiry }}</li>
        <li><b>Reason:</b> {{ $reason }}</li>
    </ul>
    <p>Thank you for contacting us. We will get back to you soon.</p>

    <p>Thanks,<br>Launch A Project</p>
    <a href="#">Visit our website</a>
</body>

</html>
