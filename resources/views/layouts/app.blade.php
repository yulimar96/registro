<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('Material Dashboard') }}</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('material') }}/img/favicon.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
</head>

<body >
    {{-- @yield('content') --}}
    <div class="modal fade" id="registro" tabindex="1" role="dialog" aria-labelledby="creacionLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content p-0">
                <div class="card mb-0 p-2">
                    <div class="card-header">
                        <h4 class=" text-center"><b>Ingrese los Datos de la nueva ORT</b></h4>
                    </div>
                    <div class="card-body p-0">
                        <div class="bs-stepper linear">
                            <div class="bs-stepper-content">
                                <form class="form-horizontal m-2" action="{{ route('register_ort.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div  class="content active" role="tabpanel"
                                        aria-labelledby="datos-part-trigger">
                                        <div class="row row-cols-4">
                                            <div class="col">
                                                <label for="Surname1">{{ __('first surname') }}</label>
                                                <input class="form-control" type="text" name="surname_1" placeholder="Fenandez" required>
                                            </div>
                                            <div class="col">
                                                <label for="Surname2">{{ __('second last name') }}</label>
                                                <input class="form-control" type="text" name="surname_2" placeholder="Rodriguez" required>
                                            </div>
                                            <div class="col">
                                                <label for="name1">{{ __('Name') }}</label>
                                                <input class="form-control" type="text" name="name_1" placeholder="Maria" required>
                                            </div>
                                            <div class="col">
                                                <label for="name2">{{ __('second name') }}</label>
                                                <input class="form-control" type="text" name="name_2" placeholder="Elena" required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="birth_date">{{ __('Birth Date') }}</label>
                                                <input class="form-control" name="birth_date" type="date">
                                            </div>
                                            <div class="col">
                                                <label for="sex">{{ __('sex') }}</label>
                                                <select name="sex" class="form-control">
                                                    <option value='0'>Man</option>
                                                    <option value='1'>Woman</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="nationality">{{ __('Nationality') }}</label>
                                                <select name="nationality" class="form-control">
                                                    <option value='1'>Venezuela</option>
                                                    <option value='0'>{{ __('Foreighn') }}</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="habitantes">{{ __('ID Number:') }}</label>
                                                <input class="form-control" type="text" name="id_number" placeholder="3124225" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="federal_state">{{ __('Federal_state') }}</label>
                                                <select name="federal_state_id" id="estado" class="form-control" onchange="municipios(this.value)">
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="municipalities">Municipio</label>
                                                <select name="municipality_id" id="municipio" class="form-control" onchange="parroquias(this.value)">
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="parishes">Parroquia</label>
                                                <select name="parish_id" id="parroquia" class="form-control">
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="phone_area_code_id">Phone Area:</label>
                                                <select name="phone_area_code_id" id="phone_area" class="form-control" onchange="phone_area(this.value)">
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="phone">Phone:</label>
                                                <input type="text" id="phone" name="phone" class="form-control" required>
                                            </div>
                                            <div class="col">
                                                <label for="cell_phone_area_code_id">Cell code:</label>
                                                <select name="cell_phone_area_code_id" id="cell_phone_area" class="form-control" onchange="cell_phone_area(this.value)">
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="cell_phone">Cell Phone:</label>
                                                <input type="text" id="cell_phone" name="cell_phone" class="form-control" >
                                            </div>
                                            <div class="col">
                                                <label for="email">Email:</label>
                                                <input type="email" id="email" name="email" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="address">Address:</label>
                                                <input type="text" id="address" name="address" class="form-control" required>
                                            </div>
                                            <div class="col">
                                                <label for="profession">Profession:</label>
                                                <input type="text" id="profession" name="profession" class="form-control" required>
                                            </div>
                                            <div class="col">
                                                <label for="years_experience">Years of Experience:</label>
                                                <input type="number" id="years_experience" name="years_experience" class="form-control" required>
                                            </div>
                                            <div class="col">
                                                <label for="institution">Institution:</label>
                                                <input type="text" id="institution" name="institution" class="form-control" required>
                                            </div>
                                        </div>
                                        
                                            <div class="modal-footer row col-auto ml-5 pt-3">
                                                <button type="submit" class="btn bg-primary" id="btn-nuevo">
                                                    Agregar
                                                </button>
                                                <input class="btn bg-info" type="reset" value="Limpiar">
                                                <button type="button" class="btn btn-danger" data-dismiss="modal">
                                                    Cancelar
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-4">
        <div class="col-12">
            <div class="card">
                <div class="container-fluid">
                    <div class="row pt-4">
                        <div class="col-12">
                            <div class="card">

                                <div class="card-header">
                                    <h5 class=" text-center">Detalles de las ORT</h5>
                                    <button class="btn shadow float-right bg-info" id="btn-creacion" data-toggle="modal"
                                        data-target="#registro" name="Nueva MTA" style=" color:#ffff">
                                        Nueva ORT
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade show active" id="custom-tabs-four-corE" style="margin:5px">
                    <div class=" dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-striped dataTable dtr-inline bg-info"
                                    role="grid" aria-describedby="info">
                                    <thead class="text-center text-white">
                                        <tr>
                                            {{-- <th>Identificación</th> --}}
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Cod. Area</th>
                                            <th>Cell Area</th>
                                            <th>Estado</th>
                                            <th>Municipio</th>
                                            <th>Parroquia</th>
                                            <th>Acciones</th>

                                        </tr>
                                    </thead>
                                    <!-- aqui va el thbody -->
                                    <tbody class="text-center">
                                        @foreach ($persons as $person)
                                            <tr>

                                                <td>{{ $person->name_1 }}</td>
                                                <td>{{ $person->surname_1 }}</td>
                                                <td>{{ $person->phoneAreaCode->name }}</td>
                                                <!-- <td>{{ $person->cellPhoneAreaCode->code }}</td> -->
                                                <td>{{ $person->federalState->name }}</td>
                                                <td>{{ $person->municipality->name }}</td>
                                                <td>{{ $person->parish->name }}</td>
                                                <td class="text-center">
                                                    <td class="text-center mx-0">
                                                         <a
                                                            href="{{ route('register_ort.show', $person->id) }}">
                                                            <i class="material-icons">visibility</i>

                                                        </a>
                                                        <a
                                                            href="{{ route('register_ort.edit', $person->id) }}">
                                                            <i class="material-icons mx-1">edit</i>

                                                        </a>

                                                        <a
                                                            onclick="return confirm('Esta seguro que desea restablecer el usuario? Tenga en cuenta que estos cambios son irreversibles')"
                                                            href="{{ route('register_ort.destroy', $person->id) }}">
                                                            <i class="material-icons ">restart_alt</i>

                                                        </a>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // window.print();
        window.onload=function() {
		    var url = "{{ url('/extras/labels/estados') }}";
            var url1 = "{{ url('/extras/labels/CellPhoneAreaCode') }}";
            var url2 = "{{ url('/extras/labels/PhoneAreaCode') }}";
            $.get(url, function(data, status) {
                var $el = $("#estado");
                $el.empty(); // remove old options
                $el.append($("<option selected disabled></option>").text(
                    'SELECCIONE UNA OPCION...'));
                $.each(data, function(key, value) {
                    $el.append($("<option></option>").attr("value", value.id).text(
                        value.name));
                });
            })
            $.get(url1, function(data, status) {
                var $el = $("#cell_phone_area");
                $el.empty(); // remove old options
                $el.append($("<option selected disabled></option>").text(
                    'SELECCIONE...'));
                $.each(data, function(key, value) {
                    $el.append($("<option></option>").attr("value", value.id).text(
                        value.code));
                });
            })
            $.get(url2, function(data, status) {
                var $el = $("#phone_area");
                $el.empty(); // remove old options
                $el.append($("<option selected disabled></option>").text(
                    'SELECCIONE...'));
                $.each(data, function(key, value) {
                    $el.append($("<option></option>").attr("value", value.id).text(
                        value.name));
                });
            })
            .fail(function() {
                console.log("Error");
            });
		}
        function municipios(id) {
            var url = "{{ url('/extras/labels/municipios') }}";
            $.get(url, function(data, status) {
                var $el = $("#municipio");
                $el.empty(); // remove old options
                $el.append($("<option selected disabled></option>").text(
                    'SELECCIONE UNA OPCION...'));
                $.each(data, function(key, value) {
                    if (id == value.id_federal) {
                        $el.append($("<option></option>").attr("value", value.id).text(
                            value.name));
                    }
                });
            }).fail(function() {
                console.log("Error");
            });
        }

        function parroquias(id) {
            var url = "{{ url('/extras/labels/parroquias') }}";
            $.get(url, function(data, status) {
                console.log(data);
                var $el = $("#parroquia");
                $el.empty(); // remove old options
                $el.append($("<option selected disabled></option>").text(
                    'SELECCIONE UNA OPCION...'));
                $.each(data, function(key, value) {
                    if (id == value.id_municipalities) {
                        $el.append($("<option></option>").attr("value", value.id).text(
                            value.name));
                    }
                });
            }).fail(function() {
                console.log("Error");
            });
        }
    </script>
    <!--   Core JS Files   -->
    @stack('js')
    <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
    <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="{{ asset('material') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="{{ asset('material') }}/js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="{{ asset('material') }}/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('material') }}/js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="{{ asset('material') }}/js/plugins/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE'"></script>
    <!-- Chartist JS -->
    <script src="{{ asset('material') }}/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('material') }}/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>

</body>

</html>
