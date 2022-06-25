@extends('layouts.access')

@section('title')
Login
@endsection

@section('script')
    <script src="{{ url('js/login.js') }}" defer></script>
@endsection
        
@section('content')
        <main>
            <h1>ACCEDI</h1>
            <form name="Form"  method="post">
                @csrf
                <p class="errore">
                    @if($error == 'error1')
                        Riempi tutti i campi.
                    @elseif($error == 'error2')
                        Credenziali non valide.
                    @endif
                </p>
                <p>
                <label><input type="text" name="username"> Username</label>
                </p>
                <p>
                <label><input type="password" name="password"> Password</label>
                </p>
                <p>
                <label id="submitlabel"><input type="submit" value=""></label>
                </p>
                <div>Non hai un account? <a href="{{ url('registrazione') }}">Registrati</a></div>
            </form>
        </main>

@endsection
