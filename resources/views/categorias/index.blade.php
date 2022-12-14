@extends('layouts.main')


@section('content')
    @if ($query)
        <div class="alert alert-info" role="alert">
            <p>A continuacion se presentan los resultados de la busqueda <span class="fw-bold">{{ $query }}</span></p>
        </div>
    @endif
    @if ($mensaje = Session::get('exito'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ $mensaje }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center">
            <h1>Categorias</h1>
        </div>
        <div class="card-body">
    @can(['administrador'])
        <div class="mt-3">
            <a href="{{ route('categorias.create') }}" class="btn btn-secondary mb-3">
                Crear nueva categoria
            </a>
        </div>
    @endcan
            <div class="my-3">
                @if (count($categorias) > 0)
                    <table class="table table-hover">
                        <thead>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                            @foreach ($categorias as $item)
                                <tr>
                                    <td>{{ $item->nombre }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('categorias.show', $item->id) }}"
                                            class="btn btn-info justify-content-start me-1 rounded-circle"><i
                                                class="fa-solid fa-eye"></i></a>
                                        <a href="{{ route('categorias.edit', $item->id) }}"
                                            class="btn btn-warning justify-content-start me-1 rounded-circle"><i
                                                class="fa-solid fa-pen-to-square"></i></a>
                                        <form action="{{ route('categorias.destroy', $item->id) }}" method="post"
                                            class="justify-content-start form-delete">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger rounded-circle"><i
                                                    class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $categorias->links() }}
                @else
                    <p>no hay nada que coincida con la busqueda</p>
                @endif

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
    <script>
        $('.form-delete').submit(function(e) {
            e.preventDefault();
            //Lanzar alerta de Sweetalert
            Swal.fire({
                title: '??Esta seguro de eliminar?',
                text: "Esta acci??n no se podr?? deshacer!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#0d6efd',
                cancelButtonColor: '#dc3545',
                confirmButtonText: 'Si, eliminar!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        });
    </script>

@endsection
