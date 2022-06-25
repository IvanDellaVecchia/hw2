@extends('layouts.navigation')

@section('title')
    Cerca Utente
@endsection

@section('script')
    <script src="{{ url('js/likes.js') }}" defer></script>
    <script src="{{ url('js/searchUser.js') }}" defer></script>
@endsection

@section('content')
    <form name="search" id="search">
        <label>
            <input type="text" name="user" placeholder="Cerca un utente">
        </label>
        <label>
            <input type="submit" value="Cerca">
        </label>
    </form>

    <div id="postContainer"></div>
@endsection