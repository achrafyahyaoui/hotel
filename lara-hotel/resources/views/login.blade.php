<!DOCTYPE html>
<html>
    <head>
        <title>hotel bookings</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style type="text/css">
            .box{
                width:600px;
                margin:0 auto;
                border:1px solid #ccc;
            }
        </style>
    </head>
    <body>
        <br/>
        <div calss="container box">
            <h3 align="center">Hotel Bookings</h3>
            </br>
            @if(isset(Auth::user()->email))
                <script>window.location="/main/successlogin";</script>
            @endif

            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
                </div>
            @endif
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ url('/main/checklogin') }}">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Enter Email</lable>
                    <input type="email" name="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Enter Password</lable>
                    <input type="password" name="password" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" name="login" class="btn btn-primary" value="Login"/>
                </div>
            </form>
        </div>
    </body>
</html>
