<?php
include("conexion.php");
include("cabecera.php");
session_start();

if (!isset($_SESSION["nombre_usuario"])) {
    header("Location: login.php");
    exit();
}

$nombre_usuario = $_SESSION["nombre_usuario"];

// Verifica si se estableció una variable de sesión
if (isset($_SESSION['mensaje'])) {
    $mensaje = $_SESSION['mensaje'];
    unset($_SESSION['mensaje']);
}

$sql = "SELECT
        r.IdRegistros AS 'IdRegistros',
        r.TituloDelRegistro AS 'Titulo Del Registro',
        r.Email AS 'Email',
        r.FechaDeEjecucion AS 'Fecha De Ejecucion',
        c.NombreConductor AS 'Nombre Del Conductor',
        c.TipoLicencia AS 'Tipo De Licencia',
        v.Placa AS 'Placa',
        v.Modelo AS 'Modelo',
        v.TipoDeVehiculo AS 'Tipo De Vehículo',
        sm.EstadoDeMangueras AS 'Estado De Mangueras',
        sm.NivelDeLiquidoDeFrenos AS 'Nivel De Liquido De Frenos',
        sm.PedalDeFreno AS 'Pedal De Freno',
        sm.PedalAcelerador AS 'Pedal Acelerador',
        sm.PedalClutch AS 'Pedal Clutch',
        sm.descrip1sismecanico AS 'Descripcion pedal Clutch',
        sm.FrenoPrincipalEmegencia AS 'Freno Principal y Emegencia',
        sm.PalancaCambios AS 'Palanca De Cambios',
        sm.DireccionVehiculo AS 'Dirección Vehiculo',
        sm.descrip2sismecanico AS 'Descripción Dirección',
        sm.NivelCombustible AS 'Nivel Del Combustible',
        sm.NivelLiquidoRefrigerante AS 'Nivel Liquido Refrigerante',
        sm.NivelAceiteMotor AS 'Nivel Del Aceite Motor',
        se.Cocuyos AS 'Cocuyos',
        se.Direccionales AS 'Direccionales',
        se.LucesAltasYBajas AS 'Luces Altas Y Bajas',
        se.LuzDeFreno AS 'Luz Del Freno',
        se.LuzReversa AS 'Luz Reversa',
        se.Claxon AS 'Claxon',
        se.LucesParqueo AS 'Luces De Parqueo',
        se.TestigosTablero AS 'Testigos Del Tablero',
        se.EncendidoDelVehículo AS 'Encendido Del Vehículo',
        se.BornesDeBatería AS 'Bornes De Batería',
        ef.CinturonesDeSeguridad AS 'Cinturones De Seguridad',
        ef.descrip1estadofisico AS 'Descripción Cinturon',
        ef.EspejoRetrovisor AS 'Espejo Retrovisor',
        ef.EspejosLaterales AS 'Espejos Laterales',
        ef.Limpiabrisas AS 'Limpiabrisas',
        ef.llantas AS 'llantas',
        ef.OrdenYAseo AS 'Orden Y Aseo',
        ef.Rines AS 'Rines',
        ef.Vidrios AS 'Vidrios',
        ef.LatoneriaYPintura AS 'Latonería Y Pintura',
        ec.Botiquin AS 'Botiquin',
        ec.Cruceta AS 'Cruceta',
        ec.Extintor AS 'Extintor',
        ec.Gato AS 'Gato',
        ec.Linterna AS 'Linterna',
        ec.Tacos AS 'Tacos',
        ec.LlavesAlicatesDestornillador AS 'Llaves, Alicates,Destornillador',
        ec.Chaleco AS 'Chaleco',
        ec.TriangulosConos AS 'Triangulos o Conos',
        d.LicenciaDeConduccion AS 'Licencia De Conduccion',
        d.PolizaTodoRiesgo AS 'Poliza TodoRiesgo',
        d.TecnicoMecanica AS 'TecnicoMecanica',
        d.FechaVencimientoTecnicomecanica AS 'Fecha Vencimiento Tecnicomecanica',
        d.SOAT AS 'SOAT',
        d.FechaVencimientoSoat AS 'Fecha Vencimiento SOAT',
        d.TargetaPropiedad AS 'Tarjeta Propiedad',
        sev.PolizaContractual AS 'Poliza Contractual',
        sev.FechaVenPolizaContractual AS 'Fecha Vencimiento PolizaContractual',
        sev.PolizaExtracontractual AS 'Poliza Extracontractual',
        sev.FechaVenPolizaExtraContractual AS 'Fecha Vencimiento Poliza ExtraContractual',
        sev.FUEC AS 'FUEC',
        sev.TarjetaOperacion AS 'Tarjeta Operacion',
        ld.Manijas AS 'Manijas',
        ld.Volante AS 'Volante',
        ld.MandosVolante AS 'Mandos Volante',
        ld.Tablero AS 'Tablero',
        ld.Sillas AS 'Sillas',
        ld.CinturonesDeSeguridad AS 'Cinturon De seguridad',
        ld.limpiezaLlantas AS 'limpieza De Llantas',
        ld.ApoyaManos AS 'ApoyaManos',
        ld.CierreDeVentanas AS 'Cierre De Ventanas',
        ld.LavadoDiario AS 'Lavado Diario',
        ld.PalancaDeCambio AS 'Palanca De Cambio',
        k.KilomInicioJornada AS 'KilomInicioJornada',
        k.FechaDeinicio AS 'FechaDeinicio'
        FROM registros r
        LEFT JOIN conductores c ON r.IdRegistros = c.Id_registro1
        LEFT JOIN Vehiculos v ON r.IdRegistros = v.Id_registro2
        LEFT JOIN SistemaMecanico sm ON r.IdRegistros = sm.Id_registro3
        LEFT JOIN SistemaElectrico se ON r.IdRegistros = se.Id_registro4
        LEFT JOIN EstadoFisico ef ON r.IdRegistros = ef.Id_registro5
        LEFT JOIN EquipoDeCarretera ec ON r.IdRegistros = ec.Id_registro6
        LEFT JOIN Documentos d ON r.IdRegistros = d.Id_registro7
        LEFT JOIN ServicoEspecial sev ON r.IdRegistros = sev.Id_registro8
        LEFT JOIN LimpiezaDesinfeccion ld ON r.IdRegistros = ld.Id_registro9
        LEFT JOIN Kilometraje k ON r.IdRegistros = k.Id_registro10
        ORDER BY r.IdRegistros";
?>

<body>
    <div class="container mt-4">
        <div class="row ">
        <h1 class =" col-2">Registros</h1>
         <a href="exportar_excel.php" class="btn  btn-success  col-2 text-center">Descargar Archivo</a>
        </div>
        
        <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th>ID</th>
<th>Título del Registro</th>
<th>Email</th>
<th>Fecha de Ejecución</th>
<th>Nombre del Conductor</th>
<th>Tipo de Licencia</th>
<th>Placa</th>
<th>Modelo</th>
<th>Tipo de Vehículo</th>
<th>Estado de Mangueras</th>
<th>Nivel de Líquido de Frenos</th>
<th>Pedal de Freno</th>
<th>Pedal Acelerador</th>
<th>Pedal Clutch</th>
<th>Descripción Pedal Clutch</th>
<th>Freno Principal y Emergencia</th>
<th>Palanca de Cambios</th>
<th>Dirección del Vehículo</th>
<th>Descripción Dirección</th>
<th>Nivel del Combustible</th>
<th>Nivel de Líquido Refrigerante</th>
<th>Nivel del Aceite del Motor</th>
<th>Cocuyos</th>
<th>Direccionales</th>
<th>Luces Altas y Bajas</th>
<th>Luz del Freno</th>
<th>Luz Reversa</th>
<th>Claxon</th>
<th>Luces de Parqueo</th>
<th>Testigos del Tablero</th>
<th>Encendido del Vehículo</th>
<th>Bornes de Batería</th>
<th>Cinturones de Seguridad</th>
<th>Descripción Cinturón</th>
<th>Espejo Retrovisor</th>
<th>Espejos Laterales</th>
<th>Limpiabrisas</th>
<th>Llantas</th>
<th>Orden y Aseo</th>
<th>Rines</th>
<th>Vidrios</th>
<th>Latonería y Pintura</th>
<th>Botiquín</th>
<th>Cruceta</th>
<th>Extintor</th>
<th>Gato</th>
<th>Linterna</th>
<th>Tacos</th>
<th>Llaves, Alicates, Destornillador</th>
<th>Chaleco</th>
<th>Triángulos o Conos</th>
<th>Licencia de Conducción</th>
<th>Póliza Todo Riesgo</th>
<th>Técnico Mecánica</th>
<th>Fecha de Vencimiento Técnico Mecánica</th>
<th>SOAT</th>
<th>Fecha de Vencimiento SOAT</th>
<th>Tarjeta de Propiedad</th>
<th>Póliza Contractual</th>
<th>Fecha de Vencimiento Póliza Contractual</th>
<th>Póliza Extracontractual</th>
<th>Fecha de Vencimiento Póliza Extracontractual</th>
<th>FUEC</th>
<th>Tarjeta de Operación</th>
<th>Manijas</th>
<th>Volante</th>
<th>Mandos de Volante</th>
<th>Tablero</th>
<th>Sillas</th>
<th>Cinturón de Seguridad</th>
<th>Limpieza de Llantas</th>
<th>ApoyaManos</th>
<th>Cierre de Ventanas</th>
<th>Lavado Diario</th>
<th>Palanca de Cambio</th>
<th>Kilómetros de Inicio de Jornada</th>
<th>Fecha de Inicio</th>
<th>Acciones</th>

                </tr>
            </thead>
            <tbody>
            <?php
                $conn = conectarBaseDeDatos(); // Asegúrate de que esta función esté definida en "conexion.php"
                $stmt = $conn->prepare($sql);
                $stmt->execute();

                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<tr>';
                    echo '<td>' . $row['IdRegistros'] . '</td>';
                    echo '<td>' . $row['Titulo Del Registro'] . '</td>';
                    echo '<td>' . $row['Email'] . '</td>';
                    echo '<td>' . $row['Fecha De Ejecucion'] . '</td>';
                    echo '<td>' . $row['Nombre Del Conductor'] . '</td>';
                    echo '<td>' . $row['Tipo De Licencia'] . '</td>';
                    echo '<td>' . $row['Placa'] . '</td>';
                    echo '<td>' . $row['Modelo'] . '</td>';
                    echo '<td>' . $row['Tipo De Vehículo'] . '</td>';
                    echo '<td>' . $row['Estado De Mangueras'] . '</td>';
                    echo '<td>' . $row['Nivel De Liquido De Frenos'] . '</td>';
                    echo '<td>' . $row['Pedal De Freno'] . '</td>';
                    echo '<td>' . $row['Pedal Acelerador'] . '</td>';
                    echo '<td>' . $row['Pedal Clutch'] . '</td>';
                    echo '<td>' . $row['Descripcion pedal Clutch'] . '</td>';
                    echo '<td>' . $row['Freno Principal y Emegencia'] . '</td>';
                    echo '<td>' . $row['Palanca De Cambios'] . '</td>';
                    echo '<td>' . $row['Dirección Vehiculo'] . '</td>';
                    echo '<td>' . $row['Descripción Dirección'] . '</td>';
                    echo '<td>' . $row['Nivel Del Combustible'] . '</td>';
                    echo '<td>' . $row['Nivel Liquido Refrigerante'] . '</td>';
                    echo '<td>' . $row['Nivel Del Aceite Motor'] . '</td>';
                    echo '<td>' . $row['Cocuyos'] . '</td>';
                    echo '<td>' . $row['Direccionales'] . '</td>';
                    echo '<td>' . $row['Luces Altas Y Bajas'] . '</td>';
                    echo '<td>' . $row['Luz Del Freno'] . '</td>';
                    echo '<td>' . $row['Luz Reversa'] . '</td>';
                    echo '<td>' . $row['Claxon'] . '</td>';
                    echo '<td>' . $row['Luces De Parqueo'] . '</td>';
                    echo '<td>' . $row['Testigos Del Tablero'] . '</td>';
                    echo '<td>' . $row['Encendido Del Vehículo'] . '</td>';
                    echo '<td>' . $row['Bornes De Batería'] . '</td>';
                    echo '<td>' . $row['Cinturones De Seguridad'] . '</td>';
                    echo '<td>' . $row['Descripción Cinturon'] . '</td>';
                    echo '<td>' . $row['Espejo Retrovisor'] . '</td>';
                    echo '<td>' . $row['Espejos Laterales'] . '</td>';
                    echo '<td>' . $row['Limpiabrisas'] . '</td>';
                    echo '<td>' . $row['llantas'] . '</td>';
                    echo '<td>' . $row['Orden Y Aseo'] . '</td>';
                    echo '<td>' . $row['Rines'] . '</td>';
                    echo '<td>' . $row['Vidrios'] . '</td>';
                    echo '<td>' . $row['Latonería Y Pintura'] . '</td>';
                    echo '<td>' . $row['Botiquin'] . '</td>';
                    echo '<td>' . $row['Cruceta'] . '</td>';
                    echo '<td>' . $row['Extintor'] . '</td>';
                    echo '<td>' . $row['Gato'] . '</td>';
                    echo '<td>' . $row['Linterna'] . '</td>';
                    echo '<td>' . $row['Tacos'] . '</td>';
                    echo '<td>' . $row['Llaves, Alicates,Destornillador'] . '</td>';
                    echo '<td>' . $row['Chaleco'] . '</td>';
                    echo '<td>' . $row['Triangulos o Conos'] . '</td>';
                    echo '<td>' . $row['Licencia De Conduccion'] . '</td>';
                    echo '<td>' . $row['Poliza TodoRiesgo'] . '</td>';
                    echo '<td>' . $row['TecnicoMecanica'] . '</td>';
                    echo '<td>' . $row['Fecha Vencimiento Tecnicomecanica'] . '</td>';
                    echo '<td>' . $row['SOAT'] . '</td>';
                    echo '<td>' . $row['Fecha Vencimiento SOAT'] . '</td>';
                    echo '<td>' . $row['Tarjeta Propiedad'] . '</td>';
                    echo '<td>' . $row['Poliza Contractual'] . '</td>';
                    echo '<td>' . $row['Fecha Vencimiento PolizaContractual'] . '</td>';
                    echo '<td>' . $row['Poliza Extracontractual'] . '</td>';
                    echo '<td>' . $row['Fecha Vencimiento Poliza ExtraContractual'] . '</td>';
                    echo '<td>' . $row['FUEC'] . '</td>';
                    echo '<td>' . $row['Tarjeta Operacion'] . '</td>';
                    echo '<td>' . $row['Manijas'] . '</td>';
                    echo '<td>' . $row['Volante'] . '</td>';
                    echo '<td>' . $row['Mandos Volante'] . '</td>';
                    echo '<td>' . $row['Tablero'] . '</td>';
                    echo '<td>' . $row['Sillas'] . '</td>';
                    echo '<td>' . $row['Cinturon De seguridad'] . '</td>';
                    echo '<td>' . $row['limpieza De Llantas'] . '</td>';
                    echo '<td>' . $row['ApoyaManos'] . '</td>';
                    echo '<td>' . $row['Cierre De Ventanas'] . '</td>';
                    echo '<td>' . $row['Lavado Diario'] . '</td>';
                    echo '<td>' . $row['Palanca De Cambio'] . '</td>';
                    echo '<td>' . $row['KilomInicioJornada'] . '</td>';
                    echo '<td>' . $row['FechaDeinicio'] . '</td>';
                    echo '<td><button class="btn btn-primary" onclick="generarPDF(' . $row['IdRegistros'] . ')">Generar PDF</button></td>';
                    echo '</tr>';
                }
                $conn = null;
                ?>
            </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script>
        function generarPDF(idRegistro) {
            // Aquí debes escribir el código JavaScript para generar el PDF con los datos del registro que corresponde al idRegistro.
            // Puedes usar la biblioteca jsPDF para esta tarea.
            // A continuación, un ejemplo básico de cómo agregar contenido al PDF:

            const pdf = new jsPDF();

            // Agrega el contenido al PDF
            pdf.text('ID del Registro: ' + idRegistro, 10, 10);
            // Agrega más contenido según tus necesidades

            // Guarda el PDF o muéstralo en el navegador
            pdf.save('Registro-' + idRegistro + '.pdf');
        }
    </script>
</body>
</html>
