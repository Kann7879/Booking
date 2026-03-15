@extends('layout.booking.main')

@section('title', 'Villa Booking - Secure Your Stay')

@section('content')
<div style="padding-left: 3rem; padding-right: 3rem;">
    <!-- Tombol Kembali -->
    <div class="mb-4">
        <a href="{{ url()->previous() }}" class="btn btn-link text-decoration-none text-secondary d-inline-flex align-items-center gap-2 p-0">
            <span class="material-symbols-outlined">arrow_back</span>
            Back
        </a>
    </div>
    
    <div class="row g-4">
        <!-- Left Column: Forms -->
        <div class="col-lg-8">
            <div class="mb-4">
                <h1 class="fw-bold" style="font-size: 2.2rem;">Complete Your Booking</h1>
                <p class="text-secondary">Fill in the details below to finalize your luxury escape.</p>
            </div>
            
            <div class="row g-4">
                <!-- Stay Dates & Guests Card -->
                <div class="col-12">
                    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                        <div class="d-flex align-items-center gap-2 mb-4">
                            <span class="material-symbols-outlined text-primary fs-3">calendar_today</span>
                            <h3 class="fw-bold mb-0">Dates & Guests</h3>
                        </div>
                        
                        <div class="row g-4">
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Select Check-in / Out</label>
                                <div class="border rounded-3 p-3 bg-light">
                                    <div class="d-flex align-items-center justify-content-between py-2 border-bottom">
                                        <div>
                                            <div class="small text-secondary text-uppercase fw-bold">Check-in</div>
                                            <div class="fw-medium">Oct 12, 2023</div>
                                        </div>
                                        <span class="material-symbols-outlined text-secondary">arrow_forward</span>
                                        <div class="text-end">
                                            <div class="small text-secondary text-uppercase fw-bold">Check-out</div>
                                            <div class="fw-medium">Oct 15, 2023</div>
                                        </div>
                                    </div>
                                    <button class="btn btn-link text-primary text-decoration-none p-0 mt-2 w-100 d-flex align-items-center justify-content-center gap-1">
                                        Change Dates <span class="material-symbols-outlined fs-6">edit</span>
                                    </button>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Number of Guests</label>
                                <select class="form-select form-select-lg bg-light">
                                    <option>2 Adults, 0 Children</option>
                                    <option>2 Adults, 1 Child</option>
                                    <option>3 Adults, 0 Children</option>
                                    <option>4 Adults, 0 Children</option>
                                </select>
                                <div class="small text-secondary mt-2">Maximum capacity for this villa is 6 guests.</div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Guest Information Card -->
                <div class="col-12">
                    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                        <div class="d-flex align-items-center gap-2 mb-4">
                            <span class="material-symbols-outlined text-primary fs-3">person</span>
                            <h3 class="fw-bold mb-0">Guest Information</h3>
                        </div>
                        
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label fw-semibold">Full Name</label>
                                <input type="text" class="form-control form-control-lg bg-light" placeholder="John Doe">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Email Address</label>
                                <input type="email" class="form-control form-control-lg bg-light" placeholder="john@example.com">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Phone Number</label>
                                <input type="tel" class="form-control form-control-lg bg-light" placeholder="+1 (555) 000-0000">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Payment Method Card -->
                <div class="col-12">
                    <div class="bg-white p-4 p-md-5 rounded-4 shadow-sm border">
                        <div class="d-flex align-items-center gap-2 mb-4">
                            <span class="material-symbols-outlined text-primary fs-3">payments</span>
                            <h3 class="fw-bold mb-0">Payment Method</h3>
                        </div>
                        
                        <div class="row g-3">
                            <!-- Bank Transfer -->
                            <div class="col-md-4">
                                <div class="payment-option border rounded-4 p-3 text-center" onclick="selectPayment(this, 'bank')">
                                    <span class="material-symbols-outlined d-block fs-1 text-secondary mb-2">account_balance</span>
                                    <span class="fw-semibold">Bank Transfer</span>
                                    <input type="radio" name="payment" id="bank" class="d-none" checked>
                                </div>
                            </div>
                            
                            <!-- E-Wallet -->
                            <div class="col-md-4">
                                <div class="payment-option border rounded-4 p-3 text-center" onclick="selectPayment(this, 'ewallet')">
                                    <span class="material-symbols-outlined d-block fs-1 text-secondary mb-2">account_balance_wallet</span>
                                    <span class="fw-semibold">E-Wallet</span>
                                    <input type="radio" name="payment" id="ewallet" class="d-none">
                                </div>
                            </div>
                            
                            <!-- Credit Card -->
                            <div class="col-md-4">
                                <div class="payment-option border rounded-4 p-3 text-center" onclick="selectPayment(this, 'credit')">
                                    <span class="material-symbols-outlined d-block fs-1 text-secondary mb-2">credit_card</span>
                                    <span class="fw-semibold">Credit Card</span>
                                    <input type="radio" name="payment" id="credit" class="d-none">
                                </div>
                            </div>
                        </div>
                        
                        <!-- Card details info -->
                        <div class="mt-4 p-3 rounded-3 bg-primary bg-opacity-10 border border-primary border-opacity-20" id="paymentInfo">
                            <p class="mb-0 d-flex align-items-center gap-2 small text-white">
                                <span class="material-symbols-outlined text-primary fs-6">info</span>
                                You will receive bank account details after clicking confirm.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Right Column: Booking Summary -->
        <div class="col-lg-4">
            <div class="position-sticky" style="top: 100px;">
                <div class="bg-white rounded-4 shadow-lg border overflow-hidden">
                    <!-- Villa Image/Thumbnail -->
                    <div class="ratio ratio-21x9 bg-secondary bg-opacity-25" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBwecUL-Vpi0B4p7-KIDEjFrYry7hHrrhghDcQ7_k4io_R8KlAbex3U9dyMpJ7BQj-gpH1oWslFI_DUr76zrkacmgyUYjBx31unlHOWfC4X5-DYIVHPam0hDhOg4jf7zrPUrWPyO9RolI1TkXPsr1wJMvGW7RATqxGyrAdi1cQxKVkVywtPM5vDGMKnRwSMEjyQlb9tHu0w0yA1sX7PxKdotGbZrZtQP13RnLSTpDAyLiXov1--HFELYnvKDujIODxDdmZskVQRc62s'); background-size: cover; background-position: center;">
                    </div>
                    
                    <div class="p-4">
                        <h3 class="fw-bold mb-2">Booking Summary</h3>
                        
                        <div class="d-flex align-items-center gap-1 text-primary mb-3">
                            <span class="material-symbols-outlined fs-6">star</span>
                            <span class="material-symbols-outlined fs-6">star</span>
                            <span class="material-symbols-outlined fs-6">star</span>
                            <span class="material-symbols-outlined fs-6">star</span>
                            <span class="material-symbols-outlined fs-6">star</span>
                            <span class="small text-secondary ms-1">(48 Reviews)</span>
                        </div>
                        
                        <div class="py-3 border-top border-bottom">
                            <div class="d-flex justify-content-between mb-2 small">
                                <span class="text-secondary">Standard Rate × 3 nights</span>
                                <span class="fw-semibold">$1,350.00</span>
                            </div>
                            <div class="d-flex justify-content-between mb-2 small">
                                <span class="text-secondary">Service Fee</span>
                                <span class="fw-semibold">$45.00</span>
                            </div>
                            <div class="d-flex justify-content-between small">
                                <span class="text-secondary">Tourism Tax</span>
                                <span class="fw-semibold">$15.00</span>
                            </div>
                        </div>
                        
                        <div class="d-flex justify-content-between align-items-center pt-4 mb-4">
                            <span class="fw-bold">Total Price</span>
                            <span class="fs-3 fw-bold text-primary">$1,410.00</span>
                        </div>
                        
                        <button class="btn btn-primary text-white w-100 py-3 fw-semibold shadow d-flex align-items-center justify-content-center gap-2">
                            Confirm Booking
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                        
                        <p class="text-center small text-secondary mt-3">
                            By clicking 'Confirm Booking' you agree to our Terms & Cancellation Policy.
                        </p>
                    </div>
                </div>
                
                <!-- Support Card -->
                <div class="bg-light p-3 rounded-4 border border-dashed d-flex align-items-center gap-3 mt-3">
                    <div class="bg-primary bg-opacity-10 rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
                        <span class="material-symbols-outlined text-primary">headset_mic</span>
                    </div>
                    <div>
                        <h6 class="fw-bold mb-0">Need help?</h6>
                        <p class="small text-secondary mb-0">Our concierge is available 24/7</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .payment-option {
        cursor: pointer;
        transition: all 0.2s ease;
        border-color: #e2e8f0 !important;
    }
    .payment-option:hover {
        border-color: var(--primary) !important;
        background-color: rgba(23, 176, 207, 0.05);
    }
    .payment-option.selected {
        border-color: var(--primary) !important;
        background-color: rgba(23, 176, 207, 0.05);
    }
    .payment-option.selected .material-symbols-outlined {
        color: var(--primary) !important;
    }
    .ratio-21x9 {
        --bs-aspect-ratio: 42.8571428571%;
    }
    .border-dashed {
        border-style: dashed;
    }
</style>

@push('scripts')
<script>
    function selectPayment(element, type) {
        // Remove selected class from all payment options
        document.querySelectorAll('.payment-option').forEach(opt => {
            opt.classList.remove('selected');
        });
        
        // Add selected class to clicked element
        element.classList.add('selected');
        
        // Check the radio button
        const radio = element.querySelector('input[type="radio"]');
        if (radio) radio.checked = true;
        
        // Update info text
        const infoText = document.getElementById('paymentInfo').querySelector('p');
        if (type === 'bank') {
            infoText.innerHTML = '<span class="material-symbols-outlined text-primary fs-6 me-2">info</span> You will receive bank account details after clicking confirm.';
        } else if (type === 'ewallet') {
            infoText.innerHTML = '<span class="material-symbols-outlined text-primary fs-6 me-2">info</span> You will be redirected to complete e-wallet payment.';
        } else if (type === 'credit') {
            infoText.innerHTML = '<span class="material-symbols-outlined text-primary fs-6 me-2">info</span> Enter your card details on the next page.';
        }
    }
    
    // Set bank as default selected
    document.addEventListener('DOMContentLoaded', function() {
        const bankOption = document.querySelector('.payment-option');
        if (bankOption) {
            bankOption.classList.add('selected');
        }
    });
</script>
@endpush
@endsection