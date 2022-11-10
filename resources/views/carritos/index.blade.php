@extends('layouts.main')

@section('content')

<link rel="stylesheet" href="{{ asset('css/main.css') }}">

<div class="card">
    <div class="card-header text-center">
        <h1>Recibo de compra</h1>
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th class="text-start">Comprar</th>
                </tr>
            </thead>
            <tbody>
   
                    <tr>
                        <td>{{ $productos->nombre }}</td>
                        <td>
                           {{ $productos->precio }}
                        </td>
                        <td>
                            
                                <button class="btn btn-outline-dark toggle btn-block" type="button" data-bs-toggle="dropdown">
                                  Detalles de compra
                                </button>                          
                                <div class="card-body dropdown-menu dropdown-menu-lg-end" > 

                                    <p> <strong>Detalles: </strong>{{ $productos->descripcion }} </p>
                                    <p> <strong>Categoria: </strong>{{ $categorias->nombre}} </p>
                                    <img class="preFoto" src="{{ asset('storage') . '/' . $productos->foto }}" alt="foto">
                                    
                                    <button class="btn btn-outline-dark toggle btn-block" type="button" data-bs-toggle="dropdown">
                                    Comprar
                                    </button>     
                                 
                                </div> 
                                
                        
                        </td>
                       
                    </tr>
            
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('scripts')

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

@endsection
