@extends('../layouts/app')

<!--Principal-->
@section('contenido')

  <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title"> Modifica Venta</h2>
                        
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                <div class="row">
                  
                         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <h5 class="card-header">Modifica Venta</h5>
                                <div class="card-body">
                                    <form action="{{route('modificav', $consulta->id)}}" method="get">
                                                {{ csrf_field() }}
                                                      {{ method_field('PUT') }}
                                      <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Venta</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa la Venta"  name="venta" class="form-control" value="{{$consulta->venta}}">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Cantidad</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa la Cantidad de la  Venta"  name="cantidad" class="form-control" value="{{$consulta->cantidad}}">
                                            </div>
                                        </div>

                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Precio</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa el Precio de la  Venta"  name="precio" class="form-control" value="{{$consulta->precio}}">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Caracteristica</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa las Caracteristicas de la  Venta"  name="caracteristicas" class="form-control" value="{{$consulta->caracteristicas}}">
                                            </div>
                                        </div>

                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Descripcion</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa la Descripcion  de la  Venta"  name="descripcion" class="form-control" value="{{$consulta->descripcion}}">
                                            </div>
                                        </div>

                                          <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Cliente</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="Ingresa el Cliente  de la  Venta"  name="cliente" class="form-control" value="{{$consulta->cliente}}">
                                            </div>
                                        </div>
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary">Guardar</button>
                                                
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                </div>

            </div>

  
@endsection