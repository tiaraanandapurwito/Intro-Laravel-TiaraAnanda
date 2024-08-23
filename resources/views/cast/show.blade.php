@extends('layout.main')

@section('content')
<section>
    <div class="new">
        <a href='/cast/create' class="btn btn primary">Tambah Data</a>
    </div>
<table id="example1" class="table table-bordered table-striped">
    <thead>
        <tr>
            <td style="text-align:center; font-weight:bold">Id</td>
            <td style="text-align:center; font-weight:bold">Nama</td>
            <td style="text-align:center; font-weight:bold">Umur</td>
            <td style="text-align:center; font-weight:bold">Bio</td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $cast->id }}</td>
            <td>{{ $cast->nama }}</td>
            <td>{{ $cast->umur }}</td>
            <td>{{ $cast->bio }}</td>
            <td>
                <a href="/cast/{{ $cast->id }}/edit">Edit</a>
                <form action="/cast/{{ $cast->id }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        </tbody>
    </table>
@endsection