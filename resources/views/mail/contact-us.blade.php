<x-mail::message>
# Contact Us

<h5>Name : {{ $name }}</h5>
<h5>Email : {{ $email }}</h5>
<h5>Subject : {{ $subject }}</h5>
<h5>Message : {{ $message }}</h5>


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
