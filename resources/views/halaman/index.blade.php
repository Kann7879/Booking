@extends('layout.frontend.main')

@section('title', 'LuxeVilla | Serenity Awaits')

@section('content')
    <!-- Hero Section -->
    <section class="container-fluid px-2 px-lg-3 py-2 py-lg-3">
        <div class="position-relative rounded-4 overflow-hidden shadow" style="height: 85vh;">
            <div class="position-absolute top-0 start-0 w-100 h-100" 
                 style="background-image: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.5)), url('{{ asset('asset-frontend/images/foto5.jpeg') }}'); background-size: cover; background-position: center;">
            </div>
            <div class="position-relative h-100 d-flex flex-column align-items-center justify-content-center text-center text-white px-3">
                <span class="text-white-50 text-uppercase fs-6 fw-semibold letter-spacing-wide mb-3">
                    Exquisite Mediterranean Living
                </span>
                <h1 class="display-1 fw-bold mb-4">Villa Serenity</h1>
                <p class="fs-4 fw-light mb-5 col-12 col-md-8 col-lg-6">
                    Experience ultimate luxury in our private sanctuary, where modern architecture meets breathtaking coastal views.
                </p>
                <div class="d-flex flex-column flex-sm-row gap-3">
                    <button class="btn btn-primary text-white px-5 py-3 fw-bold hover-scale" 
                            data-bs-toggle="modal" 
                            data-bs-target="#bookingModal">
                        Reserve Your Stay
                    </button>
                    <a href="#villas" class="btn btn-outline-light bg-white bg-opacity-10 border-white text-white px-5 py-3 fw-bold">
                        View Details
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Villa Description -->
    <section class="container py-5 my-5" id="villas">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
            <h2 class="display-5 fw-bold mb-4">Amulya Luxury Villa – Dago, Bandung</h2>
            <p class="text-secondary fs-5 mb-4">
                Terletak di kawasan sejuk Dago, Bandung, Amulya Luxury Villa menawarkan pengalaman menginap yang eksklusif dengan pemandangan alam yang menenangkan. Villa ini dirancang dengan perpaduan gaya modern dan sentuhan alami, menciptakan suasana yang elegan sekaligus nyaman.
            </p>
            <p class="text-secondary fs-5 mb-4">
                Nikmati waktu bersantai bersama keluarga atau teman dengan fasilitas lengkap seperti kolam renang pribadi, area santai outdoor, dan ruang yang luas untuk berbagai aktivitas. Setiap sudut villa dirancang untuk memberikan kenyamanan dan pengalaman tak terlupakan.
            </p>
            <div class="pt-3">
                <div class="d-flex align-items-end gap-2">
                    <span class="display-4 fw-bold text-primary">Rp9.000.000</span>
                    <span class="text-secondary pb-1">/ malam</span>
                </div>
                <p class="text-secondary-emphasis small mt-2">*Harga dapat berubah saat weekend & high season</p>
            </div>
        </div>
            <div class="col-lg-6 position-relative">
                <div class="aspect-4-5 rounded-4 overflow-hidden shadow">
                    <img src="{{ asset('asset-frontend/images/foto2.jpeg') }}" 
                         alt="Villa interior" 
                         class="w-100 h-100 object-cover">
                </div>
            </div>
        </div>
    </section>

<!-- Image Gallery -->
<section class="bg-soft-gray py-5" id="gallery">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">The Estate Gallery</h2>
            <div class="bg-primary mx-auto" style="width: 80px; height: 4px;"></div>
        </div>
        
        <div class="row g-3 g-md-4">
            <!-- Foto pool (kiri) -->
            <div class="col-md-6">
                <div class="hover-scale-image rounded-4 shadow" style="height: 100%; min-height: 600px;">
                    <img src="{{ asset('asset-frontend/images/foto1.jpeg') }}" 
                         alt="Pool area" 
                         class="w-100 h-100 object-cover">
                </div>
            </div>
            
            <!-- Kolom kanan untuk 3 foto -->
            <div class="col-md-6">
                <div class="row g-3 g-md-4 h-100">
                    <!-- Foto Bathroom -->
                    <div class="col-6">
                        <div class="hover-scale-image rounded-4 shadow" style="height: 290px;">
                            <img src="{{ asset('asset-frontend/images/foto3.jpeg') }}" 
                                 alt="Bathroom" 
                                 class="w-100 h-100 object-cover">
                        </div>
                    </div>
                    
                    <!-- Foto Kitchen -->
                    <div class="col-6">
                        <div class="hover-scale-image rounded-4 shadow" style="height: 290px;">
                            <img src="{{ asset('asset-frontend/images/foto4.jpeg') }}" 
                                 alt="Bedroom" 
                                 class="w-100 h-100 object-cover">
                        </div>
                    </div>
                    
                    <!-- Foto Terrace -->
                    <div class="col-12">
                        <div class="hover-scale-image rounded-4 shadow" style="height: 290px;">
                            <img src="{{ asset('asset-frontend/images/foto7.jpeg') }}" 
                                 alt="Terrace" 
                                 class="w-100 h-100 object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Facilities Section -->
    <section class="container py-5 my-5" id="facilities">
        <div class="text-center mb-5">
            <h2 class="display-5 fw-bold mb-3">Premium Facilities</h2>
            <p class="text-secondary">Everything you need for a perfect getaway</p>
        </div>
        
        <div class="row g-4">
            @php
                $facilities = [
                    ['icon' => 'wifi', 'name' => 'Ultra-fast WiFi'],
                    ['icon' => 'pool', 'name' => 'Infinity Pool'],
                    ['icon' => 'ac_unit', 'name' => 'Central AC'],
                    ['icon' => 'cooking', 'name' => 'Chef\'s Kitchen'],
                    ['icon' => 'local_parking', 'name' => 'Private Parking'],
                    ['icon' => 'tv', 'name' => 'Smart TV'],
                ];
            @endphp
            
            @foreach($facilities as $facility)
            <div class="col-6 col-md-4 col-lg-2">
                <div class="card border-0 shadow-sm p-4 text-center h-100 hover-scale">
                    <span class="material-symbols-outlined text-primary fs-1 mb-3">{{ $facility['icon'] }}</span>
                    <span class="fw-bold">{{ $facility['name'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- Location & Contact -->
    <section class="bg-light py-5 border-top" id="location">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <h2 class="display-5 fw-bold mb-4">Location</h2>
                    
                    <div class="position-relative aspect-video rounded-4 overflow-hidden shadow bg-secondary bg-opacity-25">
    
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.257515554396!2d107.61696437408813!3d-6.859709167110629!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7007c04c907%3A0x35486c366d062412!2sAmulya%20Luxury%20Villa!5e0!3m2!1sid!2sid!4v1773732087710!5m2!1sid!2sid" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                    
                    <div class="d-flex align-items-start gap-3 mt-4 text-secondary">
                        <span class="material-symbols-outlined">directions_car</span>
                        <p>15 minutes from Ravello city center. Airport shuttle service available upon request.</p>
                    </div>
                </div>
                
                <div class="col-lg-5" id="contact">
                    <div class="bg-white p-4 p-md-5 rounded-4 shadow border">
                        <h3 class="fw-bold mb-4">Contact Us</h3>
                        
                        <form>
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Full Name</label>
                                <input type="text" class="form-control form-control-lg rounded-3" placeholder="John Doe">
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label fw-semibold">Email Address</label>
                                <input type="email" class="form-control form-control-lg rounded-3" placeholder="john@example.com">
                            </div>
                            
                            <div class="mb-4">
                                <label class="form-label fw-semibold">Message</label>
                                <textarea class="form-control form-control-lg rounded-3" rows="4" placeholder="I am interested in booking for July..."></textarea>
                            </div>
                            
                            <button class="btn btn-primary text-white w-100 py-3 fw-bold shadow">
                                Send Inquiry
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    });
</script>
@endpush