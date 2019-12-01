<main>
    <div class="row">
        <div class="col l6 s12 izquierda">
            <form action="/Administrador/NuevoBeneficio" method="POST" class="row">
                <h5 class="center-align">Crear Nuevo Beneficio</h5>
                <div class="input-field col s12">
                    <input id="nombre" type="text" class="validate" name="NombreBeneficio">
                    <label for="nombre">Nombre del Beneficio</label>
                </div>
                <div class="input-field col s12">
                    <input id="descripcion" type="text" class="validate" name="DescripcionBeneficio">
                    <label for="descripcion">Descripción del Beneficio</label>
                </div>
                <div class="input-field col s12">
                    <button type="submit" class="btn blue">Guardar</button>
                </div>
            </form>
        </div>
        <div class="col l6 s12 derecha">
            <form action="/Administrador/AgregarBeneficioPcD" method="POST" class="row">
                <h5 class="center-align">Agregar Beneficio a PcD</h5>
                <div class="input-field col s12">
                    <input id="nro" type="text" class="validate" name="nro_registro">
                    <label for="nro">Nro de Registro PcD (ej. 19661010LAG)</label>
                </div>
                <div class="input-field col s12">
                    <input id="fecha" type="text" class="validate" name="fecha_beneficio">
                    <label for="fecha">Fecha de Registro del Beneficio (dd/mm/aaaa)</label>
                </div>
                <div class="input-field col s12">
                    <select name="id_beneficio">
                        <option value="" disabled selected>Choose your option</option>
                        <?php foreach ($beneficios as $beneficio) { ?>
                            <option value="<?php echo $beneficio['id_beneficio']?>"><?php echo $beneficio['nombre_beneficio']?></option>
                        <?php } ?>
                    </select>
                    <label>Seleccione Beneficio a Otorgar</label>
                </div>
                <div class="input-field col s12">
                    <input id="costo" type="text" class="validate" name="costo_estimado">
                    <label for="costo">Costo Estimado del Beneficio</label>
                </div>
                <div class="input-field col s12">
                    <button type="submit" class="btn blue">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</main>