<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

</head>
<body>

<div class="container">
    <nav class="navbar navbar-info navbar-expand-lg mb-4 p-3" style="background-color: #e3f2fd;">
        <div class="container d-flex justify-content-between">
            <a class="navbar-brand mr-auto " href="">Home</a>
            <div class="d-flex mx-2 w-50">
                          <input type="search" class="form-control rounded me-2 w-100" aria-label="Search" aria-describedby="search-addon" />
                          <button type="button" class="btn btn-primary">Search</button>
            </div>
            <div class="w-30" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register-user') }}">Register</a>
                        </li>
                    @else
                        <li class="nav-item float-right">
                            <a class="nav-link fw-bold"><span class="text-danger">Hi, {{Auth::user()->name}}</span></a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('signout') }}">Logout</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>

    </nav>



    <table class="table">
        <thead>
        <tr>
            <th scope="col">Book Id</th>
            <th scope="col">Title</th>
            <th scope="col">ISBN</th>
            <th scope="col">Public Year</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($book as $book)
            <tr>
                <td>{{$book ->bookid }}</td>
                <td>{{$book ->title }}</td>
                <td>{{$book ->ISBN }}</td>
                <td>{{$book ->pub_year }}</td>

                <td class="">
                    <button type="button" class="btn btn-primary me-1">Add</button>
                    <button type="button" class="btn btn-warning me-1">Edit</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
</div>


@yield('content')
</body>
</html>
