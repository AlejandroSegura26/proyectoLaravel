<template>
    <main class="main">
        <!-- Breadcrumb -->
        <ol class="breadcrumb">

        </ol>
        <div class="container-fluid">
        <!-- Ejemplo de tabla Listado -->
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> Clientes
                    <button type="button" class="btn btn-secondary">
                <i class="icon-plus"></i>&nbsp;Nuevo
                    </button>
                <button type="button" class="btn btn-info">
                    <i class="icon-doc"></i>&nbsp;Reporte
                </button>
            </div>
            <div class="card-body">
                <div class="form-group row">
                    <div class="col-md-6">
                        <div class="input-group">
                            <select class="form-control col-md-3" v-model="criterio">
                                <option value="nombre">Nombre</option>
                                <option value="descripcion">Descripción</option>
                            </select>
                            <input type="text" v-model="buscar" class="form-control" placeholder="Texto a buscar">
                            <button type="submit"  class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                        <th>Opciones</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Descripción</th>
                        <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="categoria in arrayCategoria" :key="categoria.id">
                            <td>
                                <button type="button"  class="btn btn-warning btn-sm">
                                    <i class="icon-pencil"></i>
                                </button> &nbsp;
                                <template v-if="categoria.condicion">
                                    <button type="button" class="btn btn-danger btn-sm" >
                                        <i class="icon-trash"></i>
                                    </button>
                                </template>
                                <template v-else>
                                    <button type="button" class="btn btn-info btn-sm" >
                                        <i class="icon-check"></i>
                                    </button>
                                </template>
                            </td>
                            <td v-text="categoria.nombre"></td>
                            <td v-text="categoria.descripcion"></td>
                            <td>
                                <div v-if="categoria.condicion">
                                    <span class="badge badge-success">Activo</span>
                                </div>
                                <div v-else>
                                    <span class="badge badge-danger">Desactivado</span>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <nav>
                <ul class="pagination">
                    <li class="page-item" >
                        <a class="page-link" href="#" >Ant</a>
                    </li>
                    <li class="page-item" >
                        <a class="page-link" href="#" ></a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="#" >Sig</a>
                    </li>
                </ul>
                </nav>
            </div>
        </div>
        <!-- Fin ejemplo de tabla Listado -->
        </div>
        <!--Inicio del modal agregar/actualizar-->
        <div class="modal fade" tabindex="-1"  role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-primary modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" v-text="tituloModal"></h4>
                        <button type="button" class="close"  aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">Nombre(*)</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" placeholder="Nombre de categoría">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="email-input">Descripción</label>
                                <div class="col-md-9">
                                    <input type="email"  class="form-control" placeholder="Ingrese descripción">
                                </div>
                            </div>
                            <div  class="form-group row div-error">
                                <div class="text-center text-error">
                                    <div ></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" >Cerrar</button>
                        <button type="button" class="btn btn-primary" >Guardar</button>
                        <button type="button" class="btn btn-primary" >Actualizar</button>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!--Fin del modal-->
    </main>
</template>