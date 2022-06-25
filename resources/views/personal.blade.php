@extends('layouts.navigation')

@section('title')
    Il mio profilo
@endsection

@section('script')
    <script src="{{ url('js/personal.js') }}" defer></script>
    <script src="{{ url('js/likes.js') }}" defer></script>
@endsection

@section('content')
    <div id="personal">
            <img src="" alt="propic">
            <div>
                <p class="AName"></p>
                <p class="AUser"></p>
                <button id="profileButton">Cambia la foto profilo</button>
                <a href="{{ url('eliminaUtente') }}">
                    <button class="elimina">Elimina account</button>
                </a>
        </div>
    </div>

    <form name="profile" method=post class="hidden" id="profileForm" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <label>
            Inserisci un'immagine:<br>
            <div class="error">@if($errPro) {{ $errPro }} @endif</div>
            <input type='file' name='profileImg' accept='.jpg, .jpeg, image/gif, image/png' id="profileImg">
        </label>
        <label>
            <input type="submit" value="Inserisci" id="profileSubmit">
        </label>
    </form>

    <h1>I MIEI POST</h1>
@endsection
