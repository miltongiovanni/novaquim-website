<form class="row g-3 needs-validation contact-form-style-03" id="contact_form" novalidate>
    <div class="row justify-content-center" data-anime='{ "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
        <div class="col-md-6">
            <label for="nombre_contacto" class="form-label fw-600 text-dark-gray mb-0">Nombre</label>
            <div class="position-relative form-group mb-25px">
                <span class="form-icon"><i class="bi bi-person"></i></span>
                <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required" id="nombre_contacto" type="text" name="nombre_contacto"
                       placeholder="Escriba su nombre" required/>
                <div class="valid-feedback">
                </div>
                <div class="invalid-feedback" id="contactoMessage">
                    Este valor es requerido.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="organizacion" class="form-label fw-600 text-dark-gray mb-0">Organización</label>
            <div class="position-relative form-group mb-25px">
                <span class="form-icon"><i class="bi bi-diagram-3"></i></span>
                <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required" id="organizacion" type="text" name="organizacion"
                       placeholder="Escriba el nombre de su organización si existe" required/>
                <div class="valid-feedback">
                </div>
                <div class="invalid-feedback" id="organizacionMessage">
                    Este valor es requerido.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="email_contacto" class="form-label fw-600 text-dark-gray mb-0">Correo electrónico</label>
            <div class="position-relative form-group mb-25px">
                <span class="form-icon"><i class="bi bi-envelope"></i></span>
                <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required" id="email_contacto" type="email" name="email_contacto"
                       placeholder="Escriba su correo electrónico"/>
                <div class="invalid-feedback">
                    Por favor escriba un correo electrónico válido.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="telefono" class="form-label fw-600 text-dark-gray mb-0">Teléfono</label>
            <div class="position-relative form-group mb-25px">
                <span class="form-icon"><i class="bi bi-telephone"></i></span>
                <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required" id="telefono" type="tel" name="telefono"
                       placeholder="Escriba el número de su teléfono" required/>
                <div class="invalid-feedback">
                    Este valor es requerido.
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <label for="celular" class="form-label fw-600 text-dark-gray mb-0">Celular</label>
            <div class="position-relative form-group mb-25px">
                <span class="form-icon"><i class="bi bi-phone"></i></span>
                <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required" id="celular" type="tel" name="celular"
                       placeholder="Escriba el número de su celular" required/>
                <div class="invalid-feedback">
                    Este valor es requerido.
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <label for="tipo_consulta" class="form-label fw-600 text-dark-gray mb-0">Tipo de consulta</label>
            <!--<div class="position-relative form-group mb-25px">
                <span class="form-icon"><i class="bi bi-phone"></i></span>
                <input class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control" id="celular" type="tel" name="celular" placeholder="Escriba el número de su celular" required/>
            </div>-->
            <select class="form-select ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent required" id="tipo_consulta" name="tipo_consulta" required>
                <option value="" selected disabled>Seleccione el tipo de consulta</option>
                <option value="Solicitud de cotización">Solicitud de cotización</option>
                <option value="Soporte técnico">Soporte técnico</option>
                <option value="Consulta general">Consulta general</option>
                <option value="Solicitar Visita Técnica">Solicitar Visita Técnica</option>
            </select>
            <div class="invalid-feedback">
                Este valor es requerido.
            </div>
        </div>
        <div class="col-md-12">
            <label for="mensaje" class="form-label fw-600 text-dark-gray mb-0">Mensaje</label>
            <div class="position-relative form-group form-textarea mb-0">
                <textarea class="ps-0 border-radius-0px border-color-extra-medium-gray bg-transparent form-control required" id="mensaje" name="mensaje" placeholder="Escriba su mensaje" rows="4"
                          required></textarea>
                <div class="invalid-feedback">
                    Este valor es requerido.
                </div>
                <span class="form-icon"><i class="bi bi-chat-square-text"></i></span>
            </div>
        </div>

        <div class="col-12">
            <div class="position-relative terms-condition-box text-start d-inline-block mb-20px">
                <label>
                    <input type="checkbox" name="acepta_politica" id="acepta_politica" value="1" class="terms-condition check-box align-middle required is-valid is-invalid">
                    <span class="box fs-14">Acepto la política de privacidad (Ver <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                                     data-bs-target="#politicaModal">Política de privacidad</a>)</span>
                    <div class="invalid-feedback">
                        Debe aceptar la política de privacidad antes de enviar el formulario.
                    </div>
                </label>
            </div>
            <!--        <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="acepta_politica" name="acepta_politica" required>
                        <label class="form-check-label" for="acepta_politica">
                            Acepto la política de privacidad (Ver <a href="javascript:void(0)" data-bs-toggle="modal"
                                                                     data-bs-target="#politicaModal">Política de privacidad</a>)
                        </label>
                        <div class="invalid-feedback">
                            Debe aceptar la política de privacidad antes de enviar el formulario.
                        </div>
                    </div>-->
        </div>
        <input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
        <div class="col-12">
            <button class="btn btn-medium btn-dark-gray btn-box-shadow btn-round-edge text-transform-none primary-font submit" type="submit">Enviar</button>
        </div>
    </div>
</form>
<button class="btn btn-primary" type="button" disabled id="processing" style="display: none">
    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
    Enviando el correo
</button>
<div id="respuesta-email" style="display: none">
    <p>Su mensaje a ha sido enviado con éxito, uno de nuestros agentes se contactará con usted en los próximos días</p>

</div>

<!-- Modal -->
<div class="modal fade" id="politicaModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header ps-5">
                <h4 class="modal-title" id="exampleModalLabel">POLÍTICA DE TRATAMIENTO PROTECCIÓN DE DATOS
                    PERSONALES<br> INDUSTRIAS NOVAQUIM S.A.S.</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5">
                <?php include '../inc/politica.php' ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<script>
    var form = document.getElementById('contact_form');
    form.addEventListener('submit', function (event) {
        console.log(form.checkValidity());
        if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
            form.classList.add('was-validated');
        } else {
            event.preventDefault();
            form.classList.add('was-validated');
            document.getElementById('contact_form').style.display = 'none';
            document.getElementById('processing').style.display = 'block';
            grecaptcha.enterprise.ready(() => {
                grecaptcha.enterprise.execute(
                    '<?=$configuration['google_recaptcha_site_key']?>',
                    {action: 'contact_form'}
                ).then(token => {
                    console.log(token);
                    // Add your logic to submit to your backend server here.
                    document.getElementById("g-recaptcha-response").value = token;
                    const XHR = new XMLHttpRequest();

                    // Bind the FormData object and the form element
                    const FD = new FormData(form);

                    // Defining event listener for readystatechange event
                    XHR.onreadystatechange = function (aEvt) {
                        // Check if the request is compete and was successful
                        if (XHR.readyState === 4 && XHR.status === 200) {
                            // Inserting the response from server into an HTML element
                            document.getElementById('processing').style.display = 'none';
                            document.getElementById('respuesta-email').style.display = 'block';
                        }
                    };

                    // Define what happens in case of error
                    XHR.addEventListener("error", function (event) {
                        alert('Oops! Something went wrong.');
                    });

                    // Set up our request
                    XHR.open("POST", "/inc/sendForm.php", true);

                    // The data sent is what the user provided in the form
                    XHR.send(FD);
                });
            });

        }
    }, false);

</script>
