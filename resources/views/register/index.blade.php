@extends('layouts.app')

@section('content')
    {{-- Modal --}}
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
                                <form action="{{ route('register_ort.store') }}" method="post" enctype="multipart/form-data">
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
                                            <input class="form-control" name="birth_date" type="date" required>
                                        </div>
                                        <div class="col">
                                            <label for="sex">{{ __('sex') }}</label>
                                            <select name="sex" class="form-control" required>
                                                <option value='0'>Man</option>
                                                <option value='1'>Woman</option>
                                            </select>
                                        </div>
                                        <div class="col">
                                            <label for="nationality">{{ __('Nationality') }}</label>
                                            <select name="nationality" class="form-control" required>
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
                                        {{-- <div class="text-center ">
                                            <hr>
                                            <h6><b> Ingrese las Especificaciones de la Bomba</b> </h6>
                                            <hr>
                                        </div>
                                        <div class="form-group row col-12 mt-4 ml-1">
                                            <div class="ml-3 mx-auto">
                                                <label for="modelo">Modelo</label>
                                                <input class="form-control" class="form-control" name="modelo"
                                                    type="number" placeholder="100SR20F66-1363">
                                            </div>
                                            <div class="col-auto ml-3 mx-auto">
                                                <label for="hpbomba">HP (Caballos de Fuerzas)</label>
                                                <input class="form-control" name="hpbomba" type="number"
                                                    placeholder="20">
                                            </div>
                                            <div class="col-2 mx-auto">
                                                <label for="caudal">Caudal (m³/s)</label>
                                                <input class="form-control" type="string" name="caudal"
                                                    placeholder="99">
                                            </div>
                                            <div class="ml-2 mx-auto">
                                                <label for="altura">Altura (Metros)</label>
                                                <input class="form-control" type="number" name="altura"
                                                    placeholder="15">
                                            </div>
                                            <div class="ml-3 mx-auto">
                                                <label for="diametro">Diámetro (Metros)</label>
                                                <input class="form-control" type="number" name="diametro"
                                                    placeholder="13">
                                            </div>
                                        </div> --}}
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
                                <h5 class=" text-center">Detalles de la Perforación de los Nuevos Pozos</h5>
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
                                        <th>Estado</th>
                                        <th>Municipio</th>
                                        <th>Parroquia</th>
                                        <th>Acciones</th>

                                    </tr>
                                </thead>
                                <!-- aqui va el thbody -->
                                <tbody class="text-center">
                                    {{-- @foreach ($persons as $data)
                                        <tr>
                                            <td>{{ $data->name_1 }}</td>
                                            <td>{{ $data->suname_1 }}</td>
                                            <td>{{ $data->federal_state }}</td>
                                            <td>{{ $data->municipalities }}</td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-Secondary" id="btn-edit"
                                                    data-toggle="modal" data-target="#edit" name="button"
                                                    onclick="return confirm('Estás seguro que deseas editar el registro?');">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <a href="#" class="btn btn-primary">
                                                    <i class="material-icons">remove_red_eye</i>
                                                </a>
                                                <a href="" class="btn btn-danger"
                                                    onclick="return confirm('Estás seguro que deseas eliminar el registro?');">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                            </td>

                                        </tr>
                                    @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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

