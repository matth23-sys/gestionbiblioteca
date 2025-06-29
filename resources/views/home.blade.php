<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
          <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

      
        <title>Gestion Bibioltecaria</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/favicon.ico') }}" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
        
</div>

    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">
  <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" style="height: 60px;" />
  
</a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Catalago</a></li>
                         <li class="nav-item"><a class="nav-link" href="#services">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">Nosotros</a></li>
                        <li class="nav-item"><a class="nav-link" href="#busqueda">Buscar</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Ayudanos</a></li>
                        <li class="nav-item">
  <a class="nav-link" href="{{ url('/login') }}">Cerrar sesión</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
            
                <div class="masthead-subheading">Bienvenido a nuestro estudio!</div>
                <div class="masthead-heading text-uppercase">descubre un mundo de conocimiento</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="{{ route('reservas') }}">Reserva tu libro</a>



            </div>
        </header>

<section style="display: flex; justify-content: center; align-items: center; padding: 4rem 2rem; min-height: 100vh; background-color: #f9f9f9; font-family: Arial, sans-serif;">
  <div style="max-width: 1200px; width: 100%;">
    <!-- Sobre el sistema -->
    <div style="margin-bottom: 4rem; text-align: center;">
      
      <p style="color: #444; font-size: 1.1rem; max-width: 800px; margin: 0 auto; line-height: 1.6;">
        En nuestra biblioteca creemos que el conocimiento debe estar al alcance de todos, en cualquier momento y desde cualquier lugar. Por eso desarrollamos este sistema de gestión intuitivo, diseñado para facilitar el acceso a libros, autores y contenido educativo con solo unos clics. Ya seas estudiante, docente o amante de la lectura, aquí encontrarás herramientas modernas para consultar, reservar y llevar el control de tus préstamos de forma eficiente y segura.
      </p>

    </div>


 <!-- Catalago-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Catalago destacado</h2>
            <h3 class="section-subheading text-muted">
                Explora nuestro catálogo digital con información de algunos de nuestros libros
            </h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/p1.jpg') }}" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">ALICIA EN EL PAIS DE LAS MARAVILLAS</div>
                        <div class="portfolio-caption-subheading text-muted">Lewis Carroll</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/p2.jpg') }}" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Cien Años de Soledad</div>
                        <div class="portfolio-caption-subheading text-muted">Gabriel García Márquez</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/p3.jpg') }}" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">1984</div>
                        <div class="portfolio-caption-subheading text-muted">George Orwell</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <!-- Portfolio item 4-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/p4.jpg') }}" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Don Quijote de la Mancha</div>
                        <div class="portfolio-caption-subheading text-muted">Miguel de Cervantes</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <!-- Portfolio item 5-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/p5.jpg') }}" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">El Principito</div>
                        <div class="portfolio-caption-subheading text-muted">Antoine de Saint-Exupéry</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <!-- Portfolio item 6-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/p6.jpg') }}" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Rayuela</div>
                        <div class="portfolio-caption-subheading text-muted">Julio Cortázar</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Estilos para centrar y uniformar imágenes -->
<style>
    .portfolio-item img {
        width: 100%;
        height: 300px;
        object-fit: cover;
        object-position: center;
        display: block;
        margin: 0 auto;
    }
</style>

 
<style>
  .center-container {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 30px 0; /* Reducido (antes era 60px o 100vh) */
    background: linear-gradient(to bottom, #eeeeee, #cccccc);
  }

  .form-container {
    background: white;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    width: 80%;
    max-width: 900px;
    font-family: Arial, sans-serif;
  }

  .form-container h2 {
    margin-top: 0;
    color: #333;
    font-size: 28px;
  }

  .tabs {
    display: flex;
    margin-bottom: 20px;
    border-bottom: 1px solid #ccc;
  }

  .tab {
    padding: 12px 20px;
    cursor: pointer;
    border: none;
    background: none;
    font-weight: bold;
    color: #555;
    font-size: 16px;
  }

  .tab.active {
    color: #007baf;
    border-bottom: 3px solid #007baf;
  }

  .form-container select,
  .form-container input[type="text"] {
    width: 100%;
    padding: 15px;
    margin: 12px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
  }

  .form-container button {
    width: 150px;
    padding: 14px;
    background-color: #009cde;
    color: white;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .form-container button:hover {
    background-color: #007bb2;
  }

  .subtitulo {
    font-style: italic;
    color: #444;
    margin-bottom: 15px;
    font-size: 15px;
  }
</style>

<section class="page-section" id="busqueda">
  <div class="center-container">
    <div class="form-container">
      <h2>Búsquedas</h2>
      <div class="tabs">
        <!--<button class="tab active">Colección impresa</button>-->
      </div>

      <div class="subtitulo">Búsqueda en la colección impresa</div>

      <select>
        <option>Catálogo de biblioteca</option>
      </select>

      <input type="text" placeholder="Término a buscar...">

      <select>
        <option>Todas las bibliotecas</option>
      </select>

      <button>Buscar</button>
    </div>
  </div>
</section>




      <!-- Estilos para imágenes redondas dentro del círculo amarillo -->
<style>
    .timeline-image {
        background-color: #ffc800; /* Color amarillo */
        border-radius: 50%;
        width: 160px;
        height: 160px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        margin: 0 auto;
    }

    .timeline-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 50%;
        padding: 10px; /* Opcional, permite que el fondo amarillo se vea mejor */
    }
</style>

<!-- Conócenos - About -->
<section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Conócenos</h2>
            <h3 class="section-subheading text-muted">
                Somos una plataforma comprometida con facilitar el acceso al conocimiento a través de una gestión bibliotecaria moderna, eficiente y accesible para todos.
            </h3>
        </div>
        <ul class="timeline">
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="{{ asset('assets/img/about/1.png') }}" alt="..." />
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Las bibliotecas como centros de conocimiento</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Las bibliotecas han sido, por siglos, guardianas del saber humano. No solo albergan libros, sino que también resguardan la historia, cultura y evolución del pensamiento de una sociedad. Su papel como espacios accesibles al público las convierte en pilares de la educación y la inclusión.</p>
                    </div>
                </div>
            </li>

            <li>
                <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="{{ asset('assets/img/about/2.png') }}" alt="..." />
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Función educativa</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Las bibliotecas no solo ofrecen libros: también fomentan el pensamiento crítico, la investigación y el aprendizaje autodirigido. Son entornos seguros donde estudiantes, docentes e investigadores pueden encontrar recursos confiables para desarrollar ideas y proyectos.</p>
                    </div>
                </div>
            </li>

            <li class="timeline-inverted">
                <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="{{ asset('assets/img/about/3.png') }}" alt="..." />
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Transformación digital</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Con la digitalización, las bibliotecas han evolucionado hacia entornos inteligentes donde los catálogos pueden consultarse en línea, se pueden reservar libros por adelantado y se automatizan procesos de préstamos y devoluciones. Estas herramientas agilizan la gestión y mejoran la experiencia del usuario.</p>
                    </div>
                </div>
            </li>

            <li>
                <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="{{ asset('assets/img/about/4.png') }}" alt="..." />
                </div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Inclusión y equidad</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Las bibliotecas garantizan acceso igualitario a todos los usuarios, sin importar su nivel económico, edad o condición social. Representan un servicio público esencial que promueve la igualdad de oportunidades y la justicia social.</p>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</section>

       

        <!-- Servivicios-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Servicios</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Catálogo en línea</h4>
                        <p class="text-muted">Permite a los usuarios buscar libros por título, autor o temática desde cualquier dispositivo. Así podrán saber si un libro está disponible antes de acercarse a la biblioteca.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Reservas</h4>
                        <p class="text-muted">Los usuarios pueden reservar libros si están prestados o renovar los que ya tienen sin necesidad de ir personalmente. Reciben notificaciones cuando su tiempo está por vencer.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Asistencia </h4>
                        <p class="text-muted">Chatea con un bibliotecario en línea para resolver dudas o recibir orientación bibliográfica. Los usuarios pueden consultar dudas, solicitar ayuda para ubicar libros o resolver problemas con sus préstamos.</p>
                    </div>
                </div>
            </div>
        </section>


       
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Como podemos mejorar</h2>
                    <h3 class="section-subheading text-muted">Dejanos un comentario contructivo para mejorar tu experiencia como usuario.</h3>
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2023</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Alicia en el País de las Maravillas</h2>
                                    <p class="item-intro text-muted">Un viaje alocado a un mundo donde lo imposible es normal y lo lógico se rompe.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/portfolio/p1.jpg') }}" alt="..." />
                                    <p>Alicia cae por una madriguera y entra en un mundo fantástico lleno de personajes extraños, como el Sombrerero Loco, el Gato de Cheshire y la Reina de Corazones. En su travesía, desafía la lógica, la identidad y las reglas del sentido común. Una historia encantadora que mezcla fantasía, sátira y simbolismo con una imaginación sin límites.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Genero:</strong>
                                            Fantasía / Literatura infantil / Aventura surrealista
                                        </li>
                                        <li>
                                            <strong>🔖 Temas:</strong>
                                            Imaginación, identidad, lógica, crecimiento personal
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Catalago-portafolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Cien Años de Soledad</h2>
                                    <p class="item-intro text-muted">Una saga familiar mágica y poderosa en el mítico pueblo de Macondo.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/portfolio/p2.jpg') }}" alt="..." />
                                    <p>La novela narra la vida de la familia Buendía a lo largo de siete generaciones, en un pueblo ficticio donde lo mágico y lo cotidiano se funden. Con una prosa rica y poética, García Márquez explora el destino, la soledad y la repetición de la historia familiar en un universo literario único.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Genero:</strong>
                                            Novela / Realismo mágico
                                        </li>
                                        <li>
                                            <strong>🔖 Temas:</strong>
                                            Soledad, historia familiar, mitología latinoamericana
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="{{ asset('assets/img/close-icon.svg') }}" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">1984</h2>
                                    <p class="item-intro text-muted">Una distopía inquietante donde la libertad ha sido completamente anulada.</p>
                                    <img class="img-fluid d-block mx-auto" src="{{ asset('assets/img/portfolio/p3.jpg') }}" alt="..." />
                                    <p>En un mundo gobernado por el Partido y vigilado constantemente por el Gran Hermano, Winston Smith lucha contra el control absoluto del pensamiento y la historia. Orwell construye una sociedad opresiva que revela los peligros del totalitarismo, la censura y la manipulación ideológica.</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Genero:</strong>
                                            Ciencia ficción / Política
                                        </li>
                                        <li>
                                            <strong>🔖 Temas:</strong>
                                            Vigilancia, censura, libertad individual
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
          <div class="card shadow-sm mb-4">
            <div class="card-body">
              <h5 class="card-title">Módulo 3</h5>
              <p class="card-text">Contenido adicional que quieras mostrar.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>
</html>
