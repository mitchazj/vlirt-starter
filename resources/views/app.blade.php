<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- TODO: refactor this into vite_helpers() as per link below  -->
        {{-- https://sebastiandedeyne.com/vite-with-laravel/ --}}
        @production
            @php
                $manifest = json_decode(file_get_contents(public_path('build/manifest.json')), true);
            @endphp
            <script type="module" src="/build/{$manifest['resources/js/app.js']['file']}"></script>
            <link rel="stylesheet" href="/build/{$manifest['resources/js/app.js']['css'][0]}">
        @else
            <script type="module">
                import RefreshRuntime from "http://localhost:3000/@react-refresh"
                RefreshRuntime.injectIntoGlobalHook(window)
                window.$RefreshReg$ = () => {}
                window.$RefreshSig$ = () => (type) => type
                window.__vite_plugin_react_preamble_installed__ = true
            </script>
            <script type="module" src="http://localhost:3000/@vite/client"></script>
            <script type="module" src="http://localhost:3000/resources/js/app.jsx"></script>
        @endproduction

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @routes
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
