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
            background-color: #ffffff;
            color: #333333;
            font-size: 0.9rem;
            line-height: 1.5;
        }
        
        :root {
            --primary: #2c2c2c;
            --primary-dark: #1a1a1a;
            --soft-gray: #f5f5f5;
            --border-color: #e0e0e0;
            --text-light: #666666;
        }
        
        .bg-primary { background-color: var(--primary) !important; }
        .text-primary { color: var(--primary) !important; }
        .border-primary { border-color: var(--primary) !important; }
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            font-size: 0.85rem;
            padding: 0.4rem 1rem;
            color: #ffffff;
        }
        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
            color: #ffffff;
        }
        
        .btn-outline-primary {
            color: var(--primary);
            border-color: var(--primary);
            font-size: 0.85rem;
            padding: 0.4rem 1rem;
        }
        .btn-outline-primary:hover {
            background-color: var(--primary);
            border-color: var(--primary);
            color: #ffffff;
        }
        
        .bg-soft-gray { background-color: var(--soft-gray); }
        
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
        
        /* Heading defaults lebih kecil */
        h1 { font-size: 2.2rem; }
        h2 { font-size: 1.8rem; }
        h3 { font-size: 1.4rem; }
        h4 { font-size: 1.2rem; }
        h5 { font-size: 1rem; }
        h6 { font-size: 0.9rem; }
        
        /* Container lebih rapat */
        .container {
            max-width: 1280px;
            padding-left: 1rem;
            padding-right: 1rem;
        }
        
        /* Spacing section lebih kecil */
        section {
            margin-bottom: 2rem;
        }
        
        /* Additional black & white theme styles */
        .card {
            border: 1px solid var(--border-color);
            background-color: #ffffff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }
        
        .border-bottom {
            border-bottom: 1px solid var(--border-color) !important;
        }
        
        .border-top {
            border-top: 1px solid var(--border-color) !important;
        }
        
        .text-muted {
            color: var(--text-light) !important;
        }
        
        a {
            color: var(--primary);
            text-decoration: none;
        }
        
        a:hover {
            color: var(--primary-dark);
        }
        
        .nav-link {
            color: #333333;
        }
        
        .nav-link:hover {
            color: var(--primary);
        }
        
        .navbar-light .navbar-nav .nav-link.active {
            color: var(--primary);
        }
        
        .footer {
            border-top: 1px solid var(--border-color);
            background-color: #fafafa;
        }
        
        .badge.bg-primary {
            background-color: var(--primary) !important;
            color: #ffffff;
        }
        
        .badge.bg-light {
            background-color: var(--soft-gray) !important;
            color: #333333;
        }
        
        .form-control {
            border: 1px solid var(--border-color);
        }
        
        .form-control:focus {
            border-color: #999999;
            box-shadow: 0 0 0 0.2rem rgba(44, 44, 44, 0.25);
        }
        
        /* Grayscale filter for images if needed */
        .grayscale {
            filter: grayscale(100%);
            transition: filter 0.3s ease;
        }
        
        .grayscale:hover {
            filter: grayscale(0%);
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #888;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>
<body>

    @include('layout.frontend.header')

    <main class="py-2">
        @yield('content')
    </main>

    @include('layout.frontend.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    @stack('scripts')
</body>
</html>