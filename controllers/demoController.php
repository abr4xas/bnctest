<?php

require_once $_SERVER['DOCUMENT_ROOT']."/DEMOPHP/tools/demoTools.php";
require_once $_SERVER['DOCUMENT_ROOT']."/DEMOPHP/Models/demoModel.php";
session_start();
if($_GET){
	switch ($_GET["consul"]) {
		case -1:
			
					echo "
          <div class='m-3 col-md-12 row justify-content-center'>
          <div class='col-md-11 mb-3'>
            <label for='url' class='form-label'> Dirección URL</label>
            <input type='text' class='form-control' id='url' value='http://172.31.250.56:60785/Api/Auth/LogOn'>
          </div>
          <div class='col-md-5'>
            <label for='billetera' class='form-label'> ClientGUID</label>
            <input type='text' class='form-control' id='billetera' value='6D157B1A-6780-4070-A91D-2D127F900A7B'>
          </div>
          <div class='col-md-6'>
            <label for='llave' class='form-label'> Llave Maestra</label>
            <input type='text' class='form-control' id='llave' value='1624dd7d6ba352ebc9f4c80292991975'>
          </div>
          <hr class='hr mt-3'>
        </div>

        <input type='hidden' value='".$_GET["consul"]."' id='item'>
      	<input type='button' class='btn btn-primary btn-G itm w-25' id='add' value='Enviar'>
		            ";
		break;
    case -2:
      echo "
                <h4 class='h1-G'>VPOS</h4>
                <input type='hidden' value='".$_GET["consul"]."' id='item'>
              
            <div class='m-3 col-md-12'>
              <div class='d-flex'>
                <div class='col-md-3 mb-3 me-3'>
                  <label for='identificador' class='form-label'> Identificador Transacciones</label>
                  <input type='text' class='form-control' id='identificador'>
                </div>
                <div class='col-md-2 mb-3 me-3'>
                  <label for='monto' class='form-label'>Monto</label>
                  <input type='number' class='form-control' id='monto'>
                </div>
                <div class='col-md-2 mb-3 me-3'>
                  <label for='tipTarjeta' class='form-label'>Tipo Tarjeta</label>
                  <select name='choice' class='form-control' id='tipTarjeta' type='number'>
                  <option value='1'>VISA</option>
                  <option value='2' selected>MasterCard</option>
                  <option value='3'>Debito Maestro</option>
                  </select>
                </div>
                <div class='col-md-2 mb-3 me-3'>
                  <label for='tarjeta' class='form-label'>No.Tarjeta</label>
                  <input type='number' class='form-control' id='tarjeta'>
                </div>
                <div class='col-md-2 mb-3'>
                  <label for='fechExp' class='form-label'>fecha Expiración</label>
                  <input type='number' class='form-control' id='fechExp'>
                </div>
              </div>

              <div class='d-flex'>
              <div class='col-md-3 mb-3 me-3'>
                <label for='nomTarjeta' class='form-label'>Nombre Tarjetahabiente</label>
                <input type='text' class='form-control' id='nomTarjeta'>
              </div>
              <div class='col-md-2 mb-3 me-3'>
                <label for='tipCuenta' class='form-label'>Tipo Cuenta</label>
                <select name='choice' class='form-control' id='tipCuenta' type='number'>
                 <option value='00'>00-Principal</option>
                 <option value='10' selected>10-Ahorro</option>
                 <option value='20'>20-Corriente</option>
              </select>
              </div>
              <div class='col-md-1 mb-3 me-2'>
                <label for='cvv' class='form-label'>CVV</label>
                <input type='number' class='form-control' id='cvv'>
              </div>
              <div class='col-md-1 mb-3 me-2'>
                <label for='pin' class='form-label'>Clave Pin</label>
                <input type='number' class='form-control' id='pin'>
              </div>
              <div class='col-md-2 mb-3 me-3'>
                <label for='identificacion' class='form-label'>Identificación</label>
                <input type='number' class='form-control' id='identificacion'>
              </div>
              <div class='col-md-2 mb-3'>
                <label for='afiliacion' class='form-label'>No. Afiliación</label>
                <input type='number' class='form-control' id='afiliacion'>
              </div>
            </div>
              <div class='col-md-12 mb-3'>
              <input type='button' class='btn btn-primary btn-G itm2 w-25' id='add' value='Enviar'>
              </div>
            </div>        
            ";
    break;
    case -3:
      echo "<h4 class='h1-G'>P2P</h4>
      <input type='hidden' value='".$_GET["consul"]."' id='item'>
    
  <div class='m-3 col-md-12'>
    <div class='d-flex'>
      <div class='col-md-5 mb-3 me-3'>
        <label for='beneficiario' class='form-label'>Nombre Beneficiario</label>
        <input type='text' class='form-control' id='beneficiario'>
      </div>
      <div class='col-md-3 mb-3 me-3'>
        <label for='banco' class='form-label'>Banco Beneficiario</label>
        <input type='number' class='form-control' id='banco'>
      </div>
      <div class='col-md-3 mb-3 me-3'>
        <label for='monto' class='form-label'>Monto</label>
        <input type='number' class='form-control' id='monto'>
      </div>
    </div>

    <div class='d-flex'>
      <div class='col-md-3 mb-3 me-2'>
        <label for='telefono' class='form-label'>Telefono Beneficiario</label>
        <input type='number' class='form-control' id='telefono'>
      </div>
      <div class='col-md-2 mb-3 me-2'>
        <label for='cedula' class='form-label'>Cédula Beneficiario</label>
        <input type='number' class='form-control' id='cedula'>
      </div>
      <div class='col-md-3 mb-3 me-3'>
        <label for='email' class='form-label'>Email Beneficiario</label>
        <input type='email' class='form-control' id='email'>
      </div>
      <div class='col-md-3 mb-3 me-3'>
        <label for='descripcion' class='form-label'>Descripción</label>
        <input type='text' class='form-control' id='descripcion'>
      </div>
    </div>
    <div class='col-md-12 mb-3'>
    <input type='button' class='btn btn-primary btn-G itm3 w-25' id='add' value='Enviar'>
    </div>
  </div>";
    break;
    case -4:
      echo "<h4 class='h1-G'>C2P</h4>
      <input type='hidden' value='".$_GET["consul"]."' id='item'>
    
  <div class='m-3 col-md-12'>
    <div class='d-flex'>
      <div class='col-md-4 mb-3 me-2'>
        <label for='telefono' class='form-label'>Teléfono Deudor</label>
        <input type='number' class='form-control' id='telefono'>
      </div>
      <div class='col-md-4 mb-3 me-2'>
        <label for='cedula' class='form-label'>Cédula Deudor</label>
        <input type='number' class='form-control' id='cedula'>
      </div>
      <div class='col-md-4 mb-3 me-2'>
        <label for='banco' class='form-label'>Código Banco</label>
        <input type='number' class='form-control' id='banco'>
      </div>
    </div>

    <div class='d-flex'>
      <div class='col-md-4 mb-3 me-2'>
        <label for='token' class='form-label'>Token</label>
        <input type='text' class='form-control' id='token'>
      </div>
      <div class='col-md-4 mb-3 me-2'>
        <label for='terminal' class='form-label'>Terminal</label>
        <input type='number' class='form-control' id='terminal'>
      </div>
      <div class='col-md-4 mb-3 me-2'>
        <label for='monto' class='form-label'>Monto</label>
        <input type='number' class='form-control' id='monto'>
      </div>
    </div>
    <div class='col-md-12 mb-3'>
    <input type='button' class='btn btn-primary btn-G itm4 w-25' id='add' value='Enviar'>
    </div>
  </div>";
    break;
    case -5:
      echo "<h4 class='h1-G'>Reversar C2P</h4>
      <input type='hidden' value='".$_GET["consul"]."' id='item'>
    
  <div class='m-3 col-md-12'>
    <div class='d-flex'>
      <div class='col-md-5 mb-3 me-2'>
        <label for='transa' class='form-label'>transacción a Reversar</label>
        <input type='number' class='form-control' id='transa'>
      </div>
      <div class='col-md-4 mb-3 me-2'>
        <label for='terminal' class='form-label'>Terminal</label>
        <input type='number' class='form-control' id='terminal'>
      </div>
    </div>

    <div class='d-flex'>
      <div class='col-md-9 mb-3 me-2'>
        <label for='monto' class='form-label'>monto</label>
        <input type='text' class='form-control' id='monto'>
      </div>
    </div>
    <div class='col-md-12 mb-3'>
    <input type='button' class='btn btn-primary btn-G itm5 w-25' id='add' value='Enviar'>
    </div>
  </div>";
    break;
    case -6:
      echo "<h4 class='h1-G'>Posición</h4>
      <input type='hidden' value='".$_GET["consul"]."' id='item'>
    
  <div class='m-3 col-md-12'>
    <div class='d-flex'>
      <div class='col-md-10 mb-3 me-2'>
        <label for='identi' class='form-label'>Identificación</label>
        <input type='number' class='form-control' id='identi'>
      </div>
    </div>

    <div class='d-flex'>
      <div class='col-md-10 mb-3 me-2'>
        <label for='cuenta' class='form-label'>Nro. Cuenta:</label>
        <input type='number' class='form-control' id='cuenta'>
      </div>
    </div>
    <div class='d-flex'>
      <div class='col-md-2 mb-3 me-3'>
          <label for='ope' class='form-label'>Tipo de Operación</label>
          <select name='choice' class='form-control' id='ope'>
            <option value='0'>Historico</option>
            <option value='1'>En Linea </option>
          </select>
      </div>
    </div>

    <div class='col-md-12 mb-3 mt-3'>
    <input type='button' class='btn btn-primary btn-G itm6 w-25' id='add' value='Enviar'>
    </div>
  </div>";
    break;
}
}

if($_POST){
	switch ($_POST["consul"]) {
		case -1://Autenticación
      
      //datos
      $clienteGUID = $_POST["cliente"];
      $_SESSION['clienteGUID'] = $clienteGUID;
      //$cliente = '{"ClientGUID":"'. $_POST["cliente"].'"}';
      $cliente = "{'ClientGUID':'$_POST["cliente"]'}";
      $Masterkey=$_POST["llave"];

      //value
      $value = encrypt($cliente,$Masterkey);

      //validation
      $validation = createHash($cliente);
      $_SESSION['validation'] = $validation;
      //solicitud
      $solicitud = array("ClientGUID"=>$clienteGUID,"value"=>$value,"Validation"=>$validation,"Reference"=>'',"swTestOperation"=>false);

      $jsonSolicitud = json_encode($solicitud);
      
 
      $gurl = $_POST["url"];  

      $gResult = gPost($gurl,$jsonSolicitud);
      $resultado = json_decode($gResult,true);

      echo "<h4>Enviado:</h4>
      <table class='table'>
        <thead>
          <tr>
            <th scope='col'>Request</th>
            <th scope='col'>Value</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope='row'>ClientGUID</th>
            <td style='max-width: 350px;'>
            ".$solicitud["ClientGUID"]."
            </td>
          </tr>
          <tr>
            <th scope='row'>Value</th>
            <td style='max-width: 350px;'>
            ".$solicitud["value"]."
            </td>
          </tr>
          <tr>
           <th scope='row'>Validation</th>
           <td style='max-width: 350px;'>
           ".$solicitud["Validation"]."
           </td>
          </tr>
          <tr>
          <th scope='row'>Validation</th>
          <td>
          ".$solicitud["Reference"]."
          </td>
         </tr>
         <tr>
         <th scope='row'>swTestOperation</th>
         <td>
         False
         </td>
        </tr>
        </tbody>
      </table>
      ";
      
      echo "<h4>Recibido:</h4>";
      echo "
      
      <table class='table'>
        <thead>
          <tr>
            <th scope='col'>Request</th>
            <th scope='col'>Value</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope='row'>Respuesta</th>
            <td style='max-width: 220px;'>";
        print_r($gResult);
        echo"</td>
          </tr>
        </tbody>
      </table>
      ";
      $ej = proSession($resultado['value'],$Masterkey);
   	break;
    case -2://VPOS
      $identificador=$_POST["identificador"];
      $monto=floatval($_POST["monto"]);
      $tipTarjeta=intval($_POST["tipTarjeta"]);
      $tarjeta=intval($_POST["tarjeta"]);
      $fechExp=intval($_POST["fechExp"]);
      $nomTarjeta= $_POST["nomTarjeta"];
      $tipCuenta=intval($_POST["tipCuenta"]);
      $cvv=intval($_POST["cvv"]);
      $pin=intval($_POST["pin"]);
      $identificacion=intval($_POST["identificacion"]);
      $afiliacion=intval($_POST["afiliacion"]);

      $soliVpos = array("TransactionIdentifier"=>$identificador,"Amount"=>$monto,"idCardType"=>$tipTarjeta,"CardNumber"=>$tarjeta,"dtExpiration"=>$fechExp,"CardHolderName"=>$nomTarjeta,"AccountType"=>$tipCuenta,"CVV"=>$cvv,"CardPIN"=>$pin,"CardHolderID"=>$identificacion,"AffiliationNumber"=>$afiliacion);
      $jsonVpos = json_encode($soliVpos);
      $vPos_value = encrypt($jsonVpos,$_SESSION['WorkingKey']);
      $vPos_referencia = refere();
      $vPos_validation = createHash($jsonVpos);
      $vPos_solicitud = array("ClientGUID"=>$_SESSION['clienteGUID'],"value"=>$vPos_value,"Validation"=>$vPos_validation,"Reference"=>$vPos_referencia,"swTestOperation"=>false);

      $jsonSolicitud = json_encode($vPos_solicitud);
      $gurl = "http://172.31.250.56:60785/api/Transaction/Send";
      $gResult = gPost($gurl,$jsonSolicitud);
      echo "<h4>Enviado:</h4>
      <table class='table'>
        <thead>
          <tr>
            <th scope='col'>Request</th>
            <th scope='col'>Value</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope='row'>ClientGUID</th>
            <td style='max-width: 350px;'>
            ".$vPos_solicitud["ClientGUID"]."
            </td>
          </tr>
          <tr>
            <th scope='row'>Value</th>
            <td style='max-width: 350px;'>
            ".$vPos_solicitud["value"]."
            </td>
          </tr>
          <tr>
           <th scope='row'>Validation</th>
           <td style='max-width: 350px;'>
           ".$vPos_solicitud["Validation"]."
           </td>
          </tr>
          <tr>
          <th scope='row'>Validation</th>
          <td>
          ".$vPos_solicitud["Reference"]."
          </td>
         </tr>
         <tr>
         <th scope='row'>swTestOperation</th>
         <td>
         False
         </td>
        </tr>
        </tbody>
      </table>
      ";
      
      echo "<h4>Recibido:</h4>";
      echo "
      
      <table class='table'>
        <thead>
          <tr>
            <th scope='col'>Request</th>
            <th scope='col'>Value</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope='row'>Respuesta</th>
            <td style='max-width: 220px;'>";
        print_r($gResult);
        echo"</td>
          </tr>
        </tbody>
      </table>
      ";
    break;
    case -3://P2P
                //valores
        $beneficiario = $_POST["beneficiario"];
        $banco = intval($_POST["banco"]);
        $monto = floatval($_POST["monto"]);
        $telefono = $_POST["telefono"];
        $cedula = $_POST["cedula"];
        $email = $_POST["email"];
        $descripcion = $_POST["descripcion"];

        //armar array
        $soliP2p = array("BeneficiaryBankCode"=>$banco,
                         "BeneficiaryCellPhone"=>$telefono,
                         "BeneficiaryID"=>$cedula,
                         "BeneficiaryName"=>$beneficiario,
                         "Amount"=>$monto,
                         "Description"=>$descripcion,
                         "BeneficiaryEmail"=>$email);
        //armar Json
        $jsonP2p = json_encode($soliP2p);
        //Value
        $p2p_value = encrypt($jsonP2p,$_SESSION['WorkingKey']);
        //referencia
        $p2p_referencia = refere();
        //validation
        $p2p_validation = createHash($jsonP2p);
        //Solicitud
        $P2p_solicitud = array("ClientGUID"=>$_SESSION['clienteGUID'],"value"=>$p2p_value,"Validation"=>$p2p_validation,"Reference"=>$p2p_referencia,"swTestOperation"=>false);
        $jsonSolicitud = json_encode($P2p_solicitud);

        $gurl = "http://172.31.250.56:60785/api/MobPayment/SendP2P";
        $gResult = gPost($gurl,$jsonSolicitud);
        echo "<h4>Enviado:</h4>
      <table class='table'>
        <thead>
          <tr>
            <th scope='col'>Request</th>
            <th scope='col'>Value</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope='row'>ClientGUID</th>
            <td style='max-width: 350px;'>
            ".$P2p_solicitud["ClientGUID"]."
            </td>
          </tr>
          <tr>
            <th scope='row'>Value</th>
            <td style='max-width: 350px;'>
            ".$P2p_solicitud["value"]."
            </td>
          </tr>
          <tr>
           <th scope='row'>Validation</th>
           <td style='max-width: 350px;'>
           ".$P2p_solicitud["Validation"]."
           </td>
          </tr>
          <tr>
          <th scope='row'>Validation</th>
          <td>
          ".$P2p_solicitud["Reference"]."
          </td>
         </tr>
         <tr>
         <th scope='row'>swTestOperation</th>
         <td>
         False
         </td>
        </tr>
        </tbody>
      </table>
      ";
      
      echo "<h4>Recibido:</h4>";
      echo "
      
      <table class='table'>
        <thead>
          <tr>
            <th scope='col'>Request</th>
            <th scope='col'>Value</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope='row'>Respuesta</th>
            <td style='max-width: 220px;'>";
        print_r($gResult);
        echo"</td>
          </tr>
        </tbody>
      </table>
      ";
    break;
    case -4://C2P
        //valores
        $telefono = $_POST["telefono"];
        $cedula = $_POST["cedula"];
        $banco = intval($_POST["banco"]);
        $token = $_POST["token"];
        $terminal = $_POST["terminal"];
        $monto = floatval($_POST["monto"]);

        //armar array
        $soliC2p = array("DebtorBankCode"=>$banco,
                         "DebtorCellPhone"=>$telefono,
                         "DebtorID"=>$cedula,
                         "Amount"=>$monto,
                         "Token"=>$token,
                         "Terminal"=>$terminal
                         );
        //armar Json
        $jsonC2p = json_encode($soliC2p);
        //Value
        $c2p_value = encrypt($jsonC2p,$_SESSION['WorkingKey']);
        //referencia
        $c2p_referencia = refere();
        //validation
        $c2p_validation = createHash($jsonC2p);
        //Solicitud
        $C2p_solicitud = array("ClientGUID"=>$_SESSION['clienteGUID'],"value"=>$c2p_value,"Validation"=>$c2p_validation,"Reference"=>$c2p_referencia,"swTestOperation"=>false);
        $jsonSolicitud = json_encode($C2p_solicitud);


        $gurl = "http://172.31.250.56:60785/api/MobPayment/SendC2P";
        $gResult = gPost($gurl,$jsonSolicitud);
        echo "<h4>Enviado:</h4>
        <table class='table'>
          <thead>
            <tr>
              <th scope='col'>Request</th>
              <th scope='col'>Value</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope='row'>ClientGUID</th>
              <td style='max-width: 350px;'>
              ".$C2p_solicitud["ClientGUID"]."
              </td>
            </tr>
            <tr>
              <th scope='row'>Value</th>
              <td style='max-width: 350px;'>
              ".$C2p_solicitud["value"]."
              </td>
            </tr>
            <tr>
             <th scope='row'>Validation</th>
             <td style='max-width: 350px;'>
             ".$C2p_solicitud["Validation"]."
             </td>
            </tr>
            <tr>
            <th scope='row'>Validation</th>
            <td>
            ".$C2p_solicitud["Reference"]."
            </td>
           </tr>
           <tr>
           <th scope='row'>swTestOperation</th>
           <td>
           False
           </td>
          </tr>
          </tbody>
        </table>
        ";
        
        echo "<h4>Recibido:</h4>";
        echo "
        
        <table class='table'>
          <thead>
            <tr>
              <th scope='col'>Request</th>
              <th scope='col'>Value</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope='row'>Respuesta</th>
              <td style='max-width: 220px;'>";
          print_r($gResult);
          echo"</td>
            </tr>
          </tbody>
        </table>
        ";
    break;
    case -5:// Reverso C2P
          //valores
          $transa = intval($_POST["transa"]);
          $terminal = $_POST["terminal"];
          $monto = floatval($_POST["monto"]);
  
          //armar array
          $soliRc2p = array("IdTransactionToReverse"=>$transa,
                           "Amount"=>$monto,
                           "Terminal"=>$terminal
                           );
          //armar Json
          $jsonRc2p = json_encode($soliRc2p);
          //Value
          $Rc2p_value = encrypt($jsonRc2p,$_SESSION['WorkingKey']);
          //referencia
          $Rc2p_referencia = refere();
          //validation
          $Rc2p_validation = createHash($jsonRc2p);
          //Solicitud
          $Rc2p_solicitud = array("ClientGUID"=>$_SESSION['clienteGUID'],"value"=>$Rc2p_value,"Validation"=>$Rc2p_validation,"Reference"=>$Rc2p_referencia,"swTestOperation"=>false);
          $jsonSolicitud = json_encode($Rc2p_solicitud);
  
          $gurl = "http://172.31.250.56:60785/api/MobPayment/ReverseC2P";
          $gResult = gPost($gurl,$jsonSolicitud);
          echo "<h4>Enviado:</h4>
          <table class='table'>
            <thead>
              <tr>
                <th scope='col'>Request</th>
                <th scope='col'>Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope='row'>ClientGUID</th>
                <td style='max-width: 350px;'>
                ".$Rc2p_solicitud["ClientGUID"]."
                </td>
              </tr>
              <tr>
                <th scope='row'>Value</th>
                <td style='max-width: 350px;'>
                ".$Rc2p_solicitud["value"]."
                </td>
              </tr>
              <tr>
               <th scope='row'>Validation</th>
               <td style='max-width: 350px;'>
               ".$Rc2p_solicitud["Validation"]."
               </td>
              </tr>
              <tr>
              <th scope='row'>Validation</th>
              <td>
              ".$Rc2p_solicitud["Reference"]."
              </td>
             </tr>
             <tr>
             <th scope='row'>swTestOperation</th>
             <td>
             False
             </td>
            </tr>
            </tbody>
          </table>
          ";
          
          echo "<h4>Recibido:</h4>";
          echo "
          
          <table class='table'>
            <thead>
              <tr>
                <th scope='col'>Request</th>
                <th scope='col'>Value</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope='row'>Respuesta</th>
                <td style='max-width: 220px;'>";
            print_r($gResult);
            echo"</td>
              </tr>
            </tbody>
          </table>
          ";
    break;
    case -6://Posición
       //valores
       $identidad = $_POST["identidad"];
       $cuenta = $_POST["cuenta"];
       
       //armar array
       if($_POST["historico"]=="1"){
          $soliPosi = array("ClientID"=>$identidad);
          $gurl = "http://172.31.250.56:60785/api/Position/Current";
      }else{
          $soliPosi = array("ClientID"=>$identidad,
                            "AccountNumber"=>$cuenta);
          $gurl = "http://172.31.250.56:60785/api/Position/History";
      }
       //armar Json
       $jsonPosi = json_encode($soliPosi);
       //Value
       $Posi_value = encrypt($jsonPosi,$_SESSION['WorkingKey']);
       //referencia
       $Posi_referencia = refere();
       //validation
       $Posi_validation = createHash($jsonPosi);
       //Solicitud
       $Posi_solicitud = array("ClientGUID"=>$_SESSION['clienteGUID'],"value"=>$Posi_value,"Validation"=>$Posi_validation,"Reference"=>$Posi_referencia,"swTestOperation"=>false);
       $jsonSolicitud = json_encode($Posi_solicitud);
       $gResult = gPost($gurl,$jsonSolicitud);

       echo "<h4>Enviado:</h4>
       <table class='table'>
         <thead>
           <tr>
             <th scope='col'>Request</th>
             <th scope='col'>Value</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <th scope='row'>ClientGUID</th>
             <td style='max-width: 350px;'>
             ".$Posi_solicitud["ClientGUID"]."
             </td>
           </tr>
           <tr>
             <th scope='row'>Value</th>
             <td style='max-width: 350px;'>
             ".$Posi_solicitud["value"]."
             </td>
           </tr>
           <tr>
            <th scope='row'>Validation</th>
            <td style='max-width: 350px;'>
            ".$Posi_solicitud["Validation"]."
            </td>
           </tr>
           <tr>
           <th scope='row'>Validation</th>
           <td>
           ".$Posi_solicitud["Reference"]."
           </td>
          </tr>
          <tr>
          <th scope='row'>swTestOperation</th>
          <td>
          False
          </td>
         </tr>
         </tbody>
       </table>
       ";
       
       echo "<h4>Recibido:</h4>";
       echo "
       
       <table class='table'>
         <thead>
           <tr>
             <th scope='col'>Request</th>
             <th scope='col'>Value</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <th scope='row'>Respuesta</th>
             <td style='max-width: 220px;'>";
         print_r($gResult);
         echo"</td>
           </tr>
         </tbody>
       </table>
       ";



    break;
	}
}
?>