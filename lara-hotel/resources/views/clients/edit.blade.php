@extends('layouts.master')

@section('title')
    Edit
@endsection

@section('content')
    <h1><i class="fa fa-pencil"></i> Edit Client</h1>
    <div class="row">
        <div class="col-md-8">
            <form method="post" action="{{route('client.update' , $client->id)}}">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$client->name}}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" value="{{$client->phone}}">
                </div>
                <div class="form-group">
                    <label for="Email1">Email address</label>
                    <input type="email" class="form-control" id="Email1" name="email" value="{{$client->email}}" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
@endsection