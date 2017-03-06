@extends('layouts.master')

@section('username', Auth::guest() ? 'Guest' : Auth::user()->name)

@section('content')

    <div id="main-panel" class="row" style="display: none">
        <div class="col-md-offset-3 col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Short URL</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" role="form" method="POST" action="{{ URL::to('/url') }}">

              {{csrf_field()}}

              <div class="box-body">
                <div class="form-group">
                  <label for="desc" class="col-sm-2 control-label">Description</label>

                  <div class="col-sm-10">
                    <input id="desc" name="description" type="text" class="form-control" placeholder="A description to the URL">
                  </div>
                </div>
                <div class="form-group">
                  <label for="url" class="col-sm-2 control-label">URL</label>

                  <div class="col-sm-10">
                    <input id="url" name="full" type="text" class="form-control" placeholder="The long URL you want to short">
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

