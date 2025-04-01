@extends('adminlte::page')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Categoria</div>

                <div class="card-body">

                    <a class = "btn btn-success" href ="{{ url ('categoria/create')}}">CRIAR</a>

                        @if (session ('message'))
                        <div class = "alert alert-success">
                            {{ session('message') }}
                        </div>
                        @endif


                    <table class ="table">
                        <tr>
                          <th>ID</th>
                          <th>Nome</th>
                          <th>Ações</th>
                         </tr>

                         @foreach ($categorias as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->nome}}</td>
                            <td>
                            <a class = "btn btn-danger" href = " {{url ('categoria/' . $value->id) }}" >Visualizar</a>
                            <a class = "btn btn-warning" href = ' {{url ('categoria/' . $value->id . '/edit') }}'>Editar</a>

                        </td>
                          </tr>
                        @endforeach


                      </table>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
