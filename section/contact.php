<section id="contacto" class="block mbless">
    <h1>Contacto</h1>
</section>

<section class="contact">
    <section class="block mbless">
        <div class="form">
            <form action="php/contact.php" id="form_contact2" name="form_contact2">
                <p>
                    Hola mi nombre es y me pueden contactar:
                </p>
                <div class="inpHolder">
                    <div class="inp">
                        <input type="text" onchange="chkempty(this)" id="nombre" name="nombre" value="" placeholder="">
                        <label for="nombre">Tu Nombre</label>
                    </div>
                    <div class="inp">
                        <input type="text" onchange="chkempty(this)" id="company" name="company" value="" placeholder="">
                        <label for="company">Tu Empresa</label>
                    </div>
                </div>
                <input id="type_contact" name="type_contact" type="hidden" value="2">
                <div class="inpHolder">
                    <div class="inp">
                        <input type="text" onchange="chkempty(this)" id="mail2" name="mail2" value="" placeholder="">
                        <label for="mail2">Tu email</label>
                    </div>
                    <div class="inp">
                        <input type="text" onchange="chkempty(this)" id="phone2" name="phone2" value="" placeholder="">
                        <label for="phone2">Tu teléfono</label>
                    </div>
                </div>
                <div class="inpHolder" style="width:100%">
                    <input type="submit" value="Enviar">
                </div>
            </form>
        </div>
        <center>
            <br />
            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <br />
            <br />
            <br />
            <a href="tel:+5215559572870">Tel/Whatsapp. 5559572870</a>
            <br />
            <a href="mailto:contacto@blah.com.mx">contacto@blah.com.mx</a>
        </center>
    </section>
</section>