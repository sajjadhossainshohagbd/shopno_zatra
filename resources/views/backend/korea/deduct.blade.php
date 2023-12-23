<div>
    <div class="row">
        <div class="col-lg-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Deduct Balance</div>
                </div>
                <div class="card-body">
                    <form wire:submit='submit'>
                        <div class="text-center">
                            <img src="{{ $user->get_profile_pic }}" alt="" class="rounded-circle avatar-sm"> <br>
                            {{ $user->name }}
                            <br>
                            <span><b>Main Balance :</b> ৳{{ round($user->balance) }}</span> <br>
                            <span><b>Korea Balance :</b> ৳{{ round($user->course_balance) }}</span> <br>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="amount">Amount <small class="text text-danger">*</small></label>
                            <input id="amount" wire:model="amount" type="number" class="form-control @error('amount') is-invalid @enderror" placeholder="Enter amount">
                            @error('amount')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="reason">Purpose <small class="text text-danger">*</small></label>
                            <textarea id="reason" wire:model="reason"  class="form-control @error('reason') is-invalid @enderror" placeholder="Enter purpose"></textarea>
                            @error('reason')
                                <div class="text text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" @class([
                                'btn btn-rounded',
                                'btn-success'
                            ]) wire:loading.attr='disabled'>Deduct Balance</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Deduct History</div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Purpose</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($histories as $history)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $history->created_at->format('d M Y h:i A') }}</td>
                                <td>{{ $history->reason }}</td>
                                <td>BDT {{ $history->amount }}</td>
                            </tr>
                            @empty
                            <td colspan="4" class="text-center">No data found!</td>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $histories->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
