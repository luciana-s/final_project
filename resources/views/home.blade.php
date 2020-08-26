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
                    <!-- Login info and creating a redirection-->
                    {{ __('You are logged in!') }}<br>
                    {{ __('Redirecting...') }}
                    <?php header('Refresh: 3; url="/"') ?>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection