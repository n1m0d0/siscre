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
                                <h4 class="widget-title">Registro de Persona</h4>
                            </header><!-- .widget-header -->
                            <hr class="widget-separator">
                            <div class="widget-body">
                                <form method="POST" action="{{ route('person.store') }}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label>Primer Nombre:</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Segundo Nombre:</label>
                                        <input type="text" name="second_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Apellido Paterno:</label>
                                        <input type="text" name="surname" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Apellido Materno:</label>
                                        <input type="text" name="second_surname" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Apelido de Casado:</label>
                                        <input type="text" name="married_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>CI:</label>
                                        <input type="text" name="identification_document" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Extencion:</label>
                                        <Select class="form-control" name="extension">
                                            <option value="CH">CH</option>
                                            <option value="LP">LP</option>
                                            <option value="CB">CB</option>
                                            <option value="OR">OR</option>
                                            <option value="PT">PT</option>
                                            <option value="TJ">TJ</option>
                                            <option value="SC">SC</option>
                                            <option value="BE">BE</option>
                                            <option value="PD">PD</option>
                                        </Select>
                                    </div>
                                    <div class="form-group">
                                        <label>Fecha de Nacimiento:</label>
                                        <input type="date" name="date_of_birth" class="form-control">
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
