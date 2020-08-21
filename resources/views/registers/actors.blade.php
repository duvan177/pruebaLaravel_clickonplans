@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    
                <list-component :data="{{json_encode($actors)}}"></list-component>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
