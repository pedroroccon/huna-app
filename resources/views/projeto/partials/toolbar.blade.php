<div class="hello-table-toolbar">
	<div class="d-flex">
		<div class="hello-form w-100 hello-table-toolbar-search">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text"><i class="fas fa-search"></i></span>
				</div>
				{!! Form::text('s', null, ['class' => 'form-control form-control-sm mr-4', 'placeholder' => 'Pesquisar...', 'id' => 'quick-search']) !!}
			</div>
		</div>
		<a data-toggle="modal" data-target="#m-pesquisar" href="#" class="btn btn-sm btn-link"><i class="fas fa-filter fa-sm mr-2"></i> Filtrar</a>
		{!! request()->query() ? '<a href="' . url(request()->url()) . '" class="btn btn-sm btn-link text-danger"><i class="far fa-times-circle mr-2"></i>Cancelar filtro</a>' : null !!}
	</div>
</div>