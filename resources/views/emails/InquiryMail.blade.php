@component('mail::message')
# Inquiry From : {{ $inquiry['email'] }}

{{ $inquiry['subject'] }}

{{ $inquiry['message'] }}


Thanks,<br>
{{ $inquiry['name'] }}
@endcomponent
