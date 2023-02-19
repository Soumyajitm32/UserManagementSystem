<html>

<head>
    <title>User Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Contact</th>
                <th scope="col">Email</th>
                <th scope="col">Gender</th>
                <th scope="col">Address</th>
                <th scope="col">Pin</th>
                <th scope="col">State</th>
                <th scope="col">District</th>
                <th scope="col">Country</th>
                <th scope="col">P.O</th>
                <th scope="col">D.O.B</th>
                <th scope="col">User Level</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>


            </tr>
        </thead>
        <?php $count = 1; ?>
        <tbody>
            <tr>
                @foreach ($userDetails as $userDetail)
                    <td>{{ $count++ }}</td>
                    <td>{{ $userDetail['name'] }}</td>
                    <td>{{ $userDetail['age'] }}</td>
                    <td>{{ $userDetail['contact'] }}</td>
                    <td>{{ $userDetail['email'] }}</td>
                    <td>{{ $userDetail['gender'] }}</td>
                    <td>{{ $userDetail['address'] }}</td>
                    <td>{{ $userDetail['pin'] }}</td>
                    <td>{{ $userDetail['state'] }}</td>
                    <td>{{ $userDetail['district'] }}</td>
                    <td>{{ $userDetail['country'] }}</td>
                    <td>{{ $userDetail['po'] }}</td>
                    <td>{{ $userDetail['dob'] }}</td>
                    <td>
                        <?php
                        if ($userDetail['userlevel'] == 1) {
                            echo 'User';
                        } else {
                            echo 'Admin';
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($userDetail['actnum'] == 0) {
                            echo 'Deactive';
                        }
                        elseif ($userDetail['actnum'] == 2) {
                            echo 'Block';
                        }
                         else {
                            echo 'Active';
                        }
                        ?>
                    </td>
                    <td>
                        


                        {{-- <a href="{{ url('/activateUser') }}/{{ $userDetail['id'] }}"
                            class="btn btn-success">Activate</a>
                        <a href="{{ url('/deactivateUser') }}/{{ $userDetail['id'] }}"
                            class="btn btn-secondary">Deactivate</a>
                        <a href="{{ url('/blockUser') }}/{{ $userDetail['id'] }}"
                            class="btn btn-danger">Block</a> --}}
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Action
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="{{ url('/activateUser') }}/{{ $userDetail['id'] }}">Activate</a></li>
                                  <li><a class="dropdown-item" href="{{ url('/deactivateUser') }}/{{ $userDetail['id'] }}">Deactivate</a></li>
                                  <li><a class="dropdown-item" href="{{ url('/userEdit') }}/{{ $userDetail['id'] }}">Edit</a></li>
                                  <li><a class="dropdown-item" href="{{ url('/userDelete') }}/{{ $userDetail['id'] }}">Delete</a></li>
                                  <li><a class="dropdown-item" href="{{ url('/blockUser') }}/{{ $userDetail['id'] }}">Block</a></li>
                                </ul>
                              </div>


                    </td>


            </tr>
            @endforeach
        </tbody>
    </table>
    <div align="center">
        <a href="{{ url("/logoutAdmin") }}" class="btn btn-primary">Logout</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
