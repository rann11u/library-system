<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem Perpustakaan</title>
    <link rel="stylesheet" href="{{ asset('css/login/style.login.css') }}">
</head>
<body>
    <div class="login-box">
        <h2>Login Sistem Perpustakaan</h2>

        @if ($errors->any())
            <div class="alert-error">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login.submit') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    value="{{ old('email') }}"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    required
                >
            </div>

            <button type="submit" class="btn btn-login">Login</button>
        </form>
    </div>
</body>
</html>