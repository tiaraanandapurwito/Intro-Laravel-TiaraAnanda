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
            <td style="text-align:center; font-weight:bold">Show</td>
        </tr>
    </thead>
    <tbody>
        @foreach($casts as $cast)
                <tr>
                    <td>{{ $cast->id }}</td>
                    <td>{{ $cast->nama }}</td>
                    <td>{{ $cast->umur }}</td>
                    <td>
                        <a href="/cast/{{ $cast->id }}">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection