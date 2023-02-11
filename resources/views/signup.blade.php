<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>{{ $title }}</title>
        @include("layout.css")
    </head>
    <body>
        @include("layout.navbar")
        <br /><br />
        <br /><br />
        <br /><br />
        <br /><br />
        <br /><br />
        <div class="container">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input
                        type="email"
                        class="form-control"
                        placeholder="Email"
                        aria-label="Email"
                        aria-describedby="inputGroup-sizing-default"
                    />
                </div>
                <br />
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">@</span>
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Username"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                    />
                </div>
                <br />
                <div class="input-group mb-3">
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Full name"
                        aria-label="fullname"
                        aria-describedby="inputGroup-sizing-default"
                    />
                </div>
                <br />
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input
                        type="password"
                        class="form-control"
                        placeholder="Password"
                        aria-label="Password"
                    />
                </div>
                <br />
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">
                        Sign up
                    </button>
                </div>
            </form>
        </div>
        @include("layout.js")
    </body>
</html>
