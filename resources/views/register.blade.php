<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Register</title>
</head>
    <form method="post" action="{{ route('register') }}">
<body id="bg-login">
    <div class="form-login">
        <h2>Register</h2>
            @csrf
            <div>
                <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control" placeholder="Nama" required>
                @error('name')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control"  placeholder="Email" required>
                @error('email')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <input type="password" id="password" name="password" class="form-control"  placeholder="Password" required>
                @error('password')
                    <div>{{ $message }}</div>
                @enderror
            </div>

            <div>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"  placeholder="Confirm Password" required>
            </div>

            <div>
                <select name="role" class="form-control" placeholder="Role">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <button type="submit">Submit</button>
            <a>Sudah Punya Akun? <a style="font-size: 15px;" href="{{ route('login.form')}}">Login</a>
        </form>
    </div>
</body>
</html>