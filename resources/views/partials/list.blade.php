@extends('layouts.master')

@section('username', 'Admin')

@section('content')

    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">URLs</h3>
                </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Task</th>
                            <th>Progress</th>
                            <th style="width: 40px">Label</th>
                        </tr>
                    </thead>                

                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>Update software</td>
                            <td>
                                <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                </div>
                            </td>
                            <td><span class="badge bg-red">55%</span></td>
                        </tr>
                    </tbody>
                
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
    </div>

@endsection