@component('mail::message')


<h1>{{$details['titel']}}</h1>
<b>{{$details['signature']}}</b>
<br>
<div>{{$details['body']}}</div>



Thanks,<br>
{{ '' }}
@endcomponent
