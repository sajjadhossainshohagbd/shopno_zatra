<div>
    <div class="container">
        <div class="p-2">
            <div class="col-md-12">
                <div class="card shadow">

                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @elseif(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <div class="card-header">
                        <div class="card-title text-center">
                            <h2>Education Visa Request</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="bg-app text-white p-2">Fill Up Information</h6>
                        <form wire:submit='submit'>
                            <div class="row mt-3">
                                <div class="col-lg-10 mx-auto">

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Your Name <small>(According to NID/Passport)</small> <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" wire:model='name' class="form-control @error('name') border-danger @enderror" placeholder="Your Name..">
                                                @error('name')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Your Age <small>(According to NID/Passport)</small> <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" min="18" wire:model='age' class="form-control @error('age') border-danger @enderror" placeholder="Your age..">
                                                @error('age')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Father's Name <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" wire:model='father_name' class="form-control @error('father_name') border-danger @enderror" placeholder="Father's Name..">
                                                @error('father_name')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Mother's Name <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" wire:model='mother_name' class="form-control @error('mother_name') border-danger @enderror" placeholder="Mother's Name..">
                                                @error('mother_name')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Email Address <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="email" wire:model='email' class="form-control @error('email') border-danger @enderror" placeholder="Email Address..">
                                                @error('email')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Phone Number <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" wire:model='phone' class="form-control @error('phone') border-danger @enderror" placeholder="Phone Numebr for emergency..">
                                                @error('phone')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Upload Your NID <span class="text-danger">(Optional)</span> <br><small class="text-danger">Only <code>jpg</code> format.</small></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="file" wire:model='nid' class="form-control @error('nid') border-danger @enderror">
                                                @error('nid')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Upload Your Passport <span class="text-danger">(Optional)</span>  <br><small class="text-danger">Only <code>jpg</code> format.</small></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="file" wire:model='passport' class="form-control @error('passport') border-danger @enderror">
                                                @error('passport')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Upload Your Experience Certificate <span class="text-danger">(Optional)</span>  <br><small class="text-danger">Only <code>jpg</code> format.</small></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="file" wire:model='experience_certificate' class="form-control @error('experience_certificate') border-danger @enderror">
                                                @error('experience_certificate')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Upload Your Bank Solvency <span class="text-danger">(Optional)</span>  <br><small class="text-danger">Only <code>jpg</code> format.</small></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="file" wire:model='bank_solvency' class="form-control @error('bank_solvency') border-danger @enderror">
                                                @error('bank_solvency')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Upload Your Academic Certificate <span class="text-danger">(Optional)</span>  <br><small class="text-danger">Only <code>jpg</code> format.</small></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="file" wire:model='academic_certificate' class="form-control @error('academic_certificate') border-danger @enderror">
                                                @error('academic_certificate')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Present Address <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" wire:model='present_address' class="form-control @error('present_address') border-danger @enderror" placeholder="Present Address..">
                                                @error('present_address')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Permanent Address <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" wire:model='permanent_address' class="form-control @error('permanent_address') border-danger @enderror" placeholder="Permanent Address..">
                                                @error('permanent_address')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Education <span class="text-danger">(Optional)</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <select wire:model='education' class="form-select @error('education') border-danger @enderror">
                                                    <option value="">Select Education Qualification</option>
                                                    <option value="Primary">Primary</option>
                                                    <option value="SSC">SSC</option>
                                                    <option value="HSC">HSC</option>
                                                    <option value="Graduated">Graduated</option>
                                                    <option value="Post Graduated">Post Graduated</option>
                                                    <option value="PHD">PHD</option>
                                                </select>
                                                @error('education')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <label class="form-control-label">Choice Subject <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea wire:model='choice_subject' class="form-control @error('choice_subject') border-danger @enderror" placeholder="Enter your choice subjects here, example : English,Economics etc..."></textarea>
                                                @error('choice_subject')
                                                <div class="text text-danger">
                                                    {{ $message }}
                                                </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="update-profile">
                                        <button type="submit" class="btn btn-primary" wire:loading.attr='disabled'>Send Request <i class="fas fa-spinner fa-spin" wire:target='submit' wire:loading></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
