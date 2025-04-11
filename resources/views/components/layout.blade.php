<html>
  <head>
    <title>{{ $title ?? 'SGE' }}</title>
    @vite('resources/css/app.css')
  </head>
  <body class="">
    {{ $slot }}
  </body>
</html>