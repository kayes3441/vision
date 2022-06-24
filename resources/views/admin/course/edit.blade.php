@extends('master.admin.master')
@section('body')
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Add Course </h4>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <form action="{{route('update.course',['id'=>$course->id])}}" method="post" >
                    @csrf
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Course Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" value="{{$course->name}}" id="horizontal-firstname-input">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Course Code</label>
                        <div class="col-sm-9">
                            <input type="text" name="code" class="form-control" value="{{$course->code}}" id="horizontal-firstname-input">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Course Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="description" id="horizontal-email-input">{{$course->description}}</textarea>
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
