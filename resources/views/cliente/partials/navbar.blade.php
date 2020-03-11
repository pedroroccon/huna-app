@component('hive::components.navbar-pills')
	@slot('navs')
		<ul class="navbar-nav mr-auto">
			<li class="mr-2"><a class="nav-link" href="{{ url($cliente->path()) }}">Geral</a></li>
            <li class="mr-2"><a class="nav-link" href="{{ url($cliente->path() . '/endereco') }}">Endereços</a></li>
            <li class="mr-2"><a class="nav-link" href="{{ url($cliente->path() . '/email') }}">E-mails</a></li>
            <li class="mr-2"><a class="nav-link" href="{{ url($cliente->path() . '/telefone') }}">Telefones</a></li>
            <li class="mr-2"><a class="nav-link" href="{{ url(config('hello.url') . '/projeto?client_id=' . $cliente->id) }}">Projetos</a></li>
        </ul>
	@endslot
@endcomponent