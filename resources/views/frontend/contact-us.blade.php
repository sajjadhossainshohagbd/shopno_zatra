<div>
    <div class="container ">
        <div class="p-2">
            <div class="col-md-12">
                <div class="card shadow">

                    @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                    @elseif(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <div class="card-header">
                        <div class="card-title">
                            <h2>Contact Us</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <form wire:submit='submit'>
                                    <div class="form-group mb-2">
                                        <label>Name</label>
                                        <input type="text" class="form-control form-control-sm @error('name') border-danger @enderror" wire:model='name' placeholder="Enter name">
                                        @error('name')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control form-control-sm @error('email') border-danger @enderror" wire:model='email' placeholder="Enter email">
                                        @error('email')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Subject</label>
                                        <input type="text" class="form-control form-control-sm @error('subject') border-danger @enderror" wire:model='subject' placeholder="Enter subject">
                                        @error('subject')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Message</label>
                                        <textarea wire:model='message' class="form-control form-control-sm @error('message') border-danger @enderror" cols="30" rows="4" placeholder="Enter message"></textarea>
                                        @error('message')
                                        <div class="text text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="text-center my-2">
                                        <button type="submit" class="btn btn-success bg-app">Submit <i class="fa fa-spinner fa-spin" wire:loading></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <div class="m-4">
                                    {!! settings('contact_us') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
