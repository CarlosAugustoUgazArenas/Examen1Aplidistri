@extends('web.layout')
@section('contenido')

<!--CONTENIDO-->
      <!-- TABLA -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- /.col-md-6 -->
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="m-0">Propiedades
                      <a href="{{route('propiedades.create')}}" class="btn btn-primary">
                      <i class="fas fa-file"></i> Nuevo</button> 
                      <a href="" class="btn btn-success"><i class="fas fa-file-csv"></i> CSV</a></h5>
                </div>
                <div class="card-body">
                  <form action="{{route('propiedades.index')}}" method="GET">
                    
                    <div class="input-group">
                      <input name="texto" value="{{$texto}}" type="text" class="form-control" value="">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-info"><i class="fas fa-search"></i>
                          Buscar</button>
                      </div>
                    </div>
                  </form>
                  @if(Session::has('mensaje'))
                  <div class="alert alert-info alert-dismissible fade show mt-2">
                      <span class="alert-icon"><i class="fa fa-info"></i></span>
                      <span class="alert-text">{{Session::get('mensaje')}}</span>
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  @endif
                  @if(count($Propiedades)<=0)
                  <div class="alert alert-secondary mt-2" role="alert">
                    No hay registros para mostrar
                  </div>
                  @endif
                  <div class="mt-2 table-responsive">
                    <table class="table table-striped table-bordered table-hover table-sm">
                      <thead>
                        <tr>
                          <th style="width: 20%">Opciones</th>
                          <th style="width: 80%">Nombre</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($Propiedades)<=0)
                        <tr>
                          <td colspan="3">No hay resultados</td>
                        </tr>
                        @else
                        @foreach($Propiedades as $reg)
                        <tr>
                          <td><a href="/" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> </a>
                            <button type="button" data-toggle="modal" data-target="#modal-eliminar-{{$reg->id}}"
                              class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                          </td>
                          <td>{{$reg->nombre}}</td>
                        </tr>
                        @include('propiedades.delete')
                          @endforeach
                        @endif
                      </tbody>
                    </table>
                    {{$categorias->appends(["texto" => $texto ])}}
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-md-6 -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- FIN TABLA -->
      <!--FIN CONTENIDO-->

      @endsection