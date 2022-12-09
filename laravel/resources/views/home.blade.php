@extends('layouts.app')

@section('title', 'Página Inicial')

@section('content_header')
    <h1>Página Inicial</h1>
@stop

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

            <div class="w-full p-6">
                <p class="text-gray-700">
                    Bienvenido al sitio de gestión de registros eclesiales de la parroquia San Vicente de Paúl,
                    @auth
                    {{ auth()->user()->name }}.
                    @else
                    por favor, 
                    <a href="login">inicie sesión</a>.
                    @endauth
                </p>
                <p>
                    @auth
                        @if( auth()->user()->roles == '[]' )
                        Usted no tiene permisos para utilizar el sitio web, por favor, contacte un administrador para que le asigne un rol.
                        @endif
                        @can('users.index')
                        Para ver la lista de usuarios, seleccione en la barra lateral "Usuarios" o haga <a href="users">click aquí.</a><br>
                        @endcan
                        @can('users.create')
                        Para ingresar un nuevo usuario, seleccione en la barra lateral "Registrar Usuario" o haga <a href="users/create">click aquí.</a><br>
                        @endcan
                        @can('users.edit')
                        Para editar un usuario, seleccione el botón "Editar" a la derecha del usuario.<br>
                        @endcan
                        @can('users.destroy')
                        Para eliminar un usuario, seleccione el botón "Eliminar" a la derecha del usuario.<br>
                        @endcan
                </p>
                <p>
                        @can('roles.index')
                        Para ver la lista de roles, seleccione en la barra lateral "Lista de Roles" o haga <a href="roles">click aquí.</a><br>
                        @endcan
                        @can('roles.create')
                        Para ingresar un nuevo rol, seleccione el botón "Nuevo Rol" o haga <a href="roles/create">click aquí.</a><br>
                        @endcan
                        @can('roles.edit')
                        Para editar un rol, seleccione el botón "Editar" a la derecha del rol.<br>
                        @endcan
                        @can('roles.destroy')
                        Para eliminar un rol, seleccione el botón "Eliminar" a la derecha del rol.<br>
                        @endcan
                </p>
                <p>
                        @can('certificates.index')
                        Para ver la lista de certificados, seleccione en la barra lateral "Lista de Certificados" o haga <a href="certificates">click aquí.</a><br>
                        @endcan
                        @can('certificates.create')
                        Para ingresar un nuevo certificado, seleccione el botón "Agregar Certificado" o haga <a href="certificates/create">click aquí.</a><br>
                        @endcan
                        @can('certificates.edit')
                        Para editar un certificado, seleccione el botón "Editar" a la derecha del certificado.<br>
                        @endcan
                        @can('certificates.destroy')
                        Para eliminar un certificado, seleccione el botón "Eliminar" a la derecha del certificado.<br>
                        @endcan
                </p>
                <p>
                        @can('chapels.index')
                        Para ver la lista de capillas, seleccione en la barra lateral "Lista de Capillas" o haga <a href="chapels">click aquí.</a><br>
                        @endcan
                        @can('chapels.create')
                        Para ingresar una nueva capilla, seleccione el botón "Agregar Capilla" o haga <a href="chapels/create">click aquí.</a><br>
                        @endcan
                        @can('chapels.edit')
                        Para editar una capilla, seleccione el botón "Editar" a la derecha de la capilla.<br>
                        @endcan
                        @can('chapels.destroy')
                        Para eliminar una capilla, seleccione el botón "Eliminar" a la derecha de la capilla.<br>
                        @endcan
                </p>
                <p>
                        @can('parishpriests.index')
                        Para ver la lista de párrocos, seleccione en la barra lateral "Lista de Párrocos" o haga <a href="parishpriests">click aquí.</a><br>
                        @endcan
                        @can('parishpriests.create')
                        Para ingresar un nuevo párroco, seleccione el botón "Agregar Párroco" o haga <a href="parishpriests/create">click aquí.</a><br>
                        @endcan
                        @can('parishpriests.edit')
                        Para editar un párroco, seleccione el botón "Editar" a la derecha del párroco.<br>
                        @endcan
                        @can('parishpriests.destroy')
                        Para eliminar un párroco, seleccione el botón "Eliminar" a la derecha del párroco.<br>
                        @endcan
                </p>
                <p>
                        @can('marriages.index')
                        Para ver la lista de matrimonios, seleccione en la barra lateral "Lista de Matrimonios" o haga <a href="marriages">click aquí.</a><br>
                        @endcan
                        @can('marriages.create')
                        Para ingresar un nuevo matrimonio, seleccione en la barra lateral "Crear Registro Eclesial" y luego "Nuevo Matrimonio" o haga <a href="marriages/create">click aquí.</a><br>
                        @endcan
                        @can('marriages.edit')
                        Para editar un matrimonio, seleccione el botón "Editar" a la derecha del registro de matrimonio.<br>
                        @endcan
                        @can('marriages.destroy')
                        Para eliminar un matrimonio, seleccione el botón "Eliminar" a la derecha del registro de matrimonio.<br>
                        @endcan
                        @can('marriages.show')
                        Para ver en detalle un registro de matrimonio, seleccione el botón "Mostrar" a la derecha del registro de matrimonio.<br>
                        Para generar el certificado del registro de matrimonio, seleccione el botón "Certificado PDF" luego de "Mostrar" el registro.<br>
                        @endcan
                        @can('marriages.export')
                        Para exportar los matrimonios de la base de datos, seleccione el botón "Exportar Matrimonios" o haga <a href="marriages/export">click aquí.</a><br>
                        @endcan
                        @can('marriages.import')
                        Para importar registros de matrimonios, seleccione en la barra lateral "Importar Registros" o haga <a href="marriages/import">click aquí.</a><br>
                        @endcan
                </p>
                <p>
                        @can('confirmations.index')
                        Para ver la lista de confirmaciones, seleccione en la barra lateral "Lista de Confirmaciones" o haga <a href="confirmations">click aquí.</a><br>
                        @endcan
                        @can('confirmations.create')
                        Para ingresar una nuevo confirmación, seleccione en la barra lateral "Crear Registro Eclesial" y luego "Nueva Confirmación" o haga <a href="confirmations/create">click aquí.</a><br>
                        @endcan
                        @can('confirmations.edit')
                        Para editar una confirmación, seleccione el botón "Editar" a la derecha del registro de confirmación.<br>
                        @endcan
                        @can('confirmations.destroy')
                        Para eliminar una confirmación, seleccione el botón "Eliminar" a la derecha del registro de confirmación.<br>
                        @endcan
                        @can('confirmations.show')
                        Para ver en detalle un registro de confirmación, seleccione el botón "Mostrar" a la derecha del registro de confirmación.<br>
                        Para generar el certificado del registro de confirmación, seleccione el botón "Certificado PDF" luego de "Mostrar" el registro.<br>
                        @endcan
                        @can('confirmations.export')
                        Para exportar las confirmaciones de la base de datos, seleccione el botón "Exportar Confirmaciones" o haga <a href="confirmations/export">click aquí.</a><br>
                        @endcan
                        @can('confirmations.import')
                        Para importar registros de confirmaciones, seleccione en la barra lateral "Importar Registros" o haga <a href="confirmations/import">click aquí.</a><br>
                        @endcan
                </p>
                <p>
                        @can('baptisms.index')
                        Para ver la lista de bautizos, seleccione en la barra lateral "Lista de Bautizos" o haga <a href="baptisms">click aquí.</a><br>
                        @endcan
                        @can('baptisms.create')
                        Para ingresar un nuevo bautizo, seleccione en la barra lateral "Crear Registro Eclesial" y luego "Nuevo Bautizo" o haga <a href="baptisms/create">click aquí.</a><br>
                        @endcan
                        @can('baptisms.edit')
                        Para editar un bautizo, seleccione el botón "Editar" a la derecha del registro de bautizo.<br>
                        @endcan
                        @can('baptisms.destroy')
                        Para eliminar un bautizo, seleccione el botón "Eliminar" a la derecha del registro de bautizo.<br>
                        @endcan
                        @can('baptisms.show')
                        Para ver en detalle un registro de bautizo, seleccione el botón "Mostrar" a la derecha del registro de bautizo.<br>
                        Para generar el certificado del registro de bautizo, seleccione el botón "Certificado PDF" luego de "Mostrar" el registro.<br>
                        @endcan
                        @can('baptisms.export')
                        Para exportar los bautizos de la base de datos, seleccione el botón "Exportar Bautizos" o haga <a href="baptisms/export">click aquí.</a><br>
                        @endcan
                        @can('baptisms.import')
                        Para importar registros de bautizos, seleccione en la barra lateral "Importar Registros" o haga <a href="baptisms/import">click aquí.</a><br>
                        @endcan
                    @endauth
                </p>
            </div>
        </section>
    </div>
</main>
@endsection