@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    I am here
                    <br>
                    <a href="{{ route('dashbord') }}" > <button type="button" class="btn btn-primary">Go Dashboard</button> </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
