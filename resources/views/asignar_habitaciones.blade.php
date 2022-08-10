<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Decameron</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>



        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

            <div class="w-75">
                <button type="button" onclick="history.back()" class="btn btn-danger mb-4">Atrás</button>
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <h1 class="text-gray-900 dark:text-white">Decameron</h1>
                </div>

                <div class="w-80 mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="w-100">

                        <div class="p-6">
                            <div class="flex flex-column">
                                <span>Para asignar las habitaciones, hacer clic en el nombre del hotel</span>
                            </div>
                        </div>
                        
                        <div id="listado_hoteles">
                            
                        </div>

                        
                    </div>
                        
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Brayan Jaimes (brayansjm@outlook.com)
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<script>
    $.ajax({
        type: 'GET',
        url: 'http://127.0.0.1:3040/api/hoteles',
        success: function(data)
        {
            const hoteles = data;
            hoteles.forEach(function(hotel, index) {
                const caja = '<div class="p-6">' +
                    '<div class="flex flex-column">' +
                    '<p>' +
                    '<a class="btn btn-primary" data-bs-toggle="collapse" href="#caja-' + index + '" role="button" aria-expanded="false" aria-controls="caja-' + index + '">' + hotel.nombre + '</a>' +
                    '</p>' +
                    '<span><b>Dirección: </b> ' + hotel.direccion + '</span>' +
                    '<span><b>Ciudad: </b> ' + hotel.ciudad + '</span>' +
                    '<span><b>NIT: </b> ' + hotel.nit + '</span>' +
                    '<span><b>Núm. habitaciones: </b> ' + hotel.numero_habitaciones + '</span>' +
                    '<div class="collapse" id="caja-' + index + '">' +
                    '<div id="habitaciones-' + hotel.id + '">' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>';
                $('#listado_hoteles').append(caja);
                obtenerListadoHabitaciones(hotel.id);
            });
        },
        error: function (xhr, ajaxOptions, thrownError)
        {
            //$("#mensaje_error").removeClass("d-none");
        },
    });

    function obtenerListadoHabitaciones(id) {
        var estandar_sencilla = '<div class="mt-4">Estándar sencilla</div>' +
            '<div class="card card-body"><form id="form_registrar_habitacion" action="http://127.0.0.1:3040/api/habitaciones/registrar">' +
            '<div class="form-group">' +
            '<label>Cantidad</label>' +
            '<input type="number" class="form-control" id="cantidad_estandar_sencilla_' + id + '" name="cantidad" placeholder="Ingrese la cantidad" onfocusout="actualizarTiposHabitaciones(' + id + ', \'estandar_sencilla\', this.value)">' +
            '</div>' +
            '</form></div>';

        var estandar_doble = '<div class="mt-4">Estándar doble</div>' +
            '<div class="card card-body"><form id="form_registrar_habitacion" action="http://127.0.0.1:3040/api/habitaciones/registrar">' +
            '<div class="form-group">' +
            '<label>Cantidad</label>' +
            '<input type="number" class="form-control" id="cantidad_estandar_doble_' + id + '" name="cantidad" placeholder="Ingrese la cantidad" onfocusout="actualizarTiposHabitaciones(' + id + ', \'estandar_doble\', this.value)">' +
            '</div>' +
            '</form></div>';
        
        var junior_triple = '<div class="mt-4">Junior triple</div>' +
            '<div class="card card-body"><form id="form_registrar_habitacion" action="http://127.0.0.1:3040/api/habitaciones/registrar">' +
            '<div class="form-group">' +
            '<label>Cantidad</label>' +
            '<input type="number" class="form-control" id="cantidad_junior_triple_' + id + '" name="cantidad" placeholder="Ingrese la cantidad" onfocusout="actualizarTiposHabitaciones(' + id + ', \'junior_triple\', this.value)">' +
            '</div>' +
            '</form></div>';

        var junior_cuadruple = '<div class="mt-4">Junior cuádruple</div>' +
            '<div class="card card-body"><form id="form_registrar_habitacion" action="http://127.0.0.1:3040/api/habitaciones/registrar">' +
            '<div class="form-group">' +
            '<label>Cantidad</label>' +
            '<input type="number" class="form-control" id="cantidad_junior_cuadruple_' + id + '" name="cantidad" placeholder="Ingrese la cantidad" onfocusout="actualizarTiposHabitaciones(' + id + ', \'junior_cuadruple\', this.value)">' +
            '</div>' +
            '</form></div>';

        var suite_sencilla = '<div class="mt-4">Suite sencilla</div>' +
            '<div class="card card-body"><form id="form_registrar_habitacion" action="http://127.0.0.1:3040/api/habitaciones/registrar">' +
            '<div class="form-group">' +
            '<label>Cantidad</label>' +
            '<input type="number" class="form-control" id="cantidad_suite_sencilla_' + id + '" name="cantidad" placeholder="Ingrese la cantidad" onfocusout="actualizarTiposHabitaciones(' + id + ', \'suite_sencilla\', this.value)">' +
            '</div>' +
            '</form></div>';

        var suite_doble = '<div class="mt-4">Suite doble</div>' +
            '<div class="card card-body"><form id="form_registrar_habitacion" action="http://127.0.0.1:3040/api/habitaciones/registrar">' +
            '<div class="form-group">' +
            '<label>Cantidad</label>' +
            '<input type="number" class="form-control" id="cantidad_suite_doble_' + id + '" name="cantidad" placeholder="Ingrese la cantidad" onfocusout="actualizarTiposHabitaciones(' + id + ', \'suite_doble\', this.value)">' +
            '</div>' +
            '</form></div>';

        var suite_triple = '<div class="mt-4">Suite triple</div>' +
            '<div class="card card-body"><form id="form_registrar_habitacion" action="http://127.0.0.1:3040/api/habitaciones/registrar">' +
            '<div class="form-group">' +
            '<label>Cantidad</label>' +
            '<input type="number" class="form-control" id="cantidad_suite_triple_' + id + '" name="cantidad" placeholder="Ingrese la cantidad" onfocusout="actualizarTiposHabitaciones(' + id + ', \'suite_triple\', this.value)">' +
            '</div>' +
            '</form></div>';

        $("#habitaciones-" + id).append(estandar_sencilla);
        $("#habitaciones-" + id).append(estandar_doble);
        $("#habitaciones-" + id).append(junior_triple);
        $("#habitaciones-" + id).append(junior_cuadruple);
        $("#habitaciones-" + id).append(suite_sencilla);
        $("#habitaciones-" + id).append(suite_doble);
        $("#habitaciones-" + id).append(suite_triple);

        $.ajax({
            type: 'GET',
            url: 'http://127.0.0.1:3040/api/habitaciones',
            data: { hotel_id: id },
            success: function(data)
            {
                console.log(data)
                $("#habitaciones-" + id).html();
                const habitaciones = data;
                habitaciones.forEach(function(habitacion, index) {

                    if (habitacion.tipo_habitacion_id === 1 && habitacion.acomodacion_id === 1) {
                        $("#cantidad_estandar_sencilla_" + id).val(habitacion.cantidad);
                    }
                    if (habitacion.tipo_habitacion_id === 1 && habitacion.acomodacion_id === 2) {
                        $("#cantidad_estandar_doble_" + id).val(habitacion.cantidad);
                    }
                    if (habitacion.tipo_habitacion_id === 2 && habitacion.acomodacion_id === 3) {
                        $("#cantidad_junior_triple_" + id).val(habitacion.cantidad);
                    }
                    if (habitacion.tipo_habitacion_id === 2 && habitacion.acomodacion_id === 4) {
                        $("#cantidad_junior_cuadruple_" + id).val(habitacion.cantidad);
                    }
                    if (habitacion.tipo_habitacion_id === 3 && habitacion.acomodacion_id === 1) {
                        $("#cantidad_suite_sencilla_" + id).val(habitacion.cantidad);
                    }
                    if (habitacion.tipo_habitacion_id === 3 && habitacion.acomodacion_id === 2) {
                        $("#cantidad_suite_doble_" + id).val(habitacion.cantidad);
                    }
                    if (habitacion.tipo_habitacion_id === 3 && habitacion.acomodacion_id === 3) {
                        $("#cantidad_suite_triple_" + id).val(habitacion.cantidad);
                    }
                });
                
            },
            error: function (xhr, ajaxOptions, thrownError)
            {
                //$("#mensaje_error").removeClass("d-none");
            },
        });
    }

    function actualizarTiposHabitaciones(id, tipo, cantidad) {
        let tipo_habitacion_id, acomodacion_id;
        switch (tipo) {
            case "estandar_sencilla":
                tipo_habitacion_id = 1, acomodacion_id = 1;
                break;
            case "estandar_doble":
                tipo_habitacion_id = 1, acomodacion_id = 2;
                break;
            case "junior_triple":
                tipo_habitacion_id = 2, acomodacion_id = 3;
                break;
            case "junior_cuadruple":
                tipo_habitacion_id = 2, acomodacion_id = 4;
                break;
            case "suite_sencilla":
                tipo_habitacion_id = 3, acomodacion_id = 1;
                break;
            case "suite_doble":
                tipo_habitacion_id = 3, acomodacion_id = 2;
                break;
            case "suite_triple":
                tipo_habitacion_id = 3, acomodacion_id = 3;
                break;
            default:
                break;
        }

        $.ajax({
            type: "PUT",
            url: 'http://127.0.0.1:3040/api/habitaciones/actualizar',
            data: { id: id, hotel_id: id, tipo_habitacion_id: tipo_habitacion_id, acomodacion_id: acomodacion_id, cantidad: cantidad },
            success: function(data)
            {
                if (data === "No se puede exceder el número de habitaciones") {
                    alert(data);
                    $("#cantidad_" + tipo + "_" + id).val("");
                }
            },
            error: function (xhr, ajaxOptions, thrownError)
            {
                
            },
        });
    }
</script>