@include('frontend.courses.inc.asset')
<div class="container">
    <div class="row">
        @include('frontend.user.nav')
        <div class="col-xl-9 col-md-8">
            <div class="settings-widget profile-details">
                <div class="settings-menu p-0">
                    <div class="checkout-form personal-address add-course-info ">
                        <div class="personal-info-head">
                            <h4>Personal Details</h4>
                            <p>Edit your personal information and address.</p>
                        </div>
                        <hr>
                        <form wire:submit='update'>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Name</label>
                                        <input type="text" class="form-control @error('name') border-danger @enderror" placeholder="Enter your Name" wire:model='name'>
                                        @error('name')
                                        <div class="text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Email</label>
                                        <input type="text" class="form-control @error('email') border-danger @enderror" placeholder="Enter your Email" wire:model='email'>
                                        @error('email')
                                        <div class="text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Phone</label>
                                        <input type="text" class="form-control @error('phone') border-danger @enderror" placeholder="Enter your Phone" wire:model='phone'>
                                        @error('phone')
                                        <div class="text text-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Profile Picture</label>
                                        <input type="file" class="form-control" wire:model='profile_pic'>
                                    </div>
                                </div>

                                <div class="update-profile">
                                    <button type="submit" class="btn btn-primary" wire:loading.attr='disabled'>Update Profile <i class="fas fa-spinner fa-spin" wire:target='update' wire:loading></i></button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <div class="personal-info-head pt-4">
                            <h4>Change Password</h4>
                        </div>

                        <form wire:submit='updatePassword'>
                              <!-- Current password -->
                              <div class="mb-3">
                                <label class="form-label">Current password <span class="text-danger">*</span></label>
                                <input class="form-control @error('current_password') border-danger @enderror" type="password" wire:model='current_password' placeholder="Enter current password">
                                @error('current_password')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <!-- New password -->
                            <div class="mb-3">
                                <label class="form-label"> Enter new password <span class="text-danger">*</span></label>
                                <input class="form-control @error('new_password') border-danger @enderror" placeholder="Enter new password" wire:model='new_password' type="password">
                                @error('new_password')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <!-- Confirm -->
                            <div class="mb-3">
                                <label class="form-label">Confirm new password <span class="text-danger">*</span></label>
                                <input class="form-control @error('password_confirmation') border-danger @enderror" type="password" wire:model='password_confirmation' placeholder="Confirm new password">
                                @error('password_confirmation')
                                <div class="text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="update-profile">
                                <button type="submit" class="btn btn-primary">Update Password <i class="fas fa-spinner fa-spin" wire:target='updatePassword' wire:loading></i></button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
