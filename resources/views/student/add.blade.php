@extends('layouts.app')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form</h3>
              </div>
              <form role="form">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Birthday</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="dd/mm/yyyy">
                  </div>

              <div class="card-body">
                <div class="row">
                  <div class="col-md-5">
                    <label for="exampleInputPassword1">  Weight</label>
                    <input type="text" class="form-control" placeholder="Weight">
                  </div>
                  <div class="col-md-5">
                    <label for="exampleInputPassword1">  Height</label>
                    <input type="text" class="form-control" placeholder="Height">
                  </div>

                </div>
              </div>
              <!-- /.card-body -->
            </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Blood type</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Blood type">
                  </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="cancel" class="btn btn-default">Cancel</button>
                </div>
              </form>
@endsection

