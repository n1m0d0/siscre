@extends('layouts.app')

@section('content')
    <!-- APP MAIN ==========-->
    <main id="app-main" class="app-main">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <div class="col-md-12 col-lg-8 offset-lg-2">
                        <div class="widget">
                            <header class="widget-header">
                                <h4 class="widget-title">Registro de Empresa</h4>
                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body">
                                <form method="POST" action="{{ route('business.store') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group invisible">
                                        <input type="text" name="person_id" class="form-control" value="{{ $person->id }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Nombre de la Empresa:</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>NIT:</label>
                                        <input type="text" name="nit" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Rubro del Negocio Propio</label>
                                        <input type="text" name="busniss_line" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Direccion Laboral:</label>
                                        <input type="text" name="address" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Cargo/Puesto que Ocupa:</label>
                                        <input type="text" name="job" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Tipo de Negocio:</label>
                                        <input type="text" name="business_type" class="form-control">
                                    </div>
                                    <label>Tiempo en el Negocio:</label>
                                    <div class="form-group">
                                        <label>Año:</label>
                                        <input type="number" name="year" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Mes:</label>
                                        <input type="number" name="month" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Semana:</label>
                                        <input type="number" name="week" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Dias:</label>
                                        <input type="number" name="day" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success btn-block btn-md">Guardar</button>
                                    </div>
                                </form>
                            </div><!-- .widget-body -->
                        </div><!-- .widget -->
                    </div><!-- END column -->
                </div><!-- .row -->
            </section>
        </div>
    </main>
@endsection
