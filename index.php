


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
    <title>Formulario inspeccion vehiculos</title>
</head>
<body>
    <div class="container">
         <div class="row mt-5" >
            <div class=" col-10 card offset-1">
                <div class ="card-header ">
                    <div class="row ">
                        <div class="col-2 encabezado">
                            <img src="./img/inspeccion.png" alt="">
                        </div>
                        <div class="col-8 encabezado">
                            <h3 style="text-align:center;">Formulario inspección Preoperacional De Vehículos</h3> 
                        </div>
                        <div class="col-2 encabezado">
                        </div>
                    </div>
                </div>
                <div class ="card-body">
                    <form class="row g-3 "action="formulario.php" method="POST">
                    <div class="col-md-6">
                        <label for="tituloRegistro">Nombre Del Registro</label>
                        <input type="text" 
                               class="form-control" 
                               id="tituloRegistro" 
                               name="tituloRegistro" 
                               value="Inspección de vehículo"
                               >
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="mail" 
                               class="form-control" 
                               id="email" 
                               name="email"
                               value="correo@correo" 
                               >
                    </div>
                        
                    <div class="col-md-6" >
                        <label for="fechaEjecucion">Fecha de ejecucui&oacute;n:</label>
                        <input type="date"
                               class="form-control"
                               id="fechaEjecucion"
                               name="fechaEjecucion"
                               required>
                    </div>
                    

<h4>DATOS DEL CONDUCTOR </h4>

                    <div class="col-md-6">
                        <label for="nombres">Nombre del conductor</label>
                        <input type="text" 
                               class="form-control" 
                               id="nombres" 
                               name="nombres" 
                               required>
                    </div>
                    <div class="col-md-6">
                        <label for="tipoLicencia">Tipo de licencia</label>
                        <input type="text" 
                               class="form-control" 
                               id="tipoLicencia" 
                               name="tipoLicencia" 
                               required>
                    </div>

<h4>DATOS DEL VEH&Iacute;CULO </h4>

                    <div class="col-md-6">
                        <label for="placa">Placa</label>
                        <input type="text" 
                               class="form-control" 
                               id="placa" 
                               name="placa" 
                               required>
                    </div>
                    <div class="col-md-6">
                        <label for="modelo">Modelo:</label>
                        <input type="text" 
                               class="form-control" 
                               id="modelo" 
                               name="modelo" required>
                    </div>
                    <div class="col-md-6">
                        <label for="tipoVehiculo">Tipo Veh&iacute;culo:</label>
                        <input type="text"
                               class="form-control" 
                               id="tipoVehiculo" 
                               name="tipoVehiculo" 
                               required>
                    </div>

<h4>SISTEMA MEC&Aacute;NICO</h4>
                    
                    <div class="mb-3  col-md-4">
                        <label for="EstadoDeMangueras" 
                               class="form-label">
                               Estado De Mangueras (Desgaste, Fugas)  
                        </label>
                        <select class="form-select" 
                                id="EstadoDeMangueras" 
                                name="EstadoDeMangueras">
                                    <option value=""></option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Desgastado">Desgastado</option>
                                    <option value="Para Cambio">Para Cambio</option>
                        </select>
                     </div>
                     <div class="mb-3  col-md-4">
                        <label for="NivelLiquidoFrenos" 
                               class="form-label">
                               Nivel De L&iacute;quido De Frenos
                        </label>
                        <select class="form-select" 
                                id="NivelLiquidoFrenos" 
                                name="NivelLiquidoFrenos">
                                    <option value=""></option>
                                    <option value="Alto">Alto</option>
                                    <option value="Normal">Normal</option>
                                    <option value="Bajo">Bajo</option>
                        </select>
                     </div>
                     <div class="mb-3  col-md-4">
                        <label for="PedalFreno" 
                               class="form-label">
                               Pedal De Freno
                        </label>
                        <select class="form-select" 
                                id="PedalFreno" 
                                name="PedalFreno">
                                    <option value=""></option>
                                    <option value="Funciona">Funciona</option>
                                    <option value="No Funciona">No Funciona</option>
                        </select>
                     </div>
                     <div class="mb-3  col-md-4">
                        <label for="PedalAcelerador" 
                               class="form-label">
                               Pedal Del Acelerador
                        </label>
                        <select class="form-select" 
                                id="PedalAcelerador" 
                                name="PedalAcelerador">
                                    <option value=""></option>
                                    <option value="Funciona">Funciona</option>
                                    <option value="No Funciona">No Funciona</option>
                        </select>
                     </div>
                    <div class="mb-3  col-md-4">
                        <label for="PedalDelClutch" 
                            class="form-label">
                            Pedal Del Clutch
                        </label>
                        <select class="form-select" 
                                id="PedalDelClutch" 
                                name="PedalDelClutch">
                                    <option value=""></option>
                                    <option value="Funciona">Funciona</option>
                                    <option value="No Funciona">No Funciona</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="descripcionpedal" 
                            class="form-label">
                            Describa La Condición
                        </label>
                        <textarea class="form-control" 
                                id="descripcionpedal" 
                                name="descripcionpedal" 
                                >
                        </textarea>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="EstadoFreno" 
                            class="form-label">
                            Estado De Freno Principal y Emergencias
                        </label>
                        <select class="form-select" 
                                id="EstadoFrenos" 
                                name="EstadoFrenos">
                                    <option value=""></option>
                                    <option value="Funciona">Funciona</option>
                                    <option value="No Funciona">No Funciona</option>
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="PalancaDeCambios" 
                            class="form-label">
                            Palanca De Cambios
                        </label>
                        <select class="form-select" 
                                id="PalancaDeCambios" 
                                name="PalancaDeCambios">
                                    <option value=""></option>
                                    <option value="Funciona">Funciona</option>
                                    <option value="No Funciona">No Funciona</option>
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="DireccionVehiculo" 
                            class="form-label">
                            Direcci&oacute;n Del Veh&iacute;culo
                        </label>
                        <select class="form-select" 
                                id="DireccionVehiculo" 
                                name="DireccionVehiculo">
                                <option value=""></option>
                                <option value="Funciona">Funciona</option>
                                <option value="No Funciona">No Funciona</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="descripciondireccion" 
                            class="form-label">
                            Describa La Condición
                        </label>
                        <textarea class="form-control" 
                                id="descripciondireccion" 
                                name="descripciondireccion" 
                                rows="4">
                        </textarea>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="NivelCombustible" 
                            class="form-label">
                            Nivel De Combustible
                        </label>
                        <select class="form-select" 
                                id="NivelCombustible" 
                                name="NivelCombustible">
                                    <option value=""></option>
                                    <option value="Maximo">M&aacute;ximo</option>
                                    <option value="Medio">Medio</option>
                                    <option value="Bajo">Bajo</option>
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="liqrefrigerante" 
                            class="form-label">
                            Nivel De Liquido refrigerante
                        </label>
                        <select class="form-select" 
                                id="liqrefrigerante" 
                                name="liqrefrigerante">
                                    <option value=""></option>
                                    <option value="Maximo">M&aacute;ximo</option>
                                    <option value="Medio">Medio</option>
                                    <option value="Bajo">Bajo</option>
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="NivelAceiteMotor" 
                            class="form-label">
                            Nivel De Aceite Del Motor
                        </label>
                        <select class="form-select" 
                                id="NivelAceiteMotor" 
                                name="NivelAceiteMotor">
                                    <option value=""></option>
                                    <option value="Maximo">M&aacute;ximo</option>
                                    <option value="Medio">Medio</option>
                                    <option value="Bajo">Bajo</option>
                        </select>
                    </div>

<h4>SISTEMA EL&Eacute;CTRICO</h4>

                    <div class="mb-3  col-md-4">
                        <label for="Cocuyos" 
                               class="form-label">
                               Cocuyos
                        </label>
                        <select class="form-select" 
                                id="Cocuyos" 
                                name="Cocuyos">
                                      <option value=""></option>
                                      <option value="Funciona">Funciona</option>
                                      <option value="No Funciona">No Funciona</option>
                                    
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="Direccionales" 
                               class="form-label">
                               Direccionales
                        </label>
                        <select class="form-select" 
                                id="Direccionales" 
                                name="Direccionales">
                                        <option value=""></option>
                                        <option value="Funciona">Funciona</option>
                                        <option value="No Funciona">No Funciona</option>      
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="Luces" 
                               class="form-label">
                               Luces Altas - Bajas
                        </label>
                        <select class="form-select" 
                                id="Luces" 
                                name="Luces">
                                <option value=""></option>
                                <option value="Funciona">Funciona</option>
                                <option value="No Funciona">No Funciona</option>   
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="LuzFreno" 
                               class="form-label">
                               Luz De Freno
                        </label>
                        <select class="form-select" 
                                id="LuzFreno" 
                                name="LuzFreno">
                                    <option value=""></option>
                                    <option value="Funciona">Funciona</option>
                                    <option value="No Funciona">No Funciona</option>   
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="LuzReversa" 
                               class="form-label">
                               Luz De Reversa
                        </label>
                        <select class="form-select" 
                                id="LuzReversa" 
                                name="LuzReversa">
                                    <option value=""></option>
                                    <option value="Funciona">Funciona</option>
                                    <option value="No Funciona">No Funciona</option>  
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="Claxon" 
                               class="form-label">
                               Claxon
                        </label>
                        <select class="form-select" 
                                id="Claxon" 
                                name="Claxon">
                                    <option value=""></option>
                                    <option value="Funciona">Funciona</option>
                                    <option value="No Funciona">No Funciona</option>  
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="LucesDeParqueo" 
                               class="form-label">
                               Luces De Parqueo
                        </label>
                        <select class="form-select" 
                                id="LucesDeParqueo" 
                                name="LucesDeParqueo">
                                    <option value=""></option>
                                    <option value="Funciona">Funciona</option>
                                    <option value="No Funciona">No Funciona</option>  
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="TestigosTablero" 
                               class="form-label">
                               Testigos (Tablero)
                        </label>
                        <select class="form-select" 
                                id="TestigosTablero" 
                                name="TestigosTablero">
                                    <option value=""></option>
                                    <option value="Funciona">Funciona</option>
                                    <option value="No Funciona">No Funciona</option>
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="EncendidoVehiculo" 
                               class="form-label">
                               Sistema De Encendido De Vehiculo
                        </label>
                        <select class="form-select" 
                                id="EncendidoVehiculo" 
                                name="EncendidoVehiculo">
                                    <option value=""></option>
                                    <option value="Funciona">Funciona</option>
                                    <option value="No Funciona">No Funciona</option>
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="BornesBateria" 
                               class="form-label">
                               Bornes De Bater&iacute;a
                        </label>
                        <select class="form-select" 
                                id="BornesBateria" 
                                name="BornesBateria">
                                    <option value=""></option>
                                    <option value="Funciona">Funciona</option>
                                    <option value="No Funciona">No Funciona</option>
                        </select>
                    </div>

<h4>ESTADO FISICO</h4>

                    <div class="mb-3  col-md-4">
                        <label for="EstadoCinturonSeg" 
                               class="form-label">
                               Estado Cinturones De Seguridad
                        </label>
                        <select class="form-select" 
                                id="EstadoCinturonSeg" 
                                name="EstadoCinturonSeg">
                                    <option value=""></option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Desgastado - Roto">Desgastado - Roto</option>
                                    <option value="No Funciona">No Funciona</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="descripcionestadofisico" 
                               class="form-label">
                               Describa La Condición Del Cinturon
                        </label>
                        <textarea class="form-control" 
                                  id="descripcionestadofisico" 
                                  name="descripcionestadofisico" 
                                  rows="4">
                        </textarea>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="EspejoRetrovisor" 
                               class="form-label">
                               spejo Retrovisor
                        </label>
                        <select class="form-select" 
                                id="EspejoRetrovisor" 
                                name="EspejoRetrovisor">
                                    <option value=""></option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Desgastado - Roto">Desgastado - Roto</option>
                                    <option value="No Funciona">No Funciona</option>
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="espejosLaterales" 
                               class="form-label">
                               Espejos Laterales
                        </label>
                        <select class="form-select" 
                                id="espejosLaterales" 
                                name="espejosLaterales">
                                        <option value=""></option>
                                        <option value="Bueno">Bueno</option>
                                        <option value="Desgastado - Roto">Desgastado - Roto</option>
                                        <option value="No Funciona">No Funciona</option>
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="Limpiabrisas" 
                               class="form-label">
                               Limpiabrisas
                        </label>
                        <select class="form-select" 
                                id="Limpiabrisas" 
                                name="Limpiabrisas">
                                        <option value=""></option>
                                        <option value="Bueno">Bueno</option>
                                        <option value="Desgastado - Roto">Desgastado - Roto</option>
                                        <option value="No Funciona">No Funciona</option>>
                    </select>
                        </select>
                    </div>
                    <div class="mb-3  col-md-8">
                        <label for="EstadoLlantas" 
                               class="form-label">
                               Estado Llantas, incluida Llanta De Repuesto
                                (labrado prof 2mm m&iacute;n y Prsion) 
                        </label>
                        <select class="form-select" 
                                id="EstadoLlantas" 
                                name="EstadoLlantas">
                                    <option value=""></option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Desgastado - Roto">Desgastado - Roto</option>
                                    <option value="No Funciona">No Funciona</option>
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="OrdenYAseo" 
                               class="form-label">
                               Orden y Aseo Personal 
                        </label>
                        <select class="form-select" 
                                id="OrdenYAseo" 
                                name="OrdenYAseo">
                                    <option value=""></option>
                                    <option value="Bueno">Bueno</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Malo">Malo</option>
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="Rines" 
                               class="form-label">
                               Rines
                        </label>
                        <select class="form-select" 
                                id="Rines" 
                                name="Rines">
                                    <option value=""></option>
                                    <option value="Buenos">Buenos</option>
                                    <option value="Desgastados - Rotos">Desgastados - Rotos</option>
                                    <option value="No Funcionan">No Funcionan</option>
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="Vidrios" 
                               class="form-label">
                               Vidrios
                        </label>
                        <select class="form-select" 
                                id="Vidrios" 
                                name="Vidrios">
                                    <option value=""></option>
                                    <option value="Buenos">Buenos</option>
                                    <option value="Desgastados - Rotos">Desgastados - Rotos</option>
                                    <option value="No Funcionan">No Funcionan</option>
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="latoneriaPintura" 
                               class="form-label">
                               Latoner&iacute; y Pintura
                        </label>
                        <select class="form-select" 
                                id="latoneriaPintura" 
                                name="latoneriaPintura">
                                <option value=""></option>
                                    <option value="Buenos">Buenos</option>
                                    <option value="Desgastados - Rotos">Desgastados - Rotos</option>
                                    <option value="No Funcionan">No Funcionan</option>
                        </select>
                    </div>

<h4>EQUIPO DE CARRETERAS</h4>

                    <div class="mb-3  col-md-12">
                        <label for="botiquin" 
                               class="form-label">
                            Botiquin de acuerdo a Res. 1565 de 2014: Jab&oacute;n, Gasas, Curas, Venda El&aacute;stica, 
                            Micropore, Algod&oacute;n Paquete (25gr), Acetaminifen tabletas, Mareol tabletas,
                            Sales De Rehidratacion Oral, Bajalenguas, Suero Fisiol&ogico Bolsa (250 ml), Guantes L&aacute;tex
                            Desechables, Toallas Higienicas, Tijeras y Term&oacute;metro Oral.
                            
                        </label>
                            <select class="form-select" 
                                    id="botiquin" 
                                    name="botiquin">
                                        <option value=""></option>
                                        <option value="Tiene">Tiene</option>
                                        <option value="No Tiene">No Tiene</option>
                                        <option value="Incompleto">Incompleto</option>
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="Cruceta"
                               class="form-label">
                               Cruceta
                        </label>
                        <select class="form-select" 
                                id="Cruceta" 
                                name="Cruceta">
                                        <option value=""></option>
                                        <option value="Tiene">Tiene</option>
                                        <option value="No Tiene">No Tiene</option>
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="Extintor" 
                                class="form-label">
                                Extintor Vigente
                        </label>
                        <select class="form-select" 
                                id="Extintor" 
                                name="Extintor">
                                        <option value=""></option>
                                        <option value="Tiene">Tiene</option>
                                        <option value="No Tiene">No Tiene</option>
                                        <option value="Despresurizado">Despresurizado</option>
                                        <option value="Vencido">Vencido</option>
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="Gato" 
                               class="form-label">
                               Gato
                        </label>
                        <select class="form-select" 
                                id="Gato" 
                                name="Gato">
                                        <option value=""></option>
                                        <option value="Tiene">Tiene</option>
                                        <option value="No Tiene">No Tiene</option>
                                        <option value="Incompleto">Incompleto</option>
                                        
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="Linterna" 
                               class="form-label">
                               Linterna Con Baterias
                        </label>
                        <select class="form-select" 
                                id="Linterna" 
                                name="Linterna">
                                        <option value=""></option>
                                        <option value="Tiene">Tiene</option>
                                        <option value="No Tiene">No Tiene</option>
                                        <option value="Incompleto">Incompleto</option> 
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="Tacos" 
                               class="form-label">
                               Tacos
                        </label>
                        <select class="form-select" 
                                id="Tacos" 
                                name="Tacos">
                                        <option value=""></option>
                                        <option value="Tiene">Tiene</option>
                                        <option value="No Tiene">No Tiene</option>
                                        <option value="Incompleto">Incompleto</option>
                                
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="Chaleco" 
                               class="form-label">
                               Chaleco
                        </label>
                        <select class="form-select" 
                                id="Chaleco" 
                                name="Chaleco">
                                        <option value=""></option>
                                        <option value="Tiene">Tiene</option>
                                        <option value="No Tiene">No Tiene</option>
                                        <option value="Incompleto">Incompleto</option>
                        </select>
                    </div>
                    <div class="mb-3  col-md-4">
                        <label for="Conos" 
                               class="form-label">
                               Tri&aacute;ngulos o conos
                        </label>
                        <select class="form-select" 
                                id="Conos" 
                                name="Conos">
                                        <option value=""></option>
                                        <option value="Tiene">Tiene</option>
                                        <option value="No Tiene">No Tiene</option>
                                        <option value="Incompleto">Incompleto</option>
                                
                        </select>
                    </div>
                    <div class="mb-3  col-md-6">
                        <label for="Llaves" class="form-label">Llaves Fijas o Expanci&oacute;n, Alicates Destornillador</label>
                            <select class="form-select" id="Llaves" name="Llaves">
                                        <option value=""></option>
                                        <option value="Tiene">Tiene</option>
                                        <option value="No Tiene">No Tiene</option>
                                        <option value="Incompleto">Incompleto</option>
                                
                            </select>
                    </div>
                    <h4>DOCUMENTOS</h4>
                
                    <div class="mb-3  col-md-6">
                        <label for="LicenciaConducir" 
                               class="form-label">
                               Licencia De Conducci&oacute;n Acorde Al Veh&iacute;culo
                        </label>
                        <select class="form-select" 
                                id="LicenciaConducir" 
                                name="LicenciaConducir">
                                        <option value=""></option>
                                        <option value="Sí">S&iacute;</option>
                                        <option value="No">No </option>                          
                        </select>
                    </div>
                    <div class="mb-3  col-md-6">
                        <label for="PolizaTodoRiesgo" 
                               class="form-label">
                               P&oacute;liza Todo Riesgo
                        </label>
                        <select class="form-select" 
                                id="PolizaTodoRiesgo" 
                                name="PolizaTodoRiesgo">
                                        <option value=""></option>
                                        <option value="Sí">S&iacute;</option>
                                        <option value="No">No </option>                            
                        </select>
                    </div>
                    <div class="mb-3  col-md-6">
                        <label for="TecnicoMecanica" 
                               class="form-label">
                               Revision T&eacute;cnico mec&aacute;nica
                        </label>
                        <select class="form-select" id="tecnicoMecanica" name="tecnicoMecanica">
                                        <option value=""></option>
                                        <option value="Sí">S&iacute;</option>
                                        <option value="No">No </option>                         
                        </select>
                    </div>
                    <div class="col-md-6" >
                        <label for="fechaVencimientoTecnicoMecanica">
                            Fecha de Vencimiento:
                        </label>
                        <input type="date" 
                                class="form-control" 
                                id="fechaVencimientoTecnicoMecanica" 
                                name="fechaVencimientoTecnicoMecanica" 
                                required>
                    </div>
                    <div class="mb-3  col-md-6">
                        <label for="soat" 
                               class="form-label">
                               S.O.A.T
                        </label>
                        <select class="form-select" id="soat" name="soat">
                                        <option value=""></option>
                                        <option value="Sí">S&iacute;</option>
                                        <option value="No">No </option>                           
                        </select>
                    </div>
                    <div class="col-md-6" >
                        <label for="fechaVencimientoSoat">
                                Fecha de Vencimiento SOAT:
                        </label>
                        <input type="date" 
                               class="form-control" 
                               id="fechaVencimientoSoat" 
                               name="fechaVencimientoSoat" 
                               required>
                    </div>
                    <div class="mb-3  col-md-6">
                        <label for="tarjetaPropiedad" 
                               class="form-label">
                               Tarjeta De Propiedad Del Veh&iacute;culo
                        </label>
                        <select class="form-select" 
                                id="tarjetaPropiedad" 
                                name="tarjetaPropiedad">
                                        <option value=""></option>
                                        <option value="Sí">S&iacute;</option>
                                        <option value="No">No </option>                          
                        </select>
                    </div>

<h4>SERVICIO ESPECIAL</h4>

                    <div class="mb-3  col-md-6">
                        <label for="polizaContractual" 
                               class="form-label">
                               P&oacute;liza Contractual
                        </label>
                        <select class="form-select" 
                                id="polizaContractual" 
                                name="polizaContractual">
                                        <option value=""></option>
                                        <option value="Sí">S&iacute;</option>
                                        <option value="No">No </option>    
                                        <option value="No Requiere">No Requiere</option>                       
                        </select>
                    </div>
                    <div class="col-md-6" >
                        <label for="fechaVenPolizaContractual">
                            Fecha de Vencimiento:
                        </label>
                        <input type="date" 
                               class="form-control" 
                               id="fechaVenPolizaContractual" 
                               name="fechaVenPolizaContractual" 
                               required>
                    </div>
                    <div class="mb-3  col-md-6">
                        <label for="polizaExtracontractual" 
                               class="form-label">
                               P&oacute;liza Extraontractual
                        </label>
                        <select class="form-select" 
                                id="polizaExtracontractual" 
                                name="polizaExtracontractual">
                                        <option value=""></option>
                                        <option value="Sí">S&iacute;</option>
                                        <option value="No">No </option>    
                                        <option value="No Requiere">No Requiere</option>                                             
                        </select>
                    </div>
                    <div class="col-md-6" >
                        <label for="fechaVenPolizaExtraContractual">
                                Fecha de Vencimiento:
                        </label>
                        <input type="date" 
                               class="form-control" 
                               id="fechaVenPolizaExtraContractual" 
                               name="fechaVenPolizaExtraContractual" 
                               required>
                    </div>
                    <div class="mb-3  col-md-6">
                        <label for="FUEC" 
                                class="form-label">
                                FUEC
                        </label>
                        <select class="form-select" 
                                id="FUEC" 
                                name="FUEC">
                                            <option value=""></option>
                                            <option value="Sí">S&iacute;</option>
                                            <option value="No">No </option>    
                                            <option value="No Requiere">No Requiere</option>                                             
                        </select>
                    </div>
                    <div class="mb-3  col-md-6">
                        <label for="tarjetaOperacion" 
                               class="form-label">
                               Tarjeta De Operacion
                        </label>
                        <select class="form-select" 
                                id="tarjetaOperacion" 
                                name="tarjetaOperacion">
                                            <option value=""></option>
                                            <option value="Sí">S&iacute;</option>
                                            <option value="No">No </option>    
                                            <option value="No Requiere">No Requiere</option>                                             
                        </select>
                    </div>

<h4>LIMPIEZA Y DESINFECCI&Oacute;N</h4>

                    <div class="mb-3  col-md-6">
                        <label for="Manijas" 
                               class="form-label">
                               Manijas
                        </label>
                        <select class="form-select" 
                                id="Manijas" 
                                name="Manijas">
                                            <option value=""></option>
                                            <option value="Sí">S&iacute;</option>
                                            <option value="No">No </option>                       
                        </select>
                    </div>
                    <div class="mb-3  col-md-6">
                        <label for="Volante" 
                               class="form-label">
                               Volante
                        </label>
                        <select class="form-select" 
                                id="Volante" 
                                name="Volante">
                                            <option value=""></option>
                                            <option value="Sí">S&iacute;</option>
                                            <option value="No">No </option>                          
                        </select>
                    </div>
                    <div class="mb-3  col-md-6">
                        <label for="mandosVolante" 
                               class="form-label">
                               Mandos Del Volante
                        </label>
                        <select class="form-select" 
                                id="mandosVolante" 
                                name="mandosVolante">
                                            <option value=""></option>
                                            <option value="Sí">S&iacute;</option>
                                            <option value="No">No </option>                         
                        </select>
                    </div>
                    <div class="mb-3  col-md-6">
                         <label for="tablero" 
                                class="form-label">
                                Tablero
                        </label>
                        <select class="form-select" 
                                id="tablero" 
                                name="tablero">
                                            <option value=""></option>
                                            <option value="Sí">S&iacute;</option>
                                            <option value="No">No </option>                        
                        </select>
                    </div>
                    
                    <div class="mb-3  col-md-6">
                        <label for="sillas" 
                               class="form-label">
                               Sillas
                        </label>
                        <select class="form-select" 
                                id="sillas" 
                                name="sillas">
                                            <option value=""></option>
                                            <option value="Sí">S&iacute;</option>
                                            <option value="No">No </option>                        
                        </select>
                    </div>
                    <div class="mb-3  col-md-6">
                        <label for="cinturonesSeguridad" 
                               class="form-label">
                               Limpieza Cinturones De Seguridad
                        </label>
                        <select class="form-select" 
                                id="cinturonesSeguridad" 
                                name="cinturonesSeguridad">
                                            <option value=""></option>
                                            <option value="Sí">S&iacute;</option>
                                            <option value="No">No </option>                        
                        </select>
                    </div>
                    <div class="mb-3  col-md-6">
                        <label for="limpLlantas" 
                               class="form-label">
                               Limpieza De Llantas
                        </label>
                        <select class="form-select" 
                                id="limpLlantas" 
                                name="limpLlantas">
                                            <option value=""></option>
                                            <option value="Sí">S&iacute;</option>
                                            <option value="No">No </option>                           
                        </select>
                    </div>
                    <div class="mb-3  col-md-6">
                        <label for="apoyaManos" 
                               class="form-label">
                               Apoya Manos
                        </label>
                        <select class="form-select" 
                                id="apoyaManos" 
                                name="apoyaManos">
                                            <option value=""></option>
                                            <option value="Sí">S&iacute;</option>
                                            <option value="No">No </option>                          
                        </select>
                    </div>
                    <div class="mb-3  col-md-6">
                        <label for="cierreVentanas"
                               class="form-label">
                               Cierrres De Ventana
                        </label>
                        <select class="form-select" 
                                id="cierreVentanas"
                                name="cierreVentanas">
                                                <option value=""></option>
                                                <option value="Sí">S&iacute;</option>
                                                <option value="No">No </option>                        
                        </select>
                    </div>
                    <div class="mb-3  col-md-6">
                        <label for="lavadoDiario" 
                                class="form-label">
                                Lavado Diario
                        </label>
                        <select class="form-select" 
                                id="lavadoDiario" 
                                name="lavadoDiario">
                                                <option value=""></option>
                                                <option value="Sí">S&iacute;</option>
                                                <option value="No">No </option>                       
                        |   </select>
                    </div>
                    <div class="mb-3  col-md-6">
                        <label for="palancaCambio" 
                               class="form-label">
                               Palanca Control De Cambios
                        </label>
                        <select class="form-select" 
                                id="palancaCambio" 
                                name="palancaCambio">
                                                <option value=""></option>
                                                <option value="Sí">S&iacute;</option>
                                                <option value="No">No </option>                        
                        </select>
                    </div>

<h4>KILOMETRAJE</h4>

                    <div class="col-md-6">
                        <label for="kilometrajeInicio">
                                Kilometraje - Inicio De Jornada
                        </label>
                        <input type="text" 
                               class="form-control" 
                               id="kilometrajeInicio" 
                               name="kilometrajeInicio" 
                               required>
                    </div>
                    <div class="col-md-6" >
                        <label for="fechaInicio">
                               Fecha de ejecucui&oacute;n:
                        </label>
                        <input type="date" 
                               class="form-control" 
                               id="fechaInicio" 
                               name="fechaInicio" 
                               required>
                    </div>

                    <div class="mb-3 " >
                        <label for="firma" class="form-label">Firme Aqui:</label>
                        <div   class="signature mb-2" style="width: 100%;height: 200px;">
                            <canvas id="signature-canvas" style="border:1px dashed black; width: 100%;height: 200px;"></canvas>
                            <button type="button" class="btn btn-primary" id="limpiarFirma">Limpiar Firma</button>
                        </div>
                        <input type="hidden" id="firma" name="firma">
                    </div>
                    <br>
                    <br>
                <script>
                        // Configuración de Signature Pad
                            var canvas = document.querySelector("canvas");
                                canvas.height = canvas.offsetHeight;
                                canvas.width = canvas.offsetWidth;
                            var signaturePad = new SignaturePad(canvas);
                            var limpiarFirma = document.getElementById("limpiarFirma");
                            var firmaInput = document.getElementById("firma");
                
                        //Limpiar la firma
                            limpiarFirma.addEventListener("click", function () {
                            signaturePad.clear();
                    });
                
                        // Convertir la firma en una imagen base64 cuando se envía el formulario
                            document.querySelector("form").addEventListener("submit", function (e) {
                            e.preventDefault();
                            var firmaData = signaturePad.toDataURL();
                            firmaInput.value = firmaData;
                            this.submit();
                        });
            </script>
                    <div>
                    <button type="submit" class="btn btn-primary mt-2">Enviar</button>
                    <br>
                    
                    </form>   
                    
                      <!-- Div para mostrar el mensaje de éxito y el botón de limpieza -->
    <div id="mensajeDiv" style="display: none;">
        <p id="mensajeTexto"></p>
        <button id="nuevoBtn">Nuevo</button>
    </div>

    <script>
        // JavaScript para mostrar el mensaje y limpiar el formulario
        document.addEventListener("DOMContentLoaded", function() {
            const formulario = document.getElementById("miFormulario");
            const mensajeDiv = document.getElementById("mensajeDiv");
            const mensajeTexto = document.getElementById("mensajeTexto");
            const nuevoBtn = document.getElementById("nuevoBtn");

            formulario.addEventListener("submit", function(event) {
                event.preventDefault(); // Evita el envío del formulario por defecto

                // Envía los datos del formulario a través de AJAX o como prefieras
                // Aquí puedes realizar la petición a "procesar_formulario.php" y manejar la respuesta

                // Simulación de éxito
                setTimeout(function() {
                    // Muestra el mensaje
                    mensajeTexto.textContent = "Datos guardados con éxito.";
                    mensajeDiv.style.display = "block";
                }, 1000); // Puedes ajustar el tiempo según tus necesidades

                // Limpia el formulario
                formulario.reset();
            });

            nuevoBtn.addEventListener("click", function() {
                // Oculta el mensaje y restablece el formulario
                mensajeDiv.style.display = "none";
                formulario.reset();
            });
        });
    </script>

                    </div>                
                    <div>
            
            <div>
        </div>
    
      
    </body>
    </html>
