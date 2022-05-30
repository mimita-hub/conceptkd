@extends('Sujets.layout')

@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Liste Des Reponses</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Sujets.index') }}">Retour </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>

              <th>Etudiant</th>
             <th>Sujet</th>
            <th width="380px">Option</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{$value->user->name}}</td>
            <td>{{ $value->sujet->titre }}</td>

            <td>
                <form action="{{ route('Sujets.destroy',$value->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('Reponses.show',$value->id) }}">Voir la réponse</a>

                </form>
            </td>
        </tr>



    </tr>

        @endforeach
    </table>

@endsection
