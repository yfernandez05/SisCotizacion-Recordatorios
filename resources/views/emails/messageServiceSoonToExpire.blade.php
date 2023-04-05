<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email - Padin Publicidad Digital</title>
    <style>
        .contenenedor{
            text-align: center;
            color: #333;
            flex-direction: column;
            padding: 1.7rem;
            /* border: 1px solid #57bfed; */
            border-radius: 5px;
            max-width: 850px;
            margin: 0 auto;
            /* display: inline-block; */
            /* font-size: 24px; */
            /* margin: 0 14px 20px 0; */
            font-family: Arial,sans-serif;
        }
        /* h1{
            font-size: 24px;
        } */
        .text-align-left{
            text-align: left;
        }
        .d-flex{
            display: flex;
            flex-wrap: wrap;
            align-content: center;
            align-items: center;
            justify-content: center;
        }
        .icon-redessociales {
            margin: 0 5px;
        }
        .icon-redessociales img {
            height: 25px;
        }
        .icon-redessociales img:hover{
            filter: drop-shadow(2px 3px 4px rgba(0 0 0 /0.3));
        }
        .text-primary{
            color: #57bfed !important;
        }

        .cabecera{
            background: #009bdb;
            color: #fff;
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .logo img{
            max-width: 100%;
        }
        
        .cuerpo{
            padding-bottom: 1.5rem;
        }
        
        .titulo-cuerpo{
            padding-top: .5rem;    
            padding-bottom: .5rem;    

        }
        
        .detalle{
            font-size: 1rem;
        }
        
        .nombres
        {
            padding-top: .2rem;
            padding-bottom: 1.2rem;
            color:#333;
        }
        .gracias,
        .mensaje{
            padding-top: .5rem;
            padding-bottom: .25rem;
            color: #333;
        }
        .pie {
            color: #666;
        }
        
        .pie a{
            color: #009bdb;
            text-decoration: none;
        }

        .img-fluid {
            max-width: 80%;
            height: auto;
        }

        .cont-info{
            background-color: #FFC107;
            padding: 36px 30px;
            border-radius: 21px;
        }
        /* .text-white{
            color: #fff;
        } */
        .fw-800{
            font-weight: 800;
        }
        .f-left{
            width: 100%;
            float: left;
            text-align: left;
            margin: 5px 0px;
        }
        .size-mall{
            font-size: 14px;
        }
        .cont-table{
            font-family: Arial,sans-serif;
            color: black;
        }

        @media (max-width: 600px) {
            .tftable {
                display: block !important;
            }
            .total{
                padding-left: 0 !important;
            }
            .table-mobil{
                width: 100%;
            }
        }
        
    </style>
</head>
<body>
    <div class="contenenedor">
        <div>
            
            <div class="cuerpo">
                <div>
                    <a class="logo-im" href="https://padin.com.pe/">
                        <img src="{{asset('/images/logo.png')}}" alt="Padin Publicidad Digital" style="max-width: 200px;">
                    </a>
                </div>

                <div class="cont-info" style="margin-top:20px;margin-bottom:15px;">
                    <div class="text-white" >
                        <p>Servicio #{{$servicio->codservicio}}</p>
                        <h2 class="fw-800">Hola <span style="text-transform: uppercase;">{{$servicio->cliente->nombrecompleto}}</span></h2>
                        <p>Te saluda Padin Publicidad Digital, te recordamos que tiene servicios con nosotros se encuentran <strong>Proximo a vencer.</strong></p>
                        <p>Contactenos para renovar el servicio antes que expire</p>
                        <h2 class="fw-800">Fecha expiracion: {{ date('d/m/Y', strtotime($servicio->fecha_finsercanogeneral)) }}</h2>
                        <p>Aqui te mostramos el detalle de los servicio pronto a expirar:</p>                         
                    </div>
                </div>

                <div class="con-table">
                    <div>
                    <style type="text/css">
                    .tftable {font-size:18px;color:#333333;width:100%;border-width: 1px;border-color: darkslategray;border-collapse: collapse;max-width: 100%; overflow-x: auto; display: table;border: none;}
                    .tftable th {font-size:16px;background-color:#00a1df;border-width: 1px;padding: 8px;border-style: solid;border-color: darkslategray;color:#fff;text-align:left;}
                    .tftable tr {background-color:#ffffff;}
                    .tftable td {font-size:14px;border-width: 1px;padding: 8px;border-style: solid;border-color: darkslategray;}
                    .tftable tr:hover {background-color:#f2f2f2;}
                    </style>
                    @php
                        $suma = 0;
                    @endphp
                    <table class="tftable" border="1">
                        <thead>
                            <tr><th>Descripción</th><th>Precio</th><th>Descuento</th><th>Importe</th></tr>
                        </thead>
                        <tbody>
                            @foreach($servicio->serviciodetalles as $detalle)
                            <tr> 
                                <td>
                                    <p class="f-left"> <b>Servicio: </b>{{$detalle->tiposervicio->nombre}}</p><br>
                                    @if($detalle->refe_url_servicio)<p class="f-left"> <b>Url: </b>{{$detalle->refe_url_servicio}}</p><br>@endif
                                    @if($detalle->notadetalle)<p class="f-left"> <b>Nota adicional: </b>{{$detalle->notadetalle}}</p><br>@endif
                                    <p class="f-left"> <b>Fecha de contrato: </b>{{$detalle->fechainicio}}</p><br>
                                    <p class="f-left"> <b>Fecha de expiracion: </b>{{$detalle->fechafin}}</p><br>
                                    <!-- <p class="f-left"> <b>Estado del servicio: </b><span style="background-color:{{$detalle->estadoservicio->backgroundColor}}; color:{{$detalle->estadoservicio->textColor}}; padding:5px 12px; border-radius: 5em;">{{$detalle->estadoservicio->nombreestadoservicio}}</span></p><br> -->
                                </td> 
                                <td>S/.{{$detalle->precio}}</td> 
                                <td>@if($detalle->descuento) S/.{{$detalle->descuento}} @endif</td> 
                                <td>S/.{{$detalle->importe}}</td> 

                                @php
                                    $suma += $detalle->importe;
                                @endphp
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div style="width:50%;" class="f-left">

                    </div>
                    <div class="table-mobil" style="width:50%; display: inline-block; margin: 25px 0px;">

                        <table class="tftable total" border="1" style="padding-left:280px">
                            <tbody>
                                <tr> 
                                    <td>
                                        <p class="f-left"> <b>Subtotal: </b></p>                                        
                                    </td>                                     
                                    <td>
                                        <p class="f-left">S/.{{number_format($suma, 2)}}</p>
                                    </td> 
                                </tr>
                                <tr> 
                                    <td>
                                        <p class="f-left"> <b>Total: </b></p>                                        
                                    </td>                                     
                                    <td>
                                        <p class="f-left">S/.{{number_format($suma, 2)}}</p>
                                    </td> 
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    </div>
                </div>

            </div>
            <div class="pie">
                <p><strong>Agencia: </strong><a class="text-primary" href="https://padin.com.pe/" target="_blank">https://padin.com.pe/ </a>&nbsp; | &nbsp; 
                <strong>Soporte: </strong><a class="text-primary" href="mailto:info@padin.com.pe">info@padin.com.pe</a> <br>  
                <strong>Whatsapp: </strong><a class="text-primary" href="tel:+51987987987">987 987 987</a><br>
                ©Padin Publicidad digital - Todos los derechos reservados <a class="text-primary" href="https://padin.com.pe/" target="_blank"><strong>Padin Publicidad digital</strong></a>
            </div>


        </div>
    </div>
</body>
</html>