@include('frontend.courses.inc.asset')
<div>
    <div class="breadcrumb-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="breadcrumb-list">
                        <nav aria-label="breadcrumb" class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                <li class="breadcrumb-item" aria-current="page">Cart</li>
                                <li class="breadcrumb-item" aria-current="page">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="course-content checkout-widget">
        <div class="container">
            <form wire:submit='submit' class="row">
                <div class="col-lg-12">
                    <div class="student-widget">
                        <div class="student-widget-group add-course-info">
                            <div class="cart-head">
                                <h4>Billing Address</h4>
                            </div>
                            <div class="checkout-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Name <small class="text-danger">*</small></label>
                                            <input type="text" class="form-control  @error('name') border-danger @enderror" wire:model='name' placeholder="Enter your Name">
                                            @error('name')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Phone Number <small class="text-danger">*</small></label>
                                            <input type="text" class="form-control @error('phone') border-danger @enderror" wire:model='phone' placeholder="Phone Number">
                                            @error('phone')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Address Line 1 <small class="text-danger">*</small></label>
                                            <input type="text" class="form-control @error('address_one') border-danger @enderror" wire:model='address_one' placeholder="Address">
                                            @error('address_one')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Address Line 2 (Optional)</label>
                                            <input type="text" class="form-control @error('address_two') border-danger @enderror" wire:model='address_two' placeholder="Address">
                                            @error('address_two')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label">Country <small class="text-danger">*</small></label>
                                            <select class="form-select @error('country') border-danger @enderror" wire:model="country">
                                                <option value="" selected>Select Country</option>
                                                <option value="bangladesh">Bangladesh</option>
                                            </select>
                                            @error('country')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">State <small class="text-danger">*</small></label>
                                            <input type="text" class="form-control @error('state') border-danger @enderror" wire:model='state' placeholder="State">
                                            @error('state')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Zip/Postal Code</label>
                                            <input type="text" class="form-control @error('postal_code') border-danger @enderror" wire:model='postal_code' placeholder="Zip/Postal Code">
                                            @error('postal_code')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="student-widget pay-method">
                        <div class="student-widget-group add-course-info">
                            <div class="cart-head">
                                <h4>Payment Method</h4>
                            </div>
                            <div class="checkout-form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="wallet-method">
                                            <label class="radio-inline custom_radio me-4">
                                                <input type="radio" wire:model="payment_method" checked>
                                                <span class="checkmark"></span> Bank Transfer </label>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Payment Proof</label>
                                            <input type="file" wire:model='payment_proof' class="form-control @error('payment_proof') border-danger @enderror">
                                            @error('payment_proof')
                                            <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="student-widget-group add-course-info mt-4">
                            <div class="cart-head">
                                <h4>Sub Total</h4>
                            </div>
                            <div class="checkout-form">
                                <div class="row">
                                    <div class="col-lg-6 p-4">
                                        <h4>Total : ৳{{ $carts->sum('price') }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="payment-btn m-2 text-center">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
