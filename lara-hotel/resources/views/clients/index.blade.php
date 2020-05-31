@extends('layouts.master')

@section('title')
    Clients
@endsection

@section('content')
    <h2><i class="fa fa-users"></i>Clients</h2>
    <hr>
    <a href="/client/create" class="btn btn-primary">Create</a>
    <br><br>

    <table class="table table-striped" id="clients">
        <thead>
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Image</th>
            <th >Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->phone }}</td>
                    <td><img src="{{ url('/uploads').'/'. $client->image }}" width="30px" class="img-thumbnail"></td>
                    <td>
                                                     
                    <form action="{{ route('client.destroy',$client->id)}}" method='POST' >
                        <!-- Client Details -->
                        <a href="{{'client/'.$client->id}}">
                            <div class="btn btn-success">
                                   <i class="fa fa-eye"></i>
                            </div>
                        </a>
                        <!-- Edit Client -->
                        <a href="{{'client/'.$client->id.'/edit'}}">
                            <div class="btn btn-primary">
                                    <i class="fa fa-pencil"></i>
                            </div>
                        </a>
                        <!-- Delete Client -->
                        @csrf 
                        @method('DELETE')
                        <button type='submit' class='btn btn-danger'><i class="fa fa-trash"></i></button>
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
@endsection

@section('script')
@endsection