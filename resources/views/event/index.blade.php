@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Events
                    <div class="float-right">
                        <a href="{{action('EventController@create')}}" class="btn btn-success btn-sm">Create</a>
                    </div>
                </div>
                
                <div class="card-body">
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
                                    Actions
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
                                    <td>
                                        <div class="d-flex flex-row">
                                            <div class="p-2">
                                                <a href="{{action('EventController@edit', $event->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                            </div>
                                            <div class="p-2">
                                                <form action="{{action('EventController@destroy', $event->id)}}" method="POST">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('div.alert').delay(3000).slideUp(300).delay(800);
        });
    </script>
@endsection