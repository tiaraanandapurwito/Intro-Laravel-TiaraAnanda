@extends('layout.main')

@section('title', 'Add New Casts')

@section('content')
    <h1>Add New Cast</h1>

    <form action="/cast" method="POST">
        @csrf
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="umur">Umur:</label>
            <input type="text" id="umur" name="umur" required>
        </div>
        <div>
            <label for="Bio">Bio:</label>
            <textarea id="bio" name="bio"></textarea>
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
