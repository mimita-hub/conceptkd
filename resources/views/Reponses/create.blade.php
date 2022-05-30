@extends('Sujets.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Sujets.index')}}"> Retour</a>
            </div>
        </div>
    </div>

    <form action="{{ route('store_reponse',['id'=>$data])}}" method="POST">
        @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group text-center">


            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">


                <label for="reponse1">Réponse 1:</label>
              <input type="text" class="form-control" id="reponse1" name="reponse1" >
            </div>
            {{--
            <div class="form-group">
                <label for="rep1">{{$sujet->qst2}}:</label><br>
                <label for="reponse2">Réponse 2:</label>
                <input type="text" class="form-control" id="reponse2" name="reponse2" >
            </div>
            <div class="form-group">
                <label for="rep1">{{$sujet->qst3}}:</label><br>
                <label for="reponse3">Réponse 3:</label>
                <input type="text" class="form-control" id="reponse3" name="reponse3" >
            </div>
            <div class="form-group">
                <label for="rep1">{{$sujet->qst4}}:</label><br>
                <label for="reponse4">Réponse 4:</label>
                <input type="text" class="form-control" id="reponse4" name="reponse4" >
            </div>
            <div class="form-group">
                <label for="rep1">{{$sujet->qst5}}:</label><br>
                <label for="reponse5">Réponse 5:</label>
                <input type="text" class="form-control" id="reponse5" name="reponse5" >
            </div>
--}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Enregistrer</button>
</div>
</div>

</form>
@endsection
