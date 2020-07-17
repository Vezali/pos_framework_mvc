@extends('layouts.app')
 
@section('content')
<div class="container">
<h1>Listagem de Estudos
        <a href="{{ route('studies.create') }}" class="btn btn-outline-info">Cadastrar</a>
    </h1>
    
 
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descrição</th>
                <th>Área</th>
                <th>Data Inicial</th>
                <th>Data Final</th>
                <th>Situação</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach($studies as $study)
                <td>{{ $study->id }}</td>
                <td>{{ $study->description }}</td>
                <td>{{ $study->area->description }}</td>
                <td>{{ $study->date_init }}</td>
                <td>{{ $study->date_finish }}</td>
                <td>{{ $study->status }}</td>
                <td>
                <a href="{{ route('studies.edit', ['study' => $study->id]) }}" class="btn btn-outline-success">Editar</a>
                    <form action="{{ route('studies.destroy', ['study' => $study->id]) }}" method="post">
                        @csrf
                        <input type="hidden" name="_method" value="delete">
                        <button type="submit" class="btn btn-outline-danger">Excluir</button>
                    </form>
                </td>
                </tr>
                @endforeach            
        </tbody>
    </table>
    {{ $studies->links() }}
</div>
 
@endsection