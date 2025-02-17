<!DOCTYPE html>
<html>
<head>
    <title>New Inquiry Received</title>
</head>
<body>
    <h1>New Inquiry</h1>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Contact No.:</strong> {{ $contact_no }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $message }}</p>

    @if(isset($file_name))
        <p><strong>Attachment:</strong> 
            <a href="{{ $file_name }}" target="_blank">Download File</a>
        </p>
    @endif
</body>
</html>
