<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="{{ asset('js/app.js')  }}"></script>
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>{{ $title }}</title>
    <livewire:styles />
</head>
<body class="font-['Quicksand']">
    <div class="relative overflow-x-hidden min-h-screen flex flex-col justify-between">
        <x-nav />

       {{ $slot }}
        
        <footer class="py-8 border-t border-gray-200">
            <div class="container px-10 mx-auto grid md:grid-cols-5 sm:grid-cols-3 grid-cols-2 gap-10">
                
                <div class="space-y-2">
                    <span class="uppercase tracking-widest text-gray-800 font-bold font-['poppins']">CSE470 Project by Sanzeda Akter Sarmin -19101026 </span>
                    
                </div>
            </div>
        </footer>
    </div>
    <livewire:scripts />
</body>
</html>