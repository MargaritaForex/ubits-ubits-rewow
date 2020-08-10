@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 " style="background-color:yellow;">
                    <div class="row">
                        <div class="col-sm-12" style="background-color:#7AC943">
                            <a class="nav-link" href="{{ route('product') }}">
                                <i class="mdi mdi-compass-outline menu-icon"></i>
                                <span class="menu-title"> Historia</span>
                            </a>
                        </div>
                        <div class="col-sm-12" style="background-color:#FCF9F9">
                            <a class="nav-link" href="{{ route('product') }}">
                                <i class="mdi mdi-compass-outline menu-icon"></i>
                                <span class="menu-title"> Citas</span>
                            </a>
                        </div>
                        <div class="col-sm-12" style="background-color:#FCF9F9">
                            <a class="nav-link" href="{{ route('product') }}">
                                <i class="mdi mdi-compass-outline menu-icon"></i>
                                <span class="menu-title"> Tienda</span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-1" style="background-color:#D4D4D4;">
                </div>

                <div class="col-sm-4" class="border">
                    <div class="row">
                        <div class="col-sm-12">
                            <a href="{{ route('product.create') }}" class="btn btn-primary btn-lg btn-block"> Nueva
                                Cita </a>
                        </div>
                        @foreach ($appoinment as $product)
                            <div class="col-sm-12">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        {{ $product->name}}
                                        @foreach ($petInformation as $product)
                                            {{ $product->name}}
                                           @break
                                        @endforeach
                                        @endforeach
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                    </div>
                </div>

                <div class="col-sm-4" class="border">
                </div>
            </div>
        </div>
@endsection
