@extends('layouts.admin')

@section('content')
    <div class="container mt-5">

        <h2>Modifica progetto</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.projects.update', ['project' => $project->slug]) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3 has-validation">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control " id="title" name="title" value="{{ old('title',$project->title) }}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">descrizione</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{ old('content', $project->description) }}</textarea>
            </div>   

            <button class="btn btn-warning" type="submit">Salva le modifiche</button>
           
        </form>
    </div>
@endsection