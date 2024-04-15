<div class="container col-sm-8 m-4">
    <table class="table table-hover table-responsive table-light">
        <thead>
            <tr>
                <th>Categoria</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Acciones</th>
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
                            <a href="detalle/{$producto->id_producto}" class="btn btn-dark">Ver detalle</a>
                        </td>
                    </tr>
                {/foreach}
            {/if}
        </tbody>
    </table>
</div>