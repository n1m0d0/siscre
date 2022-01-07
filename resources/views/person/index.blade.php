@extends('layouts.app')

@section('content')
    <!-- APP MAIN ==========-->
    <main id="app-main" class="app-main">
        <div class="wrap">
            <section class="app-content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget p-lg">
                            <a href="{{ route('person.create') }}" class="btn btn-success float-right">Nuevo</a>
                            <h4 class="m-b-lg">Persona</h4>
                            <table class="table agente-payments-table">
                                <thead>
                                    <tr>
                                        <th>Nombre Completo</th>
                                        <th>CI</th>
                                        <th>Email</th>
                                        <th>Telefono</th>
                                        <th>Celular</th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($people as $person)
                                        <tr>
                                            <td>{{ $person->name }} {{ $person->second_name }} {{ $person->surname }}
                                                {{ $person->second_surname }}</td>
                                            <td>{{ $person->identification_document }}</td>
                                            <td>{{ $person->email }}</td>
                                            <td>{{ $person->telephone }}</td>
                                            <td>{{ $person->cellphone }}</td>
                                            <td>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- .widget -->
                    </div>
                </div><!-- .row -->
            </section>
        </div>
    </main>
@endsection
