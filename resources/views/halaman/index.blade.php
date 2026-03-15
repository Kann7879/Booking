@extends('layout.frontend.main')

@section('title', 'LuxeVilla - Home')

@section('content')
    <!-- Hero Section dengan container -->
    <div class="container px-4 px-lg-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="position-relative rounded-4 overflow-hidden shadow" style="height: 70vh;">
                    <div class="position-absolute top-0 start-0 w-100 h-100" 
                         style="background-image: linear-gradient(rgba(0,0,0,0.2), rgba(0,0,0,0.5)), url('https://lh3.googleusercontent.com/aida-public/AB6AXuDhcM4T9Dy74Y9DtXU2FA3eSYfMpvfFiLYX7Wd64GzjRJXLUterjVT2w7xL7VG7Sm6MrSIcV5UeStPZvdx_xIcTguWoeYkg1ZyUIMQm7ZVI34xu9eihyAjEnc9oG6cpIOLZbY2Ya9-72nG5FA0hWxUQABGT6YGVXYypxqe1xrcgb-xhxysS8PhBUiKMT_T_aTOB2U60aRU-yXQFbj1sV8AMn7xMp9R22VzapNf_j1PKnW-IRNEpGzEjd599gT8yQR6RHW7UP8l4kRVr'); background-size: cover; background-position: center;">
                    </div>
                    <div class="position-relative h-100 d-flex flex-column align-items-center justify-content-center text-center text-white px-3">
                        <span class="text-white-50 text-uppercase fs-6 fw-semibold letter-spacing-wide mb-3">
                            Exquisite Mediterranean Living
                        </span>
                        <h1 class="display-4 fw-bold mb-3">Villa Serenity</h1>
                        <p class="fs-5 fw-light mb-4 col-12 col-md-8">
                            Experience ultimate luxury in our private sanctuary.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <button class="btn btn-primary text-white px-4 py-2 fw-semibold hover-scale" 
                                    data-bs-toggle="modal" 
                                    data-bs-target="#bookingModal">
                                Reserve Your Stay
                            </button>
                            <a href="#villas" class="btn btn-outline-light bg-white bg-opacity-10 border-white text-white px-4 py-2 fw-semibold">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Villa Description dengan container -->
    <section class="container py-4 my-4" id="villas">
        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="ps-0 ps-lg-3">
                    <h2 class="fw-bold mb-3">A Masterpiece of Design and Comfort</h2>
                    <p class="text-secondary mb-3">
                        Nestled on the cliffs of the Amalfi Coast, Villa Serenity offers an unparalleled escape. Our 5-bedroom estate combines minimalist Scandinavian aesthetics with warm Mediterranean textures.
                    </p>
                    <p class="text-secondary mb-3">
                        Whether you're lounging by the heated infinity pool or hosting a sunset dinner on the terrace, every detail has been curated for your absolute relaxation.
                    </p>
                    <div class="pt-2">
                        <div class="d-flex align-items-end gap-2">
                            <span class="display-5 fw-bold text-primary">$1,250</span>
                            <span class="text-secondary pb-1">/ per night</span>
                        </div>
                        <p class="text-secondary small mt-1">*Minimum 3 nights stay during peak season</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="rounded-4 overflow-hidden shadow hover-scale-image" style="height: 350px; width: 90%; margin-left: auto;">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDb2CCMEhn6-_6hK725886cVS2A2uL_RFrdOYLOdu6t8H86soLUQbJv-SM0v4U7_gm4JaXB81DlDR2_jaMs43zCgZcCJYiTOKaahM_kmMPwXZur9TasLdI6IfIZc9pNWeJSYUq9p2Z7_uNJErs23Re2sLyJOoefyd2OBu5mRMhaSe1rjxomlbp0QXxDwoLrPcHWTtrMWIsE_tAYND0EDTxYMUXYMyL5tDImEH35GJzWsJQaoAokT2c_85h8jg4TiANy-uLcM7G5aqLm" 
                                alt="Villa interior" 
                                class="w-100 h-100 object-cover">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Gallery dengan container -->
    <section class="bg-white py-4" id="gallery" style="box-shadow: inset 0 1px 0 rgba(0,0,0,.05);">
        <div class="container py-3">
            <div class="text-center mb-4">
                <h2 class="fw-bold mb-2">The Estate Gallery</h2>
                <div class="bg-primary mx-auto" style="width: 60px; height: 3px;"></div>
            </div>
            
            <div class="row g-3 gallery-grid">
                <!-- Foto besar kiri (Pool) -->
                <div class="col-md-6">
                    <div class="hover-scale-image rounded-4 shadow" style="height: 450px;">
                        <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuD5xFdjY99XpsbeoE__18RtpwDmCZN8Tyn3IWrnIfTyF1T3t9oBTC3WlxGhTpozDtQGGSbPgbQ0YZqLiPV357tizaDf0FefSUdfld8O6jAmRL8XuDYflrW00yAz71LdPFaBltXTrnjOyOnqycJNtDBeVjy9dBZ2ZtNPuqXVUwFbCZs45k1zpp2FOBvkq58lp-kdSo0JlxGHlV7ITYeRlLRp4fnGLkfRXIBgxlK0LJ7021MlgzOauy0VBZsZXZd3YPOYQ1vH1bxKZcwW" 
                             alt="Pool area" 
                             class="w-100 h-100 object-cover">
                    </div>
                </div>
                
                <!-- Kolom kanan (3 foto) -->
                <div class="col-md-6">
                    <div class="row g-3">
                        <!-- Foto Bathroom -->
                        <div class="col-6">
                            <div class="hover-scale-image rounded-4 shadow" style="height: 215px;">
                                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxBI0KYmeKZO-hMHyOK46Bpd_IHq9CEAOHvHhj3uRxak1hDflTrPItVweMD9hysbPtNItfQpS2yWtK8MWTr31bkYOQA87nW1kBBg7cX44avM_47mBex8cqZ8Ev4oxPiG70G_fEqJdGGztvkAZPo0oe9-Y-Uqplb5kxLDW8AZ2lQMTsDn-CK5VwlZEdydIKXuYhViGeAwQ6Ax1DcGyfoUr6n4WGTs7JvXRgoj0UE77O80gFuRgIEJ11ecgYqYKuwqczQ8WKnl3uV1Uu" 
                                     alt="Bathroom" 
                                     class="w-100 h-100 object-cover">
                            </div>
                        </div>
                        
                        <!-- Foto Kitchen -->
                        <div class="col-6">
                            <div class="hover-scale-image rounded-4 shadow" style="height: 215px;">
                                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBeu9mROern3WHYzfFqFhqVzYyWthIJl54odaGzfZKjwmC1uHImjjCO3-uwNeRV1ERS1CYhYS9K7WDjUbYXhHLOp5i2GNop_KPr37Fc280-TeMxjY-dzLX1HTb0dSFckPyCSPqMYE1DAF-8Zdph9gry1IqIq8IB5bdySBRj5ZNJarnC4Vg4z5BUaUTfCumzhFUHzMl1DgHDHqQl2YxvwHF2YxpiV41mA-TWrH83kJXxgRqDLOF4YkTATpqMBmQTm8dcaTNKFJhCwY53" 
                                     alt="Kitchen" 
                                     class="w-100 h-100 object-cover">
                            </div>
                        </div>
                        
                        <!-- Foto Terrace (kursi putih) - full width di bawah 2 foto di atas -->
                        <div class="col-12">
                            <div class="hover-scale-image rounded-4 shadow" style="height: 215px;">
                                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB5eNRe4en11FYXpzcTaDI56V24GRihs97nwhUnqZt3WGV21k6o7A7qvGZCOfvex3GlcU1AzWQEXZkAkvSGbQbZGyLV3-UwHqDAQlbsH9kFmW-Nv1fjDn3lY6cYmdUd6bUdeZwqBuV3O_Q3t3yo9y3L8KhgR8EE0F78GzqWcYHHiPA58Dkz7dXqh6TyS_7LnA1L7USSy50yVQALSUgit0LUSAsNKCOE-Nx99LOYCe5Y9jAl_927WwY_c10xlaEkztU0UoBhXTb-ZC20" 
                                     alt="Terrace with white chairs" 
                                     class="w-100 h-100 object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section class="container py-4 my-3" id="facilities">
        <div class="text-center mb-4">
            <h2 class="fw-bold mb-2">Premium Facilities</h2>
            <p class="text-secondary small">Everything you need for a perfect getaway</p>
        </div>
        
        <div class="row g-3 justify-content-center">
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
                <div class="card border-0 shadow-sm p-3 text-center h-100 hover-scale">
                    <span class="material-symbols-outlined text-primary" style="font-size: 2rem;">{{ $facility['icon'] }}</span>
                    <span class="small fw-medium mt-1">{{ $facility['name'] }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </section>

<!-- Location & Contact -->
<section class="bg-light py-4" id="location">
    <div class="container py-3">
        <div class="row g-4">
            <div class="col-lg-7">
                <div class="ps-0 ps-lg-3">
                    <h2 class="fw-bold mb-3">Location</h2>
                    
                    <div class="bg-white p-4 rounded-4 shadow-sm border">
                        <div class="position-relative rounded-4 overflow-hidden shadow-sm" style="height: 300px;">
                            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPUiqMqvfU_MN2YjplzwYxVdLlOMxLQZVNHhwGfXo2ltAZBhPp2gsumhWlEM6BN9pSFlEtfK2VltabOa-uR3bSsEE_Wnz0WL8kOqvXRWaTfBAwAphHrCcXeMUUiZhTJj8ueDRqBMNfd8ysNDl0LOATk2jyJDBfu6J7r4GH10LTr2BzAT6U__Of343R7zsKfZvBtlS-CZkO5j_t6kND1OkAlju1MR3ygJVzyGfM3Y8a6C_o3ftwAaQmv8xHPN1q9zs7amBAY6fJJ-6Z" 
                                 alt="Map" 
                                 class="w-100 h-100 object-cover opacity-75">
                            
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <div class="bg-white p-2 rounded-circle shadow-sm animate-bounce">
                                    <span class="material-symbols-outlined text-primary" style="font-size: 2rem;">location_on</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="d-flex align-items-start gap-2 mt-3 text-secondary small">
                            <span class="material-symbols-outlined" style="font-size: 1.2rem;">directions_car</span>
                            <p class="mb-0">15 minutes from Ravello city center. Airport shuttle service available upon request.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5" id="contact">
                <div class="bg-white p-4 rounded-4 shadow-sm border mt-0 mt-lg-5">
                    <h3 class="fw-bold mb-3" style="font-size: 1.3rem;">Contact Us</h3>
                    
                    <form class="form-container">
                        <div class="mb-2">
                            <label class="form-label small fw-semibold mb-1">Full Name</label>
                            <input type="text" class="form-control form-control-sm" placeholder="John Doe">
                        </div>
                        
                        <div class="mb-2">
                            <label class="form-label small fw-semibold mb-1">Email Address</label>
                            <input type="email" class="form-control form-control-sm" placeholder="john@example.com">
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label small fw-semibold mb-1">Message</label>
                            <textarea class="form-control form-control-sm" rows="4" placeholder="I am interested in booking for July..."></textarea>
                        </div>
                        
                        <button class="btn btn-primary text-white w-100 py-2 fw-semibold shadow-sm small">
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