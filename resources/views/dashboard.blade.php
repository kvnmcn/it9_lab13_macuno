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
<div class="parent">
    <div class="flex-container">
        <h1>Welcome, {{ auth()->user()->name }}!</h1>
        <p>You are logged in as {{ auth()->user()->email }}</p>


        <form method="POST" action="/logout">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</div>