@extends('layouts.appmaster')
@section('title', 'Login Page')
@section('content')


<html>
<head>

</head>
<body>
<div>
    <form action="doLogin" method = "post">
        {{csrf_field()}}

        <div class="demo-table">
            <div class = "form-head">Activity 2 Login</div>

            <div class = "form-column">
                <div>
                    <label for="username">Username</label>

                </div>
                <div>
                    <input name="user_name" id="user_name" type = "text" class = "demo-input-box">
                    <?php echo $errors->first('user_name')?>
                </div>
            </div>

            <div class = "form-column">
                <div>
                    <label for="password">Password</label>
                </div>
                <div>
                    <input name="password" id="password" type = "text" class = "demo-input-box">
                    <?php echo $errors->first('password')?>
                </div>
            </div>

            <div>
                <input type="submit" class ="btnLogin"></input>
            </div>

        </div>

    </form>

</div>

</body>
</html>

@endsection
