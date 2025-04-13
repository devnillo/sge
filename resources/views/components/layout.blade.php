<html>
  <head>
    <meta lang="pt-br">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'SGE' }}</title>
    @vite('resources/css/app.css')
  </head>
  <body class="">
    {{ $slot }}
  </body>
</html>