@component('mail::message')
<h1>Parabens por garantir a sua vaga na turma LaraDev</h1>

<p>Para fazer login na plataforma usilize o seu email ({{ $user->email }}) juntamente com sua senha de cadastro</p>

@component('mail::button',['url'=> 'https://www.sistemaspadrao.com.br'])
    Garantir Minha Vaga
@endcomponent

<p>para garantir a sua vaga, voce tem ate {{ date('d/m/Y',strtotime($order->due_at)) }} para conseguir o seu desconto e pagar somento R${{  number_format($order->value,2,",",".") }} e ter acesso completo ao nosso conteudo!</p>
@endcomponent
