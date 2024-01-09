<link rel="stylesheet" href="{{ asset('css/login.css') }}">

<div class="form-container sign-up-container">
    <form action="{{route('register') }}" method="POST">
        @csrf 
        <h1>Create Account</h1>
        <input type="text" name="name" placeholder="Name" />
        <input type="email" name="email" placeholder="Email" />
        <input type="password" name="password" placeholder="Password" />
        <button type="submit">Sign Up</button>
    </form>
</div>