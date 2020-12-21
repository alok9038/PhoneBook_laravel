@extends('base')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="card border-light shadow">
                    <div class="card-body">
                        <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" id="" class="form-control rounded-0">
                            </div>
                            <div class="mb-3">
                                <label for="">contact</label>
                                <input type="text" name="contact" id="" class="form-control rounded-0">
                            </div>
                            <div class="mb-3">
                                <label for="">File</label>
                                <input type="file" name="dp" id="" class="form-control rounded-0">
                            </div>
                            <div class="mb-3">
                                <input type="submit" value="Add" class="btn btn-info w-100">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card border-light shadow">
                    <div class="card-body">
                        <table class="table table-borderless table-md">
                            <tr>
                                <th>Name</th>
                                <td>Contact</td>
                                <td>Photo</td>
                                <td>Action</td>
                            </tr>
                            @foreach ($records as $record)
                                <tr>
                                    <td>{{ $record->name }}</td>
                                    <td>{{ $record->contact }}</td>
                                    <td><div class=" rounded-1" style="height: 70px; width:90px;"><img src="{{ asset('dp/'.$record->dp) }}" class="img-fluid h-100 w-100" alt=""></div></td>
                                    <td>
                                        <form action="{{route('contact.destroy',['contact'=>$record->id])}}" method="POST" class="d-inline ">
                    
                                            @csrf
                        
                                            @method('delete')
                        
                                            <input type="submit" class="btn btn-danger " value="Delete">
                                        </form>    
                                    </td>
                                    <td><a href="" data-bs-toggle="modal" data-bs-target="#edit{{ $record->id }}" class="btn btn-info rounded-0">Edit</a></td>
                                </tr>

                                <div class="modal fade" id="edit{{ $record->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content rounded-0">
                                            <div class="modal-header">
                                            <h5 class="modal-title small" id="exampleModalLabel"> {{ $record->name }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body ">
                                                <form action="{{route('contact.update',['contact'=>$record->id])}}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method("put")
                                                    <div class="mb-3">
                                                        <label for="">Name</label>
                                                        <input type="text" name="name" id="" value="{{ $record->name }}" class="form-control rounded-0">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">contact</label>
                                                        <input type="text" name="contact" id="" value="{{ $record->contact }}" class="form-control rounded-0">
                                                    </div>
                                                    <div class="mb-3">
                                                        <img src="{{ asset('dp/'.$record->dp) }}" style="height: 200px; width:200px;" alt="">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="">File</label>
                                                        <input type="file" name="dp" id=""  class="form-control rounded-0">
                                                    </div>
                                                    <div class="mb-3">
                                                        <input type="submit" value="Update" class="btn btn-info w-100">
                                                    </div>
                                                </form>
                                            </div>
    
                                      </div>
                                    </div>
                                  </div>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection