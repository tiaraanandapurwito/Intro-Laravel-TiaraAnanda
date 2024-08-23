@extends('layout.main')

@section('title', 'Edit')

@section('content')
    <h1>Edit Cast</h1>

    <form action="/cast/{{ $cast->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required value="{{ $cast->nama }}">
        </div>
        <div>
            <label for="umur">Umur:</label>
            <input type="text" id="umur" name="umur" required value="{{ $cast->umur }}">
        </div>
        <div>
            <label for="Bio">Bio:</label>
            <textarea id="bio" name="bio">{{ $cast->bio }}</textarea>
        </div>
        <button type="submit">Save</button>
    </form>
@endsection