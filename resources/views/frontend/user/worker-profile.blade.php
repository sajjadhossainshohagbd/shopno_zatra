@include('frontend.courses.inc.asset')
<div class="container">
    <div class="row">
        @include('frontend.user.nav')
        <div class="col-xl-9 col-md-8">
            <div class="settings-widget profile-details">
                <div class="settings-menu p-0">
                    <div class="checkout-form personal-address add-course-info ">
                        <div class="personal-info-head">
                            <h4>Worker Profile</h4>
                            <p>
                                Current Status :  <div @class([
                                    "badge text-white font-size-12",
                                    "bg-warning" => !$worker->status,
                                    "bg-success" => $worker->status == 'approved',
                                    "bg-danger" => $worker->status == 'rejected',
                                    "bg-info" => $worker->status == 'pending',
                                ])>
                                {{ ucfirst($worker->status ?? 'Not Registered') }}
                                </div>
                            </p>
                        </div>
                        <hr>
                        <form wire:submit='submit'>
                            <div class="mb-3">
                                <label class="form-label"> Languages <span class="text-danger">*</span></label> <br>
                                <small class="mb-2 text-danger">Write multiple language separate by comma(,)</small>
                                <input class="form-control @error('language') border-danger @enderror" type="text" wire:model='language' placeholder="Enter language name">
                                @error('language')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Skills <small class="text-danger">(Optional)</small></label> <br>
                                <small class="mb-2 text-danger">Write multiple skill separate by comma(,)</small>
                                <input class="form-control @error('skill') border-danger @enderror" type="text" wire:model='skill' placeholder="Enter skill name">
                                @error('skill')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Contact Phone Number <span class="text-danger">*</span></label> <br>
                                <input class="form-control @error('contact_phone') border-danger @enderror" type="text" wire:model='contact_phone' placeholder="Enter active phone number">
                                @error('contact_phone')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> Experience <small class="text-danger">(Optional)</small></label> <br>
                                <small class="mb-2 text-danger">Write multiple skill separate by comma(,)</small>
                                <input class="form-control @error('experience') border-danger @enderror" type="text" wire:model='experience' placeholder="Enter your experience">
                                @error('experience')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label"> About Yourself <span class="text-danger">*</span></label> <br>
                                <textarea class="form-control @error('about') border-danger @enderror" wire:model='about' placeholder="Write about yourself."></textarea>
                                @error('about')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="update-profile">
                                <button type="submit" class="btn btn-primary">Save <i class="fas fa-spinner fa-spin" wire:target='submit' wire:loading></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
