<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prueba tecnica</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
            .a-icon-logo, .a-logo {
                background-position: -5px -130px;
                height: 31px;
                width: 103px;
            }
            .a-icon-domain-mx {
                background-position: -5px -327px;
                width: 48px;
            }
            .a-domain, .a-icon-domain {
                height: 28px;
            }
            .a-icon, .a-link-emphasis:after {
                background-image: url(https://m.media-amazon.com/images/S/sash/mPGmT0r6IeTyIee.png);
                -webkit-background-size: 400px 750px;
                background-size: 400px 750px;
                background-repeat: no-repeat;
                display: inline-block;
                vertical-align: top;
            }
            .container {
                padding: 50px;
            }
            .a-ember h1, .a-ember h2, .a-ember h3, .a-ember h4 {
                font-family: "Amazon Ember", Arial, sans-serif;
            }
            .a-spacing-small, .a-ws .a-ws-spacing-small {
                margin-bottom: 10px !important;
                text-align: justify;
            }
            .a-box .a-box-inner {
                border-radius: 4px;
                position: relative;
                padding: 14px 18px;
            }
            .auth-no-skin .a-box {
                border-radius: 8px;
            }
            .a-box {
                display: block;
                border-radius: 4px;
                border: 1px #ddd solid;
                background-color: #fff;
            }
            .a-spacing-extra-large, .a-ws .a-ws-spacing-extra-large {
                margin-bottom: 26px !important;
            }
            h1 {
                font-weight: 400;
                font-size: 28px;
                line-height: 1.2;
            }
            h1, h2, h3, h4 {
                font-family: Arial, sans-serif;
                text-rendering: optimizeLegibility;
                padding-bottom: 4px;
            }
            .a-row .a-span12, .a-span12, .a-ws .a-row .a-ws-span12, .a-ws .a-ws-span12 {
                width: 100%;
                margin-right: 0;
            }
            .a-input-text, input[type=text], input[type=number], input[type=tel], input[type=password], input[type=date], input[type=email], input[type=search] {
                background-color: #fff;
                height: 31px;
                padding: 3px 7px;
                line-height: normal;
            }
            .a-ember input, .a-ember select, .a-ember textarea {
                font-family: "Amazon Ember", Arial, sans-serif;
            }
            .a-input-text, input[type=text], input[type=number], input[type=tel], input[type=password], input[type=search], select.a-select-multiple, textarea {
                border: 1px solid #a6a6a6;
                border-top-color: #949494;
                border-radius: 3px;
                box-shadow: 0 1px 0 rgba(255, 255, 255, .5), 0 1px 0 rgba(0, 0, 0, .07) inset;
                outline: 0;
            }
            label, legend {
                display: block;
                padding-left: 2px;
                padding-bottom: 2px;
                font-weight: 700;
            }
            .a-ember body {
                font-family: "Amazon Ember", Arial, sans-serif;
            }
            .a-alert-inline {
                display: inline-block;
                border: none;
                vertical-align: middle;
                background-color: transparent;
            }
            .a-spacing-top-mini {
                margin-top: 6px !important;
            }
            .a-alert-inline-info .a-alert-container {
                padding-left: 16px;
                color: #2b2b2b;
            }
            .a-alert-inline .a-alert-container {
                padding: 0;
            }
            .a-alert-inline .a-icon-alert {
                height: 13px;
                width: 14px;
                position: absolute;
                left: 2px;
                top: 2px;
            }
            .a-alert-inline-info .a-icon-alert, .a-icon-info.a-icon-small {
                width: 6px;
                background-position: -166px -130px;
            }
            .a-alert-inline .a-alert-container .a-alert-content {
                margin-bottom: 0;
                text-align: left;
                font-size: 14px;
                line-height: 15px;
                margin-left: 18px
            }
            .a-ember .a-button-text {
                font-family: "Amazon Ember", Arial, sans-serif;
            }
            .a-size-small {
                font-size: 14px !important;
                line-height: 1.5 !important;
            }
            .a-spacing-top-medium {
                margin-top: 18px !important;
            }
            .a-box .a-divider.a-divider-section .a-divider-inner, .a-color-base-background .a-divider.a-divider-section .a-divider-inner, .a-divider.a-divider-section .a-divider-inner {
                height: 44px;
                margin-bottom: -18px;
                background: -webkit-linear-gradient(to bottom, rgba(0, 0, 0, .14), rgba(0, 0, 0, .03) 3px, transparent);
                background: linear-gradient(to bottom, rgba(0, 0, 0, .14), rgba(0, 0, 0, .03) 3px, transparent);
                z-index: 0;
                zoom: 1;
            }
            .a-box .a-divider.a-divider-section .a-divider-inner:after, .a-color-base-background .a-divider.a-divider-section .a-divider-inner:after, .a-divider.a-divider-section .a-divider-inner:after {
                display: block;
                width: 100%;
                height: 44px;
                background-color: transparent;
                background: -webkit-linear-gradient(to right, #fff, rgba(255, 255, 255, 0), #fff);
                background: linear-gradient(to right, #fff, rgba(255, 255, 255, 0), #fff);
                z-index: 1;
                content: "";
            }
        </style>
    </head>
    <body>
        <div class="container" style="text-align: -webkit-center;">
            <!-- ICON -->
            <div class="text-center">
                <i class="a-icon a-icon-logo" role="img" aria-label="Amazon"></i>
                <i class="a-icon a-icon-domain-mx a-icon-domain" role="presentation"></i>
            </div>

            <br/>

            <!-- BOX -->
            <div class="a-box a-spacing-extra-large" style="width: 400px;">
                <div class="a-box-inner">
                    <h1 class="a-spacing-small">
                        Crear cuenta
                    </h1>
                    <div style="margin-bottom: 10px;">
                        <label for="ap_customer_name" class="a-form-label" style="float: left;">
                            Tu nombre
                        </label>
                        <input type="text" maxlength="50" id="name" autocomplete="name" name="name" tabindex="1" class="a-input-text a-span12 auth-autofocus auth-required-field" aria-required="true">
                    </div>

                    <div style="margin-bottom: 10px;">
                        <label for="ap_customer_name" class="a-form-label" style="float: left;">
                            Correo electronico
                        </label>
                        <input type="mail" maxlength="50" id="email" autocomplete="email" name="email" tabindex="1" class="a-input-text a-span12 auth-autofocus auth-required-field" aria-required="true">
                    </div>

                    <div style="margin-bottom: 10px;">
                        <label for="ap_customer_name" class="a-form-label" style="float: left;">
                            Contraseña
                        </label>
                        <input type="password" maxlength="50" id="password" autocomplete="password" placeholder="Debe tener almenos 6 caracteres" name="customerName" tabindex="1" class="a-input-text a-span12 auth-autofocus auth-required-field" aria-required="true">
                        <div class="a-box a-alert-inline a-alert-inline-info auth-inlined-information-message a-spacing-top-mini" aria-live="polite" aria-atomic="true" style="width: 100%;"><div class="a-box-inner a-alert-container"><i class="a-icon a-icon-alert"></i><div class="a-alert-content">
                            La contraseña debe contener al menos seis caracteres.
                        </div></div></div>
                    </div>

                    <div style="margin-bottom: 20px;">
                        <label for="ap_customer_name" class="a-form-label" style="float: left;">
                            Vuelve a escribir la contraseña
                        </label>
                        <input type="password" maxlength="50" id="password_c" autocomplete="password_c" name="password_c" tabindex="1" class="a-input-text a-span12 auth-autofocus auth-required-field" aria-required="true">
                    </div>

                    <div id="button-action" style="padding: 4px; background: linear-gradient(180deg, #f7da99 0%, #f1c453 100%); border-radius: 3px; border: solid 1px #878787; cursor: pointer;">
                        <span id="button-click" class="a-button-text" aria-hidden="true" id="a-autoid-0-announce">
                            Crea tu cuenta de Amazon
                        </span>
                        <span id="button-loading" class="a-button-text" aria-hidden="true" id="a-autoid-0-announce" style="display:none;">
                            Cargando ...
                        </span>

                    </div>

                    <div id="legalTextRow" class="a-row a-spacing-top-medium a-size-small" style="text-align: justify; margin-bottom: 25px;">
                        Al crear una cuenta, aceptas las <a href="/gp/help/customer/display.html/ref=ap_register_notification_condition_of_use?ie=UTF8&amp;nodeId=508088">Condiciones de Uso</a> y el <a href="/gp/help/customer/display.html/ref=ap_register_notification_privacy_notice?ie=UTF8&amp;nodeId=468496">Aviso de Privacidad</a> de amazon.com.
                    </div>

                    <div class="a-divider a-divider-section"><div class="a-divider-inner"></div></div>

                    <div class="a-row" style="text-align: justify;">
                        ¿Ya tienes una cuenta?
                        <a class="a-link-emphasis" href="/ap/signin?openid.pape.max_auth_age=0&amp;openid.return_to=https%3A%2F%2Fwww.amazon.com%2Fyour-orders%2Forders%3F_encoding%3DUTF8%26language%3Des%26ref_%3Dnav_orders_first&amp;prevRID=RQZK95Q2QTMXJE2EZKYP&amp;openid.identity=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&amp;openid.assoc_handle=amzn_retail_yourorders_us&amp;openid.mode=checkid_setup&amp;failedSignInCount=0&amp;language=es_US&amp;openid.claimed_id=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0%2Fidentifier_select&amp;pageId=amzn_retail_yourorders_us&amp;openid.ns=http%3A%2F%2Fspecs.openid.net%2Fauth%2F2.0&amp;timestamp=1721926542000">
                            Iniciar sesión
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).on('click', '#button-action', function () {
            

            let data = {
                name: $("#name").val(),
                email: $("#email").val(),
                password: $("#password").val(),
            }

            if (!$("#name").val()) {
                Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "El nombre es requerido!",
                });
            }

            if (!$("#email").val()) {
                Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "El email es requerido!",
                });
            }

            if (!$("#password").val()) {
                Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "La contraseña es requerida!",
                });
            }

            if ($("#password").val() != $("#password_c  ").val()) {
                Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "La contraseña no coincide!",
                });
            }

            $("#button-click").hide();
            $("#button-loading").show();

            $.ajax({
                url: 'api/register',
                method: 'POST',
                data: data,
                dataType: 'json',
            }).done((res) => {
                if(res.success){
                    $("#button-click").show();
                    $("#button-loading").hide();
                    Swal.fire({
                    title: "Good job!",
                    text: "Usuario creado con exito!",
                    icon: "success"
                    });
                    clearForm();
                }
            }).fail((err) => {
                $("#button-click").show();
                $("#button-loading").hide();
                Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Error al crear usuario!",
                });
            });
        });

        function clearForm() {
            $("#name").val("");
            $("#email").val("");
            $("#password").val("");
            $("#password_c").val("");
        }
    </script>
</html>