<div class="container mt-5">
    <table class="table table-hover table-responsive table-light">
        <thead>
            <tr>
                <th>Categoria</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Acciones</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {if isset($productos)}
                {foreach from=$productos item=producto}
                    <tr>
                        <td>{$producto->nombre_categoria}</td>
                        <td>{$producto->nombre_producto}</td>
                        <td>${$producto->precio}</td>
                        <td>
                            <a href="detalle/{$producto->id_producto}" class="btn btn-outline-success">Ver detalle</a>
                        </td>
                        <td>
                            <a href="borrar/{$producto->id_producto}" class="btn btn-outline-danger">Eliminar</a>
                        </td>
                        <td>
                            <a href="modificar/{$producto->id_producto}" class="btn btn-outline-warning">Modificar</a>
                        </td>
                    </tr>
                {/foreach}
            {/if}
        </tbody>
    </table>
</div>
<div class="container mt-5 mb-5">
    {if isset($smarty.session.USER_ROL) && $smarty.session.USER_ROL == "1"}
        <div class="container">
            <h3>Agregar un Producto</h3>
            <form class="form-group" action="agregar-producto" method="POST" enctype="multipart/form-data">
                <tr>
                    <td>{include file="form/selectCategory.tpl"}</td>
                    <td><input type="text" class="form-control" required="required" placeholder="Nombre de producto"
                            name="producto"></td>
                    <td><input type="number" class="form-control" required="required" placeholder="Precio" name="precio">
                    </td>
                    <td>
                        <input type="text" class="form-control" required="required" placeholder="Detalle" name="detalle">
                    </td>
                    <td>
                        <input type="file" name="imagen" id="imageToUpload" class="form-control">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-success mt-3 mb-5">Agregar</button>
                    </td>
                </tr>
            </form>
        {/if}
</div>