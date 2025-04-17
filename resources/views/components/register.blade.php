<head>
    <title>{{ $title ?? 'Register' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="">
    <div class="content w-full md:w-2/4">
        {{ $slot }} 
    </div>
</body>