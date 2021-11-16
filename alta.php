<?php
session_start();
include 'head.php';
$ip=0;
$num_inc=0;
$fecha_hora=0;
if(isset($_REQUEST['enviar']))
{
      $tipo=$_REQUEST['tipo'];
      if(isset($_REQUEST['urgente']))
            {
            $urgencia='Si';
            }
            else{
            $urgencia='No';
            }
       $lugar=$_REQUEST['lugar'];
       $descripcion=$_REQUEST['descripcion'];
       //fecha y hpra
       $fecha_hora = date('m-d-Y h:i:s a', time());
       echo 'Fecha y hora actuales'. $fecha_hora.'<br>';
       //ip desde la que envia la incidencia
       $ip=$_SERVER['REMOTE_ADDR'];
       //$num_incidencia=count($_SESSION['incidencias'])+1;
       $num_inc=count($_SESSION['incidencias'])+1;
       //para añadir al array
       $_SESSION['incidencias'][]=array($num_inc,$urgente,$tipo,$fechaHora,$lugar,$ip,$descripcion);
       var_dump($_SESSION['incidencias']);     
  
      
}                                            
 print' 
        <h2 class="postheader">FORMULARIO ALTA INCIDENCIA</h2>
                                     
        <div   class="postcontent"><form action="alta.php" method="post">
            <table align="center" class="content-layout">
              <tr>
              <td align="right"><strong>Urgente? :</strong></td>
              <td>

              <input type="checkbox" name="urgente" value="urg"/>Si											  </td></tr>
              <tr><td align="right"><strong>Tipo :</strong></td><td>
              <div align="left">
                    <select name="tipo">
                      <option value="Basuras">Basuras</option>
                      <option value="Aseo Urbano">Aseo Urbano</option>
                      <option value="Mobiliario Urbano">Mobiliario Urbano</option>
                      <option value="Vandalismo">Vandalismo</option>
                       <option value="Transporte">Transporte</option>
                      <option value="Señales y Semaforos">Señales y Semaforos</option>
                      <option value="Mobiliario Urbano">Otros</option>
                      
                    </select>
              </div></td></tr>
              
              <tr><td align="right"><strong>Lugar :</strong></td><td>
              <div align="left">
                    <input type="text" name="lugar" size=35"/>
              </div></td></tr>
              <tr><td align="right"><strong>Descripcion: </strong></td><td>
              <div align="left">
                    <textarea cols=50 rows=4 name="descripcion"></textarea>
              </div></td></tr>
              <tr ><td colspan="2"><div align="center"><strong>
            <input name="enviar" type="submit" id="enviar" value="Dar de alta"/>
            </strong></div></td></tr>
        </table>
    </form>
        </div>
<div id="imagen1">
        

        </div>        
';

 include 'pie.php';
											
                           