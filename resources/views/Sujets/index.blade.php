@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Test</h2>
            </div>
            @if(Auth()->user()->role=="prof")
            <div class="pull-left">
                <a class="btn btn-success" href="{{route('Sujets.create')}}"> Créer un nouveau Test </a>
                <a class="btn btn-primary" href="{{ route('Reponses.index') }}">Liste Des Reponses</a>
            </div>
            <br>
            @endif
        </div>
    </div>
 {{--        ici pour afficher le message qui est dans le controller            --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Professeur</th>
            <th>Titre</th>

            <th width="480px">Option</th>
        </tr>

        @foreach ($data as $key => $value)
        <tr>
             <td>{{$value->user->name}}</td>
            <td>{{ $value->titre }}</td>
    @if(Auth()->user()->role=="prof")
            <td>
                <form action="{{ route('Sujets.destroy',$value->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('Sujets.show',$value->id) }}">details</a>
                    <a class="btn btn-primary" href="{{ route('Sujets.edit',$value->id) }}">modifier</a>

                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>

                </form>
            </td>

            @else
            <td>
                <form action="{{ route('Sujets.destroy',$value->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('Sujets.show',$value->id) }}">voir sujet</a>
                    <a class="btn btn-primary" href="{{ route('create_reponse',$value->id) }}">Repondre</a>
                    <a class="btn btn-success" href="{{ route('Reponses.show',$value->id) }}">voir ma reponse</a>





                </form>
            </td>
            @endif
        </tr>



    </tr>


        @endforeach
    </table>
</div>
@endsection
