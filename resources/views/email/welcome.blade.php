@component('mail::message')
Thank you for registering
@component('mail::button', ['url' => 'http://127.0.0.1:8000/'])
Best site
@endcomponent

@component('mail::panel')
<q>APOELaravel</q>
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
