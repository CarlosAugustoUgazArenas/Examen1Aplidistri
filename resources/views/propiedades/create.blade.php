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
                  <h5 class="m-0">Propieades </h5>
                </div>
                <div class="card-body">
                  <form method="POST" action="{{route('categoria.store')}}">
                    @csrf
                    <div class="row">
                      <div class="col-lg-12">
                        <label for="">Nombre</label>
                        <input type="text"  name="nombre" class="form-control">
                      </div>
                      <div class="col-lg-12">
                        <label for="">direccion</label>
                        <input type="text"  name="direccion" class="form-control">
                      </div>
                      <div class="col-lg-12">
                        <label for="">Caracteristicas</label>
                        <input type="text"  name="caracteristicas" class="form-control">
                      </div>
                      <div class="col-lg-12">
                        <label for="">Estado</label>
                        <input type="text"  name="estado" class="form-control">
                      </div>
                      <div class="col-lg-12">
                        <label for="">Precio Alquiler</label>
                        <input type="bolean"  name="precio" class="form-control">
                      </div>
                      <div class="form-group">
                      <button type="sub" class="btn btn-success">Guardar</button> 
                      <button class="btn btn-default">Cancelar</button> 
                    </div>

                      </div>
                    </div>


                  </form>
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
     
      
      <!--FIN MODAL ELIMINAR-->
      <!--FIN CONTENIDO-->

      @endsection