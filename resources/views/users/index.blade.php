<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Users</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
    <body class="d-flex flex-column h-100">
    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Users list</h1>

            <form class="form-inline" method="POST" action="{{ route('search') }}">
                @csrf

                <div class="form-group mx-sm-3 mb-2">
                    <input type="text" class="form-control"  name="query" id="query" placeholder="Nom, Email ...">
                </div>
                <button type="submit" class="btn btn-primary mb-2">Rechercher</button>
            </form>

            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prénom</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ville</th>

                </tr>
                </thead>
                <tbody>
               @foreach($users as $user)
                   <tr>

                   <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->firstname }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address->street }} {{ $user->address->number }}, {{ $user->address->city }} {{ $user->address->postal_code }}, {{ $user->address->country }}</td>


                    </tr>

                   @endforeach
                </tbody>
            </table>


            {{ $users->links() }}

        </div>
    </main>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </body>
</html>
