<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <title>Login</title>
    <style>
        .show-password input[type="checkbox"] {
            margin-right: 5px;
        }
    </style>
</head>
<body id="bg-login">
    <form method="POST" action="{{ route('login') }}">    
        @csrf
        <div class="form-login">
            <h2>Login</h2>
            <div class="mb-3">
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>  
            <div class="show-password">
                <input type="checkbox" id="showPassword" onclick="togglePassword()"> 
                <label for="showPassword">Show Password</label>
            </div>                                       
            <br>                                   
            <button type="submit" class="btn btn-success">Login</button>
            <a style="font-size: 15px;" href="{{ route('user.dashboard')}}" class="btn btn-link">Back</a>
        </div>
    </form>

    <script>
        function togglePassword() {
            const passwordField = document.getElementById('password');
            const showPasswordCheckbox = document.getElementById('showPassword');
            if (showPasswordCheckbox.checked) {
                passwordField.type = 'text';
            } else {
                passwordField.type = 'password';
            }
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
