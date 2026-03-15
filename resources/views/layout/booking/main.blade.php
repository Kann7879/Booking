<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Villa Booking')</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&display=swap" rel="stylesheet">
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0,1" rel="stylesheet">
    
    @stack('styles')
    
    <style>
        body {
            font-family: 'Manrope', sans-serif;
            background-color: #f6f8f8;
            color: #1e293b;
        }
        
        :root {
            --primary: #17b0cf;
            --primary-dark: #0e9fbb;
        }
        
        .bg-primary { background-color: var(--primary) !important; }
        .text-primary { color: var(--primary) !important; }
        .border-primary { border-color: var(--primary) !important; }
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
        }
        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }
        
        /* Tambahan padding untuk konten */
        .content-wrapper {
            padding-left: 2rem;
            padding-right: 2rem;
        }
        
        @media (min-width: 768px) {
            .content-wrapper {
                padding-left: 4rem;
                padding-right: 4rem;
            }
        }
        
        @media (min-width: 1200px) {
            .content-wrapper {
                padding-left: 6rem;
                padding-right: 6rem;
            }
        }
    </style>
</head>
<body>

    @include('layout.booking.header')

    <main class="py-4">
        <div class="content-wrapper">
            <div class="container-fluid" style="max-width: 1400px; margin: 0 auto;">
                @yield('content')
            </div>
        </div>
    </main>

    @include('layout.booking.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    @stack('scripts')
</body>
</html>