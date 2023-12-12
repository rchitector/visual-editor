<html>
    <head>
        <title>Visual Editor{{ ' - '.$title ?? '' }}</title>
{{--        <link rel="stylesheet" href="{{ asset('css/visual-editor/tailwind.min.css') }}" />--}}
    </head>
    <body>
        <header class="bg-white">
            <x-visual-editor::navigation.top-menu />
            <hr/>
            <h3>Visual Editor{{ ' - '.$title ?? '' }}</h3>
        </header>
        <hr/>
        {{ $slot }}
    </body>
</html>