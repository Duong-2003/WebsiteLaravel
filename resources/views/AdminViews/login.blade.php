<!DOCTYPE html>
<html lang="en">

<head>
    @include('AdminViews.head')
    <title>{{ $tittle }}</title>

</head>

<body>
    <div class="container">

        <div class="col-6 px-3">

            <form action="/users/login" method="post">
                <div style="text-align: center;font-size:40px">
                    <a href="">Admin</a>
                </div>
                @include('AdminViews.alert')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">
                        We'll never share your email with anyone else.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="icheck-primary">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">
                        Remember Me
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">sign in</button>
                @csrf
            </form>
        </div>

    </div>

</body>

</html>



</body>

</html>
