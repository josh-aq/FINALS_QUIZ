@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Student Management') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
        <a href="{{ route('student.add') }}" class="btn btn-info">Add New Student</a>
        <div class="row">


                <div class="card-head">

                </div>

                <div class="card-body">



                    <table class="table table-bordered table-stiped fs-1 text-black">

                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Middle Name</th>
                                <th>Dob</th>
                                <th>Address</th>
                            </tr>
                        </thead>

                        <tbody  >
                            @foreach ($students as $student)
                            <tr>

                                <td>{{ $student->id }}</td>
                                <td>{{ $student->fname }}</td>
                                <td>{{ $student->lname }}</td>
                                <td>{{ $student->midname }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ $student->dob }}</td
                                <td>
                                    <a href="{{ route('studentmngt.edit', $student->id) }}" class="btn btn-success btn-sm">Edit</a>

                                    <form action="{{ route('studentmngt.destroy', $student->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Delete this student?')">
                                            Delete
                                        </button>
                                    </form>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>


                <div class="card-footer">

                </div>


            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
