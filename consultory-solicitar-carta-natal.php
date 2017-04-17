<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include('site/head.php'); ?>
        <style>
        .panel-group{
        color:#333;
        font-size: 14px;
        }
        .panel-title a{
        color:#5e397a;
        font-size: 16px;
        font-weight: bold;
        }
        .panel {
        margin-bottom: 20px;
        background-color: transparent;
        border: 0px solid transparent;
        border-radius: 4px;
        border-top: 1px;
        border-bottom: 1px;
        border-color: orange;
        }
        .panel-default>.panel-heading {
        color: #333;
        background-color: transparent;
        border-color: transparent;
        }
        .contacto{
        color:white;
        padding: 35px;
        background-color: #f9f8f6;
        }
        #contact input[type="text"],
        #contact input[type="email"],
        #contact input[type="tel"],
        #contact input[type="url"],
        #contact textarea,
        #contact .form-check-label {
        font: 18px/28px "Segoe UI", arial, helvetica, roboto, "droid sans", sans-serif;
        color: black;
        }
        #contact h3 {
        display: block;
        margin-bottom: 10px;
        }
        #contact h4 {
        margin: 5px 0 15px;
        display: block;
        }
        fieldset {
        border: medium none !important;
        margin: 0 0 5px;
        min-width: 100%;
        padding: 0;
        width: 100%;
        }
        #contact input[type="text"],
        #contact input[type="email"],
        #contact input[type="tel"],
        #contact input[type="url"],
        #contact textarea {
        width: 100%;
        border: 1px solid #ccc;
        background: #FFF;
        margin: 0 0 15px;
        padding: 10px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        }
        #contact input[type="text"]:hover,
        #contact input[type="email"]:hover,
        #contact input[type="tel"]:hover,
        #contact input[type="url"]:hover,
        #contact textarea:hover {
        -webkit-transition: border-color 0.3s ease-in-out;
        -moz-transition: border-color 0.3s ease-in-out;
        transition: border-color 0.3s ease-in-out;
        border: 1px solid #aaa;
        }
        #contact textarea {
        color: black;
        height: 150px;
        max-width: 100%;
        resize: none;
        margin-top: 25px;
        }
        #contact button[type="submit"] {
        cursor: pointer;
        border: none;
        background: #1a032b;
        color: #FFF;
        margin: 0 0 5px;
        padding: 10px 19px;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        border-radius: 15px;
        font: bold 19px "PT Sans", sans-serif;
        text-transform: uppercase;
        width: 100%;
        }
        #contact button[type="submit"]:hover {
        background: #9058bb;
        -webkit-transition: background 0.3s ease-in-out;
        -moz-transition: background 0.3s ease-in-out;
        transition: background-color 0.3s ease-in-out;
        }
        #contact button[type="submit"]:active {
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
        }
        .copyright {
        text-align: center;
        }
        #contact input:focus,
        #contact textarea:focus {
        outline: 0;
        border: 1px solid #aaa;
        }
        ::-webkit-input-placeholder {
        color: #888;
        }
        :-moz-placeholder {
        color: #888;
        }
        ::-moz-placeholder {
        color: #888;
        }
        :-ms-input-placeholder {
        color: #888;
        }
        </style>
    </head>
    <body>
        <!-- "Container" que contiene todo el contenido (header, footer incluídos) al cual se le define el ancho máximo que puede tener el sitio. -->
        <div id="container">
            <!-- Header del home. -->
            <?php include('site/header.php'); ?>
            <section id="content_section"><!-- Sección de contenido > comienzo -->
            
            <h4 class="subsection_title" style="margin-top: 0.3em;">CONSULTOR&Iacute;A ASTROL&Oacute;GICA</h4>
            <section class="consultory">
                <section class="info">
                    <h5 class="title" >Carta Natal</h5>
                    
                    <p>La <strong>Carta Natal</strong> es un mapa de la posición de los planetas al momento de nuestro nacimiento que indica nuestras <strong>tendencias y aptitudes</strong>. La Carta Natal nos muestra aspectos de nuestro <strong>Destino</strong>, pero también nos guía para que usemos nuestro <strong>Libre albedrío</strong> con más <strong>Consciencia</strong>.
                        
                        <p>Como todo <strong>mapa</strong> podemos usar la Carta Natal para <strong>guiarnos en
                            el recorrido por la vida</strong>, aprendiendo a sortear los obstáculos, encontrando atajos,
                            evitando desviarnos de nuestras metas, aprendiendo a conocer mejor cada uno de
                            los escenarios de nuestra vida y a desenvolvernos en ellos con mayor soltura y
                        destreza. </p>
                        <div class="center-box" style="padding: 5px; background-color: #f4f4f4; border-radius: 10px; border:none;">
                            <p style="text-align: center;font-size: 18px; color: #8E8F8F; ">Una vez una consultante me dijo:
                            <br> <strong>“Con esto me ahorré varios años de terapia...”</strong>.</p>
                        </div>
                        <br><br>
                        <h5 class="title" >Preguntas Frecuentes</h5>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                        ¿Para qué me sirve hacer mi Carta Natal? <span style="float: right;">&#x25BC;</span>
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li>Para conocerte más a vos mismo.</li>
                                            <li>Para conocer tu verdadera Vocación.</li>
                                            <li>Para saber qué es lo que necesitás para sentirte satisfecho con vos mismo y con
                                            la vida.</li>
                                            <li>Para conocer tu misión en esta vida.</li>
                                            <li>Para entender más el por qué de lo que te pasa, de los obstáculos que aparecen
                                            en tu camino.</li>
                                            <li>Para poder lograr mayor sintonía con tu propia esencia.</li>
                                            <li>Para saber qué es lo que tenés que modificar o trabajar sobre vos mismo, yendo
                                            al grano, sin perder tiempo.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                        ¿Qué necesito para hacer mi Carta Natal?<span style="float: right;">&#x25BC;</span>
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Para hacer tu Carta Natal necesitás tu fecha, hora y lugar de nacimiento.<span style="float: right;">&#x25BC;</span>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                        No tengo mi hora de nacimiento. ¿Puedo hacer igual mi Carta Natal?<span style="float: right;">&#x25BC;</span>
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Generalmente la hora de nacimiento se encuentra en nuestra partida de nacimiento,
                                        por lo cual es recomendable buscarla allí. En caso de que no la tuviera, se hace lo
                                        que se llama rectificación de la hora natal. A través de preguntas que se hacen al
                                        consultante se puede obtener la hora de nacimiento y por lo tanto hacer la Carta
                                        Natal.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                        ¿Por qué se toma la hora de nacimiento?<span style="float: right;">&#x25BC;</span>
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul>
                                            <li>Porque es el primer contacto con el mundo físico.</li>
                                            <li>Porque representa la inicio de nuestra existencia como seres individuales e
                                            independientes del seno materno.</li>
                                            <li>Porque consideramos que el nacimiento es producto del Destino y no del azar, ni
                                                tampoco  ̈casualidad ̈. Me pregunto qué es la casualidad, porque en realidad
                                                desde el punto de vista de las Astrología no hay sentido en la casualidad, sino
                                                la Causalidad en todo caso. Todo tiene un sentido y una razón de ser y todos
                                            estamos aquí en la Escuela de la vida, para aprender.</li>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                            ¿La Carta Natal cambia?<span style="float: right;">&#x25BC;</span>
                                        </a>
                                        </h4>
                                    </div>
                                    <div id="collapse5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            No, la Carta Natal no cambia. Es una y una vez que uno tiene su Carta Natal
                                            completa, estudiada y comprendida en profundidad no es necesario volver a
                                            hacerla. Lo que cambian son los tránsitos y la Revolución Solar, que se calcula en
                                            cada cumpleaños nuestro.
                                            <br><br>
                                            <strong>¿Significa que estamos destinados y no podemos cambiar o elegir?</strong>
                                            <br><br>No, de ninguna manera. <i>Los astros inclinan pero no obligan</i>, es uno de los axiomas
                                            más antiguos de la Astrología. Hablaremos de tendencias y pautas, algunas de ellas
                                            tendrán tanta fuerza que serán difíciles de cambiar, pero no imposible. Es decir hay
                                            un Destino que en parte me determina, pero también hay un libre albedrío que es mi
                                            cuota de libertad de elección y movimiento entre las distintas decisiones de la vida.
                                            La Carta Natal me indica mi Destino, a la vez que me ayuda a usar mejor mi libre
                                            albedrío.
                                        </div>
                                    </div>
                                </div>
                                <!--
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
                                            ¿Significa que estamos destinados y no podemos cambiar o elegir?<span style="float: right;">&#x25BC;</span>
                                        </a>
                                        </h4>
                                    </div>
                                    <div id="collapse6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            No, de ninguna manera. Los astros inclinan pero no obligan, es uno de los axiomas
                                            más antiguos de la Astrología. Hablaremos de tendencias y pautas, algunas de ellas
                                            tendrán tanta fuerza que serán difíciles de cambiar, pero no imposible. Es decir hay
                                            un Destino que en parte me determina, pero también hay un libre albedrío que es mi
                                            cuota de libertad de elección y movimiento entre las distintas decisiones de la vida.
                                            La Carta Natal me indica mi Destino, a la vez que me ayuda a usar mejor mi libre
                                            albedrío.
                                        </div>
                                    </div>
                                </div>
                                -->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">
                                            ¿Qué es el Ascendente?<span style="float: right;">&#x25BC;</span>
                                        </a>
                                        </h4>
                                    </div>
                                    <div id="collapse7" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            Al solicitar tu Carta Natal vas a descubrir cuál es tu signo <strong>Ascendente</strong>, eso
                                            dependerá de la hora de nacimiento. El Ascendente representa al Yo, el Ego. Es la
                                            primer impresión que damos a los demás, cómo me muestro. A la vez que el
                                            Ascendente representa también qué es lo que venimos a aprender.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </section>
                        <section class="apply">
                            
                            <h5 class="title">SOLICITAR CARTA NATAL</h5>
                            <div class="contacto" style="background-color:#5e397a;
                                border-radius: 12px;
                                display: block;
                                padding: 30px 0px;padding: 20px 35px;">
                                <div>
                                    <form id="contact" action="gracias.php" method="post">
                                        <h3>Solicitá tu Carta Natal</h3>
                                        <fieldset>
                                            <input name="nombre" placeholder="Nombre y Apellido" type="text" tabindex="1" required autofocus>
                                        </fieldset>
                                        <fieldset>
                                            <input name="email" placeholder="Email" type="email" tabindex="2" required>
                                        </fieldset>
                                        <fieldset>
                                            <input name="cel" placeholder="Celular" type="tel" tabindex="3" required>
                                        </fieldset>
                                        <fieldset>
                                            <input name="facebook" placeholder="Facebook" type="text" tabindex="4" required>
                                        </fieldset>
                                        <h3>Modalidad</h3>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Online" name="checkbox[]">
                                                    Online
                                                </label>
                                            </div>
                                            <div class="col-sm-6">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" value="Presencial" name="checkbox[]">
                                                    Presencial
                                                </label>
                                            </div>
                                        </div>
                                        <input type="hidden" name="solicita" value="Carta Natal">
                                        <fieldset>
                                            <textarea name="comentario" placeholder="Escribe tu mensaje..." tabindex="5" required></textarea>
                                        </fieldset>
                                        <p style="color: red; margin-bottom: 0"><?php if(isset($error_message)){echo $error_message;} ?></p>
                                        <fieldset>
                                            <button name="submit" type="submit" id="contact-submit" data-submit="...Enviando">Solicitar</button>
                                        </fieldset>
                                        
                                    </form>
                                </div>
                                
                            </div>
                        </section>
                    </section>
                    </section><!-- Sección de contenido > final -->
                    <!-- Footer -->
                    <?php include('site/footer.php'); ?>
                    
                </div>
                <!-- Bootstrap JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
            </body>
        </html>