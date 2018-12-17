<!doctype html>
<html lang="en">
    <head>
        <title>@yield('title', config('app.name'))</title>
        <meta charset='utf-8'>

        {{-- CSS global to every page can be loaded here --}}
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
              rel="stylesheet"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
              crossorigin="anonymous">

        <link href='/css/styles.css' rel='stylesheet'>
        <link href='/css/normalize.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    </head>
    <body>
        <title>Schedule That</title>
        <div class='loginContainer'>
            <h2>Login</h2>
            <form method='GET'>
                <label>Username</label>
                <input type='text' name='username' id='username'>
                <label>Password</label>
                <input type='text' name='password' id='password'>
                <input type="submit" class='submitButton' name='submit' value='SUBMIT'>
            </form>
        </div>
    </body>
</html>
