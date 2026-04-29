@extends('layouts.app')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">add student</h3>
              </div>
        <form  action= "{{ route('student.store') }}"


                      @csrf

                        <div class="form-group col-12">
                          <label for="exampleInputPassword1">Last Name</label>
                          <input type="text" class="form-control" id="lname" name="lname" placeholder="Enter your Last Name">
                        </div>
                          @error('lname') <span class="text-danger">{{$message}}</span> @enderror

                       <div class="row card-body col-12">
                         <div class="form-group col-12">
                            <label
                               for="exampleInputEmail1">First Name
                            </label>
                               <input type="text" class="form-control g-2" id="fname" name="fname" placeholder="Enter your Firstname" require>
                         </div>
                          @error('fname') <span class="text-danger">{{$message}}</span> @enderror

                        <div class="form-group col-12">
                           <label for="exampleInputFile">Middle Name</label>

                          <input type="text" class="form-control" id="midname" name="midname" placeholder="Enter your Middle Name">
                        </div>
                          @error('midname') <span class="text-danger">{{$message}}</span> @enderror


                        <div class="form-group col-12">
                          <label for="exampleInputEmail1">Address</label>
                          <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address">
                        </div>
                          @error('address') <span class="text-danger">{{$message}}</span> @enderror



                        <div class="form-group col-6">
                          <label for="exampleInputPassword1">DATE OF BIRTH</label>
                          <input type="date" class="form-control" id="dob" name="dob" placeholder="dd/mm/yyyy">
                        </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer ">
                  <button type="submit" class="btn btn-success col-12">Submit</button>
                </div>
                </form>
@endsection

