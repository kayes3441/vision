@extends('master.admin.master')
@section('body')
    <div class="col-lg-10">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Add Student Form</h4>
                <p class="text-center text-success">{{Session::get('message')}}</p>
                <form action="{{route('update.student',['id'=>$student->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row mb-4">
                        <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Student Name</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" value="{{$student->name}}" id="horizontal-firstname-input">
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-email-input" class="col-sm-3 col-form-label">Student Description</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" name="description"  id="horizontal-email-input">{{$student->description}}</textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-4">
                        <label for="horizontal-password-input" class="col-sm-3 col-form-label">Student Image</label>
                        <div class="col-sm-9">
                            <input type="file" name="image" class="form-control-file" value="{{asset('$student->image')}}" id="horizontal-password-input">
                        </div>
                    </div>

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-9">
                            <div>
                                <button type="submit" class="btn btn-primary w-md">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
