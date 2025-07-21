<!DOCTYPE html>
<html>
<head>
    <title>Login Admin HMSI</title>
    <style>
        body { font-family: sans-serif; background: #eee; display: flex; justify-content: center; align-items: center; height: 100vh; }
        .login-box { background: white; padding: 2rem; border-radius: 8px; width: 300px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        input[type=text], input[type=password] {
            width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 4px;
        }
        button { background: #4B0082; color: white; border: none; padding: 10px; width: 100%; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>Login Admin</h2>
        @if ($errors->any())
            <div style="color:red;">{{ $errors->first('login') }}</div>
        @endif
        <form method="POST" action="{{ url('/admin/login') }}">
            @csrf
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
