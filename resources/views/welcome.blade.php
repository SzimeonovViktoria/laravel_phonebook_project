<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

        <!-- Styles -->
        <style>

            html{line-height: 1.5;-webkit-text-size-adjust: 100%;-moz-tab-size: 4;tab-size: 4;font-family: Figtree, sans-serif;font-feature-settings: normal}

            body{margin: 0;line-height: inherit}

        </style>
    </head>
    <body class="antialiased">
        <table class="table table-md">
            <thead>
                <tr>
                    <th></th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone number</th>
                    <th>Home country</th>
                    <th>Home city</th>
                    <th>Home address</th>
                    <th>Mailing country</th>
                    <th>Mailing city</th>
                    <th>Mailing address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)

                    <tr>
                        <td><img width="50" height="50" src="avatar/{{ $user->avatar }}"></td>
                        <td>{{ $user->name }}</td>
                        <td style="word-break: break-word">{{ $user->email }}</td>
                        <td style="word-break: break-word">{{ $user->phone_number }}</td>
                        <td>{{ $user->home_country }}</td>
                        <td>{{ $user->home_city }}</td>
                        <td>{{ $user->home_address }}</td>
                        <td>{{ $user->mailing_country }}</td>
                        <td>{{ $user->mailing_city }}</td>
                        <td>{{ $user->mailing_address }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        <button><a href="{{route('user.add')}}" class="btn btn-warning">Add new contact</a></button>
    </body>
</html>
