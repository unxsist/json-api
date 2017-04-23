<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - JSON API</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

    <header class="hero is-primary">
        <div class="hero-body">
            <div class="container">
                <h1 class="title">
                    JSON API
                </h1>
                <h2 class="subtitle">
                    Manage and serve your JSON content for free!
                </h2>
            </div>
        </div>
    </header>

    <main>
        <div class="container" style="margin-top: 25px;">
            @yield('content')
        </div>
    </main>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.6/ace.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.6/ext-beautify.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.6/mode-json.js"></script>
    @yield('before_body_end')
</body>
</html>