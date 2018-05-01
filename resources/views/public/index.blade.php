@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Posteds Events
                </div>
                
                <div class="card-body">
                    @if($events->isNotEmpty())
                        @include('flash::message')
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        Date
                                    </th>
                                    <th scope="col">
                                        Description
                                    </th>
                                    <th scope="col">
                                        Address
                                    </th>
                                    <th scope="col">
                                        Posted?
                                    </th>
                                    <th scope="col">
                                        User
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($events as $event)
                                    <tr>
                                        <td>{{$event->date->format('d/m/Y')}}</td>
                                        <td>{{$event->description}}</th>
                                        <td>{{$event->address}}</td>
                                        <td>{{$event->isPostedAsText()}}</td>
                                        <td>{{$event->user->name }}</td>
                                    </tr>
                                @endforeach
                                <tr>
                            </tbody>
                        </table>
                    @else
                        <p>No event found</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection