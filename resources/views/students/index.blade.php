@extends('layout/main')

@section('title', 'Daftar Mahasiswa')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-6 mt-3">
            <h1>Daftar Mahasiswa</h1>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <a href="/students/create" class="btn btn-primary mt-3 mb-2">Tambah Data Mahasiswa</a>
            <ul class="list-group">
                @foreach ($students as $student)    
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$student->nama}}
                    <a href="/students/{{$student->id}}" class="badge badge-info">detail</a>
                </li>
            </ul>
            @endforeach
        </div>
    </div>
</div>
@endsection