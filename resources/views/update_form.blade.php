@extends('master.app')

@section('content')
<div class="app p-3">
    <div class="container-fluid p-3 rounded border border">
        <div class="row justify-content-center">
            <div class="col-md-4 col-12 mt-2">
                <div class="container border border-dark rounded shadow-sm p-3 h-100">
                    <form class="needs-validation" method="post" action="{{ route('update') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="text"class="form-control" hidden id="id" name="id" value="{{$form_data['id']}}">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text"class="form-control" id="name" name="name" value="{{$form_data['name']}}">
                        </div>
                        <div class="form-group">
                            <label for="age"> Age</label>
                            <input type="number" class="form-control" id="age"  name="age"  value="{{$form_data['age']}}">
                        </div>
                        <div class="form-group">
                            <label> Current File</label><br>
                            <a href="/storage/files/{{$form_data['id']}}/{{$form_data['file']}}">{{$form_data['file']}}</a>
                        </div>
                        <div class="form-group">
                            <label for="file">Update File</label>
                            <input type="file" class="form-control-file" accept=".doc, .docx, .pdf" id="file"  name="file" >
                        </div>
                        <div class="text-center mt-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection