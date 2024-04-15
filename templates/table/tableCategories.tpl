
<div class="container mt-5">
    <h3>Agregar Categorias</h3>
    <table class="table table-hover w-75 table-light">
        <tbody>
            <tr>
                <form class="form-group" action="agregar-categoria">
                    <td>
                        <input type="text" class="form-control w-75" required="required" placeholder="Nombre de categoria" name="nombre_categoria">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-success">Agregar Categoria</button>
                    </td>
                    <td></td>
                </form>
            </tr>

            {foreach from=$categorias item=categoria}
                    <tr>                        
                         <td>{$categoria->nombre}</td>
                         <td><a href="borrarCategoria/{$categoria->id}" class = "btn btn-outline-danger">Eliminar</a></td>
                         <td><a href="modificarCategorias/{$categoria->id}" class = "btn btn-outline-warning">Modificar</a></td>
                    </tr>
            {/foreach}
        </tbody>    
    </table>
</div>

