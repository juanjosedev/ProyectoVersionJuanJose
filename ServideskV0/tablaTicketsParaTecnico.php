
<!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="css/estiloTablaFiltradaTecnico.css">

<!------ Include the above in your HEAD tag ---------->
<title>Service Desk</title>
</head>




<body>


<div class="container">
	<div class="row">

		<section class="content">
			<h1>Table Filter</h1>
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-success btn-filter" data-target="Activo">Activo</button>
                                <button type="button" class="btn btn-danger btn-filter" data-target="Cerrado">Cerrado</button>
								<button type="button" class="btn btn-default btn-filter" data-target="all">Todos</button>
							</div>
						</div>
						<div class="table-container">
							<table class="table table-filter">
								<tbody>
									<tr data-status="Activo">
   
										<td>

										</td>
										<td>

                                        </td>
                                        	<td>

                                        </td>
                                        
										<td>
											<div class="media">

												<div class="media-body">
													<span class="media-meta pull-right">Febrero 13, 2016</span>
													<h4 class="title">
														Lorem Impsum
														<span class="pull-right pagado">(Pagado)</span>
													</h4>
													<p class="summary">Ut enim ad minim veniam, quis nostrud exercitation...</p>
												</div>
											</div>
										</td>
									</tr>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
		</section>

	</div>
</div>
<script src="js/filtracionTablaTecnico.js"></script>
</body>
</html>
