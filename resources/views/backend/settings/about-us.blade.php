<div>
    <form action="{{ route('settings.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>About Us</label>
            <input type="hidden" name="settings[]" value="about_us">
            <x-textarea id="about_us" name="about_us" value="{{ settings('about_us') }}"/>
            <button type="submit" class="btn btn-success mt-2 text-center">Update</button>
        </div>
    </form>
</div>
