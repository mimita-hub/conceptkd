@extends('Sujets.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Sujets.index')}}"> Retour</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group text-center">

             <h2>   <strong >Titre:
             {{ $Sujet->titre }}</strong></h2>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="question1"> <strong> Question 1:</strong></label>
                <strong> {{ $Sujet->qst1 }}</strong>

            </div>
          {{-- <div class="form-group">
                <label for="question2"> <strong> Question 2:</strong></label>
                <strong> {{ $Sujet->qst2 }}</strong>

            </div>
            <div class="form-group">
                <label for="question3"> <strong> Question 3:</strong></label>
                <strong> {{ $Sujet->qst3 }}</strong>

            </div>
            <div class="form-group">
                <label for="question4"> <strong> Question 4:</strong></label>
                <strong> {{ $Sujet->qst4 }}</strong>

            </div>
            <div class="form-group">
                <label for="question5"> <strong> Question 5:</strong></label>
                <strong> {{ $Sujet->qst5 }}</strong>

            </div>
--}}
        </div>
    </div>

</div>

</form>
@endsection
