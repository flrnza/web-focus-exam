@extends('master.app')

@section('content')
<div class="app p-3">
    <div class="container-fluid p-3 rounded border border">
        <div class="row">
            <div class="col-md-3 col-12 mt-2">
                <div class="container border border-dark rounded shadow-sm p-3 h-100">
                    <form class="needs-validation" method="post" action="{{ route('submit') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text"class="form-control" id="name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="age"> Age</label>
                            <input type="number" class="form-control" id="age"  name="age" >
                        </div>
                        <div class="form-group">
                            <label for="file">File</label>
                            <input type="file" class="form-control-file" accept=".doc, .docx, .pdf" id="file"  name="file" >
                        </div>
                        <div class="text-center mt-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-9 col-12 mt-2">
                <div class="container border border-dark rounded shadow-sm p-3 h-100">
                <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">File</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($form_data as $key => $data): ?>
                            <tr>
                                <td>{{$data['name']}}</td>
                                <td>{{$data['age']}}</td>
                                <td>
                                    <a href="/storage/files/{{$data['id']}}/{{$data['file']}}">{{$data['file']}}</a>
                                    
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="/update/info/{{$data['id']}}">Update</a>
                                    <a class="btn btn-danger" href="/delete/input/{{$data['id']}}">Delete</a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection