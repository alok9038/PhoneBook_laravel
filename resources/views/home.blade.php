@extends('base')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-12 ">
                <div class="card border-0">
                    <div class="card-header text-white bg-info" style="border-radius: .5rem; box-shadow: 0 1px 2px 0 rgba(60,64,67,0.302), 0 2px 6px 2px rgba(60,64,67,0.149);">
                        Contact List
                    </div>
                    <div class="row mt-4">
                        @foreach ($records as $record)
                            <div class="col-4 mb-3">
                                <div class="card-body" style="border-radius: .5rem; box-shadow: 0 1px 2px 0 rgba(60,64,67,0.302), 0 2px 6px 2px rgba(60,64,67,0.149);">
                                
                                    <div class="row">
                                        <div class="col-3 ">
                                            <a type="button" class="" data-bs-toggle="modal" data-bs-target="#modal{{ $record->id }}">
                                            <div class="rounded-circle bg-dark" style="height: 65px;">
                                                <img src="{{ asset('dp/'.$record->dp) }}" class="img-fluid h-100 w-100 rounded-circle" alt="">
                                            
                                            </div>
                                            </a>
                                        </div>
                                        <div class="col ms-3">
                                            <h6 class="text-capitalize"><a href="{{ route('contact.show',['contact'=>$record->id]) }}" class="text-dark text-decoration-none">{{ $record->name }}</a></h6>
                                            <p>+91 {{ $record->contact }}</p>
                                        </div>
                                        <div class="col-2 pt-3">
                                            <a href="{{ route('contact.show',['contact'=>$record->id]) }}" class="text-muted text-decoration-none ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16 " fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                
                                </div>
                            </div>

                            <div class="modal fade" id="modal{{ $record->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content rounded-0">
                                        <div class="modal-header">
                                        <h5 class="modal-title small" id="exampleModalLabel"> {{ $record->name }}</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-0">
                                        <img src="{{ asset('dp/'.$record->dp) }}" alt="" class="img-fluid w-100 h-100" >
                                        </div>

                                  </div>
                                </div>
                              </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection