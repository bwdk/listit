@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h4>Your listings</h4>

                    @if (count((is_countable($listings) ? $listings : [])))
                    
                    <table class="table table-striped">
                            
                            <tr>
                                <th>Company</th>
                            </tr>
                    @foreach ($listings as $listing)
                            <tr>
                                <td>{{ $listings->name }}</td>
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
</div>
@endsection