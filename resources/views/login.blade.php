<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }}</title>
    @include('layout.css')
</head>

<body>
    @include('layout.nav')
    <br /><br />
    <br /><br />
    <br /><br />
    <br /><br />
    <br /><br />
    <!--  -->

    <div class="container">
        <form action="" method="post">
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                    aria-describedby="basic-addon1" />
            </div>
            <br />
            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="password" class="form-control" placeholder="Password" aria-label="Password" />
            </div>
            <br />
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked />
                <label class="form-check-label" for="flexCheckChecked">
                    Remember Me
                </label>
            </div>
            <br />
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">
                    Log in
                </button>
            </div>
        </form>
    </div>

    @include('layout.js')
</body>

</html>
