@component('mail::message')
# Contact Form Submission

The following message was sent using the Contact Form:

@component('mail::panel')
Name: {{ $form['name'] }}

Email: {{ $form['email'] }}

Message:

{{ $form['bodyMessage'] }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
