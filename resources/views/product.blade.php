@extends('layouts.app')
@section('content')
    <div class="container">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 "  style="background-color:yellow;">
                    <p>REWOW</p>
                </div>

                <div class="col-sm-1" style="background-color:gray;">

                </div>
                <div class="col-sm-8" style="background-color:pink;">

                </div>
            </div>

            <div class="row">
                <div class="col-sm-3" style="background-color:white;">
                    <p>HISTORIA</p>
                </div>

                <div class="col-sm-1" style="background-color:gray;">

                </div>
                <div class="col-sm-8" style="background-color:pink;">

                </div>
            </div>
        </div>

        <form action="{{ route('product.search', 0) }}" method="GET" class="form-horizontal">
            {{ csrf_field() }}
            <div class="row ">
                <div class="col-md-6 offset-4">
                    <a href="{{ route('product.create') }}" class="btn btn-primary "> Nueva Cita </a>
                </div>
            </div>
        </form>
        <div class="row">

            <div class="col-md-4">
                <div class="card-body">
                <table class="table mt-3">
                    <tbody>
                    <tr>
                        @foreach ($appoinment as $product)
                            <td>
                                {{ $product->name}} <br>

                        @endforeach

                        @foreach ($petInformation as $product)
                            {{ $product->name}}
                            </td>
                        @endforeach
                    </tr>
                    </tbody>
                </table>
                </div>
            </div>
            <div class="col-md-8 offset-2">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 offset-2">
            </div>
        </div>
    </div>
@endsection
