<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body class="bg-light">

    <div class="col-md-5 mt-5 bg-white p-5 rounded offset-md-3">

        @if (session('fail'))
            <div class="alert alert-danger">{{session('fail')}}</div>
        @endif

        <h2 class="text-center" style="font-family: Cambria, Cochin;">Login</h2>
        <form action="{{route('loginform')}}" method="POST">
            @csrf
            <div class="form-group my-2">
                <label for="">Email Adddress</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email Address">
                <span class="text-danger">
                    @error('email')
                        {{$message}}
                    @enderror
                </span>
            </div>
            <div class="form-group mb-4">
                <label for="">Password</label>
                <input type="text" class="form-control" name="password" placeholder="Enter Password">
                <span class="text-danger">
                    @error('password')
                        {{$message}}
                    @enderror
                </span>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary  w-100">Login Now</button>
            </div>
            
        </form>
    </div>

    <div class="col-md-5 offset-md-3 p-4 text-center">
        Don't have account? <a href="">SignUp Now</a>
    </div>

    




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
