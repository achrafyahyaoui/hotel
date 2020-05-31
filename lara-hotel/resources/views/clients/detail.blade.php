@extends('layouts.master')

@section('style')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<style>
    @import url(http://fonts.googleapis.com/css?family=Lato:400,700);
body
{
    font-family: 'Lato', 'sans-serif';
    }
.profile 
{
    min-height: 355px;
    display: inline-block;
    }
.divider 
{
    border-top:1px solid rgba(0,0,0,0.1);
    }
.emphasis 
{
    border-top: 4px solid transparent;
    }
.emphasis:hover 
{
    border-top: 4px solid #1abc9c;
    }
.emphasis h2
{
    margin-bottom:0;
    }
span.tags 
{
    background: #1abc9c;
    border-radius: 2px;
    color: #f5f5f5;
    font-weight: bold;
    padding: 2px 4px;
    }
</style>
@endsection

@section('title')
    {{ $client->name }} Detail
@endsection

@section('content')
<!-- page title -->
<h1><i class="fa fa-user"></i> {{ $client->name }} Details</h1>
<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
    	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <!-- client info -->
                    <h2>{{ $client->name }}</h2>
                    <p><strong>Phone: </strong> {{$client->phone}} </p>
                    <p><strong>Email: </strong> {{$client->email}} </p>
                    <p><strong>Notes: </strong>
                        <span class="tags">Note1</span> 
                        <span class="tags">Note2</span>
                        <span class="tags">Note3</span>
                        <span class="tags">Note4</span>
                    </p>
                </div>
                <!-- default profile image -->
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <img src="/images/Profile-icon.png" alt="xxx" class="img-circle img-responsive">
                    </figure>
                </div>
            </div>
            <!-- client history -->
            <div class="col-xs-12 divider text-center">
            <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong>Room Double</strong></h2>      
                    <p><small>Room Number: 125</small></p>
                    <p><small>Check In: Saturday, Apr 30, 2020</small></p>
                    <p><small>Check Out: Monday, May 06, 2020</small></p>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                <h2><strong>King Suite</strong></h2>      
                    <p><small>Room Number: 132</small></p>
                    <p><small>Check In: Thirsday, May 30, 2020</small></p>
                    <p><small>Check Out: Sunday, Jun 10, 2020</small></p>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                <h2><strong>Single Room</strong></h2>      
                    <p><small>Room Number: 45</small></p>
                    <p><small>Check In: Tuesday, Sep 02, 2020</small></p>
                    <p><small>Check Out: Monday, Sep 09, 2020</small></p>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                <h2><strong>King Suite</strong></h2>      
                    <p><small>Room Number: 79</small></p>
                    <p><small>Check In: Friday, Oct 15, 2020</small></p>
                    <p><small>Check Out: Wednesday, Oct 22, 2020</small></p>
                </div>
            </div>
            <!-- Action buttons -->
            <div class="col-xs-12 divider text-center pt-4">
                <div class="col-xs-12 col-sm-4">
                    <a href="{{$client->id.'/edit'}}">
                        <button class="btn btn-primary btn-block"><span class="fa fa-pencil"></span> Edit Client </button>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <form action="{{ route('client.destroy',$client->id)}}" method='POST' >
                        @csrf 
                        @method('DELETE')
                        <button class="btn btn-danger btn-block"><span class="fa fa-trash"></span> Delete Client </button>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-4">               
                    <a href='/client'>
                        <button class="btn btn-success btn-block"><span class="fa fa-users"></span> All Clients </button>
                    </a>
                </div>
            </div>
    	 </div>                 
		</div>
	</div>
</div>
@endsection

@section('script')
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
@endsection