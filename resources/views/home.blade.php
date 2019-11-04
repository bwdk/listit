@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard <span class="float-right"><a href="/listings/create" class="btn btn-secondary">Create Listings</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Your listings</h4>

                    @if (count($listings))
                    <!--(isset($listings->num_rows) && $listings->num_rows > 0)--> <!-- (count((is_countable($listings) ? $listings : []))) -->
                    <table class="table table-striped">
                            <tr>
                                <th>Company</th>
                                <th></th>
                             
                            </tr>
                    @foreach ($listings as $listing)
                            <tr>
                                    <td>{{ $listing->name }}</td>
                                    <td>
                                    <form class="float-right ml-2" action="/listings/{{$listing->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    
                                
                                    <a href="/listings/{{ $listing->id }}/edit" class="btn btn-info float-right">Edit</a></td>
                            </tr>
                    @endforeach
                    </table>
                    @else
                        <p>You don't have any listings yet !</p>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>

@endsection
