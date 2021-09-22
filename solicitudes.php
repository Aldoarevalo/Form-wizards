

<!DOCTYPE html>
<html lang="es">
<link href="assets/img/logo/favicon.png" type="image/vnd.microsoft.icon" rel="shortcut icon" />
<title href="assets/img/logo/favicon.png">ZONAMIGOS | Comunidad de Emprendedores</title>

<head>
    <link href="http://cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json" />
    <link href="assets/plugins/toastr/build/toastr.min.css" rel="stylesheet">
    <?php
    include 'header.php';
    ?>

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

        <!-- begin #content -->
        <div id="content" class="content" style="min-height: 100vh; background: url(../assets/img/cover/cover-scrum-board.png) no-repeat fixed; background-size: 360px; background-position: right bottom;">
            <!-- begin breadcrumb -->
            <ol class="breadcrumb float-xl-right">
                <li class="breadcrumb-item"><a href="../public/dashboard_v1.php">Home</a></li>
                <li class="breadcrumb-item active"></li>
            </ol>
            <!-- end breadcrumb -->

            <!-- begin page-header -->
            <h1 class="page-header"> <small></small></h1>
            <!-- end page-header -->

            <!-- begin row -->

            <div class="row m-b-20">

                <form action="../class/crud/solicitud.php" method="POST" id="form-wizard" name="form-wizard" enctype="multipart/form-data" class="form-control-with-bg" style="width:100%;">
                    <!-- begin wizard -->

                    <div id="wizard">
                        <!-- begin wizard-step -->
                        <ul>
                            <li>
                                <a href="#step-1">
                                    <span class="number">1</span>
                                    <span class="info"> Solicitud de Crédito </span>
                                </a>
                            </li>

                            <li>
                                <a href="#step-2">
                                    <span class="number">2</span>
                                    <span class="info"> Datos Personales </span>
                                </a>
                            </li>

                            <li>
                                <a href="#step-3">
                                    <span class="number">3</span>
                                    <span class="info"> Datos Adjuntos </span>
                                </a>
                            </li>

                            <li>
                                <a href="#step-4">
                                    <span class="number">4</span>
                                    <span class="info"> Datos de la Solicitud </span>
                                </a>
                            </li>

                            <li>
                                <a href="#step-5">
                                    <span class="number">5</span>
                                    <span class="info"> Completado </span>
                                </a>
                            </li>
                            <li>
                                <a href="#step-6">
                                    <span class="number">5</span>
                                    <span class="info"> Deuda </span>
                                </a>
                            </li>

                        </ul>

                        <!-- end wizard-step -->

                        <!-- begin wizard-content -->
                        <div>
                            <!-- begin step-1 -->
                            <div id="step-1">
                                <!-- begin fieldset -->
                                <fieldset>
                                    <!-- begin row -->
                                    <div class="row">
                                        <!-- begin col-8 -->
                                        <div class="" style="width:100%;">
                                            <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Información de tu solicitud de cr&eacute;dito</legend>

                                            <!-- begin form-group -->


                                            <div class="form-group row">

                                                <div class="col-sm-4">
                                                    <input type="hidden" class="form-control form-control-user" name="cedula" id="numerodecedula" placeholder="N° de Cédula">
                                                </div>

                                                <div class="col-sm-8">
                                                    <input style="position:absolute;top:35px;left:20px;" class="monto" onchange="sumar();" type="text" class="form-control form-control-user" name="nombrecompleto" id="nombrecompleto" placeholder="Nombre Completo">
                                                </div>

                                            </div>

                                            <!-- <div class="form-group mb-sm-0">
                 <input type="email" class="form-control form-control-user" name="email" id="email" placeholder="Email (opcional)">
               </div> -->












                                            <div class="form-group row m-b-10">
                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text">₲</span></div>
                                                    <input onchange="sumar();" type="text" class="form-control monto" placeholder="Monto Solicitado" id="var_101" name="var_101"  />
                                                </div>

                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calculator"></i></span></div>
                                                    <input type="number" onchange="sumar();" class="form-control monto" placeholder="Cantidad de cuotas" id="var_102" name="var_102"  />
                                                </div>
                                                <!--
                <div class="input-group input-group-lg m-b-10 col-lg-4">
                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-percent"></i></span></div>
                        <input type="text" class="form-control" placeholder="Tasa referencial, 24, 27, etc" id="var_105" name="var_105" data-parsley-group="step-1" data-parsley-required="true" onblur="calcpago();"/>
                </div>
                                                    -->
                                                <form class="contacto" name='contacto' id="frmcontacto" method="get" action="">

                                                </form>
                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-money-bill-alt"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Cuota Aprox." id="var_104" name="var_104"  />


                                                </div>

                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
                                                    <input onchange="diaSemana();" type="text" class="form-control" placeholder="Primer Vencimiento" id="var_103" name="var_103"  />
                                                </div>
                                                <script>
                                                    function diaSemana() {
                                                        var x = document.getElementById("var_103");
                                                        let date = new Date(x.value.replace(/-+/g, '/'));

                                                        let options = {
                                                            // weekday: 'long',
                                                            //  year: 'numeric',
                                                            // month: 'long',
                                                            day: 'numeric'
                                                            //altField: "#alternate",
                                                            // altFormat: "DD, d MM, yy"
                                                        };
                                                        console.log(date.toLocaleDateString('es-MX', options));
                                                        $("#alternate").val(date.toLocaleDateString('es-MX', options));

                                                    }
                                                </script>
                                                <input style="position:absolute;top:35px;left:20px;" type="text" id="alternate" size="30" />

                                          
                                              
                                                <script>
                                                    function sumar() {

                                                        var vr1 = document.getElementById('var_101').value;

                                                        var vr2 = document.getElementById('var_102').value;
                                                        var vr3 = document.getElementById('nombrecompleto').value;
                                                        var p = (parseFloat(vr1) / parseFloat(vr2) * parseFloat(vr3));
                                                        // document.getElementById('promedio').innerHTML = p;
                                                        $("#var_104").val(p);
                                                    }
                                                </script>
                                                <form name="update" id="frmUpdate" action="" method="get">

                                                    <div class="input-group input-group-lg m-b-15 col-lg-12">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-money-bill-alt"></i></span></div>
                                                        <select style="margin-button: 125px;" onchange="this.form.submit()" class="form-control" placeholder="Banco." id="nombre" name="nombre" data-parsley-group="step-1" data-parsley-required="false" readonly value="<?php echo isset($_GET['nombre']) ? $_GET['nombre'] : '' ?>">
                                                            <option value="" <?php echo ''; ?>>Banco</option>

                                                         
                                                        </select>
                                                    </div>


                                                </form>
                                               

                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-money-bill-alt"></i></span></div>
                                                    <select class="form-control" placeholder="Tipo de Cuenta" id="var_001" name="var_001"  />
                                                    <option value="" <?php echo ''; ?>>Tipo de Cuenta</option>
                                                    <option> Cuenta Corriente</option>
                                                    <option> Caja de ahorro</option>
                                                    </select>
                                                </div>

                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text">₲</span></div>
                                                    <input type="text" class="form-control" placeholder="Número de Cuenta" id="var_000" name="var_000" />
                                                </div>

                                                <div class="input-group input-group-lg m-b-10 col-lg-7">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-money-bill-alt"></i></span></div>
                                                    <select class="form-control" placeholder="¿Sos colaborador ?." id="colab" name="colab" />
                                                    <option value="" <?php echo ''; ?>>Sos Colaborador de una de nuestrar empresas aliadas</option>
                                                    <option value="colab"> colab</option>
                                                    
             
                                                    </select>

                                                </div>




                                                <script src="../js/api.js"></script>

                                              
                                                <div class="input-group input-group-lg m-b-10 col-lg-12">
                                                    <textarea class="form-control" rows="6" readonly="readonly">

                                    La información resultado de esta simulación es solamente referencial y no implica compromiso o vínculo jurídico, legal o comercial para con ZONAMIGOS.
                                    La aprobación del crédito está sujeta a la verificación y cumplimiento de los requisitos y documentos que se soliciten.
                                    Los valores de las cuotas son aproximadas (no incluyen impuestos, seguro de vida y gastos administrativos).
                                    Para obtener los valores finales de las cuotas y demás gastos, consulta con un ejecutivo de cuenta de ZONAMIGOS.
                                                        </textarea>
                                                </div>
                                            </div>


                                            <!-- end form-group -->
                                        </div>
                                        <!-- end col-8 -->
                                    </div>
                                    <!-- end row -->
                                </fieldset>
                                <!-- end fieldset -->
                            </div>
                            <!-- end step-1 -->

                            <!-- begin step-2 -->
                            <div id="step-2">
                                <!-- begin fieldset -->
                                <fieldset>
                                    <!-- begin row -->
                                    <div class="row">
                                        <!-- begin col-8 -->
                                        <div class="" style="width:100%;">
                                            <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Información de tus datos personales</legend>

                                            <!-- begin form-group -->
                                            <div class="form-group row m-b-10">
                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Nombres" id="var_201" name="var_201" />
                                                </div>

                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Apellidos" id="var_202" name="var_202" />
                                                </div>

                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Domicilio Particular" id="var_2003" name="var_2003" />
                                                </div>
                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Profesion" id="var_2006" name="var_2006"  />
                                                </div>
                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Referencia Personal" id="var_2004" name="var_2004" />
                                                </div>

                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-mobile-alt"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Referencia Telefono" id="var_2005" name="var_2005" />

                                                </div>

                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Referencia Personal 2" id="var_2007" name="var_2007"   />
                                                </div>
                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-mobile-alt"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Referencia Telefono 2" id="var_2008" name="var_2008"  />

                                                </div>
                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-address-card"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Nro Documento" id="var_204" name="var_204" value=""  />
                                                </div>
                                            </div>
                                            <!-- end form-group -->

                                            <hr>

                                            <!-- begin form-group -->
                                            <div class="form-group row m-b-10">

                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Fecha de Emisión de Cédula" id="var_2009" name="var_2009"  />
                                                </div>
                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
                                                    <input type="date" class="form-control" placeholder="Fecha Nacimiento" id="var_207" name="var_207" value="" />
                                                </div>

                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope"></i></span></div>
                                                    <input type="email" class="form-control" placeholder="Correo Electrónico" id="var_210" name="var_210" value=""  />
                                                </div>
                                            </div>
                                            <!-- end form-group -->

                                            <hr>

                                            <!-- begin form-group -->
                                            <div class="form-group row m-b-10">
                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Nro Linea Baja" id="var_208" name="var_208" value=""/>
                                                </div>

                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-mobile-alt"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Nro Celular" id="var_209" name="var_209" value="" />
                                                </div>
                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-money-bill-alt"></i></span></div>
                                                    <select class="form-control" placeholder="Empresa Laboral" id="var_2010" name="var_2010"  />
                                                    <option value="" <?php echo ''; ?>>Empresa Laboral</option>
                                                    <option> Público</option>
                                                    <option> Privado</option>
                                                    </select>
                                                </div>
                                                <div class="input-group input-group-lg m-b-10 col-lg-4">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-mobile-alt"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Teléfono Laboral" id="var_211" name="var_211" value="" />
                                                </div>
                                            </div>
                                            <!-- end form-group -->
                                        </div>
                                        <!-- end row -->
                                </fieldset>
                                <!-- end fieldset -->
                            </div>
                            <!-- end step-2 -->

                            <!-- begin step-3 -->
                            <div id="step-3">
                                <!-- begin fieldset -->
                                <fieldset>
                                    <!-- begin row -->
                                    <div class="row">
                                        <!-- begin col-8 -->
                                        <div class="" style="width:100%;">
                                            <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Adjunto de documentos. </legend>

                                            <!-- begin form-group -->
                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> DULA LADO FRONTAL <span class="text-danger"></span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-cloud-upload-alt"></i></span></div>
                                                    <input type="file" class="form-control" placeholder="Cédula lado frontal" id="var_301" name="var_301"  />
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> DULA LADO TRASERO <span class="text-danger"></span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-cloud-upload-alt"></i></span></div>
                                                    <input type="file" class="form-control" placeholder="Cédula lado trasero" id="var_302" name="var_302"/>
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label">Liquidacion de Salario 1 <span class="text-danger"></span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-cloud-upload-alt"></i></span></div>
                                                    <input type="file" class="form-control" placeholder="Liquidación de Salario" id="var_303" name="var_303" />
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Liquidacion de Salario 2 <span class="text-danger"></span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-cloud-upload-alt"></i></span></div>
                                                    <input type="file" class="form-control" placeholder="Liquidación Salario 2" id="var_304" name="var_304"/>
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Liquidacion de Salario 3 <span class="text-danger"></span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-cloud-upload-alt"></i></span></div>
                                                    <input type="file" class="form-control" placeholder="Liquidación Salario 3" id="var_305" name="var_305"  />
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Extracto Bancario Ultimo <span class="text-danger"></span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-cloud-upload-alt"></i></span></div>
                                                    <input type="file" class="form-control" placeholder="Extracto Bancario Último" id="var_306" name="var_306" />
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Certificado de Trabajo Ultimo mes <span class="text-danger"></span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-cloud-upload-alt"></i></span></div>
                                                    <input type="file" class="form-control" placeholder="Certificado de Trabajo Último mes" id="var_307" name="var_307" />
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label">Factura de Servicio <span class="text-danger"></span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-cloud-upload-alt"></i></span></div>
                                                    <input type="file" class="form-control" placeholder="Factura de Servicio" id="var_308" name="var_308"  />
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label">Clusula de Trabajo Vigente (Funcionario Publico o Contratado) <span class="text-danger"></span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-cloud-upload-alt"></i></span></div>
                                                    <input type="file" class="form-control" placeholder="Clusula de Trabajo Vigente (Funcionario Publico o Contratado)" id="var_309" name="var_309"  />
                                                </div>
                                            </div>



                                            <!-- end form-group -->
                                        </div>
                                        <!-- end col-8 -->
                                    </div>
                                    <!-- end row -->
                                </fieldset>
                                <!-- end fieldset -->
                            </div>
                            <!-- end step-3 -->

                            <!-- begin step-4 -->
                            <div id="step-4">
                                <!-- begin fieldset -->
                                <fieldset>
                                    <!-- begin row -->
                                    <div class="row">
                                        <!-- begin col-8 -->
                                        <div class="" style="width:100%;">
                                            <legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Verifica todos los datos ingresados antes de generar la solicitud. </legend>

                                            <!-- begin form-group -->
                                            <div class="form-group">
                                                <input id="workCodigo" name="workCodigo" value="0" class="form-control" type="hidden" placeholder="Codigo" required readonly>
                                                <input id="workModo" name="workModo" value="C" class="form-control" type="hidden" placeholder="Modo" required readonly>
                                                <input id="workPage" name="workPage" value="dashboard_v1" class="form-control" type="hidden" placeholder="Modo">
                                                <input id="var_105" name="var_105" class="form-control" type="hidden" placeholder="Tasa referencial, 24, 27, etc" />
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Monto Solicitado <span class="text-danger">*</span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text">₲</span></div>
                                                    <input type="text" class="form-control" placeholder="Monto Solicitado" id="list_var_101" name="list_var_101"  readonly />
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Plazo <span class="text-danger">*</span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calculator"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Cantidad de cuotas" id="list_var_102" name="list_var_102"  />
                                                </div>
                                            </div>
                                            <!--
                <div class="form-group row m-b-10">
                        <label class="col-lg-2 text-lg-right col-form-label"> Tasa referencial <span class="text-danger">*</span></label>
                        <div class="input-group input-group-lg m-b-10 col-lg-8">
                                <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-percent"></i></span></div>
                                <input type="text" class="form-control" placeholder="Tasa referencial, 24, 27, etc" id="list_var_105" name="list_var_105" data-parsley-group="step-4" data-parsley-required="false" readonly/>
                        </div>
                </div>
                                                -->
                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Cuota Aprox. <span class="text-danger">*</span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-money-bill-alt"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Cuota Aprox." id="list_var_104" name="list_var_104"  />
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Primer Vencimiento <span class="text-danger">*</span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Primer Vencimiento" id="list_var_103" name="list_var_103" />
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Nombres <span class="text-danger">*</span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Nombres" id="list_var_201" name="list_var_201" />
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Apellidos <span class="text-danger">*</span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Apellidos" id="list_var_202" name="list_var_202" value=""  />
                                                </div>
                                            </div>



                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Nro Documento <span class="text-danger">*</span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-address-card"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Nro Documento" id="list_var_204" name="list_var_204" />
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Fecha Nacimiento <span class="text-danger">*</span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-calendar"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Fecha Nacimiento" id="list_var_207" name="list_var_207" />
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Correo Electrónico <span class="text-danger">*</span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-envelope"></i></span></div>
                                                    <input type="email" class="form-control" placeholder="Correo Electrónico" id="list_var_210" name="list_var_210"  />
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Nro Linea Baja <span class="text-danger"></span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-phone"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Nro Linea Baja" id="list_var_208" name="list_var_208"  />
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Nro Celular <span class="text-danger">*</span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-mobile-alt"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Nro Celular" id="list_var_209" name="list_var_209"  />
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Domicilio Particular <span class="text-danger">*</span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Domicilio Particular" id="list_var_2003" name="list_var_2003"/>
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label">Profesion <span class="text-danger">*</span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Profesión" id="list_var_2006" name="list_var_2006"  />
                                                </div>
                                            </div>
                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Referencia Personal <span class="text-danger">*</span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Referencia Personal" id="list_var_2004" name="list_var_2004" />
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Referencia Telefono <span class="text-danger">*</span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-mobile-alt"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Referencia Teléfono" id="list_var_2005" name="list_var_2005"  />
                                                </div>
                                            </div>

                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Referencia Personal 2 <span class="text-danger">*</span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-user"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Referencia Personal 2" id="list_var_2007" name="list_var_2007" />
                                                </div>
                                            </div>
                                            <div class="form-group row m-b-10">
                                                <label class="col-lg-2 text-lg-right col-form-label"> Referencia Telefono 2 <span class="text-danger">*</span></label>
                                                <div class="input-group input-group-lg m-b-10 col-lg-8">
                                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-mobile-alt"></i></span></div>
                                                    <input type="text" class="form-control" placeholder="Referencia Teléfono 2" id="list_var_2008" name="list_var_2008"  />
                                                </div>
                                            </div>



                                            <!-- end form-group -->
                                        </div>
                                        <!-- end col-8 -->
                                    </div>
                                    <!-- end row -->
                                </fieldset>
                                <!-- end fieldset -->
                            </div>


                            <!-- begin step-5 -->
                            <div id="step-5">
                                <div class="jumbotron m-b-0 text-center">
                                    <h2 class="display-4">Confirma tu solicitud, para avanzar con tus sueños.</h2>
                                    <p class="lead mb-4">
                                        <img src="../assets/img/solicitud/solicitud_01.png" style="height:300px;">
                                    </p>
                                    <p>
                                        <button onclick=this.form.action="../class/crud/solicitud.php" type="submit" name="submit" class="btn btn-lg" style="background-color:#6820c6 !important; color:#ffffff !important;">Confirmar</button>
                                        &nbsp; &nbsp; &nbsp;
                                        <a href="../public/dashboard_v1.php" class="btn btn-danger btn-lg">Cancelar</a>
                                    </p>
                                </div>
                            </div>
                            <div id="step-6">
                                <div class="jumbotron m-b-0 text-center">
                                    <h2 class="display-4">Confirma tu solicitud, para avanzar con tus sueños.</h2>
                                    <p class="lead mb-4">
                                        <img src="../assets/img/solicitud/solicitud_01.png" style="height:300px;">
                                    </p>
                                    <p>
                                        <button onclick=this.form.action="../class/crud/solicitud.php" type="submit" name="submit" class="btn btn-lg" style="background-color:#6820c6 !important; color:#ffffff !important;">Confirmar</button>
                                        &nbsp; &nbsp; &nbsp;
                                        <a href="../public/dashboard_v1.php" class="btn btn-danger btn-lg">Cancelar</a>
                                    </p>
                                </div>
                            </div>


                            <!-- end step-5 -->
                        </div>
                        <!-- end wizard-content -->
                    </div>
                    <!-- end wizard -->
                </form>
            </div>
            <!-- end row -->
        </div>
        <!-- end #content -->

        <!-- begin #floating-action-button 
        <a href="https://web.whatsapp.com/send?phone= target="_blank" class="float" style="background-color:#1ebea5 !important; color:#ffffff !important;" title="Consulta whatsapp">
            <i class="fab fa-whatsapp fa-2x custom-float"></i>
        </a>-->
        <!-- end #floating-action-button -->

        <?php
        include 'development.php';
        ?>

    </div>
    <!-- end page container -->

    <?php
    include 'footer.php';
    ?>

    <script src="js/api.js"></script>
    <script src="js/default.js"></script>
    <script src="assets/js/demo/form-wizards-validation.demo.js"></script>
</body>

</html>