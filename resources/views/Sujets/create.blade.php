@extends('Sujets.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Ajouter un Sujet</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('Sujets.index') }}"> Retour</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>opps</strong>  vous avez un probléme avec ton input .<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('Sujets.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">

                <strong>Titre:</strong>
                <input type="text" name="titre" class="form-control" placeholder="Entrez le titre">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
              <label for="qst1">Question 1:</label>
              <input type="text" class="form-control" id="qst1" name="qst1">
              <label for="rep1">Réponse 1:</label>
              <input type="text" class="form-control" id="rep1" name="rep1" >
            </div>
            <!--
            <div class="form-group">
                <label for="qst2">Question 2</label>
                <input type="text" class="form-control" id="qst2" name="qst2">
                <label for="rep2">Réponse 2:</label>
                <input type="text" class="form-control" id="rep2" name="rep2">
              </div>
              <div class="form-group">
                <label for="qst3">Question 3</label>
                <input type="text" class="form-control" id="qst3" name="qst3">
                <label for="rep3">Réponse 3:</label>
                <input type="text" class="form-control" id="rep3" name="rep3">
              </div>
              <div class="form-group">
                <label for="qst4">Question 4</label>
                <input type="text" class="form-control" id="qst4" name="qst4">
                <label for="rep4">Réponse 4:</label>
                <input type="text" class="form-control" id="rep4" name="rep4">
              </div>
              <div class="form-group">
                <label for="qst5">Question 5</label>
                <input type="text" class="form-control" id="qst5" name="qst5">
                <label for="rep5">Réponse 5:</label>
                <input type="text" class="form-control" id="rep5" name="rep5">
              </div>
            -->

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
    </div>

</form>
@endsection

