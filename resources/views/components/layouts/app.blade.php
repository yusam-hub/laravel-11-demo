<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>
        @fluxStyles
    </head>
    <body>
        {{ $slot }}

        <script>
            let app = <?php echo json_encode(['$title']); ?>;
            console.log(app);
        </script>
        @fluxScripts
    </body>
</html>
