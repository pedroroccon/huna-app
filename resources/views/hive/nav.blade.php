<!-- Clientes -->
<div class="item">
	<div class="hello-nav-menu-item-image"><img src="{{ asset('h-assets/svg/hello-svg/011-employees.svg') }}" alt="Clientes"></div>
	<a class="hello-nav-menu-item" data-toggle="collapse" data-parent="#hello-nav-accordion" href="#nav-cliente">Clientes</a>
	<div id="nav-cliente" class="collapse">
		<ul class="hello-nav-list">
			<li><a href="{{ url(config('hello.url') . '/cliente') }}">Listar clientes</a></li>
			<li><a href="{{ url(config('hello.url') . '/cliente/create') }}">Adicionar cliente</a></li>
		</ul>
	</div>
</div>

<!-- Responsáveis -->
<div class="item">
	<div class="hello-nav-menu-item-image"><img src="{{ asset('h-assets/svg/hello-svg/001-rgb.svg') }}" alt="Responsáveis"></div>
	<a class="hello-nav-menu-item" data-toggle="collapse" data-parent="#hello-nav-accordion" href="#nav-responsaveis">Responsáveis</a>
	<div id="nav-responsaveis" class="collapse">
		<ul class="hello-nav-list">
			<li><a href="{{ url(config('hello.url') . '/responsavel') }}">Listar responsáveis</a></li>
			<li><a href="{{ url(config('hello.url') . '/responsavel/create') }}">Adicionar responsável</a></li>
		</ul>
	</div>
</div>

<!-- Projetos -->
<div class="item">
	<div class="hello-nav-menu-item-image"><img src="{{ asset('h-assets/svg/hello-svg/001-rgb.svg') }}" alt="Projetos"></div>
	<a class="hello-nav-menu-item" data-toggle="collapse" data-parent="#hello-nav-accordion" href="#nav-projetos">Projetos</a>
	<div id="nav-projetos" class="collapse">
		<ul class="hello-nav-list">
			<li><a href="{{ url(config('hello.url') . '/projeto') }}">Listar projetos</a></li>
			<li><a href="{{ url(config('hello.url') . '/projeto/create') }}">Adicionar projeto</a></li>
			<li><a href="{{ url(config('hello.url') . '/projeto/relatorio/visao-geral') }}">Visão geral</a></li>
		</ul>
	</div>
</div>

<!-- Ambientes -->
<div class="item">
	<div class="hello-nav-menu-item-image"><img src="{{ asset('h-assets/svg/hello-svg/001-rgb.svg') }}" alt="Ambientes"></div>
	<a class="hello-nav-menu-item" data-toggle="collapse" data-parent="#hello-nav-accordion" href="#nav-ambientes">Ambientes</a>
	<div id="nav-ambientes" class="collapse">
		<ul class="hello-nav-list">
			<li><a href="{{ url(config('hello.url') . '/ambiente') }}">Listar ambiente</a></li>
			<li><a href="{{ url(config('hello.url') . '/ambiente/create') }}">Adicionar ambiente</a></li>
		</ul>
	</div>
</div>