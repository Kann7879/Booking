<nav class="navbar navbar-expand-lg sticky-top bg-white bg-opacity-80 backdrop-blur border-bottom py-2 px-3 px-lg-4">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center gap-2" href="{{ route('home') }}">
            <img src="{{ asset('asset-frontend/images/logo.jpeg') }}" 
                alt="Amulya Luxury Villa Logo" 
                style="height: 40px; width: auto;"
                class="rounded">
            <h2 class="fw-bold mb-0" style="font-size: 1.4rem;">Amulya Luxury Villa</h2>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon" style="width: 1.2rem; height: 1.2rem;"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto gap-2 gap-lg-3">
                <li class="nav-item">
                    <a class="nav-link fw-medium px-2" href="{{ route('home') }}#villas" style="font-size: 0.9rem;">Villas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium px-2" href="{{ route('home') }}#gallery" style="font-size: 0.9rem;">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium px-2" href="{{ route('home') }}#facilities" style="font-size: 0.9rem;">Facilities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium px-2" href="{{ route('home') }}#location" style="font-size: 0.9rem;">Location</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-medium px-2" href="{{ route('home') }}#contact" style="font-size: 0.9rem;">Contact</a>
                </li>
            </ul>
            
            <!-- Tombol Book Now langsung ke halaman booking -->
            <a href="{{ route('booking') }}" class="btn btn-primary text-white px-3 py-1 rounded fw-semibold shadow-sm" 
               style="font-size: 0.9rem;">
                Book Now
            </a>
        </div>
    </div>
</nav>

<!-- Booking Modal (dihapus karena tidak dipakai) -->