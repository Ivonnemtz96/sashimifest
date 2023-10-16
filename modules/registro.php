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
                <img src="/images/sashimi.png" style="width: 5rem;">
              </div>
              <div class="form-widget" data-alert-type="false">
                <div class="form-result"></div>
                <div class="form-process">
                  <div class="css3-spinner">
                    <div class="css3-spinner-double-bounce1"></div>
                    <div class="css3-spinner-double-bounce2"></div>
                  </div>
                </div>
                <form class="mb-0" id="template-wedding" name="template-wedding" action="" method="post"
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
                          <label for="template-wedding-first-name">Lugar y fecha de inscripción<small
                              class="text-danger">*</small></label>
                          <input type="text" id="template-wedding-first-name" name="template-wedding-first-name"
                            value="" class="form-control required" placeholder="Lugar y fecha" />
                        </div>
                        <div class="col-md-12">
                          <label for="template-wedding-first-name">Nombre del participante<small
                              class="text-danger">*</small></label>
                          <input type="text" id="template-wedding-first-name" name="template-wedding-first-name"
                            value="" class="form-control required" placeholder="Nombre del participante" />
                        </div>
                        <div class="col-md-12">
                          <label for="template-wedding-last-name">Nombre del asistente</label>
                          <input type="text" id="template-wedding-last-name" name="template-wedding-last-name" value=""
                            class="form-control" placeholder="Nombre del asistente" />
                        </div>
                        <div class="col-md-12">
                          <label for="template-wedding-last-name">Nombre del platillo a presentar</label>
                          <input type="text" id="template-wedding-last-name" name="template-wedding-last-name" value=""
                            class="form-control" placeholder="Nombre del platillo a presentar" />
                        </div>
                        <div class="col-md-12">
                          <label for="template-wedding-last-name">Categoría</label>
                          <input type="text" id="template-wedding-last-name" name="template-wedding-last-name" value=""
                            class="form-control" placeholder="Categoría" />
                        </div>
                        <div class="col-md-12">
                          <label for="template-wedding-last-name">Nombre de la empresa</label>
                          <input type="text" id="template-wedding-last-name" name="template-wedding-last-name" value=""
                            class="form-control" placeholder="Nombre de la empresa" />
                        </div>
                        <div class="col-md-6">
                          <label for="template-wedding-last-name">Domicilio</label>
                          <input type="text" id="template-wedding-last-name" name="template-wedding-last-name" value=""
                            class="form-control" placeholder="Domicilio" />
                        </div>
                        <div class="col-md-6">
                          <label for="template-wedding-last-name">Municipio</label>
                          <input type="text" id="template-wedding-last-name" name="template-wedding-last-name" value=""
                            class="form-control" placeholder="Municipio" />
                        </div>
                        <div class="col-md-6">
                          <label for="template-wedding-last-name">Teléfono</label>
                          <input type="text" id="template-wedding-last-name" name="template-wedding-last-name" value=""
                            class="form-control" placeholder="Teléfono" />
                        </div>
                        <div class="col-md-6">
                          <label for="template-wedding-last-name">Correo</label>
                          <input type="text" id="template-wedding-last-name" name="template-wedding-last-name" value=""
                            class="form-control" placeholder="Correo" />
                        </div>
                      </div>
                    </div>
                    <div hidden class="col-12">
                      <label for="template-wedding-attending" class="mb-3">are you be attending?<small
                          class="text-danger">*</small></label><br />
                      <div class="btn-group nav" data-bs-toggle="buttons">
                        <a href="#attending-tab-1" class="btn btn-outline-success flex-fill" data-bs-toggle="tab">
                          <input type="radio" class="btn-check" name="template-wedding-attending"
                            id="template-wedding-attending-yes" class="required" value="Yes" />Yes
                        </a>
                        <a href="#attending-tab-2" class="btn btn-outline-danger flex-fill" data-bs-toggle="tab">
                          <input type="radio" class="btn-check" name="template-wedding-attending"
                            id="template-wedding-attending-no" class="required" value="No" />No
                        </a>
                        <a href="#attending-tab-3" class="btn btn-outline-info flex-fill" data-bs-toggle="tab">
                          <input type="radio" class="btn-check" name="template-wedding-attending"
                            id="template-wedding-attending-may be" class="required" value="May be" />May be
                        </a>
                      </div>
                      <div class="tab-content">
                        <div class="tab-pane bg-light p-4 mt-4" id="attending-tab-1">
                          <div class="row g-4">
                            <div class="col-md-12">
                              <h4 class="mb-2">
                                <i class="bi-hand-thumbs-up position-relative text-success me-2"
                                  style="top: 1px"></i>Thank You so much for Attending.
                              </h4>
                              <p class="mb-0">
                                We need some Information. Sit amet
                                consectetur adipisicing elit. Asperiores
                                repudiandae aliquid blanditiis doloremque
                                assumenda nemo!
                              </p>
                            </div>
                            <div class="col-md-6">
                              <label for="template-wedding-attending-side">Side:<small
                                  class="text-danger">*</small></label>
                              <select id="template-wedding-attending-side" name="template-wedding-attending-side"
                                class="form-select required">
                                <option value="" disabled="" selected="">
                                  Select Side
                                </option>
                                <option value="Groom">
                                  Groom - Dianne Ameter
                                </option>
                                <option value="Bride">
                                  Bride- Wisteria
                                </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <label for="template-wedding-attending-guest"># of Guests:<small
                                  class="text-danger">*</small></label>
                              <select id="template-wedding-attending-guest" name="template-wedding-attending-guest"
                                class="form-select required">
                                <option value="" disabled="" selected="">
                                  0
                                </option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5+">5+</option>
                              </select>
                            </div>
                            <div class="col-12">
                              <label for="template-wedding-email">Email Address<small
                                  class="text-danger">*</small></label>
                              <input type="email" name="template-wedding-email" id="template-wedding-email"
                                class="form-control required" value="" placeholder="user@company.com" />
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane bg-light p-4 mt-4" id="attending-tab-2">
                          <div class="row g-4">
                            <div class="col-md-12">
                              <h4 class="mb-2">
                                <i class="bi-emoji-frown text-danger me-2 position-relative" style="top: 1px"></i>That
                                is really sad.
                              </h4>
                              <p class="mb-0">
                                Lorem ipsum dolor sit amet, consectetur
                                adipisicing elit. Voluptatum eum ducimus
                                labore omnis dolore recusandae id
                                asperiores, cumque, deserunt sit?
                              </p>
                            </div>
                            <div class="col-md-12">
                              <label for="template-wedding-attending-comment">Comments (Optional):</label>
                              <textarea class="form-control" id="template-wedding-attending-comment"
                                name="template-wedding-attending-comment" rows="6" cols="20"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="tab-pane bg-light p-4 mt-4" id="attending-tab-3">
                          <div class="row g-4">
                            <div class="col-md-12">
                              <h4 class="mb-2">
                                <i class="bi-emoji-expressionless text-info me-2 position-relative"
                                  style="top: 1px"></i>No Problem, You're always Welcome.
                              </h4>
                              <p class="mb-0">
                                We need some Information. Sit amet
                                consectetur adipisicing elit. Asperiores
                                repudiandae aliquid blanditiis doloremque
                                assumenda nemo!
                              </p>
                            </div>
                            <div class="col-md-6">
                              <label for="template-wedding-attending-maybe-side">Side:<small
                                  class="text-danger">*</small></label>
                              <select id="template-wedding-attending-maybe-side"
                                name="template-wedding-attending-maybe-side" class="form-select required">
                                <option value="" disabled="" selected="">
                                  Select Side
                                </option>
                                <option value="Groom">
                                  Groom - Dianne Ameter
                                </option>
                                <option value="Bride">
                                  Bride- Wisteria
                                </option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <label for="template-wedding-attending-maybe-guest"># of Guests:<small
                                  class="text-danger">*</small></label>
                              <select id="template-wedding-attending-maybe-guest"
                                name="template-wedding-attending-maybe-guest" class="form-select required">
                                <option value="" disabled="" selected="">
                                  0
                                </option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5+">5+</option>
                              </select>
                            </div>
                            <div class="col-12">
                              <label for="template-wedding-maybe-email">Email Address<small
                                  class="text-danger">*</small></label>
                              <input type="email" name="template-wedding-maybe-email" id="template-wedding-maybe-email"
                                class="form-control required" value="" placeholder="user@company.com" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 d-none">
                      <input type="text" id="template-wedding-botcheck" name="template-wedding-botcheck" value="" />
                    </div>
                    <div class="col-12">
                      <button type="submit" id="template-wedding-submit" name="template-wedding-submit"
                        class="btn btn-secondary w-100 btn-lg">
                        Registrarme
                      </button>
                    </div>
                    <input type="hidden" name="prefix" value="template-wedding-" />
                  </div>
                </form>
              </div>
              <!-- <a href="#myModal1" data-lightbox="inline" class="template-wedding-success-modal d-none"></a>
              <div class="modal1 mfp-hide" id="myModal1">
                <div class="block mx-auto" style="background-color: #fff; max-width: 600px">
                  <div style="padding: 50px">
                    <i class="bi-emoji-smile color display-4 mb-2"></i>
                    <h3 class="mb-3">Thank You.</h3>
                    <h5 class="lead fw-semibold ls-1 text-uppercase my-4">
                      Your RSVP has been Confirmed.
                    </h5>
                    <p class="fw-normal mb-0">
                      Thank you very much for attending our Wedding. If
                      you need any other information from me then Please
                      let me contact to
                      <a href="mailto:no.reply@semicolonweb.com"><u>no.reply@semicolonweb.com</u></a>
                    </p>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="container img-fest">
  <img class="fest" src="/images/fest.png">
</div>