<div>
    <form action="{{ route('settings.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Contact Info</label>
            <input type="hidden" name="settings[]" value="contact_us">
            <x-textarea id='contact_us' name="contact_us" value="{{ settings('contact_us') }}"/>
            <button type="submit" class="btn btn-success mt-2 text-center">Update</button>
        </div>
    </form>
</div>
