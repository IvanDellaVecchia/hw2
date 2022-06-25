@extends('layouts.navigation')

@section('title')
    Crea un nuovo post
@endsection

@section('script')
    <script src="{{ url('js/NewPost.js') }}" defer></script>
@endsection

@section('content')
    <section id="CentralBarN">
        <div class="create">

        <form name="Form" method="post" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <label>
                Inserisci un'immagine:<br>
                <div class="error">@if($errImg) {{ $errImg }} @endif</div>
                <input type='file' name='postImg' accept='.jpg, .jpeg, image/gif, image/png' id="postImg">
            </label>
            <label>
                Inserisci una descrizione:<br>
                <textarea name="description"></textarea>
            </label>
            <label>
                <input type="submit" value="Pubblica" id="SubmitPost">
            </label>
        </form>

        </div>
    </section>
@endsection