@component('mail::message')

* Name: {{ $attributes['replyName'] }}
* Email: {{ $attributes['replyTo'] }}
* Message: {{ $attributes['message'] }}

---

To respond to this message, please respond to this email.

@endcomponent
