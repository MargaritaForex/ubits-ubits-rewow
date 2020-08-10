@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card-body">
                    <form method="POST" action="{{ route('product.save') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-6 offset-3">
                                <input id="name" type="text" class="form-control @error('name')
                                    is-invalid @enderror" name="name" value=""
                                       required autocomplete="name" placeholder="Nombre de la mascota"
                                       autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-3">
                                <select class="form-control" name="type" id="type">
                                    @foreach ($pets as $pet)
                                        <option>{{ $pet->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-6 offset-3">
                                <input id="age" type="text" class="form-control" name="age" value=""
                                       required autocomplete="name" placeholder="Edad" autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-3">
                                <input id="race" type="text" class="form-control @error('name')
                                    is-invalid @enderror" name="name" value=""
                                       required autocomplete="race" placeholder="raza" autofocus>

                            </div>
                        </div>
                        <div class="form-group row offset-3">
                            <div class="col-md-10 offset-1">
                                <input type="submit" class=" btn  btn-primary" value="INICIO"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
