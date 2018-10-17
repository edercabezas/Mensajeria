@extends('layouts.app')

@section('content')


			
		<div class="col-md-12" id="contenedor_principal" >
						<br>
					<br><br><center><div id="titulo"><strong> <h2>Listado de producto disponibles</h2></strong></div></center><br>
						<hr>
					@foreach($productos as $produ)

						<div class="col-md-2" >
							<hr>
							<div class="panel panel-default" id="contenedor">

								
								<div class="panel-body" id="contenedorcito">
									<div class="panel-header" id="nombre_producto">
									<center><h3>{{  $produ->name }}</h3></center>
								</div>
									<img src="/users/{{$produ->image}}" 
									class="img-fluid" alt="Responsive image">

									<div class="panel-footer">
									
									<div>{{ $produ->email }}</div>
								</div>

								</div>
								
							</div>

										
						</div>

					@endforeach



		</div>
	<center><div>	{{ $productos->links() }}</div></center>

@endsection





<style type="text/css">

	#contenedorcito,#titulo{
		-webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
		-moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
		box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
	}
		
		img{
			width: 100%;
			height: 200px;
		}
		#contenedor_principal{
			/*background: linear-gradient( to left, rgba(255, 87, 34,0) 0%, rgba(255, 87, 34,0.3) 10%, rgba(255, 87, 34,0.88) 50%, rgba(255, 87, 34,0.3) 90%, rgba(255, 87, 34,0) 100%);*/

			background: white;
			
		}
		#button{
			width: 30%;
			height: 8%;
			border-radius: 50px;
			
		}
		

		#nombre_producto{
			background: orange;
			 font-family: Courier, monospace;
			 	 width: 100%;
			 
		}
		#contenedor{
			border-radius:10PX; 
		}
		.carrito{
			background: green;
		}
</style>
