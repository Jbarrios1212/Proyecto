<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Prueba</title>
		
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

		
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
		<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
		<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
	</head>
	<body>
	@include('header')
		<div class="container">
			<h4>LIST SERVICE WEB</h4>
			<div class="row">
				<div class="col-xl-12">
					<div class="table-responsive">
						<table class="table table-striped table-dark "  id="example">
							<thead>
								<tr>
									<th scope="col">id</th>
									<th scope="col">AlbumId</th>
									<th scope="col">title</th>
									<th scope="col">Picture</th>
								</tr>
							</thead>
							<tbody>
								@foreach($apiService as $res)
								<tr scope="row">
									<td>{{$res->id}}</td>
									<td>{{$res->albumId}}</td>
									<td >{{$res->title}}</td>
									<td><img src="{{$res->thumbnailUrl}}" style="width:50px;" alt="thumbnailUrl"></td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<script>
			$(document).ready(function() {
				$('#example').DataTable();
			});
		</script>
	</body>
</html>