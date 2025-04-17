@props([
    'title',
    'description',
])
<head>
    @vite('resources/css/app.css')
</head>
<body class="">
    <div class="flex justify-items-center items-center bg-white py-15 px-4 rounded-sm w-1/3 h-2/3">
        <div class="div m-auto w-full text-start">
            <h2 class="text-2xl md:text-3xl font-medium">{{ $title }}</h2>
            <p class="text-gray-600 text-md md:text-md mb-8 font-medium">{{ $description }}</p>
            {{ $slot }} 
        </div>
    </div>
</body>