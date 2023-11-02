<?php

// Define las constantes de conexión a la base de datos
define('DB_HOST', 'localhost'); // Dirección del servidor de base de datos
define('DB_USER', 'root');      // Nombre de usuario de MySQL
define('DB_PASS', '');           // Contraseña de MySQL
define('DB_NAME', 'FormDb');    // Nombre de la base de datos

function conectarBaseDeDatos() {
    try {
        // Crea una conexión segura a la base de datos
        $conexion = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASS);

        // Habilita el modo de errores para las excepciones de PDO
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conexion;
    } catch (PDOException $e) {
        // En caso de error, muestra un mensaje de error
        die("Error de conexión a la base de datos: " . $e->getMessage());
    }
}

function guardarDatos($tituloRegistro, $email, $fechaEjecucion, $nombreConductor, $tipoLicencia, $placa, $modelo, $tipoVehiculo, $estadoMangueras, $nivelLiquidoFrenos, $pedalFreno, $pedalAcelerador, $pedalClutch, $descripcion1SistemaMecanico, $frenoPrincipalEmergencia, $palancaCambios, $direccionVehiculo, $descripcion2SistemaMecanico, $nivelCombustible, $NivelLiquidoRefrigerante, $nivelAceiteMotor, $cocuyos, $direccionales, $lucesAltasBajas, $luzFreno, $luzReversa, $claxon, $lucesParqueo, $testigosTablero, $encendidoVehiculo, $bornesBateria, $cinturonesSeguridad, $descripcion1EstadoFisico, $espejoRetrovisor, $espejosLaterales, $limpiabrisas, $llantas, $ordenAseo, $rines, $vidrios, $latoneriaPintura, $botiquin, $cruceta, $extintor, $gato, $linterna, $tacos, $llavesAlicatesDestornillador, $chaleco, $triangulosConos, $licenciaConduccion, $polizaTodoRiesgo, $tecnicoMecanica, $fechaVencimientoTecnicoMecanica, $soat, $fechaVencimientoSoat, $tarjetaPropiedad, $polizaContractual, $fechaVenPolizaContractual, $polizaExtracontractual, $fechaVenPolizaExtraContractual, $fuec, $tarjetaOperacion, $manijas, $volante, $mandosVolante, $tablero, $sillas, $cinturonesSeguridadLimpieza, $limpiezaLlantas, $apoyaManos, $cierreVentanas, $lavadoDiario, $palancaCambio, $kilometrajeInicio, $fechaInicio, $img) {
    $conexion = conectarBaseDeDatos();

    try {
        // Inicia una transacción
        $conexion->beginTransaction();

        // Inserta los datos en la tabla 'registros'
        $sqlRegistro = "INSERT INTO registros (TituloDelRegistro, Email, FechaDeEjecucion) VALUES (:tituloRegistro, :email, :fechaEjecucion)";
        $stmtRegistro = $conexion->prepare($sqlRegistro);
        $stmtRegistro->bindParam(':tituloRegistro', $tituloRegistro);
        $stmtRegistro->bindParam(':email', $email);
        $stmtRegistro->bindParam(':fechaEjecucion', $fechaEjecucion);
        $stmtRegistro->execute();

        // Obtiene el ID del registro insertado
        $registroID = $conexion->lastInsertId();

        // Inserta los datos en la tabla 'conductores'
        $sqlConductor = "INSERT INTO conductores (Id_registro1, NombreConductor, TipoLicencia) VALUES (:registroID, :nombreConductor, :tipoLicencia)";
        $stmtConductor = $conexion->prepare($sqlConductor);
        $stmtConductor->bindParam(':registroID', $registroID);
        $stmtConductor->bindParam(':nombreConductor', $nombreConductor);
        $stmtConductor->bindParam(':tipoLicencia', $tipoLicencia);
        $stmtConductor->execute();

        // Inserta los datos en la tabla 'Vehiculos'
        $sqlVehiculo = "INSERT INTO Vehiculos (Id_registro2, Placa, Modelo, TipoDeVehiculo) VALUES (:registroID, :placa, :modelo, :tipoVehiculo)";
        $stmtVehiculo = $conexion->prepare($sqlVehiculo);
        $stmtVehiculo->bindParam(':registroID', $registroID);
        $stmtVehiculo->bindParam(':placa', $placa);
        $stmtVehiculo->bindParam(':modelo', $modelo);
        $stmtVehiculo->bindParam(':tipoVehiculo', $tipoVehiculo);
        $stmtVehiculo->execute();

        // Inserta los datos en la tabla 'SistemaMecanico'
        $sqlSistemaMecanico = "INSERT INTO SistemaMecanico (Id_registro3, EstadoDeMangueras, NivelDeLiquidoDeFrenos, PedalDeFreno, PedalAcelerador, PedalClutch, descrip1sismecanico, FrenoPrincipalEmegencia, PalancaCambios, DireccionVehiculo, descrip2sismecanico, NivelCombustible, NivelLiquidoRefrigerante, NivelAceiteMotor) VALUES (:registroID, :estadoMangueras, :nivelLiquidoFrenos, :pedalFreno, :pedalAcelerador, :pedalClutch, :descripcionpedal, :frenoPrincipalEmegencia, :palancaCambios, :direccionVehiculo, :descripciondireccion, :nivelCombustible, :liqrefrigerante, :nivelAceiteMotor)";
        $stmtSistemaMecanico = $conexion->prepare($sqlSistemaMecanico);
        $stmtSistemaMecanico->bindParam(':registroID', $registroID);
        $stmtSistemaMecanico->bindParam(':estadoMangueras', $estadoMangueras);
        $stmtSistemaMecanico->bindParam(':nivelLiquidoFrenos', $nivelLiquidoFrenos);
        $stmtSistemaMecanico->bindParam(':pedalFreno', $pedalFreno);
        $stmtSistemaMecanico->bindParam(':pedalAcelerador', $pedalAcelerador);
        $stmtSistemaMecanico->bindParam(':pedalClutch', $pedalClutch);
        $stmtSistemaMecanico->bindParam(':descripcionpedal', $descripcion1SistemaMecanico);
        $stmtSistemaMecanico->bindParam(':frenoPrincipalEmegencia',$frenoPrincipalEmergencia);
        $stmtSistemaMecanico->bindParam(':palancaCambios', $palancaCambios);
        $stmtSistemaMecanico->bindParam(':direccionVehiculo', $direccionVehiculo);
        $stmtSistemaMecanico->bindParam(':descripciondireccion', $descripcion2SistemaMecanico);
        $stmtSistemaMecanico->bindParam(':nivelCombustible', $nivelCombustible);
        $stmtSistemaMecanico->bindParam(':liqrefrigerante', $NivelLiquidoRefrigerante);
        $stmtSistemaMecanico->bindParam(':nivelAceiteMotor', $nivelAceiteMotor);
        $stmtSistemaMecanico->execute();

        // Inserta los datos en la tabla 'SistemaElectrico'
        $sqlSistemaElectrico = "INSERT INTO SistemaElectrico (Id_registro4, Cocuyos, Direccionales, LucesAltasYBajas, LuzDeFreno, LuzReversa, Claxon, LucesParqueo, TestigosTablero, EncendidoDelVehículo, BornesDeBatería) VALUES (:registroID, :cocuyos, :direccionales, :lucesAltasBajas, :luzFreno, :luzReversa, :claxon, :lucesParqueo, :testigosTablero, :encendidoVehiculo, :bornesBateria)";
        $stmtSistemaElectrico = $conexion->prepare($sqlSistemaElectrico);
        $stmtSistemaElectrico->bindParam(':registroID', $registroID);
        $stmtSistemaElectrico->bindParam(':cocuyos', $cocuyos);
        $stmtSistemaElectrico->bindParam(':direccionales', $direccionales);
        $stmtSistemaElectrico->bindParam(':lucesAltasBajas', $lucesAltasBajas);
        $stmtSistemaElectrico->bindParam(':luzFreno', $luzFreno);
        $stmtSistemaElectrico->bindParam(':luzReversa', $luzReversa);
        $stmtSistemaElectrico->bindParam(':claxon', $claxon);
        $stmtSistemaElectrico->bindParam(':lucesParqueo', $lucesParqueo);
        $stmtSistemaElectrico->bindParam(':testigosTablero', $testigosTablero);
        $stmtSistemaElectrico->bindParam(':encendidoVehiculo', $encendidoVehiculo);
        $stmtSistemaElectrico->bindParam(':bornesBateria', $bornesBateria);
        $stmtSistemaElectrico->execute();

        // Inserta los datos en la tabla 'EstadoFisico'
        $sqlEstadoFisico = "INSERT INTO EstadoFisico (Id_registro5, CinturonesDeSeguridad, descrip1estadofisico, EspejoRetrovisor, EspejosLaterales, Limpiabrisas, llantas, OrdenYAseo, Rines, Vidrios, LatoneriaYPintura) VALUES (:registroID, :cinturonesSeguridad, :descripcion1EstadoFisico, :espejoRetrovisor, :espejosLaterales, :limpiabrisas, :llantas, :ordenAseo, :rines, :vidrios, :latoneriaPintura)";
        $stmtEstadoFisico = $conexion->prepare($sqlEstadoFisico);
        $stmtEstadoFisico->bindParam(':registroID', $registroID);
        $stmtEstadoFisico->bindParam(':cinturonesSeguridad', $cinturonesSeguridad);
        $stmtEstadoFisico->bindParam(':descripcion1EstadoFisico', $descripcion1EstadoFisico);
        $stmtEstadoFisico->bindParam(':espejoRetrovisor', $espejoRetrovisor);
        $stmtEstadoFisico->bindParam(':espejosLaterales', $espejosLaterales);
        $stmtEstadoFisico->bindParam(':limpiabrisas', $limpiabrisas);
        $stmtEstadoFisico->bindParam(':llantas', $llantas);
        $stmtEstadoFisico->bindParam(':ordenAseo', $ordenAseo);
        $stmtEstadoFisico->bindParam(':rines', $rines);
        $stmtEstadoFisico->bindParam(':vidrios', $vidrios);
        $stmtEstadoFisico->bindParam(':latoneriaPintura', $latoneriaPintura);
        $stmtEstadoFisico->execute();

        // Inserta los datos en la tabla 'EquipoDeCarretera'
        $sqlEquipoDeCarretera = "INSERT INTO EquipoDeCarretera (Id_registro6, Botiquin, Cruceta, Extintor, Gato, Linterna, Tacos, LlavesAlicatesDestornillador, Chaleco, TriangulosConos) VALUES (:registroID, :botiquin, :cruceta, :extintor, :gato, :linterna, :tacos, :llavesAlicatesDestornillador, :chaleco, :triangulosConos)";
        $stmtEquipoDeCarretera = $conexion->prepare($sqlEquipoDeCarretera);
        $stmtEquipoDeCarretera->bindParam(':registroID', $registroID);
        $stmtEquipoDeCarretera->bindParam(':botiquin', $botiquin);
        $stmtEquipoDeCarretera->bindParam(':cruceta', $cruceta);
        $stmtEquipoDeCarretera->bindParam(':extintor', $extintor);
        $stmtEquipoDeCarretera->bindParam(':gato', $gato);
        $stmtEquipoDeCarretera->bindParam(':linterna', $linterna);
        $stmtEquipoDeCarretera->bindParam(':tacos', $tacos);
        $stmtEquipoDeCarretera->bindParam(':llavesAlicatesDestornillador', $llavesAlicatesDestornillador);
        $stmtEquipoDeCarretera->bindParam(':chaleco', $chaleco);
        $stmtEquipoDeCarretera->bindParam(':triangulosConos', $triangulosConos);
        $stmtEquipoDeCarretera->execute();

        // Inserta los datos en la tabla 'Documentos'
        $sqlDocumentos = "INSERT INTO Documentos (Id_registro7, LicenciaDeConduccion, PolizaTodoRiesgo, TecnicoMecanica, FechaVencimientoTecnicomecanica, SOAT, FechaVencimientoSoat, TargetaPropiedad) VALUES (:registroID, :licenciaConduccion, :polizaTodoRiesgo, :tecnicoMecanica, :fechaVencimientoTecnicoMecanica, :soat, :fechaVencimientoSoat, :tarjetaPropiedad)";
        $stmtDocumentos = $conexion->prepare($sqlDocumentos);
        $stmtDocumentos->bindParam(':registroID', $registroID);
        $stmtDocumentos->bindParam(':licenciaConduccion', $licenciaConduccion);
        $stmtDocumentos->bindParam(':polizaTodoRiesgo', $polizaTodoRiesgo);
        $stmtDocumentos->bindParam(':tecnicoMecanica', $tecnicoMecanica);
        $stmtDocumentos->bindParam(':fechaVencimientoTecnicoMecanica', $fechaVencimientoTecnicoMecanica);
        $stmtDocumentos->bindParam(':soat', $soat);
        $stmtDocumentos->bindParam(':fechaVencimientoSoat', $fechaVencimientoSoat);
        $stmtDocumentos->bindParam(':tarjetaPropiedad', $tarjetaPropiedad);
        $stmtDocumentos->execute();

        // Inserta los datos en la tabla 'ServicoEspecial'
        $sqlServicoEspecial = "INSERT INTO ServicoEspecial (Id_registro8, PolizaContractual, FechaVenPolizaContractual, PolizaExtracontractual, FechaVenPolizaExtraContractual, FUEC, TarjetaOperacion) VALUES (:registroID, :polizaContractual, :fechaVenPolizaContractual, :polizaExtracontractual, :fechaVenPolizaExtraContractual, :fuec, :tarjetaOperacion)";
        $stmtServicoEspecial = $conexion->prepare($sqlServicoEspecial);
        $stmtServicoEspecial->bindParam(':registroID', $registroID);
        $stmtServicoEspecial->bindParam(':polizaContractual', $polizaContractual);
        $stmtServicoEspecial->bindParam(':fechaVenPolizaContractual', $fechaVenPolizaContractual);
        $stmtServicoEspecial->bindParam(':polizaExtracontractual', $polizaExtracontractual);
        $stmtServicoEspecial->bindParam(':fechaVenPolizaExtraContractual', $fechaVenPolizaExtraContractual);
        $stmtServicoEspecial->bindParam(':fuec', $fuec);
        $stmtServicoEspecial->bindParam(':tarjetaOperacion', $tarjetaOperacion);
        $stmtServicoEspecial->execute();

        // Inserta los datos en la tabla 'LimpiezaDesinfeccion'
        $sqlLimpiezaDesinfeccion = "INSERT INTO LimpiezaDesinfeccion (Id_registro9, Manijas, Volante, MandosVolante, Tablero, Sillas, CinturonesDeSeguridad, limpiezaLlantas, ApoyaManos, CierreDeVentanas, LavadoDiario, PalancaDeCambio) VALUES (:registroID, :manijas, :volante, :mandosVolante, :tablero, :sillas, :cinturonesSeguridadLimpieza, :limpLlantas, :apoyaManos, :cierreVentanas, :lavadoDiario, :palancaCambio)";
        $stmtLimpiezaDesinfeccion = $conexion->prepare($sqlLimpiezaDesinfeccion);
        $stmtLimpiezaDesinfeccion->bindParam(':registroID', $registroID);
        $stmtLimpiezaDesinfeccion->bindParam(':manijas', $manijas);
        $stmtLimpiezaDesinfeccion->bindParam(':volante', $volante);
        $stmtLimpiezaDesinfeccion->bindParam(':mandosVolante', $mandosVolante);
        $stmtLimpiezaDesinfeccion->bindParam(':tablero', $tablero);
        $stmtLimpiezaDesinfeccion->bindParam(':sillas', $sillas);
        $stmtLimpiezaDesinfeccion->bindParam(':cinturonesSeguridadLimpieza', $cinturonesSeguridadLimpieza);
        $stmtLimpiezaDesinfeccion->bindParam(':limpLlantas', $limpiezaLlantas);
        $stmtLimpiezaDesinfeccion->bindParam(':apoyaManos', $apoyaManos);
        $stmtLimpiezaDesinfeccion->bindParam(':cierreVentanas', $cierreVentanas);
        $stmtLimpiezaDesinfeccion->bindParam(':lavadoDiario', $lavadoDiario);
        $stmtLimpiezaDesinfeccion->bindParam(':palancaCambio', $palancaCambio);
        $stmtLimpiezaDesinfeccion->execute();

        // Inserta los datos en la tabla 'Kilometraje'
        $sqlKilometraje = "INSERT INTO Kilometraje (Id_registro10, KilomInicioJornada, FechaDeinicio) VALUES (:registroID, :kilometrajeInicio, :fechaInicio)";
        $stmtKilometraje = $conexion->prepare($sqlKilometraje);
        $stmtKilometraje->bindParam(':registroID', $registroID);
        $stmtKilometraje->bindParam(':kilometrajeInicio', $kilometrajeInicio);
        $stmtKilometraje->bindParam(':fechaInicio', $fechaInicio);
        $stmtKilometraje->execute();


        // Inserta los datos en la tabla 'img'
        $sqlImg = "INSERT INTO img (Id_registro11, img) VALUES (:registroID, :img)";
        $stmtImg = $conexion->prepare($sqlImg);
        $stmtImg->bindParam(':registroID', $registroID);
        $stmtImg->bindParam(':img', $img);
        $stmtImg->execute();


        // Confirma la transacción
        $conexion->commit();
        if (strpos($mensaje, "Error") === false) {
            // Si no hay error en el mensaje, redirige nuevamente el
            header("Location: index.php");
            exit(); // Asegúrate de que no haya más salida o ejecución de código
        }
       
    } catch (PDOException $e) {
        // En caso de error, revierte la transacción y muestra un mensaje de error
        $conexion->rollBack();
        return "Error al guardar los datos: " . $e->getMessage();
    }
}
?>