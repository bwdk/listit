@extends('layouts.app')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create new listing <span class="float-right"><a href="/home" class="btn btn-secondary">Go Back</a></div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form method="post" action="/listings">
                                @csrf
                                <div class="form-group">
                                  <label for="name">Name</label>
                                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" value="{{ old('name') }}">
                                </div>
                                <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" value="{{ old('address') }}">
                                </div>
                                <div class="form-group">
                                        <label for="website">Website</label>
                                        <input type="text" class="form-control" id="website" name="website" placeholder="Enter website" value="{{ old('website') }}">
                                </div>
                                <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" value="{{ old('email') }}">
                                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                </div>
                                <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone" value="{{ old('phone') }}">
                                </div>
                                <div class="form-group">
                                        <label for="bio">Bio</label>
                                        <input type="text" class="form-control" id="bio" name="bio" placeholder="Enter bio" value="{{ old('bio') }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                         </form>
                    </div>
                </div>
            </div>
        </div>

    
@endsection
    
