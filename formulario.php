<?php 

include 'modelo.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tituloRegistro = $_POST["tituloRegistro"];
    $email = $_POST["email"];
    $fechaEjecucion = $_POST["fechaEjecucion"];
    // datos del conductor
    $nombreConductor= $_POST["nombres"];
    $tipoLicencia =$_POST["tipoLicencia"];
    //datos del vehiculo
    $placa= $_POST["placa"];
    $modelo=$_POST["modelo"];
    $tipoVehiculo=$_POST["tipoVehiculo"];
    // sistema mecanico
    $estadoMangueras=$_POST["EstadoDeMangueras"];
    $nivelLiquidoFrenos=$_POST["NivelLiquidoFrenos"];
    $pedalFreno=$_POST["PedalFreno"];
    $pedalAcelerador=$_POST["PedalAcelerador"];
    $pedalClutch=$_POST["PedalDelClutch"];
    $descrip1sismecanico=$_POST["descripcionpedal"];
    $frenoPrincipalEmergencia=$_POST["EstadoFrenos"];
    $palancaCambios=$_POST["PalancaDeCambios"];
    $direccionVehiculo=$_POST["DireccionVehiculo"];
    $descripcion2SistemaMecanico=$_POST["descripciondireccion"];
    $nivelCombustible=$_POST["NivelCombustible"];
    $NivelLiquidoRefrigerante=$_POST["liqrefrigerante"];
    $nivelAceiteMotor=$_POST["NivelAceiteMotor"];
    // sistema electico
    $cocuyos=$_POST["Cocuyos"];
    $direccionales=$_POST["Direccionales"];
    $lucesAltasBajas=$_POST["Luces"];
    $luzFreno=$_POST["LuzFreno"];
    $luzReversa=$_POST["LuzReversa"];
    $claxon=$_POST["Claxon"];
    $lucesParqueo=$_POST["LucesDeParqueo"];
    $testigosTablero=$_POST["TestigosTablero"];
    $encendidoVehiculo=$_POST["EncendidoVehiculo"];
    $bornesBateria=$_POST["BornesBateria"];
    // estado fisico
    $cinturonesSeguridad=$_POST["EstadoCinturonSeg"];
    $descripcion1EstadoFisico=$_POST["descripcionestadofisico"];
    $espejoRetrovisor=$_POST["EspejoRetrovisor"];
    $espejosLaterales=$_POST["espejosLaterales"];
    $limpiabrisas=$_POST["Limpiabrisas"];
    $llantas=$_POST["EstadoLlantas"];
    $ordenAseo=$_POST["OrdenYAseo"];
    $rines=$_POST["Rines"];
    $vidrios=$_POST["Vidrios"];
    $latoneriaPintura=$_POST["latoneriaPintura"];
    // Equipo de carreteras
    $botiquin=$_POST["botiquin"];
    $cruceta=$_POST["Cruceta"];
    $extintor=$_POST["Extintor"];
    $gato=$_POST["Gato"];
    $linterna=$_POST["Linterna"];
    $tacos=$_POST["Tacos"];
    $chaleco=$_POST["Chaleco"];
    $triangulosConos=$_POST["Conos"];
    $llavesAlicatesDestornillador=$_POST["Llaves"];
    // documentos
    $licenciaConduccion=$_POST["LicenciaConducir"];
    $polizaTodoRiesgo=$_POST["PolizaTodoRiesgo"];
    $tecnicoMecanica=$_POST["tecnicoMecanica"];
    $fechaVencimientoTecnicoMecanica=$_POST["fechaVencimientoTecnicoMecanica"];
    $soat=$_POST["soat"];
    $fechaVencimientoSoat=$_POST["fechaVencimientoSoat"];
    $tarjetaPropiedad=$_POST["tarjetaPropiedad"];
    // servicio especial
    $polizaContractual=$_POST["polizaContractual"];
    $fechaVenPolizaContractual=$_POST["fechaVenPolizaContractual"];
    $polizaExtracontractual=$_POST["polizaExtracontractual"];
    $fechaVenPolizaExtraContractual=$_POST["fechaVenPolizaExtraContractual"];
    $fuec=$_POST["FUEC"];
    $tarjetaOperacion=$_POST["tarjetaOperacion"];
    $manijas=$_POST["Manijas"];
    $volante=$_POST["Volante"];
    $mandosVolante=$_POST["mandosVolante"];
    $tablero=$_POST["tablero"];
    $sillas=$_POST["sillas"];
    $cinturonesSeguridadLimpieza=$_POST["cinturonesSeguridad"];
    $limpiezaLlantas=$_POST["limpLlantas"];
    $apoyaManos=$_POST["apoyaManos"];
    $cierreVentanas=$_POST["cierreVentanas"];
    $lavadoDiario=$_POST["lavadoDiario"];
    $palancaCambio=$_POST["palancaCambio"];
    // kilometraje
    $kilometrajeInicio=$_POST["kilometrajeInicio"];
    $fechaInicio=$_POST["fechaInicio"];
    //imagen
    $img=$_POST["firma"];

    // Llama a la función para guardar los datos
    $mensaje = guardarDatos($tituloRegistro,$email,$fechaEjecucion, $nombreConductor,$tipoLicencia,$placa,
                            $modelo,$tipoVehiculo,$estadoMangueras,$nivelLiquidoFrenos,$pedalFreno,$pedalAcelerador,
                            $pedalClutch,$descrip1sismecanico,$frenoPrincipalEmergencia,$palancaCambios,$direccionVehiculo,
                            $descripcion2SistemaMecanico,$nivelCombustible,$NivelLiquidoRefrigerante,$nivelAceiteMotor,$cocuyos,$direccionales,
                            $lucesAltasBajas,$luzFreno,$luzReversa,$claxon,$lucesParqueo,$testigosTablero,$encendidoVehiculo,$bornesBateria,
                            $cinturonesSeguridad,$descripcion1EstadoFisico,$espejoRetrovisor,$espejosLaterales,$limpiabrisas,$llantas,$ordenAseo,
                            $rines,$vidrios,$latoneriaPintura,$botiquin,$cruceta,$extintor,$gato,$linterna,$tacos,$llavesAlicatesDestornillador,
                            $chaleco,$triangulosConos,$licenciaConduccion,$polizaTodoRiesgo,$tecnicoMecanica,$fechaVencimientoTecnicoMecanica,
                            $soat,$fechaVencimientoSoat,$tarjetaPropiedad,$polizaContractual,$fechaVenPolizaContractual,$polizaExtracontractual,
                            $fechaVenPolizaExtraContractual,$fuec,$tarjetaOperacion,$manijas,$volante,$mandosVolante,$tablero,$sillas,$cinturonesSeguridadLimpieza,
                            $limpiezaLlantas,$apoyaManos,$cierreVentanas,$lavadoDiario,$palancaCambio,$kilometrajeInicio,$fechaInicio,$img);
    echo $mensaje; // Esto mostrará un mensaje de éxito o error
}


?>