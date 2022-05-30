@extends('Sujets.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('Reponses.index')}}"> Retour</a>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group text-center">


        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="reponse1"> <strong> Reponse 1:</strong></label>
                <strong> {{ $Reponse->reponse1 }}</strong>

            </div>
            {{--
            <div class="form-group">
                <label for="reponse2" name="reponse2"> <strong> Reponse 2:</strong></label>
                <strong> {{ $Reponse->reponse2 }}</strong>

            </div>
            <div class="form-group">
            <label for="reponse3" name="reponse3"> <strong> Reponse 3:</strong></label>
                <strong> {{ $Reponse->reponse3}}</strong>

            </div>
            <div class="form-group">
            <label for="reponse4" name="reponse4"> <strong> Reponse 4:</strong></label>
                <strong> {{ $Reponse->reponse4}}</strong>


            </div>
            <div class="form-group">
             <label for="reponse5" name="reponse5"> <strong> Reponse 5:</strong></label>
                <strong> {{ $Reponse->reponse5}}</strong>


            </div>--}}

        </div>
    </div>

</div>

</form>
@endsection
