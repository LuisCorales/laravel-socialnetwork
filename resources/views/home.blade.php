@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="/img/logo-devniors.png" class="rounded-circle" style="height: 200px;" alt="">
        </div>
        <div class="col-9 pt-5">
            <div><h1 class="font-weight-lighter">{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>140</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>120</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">Somos DevNiors!</div>
            <div>🎯 | Amigos desarrolladores;<br>💡 | Tips, anécdotas y variedades de #programacion;<br>💻 | Codear es nuestro camino ninja;</div>
            <div><a href="#">google.com</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="/img/logo-devniors.png" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/logo-devniors.png" class="w-100">
        </div>
        <div class="col-4">
            <img src="/img/logo-devniors.png" class="w-100">
        </div>
    </div>

</div>
@endsection
