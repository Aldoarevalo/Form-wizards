<?php
	require 'class/function/curl_api.php';
	require 'class/function/function.php';
	require 'class/session/session_system.php';

	$headerTitle	= 'Dashboard';
	$headerSubTitle = '';
	$solicitudJSON	= get_curl('operacion/pendiente/'.$usu_02);
	$solicitudDesktop	= get_curl('operacion/obtenerBannersActivos/1');
	$solicitudMobile	= get_curl('operacion/obtenerBannersActivos/2');
?>
<!DOCTYPE html>
<html lang="es">
	<head>
<?php
    	include '../include/header.php';
?>

		<style>
			.header .navbar-nav > li {
				position: initial;
			}
		</style>
		   <link href="http://cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json" />
	</head>

	<body>
		<!-- begin #page-loader -->
		<div id="page-loader" class="fade show">
			<span class="spinner"></span>
		</div>
		<!-- end #page-loader -->
		
		<!-- begin #page-container -->
		<div id="page-container" class="fade page-sidebar-minified page-sidebar-fixed page-header-fixed">
<?php
    	include 'menus.php';
?>

			<!-- BEGIN #slider -->
			<div id="sliderDesktop" class="section-container p-0">
				<!-- BEGIN carousel -->
				<div id="main-carousel" class="carousel slide" data-ride="carousel">
					<!-- BEGIN carousel-inner -->
					<div class="carousel-inner">
						<?php
						if($solicitudDesktop!=null || $solicitudDesktop!=""){
							$contador=0;
							foreach ($solicitudDesktop['data'] as $key => $value) {
							  if($contador==0)
							  {
								  $contador=1;
								?>
								<!-- BEGIN item -->
								<div class="carousel-item active" data-paroller="true" data-paroller-factor="0.3" data-paroller-factor-sm="0.01" data-paroller-factor-xs="0.01">
									<div class="container" style="width:100%;">
										<img src="<?php echo $value['imagen'] ?>" class="product-img right bottom fadeInRight animated" alt="" />
									</div>
								</div> 
								<?php 
							  }
							  else
							  {
								?>
								<div class="carousel-item" data-paroller="true" data-paroller-factor="0.3" data-paroller-factor-sm="0.01" data-paroller-factor-xs="0.01">
									<div class="container" style="width:100%;">
										<img src="<?php echo $value['imagen'] ?>" class="product-img right bottom fadeInRight animated" alt="" />
									</div>
								</div>
								<?php
							  }
						   }
						}
						?>
						<!-- END item -->
						<!-- BEGIN item -->
						<!-- <div class="carousel-item" data-paroller="true" data-paroller-factor="-0.3" data-paroller-factor-sm="0.01" data-paroller-factor-xs="0.01">
							<div class="container" style="width:100%;">
								<img src="../assets/img/slider/banner2.png" class="product-img left bottom fadeInLeft animated" alt="" />
							</div>
						</div> -->
						<!-- END item -->
						<!-- BEGIN item -->
						<!-- <div class="carousel-item" data-paroller="true" data-paroller-factor="-0.3" data-paroller-factor-sm="0.01" data-paroller-factor-xs="0.01">
							<div class="container" style="width:100%;">
								<img src="../assets/img/slider/banner3.png" class="product-img left bottom fadeInLeft animated" alt="" />
							</div>
						</div> -->
						<!-- END item -->
					</div>
					<!-- END carousel-inner -->
					<a class="carousel-control-prev" href="#main-carousel" data-slide="prev"> 
					<i class="fa fa-angle-left"></i> 
					</a>
					<a class="carousel-control-next" href="#main-carousel" data-slide="next"> 
					<i class="fa fa-angle-right"></i> 
					</a>
				</div>
				<!-- END carousel -->
			</div>
			<!-- END #slider -->

			<!-- BEGIN #slider -->
			<div id="sliderMovile" class="section-container p-0">
				<!-- BEGIN carousel -->
				<div id="main-carousel" class="carousel slide" data-ride="carousel">
					<!-- BEGIN carousel-inner -->
					<div class="carousel-inner" style="min-height:15rem !important;">
						
						<?php
						if($solicitudMobile!=null || $solicitudMobile!=""){
							$contador=0;
							foreach ($solicitudMobile['data'] as $key => $value) {
							  if($contador==0)
							  {
								  $contador=1;
								?>
								<!-- BEGIN item -->
								<div class="carousel-item active" data-paroller="true" data-paroller-factor="0.3" data-paroller-factor-sm="0.01" data-paroller-factor-xs="0.01" style="min-height:15rem !important;">
									<div class="container" style="width:100%;top:2.5rem;">
										<img src="<?php echo $value['imagen'] ?>" class="product-img right bottom fadeInRight animated" alt="" />
									</div>
								</div> 
								<?php 
							  }
							  else
							  {
								?>
								<div class="carousel-item" data-paroller="true" data-paroller-factor="-0.3" data-paroller-factor-sm="0.01" data-paroller-factor-xs="0.01" style="min-height:15rem !important;">
									<div class="container" style="width:100%;top:2.5rem;">
										<img src="<?php echo $value['imagen'] ?>" class="product-img right bottom fadeInRight animated" alt="" />
									</div>
								</div>
								<?php
							  }
						   }
						}
						?>
						<!-- BEGIN item -->
						<!-- <div class="carousel-item active" data-paroller="true" data-paroller-factor="0.3" data-paroller-factor-sm="0.01" data-paroller-factor-xs="0.01" style="min-height:15rem !important;">
							<div class="container" style="width:100%;top:2.5rem;">
								<img src="../assets/img/slider/banner1_m.png" class="product-img right bottom fadeInRight animated" alt="" />
							</div>
						</div> -->
						<!-- END item -->
						<!-- BEGIN item -->
						<!-- <div class="carousel-item" data-paroller="true" data-paroller-factor="-0.3" data-paroller-factor-sm="0.01" data-paroller-factor-xs="0.01" style="min-height:15rem !important;">
							<div class="container" style="width:100%;top:2.5rem;">
								<img src="../assets/img/slider/banner2_m.png" class="product-img right bottom fadeInRight animated" alt="" />
							</div>
						</div> -->
						<!-- END item -->
						<!-- BEGIN item -->
						<!--<div class="carousel-item" data-paroller="true" data-paroller-factor="-0.3" data-paroller-factor-sm="0.01" data-paroller-factor-xs="0.01" style="min-height:15rem !important;">
							<div class="container" style="width:100%;top:2.5rem;">
								<img src="../assets/img/slider/banner3_m.png" class="product-img right bottom fadeInRight animated" alt="" />
							</div>
						</div> -->
						<!-- END item -->
					</div>
					<!-- END carousel-inner -->
				</div>
				<!-- END carousel -->
			</div>
			<!-- END #slider -->

			<!-- begin #content -->
			<div id="content" class="content">
				<!-- begin row -->
				<div class="row row-space-10 m-b-20" style="font-size:1.5rem; color:#fff;">
					
					<?php
						if ($usu_20 > 0) {
					?>
							<!-- begin col-3 -->
							<div class="col-xl-1 col-sm-6" style="margin-bottom:5px;">
							</div>
							<!-- end col-3 -->

							<!-- begin col-3 -->
							<div class="col-xl-3 col-sm-6" style="margin-bottom:5px;">
								<!-- begin card -->
								<div class="card text-center border-0">
									<div class="card-header f-w-600" style="background-color:#5CC6D0;">
										Linea disponible
									</div>
									<div class="card-footer f-w-600" style="background-color:#5922C1;">
									<?php if($usu_15==""){$usu_15=0;} ?>
									<?php echo number_format($usu_15, 0, ',', '.'); ?> Gs.
									</div>
								</div>
								<!-- end card -->
							</div>
							<!-- end col-3 -->
							
							<!-- begin col-3 -->
							<div class="col-xl-3 col-sm-6" style="margin-bottom:5px;">
								<!-- begin card -->
								<div class="card text-center border-0">
									<div class="card-header f-w-600"  style="background-color:#5CC6D0;">
										<?php
											if (isset($usu_44)) {
												echo ucwords(strtolower($usu_44));
											} else {
												echo 'SOLICITUD EN PROCESO';
											}
										?>
									</div>
									<div class="card-footer f-w-600" style="background-color:#5922C1;">
										<?php
											if (isset($usu_42)) {
												echo number_format($usu_21, 0, ',', '.').' Gs.';
											} else {
												echo '0 Gs.';
											}
										?>
									</div>
								</div>
								<!-- end card -->
							</div>
							<!-- end col-3 -->

							<!-- begin col-3 -->
							<div class="col-xl-3 col-sm-6" style="margin-bottom:5px;">
								<!-- begin card -->
								<div class="card text-center border-0">
									<div class="card-header f-w-600"  style="background-color:#5CC6D0;">
										Categor&iacute;a
									</div>
									<div class="card-footer f-w-600" style="background-color:#5922C1;">
										<?php
											if (isset($usu_42)) {
												echo ucwords(strtolower($usu_42));
											} else {
												echo 'S/N';
											}
										?>
									</div>
								</div>
								<!-- end card -->
							</div>
							<!-- end col-3 -->

							<!-- begin col-3 -->
							<div class="col-xl-3 col-sm-6" style="margin-bottom:5px;">
								<!-- begin card -->
								<div class="card text-center border-0">
									<div class="card-header f-w-600"  style="background-color:#5CC6D0;">
										Puntos Disponibles
									</div>
									<div class="card-footer f-w-600" style="background-color:#5922C1;">
										<?php
											echo $_SESSION['total_puntos_disponible_usuario'].' puntos';
										?>
									</div>
								</div>
								<!-- end card -->
							</div>
							<!-- end col-3 -->
					<?php
						} else {
					?>
							<!-- begin col-3 -->
							<div class="col-xl-1 col-sm-6" style="margin-bottom:5px;">
							</div>
							<!-- end col-3 -->
							
							<!-- begin col-3 -->
							<div class="col-xl-3 col-sm-6" style="margin-bottom:5px;">
								<!-- begin card -->
								<div class="card text-center border-0">
									<div class="card-header f-w-600" style="background-color:#5CC6D0;">
										Linea disponible
									</div>
									<div class="card-footer f-w-600" style="background-color:#5922C1;">
									<?php if($usu_15==""){$usu_15=0;} ?>
									<?php echo number_format($usu_15, 0, ',', '.'); ?> Gs.
									</div>
								</div>
								<!-- end card -->
							</div>
							<!-- end col-3 -->
							
							<!-- begin col-3 -->
							<div class="col-xl-4 col-sm-6" style="margin-bottom:5px;">
								<!-- begin card -->
								<div class="card text-center border-0">
									<div class="card-header f-w-600"  style="background-color:#5CC6D0;">
										Categor&iacute;a
									</div>
									<div class="card-footer f-w-600" style="background-color:#5922C1;">
										<?php
											if (isset($usu_42)) {
												echo ucwords(strtolower($usu_42));
											} else {
												echo 'S/N';
											}
										?>
									</div>
								</div>
								<!-- end card -->
							</div>
							<!-- end col-3 -->

							<!-- begin col-3 -->
							<div class="col-xl-3 col-sm-6" style="margin-bottom:5px;">
								<!-- begin card -->
								<div class="card text-center border-0">
									<div class="card-header f-w-600"  style="background-color:#5CC6D0;">
										Puntos Disponibles
									</div>
									<div class="card-footer f-w-600" style="background-color:#5922C1;">
										<?php
											echo $_SESSION['total_puntos_disponible_usuario'].' puntos';
										?>
									</div>
								</div>
								<!-- end card -->
							</div>
							<!-- end col-3 -->

					<?php
						}
					?>

					
				</div>
				<!-- end row -->
				
<?php
	if ($solicitudJSON['code'] === 200) {
		$indexRow = 0;

		foreach ($solicitudJSON['data'] as $key => $value) {
			$indexRow = $indexRow + 1;
?>
				<!-- begin row -->
				<div class="row m-b-20">
					<!-- begin col-8 -->
					<div class="col-xl-8 col-lg-6">
						<!-- begin panel -->
						<div class="panel panel-inverse" data-sortable-id="index-1<?php echo $indexRow; ?>">
							<div class="panel-heading">
								<h4 class="panel-title">Extracto de cuotas pendientes </h4>
							</div>
							<div class="panel-heading-btn">
								<div class="table-responsive">
									<table id="data-table-scroller" class="table table-striped table-bordered table-td-valign-middle table-operacion" cellspacing="0" width="100%;">
										<thead id="operacion_<?php echo $indexRow; ?>" class="<?php echo $value['operacion_numero']; ?>">
											<tr>
												<th class="hidden-sm text-center">Cuota Nro</th>
												<th class="hidden-sm text-center">Estado</th>
												<th class="hidden-sm text-center">Vencimiento</th>
												<th class="hidden-sm text-center">DDM</th>
												<th class="hidden-sm text-center">Importe</th>
												<th class="hidden-sm text-center">Pagado</th>
												<th class="hidden-sm text-center">Pendiente</th>
											</tr>
										</thead>
										<tbody>
<?php
			foreach ($value['operacion_detalle'] as $key => $value2) {
?>
											<tr>
												<td class="text-nowrap text-inverse text-center"> <?php echo $value2['operacion_cuota_numero']; ?> </td>
												<td class="text-nowrap text-inverse text-center"> <?php echo $value2['operacion_cuota_estado']; ?> </td>
												<td class="f-w-600 text-muted text-center"> <?php echo $value2['operacion_cuota_vencimiento_2']; ?></td>
												<td class="f-w-600 text-muted text-center"> <?php echo $value2['operacion_cuota_atraso']; ?></td>
												<td class="text-blue f-w-600 text-right"> <?php echo number_format($value2['operacion_cuota_importe'], 0, ',', '.'); ?></td>
												<td class="text-blue f-w-600 text-right"> <?php echo number_format($value2['operacion_cuota_pagado'], 0, ',', '.'); ?></td>
												<td class="text-blue f-w-600 text-right"> <?php echo number_format($value2['operacion_cuota_pendiente'], 0, ',', '.'); ?></td>
											</tr>
<?php
			}
?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<!-- end panel -->
					</div>
					<!-- end col-8 -->

					<!-- begin col-4 -->
					<div class="col-xl-4 col-lg-6">
						<div class="row m-b-20">
							<div class="col-xl-12 col-lg-12">
								<!-- begin panel -->
								<div class="panel panel-inverse" data-sortable-id="index-2<?php echo $indexRow; ?>">
									<div class="panel-heading">
										<h4 class="panel-title">Pr&oacute;ximos vencimientos!</h4>
									</div>
									<div id="schedule-calendar_<?php echo $indexRow; ?>" class="bootstrap-calendar"></div>
								</div>
								<!-- end panel -->
							</div>
						</div>
					</div>
					<!-- end col-4 -->
				</div>
				<!-- end row -->
<?php
		}
	} else {
			$indexRow = 0;
?>
				<!-- begin row -->
				<div class="row m-b-20">
					<img style="width:100%; height:100%; float:left;" src="../assets/img/dashboard/banner1.png" id="openDesktop" />
					
				</div>
				<!-- end row -->
<?php
	}
?>

			</div>
			<!-- end #content -->

			<!-- begin #floating-action-button -->
			<a href="https://web.whatsapp.com/send?phone=<?php echo $usu_24; ?>&text=<?php echo $usu_25; ?>" target="_blank" class="float" style="background-color:#1ebea5 !important; color:#ffffff !important;" title="Consulta whatsapp">
				<i class="fab fa-whatsapp fa-2x custom-float"></i>
            </a>
<?php
	if ($usu_20 == 0) {
?>
			<a href="../public/solicitud.php" class="float2" style="background-color:#6820c6 !important; color:#ffffff !important;" title="Nueva Solicitud">
				<i class="fa fa-plus fa-2x custom-float"></i>
            </a>
<?php
	}
?>
			<!-- end #floating-action-button -->

<?php
    	include '../include/development.php';
?>

		</div>
		<!-- end page container -->
		
<?php
    	include '../include/footer.php';
?>

		<script src="../js/api.js"></script>

		<script>
			var codCliente	= <?php echo $usu_02; ?>;
			var cantRows	= <?php echo $indexRow; ?> + 1;
			var silder01	= document.getElementById('sliderDesktop');
			var silder02	= document.getElementById('sliderMovile');
			var silder03	= document.getElementById('openDesktop');
			var silder04	= document.getElementById('openMovile');

			if (localStorage.getItem('opePendienteJSON') === 'null' || localStorage.getItem('opePendienteJSON') === null ){
				localStorage.removeItem('opePendienteJSON');
				localStorage.setItem('opePendienteJSON', JSON.stringify(<?php echo json_encode($solicitudJSON); ?>));
			}
			
			if (screen.width > 600) {
				silder01.style.display	= '';
				silder02.style.display	= 'none';
				silder03.style.display	= '';
				silder04.style.display	= 'none';
			} else {
				silder01.style.display	= 'none';
				silder02.style.display	= '';
				silder03.style.display	= 'none';
				silder04.style.display	= '';
			}
		</script>
		
		<script src="../js/dashboard.js"></script>

	</body>
</html>