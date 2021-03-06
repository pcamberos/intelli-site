@extends('layouts.app')

@section('title') INFORMACIÓN DE COMPRA @endsection

@section('description')  INFORMACIÓN DE COMPRA  @endsection

@section('mystyle') 
<link href="{{ asset('css/purchase_information.css') }}" rel="stylesheet">
<link href="{{ asset('css/purchase_information_v2.css') }}" rel="stylesheet">
@endsection

<!-- header menu -->
@section('name_tower') Torre con nombre de ejemplo largo @endsection

@section('name_department') Departamento: A1 @endsection

@section('text_button1') Ver plano @endsection

@section('data_plano_url') https://demo7.estrasol.com.mx/casaboceto/wp-content/uploads/2019/06/mueble-galería-1.jpg @endsection

@section('data_plano_title') Torre con nombre de ejemplo largo @endsection

@section('text_button2') Producto autorizado @endsection

@section('data_product_url') https://demo7.estrasol.com.mx/casaboceto/wp-content/uploads/2019/06/mueble-galería-1.jpg @endsection

@section('data_product_title') Producto autorizado @endsection

@section('url') # @endsection

<!-- end header menu -->

@section('content')
<div class="sub_head">

</div>
<!--Principal-->
<div class="container-fluid ">
    <div class="container pt-4">
        <div class="row ">
            <!--Primer bloque inform general y formularios -->
            <div class="col-md-8  mt-2 pt-4">
                <!--Desea instalar productos -->
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <h2 class="titulo_1">¿ Desea que instalemos sus productos ?</h2>
                    </div>
                    <div class="col-md-5">
                        <button class="bt_enabled pt-2 pb-2  mt-1 mb-1 detonar_modal" style="width:100%;">
                            PUEDO INSTALARLOS YO MISMO
                        </button>
                    </div>
                    <div class="col-md-5">
                        <button class="bt_enabled_no_background pt-2 pb-2  mt-1 mb-1 detonar_modal" style="width:100%;">
                            PUEDO INSTALARLOS YO MISMO
                        </button>
                    </div>
                    <div class="col-md-12 ">
                        <div class="row no-gutters">
                            <div class="col-7 col-md-3  general_text mt-3 open_video_modal">Ver video de instalación
                            </div>
                            <div class="col-4 col-md-8   pt-1 pr-1">
                                <p class="fa fa-caret-right triangle_right open_video_modal  pr-1 text-left"
                                    aria-hidden="true"></p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row mt-3 mt-md-3 pt-4">
                    <div class="col-md-12">
                        <p class="general_text">Por favor indíquenos la informacion que le pedimos a continuación para
                            continuar con su compra los datos con * son obligatorios </p>
                    </div>
                </div>
                 <!--FORMULARIOS -->
                <div class="row no-gutters mt-md-3 pt-0  mb-5 steps_purchase ">
                     <!--BOTONES PARA VISTA WEB -->
                    <div class="col-md-12 pl-0 pr-0  d-none d-xl-block d-lg-block">
                        <div class="row pl-0 pr-0 mr-0 ml-0 ctr_option">
                            <div class="col-3 pl-0 pr-0 ">
                                <button class="bt_enabled_steps   " data="1" style="width:100%;">
                                    DATOS PERSONALES
                                </button>
                            </div>
                            <div class="col-3 pl-0 pr-0">
                                <button class="bt_enabled    " data="2" style="width:100%;">
                                    DATOS DE FACTURACIÓN
                                </button>
                            </div>
                            <div class="col-3 pl-0 pr-0">
                                <button class="bt_enabled   " data="3" style="width:100%;">
                                    DATOS DE ENVÍO
                                </button>
                            </div>
                            <div class="col-3 pl-0 pr-0">
                                <button class="bt_enabled    " data="4" style="width:100%;">
                                    MÉTODO DE PAGO
                                </button>
                            </div>
                        </div>
                    </div>
                     <!--FORMULARIOS INCLUYEN BOTON PARA MOBILE -->
                    <div class="col-md-12  control_iformation  ">
                        <button class="bt_enabled_steps general_text pt-2 pb-2 pr-0 pl-0  mt-1  d-block d-sm-none  "
                            style="width:100%; height:40px; ">
                            DATOS PERSONALES
                        </button>

                        <div class="row ml-0 mr-0 mt-md-4">
                            <div class="col-12  pl-5 pr-5 pb-4 mt-2" style=" padding:0; margin:0px;">
                                <div class="parent_line">
                                    <div class="line">

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row ml-0 mr-0 ">
                            <div class="col-md-12 ml-md-5 pb-5 general_text">
                                <div class="row ">
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1 general_text">Nombre*</label>
                                            <input type="text" class=" fix_input " id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Indique su nombre">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Apellido paterno*</label>
                                            <input type="text" class=" fix_input general_text" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Indique su apellido paterno">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Apellido materno</label>
                                            <input type="email" class=" fix_input general_text" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Indique su apellido materno">


                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Teléfono*</label>
                                            <input type="email" class=" fix_input general_text" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Indique su número telefónico">

                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-5 ">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Correo electrónico</label>
                                            <input type="email" class=" fix_input general_text" id="exampleInputEmail1"
                                                aria-describedby="emailHelp"
                                                placeholder="Indique su correo electrónico">


                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Confirmacion de correo electrónico*</label>
                                            <input type="email" class=" fix_input general_text" id="exampleInputEmail1"
                                                aria-describedby="emailHelp"
                                                placeholder="Confirme su correo electrónico">

                                        </div>
                                    </div>
                                </div>

                            </div>




                            <div class="col-12  invoice pt-3 pb-3 pl-5 mt-4 ">
                                <label class="is_check d-inline">
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="general_text d-inline " style="color:white;">
                                    ¿ Desea incluir factura ?
                                </div>
                            </div>

                        </div>






                    </div>
                    <div class="col-md-12  control_iformation">
                        <button class="bt_enabled general_text pt-2 pb-2 pr-0 pl-0  mt-1  d-block d-sm-none  "
                            style="width:100%; height:40px; ">
                            DATOS DE FACTURACIÓN
                        </button>
                        <!--aqui-->
                        <div class="row ml-0 mr-0 mt-md-4 d-none">
                            <div class="col-12  pl-5 pr-5 pb-4 mt-2" style=" padding:0; margin:0px;">
                                <div class="parent_line">
                                    <div class="line">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row ml-0 mr-0  d-none general_text">
                            <div class="col-md-5 ml-md-5 pb-md-3">
                                <div class="pr-1  mt-2   mt-sm-3  item_form">
                                    <label for="exampleInputEmail1">R.F.C*</label>
                                    <input type="email" class=" fix_input general_text" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Indique su RFC">

                                </div>
                                <div class="pr-1  mt-2   mt-sm-3  item_form">

                                    <label for="exampleInputEmail1">USO de CFDI*</label>

                                    <div class="row">
                                        <div class="col-12 ml-2 mr-2 pl-0 pr-3">
                                            <select class="form-control select_product select_2 ml-0 mr-0 "
                                                data-live-search="true" style="width:100%">
                                                <option disabled selected>Indique el uso de CFDI</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="col-md-5 ">
                                <div class="pr-1  mt-2   mt-sm-3  item_form  ">
                                    <label for="exampleInputEmail1">Razón social*</label>
                                    <input type="email" class=" fix_input general_text" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="indique su razón social">

                                </div>

                            </div>
                            <div class="col-md-5 ml-md-5 titulo_2">
                                Dirección fiscal

                            </div>
                            <div class="col-md-12 ml-md-5 pb-5">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">País*</label>
                                            <div class="row">
                                                <div class="col-12 ml-2 mr-2 pl-0 pr-3 pb-0 pt-0">
                                                    <select class="form-control select_product select_2 ml-0 mr-0 "
                                                        data-live-search="true" style="width:100%">
                                                        <option disabled selected>Indique su país</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Calle*</label>
                                            <input type="email" class=" fix_input general_text" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Indique su calle">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Numero exterior*</label>
                                            <input type="email" class=" fix_input general_text" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Indique su numero exterior">

                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Numero interior</label>
                                            <input type="email" class=" fix_input general_text" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Indique su numero interior">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Codigo Postal*</label>
                                            <input type="email" class=" fix_input general_text" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Indique su codigo postal">

                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Indique su estado*</label>
                                            <div class="row">
                                                <div class="col-12 ml-2 mr-2 pl-0 pr-3 pb-0 pt-0">
                                                    <select class="form-control select_product select_2 ml-0 mr-0 "
                                                        data-live-search="true" style="width:100%">
                                                        <option disabled selected>Indique su estado</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Municipio*</label>
                                            <div class="row">
                                                <div class="col-12 ml-2 mr-2 pl-0 pr-3 pb-0 pt-0">
                                                    <select class="form-control select_product select_2 ml-0 mr-0 "
                                                        data-live-search="true" style="width:100%">
                                                        <option disabled selected>Indique su municipio</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Localidad*</label>
                                            <input type="email" class=" fix_input general_text" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Indique su localidad">

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Colonia*</label>
                                            <div class="row">
                                                <div class="col-12 ml-2 mr-2 pl-0 pr-3 pb-0 pt-0">
                                                    <select class="form-control select_product select_2 ml-0 mr-0 "
                                                        data-live-search="true" style="width:100%">
                                                        <option disabled selected>Indique su colonia</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>


                            </div>
                        </div>


                    </div>
                    <div class="col-md-12  control_iformation">
                        <button class="bt_enabled general_text pt-2 pb-2 pr-0 pl-0  mt-1  d-block d-sm-none  "
                            style="width:100%; height:40px;">
                            DATOS DE ENVÍO
                        </button>
                        <!--aqui-->
                        <div class="row ml-0 mr-0 mt-md-4 d-none d-none">
                            <div class="col-12  pl-5 pr-5 pb-4 mt-2" style=" padding:0; margin:0px;">
                                <div class="parent_line">
                                    <div class="line">

                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row ml-0 mr-0  d-none d-none">

                            <div class="col-md-12 ml-md-5 pb-5 general_text">
                                <div class="row ">
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1 general_text">Calle*</label>
                                            <input type="email" class=" fix_input " id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Indique su calle">


                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">No exterior*</label>
                                            <input type="email" class=" fix_input general_text" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Indique su numero exterior">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Numero interior</label>
                                            <input type="email" class=" fix_input general_text" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Indique su numero interior">


                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Copdio postal*</label>
                                            <input type="email" class=" fix_input general_text" id="exampleInputEmail1"
                                                aria-describedby="emailHelp" placeholder="Indique su número telefónico">

                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-5 ">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Estado*</label>
                                            <div class="row">
                                                <div class="col-12 ml-2 mr-2 pl-0 pr-3 pb-0 pt-0">
                                                    <select class="form-control select_product select_2 ml-0 mr-0 "
                                                        data-live-search="true" style="width:100%">
                                                        <option disabled selected>Indique su estado</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-md-5 ">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Municipio*</label>
                                            <div class="row">
                                                <div class="col-12 ml-2 mr-2 pl-0 pr-3 pb-0 pt-0">
                                                    <select class="form-control select_product select_2 ml-0 mr-0 "
                                                        data-live-search="true" style="width:100%">
                                                        <option disabled selected>Indique su municipio</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-5 ">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Localidad*</label>
                                            <div class="row">
                                                <div class="col-12 ml-2 mr-2 pl-0 pr-3 pb-0 pt-0">
                                                    <select class="form-control select_product select_2 ml-0 mr-0 "
                                                        data-live-search="true" style="width:100%">
                                                        <option disabled selected>Indique su localidad</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-md-5 ">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Colonia*</label>
                                            <div class="row">
                                                <div class="col-12 ml-2 mr-2 pl-0 pr-3 pb-0 pt-0">
                                                    <select class="form-control select_product select_2 ml-0 mr-0 "
                                                        data-live-search="true" style="width:100%">
                                                        <option disabled selected>Indique su colonia</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>

                            </div>





                        </div>

                    </div>
                    <div class="col-md-12  control_iformation  ">
                        <button class="bt_enabled general_text pt-2 pb-2 pr-0 pl-0  mt-1  d-block d-sm-none  "
                            style="width:100%; height:40px; ">
                            MÉTODO DE PAGO
                        </button>

                        <div class="row ml-0 mr-0 mt-md-4 d-none d-none">
                            <div class="col-12  pl-5 pr-5 pb-4 mt-2" style=" padding:0; margin:0px;">
                                <div class="parent_line">
                                    <div class="line">

                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row ml-0 mr-0 d-none d-none ">
                            <div class="col-md-5 ml-md-5 titulo_2">
                                Método de pago

                            </div>
                            <div class="col-md-12 ml-md-5 pb-5 general_text">
                                <div class="row ">
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1 general_text">Método de pago*</label>
                                            <div class="row">
                                                <div class="col-12 ml-2 mr-2 pl-0 pr-3 pb-0 pt-0">
                                                    <select class="form-control select_product select_2 ml-0 mr-0 "
                                                        data-live-search="true" style="width:100%">
                                                        <option disabled selected>Pago tarjeta crédito / Débito</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for=" invisible">.</label>
                                            <div class="row">
                                                <div class="col-12 ml-2 mr-2 pl-0 pr-3 pb-0 pt-0">
                                                    <img src="{{ asset('images/payment/Mastercard/mastercard.png')}}"
                                                        class="img-fluid mr-3" alt="Responsive image">
                                                    <img src="{{ asset('images/payment/Visa/Visa.png')}}"
                                                        class="img-fluid mr-3" alt="Responsive image">
                                                    <img src="{{ asset('images/payment/AmericanExpress/AmericanExpress.png')}}"
                                                        class="img-fluid " alt="Responsive image">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Nombre*</label>
                                            <input type="email" class=" fix_input general_text " id="exampleInputEmail1"
                                                aria-describedby="emailHelp"
                                                placeholder="Indique su nombre como aparece en su tarjeta">


                                        </div>
                                    </div>

                                </div>
                                <div class="row ">
                                    <div class="col-md-5 ">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Número de tarjeta*</label>
                                            <input type="tel" class=" fix_input general_text credit_card"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Indique su numero de tarjeta">


                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="pr-1   mt-2   mt-sm-3  item_form">
                                            <label for="row_t pt-1">Fecha de expiración*</label>
                                            <div class="row row_t">
                                                <div class="col-5 mt-1">

                                                    <div class="row">
                                                        <div class="col-12 ml-2 mr-2 pl-0 pr-3 ">
                                                            <select
                                                                class="form-control select_product select_2 ml-0 mr-0 "
                                                                data-live-search="true" style="width:100%">
                                                                <option disabled selected>Mes</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-5 mt-1">

                                                    <div class="row">
                                                        <div class="col-12 ml-2 mr-2 pl-0 pr-3 ">
                                                            <select
                                                                class="form-control select_product select_2 ml-0 mr-0 "
                                                                data-live-search="true" style="width:100%">
                                                                <option disabled selected>Año</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="col-md-5 ">
                                        <div class="pr-1  mt-2   mt-sm-3  item_form">
                                            <label for="exampleInputEmail1">Código de seguridad*</label>
                                            <input type="password" class=" fix_input general_text"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Indique su numero de tarjeta">


                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="pr-1   mt-2   mt-sm-3  item_form">

                                            <div class="row ">
                                                <div class="col-6 ">

                                                    <div class="row">
                                                        <div class="col-12 ml-2 mr-2 pl-0 pr-3 ">

                                                            <img src="{{ asset('images/payment/ReversoVisa/ReversoVisa.png')}}"
                                                                class="img-fluid mr-3" alt="Responsive image">
                                                            <p class="mt-1">Reverso Visa y Master card</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 mt-1">

                                                    <div class="row">
                                                        <div class="col-12 ml-2 mr-2 pl-0 pr-3 ">

                                                            <img src="{{ asset('images/payment/FrenteAmericanExpress/FrenteAmericanExpress.png')}}"
                                                                class="img-fluid mr-3" alt="Responsive image">
                                                            <p class="mt-1">Frente American Express</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>




                            <div class="col-12  invoice pt-3 pb-3 pl-5 mt-4 ">
                                <label class="is_check d-inline">
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <div class="general_text d-inline " style="color:white;">
                                    Acepto  
                                </div>
                                <div class="general_text d-inline show_terms_cond"   > términos y condiciones </div>
                                <div class="general_text d-inline " style="color:white;">
                                    del servicio*
                                </div>
                            </div>

                        </div>






                    </div>
                </div>


            </div>
            <!--Primer bloque productos y total -->
            <div class="col-md-4  mobile_card  d_none_special  ">

                <div class="row align-items-center pr-2 pl-2 pt-3 pb-3 ml-1 total_card">
                    <div class="col-12 mt-2 ">
                        <div class="row">
                            <div class="col-6 general_text" style="color:white">
                                Subtotal.
                            </div>
                            <div class="col-6">
                                <p class="text-right general_text" style="color:white">10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-1">
                        <div class="row">
                            <div class="col-6 general_text" style="color:white">
                                Envio
                            </div>
                            <div class="col-6">
                                <p class="text-right general_text" style="color:white">10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-1">
                        <div class="row">
                            <div class="col-6 general_text" style="color:white">
                                IVA
                            </div>
                            <div class="col-6">
                                <p class="text-right general_text" style="color:white">10</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-1">
                        <div class="row">
                            <div class="col-6 general_text" style="color:white">
                                Total.
                            </div>
                            <div class="col-6">
                                <p class="text-right general_text" style="color:white">10</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-12 mb-1">
                        <div class="separator_total"></div>
                        <div class="row mt-3 mb-4">
                            <div class="col-12 mx-auto text-center  ">
                                <button class="btn-comprar pt-2 pb-2  ">
                                    COMPRAR
                                </button>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="row   align-items-top mt-4 ml-1 pl-0 pr-0   total_products">
                    <div class="col-12 pl-0 pr-0 pt-4">
                        <p class="text-left dato_imp_car pl-3" style="color:white;">Productos</p>
                        <div class="container">
                            <div class="row fake_table general_text" style="color:white; ">
                                <div class="col-8 mb-0 mb-0 text-left pt-2 pb-2">Sowarks white motor</div>
                                <div class="col-4 mb-0 mb-0 text-center pt-2 pb-2">$21130</div>
                            </div>

                            <div class="row fake_table general_text" style="color:white; ">
                                <div class="col-8 mb-0 mb-0 text-left pt-2 pb-2">Sowarks white motor</div>
                                <div class="col-4 mb-0 mb-0 text-center pt-2 pb-2">$21130</div>
                            </div>
                            <div class="row fake_table general_text" style="color:white; ">
                                <div class="col-8 mb-0 mb-0 text-left pt-2 pb-2">Sowarks white motor</div>
                                <div class="col-4 mb-0 mb-0 text-center pt-2 pb-2">$21130</div>
                            </div>


                        </div>
                        <p class="text-left dato_imp_car pl-3 mt-3" style="color:white;">Incluidos</p>
                        <div class="container">
                            <div class="row fake_table general_text" style="color:white; ">
                                <div class="col-8 mb-0 mb-0 text-left pt-2 pb-2">Control remoto 5 canles x1</div>
                                <div class="col-4 mb-0 mb-0 text-center pt-2 pb-2">$21130</div>
                            </div>

                            <div class="row fake_table general_text" style="color:white; ">
                                <div class="col-8 mb-0 mb-0 text-left pt-2 pb-2">Sowarks white motor</div>
                                <div class="col-4 mb-0 mb-0 text-center pt-2 pb-2">$21130</div>
                            </div>



                        </div>

                    </div>

                </div>


                <div class="row  mt-2 ml-0 pl-0 pr-0">
                    <div class="col-12 pl-0 pr-0 pt-4 general_text">

                        ' ¿Alguna duda o pregunta ? comunicate al telefono
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
 <!--Total para mobile  -->
<div class="container-fluid total_products pb-4 pt-4 pl-1 pr-1 d-block d-sm-none">
    <div class="row pb-3">
        <div class="col-2 text-right general_text" style="color:white;">
            Total
        </div>
        <div class="col-8 text-center general_text" style="color:white;">
            $14,00000
        </div>
        <div class="col-2 text-left fa fa-ellipsis-v ellipsis-v open_products_total"
            style="font-size:25px; color:white;">
        </div>
    </div>
    <div class="row ">
        <div class="col-12">
            <div class="col-12 mx-auto text-center  ">
                <button class="btn-comprar pt-2 pb-2  ">
                    COMPRAR
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

<!--Mobile-->
<div>
	<div id="modal_products" class="modal d-none products_modal  pt-5 pl-2 pr-2 pb-5 overflow-auto">
	  <div class="row">
		  <div class="col-md-3"></div>
		  <div class="col-md-6 pl-md-5 pr-md-5">
		  	<div class="pl-md-5 pr-md-5 pr-2" >
		  		<div class="sub_title_modal"></div>
		  		<p class="title_modal"></p>
			    <div class=" cerrar_products cerrar"><span class="close mb-2 mr-2">X</span></div>
			   
		    	</div>

		  </div>
          
          <div class="container copy_card mr-3  " >
                   
          </div>
		  
	  </div>
	</div>
</div>

<!--Modal video-->
<div>
	<div id="modal_video"  class="modal d-none video_tuto  pt-5 pl-2 pr-2 pb-5 ">
	  <div class="row">
		  <div class="col-md-3"></div>
		  <div class="col-md-12 pl-md-5 pr-md-5">
		 <div class="pl-md-5 pr-md-5 pr-2" >
		  		<div class="sub_title_modal"></div>
		  		
			    <div class="cerrar_video cerrar"><span class="close mb-2 mr-2">X</span></div>
			   
		    	</div>

		  </div>
          
          <div class="container video_card justify-content-md-center   " >
         
		    <div class="row  pl-5 pr-5 pt-5 pt-md-0">
                <div class="col-sm-12 col-md-8  ml-md-3 ">
                        <p class="title_modal text-center  w-100" >Aprenda a instalar productos</p>
                </div> 
               
            </div>
          <div class="row  pl-5 pr-5  pt-md-0 justify-content-md-center " >
           
                <div class="col-sm-12 col-md-8 mt-3  " >
                    <div class="embed-responsive embed-responsive-16by9 iframe_video "  >
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" allowfullscreen></iframe>
                    </div>
                  </div>
                
              </div>
               
          </div>
		  
	  </div>
	</div>
</div>

<!--Modal Terminos y condiciones-->
<div>
	<div id="modal_condiciones"  class="modal d-none   pt-5 pl-2 pr-2 pb-5 overflow-auto ">
	  <div class="row">
		  <div class="col-md-3"></div>
		  <div class="col-md-12 pl-md-5 pr-md-5">
		 <div class="pl-md-5 pr-md-5 pr-2" >
		  		<div class="sub_title_modal"></div>
		  		
			    <div class="cerrar_terminos cerrar"><span class="close mb-2 mr-2">X</span></div>
			   
		    	</div>

		  </div>
          
          <div class="container video_card justify-content-md-center   " >
         
		  
          <div class="row  pl-5 pr-5  pt-md-0 justify-content-md-center  " >
           
                <div class="col-sm-12 col-md-6 mt-3  condition_card " >
                    <div class="row title_condition pl-3 mt-3">
                        <div class="col-12 pt-2 pb-2">
                            <h2 class="title_condition ">Términos y condiciones </h2>
                        </div>
                    </div>
                    <div class="row condition_text pl-3  mt-4  ">
                        <div class="col-8 text-break">
                            <p>aaaaaaaaaa</p>
                            <p>aaaaaaaaaa</p>
                            <p>aaaaaaaaaa</p>
                            <p>aaaaaaaaaa</p>
                            <p>aaaaaaaaaa</p>
                            <p>aaaaaaaaaa</p>
                            <p>aaaaaaaaaa</p>
                            <p>aaaaaaaaaa</p>
                            <p>aaaaaaaaaa</p>
                            <p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
                            <p>aaaaaaaaaa</p>
                            <p>aaaaaaaaaa</p>
                            <p>aaaaaaaaaa</p>
                            <p>aaaaaaaaaa</p>
                            <p>aaaaaaaaaa</p>
                            <p>aaaaaaaaaa</p>
                            <p>aaaaaaaaaa</p>
                            <p>aaaaaaaaaa</p>
                            <p>aaaaaaaaaa</p>
                            <p>aaaaaaaaaa</p>   
                          
                        </div>
                    </div>    

                      
                  </div>
                
              </div>
               
          </div>
		  
	  </div>
	</div>
</div>