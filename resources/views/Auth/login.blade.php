<link rel="stylesheet" href="{{ asset('css/login.css') }}">


        <div class="form-container sign-in-container">
            <form action="{{route('login')}}" method="POST">
                @csrf 
                <h1>Sign in</h1>
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <button type="submit">Sign In</button>
            </form>
            <a href="/createAccount">You don't have an account?</a>
            
        </div>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

