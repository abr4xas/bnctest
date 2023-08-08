$(window).on('load', function() {
    if ($('#preloader').length) {
        $('#preloader').delay(100).fadeOut('slow');
    }
})

$(document).ready(function() {
    $(document).ajaxStart(function() {
        $("#preloader").fadeIn('fast');
    });
    $(document).ajaxComplete(function() {
        setTimeout(function() {
            $("#preloader").fadeOut('fast');
        }, 700);
    });
});


//------------------------------------------------

consultaritems(-1);

$("#form").on("click", ".autenticacion", function(e){
    consultaritems(-1);
});
$("#form1").on("click", ".vpos", function(e){
    consultaritems(-2);
});

$("#form2").on("click", ".p2p", function(e){
    consultaritems(-3);
});

$("#form3").on("click", ".c2p", function(e){
    consultaritems(-4);
});

$("#form4").on("click", ".rc2p", function(e){
    consultaritems(-5);
});

$("#form5").on("click", ".posicion", function(e){
    consultaritems(-6);
});

$("#ctable").on("click", ".itm", function(e){
    var a_item=$("#item").val();
    var a_url=$("#url").val();
    var a_billetera=$("#billetera").val();
    var a_llave=$("#llave").val();

    autBnc(a_item,a_url,a_billetera,a_llave);
});


$("#ctable").on("click", ".itm2", function(e){
    var b_consul=$("#item").val();
    var b_identificador=$("#identificador").val();
    var b_monto=$("#monto").val();
    var b_tipTarjeta=$("#tipTarjeta").val();
    var b_tarjeta=$("#tarjeta").val();
    var b_fechExp=$("#fechExp").val();
    var b_nomTarjeta=$("#nomTarjeta").val();
    var b_tipCuenta=$("#tipCuenta").val();
    var b_cvv=$("#cvv").val();
    var b_pin=$("#pin").val();
    var b_identificacion=$("#identificacion").val();
    var b_afiliacion=$("#afiliacion").val();

    vPos(b_consul,b_identificador,b_monto,b_tipTarjeta,b_tarjeta,b_fechExp,b_nomTarjeta,b_tipCuenta,b_cvv,b_pin,b_identificacion,b_afiliacion);
});


$("#ctable").on("click", ".itm3", function(e){
    var c_consul=$("#item").val();
    var c_beneficiario=$("#beneficiario").val();
    var c_banco=$("#banco").val();
    var c_monto=$("#monto").val();
    var c_telefono=$("#telefono").val();
    var c_cedula=$("#cedula").val();
    var c_email=$("#email").val();
    var c_descripcion=$("#descripcion").val();

    p2p(c_consul,c_beneficiario,c_banco,c_monto,c_telefono,c_cedula,c_email,c_descripcion);
});


$("#ctable").on("click", ".itm4", function(e){
    var d_consul=$("#item").val();
    var d_telefono=$("#telefono").val();
    var d_cedula=$("#cedula").val();
    var d_banco=$("#banco").val();
    var d_token=$("#token").val();
    var d_terminal=$("#terminal").val();
    var d_monto=$("#monto").val();
    
    c2p(d_consul,d_telefono,d_cedula,d_banco,d_token,d_terminal,d_monto);
});


$("#ctable").on("click", ".itm5", function(e){
    var e_consul=$("#item").val();
    var e_transa=$("#transa").val();
    var e_terminal=$("#terminal").val();
    var e_monto=$("#monto").val();
    
    rC2p(e_consul,e_transa,e_terminal,e_monto);
});


$("#ctable").on("click", ".itm6", function(e){
    var f_consul=$("#item").val();
    var f_historico=$("#ope").val();
    var f_cuenta=$("#cuenta").val();
    var f_identidad=$("#identi").val();
    
    posicion(f_consul,f_historico,f_cuenta,f_identidad);
});

// --------------------------------------------------------------------------------

function consultaritems(consul){
    $.ajax({
        method:"GET",
        data:{'consul':consul},
        url:"/DEMOPHP/controllers/demoController.php",
        dataType:"html",
        beforeSend:function(){  
        },
        success:function(respuesta){
            $('#ctable').html(respuesta); 
            $('#enviado').html('');  
        },
        error:function(){
            alert("Error al ejecutar peticion AJAX");
        }
    });
}




function autBnc(item,url,billetera,llave){
    $.ajax({
        method:"POST",
        data:{'consul':item,
              'url':url,
              'cliente':billetera,
              'llave':llave
        },
        url:"/DEMOPHP/controllers/demoController.php",
        dataType:"html",
        beforeSend:function(){  
        },
        success:function(respuesta){
            $('#enviado').html(respuesta); 
        },
        error:function(){
            alert("Error al ejecutar peticion AJAX");
        }
    });
}

function vPos(consul,identificador,monto,tipTarjeta,tarjeta,fechExp,nomTarjeta,tipCuenta,cvv,pin,identificacion,afiliacion){
    $.ajax({
        method:"POST",
        data:{'consul':consul,
              'identificador':identificador,
              'monto':monto,
              'tipTarjeta':tipTarjeta,
              'tarjeta':tarjeta,
              'fechExp':fechExp,
              'nomTarjeta':nomTarjeta,
              'tipCuenta':tipCuenta,
              'cvv':cvv,
              'pin':pin,
              'identificacion':identificacion,
              'afiliacion':afiliacion
        },
        url:"/DEMOPHP/controllers/demoController.php",
        dataType:"html",
        beforeSend:function(){  
        },
        success:function(respuesta){
            $('#enviado').html(respuesta); 
        },
        error:function(){
            alert("Error al ejecutar peticion AJAX");
        }
    });
}

function p2p(consul,beneficiario,banco,monto,telefono,cedula,email,descripcion){
    $.ajax({
        method:"POST",
        data:{'consul':consul,
              'beneficiario':beneficiario,
              'banco':banco,
              'monto':monto,
              'telefono':telefono,
              'cedula':cedula,
              'email':email,
              'descripcion':descripcion
        },
        url:"/DEMOPHP/controllers/demoController.php",
        dataType:"html",
        beforeSend:function(){  
        },
        success:function(respuesta){
            $('#enviado').html(respuesta); 
        },
        error:function(){
            alert("Error al ejecutar peticion AJAX");
        }
    });
}


function c2p(consul,telefono,cedula,banco,token,terminal,monto){
    $.ajax({
        method:"POST",
        data:{'consul':consul,
              'telefono':telefono,
              'cedula':cedula,
              'banco':banco,
              'token':token,
              'terminal':terminal,
              'monto':monto
        },
        url:"/DEMOPHP/controllers/demoController.php",
        dataType:"html",
        beforeSend:function(){  
        },
        success:function(respuesta){
            $('#enviado').html(respuesta); 
        },
        error:function(){
            alert("Error al ejecutar peticion AJAX");
        }
    });
}

function rC2p(consul,transa,terminal,monto){
    $.ajax({
        method:"POST",
        data:{'consul':consul,
              'transa':transa,
              'terminal':terminal,
              'monto':monto
        },
        url:"/DEMOPHP/controllers/demoController.php",
        dataType:"html",
        beforeSend:function(){  
        },
        success:function(respuesta){
            $('#enviado').html(respuesta); 
        },
        error:function(){
            alert("Error al ejecutar peticion AJAX");
        }
    });
}


function posicion(consul,historico,identidad,cuenta){
    $.ajax({
        method:"POST",
        data:{'consul':consul,
              'historico':historico,
              'identidad':identidad,
              'cuenta':cuenta
        },
        url:"/DEMOPHP/controllers/demoController.php",
        dataType:"html",
        beforeSend:function(){  
        },
        success:function(respuesta){
            $('#enviado').html(respuesta); 
        },
        error:function(){
            alert("Error al ejecutar peticion AJAX");
        }
    });
}
