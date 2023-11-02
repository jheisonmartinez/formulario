<?php
require 'vendor/autoload.php'; // Asegúrate de incluir la ruta correcta a la biblioteca PHPSpreadsheet

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function setupHeaders($sheet) {
    $headers = [
        'IdRegistros', 'TituloDelRegistro', 'Email', 'FechaDeEjecucion', 
        'NombreConductor','TipoLicencia',
        'Placa', 'Modelo', 'TipoDeVehiculo',
        'EstadoDeMangueras', 'NivelDeLiquidoDeFrenos', 'PedalDeFreno', 'PedalAcelerador',
        'PedalClutch', 'Descripcion', 'FrenoPrincipalEmegencia', 'PalancaCambios',
        'DireccionVehiculo', 'descripcion1sismecanico', 'NivelCombustible', 'NivelLiquidoRefrigerante', 'NivelAceiteMotor',
        'Cocuyos', 'Direccionales', 'LucesAltasYBajas', 'LuzDeFreno', 'LuzReversa',
        'Claxon', 'LucesParqueo', 'TestigosTablero', 'EncendidoDelVehículo', 'BornesDeBatería',
        'CinturonesDeSeguridad', 'descripcion1estadofisico', 'EspejoRetrovisor', 'EspejosLaterales', 'Limpiabrisas', 'llantas', 'OrdenYAseo', 'Rines', 'Vidrios', 'LatoneriaYPintura',
        'Botiquin', 'Cruceta', 'Extintor', 'Gato', 'Linterna', 'Tacos', 
        'LlavesAlicatesDestornillador', 'Chaleco', 'TriangulosConos',
        'LicenciaDeConduccion', 'PolizaTodoRiesgo', 'TecnicoMecanica',
        'FechaVencimientoTecnicomecanica', 'SOAT', 'FechaVencimientoSoat', 'TargetaPropiedad',
        'PolizaContractual', 'FechaVenPolizaContractual', 'PolizaExtracontractual', 'FechaVenPolizaExtraContractual', 'FUEC', 'TarjetaOperacion',
        'Manijas', 'Volante', 'MandosVolante', 'Tablero', 'Sillas', 'Cinturon De Seguridad',
        'limpiezaLlantas', 'ApoyaManos', 'CierreDeVentanas', 'LavadoDiario', 'PalancaDeCambio',
        'KilomInicioJornada', 'FechaDeinicio'
    ];

    $column = 'A';
    foreach ($headers as $header) {
        $sheet->setCellValue($column . '1', $header);
        $column++;
    }
}


function generateExcelFile($result) {
    // Crear una instancia de Spreadsheet
    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();

    setupHeaders($sheet);

    $rowNum = 2; // Comenzar en la fila 2 para datos

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $column = 'A';
            foreach ($row as $value) {
                $sheet->setCellValue($column . $rowNum, $value);
                $column++;
            }
            // Incrementar el número de fila
            $rowNum++;
        }
    } else {
        echo "No se encontraron registros en la base de datos.";
    }

    return $spreadsheet;
}

// Conectar a la base de datos y ejecutar la consulta SQL
// Conectarse a la base de datos (debes configurar tus credenciales)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "FormDb";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Consulta SQL para obtener datos de múltiples tablas concatenados por el ID de registro
$sql = "SELECT
        r.IdRegistros AS 'IdRegistros',
        r.TituloDelRegistro AS 'TituloDelRegistro',
        r.Email AS 'Email',
        r.FechaDeEjecucion AS 'FechaDeEjecucion',
        c.NombreConductor AS 'NombreConductor',
        c.TipoLicencia AS 'TipoLicencia',
        v.Placa AS 'Placa',
        v.Modelo AS 'Modelo',
        v.TipoDeVehiculo AS 'TipoDeVehiculo',
        sm.EstadoDeMangueras AS 'EstadoDeMangueras',
        sm.NivelDeLiquidoDeFrenos AS 'NivelDeLiquidoDeFrenos',
        sm.PedalDeFreno AS 'PedalDeFreno',
        sm.PedalAcelerador AS 'PedalAcelerador',
        sm.PedalClutch AS 'PedalClutch',
        sm.descrip1sismecanico AS 'descripcion1sismecanico',
        sm.FrenoPrincipalEmegencia AS 'FrenoPrincipalEmegencia',
        sm.PalancaCambios AS 'PalancaCambios',
        sm.DireccionVehiculo AS 'DireccionVehiculo',
        sm.descrip2sismecanico AS 'descripcion2sismecanico',
        sm.NivelCombustible AS 'NivelCombustible',
        sm.NivelLiquidoRefrigerante AS 'NivelLiquidoRefrigerante',
        sm.NivelAceiteMotor AS 'NivelAceiteMotor',
        se.Cocuyos AS 'Cocuyos',
        se.Direccionales AS 'Direccionales',
        se.LucesAltasYBajas AS 'LucesAltasYBajas',
        se.LuzDeFreno AS 'LuzDeFreno',
        se.LuzReversa AS 'LuzReversa',
        se.Claxon AS 'Claxon',
        se.LucesParqueo AS 'LucesParqueo',
        se.TestigosTablero AS 'TestigosTablero',
        se.EncendidoDelVehículo AS 'EncendidoDelVehículo',
        se.BornesDeBatería AS 'BornesDeBatería',
        ef.CinturonesDeSeguridad AS 'CinturonesDeSeguridad',
        ef.descrip1estadofisico AS 'descripcion1estadofisico',
        ef.EspejoRetrovisor AS 'EspejoRetrovisor',
        ef.EspejosLaterales AS 'EspejosLaterales',
        ef.Limpiabrisas AS 'Limpiabrisas',
        ef.llantas AS 'llantas',
        ef.OrdenYAseo AS 'OrdenYAseo',
        ef.Rines AS 'Rines',
        ef.Vidrios AS 'Vidrios',
        ef.LatoneriaYPintura AS 'LatoneriaYPintura',
        ec.Botiquin AS 'Botiquin',
        ec.Cruceta AS 'Cruceta',
        ec.Extintor AS 'Extintor',
        ec.Gato AS 'Gato',
        ec.Linterna AS 'Linterna',
        ec.Tacos AS 'Tacos',
        ec.LlavesAlicatesDestornillador AS 'LlavesAlicatesDestornillador',
        ec.Chaleco AS 'Chaleco',
        ec.TriangulosConos AS 'TriangulosConos',
        d.LicenciaDeConduccion AS 'LicenciaDeConduccion',
        d.PolizaTodoRiesgo AS 'PolizaTodoRiesgo',
        d.TecnicoMecanica AS 'TecnicoMecanica',
        d.FechaVencimientoTecnicomecanica AS 'FechaVencimientoTecnicomecanica',
        d.SOAT AS 'SOAT',
        d.FechaVencimientoSoat AS 'FechaVencimientoSoat',
        d.TargetaPropiedad AS 'TargetaPropiedad',
        sev.PolizaContractual AS 'PolizaContractual',
        sev.FechaVenPolizaContractual AS 'FechaVenPolizaContractual',
        sev.PolizaExtracontractual AS 'PolizaExtracontractual',
        sev.FechaVenPolizaExtraContractual AS 'FechaVenPolizaExtraContractual',
        sev.FUEC AS 'FUEC',
        sev.TarjetaOperacion AS 'TarjetaOperacion',
        ld.Manijas AS 'Manijas',
        ld.Volante AS 'Volante',
        ld.MandosVolante AS 'MandosVolante',
        ld.Tablero AS 'Tablero',
        ld.Sillas AS 'Sillas',
        ld.CinturonesDeSeguridad AS 'Cinturon De seguridad',
        ld.limpiezaLlantas AS 'limpiezaLlantas',
        ld.ApoyaManos AS 'ApoyaManos',
        ld.CierreDeVentanas AS 'CierreDeVentanas',
        ld.LavadoDiario AS 'LavadoDiario',
        ld.PalancaDeCambio AS 'PalancaDeCambio',
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
      

  
// Crear una hoja de cálculo
$result = $conn->query($sql);
$spreadsheet = generateExcelFile($result);

// Crear un objeto Writer para guardar la hoja de cálculo en un archivo XLSX
$writer = new Xlsx($spreadsheet);

// Nombre del archivo
$filename = 'reporte_registros.xlsx';

// Ruta completa al archivo
$filePath = 'C:\xampp\htdocs\formulario\\' . $filename;

// Guardar el archivo de Excel en el servidor
$writer->save($filePath);

// Descargar el archivo
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header("Content-Disposition: attachment; filename=\"$filename\"");
header('Cache-Control: max-age=0');

readfile($filePath);

// Cerrar la conexión a la base de datos
$conn->close();
?>
