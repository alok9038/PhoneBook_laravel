@extends('base')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-5 ">
                <div class="card border-0 pb-4">
                    <div class="card-header bg-info" style="border-radius: .5rem; box-shadow: 0 1px 2px 0 rgba(60,64,67,0.302), 0 2px 6px 2px rgba(60,64,67,0.149);">
                        Contact List
                    </div>
                    @foreach ($records as $record)
                    <div class="card-body mt-2 " style="border-radius: .5rem; box-shadow: 0 1px 2px 0 rgba(60,64,67,0.302), 0 2px 6px 2px rgba(60,64,67,0.149);">
                        
                            <div class="row">
                                <div class="col-3 ">
                                    <div class="rounded-circle bg-dark" style="height: 80px;">
                                        <img src="{{ asset('dp/'.$record->dp) }}" class="img-fluid h-100 w-100 rounded-circle" alt="">
                                    </div>
                                </div>
                                <div class="col ms-3">
                                    <h6 class="text-capitalize"><a href="{{ route('contact.show',$record->id) }}" class="text-dark text-decoration-none">{{ $record->name }}</a></h6>
                                    <p>+91 {{ $record->contact }}</p>
                                </div>
                                <div class="col-2 pt-3">
                                    <a href="{{ route('contact.show',$record->id) }}" class="text-muted text-decoration-none ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16 " fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-7 position-fixed" style="right: 100px; width:50%;">
                <div class="card border-0">
                    
                    <div class="card-body p-0 "  style="border-radius: 1rem; box-shadow: 0 1px 2px 0 rgba(60,64,67,0.302), 0 2px 6px 2px rgba(60,64,67,0.149);">
                        <div class="box" style="height: 400px;">
                            <div class="box-up" style="background-image: url({{ asset('dp/'.$r->dp) }});height:288px; background-size:cover; background-position:center; border-radius:1rem 1rem 0 0;">
                            </div>
                            <div class="box2 bg-white h-auto p-5 pt-4" style="border-radius: 1.5rem 1.5rem 1rem 1rem; margin-top:-20px">
                                <div class="row">
                                    <div class="col-10 ps-5">
                                        <h5>{{ $r->name }}</h5>
                                        <h6 class="h6">+91 {{ $r->contact }}</h6>
                                    </div>
                                    <div class="col">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
                                          </svg>
                                    </div>
                                    <div class="col">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-fill" viewBox="0 0 16 16">
                                            <path d="M8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6-.097 1.016-.417 2.13-.771 2.966-.079.186.074.394.273.362 2.256-.37 3.597-.938 4.18-1.234A9.06 9.06 0 0 0 8 15z"/>
                                          </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection