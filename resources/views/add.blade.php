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
    <body>
        <div class="container">
            <main>
                <h1 class="text-center font-bold text-xl">Added new contact!</h1>

                <form method="POST" action="/added-new" class="mt-10">
                    @csrf

                    <div class="mb-6">
                        <label for="name">Name</label>

                        <input type="text" name="name" id="name" required>
                    </div>

                    <div class="mb-6">
                        <label for="home_country">Home country</label>

                        <input type="text" name="home_country" id="home_country">
                    </div>

                    <div class="mb-6">
                        <label for="home_city">Home city</label>

                        <input type="text" name="home_city" id="home_city">
                    </div>

                    <div class="mb-6">
                        <label for="home_address">Home address</label>

                        <input type="text" name="home_address" id="home_address">
                    </div>

                    <div class="mb-6">
                        <label for="mailing_country">Mailing country</label>

                        <input type="text" name="mailing_country" id="mailing_country">
                    </div>

                    <div class="mb-6">
                        <label for="mailing_city">Mailing city</label>

                        <input type="text" name="mailing_city" id="mailing_city">
                    </div>

                    <div class="mb-6">
                        <label for="mailing_address">Mailing address</label>

                        <input type="text" name="mailing_address" id="mailing_address">
                    </div>


                    <div>
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </main>
        </div>

    </body>
</html>
