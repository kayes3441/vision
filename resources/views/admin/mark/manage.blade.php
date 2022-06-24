@extends('master.admin.master')


@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All Student Info </h4>
                    <p class="text-center text-success">{{Session::get('message')}}</p>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Student Name</th>
                            <th>Student Id</th>
                            <th>Course Name</th>
                            <th>Course Id</th>
                            <th>Marks</th>
                            <th>Grade</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($marks as $mark)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$mark->student->name}}</td>
                                <td>{{$mark->student->id}}</td>
                                <td>{{$mark->course->name}}</td>
                                <td>{{$mark->course->id}}</td>
                                <td>{{$mark->mark}}</td>
                                <td>{{$mark->grade}}</td>
                                <td>
                                    <a href="#" class="btn btn-success btn-sm">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
