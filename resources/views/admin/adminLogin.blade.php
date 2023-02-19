<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <form action="/loginAdmin" method="post">
        @if (Session::has('success'))
            <div {{ Session::get('success') }}></div>
        @endif
        @if (Session::has('fail'))
            <div {{ Session::get('fail') }}></div>
        @endif
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
            <small class="form-text text-red" style="color:red">
                @error('email')
                    {{ $message }}
                @enderror
            </small>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
            <small class="form-text text-red" style="color:red">
                @error('password')
                    {{ $message }}
                @enderror
            </small>
        </div>
        <div align="center">
            <button type="submit" class="btn btn-dark">Admin Login</button>
            <br>
            <br>



            <a href="{{ url('/') }}" class="btn btn-info">User Login</a>

        </div>

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>

</body>

</html>
