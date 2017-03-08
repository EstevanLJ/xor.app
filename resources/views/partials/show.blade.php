@extends('layouts.master')

@section('username', Auth::guest() ? 'Guest' : Auth::user()->name)

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-heading">Success!</div>

                <div class="panel-body">      
                    <span><strong>{{$url->description}}</strong> - Copy and share: </span>
                            
                    <h1><a target="_blank" href="{{URL::to('/'.$url->short)}}">{{URL::to('/'.$url->short)}}</a></h1>
                    <br>

                    <button id="btn_copiar" class="btn btn-primary" value="{{URL::to('/'.$url->short)}}">Copy URL</button>
                    <a id="btn_copiar" class="btn btn-default pull-right" href="{{URL::to('/view/url')}}">Back to list</a>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('script')    

    <script>
        $( document ).ready(function() {

           $('#btn_copiar').click((event) => {
               var $temp = $("<input>");
               $("body").append($temp);
               $temp.val(event.target.value).select();
               document.execCommand("copy");
               $temp.remove();
           });
        });
    </script>

@endpush