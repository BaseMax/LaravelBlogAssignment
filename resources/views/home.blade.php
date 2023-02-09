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
        <div>
            <img src="{{ asset("images/head.png") }}" alt="head" width="100%">
        </div>
        <br /><br />
        <div class="container">
            @foreach ($blogs as $blog)
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-info">{{ $blog[0] }}</h4>
                    <p class="fs-8 text-success">writer: {{ $blog[2] }}</p>
                    <p class="card-text">
                        {{ $blog[1] . "..." }}
                    </p>
                    <div class="">
                    <a href="#" class="btn btn-primary">More</a>
                    </div>
                </div>
            </div>
            <br /><br />  
            @endforeach
        </div>
        <br /><br />
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item @if ($page_index === 1) disabled @endif">
                    <a class="page-link" href="{{ route("main") . "/page=" }}{{ $page_index - 1 }}">Previous</a>
                </li>
                <li class="page-item @if ($page_index === $max_page_index) disabled @endif" >
                    <a class="page-link" href="{{ route("main") . "/page=" }}{{ $page_index + 1 }}">Next</a>
                </li>
            </ul>
        </nav>
        @include("layout.js")
    </body>
</html>
