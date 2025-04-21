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

<form method="POST" action="/register">
    @csrf
    <div class="parent">
        <div class="flex-container">
            <h1>Register Form</h1>
            <input name="name" placeholder="Name" value="{{ old('name')}}" required>
            <input name="email" type="email" placeholder="Email" value="{{ old('email')}}" required>
            @error('email')
            <small style="color:red;">{{ $message }}</small>
            @enderror
            <input name="password" type="password" placeholder="Password" required>
            <input name="password_confirmation" type="password" placeholder="Confirm Password" required>
            @error('password')
            <small style="color:red;">{{ $message }}</small>
            @enderror
            <button type="submit">Register</button>
            <p>Already have an account? <a href="{{ route('showLogin')}}" target="_self">Login</a></p>
        </div>
    </div>
</form>