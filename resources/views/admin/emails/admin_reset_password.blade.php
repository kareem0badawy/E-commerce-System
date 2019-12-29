@component('mail::message')
Welecom {{ $data['data']->name }} <br>

The body of your message.

@component('mail::button', ['url' => aurl('reset/password/'.$data['token'] )])
Click Here To Reset Password
@endcomponent
Or Copy this link
<a href="{{ aurl('reset/password/'.$data['token']) }}">{{ aurl('reset/password/'.$data['token']) }}</a>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
