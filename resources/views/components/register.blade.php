<head>
    <title>{{ $title ?? 'Register' }}</title>
    @vite('resources/css/app.css')
</head>
<body class="hidden">
    <div class="content">
        {{ $slot }} 
        {{ $form }}
    </div>
</body>