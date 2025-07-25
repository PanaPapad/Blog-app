<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Blog Admin</title>
</head>
<body>
    <div>
        <h1>Login</h1>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                @error('password')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
