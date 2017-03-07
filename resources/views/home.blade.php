@extends('layouts.master')

@section('username', Auth::guest() ? 'Guest' : Auth::user()->name)

@section('content')
<div class="container" ng-controller="home_controller" ng-init="iniciar()">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome!</div>

                <div class="panel-body">
                    <p>Your last login was on: {{Auth::user()->last_login}}</p>
                    <p>Counter: @{{count}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
    <script src="{{asset('/js/angular/app.js')}}"></script>
    <script src="{{asset('/js/angular/controllers/homeController.js')}}"></script>
@endpush
