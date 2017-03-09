@extends('layouts.master')

@section('username', Auth::guest() ? 'Guest' : Auth::user()->name)

@section('content')

    <div id="main-panel" class="row" style="display: none">
        <div class="col-md-offset-3 col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Your Profile</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <form class="form-horizontal" role="form" method="POST" action="{{ URL::to('/api/user/'.Auth::id()) }}">

              {{csrf_field()}}

              {{ method_field('PUT') }}

              <div class="box-body">
                <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">Name</label>

                  <div class="col-sm-10">
                    <input id="name" name="name" type="text" class="form-control" placeholder="Your name" value="{{$user->name}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">E-mail</label>

                  <div class="col-sm-10">
                    <input id="email" name="email" type="text" class="form-control" placeholder="Your e-mail" value="{{$user->email}}" disabled>
                  </div>
                </div>

                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Change Password</label>

                  <div class="col-sm-5">
                    <input id="password" name="password" type="password" class="form-control" placeholder="New Password">
                  </div>
                  <div class="col-sm-5">
                    <input name="confirm" type="password" class="form-control" placeholder="Confirm">
                  </div>

                </div>


              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                {{-- <button type="submit" class="btn btn-default">Cancel</button> --}}
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
    </div>

@endsection

@push('script')

    <script>
    
        $( document ).ready(function() {
          $('#main-panel').fadeIn();
        });
    
    </script>
@endpush

