@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div>
            <a href="{{ url()->previous() }}">&leftarrow; Ritorna indietro</a>
        </div>
        <h2 class="text-center">Crea un nuovo progetto</h2>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form class="mt-5" action="{{ route('admin.projects.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">descrizione</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
            </div>

            <button class="btn btn-primary" type="submit">Salva</button>
@endsection