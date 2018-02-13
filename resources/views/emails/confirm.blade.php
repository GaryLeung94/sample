<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sign Up Confirm Link</title>
</head>
<body>
    <h1>Thank you for signing up on Sample! </h1>

    <p>Please click the link below.
        <a href="{{ route('confirm_email', $user->activation_token) }}">
            {{ route('confirm_email', $user->activation_token) }}
        </a>
    </p>

    <p>
        Please ignore this email if you are not the one signing in.
    </p>
</body>
</html>
