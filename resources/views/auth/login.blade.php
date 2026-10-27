<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem Perpustakaan</title>
</head>
<body>
    <h1>Login Sistem Perpustakaan</h1>

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form action="{{ route('login.submit') }}" method="POST">
        @csrf

        <div>
            <label for="email">Email</label>
            <input
                type="email"
                name="email"
                id="email"
                value="{{ old('email') }}"
                required
            >
        </div>
        <div>
            <label for="password">Password</label>
            <input
                type="password"
                name="password"
                id="password"
                required
            >
        </div>
        <button type="submit" onclick="alert('<?php echo 'Login Berhasil!'; ?>')">Login</button>
    </form>
</body>
</html>