<h3>Teste View</h3>

@foreach ($contatos as $c)
    <p class="text-center">{{$c->nome}}</p>
    <p class="text-center">{{$c->tel}}</p>
@endforeach