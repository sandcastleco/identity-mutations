@component('mail::message')

# New Inquiry for _{{ $attributes['artwork']->title }}_ from {{ $attributes['replyName'] }}

* Name: {{ $attributes['replyName'] }}
* Email: {{ $attributes['replyTo'] }}
* Message: {{ $attributes['message'] }}

---

## {{ $attributes['artwork']->title }}

@if($attributes['artwork']->description)
{{ $attributes['artwork']->description }}
@endif

{{ $attributes['artwork']->price }} USD

---

To respond to this inquiry, please respond to this email.

@endcomponent
