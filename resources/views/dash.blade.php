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

        <h3>Current Logged In User</h3>

        <table class="table">
            <thead>
                <tr>
                    <td>id</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Role</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{ auth()->guard('new_users')->user()->id }}</td>
                    <td>{{ auth()->guard('new_users')->user()->user_name }}</td>
                    <td>{{ auth()->guard('new_users')->user()->email_address }}</td>
                    <td>{{ auth()->guard('new_users')->user()->account_role }}</td>
                    <td></td>
                </tr>
            </tbody>
        </table>


        <button class="btn btn-primary" onclick="if(confirm('Logout Your Account?'))window.location='/logout'">Logout</button>

    </div>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
