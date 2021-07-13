@component('mail::message')
# Novo Contato

Nome: {{ $data['name'] }}
{{-- Assunto: {{ $data['subject'] }} --}}
E-mail: {{ $data['email'] }}

Mensagem: {{ $data['message'] }}

Obrigado,<br>
{{ config('app.name') }}!
@endcomponent