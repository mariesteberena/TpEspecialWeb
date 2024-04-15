<div class="container">
    <table class="table table-hover table-responsive table-light">
        
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
                <th></th>
                <th>Modificar</th> 
                <th></th>               
            </tr>
        </thead>
        <tbody class="table table-responsive table-light">
            {foreach from=$users item=user}
            <tr>
                <td>{$user->nombre}</td>
                <td>{$user->email}</td>
                <td>{$user->rol}</td>
                <form action="cambiarRol" method="post">
                    <td>
                        <input hidden type="hidden" name="user-id" value="{$user->id_usuario}"></input>
                        <select name="rol-id" id="" class="form-select">
                        <option disabled selected>Nuevo Rol</option>
                            {if $user->id_rol == 1}
                            <option value="2">User</option>
                            {else}
                            <option value="1">Admin</option>
                            {/if}
                        </select>
                    </td>
                    <td>
                        <button href="cambiarRol" class="btn btn-outline-warning">Guardar cambio</button>
                    </td>
                </form>
                <td>
                    <a href="borrarUsuario/{$user->id_usuario}" class="btn btn-outline-danger">Eliminar</a>
                </td>

            </tr>
            {/foreach}
        </tbody>
    </table>
</div>