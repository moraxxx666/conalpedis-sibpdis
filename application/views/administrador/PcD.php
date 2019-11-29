<main>

    <div class="row">
        <div class="col l4 s12 derecha">
            <img class="responsive-img circle" src="<?php echo base_url() ?>public/perfil/perfil.jpeg" alt="">


            <p class="center-align"> <?php echo $PcD['ap_paterno'] . " " . $PcD['ap_materno'] . " " . $PcD['nombres'] ?> </p>
            <div class="row">
                <div class="col s6">
                    <p><b>Fecha de Nacimiento: </b> </p>

                </div>
                <div class="col s6">
                    <p class="center-align"><?php echo $PcD['fecha_nacimiento'] ?></p>
                </div>
                <div class="col s6">
                    <p><b>Lugar de Nacimiento: </b> </p>

                </div>
                <div class="col s6">
                    <p class="center-align"><?php echo $PcD['departamento'] ?></p>
                </div>
                <div class="col s6">
                    <p><b>Carnet de Identidad: </b> </p>

                </div>
                <div class="col s6">
                    <p class="center-align"><?php echo $PcD['ci'] . " ( " . $PcD['expedido'].")" ?></p>
                </div>


                <div class="col s6">
                    <p><b>Edad: </b> </p>

                </div>
                <div class="col s6">
                    <p class="center-align"><?php echo $extra == null ? 'N/A' : $extra['edad']  ?></p>
                </div>
                <div class="col s6">
                    <p><b>Sexo: </b> </p>

                </div>
                <div class="col s6">
                    <p class="center-align"><?php echo $extra == null ? 'N/A' : $extra['sexo']  ?></p>
                </div>
                <div class="col s6">
                    <p><b>Dirección: </b> </p>

                </div>
                <div class="col s6">
                    <p class="center-align"><?php echo $educacion == null ? 'N/A' : $educacion['direccion']  ?></p>
                </div>
                <div class="col s6">
                    <p><b>Teléfono: </b> </p>

                </div>
                <div class="col s6">
                    <p class="center-align"><?php echo ($educacion == null || $rehabilitacion == null) ? 'N/A' : $educacion['telefono'] . " " . $rehabilitacion['telefono']  ?></p>
                </div>

            </div>




        </div>
        <div class="col l8 s12 izquierda">
            <div class="card">
                <p class="card-title center-align"><b> Datos Discapacidad</b></p>
                <div class="row ">
                    <div class="col s6">
                        <p class="center-align"><b>Nro de Registro: </b> </p>
                    </div>
                    <div class="col s6 datos">
                        <p class="center-align"><?php echo $PcD['nro_registro'] ?></p>
                    </div>
                    <div class="col s6">
                        <p class="center-align"><b>Fecha de Registro: </b> </p>
                    </div>
                    <div class="col s6 datos">
                        <p class="center-align"><?php echo $PcD['fecha_registro'] ?></p>
                    </div>
                    <div class="col s6">
                        <p class="center-align"><b>Institución: </b> </p>
                    </div>
                    <div class="col s6 datos">
                        <p class="center-align"><?php echo $PcD['institucion'] ?></p>
                    </div>
                    <div class="col s6">
                        <p class="center-align"><b>Tipo de Discapcidad: </b> </p>
                    </div>
                    <div class="col s6 datos">
                        <p class="center-align"><?php echo $PcD['tipo_discapacidad'] ?></p>
                    </div>
                    <div class="col s6">
                        <p class="center-align"><b>Porcentaje de Discapacidad: </b> </p>
                    </div>
                    <div class="col s6 datos">
                        <p class="center-align"><?php echo $PcD['porcentaje'] ?>%</p>
                    </div>
                    <div class="col s6">
                        <p class="center-align"><b>Grado de Discapacidad: </b> </p>

                    </div>
                    <div class="col s6">
                        <p class="center-align"><?php echo $extra == null ? 'N/A' : $extra['grado']  ?></p>
                    </div>
                    <div class="col s6">
                        <p class="center-align"><b>Carnetizado: </b> </p>

                    </div>
                    <div class="col s6">
                        <p class="center-align"><?php echo $carnetizado == null ? 'NO' : $carnetizado['carnetizado']  ?></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <p class="card-title center-align"><b> Otros Datos</b></p>
                <div class="row">
                    <div class="col s6">
                        <p class="center-align"><b>Estado Civil: </b> </p>

                    </div>
                    <div class="col s6">
                        <p class="center-align"><?php echo $extra == null ? 'N/A' : $extra['estado_civil']  ?></p>
                    </div>
                    <div class="col s6">
                        <p class="center-align"><b>Vive Con: </b> </p>

                    </div>
                    <div class="col s6">
                        <p class="center-align"><?php echo $extra == null ? 'N/A' : $extra['vive_con']  ?></p>
                    </div>
                    <div class="col s6">
                        <p class="center-align"><b>Seguro de Salud:</b> </p>

                    </div>
                    <div class="col s6">
                        <p class="center-align"><?php echo $extra == null ? 'N/A' : $extra['seguro']  ?></p>
                    </div>
                    <div class="col s6">
                        <p class="center-align"><b>Vivienda: </b> </p>

                    </div>
                    <div class="col s6">
                        <p class="center-align"><?php echo $extra == null ? 'N/A' : $extra['vivienda']  ?></p>
                    </div>
                    <div class="col s6">
                        <p class="center-align"><b>Oficio: </b> </p>

                    </div>
                    <div class="col s6">
                        <p class="center-align"><?php echo $extra == null ? 'N/A' : $extra['oficio']  ?></p>
                    </div>
                    <div class="col s6">
                        <p class="center-align"><b>Recibe Educación: </b> </p>

                    </div>
                    <div class="col s6">
                        <p class="center-align"><?php echo $educacion == null ? 'No' : $educacion['educacion']  ?></p>
                    </div>
                    <div class="col s6">
                        <p class="center-align"><b>Lee y Escribe: </b> </p>

                    </div>
                    <div class="col s6">
                        <p class="center-align"><?php echo $leen == null ? 'No' : $leen['lee_escribe']  ?></p>
                    </div>
                    <div class="col s6">
                        <p class="center-align"><b>Recibe Rehabilitación: </b> </p>

                    </div>
                    <div class="col s6">
                        <p class="center-align"><?php echo $rehabilitacion == null ? 'No' : $rehabilitacion['rehabilitacion']  ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>