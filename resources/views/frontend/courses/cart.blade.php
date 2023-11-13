@include('frontend.courses.inc.asset')
<section class="course-content cart-widget">
	<div class="container">
		<div class="student-widget">
			<div class="student-widget-group">
				<div class="row">
					<div class="col-lg-12">
						<div class="cart-head">
							<h4> Cart ({{ $carts->count() }} items)</h4>
                        </div>
						<div class="cart-group">
                            @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                            @endif

                            @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                            @endif
							<div class="row">
                                @forelse ($carts as $cart)
								<div class="col-lg-12 col-md-12 d-flex" wire:key='{{ $cart->id }}'>
									<div class="course-box course-design list-course d-flex">
										<div class="product">
											<div class="product-img">
												<a href="{{ route('course.details',$cart->course->slug) }}">
                                                    <img class="img-fluid" alt="{{ $cart->course->name }}" src="{{ $cart->course->show_thumbnail }}">
                                                </a>
												<div class="price">
													<h3>৳{{ $cart->price }}</h3>
                                                </div>
											</div>
											<div class="product-content">
												<div class="head-course-title">
													<h3 class="title">
                                                        <a href="{{ route('course.details',$cart->course->slug) }}">{{ $cart->course->name }}</a>
                                                    </h3>
                                                </div>
												<div class="course-info d-flex align-items-center border-bottom-0 pb-0">
													<div class="rating-img d-flex align-items-center">
                                                        <img src="{{ asset('frontend/courses/icon/icon-01.svg') }}" alt="">
														<p>{{ $cart->course->lessons->count() }} Lessons</p>
													</div>
													<div class="course-view d-flex align-items-center">
                                                        <img src="{{ asset('frontend/courses/icon/icon-02.svg') }}" alt="">
														<p>{{ $cart->course->duration }}</p>
													</div>
												</div>
												<div class="rating">
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
                                                    <i class="fas fa-star filled"></i>
												</div>
											</div>
											<div class="cart-remove">
                                                <button class="btn btn-primary d-none" wire:target='remove({{ $cart->id }})' wire:loading.class.remove="d-none" disabled><i class="fas fa-spinner fa-spin"></i> Removing </button>
                                                <button class="btn btn-primary" wire:click='remove({{ $cart->id }})' wire:target='remove({{ $cart->id }})' wire:loading.class="d-none">Remove </button>

                                            </div>
										</div>
									</div>
								</div>
                                @empty
                                <div class="text-center text-danger">Your Cart is Empty!</div>
                                @endforelse

							</div>
						</div>
                        @if($carts->count() > 0)
						<div class="cart-total">
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="cart-subtotal">
										<p>Subtotal : <span>৳{{ $carts->sum('price') }}</span></p>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="check-outs"> <a href="checkout.html" class="btn btn-primary">Checkout</a> </div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="condinue-shop">
                                        <a href="{{ route('courses') }}" class="btn btn-primary">Continue Shopping</a>
                                    </div>
								</div>
							</div>
						</div>
                        @endif
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
