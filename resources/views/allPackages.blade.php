@extends('layouts.frontend.master')
@section('title')
    Tourist Guide - All Packages
@endsection

@section('css')

@endsection



@section('content')


<div class="container all-places">
    <div class="row justify-content-center py-5">
        <h1><strong>All Packages</strong></h1>
    </div>
    <div class="row">
        @forelse ($packages as $package)
                <div class="col-md-4">
                    <div class="card mx-2 my-3" style="border: 2px solid black">
                        <div class="card-header">
                            <img src="{{ asset('storage/packageImage/'.$package->package_image) }}" alt="" class="img-fluid p-0 m-0">
                        </div>
                        <div class="card-body package-details">
                            <p>Package Name: {{ $package->name }}</p>
                            <p>Price: {{ $package->price }}</p>
                            <p>People: {{ $package->people }}</p>
                        </div>
                        <div class="card-footer bg-dark" >
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="{{ route('user.package.show', $package->id) }}" class="btn btn-info">Details</a>
                                </div>
                                <div>
                                    <a href="" class="btn btn-success">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>    
                </div> 
                @empty
                    <h2 class="my-5 bg-info text-white text-center p-3">No Package Found. Please add some place.</h2>
                @endforelse
    </div>
</div>



@endsection

@section('scripts')
   
@endsection

@section('css')

@endsection
      
