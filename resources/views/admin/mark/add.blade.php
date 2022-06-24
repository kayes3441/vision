@extends('master.admin.master')
@section('body')
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Add Category Form</h4>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <form action="{{route('new.mark')}}" method="post" >
                    @csrf
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Student Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="student_id" >
                                <option value="">--Select Student Name--</option>
                                @foreach($students as $student)
                                    <option value="{{$student->id}}">{{$student->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Student Name</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="course_id" >
                                <option value="">--Select Student Name--</option>
                                @foreach($courses as $course)
                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Mark</label>
                        <div class="col-sm-9">
                            <input type="text" name="mark" class="form-control" id="horizontal-firstname-input">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Grade</label>
                        <div class="col-sm-9">
                            <input type="text" name="grade" class="form-control" id="horizontal-firstname-input">
                        </div>
                    </div>
                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
