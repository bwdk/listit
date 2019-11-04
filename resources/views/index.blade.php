@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Latest Business Listings</div>

                <div class="card-body">
                    @if (count($listing))

                        <div class="list-group">
                            @foreach ($listing as $listing)
                                <div class="list-group-item">
                                <a href="/listings/{{ $listing->id }}">{{ $listing->name }}</a>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>No listings founds!</p>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>

@endsection
