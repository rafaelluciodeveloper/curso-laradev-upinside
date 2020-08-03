@component('mail::message')
Olá , você recebeu novo contato a parti do seu site!

Nome: <b>{{$reply_name}}</b>

Email: {{$reply_email}}

Sobre:{{$subject}}

Mensagem :
@component('mail::panel')
{{$message}}
@endcomponent

@endcomponent
