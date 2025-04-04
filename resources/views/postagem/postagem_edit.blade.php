@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Postagem - EDIT</div>

                @if ($errors->any())
                <div class ="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li> {{$error}} </li>
                        @endforeach
                    </ul>
                </div>
                @endif


                <div class="card-body">

                   <form action = "{{ url ('postagem/' . $postagem->id) }}" method = 'POST'>
                    @method('PUT')
                    @csrf

                    <div class ="form-group">

                        <label> Título: </label>

                        <input type = "text" name = "titulo" value = "{{ $postagem->titulo }}" class = "form-control">
                    </div>

                    <button type = "submit" class ="btn btn-primary">Enviar</button>

                   </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
