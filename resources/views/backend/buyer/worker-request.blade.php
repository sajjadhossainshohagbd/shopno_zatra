<div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Worker Request</div>
                </div>
                <div class="card-body">
                    <form wire:submit='save'>
                        <div class="mb-3 text-center">
                            <img src="{{ auth()->user()->get_profile_pic }}" class="avatar-md"> <br>
                            <span>Name : {{ $worker->name }}</span> <br>
                            <span>Languages : {{ $worker->worker?->language }}</span> <br>
                            <span>Skills : {{ $worker->worker?->skill }}</span> <br>
                            <span>Experience : {{ $worker->worker?->experience }}</span> <br>
                            <span>About : {{ $worker->worker?->about }}</span>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="description">Description <small class="text text-danger">*</small></label>
                            <textarea wire:model="description" rows="6" class="form-control @error('description') is-invalid @enderror" placeholder="Write your job description"></textarea>
                            @error('description')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success btn-rounded" wire:loading.attr='disabled'>Send Request</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
