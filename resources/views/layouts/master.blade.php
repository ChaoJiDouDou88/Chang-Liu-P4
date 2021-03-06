<!doctype html>
<html>
<head>
  <title>
        {{-- Yield the title if it exists, otherwise default to 'p4' --}}
        @yield('title','p4')
    </title>

    <meta charset='utf-8'>

    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' rel='stylesheet'>

    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css' rel='stylesheet'>

    <link href='/css/p4.css' rel='stylesheet'>

    {{-- Yield any page specific CSS files or anything else you might want in the <head> --}}
    @yield('head')
</head>
<body>
    @if(\Session::has('flash_message'))
    <div class='flash_message'>
        {{ \Session::get('flash_message') }}
    </div>
    @endif

    <header>
        <a href='/'>
        <img
        src='http://brandcrowd.com/gallery/brands/pictures/picture13271049136309.jpg'
        style='width:300px'
        alt='Foobooks Logo'>
        </a>
    </header>
    <nav>
        <ul>
            <li><a href='/'>Home</a></li>
            <li><a href='/products/create'>Add a product</a></li>
            <li><a href='/orders/create'>Place an order</a></li>
        </ul>
    </nav>

    <section>
        {{-- Main page content will be yielded here --}}
        @yield('content')
    </section>
    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')

    <footer>
        &copy; {{ date('Y') }} &nbsp;&nbsp;
        <a href='https://github.com/ChaoJiDouDou88/Chang-Liu-P4' class='fa fa-github' target='_blank'> View on Github</a> &nbsp;&nbsp;
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    {{-- Yield any page specific JS files or anything else you might want at the end of the body --}}
    @yield('body')
</body>
</html>
