@extends('layouts.app')
@section('content')
<div class="container">
	<h1 class="mb-4">Lista de Materias</h1>  
		<div class="list-group">
			@foreach ($materias as $materia)                
					<h5 class="mb-1">{{ $materia->nombre }}</h5>                    	
					<h5 class="mb-1">{{ $materia->curso }}</h5>                    	
					<h5 class="mb-1">{{ $materia->tema }}</h5>                    	

			@endforeach        
        </div>

		<a href="{{ route('home') }}" class="btn btn-secondary">
    Atras
</a>
</div>



@endsection
