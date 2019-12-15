@component('mail::message')


{{$data->msg}}

@component('mail::button', ['url' => 'https://twitter.com/hecklemaniac'])
Connect With Nerd
@endcomponent


Thanks,<br>
{{ config('app.mailman') }}
@endcomponent
