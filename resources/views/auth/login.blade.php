<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .parent {
        display: flex;
        justify-content: center;
        align-items: start;
        height: 100vh;
        margin-top: 2rem;
    }

    .flex-container {
        display: flex;
        flex-direction: column;
        align-items: start;
        justify-content: center;
        width: 60%;
        gap: 2px;
    }

    input {
        width: 100%;
        box-sizing: border-box;
        margin-bottom: .5rem;
    }
</style>

<form method="POST" action="/login">
    @csrf
    <div class="parent">
        <div class="flex-container">
            <h1>Login</h1>
            @if (session('success'))
            <p style="color: green">{{ session('success') }}</p>
            @endif
            @if ($errors->has('credentials'))
            <p style="color: red">{{ $errors->first('credentials') }}</p>
            @endif
            <input name="email" type="email" placeholder="Email" required>
            <input name="password" type="password" placeholder="Password" required>
            <button type="submit">Login</button>
            <p>Create an account. <a href="{{ route('showRegister')}}" target="_self">Register</a></p>

        </div>
    </div>
</form>