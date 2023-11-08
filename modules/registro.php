<style>
.file-caption.icon-visible .file-caption-name {
    font-family: "Lato", sans-serif;
    color: #666;
}

.form-process {
    position: absolute;
    -webkit-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;
    transition: all 0.3s ease;
    background-image: none;
}

.form-process>div {
    background-color: #999;
}

.form-process,
#template-wedding-submitted,
.template-wedding-complete .form-process {
    display: none;
    opacity: 0;
    background-color: rgba(255, 255, 255, 0.7);
}

.template-wedding-processing .form-process {
    display: block;
    opacity: 1;
}

.divider.divider-center.divider-sm:before,
.divider.divider-center.divider-sm:after {
    border-color: #ccc;
}

.btn-group label.error {
    display: block !important;
    text-transform: none;
    position: absolute;
    bottom: -34px;
    left: 0;
    margin-bottom: 10px;
}

.btn-group input.valid~label.error,
.btn-group input[type="text"]~label.error,
.btn-group input[type="email"]~label.error,
.btn-group input[type="number"]~label.error,
.btn-group select~label.error {
    display: none !important;
}
</style>
<section id="content">
    <div class="content-wrap bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="card my-5 shadow-sm">
                        <div class="card-body p-5">
                            <h4 class="ls-4 text-center">Sashimi Fest Los Cabos</h4>
                            <div class="divider divider-sm divider-center text-dark">
                                <img src="/images/sashimi.png?=1" style="width: 5rem;">
                            </div>
                            <div class="form-widget" data-alert-type="false">
                                <div class="form-result"></div>
                                <div class="form-process">
                                    <div class="css3-spinner">
                                        <div class="css3-spinner-double-bounce1"></div>
                                        <div class="css3-spinner-double-bounce2"></div>
                                    </div>
                                </div>
                                <form class="mb-0" name="template-wedding" action="/php/contact.php" method="post"
                                    enctype="multipart/form-data">
                                    <div class="row g-4">
                                        <div class="col-12 text-center mb-5">
                                            <h6 class="font-body text-uppercase ls-3">
                                                Formato de inscripción
                                            </h6>
                                            <h2 class="font-secondary fst-italic h1">
                                                Sashimi Fest Los Cabos 2024
                                            </h2>
                                        </div>
                                        <div class="col-12">
                                            <div class="row g-4">
                                                <div class="col-md-12">
                                                    <label for="template-wedding-first-name">Lugar y fecha de
                                                        inscripción<small class="text-danger">*</small></label>
                                                    <input type="text" id="lugar" name="lugar" value=""
                                                        class="form-control" required placeholder="Lugar y fecha" />
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="template-wedding-first-name">Nombre del
                                                        participante<small class="text-danger">*</small></label>
                                                    <input type="text" id="nombre" name="nombre" value=""
                                                        class="form-control " required
                                                        placeholder="Nombre del participante" />
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="template-wedding-last-name">Nombre del asistente <small
                                                            class="text-danger">*</small></label>
                                                    <input type="text" id="asistente" name="asistente" value=""
                                                        class="form-control " required
                                                        placeholder="Nombre del asistente" />
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="template-wedding-last-name">Nombre del platillo a
                                                        presentar <small class="text-danger">*</small></label>
                                                    <input type="text" id="platillo" name="platillo" value=""
                                                        class="form-control " required
                                                        placeholder="Nombre del platillo a presentar" />
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label>Categoría</label>
                                                    <select class="form-select " required name="categoria"
                                                        id="categoria">
                                                        <option value>-- Seleccione uno --</option>
                                                        <option value="Gourmet">Gourmet</option>
                                                        <option value="Regional">Regional</option>
                                                        <option value="Estudiantil">Estudiantil</option>
                                                        <option value="Infantil">Infantil</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="template-wedding-last-name">Nombre de la empresa<small
                                                            class="text-danger">*</small></label>
                                                    <input type="text" id="empresa" name="empresa" value=""
                                                        class="form-control " required
                                                        placeholder="Nombre de la empresa" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="template-wedding-last-name">Municipio<small
                                                            class="text-danger">*</small></label>
                                                    <input type="text" id="municipio" name="municipio" value=""
                                                        class="form-control " required placeholder="Municipio" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="template-wedding-last-name">Teléfono<small
                                                            class="text-danger">*</small></label>
                                                    <input type="text" id="tel" name="tel" value=""
                                                        class="form-control " required placeholder="Teléfono" />
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="template-wedding-last-name">Correo<small
                                                            class="text-danger">*</small></label>
                                                    <input type="text" id="correo" name="correo" value=""
                                                        class="form-control " required placeholder="Correo" />
                                                </div>
                                                <div class="col-md-12" style="text-align: justify;">
                                                    <span style="color: #a1a1a1;">
                                                        Una vez leído el presente formato, arriba suscrito y abajo
                                                        aceptando los términos, se compromete a participar con la
                                                        seriedad y respaldo
                                                        de honorabilidad de su firma, a menos que las causas sean de
                                                        asuntos familiares o de fuerza mayor. Esto es por la seriedad
                                                        del encuentro y por el prestigio de ser el primero en este tipo
                                                        de toda América latina, que abona mucho al estado de Baja
                                                        California Sur en materia gastronómica.
                                                    </span>
                                                </div>
                                                <div class="col-md-12" style="text-align: justify;">
                                                    <div class="form-check">
                                                        <input type="checkbox" class="form-check-input" id="acuerdos"
                                                            name="acuerdos" required value="En pleno uso de mis facultades mentales, me hago responsable
                                                            de mis datos y firma aquí expuestos, que he leído y
                                                            comprendido las reglas, cumpliré con mi participación el día
                                                            sábado 16 de marzo de 2024, en el Poblado de La Playa,
                                                            Marina de Puerto Los Cabos, presentándome a las 9:30 hrs.">
                                                        <label class="form-check-label" for="acuerdos">
                                                            <b>Yo</b> En pleno uso de mis facultades mentales, me hago
                                                            responsable
                                                            de mis datos y firma aquí expuestos, que he leído y
                                                            comprendido las reglas, cumpliré con mi participación el día
                                                            sábado 16 de marzo de 2024, en el Poblado de La Playa,
                                                            Marina de Puerto Los Cabos, presentándome a las 9:30 hrs.
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="row " style="margin-bottom: 3rem; margin-top:3rem;">
                                                    <div class="col-12 col-md-12">
                                                        <div class="g-recaptcha"
                                                            data-sitekey="6Lf92OAfAAAAAEy9m8sf2kbU0ojkdDs5CNOnaNYS"
                                                            required></div>
                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" name="template-wedding-submit"
                                                class="btn btn-secondary w-100 btn-lg">
                                                Registrarme
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container img-fest">
    <img class="fest" src="/images/mascota.png">
</div>