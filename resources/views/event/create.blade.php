@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Create Events
                </div>
                
                <div class="card-body">
                    {!! Form::open(['action' => ['MyEventsController@store'], 'method' => 'POST']) !!}
                	    @include('event._form', ['buttonName' => 'Create'])
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
