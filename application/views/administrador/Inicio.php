<main>
    <div class="row container">
        <div class="col m12 s12">
            <form action="/Administrador/Buscar" class="row">
                <div class="input-field col s12">
                    <input id="last_name" type="text" class="validate" name="query">
                    <label for="last_name">Ingrese CI o Apellido o Nombre o Nro Registro</label>
                </div>
                <button type="submit" class="btn blue">Buscar</button>
            </form>
        </div>
        <div class="col m12 s12">
            <table>
                <thead>
                    <tr>
                        <th>Nro Registro</th>
                        <th>Ap. Paterno</th>
                        <th>Ap. Materno</th>
                        <th>Nombres</th>
                        <th>Departamento</th>
                        <th>CI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (isset($personas_discapacidad)) {

                        foreach ($personas_discapacidad as $persona) { ?>
                            <tr>
                                <td> <a href="/Administrador/PcD/<?php echo $persona['nro_registro']?>"><?php echo $persona['nro_registro'] ?></a> </td>
                                <td><?php echo $persona['ap_paterno'] ?></td>
                                <td><?php echo $persona['ap_materno'] ?></td>
                                <td><?php echo $persona['nombres'] ?></td>
                                <td><?php echo $persona['departamento'] ?></td>
                                <td><?php echo $persona['ci'] ?></td>
                            </tr>
                    <?php }
                    }  ?>
                </tbody>
            </table>


        </div>
    </div>
</main>