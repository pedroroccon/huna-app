@component('hive::components.navbar-pills')
	@slot('navs')
		<ul class="navbar-nav mr-auto">
			<li class="mr-2"><a class="nav-link" href="{{ url($projeto->path()) }}">Geral</a></li>
            <li class="mr-2 dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">Ambientes</a>
                <div class="dropdown-menu">
                    <h6 class="dropdown-header">Ações do ambiente</h6>
                    <a class="dropdown-item" href="{{ url($projeto->path() . '/ambiente') }}"><i class="far fa-edit fa-fw mr-2"></i> Listar todos</a>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#m-ambiente"><i class="far fa-edit fa-fw mr-2"></i> Adicionar novo</a>
                </div>
            </li>
        </ul>
	@endslot
@endcomponent