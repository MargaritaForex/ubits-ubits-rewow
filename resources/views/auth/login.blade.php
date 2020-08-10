@extends('layouts.appLogin')
<div class="container">
    <div class="row justify-content-center p-5">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body offset-1">
                    WowRe
                </div>
                <div class="card-body">
                    <h6 class="offset-2">Inicia session con: </h6>
                    <div class="col-md-12">
                        <a class="fa fa-facebook" href="{{ route('social.auth', 'facebook') }}">
                            Facebook
                        </a>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <a  href="{{ route('social.auth', 'google') }}" class="fa fa-google">
                            Google
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
