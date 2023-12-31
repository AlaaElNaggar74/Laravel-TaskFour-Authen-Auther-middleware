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

                    {{ __('You are logged in!') }}
                </div>
                <div class="pb-4">
                    @can('is_admin')
                    <h1 class="text-center"> Admin</h1>
                                        
                    @elsecan('is_user')
                    <h1 class="text-center"> user</h1>
            
                    @endcan

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
