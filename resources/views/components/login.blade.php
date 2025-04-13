<head>
    @vite('resources/css/app.css')
</head>
<body class="">
    <div class="content">
        {{ $slot }} 
        {{ $form }}
    </div>
</body>