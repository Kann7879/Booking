<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'LuxeVilla')</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- Google Material Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0,1" rel="stylesheet">
    
    @stack('styles')
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f6f8f8;
            color: #1e293b;
            font-size: 0.9rem;
            line-height: 1.5;
        }
        
        :root {
            --primary: #11b4d4;
            --primary-dark: #0e9fbb;
            --soft-beige: #f5f2ed;
        }
        
        .bg-primary { background-color: var(--primary) !important; }
        .text-primary { color: var(--primary) !important; }
        .border-primary { border-color: var(--primary) !important; }
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            font-size: 0.85rem;
            padding: 0.4rem 1rem;
        }
        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }
        
        .bg-soft-beige { background-color: var(--soft-beige); }
        
        .backdrop-blur {
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
        }
        
        .hover-scale { transition: transform 0.2s ease; }
        .hover-scale:hover { transform: scale(1.03); }
        
        .hover-scale-image { overflow: hidden; }
        .hover-scale-image img { 
            transition: transform 0.4s ease;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .hover-scale-image:hover img { transform: scale(1.08); }
        
        .object-cover { object-fit: cover; }
        .aspect-4-5 { aspect-ratio: 4/5; }
        .aspect-square { aspect-ratio: 1/1; }
        .aspect-2-1 { aspect-ratio: 2/1; }
        .aspect-video { aspect-ratio: 16/9; }
        .letter-spacing-wide { letter-spacing: 0.2em; }
        
        .animate-bounce {
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-5px); }
        }
        
        html {
            scroll-behavior: smooth;
        }
        
        /* Heading defaults */
        h1 { font-size: 2.2rem; }
        h2 { font-size: 1.8rem; }
        h3 { font-size: 1.4rem; }
        h4 { font-size: 1.2rem; }
        h5 { font-size: 1rem; }
        h6 { font-size: 0.9rem; }
        
        /* Container dengan max-width lebih kecil dan padding lebih lega */
        .container {
            max-width: 1200px;
            padding-left: 2rem;
            padding-right: 2rem;
        }
        
        @media (min-width: 1400px) {
            .container {
                max-width: 1320px;
            }
        }
        
        /* Spacing section */
        section {
            margin-bottom: 3rem;
        }
        
        /* Gallery grid improvements */
        .gallery-grid {
            margin-left: -0.75rem;
            margin-right: -0.75rem;
        }
        .gallery-grid > [class*="col-"] {
            padding-left: 0.75rem;
            padding-right: 0.75rem;
        }
        
        /* Card hover effect */
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1);
        }
        
        /* Form spacing */
        .form-container {
            max-width: 100%;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    @include('layout.frontend.header')

    <main class="py-3">
        <div class="container">
            @yield('content')
        </div>
    </main>

    @include('layout.frontend.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    @stack('scripts')
</body>
</html>