@extends('layouts.access')

@section('title')
    Registrati
@endsection

@section('script')
    <script src="{{ url('js/SignUp.js') }}" defer></script>
@endsection
        
@section('content')

        <main>
            <h1>REGISTRATI</h1>
            <form name="Form"  method="post">
                @csrf
                <p class="errore">
                    @if($errEmpty)
                        {{ $errEmpty }} 
                    @endif
                </p>

                <div id="nome">
                    <label><input type="text" name="nome" value="{{ old('nome') }}"> Nome</label>
                    <div class="errore"></div>
                </div>
                <div id ="cognome">
                    <label><input type="text" name="cognome" value="{{ old('cognome') }}"> Cognome</label>
                    <div class="errore"></div>
                </div>
                <div id="email">
                    <label><input type="text" name="email" value="{{ old('email') }}"> Email</label>
                    <div class="errore">@if($errEmail) {{ $errEmail }} @endif</div>
                </div>
                <div id="username">
                    <label><input type="text" name="username"> Username</label>
                    <div class="errore">@if($errUser) {{ $errUser }} @endif</div>
                </div>
                <div id="password">
                    <label><input type="password" name="password"> Password</label>
                    <div class="errore">@if($errPass) {{ $errPass }} @endif</div>
                </div>
                <p>
                <label id="submitlabel"><input type="submit" value=""></label>
                </p>
                <div>Hai già un account? <a href="{{ url('login') }}">Accedi</a></div>
            </form>
        </main>

@endsection
