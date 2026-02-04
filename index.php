<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Consigue más Reseñas Google y Filtra Comentarios Negativos | Dilohoy</title>
  <meta name="description" content="Automatiza la recolección de 5 estrellas en Google Maps. Nuestro software filtra quejas en privado, bloquea malas reseñas y sube tu ranking. ¡Prueba el sistema!">
  <meta name="keywords" content="sistema de reseñas google, blindaje de reputación online, publicidad boca a boca digital, protección contra reseñas falsas, posicionamiento seo local, automatización de marketing, filtro de opiniones clientes, software para pymes mexico, conseguir mas ventas google, código qr para reseñas, negocios con 5 estrellas, dilohoy, búsqueda de negocios en celulares">
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet">
  <link href="assets/css/main.css?v=3.11" rel="stylesheet">
  <?php
    $cupon = '';
    
    if (isset($_GET['ventas'])) {$cupon = filter_input(INPUT_GET, 'ventas', FILTER_SANITIZE_SPECIAL_CHARS);}
    ?>

</head>
<body>
  <header class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="assets/images/logo.png" alt="Dilohoy Logo" height="50">
      </a>
      <div class="d-flex">
        <a href="https://dilohoy.com/app/index.php?ventas=<?=$cupon?>" class="btn btn-outline-primary fw-medium">Regístrate / Panel Clientes</a>
      </div>
    </div>
  </header>
<!-- carrusell -->
  <section id="hero" class="hero position-relative">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-none d-md-block w-100" alt="Clientes felices en negocio" src="/assets/images/carrusel/1.jpg">
          <img class="d-block d-md-none w-100" alt="Clientes felices en negocio" src="/assets/images/carrusel/1movil.jpg">
          <div class="hero-overlay d-flex align-items-center">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 text-start">
                  <h1 class="display-4 fw-bold">Multiplica tus Reseñas de 5 Estrellas en Google Maps</h1>
                  <p class="lead mt-3">Aumenta tus calificaciones positivas y usa nuestro <span class="fw-bold">Escudo Protector</span> para evitar que malas experiencias se hagan públicas</p>
                  <div class="mt-4">
                    <a href="#precios" class="btn btn-primary btn-lg me-2">Ver Planes y Precios</a>
                    <a href="https://dilohoy.com/app/index.php?ventas=<?=$cupon?>"  class="btn btn-outline-primary btn-lg">Contratar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-none d-md-block w-100" alt="Restaurante con reseñas" src="/assets/images/carrusel/banner%201.jpg">
          <img class="d-block d-md-none w-100" alt="Restaurante con reseñas" src="/assets/images/carrusel/banner%201movil.jpg">
          <div class="hero-overlay d-flex align-items-center">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 text-start">
                  <h1 class="display-4 fw-bold">Fácil de Usar y con RESULTADOS en Segundos</h1>
                  <p class="lead mt-3"></p>
                  <div class="mt-4">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previo</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
  </section>

  <section id="problema" class="reveal">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
          <h2 class="section-title mb-3 text-reveal">¿Por Qué Tu Competencia Tiene Más Estrellas Que Tú?</h2>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12 col-md-6">
          <h2 class="text-muted">El Problema Invisible</h2>
          <p>
            Los clientes insatisfechos siempre escriben reseñas negativas. Los clientes felices simplemente se van y olvidan dejarte 5 estrellas.  <br><br>
            Cada día que pasa, pierdes ventas y reputación frente a tu competencia.
            <br><br>
            Tu negocio merece reflejar la calidad real de tu servicio. Las primeras impresiones en Google Maps pueden significar la diferencia entre ganar o perder un cliente nuevo.
          </p>
        </div>
        <div class="col-12 col-md-6">
          <div class="row text-center h-100 align-items-center g-4">
            <div class="col-6">
              <div class="stat-item p-3">
                <div class="display-3 fw-bold text-muted mb-2">87%</div>
                <h5 class="fw-bold text-secondary mb-2">Clientes buscan en Maps</h5>
                <p class="small text-muted mb-0">Antes de visitar un negocio local</p>
              </div>
            </div>
            <div class="col-6">
              <div class="stat-item p-3">
                <div class="display-3 fw-bold text-muted mb-2">4.5<i class="fas fa-star text-secondary ms-2" style="font-size: 0.6em; vertical-align: middle;"></i></div>
                <h5 class="fw-bold text-secondary mb-2">Calificación mínima</h5>
                <p class="small text-muted mb-0">Para atraer nuevos clientes</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="reputacion" class="reveal">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6">
          <h2 class="section-title mb-5 text-center text-reveal">Tu reputación vende más que cualquier anuncio pagado</h2>
          
          <div class="benefit-list mt-4">
            
            <div class="benefit-item d-flex align-items-center mb-4" data-aos="fade-up">
              <div class="benefit-number display-6 fw-bold text-primary me-3">1.</div>
              <div class="benefit-icon me-3">
                <i class="fas fa-money-bill-wave fa-2x text-danger"></i>
              </div>
              <div class="benefit-text">
                <p class="mb-0 lead">Olvídate de quemar presupuesto en campañas costosas que no garantizan resultados.</p>
              </div>
            </div>

            <div class="benefit-item d-flex align-items-center mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="benefit-number display-6 fw-bold text-primary me-3">2.</div>
              <div class="benefit-icon me-3">
                <i class="fas fa-map-marked-alt fa-2x text-warning"></i>
              </div>
              <div class="benefit-text">
                <p class="mb-0 lead">Un perfil lleno de estrellas en Google funciona como un imán permanente que te posiciona primero sin pagar por cada clic.</p>
              </div>
            </div>

            <div class="benefit-item d-flex align-items-center mb-4" data-aos="fade-up" data-aos-delay="200">
              <div class="benefit-number display-6 fw-bold text-primary me-3">3.</div>
              <div class="benefit-icon me-3">
                <i class="fas fa-users fa-2x text-success"></i>
              </div>
              <div class="benefit-text">
                <p class="mb-0 lead">Atrae clientes nuevos que ya vienen listos para comprar, convencidos por la experiencia real de otros, no por un banner publicitario.</p>
              </div>
            </div>

            <div class="benefit-item d-flex align-items-center mb-4" data-aos="fade-up" data-aos-delay="300">
              <div class="benefit-number display-6 fw-bold text-primary me-3">4.</div>
              <div class="benefit-icon me-3">
                <i class="fas fa-robot fa-2x text-info"></i>
              </div>
              <div class="benefit-text">
                <p class="mb-0 lead">Es la forma más inteligente de crecer: marketing automático, gratuito y basado en pura confianza.</p>
              </div>
            </div>

          </div>
        </div>
        <div class="col-12 col-md-6">
          <img src="/assets/images/reputacion.jpg" class="img-fluid rounded-5 " alt="Reputación">
        </div>
      </div>
    </div>
  
  </section>


  <section id="parallax" class="parallax-section reveal">
    <div class="parallax-bg"></div>
    <div class="overlay">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center text-white">
            <h2 class="section-title mb-3 text-white text-reveal">No te quedes viendo cómo otros crecen</h2>
            <p class="lead">Consigue el sistema que llena tu negocio de clientes nuevos.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="how-it-works" class="py-5 reveal">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 col-lg-10">
          <h2 class="display-5 fw-bold mb-3 text-dark text-reveal">El Filtro Inteligente de DiloHoy</h2>
          <p class="lead text-muted">
            "Nuestra innovadora tecnología de "Smart Routing" protege tu reputación mientras multiplica tus reseñas positivas. Un sistema simple que funciona en tres pasos automáticos. Probado y aceptado en 4 países en Latinoamérica.
          </p>
        </div>
      </div>
      <div class="row g-5">
        <!-- Step 1 -->
        <div class="col-md-4">
          <div class="step-card" data-aos="fade-up" data-aos-delay="0">
            <div class="step-number">01</div>
            <div class="step-divider"></div>
            <h3 class="fw-bold mb-3">Activación Inmediata y Simple</h3>
            <p class="text-muted">
              En menos de 5 minutos, y sin necesitar página web, tu negocio queda configurado con enlaces y QRs inteligentes listos para usar. Es un sistema 100% seguro y legal para tu perfil de Google Maps.
            </p>
          </div>
        </div>
        <!-- Step 2 -->
        <div class="col-md-4">
          <div class="step-card" data-aos="fade-up" data-aos-delay="100">
            <div class="step-number">02</div>
            <div class="step-divider"></div>
            <h3 class="fw-bold mb-3">Experiencia Flexible para el Cliente</h3>
            <p class="text-muted">
              El cliente no descarga ninguna app. Ofrece privacidad escaneando el QR Inteligente, directo, o mide la productividad de tu equipo enviando el enlace por WhatsApp al cliente. Ambas opciones son rápidas y sin fricción.
            </p>
          </div>
        </div>
        <!-- Step 3 -->
        <div class="col-md-4">
          <div class="step-card" data-aos="fade-up" data-aos-delay="200">
            <div class="step-number">03</div>
            <div class="step-divider"></div>
            <h3 class="fw-bold mb-3">El "Escudo Protector" en Acción</h3>
            <p class="text-muted">
              Aquí ocurre la magia: Las calificaciones de 4 y 5 estrellas (Calificaciones Positivas) se dirigen automáticamente a Google Maps. Las de 1 a 3 estrellas (Calificaciones Negativas) se filtran a un buzón privado para proteger tu reputación pública.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section id="protege-reputacion" class="bg-light py-5 reveal">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2 class="display-5 fw-bold text-dark text-reveal">Protege Tu Reputación Pública</h2>
        </div>
      </div>
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right">
          <img src="/assets/images/clientes satisfechos.jpg" class="img-fluid rounded-4 shadow-sm" alt="Clientes Satisfechos">
        </div>
        <div class="col-lg-6 ps-lg-5" data-aos="fade-left">
          <h3 class="h4 fw-bold mb-3 text-primary">Sistema DiloHoy vs. Tarjetas NFC</h3>
          <p class="lead mb-4 text-muted" style="font-size: 1.1rem;">
            El riesgo del NFC (Tecnología Ciega) Las tarjetas convencionales cometen un error fatal: le abren la puerta de Google a todos sin distinción. Si un cliente furioso la usa, su mala reseña se publica al instante. Es una tecnología básica que deja tu reputación totalmente expuesta.

          </p>
          <p class="text-muted">
            El Poder de nuestra Inteligencia Artificial DiloHoy no adivina, analiza. Nuestro Escudo de IA detecta el sentimiento del cliente: le abre paso libre exclusivamente a las calificaciones de 4 y 5 estrellas para blindar tu prestigio, mientras que las opiniones negativas (3-1 estrellas) son interceptadas y desviadas a un canal privado. Es un filtro de seguridad invisible que protege tu negocio las 24 horas.

          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="caracteristicas" class="py-5 text-white reveal" style="background-color: #4285F4;">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <h2 class="display-5 fw-bold text-reveal">Características Que Marcan La Diferencia</h2>
        </div>
      </div>
      <div class="row g-4 text-start">
        <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="0">
          <h3 class="h4 fw-bold mb-3">Sin Descargas</h3>
          <p class="lead text-white" style="font-size: 1.1rem; opacity: 0.9;">
            Tus clientes no necesitan instalar nada. La experiencia es instantánea: atreves de tu empleado(s) se envía al cliente un enlace (Invitación) o, para mayor privacidad y rapidez, tu cliente escanea directamente tu Código QR Inteligente sin necesidad de compartir su número de teléfono. Sin fricciones, directo a las estrellas.
          </p>
        </div>
        <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="100">
          <h3 class="h4 fw-bold mb-3">Productividad de Empleados</h3>
          <p class="lead text-white" style="font-size: 1.1rem; opacity: 0.9;">
            Mide con exactitud quién consigue más reseñas a través de los enlaces personalizados y premia a tu mejor mesero, recepcionista o mecánico. Convierte la atención al cliente en un juego motivador con rankings en tiempo real que incentivan a tu equipo a cuidar tu reputación.
          </p>
        </div>
        <div class="col-12 col-md-4" data-aos="fade-up" data-aos-delay="200">
          <h3 class="h4 fw-bold mb-3">Recargas Flex: Saldo disponible todo el año</h3>
          <p class="lead text-white" style="font-size: 1.1rem; opacity: 0.9;">
            Nuestros planes incluyen 50 o 100 invitaciones por mes. ¿Necesitas más? Activa una Recarga Flex. A diferencia de tu cuota mensual, estas invitaciones extra sí se acumulan y quedan disponibles en tu cuenta para usarse cuando quieras durante todo el año de tu suscripción.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="ventajas" class="py-5 reveal" style="background-color: #f0f2f5;">
    <div class="container">
      <div class="advantage-wrapper">
        <h2 class="h3 fw-bold mb-5 text-reveal" style="color: #454545;">Más Ventajas Para Tu Negocio</h2>
        <div class="row g-4">
          <div class="col-md-4">
            <div class="advantage-card">
              <div class="advantage-icon">
                <i class="fas fa-tachometer-alt"></i>
              </div>
              <h3 class="h5 fw-bold mb-3" style="color: #5f6368;">Panel de Control</h3>
              <p class="small text-muted mb-0" style="line-height: 1.6;">
                Monitorea todas las reseñas desde un solo lugar. Ve estadísticas en tiempo real y analiza tendencias para mejorar tu servicio continuamente.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="advantage-card">
              <div class="advantage-icon">
                <i class="far fa-clock"></i>
              </div>
              <h3 class="h5 fw-bold mb-3" style="color: #5f6368;">Automatización Total</h3>
              <p class="small text-muted mb-0" style="line-height: 1.6;">
                Configura recordatorios automáticos y seguimientos sin mover un dedo. El sistema trabaja para ti 24/7 generando reseñas mientras tú te enfocas en tu negocio.
              </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="advantage-card">
              <div class="advantage-icon">
                <i class="fas fa-shield-alt"></i>
              </div>
              <h3 class="h5 fw-bold mb-3" style="color: #5f6368;">Privacidad Garantizada</h3>
              <p class="small text-muted mb-4" style="line-height: 1.6;">
                Cumplimos con todas las normativas de protección de datos. La información de tus clientes está segura y encriptada según estándares internacionales.
              </p>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  <section id="testimonios" class="reveal">
    <div class="container">
      <div class="row mb-4">
        <div class="col-12 text-center">
          <h2 class="text-muted display-5 text-reveal">Lo que opinan  Nuestros Clientes </h2>
        </div>
        <div class="col-12 text-center">
          
          <h2 class="section-title text-reveal">Negocios Que Ya Crecen Con DiloHoy</h2>
        </div>
      </div>
      
    </div>
    

  <!-- Video Section -->
  <div class="container mb-5 mt-5">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="ratio ratio-16x9 shadow-lg rounded-4 overflow-hidden">
          <iframe src="https://www.youtube.com/embed/fXG4lIZtKSA?si=L_LrzXQLHVkLYqor" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center">
          <div class="d-inline-block bg-primary text-white px-5 py-2 rounded-4 mb-3" style="background-color: #4285F4 !important;">
            <h2 class="m-0 fw-bold text-uppercase">Nuestros Planes</h2>
          </div>
          <p class="h2 mt-2 fw-normal">¿Que licencia necesita?</p>
        </div>
      </div>
      
      <div class="row g-4 justify-content-center align-items-center">
        <!-- BÁSICA -->
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 plan-card border-2" style="border-color: #34A853; border-radius: 20px; padding:0px;">
            <div class="card-body p-4 d-flex flex-column">
              <h3 class="fw-bold mb-0 text-dark">BÁSICA</h3>
              <div class="price-section mb-2 mt-3">
                <div class="text-decoration-line-through text-muted  fw-bold" style="font-size:14pt">Precio Normal: $3,800 MX</div>
                <div class="d-flex align-items-center">
                  <span class="display-3 fw-bold text-dark">$1,900</span>
                  
                  <div class="d-inline-block text-start lh-1 ms-2">
                    <small class="d-block fw-bold text-dark">Anual</small>
                    <small class="d-block text-muted">MX</small>
                  </div>
                  <img src="assets/images/50.png" style="width:100px">
                </div>
                <div class="small fw-bold mt-1" style="color: #EA4335;">Descuento por corto tiempo <b>Aprovechalo!</b></div>
              </div>
             
              <ul class="list-unstyled flex-grow-1 mb-4">
                <li class="mb-3 d-flex align-items-start"><i class="fas fa-circle text-muted me-2 mt-2" style="font-size: 8px;"></i>Canal de Envío: SMS</li>
                <li class="mb-3 d-flex align-items-start"><i class="fas fa-circle text-muted me-2 mt-2" style="font-size: 8px;"></i>Canal de Captura: Manual</li>
                <li class="mb-3 d-flex align-items-start"><i class="fas fa-circle text-muted me-2 mt-2" style="font-size: 8px;"></i>Hasta 50 invitaciones al mes</li>
                <li class="mb-3 d-flex align-items-start"><i class="fas fa-circle text-muted me-2 mt-2" style="font-size: 8px;"></i>Filtro de Reseñas Negativas Básico (Sin Reporte)</li>
                <li class="mb-3 d-flex align-items-start"><i class="fas fa-circle text-muted me-2 mt-2" style="font-size: 8px;"></i>Soporte: Email (24h)</li>
              </ul>
              <div class="mt-auto">
                <a href="https://dilohoy.com/app/index.php?ventas=<?=$cupon?>"  class="btn btn-outline-google-green rounded-pill w-100 fw-bold py-2">Necesito esta Licencia</a>
              </div>
            </div>
          </div>
        </div>

        <!-- PRO -->
        <div class="col-lg-4 col-md-6">
          <div class="card h-100 plan-card border-3 position-relative shadow-lg" style="border-color: #EA4335; border-radius: 20px; transform: scale(1.02); z-index: 10;">
            <div class="position-absolute top-0 end-0 text-white px-3 py-1 fw-bold" style="background-color: #EA4335; border-top-right-radius: 15px; border-bottom-left-radius: 15px;">Más Vendido</div>
            <div class="card-body p-4 d-flex flex-column">
              <h3 class="fw-bold mb-0 text-dark">PRO</h3>
              <div class="price-section mb-2 mt-3">
                <div class="text-decoration-line-through text-muted  fw-bold" style="font-size:14pt">Precio Normal: $5,000 MX</div>
                <div class="d-flex align-items-center">
                  <span class="display-3 fw-bold text-dark">$2,500</span>
                  <div class="d-inline-block text-start lh-1 ms-2">
                    <small class="d-block fw-bold text-dark">Anual</small>
                    <small class="d-block text-muted">MX</small>
                  </div>
                  <img src="assets/images/50.png" style="width:100px">
                </div>
                <div class="small fw-bold mt-1" style="color: #EA4335;">Apoyo PYME, Descuento por tiempo limitado</b></div>
              </div>
              <ul class="list-unstyled flex-grow-1 mb-4 mt-3">
                <li class="mb-3 d-flex align-items-start"><i class="fas fa-circle text-muted me-2 mt-2" style="font-size: 8px;"></i>Canal de Envío: SMS y WhatsApp</li>
                <li class="mb-3 d-flex align-items-start"><i class="fas fa-circle text-muted me-2 mt-2" style="font-size: 8px;"></i>Captura Dual: App + QR</li>
                <li class="mb-3 d-flex align-items-start"><i class="fas fa-circle text-muted me-2 mt-2" style="font-size: 8px;"></i>Hasta 100 invitaciones al mes</li>
                <li class="mb-3 d-flex align-items-start"><i class="fas fa-circle text-muted me-2 mt-2" style="font-size: 8px;"></i>Estadística de productividad (Hasta 4 Empleados)</li>
                <li class="mb-3 d-flex align-items-start"><i class="fas fa-circle text-muted me-2 mt-2" style="font-size: 8px;"></i>Filtro de Reseñas Negativas Avanzado (Con Reporte Pro.)</li>
                <li class="mb-3 d-flex align-items-start"><i class="fas fa-circle text-muted me-2 mt-2" style="font-size: 8px;"></i>Soporte: WhatsApp Directo</li>
              </ul>
              <div class="mt-auto">
                <a href="https://dilohoy.com/app/index.php?ventas=<?=$cupon?>"  class="btn btn-outline-google-red rounded-pill w-100 fw-bold py-2">Necesito esta Licencia</a>
              </div>
            </div>
          </div>
        </div>

        <!-- CORPORATIVA -->
       <!-- RECARGAS FLEX -->
<div class="col-lg-4 col-md-6">
  <div class="card h-100 plan-card border-2" style="border-color:#4285F4; border-radius:20px;">
    <div class="card-body p-4 d-flex flex-column">
      <h3 class="fw-bold mb-3 text-dark">RECARGAS FLEX</h3>

      <p class="text-muted mb-4">
        ¿Necesitas más potencia?<br>
        Agrega paquetes de invitaciones extra sin cambiar tu plan actual.
      </p>

      <div class="flex-grow-1">
        <div class=" rounded-3 p-3 mb-3 text-center" style="border: 2px solid green">
          <img src="assets/images/icon_correo1.png" style="width:32px;">
          <div class="fw-bold">Recarga 50 Invitaciones</div>
          <div class="fs-5 fw-bold text-dark">$200 MX</div>
        </div>

        <div class=" rounded-3 p-3 text-center" style="border: 2px solid orange">
          <img src="assets/images/icon_correo1.png" style="width:32px;">
          <div class="fw-bold">Recarga 100 Invitaciones</div>
          <div class="fs-5 fw-bold text-dark">$350 MX</div>
        </div>
      </div>

      <div class="" style="margin-top:8px">
        <a href="https://dilohoy.com/app/index.php?ventas=<?=$cupon?>" 
           class="btn btn-outline-primary rounded-pill w-100 fw-bold py-2">
          Agrega un plan
        </a>
      </div>
    </div>
  </div>
</div>
<h4 class="text-center">
    Tu descuento se activa automáticamente al registrarte. ¿No tienes código?
    <a href="https://wa.me/527351787171?text=Hola,%20estoy%20en%20su%20p%C3%A1gina%20web%20y%20me%20interesa%20registrarme,%20pero%20no%20tengo%20c%C3%B3digo.%20%C2%BFMe%20podr%C3%ADan%20compartir%20uno%20para%20aprovechar%20la%20promo?" target="_blank">Pídelo aquí.</a>
</h4>


      </div>
    </div>
  </section>

  <section class="py-4 py-md-5 reveal">
    <div class="container">
      <div class="p-3 p-md-5 text-center rounded-4 shadow-sm" style="background-color: #e3f2fd; border: 1px solid #bbdefb;">
        <h2 class="mb-3 mb-md-4 fw-bold" style="font-family: 'Lora', serif; color: #1565c0; letter-spacing: 0.5px;">
          Invierte en tu tranquilidad con total seguridad
        </h2>
        <p class="mb-3" style="font-family: 'Lora', serif; color: #34495e; font-size: 1.25rem; line-height: 1.6;">
          Estás adquiriendo un <strong class="fw-bold" style="color: #2c3e50;">Escudo Protector</strong> que trabaja 24/7 para blindar tu reputación.
        </p>
        <p class="mb-0" style="font-family: 'Lora', serif; color: #34495e; font-size: 1.25rem; line-height: 1.6;">
          Elige tu plan y hazlo con total <strong class="fw-bold" style="color: #2c3e50;">confianza</strong>: Tu pago es procesado con la máxima seguridad bancaria a través de 
          <span class="d-inline-flex align-items-center mx-1 align-middle">
            <span class="fw-bold text-danger me-1" style="font-family: sans-serif;">Clip</span>
            <img src="/assets/images/icono_clip.png" alt="Clip" style="height: 30px; vertical-align: middle;">
          </span>
          la plataforma financiera líder y más confiable.
        </p>
      </div>
    </div>
  </section>

  <section id="faq" class="reveal">
    <div class="container">
      <div class="row mb-4">
        <div class="col-12 text-center">
          <h2 class="section-title text-reveal">Resuelve tus dudas al instante</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="accordion" id="faqAccordion">
            <!-- Q1 -->
            <div class="accordion-item mb-3 border-0 shadow-sm rounded overflow-hidden">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  <i class="far fa-question-circle me-2 text-primary"></i> ¿Qué pasa si un cliente quiere dejar una mala calificación?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  Nuestro sistema utiliza Inteligencia Artificial para activar automáticamente un "Escudo Protector". Si el cliente califica la experiencia con 1 a 3 estrellas, la IA detecta la insatisfacción y lo desvía a un formulario de contacto privado en lugar de enviarlo a Google Maps. Esto evita que la mala calificación dañe tu promedio público y te da la oportunidad de arreglar el problema directamente con la persona.
                </div>
              </div>
            </div>

            <!-- Q2 -->
            <div class="accordion-item mb-3 border-0 shadow-sm rounded overflow-hidden">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  <i class="fas fa-gavel me-2 text-primary"></i> ¿Es legal filtrar las reseñas negativas?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  Completamente legal. DiloHoy no incita a forzar opiniones ni manipula la voluntad del cliente; el usuario siempre es libre de escribir lo que desee. Nuestro sistema simplemente organiza el flujo de la conversación: facilita el acceso público a quienes tuvieron una gran experiencia y abre un canal de atención privada para quienes necesitan ayuda, evitando que un simple malentendido se convierta en una crisis pública.
                </div>
              </div>
            </div>

            <!-- Q3 -->
            <div class="accordion-item mb-3 border-0 shadow-sm rounded overflow-hidden">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <i class="far fa-address-book me-2 text-primary"></i> ¿Necesito guardar el número del cliente en mi celular para enviarle la invitación?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  No. Nuestro sistema genera enlaces directos (vía WhatsApp o SMS) que funcionan sin necesidad de agregar números a tu agenda personal. Mantienes tu lista de contactos limpia y el proceso es inmediato.
                </div>
              </div>
            </div>

            <!-- Q4 -->
            <div class="accordion-item mb-3 border-0 shadow-sm rounded overflow-hidden">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  <i class="fas fa-qrcode me-2 text-primary"></i> ¿Por qué DiloHoy es mejor que usar tarjetas o stickers NFC?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  Por versatilidad y seguridad. El NFC te limita a un objeto físico (tarjeta o sticker). El QR Inteligente de DiloHoy es universal: puedes imprimirlo en caballetes de mesa, posters, tickets e incluso en las camisetas de tu staff ("¿Te gustó mi servicio? Escanéame"). La gran diferencia es que, sin importar dónde lo pongas (papel o pantalla), nuestro Escudo con IA siempre estará activo para filtrar las malas experiencias, mientras que un NFC siempre enviará a los clientes enojados directo a dañarte en Google.
                </div>
              </div>
            </div>

            <!-- Q5 -->
            <div class="accordion-item mb-3 border-0 shadow-sm rounded overflow-hidden">
              <h2 class="accordion-header" id="headingFive">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  <i class="fas fa-mobile-alt me-2 text-primary"></i> ¿Tengo que instalar una aplicación en los celulares de mis empleados?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  No. DiloHoy funciona directamente desde el navegador de cualquier teléfono (Android o iPhone). Esto elimina la resistencia de tus empleados a instalar apps extrañas en sus dispositivos personales.
                </div>
              </div>
            </div>

            <!-- Q6 -->
            <div class="accordion-item mb-3 border-0 shadow-sm rounded overflow-hidden">
              <h2 class="accordion-header" id="headingSix">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  <i class="fas fa-wifi me-2 text-primary"></i> ¿Mis empleados gastarán sus datos móviles al usar DiloHoy?
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  Prácticamente nada. DiloHoy es una plataforma web súper ligera y WhatsApp es gratuito en la mayoría de los planes telefónicos. Además, recuerda que también tu cliente puede escanear el código QR directamente desde la pantalla del celular de tu empleado, lo que hace el proceso instantáneo y elimina por completo la necesidad de enviar mensajes si así lo prefieren.
                </div>
              </div>
            </div>

            <!-- Q7 -->
            <div class="accordion-item mb-3 border-0 shadow-sm rounded overflow-hidden">
              <h2 class="accordion-header" id="headingSeven">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                  <i class="far fa-clock me-2 text-primary"></i> ¿Cuánto tiempo toma configurar el sistema?
                </button>
              </h2>
              <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  Menos de 5 minutos. No necesitas conocimientos técnicos. Solo creas tu cuenta, ingresas el nombre de tu negocio tal cual aparece en Google Maps y descargas tu QR. Si tienes personal, solo los registras por nombre y el sistema genera automáticamente los QRs individuales listos para usarse. ¡Y listo! Tu equipo puede empezar a conseguir estrellas hoy mismo.
                </div>
              </div>
            </div>

            <!-- Q8 -->
            <div class="accordion-item mb-3 border-0 shadow-sm rounded overflow-hidden">
              <h2 class="accordion-header" id="headingEight">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                  <i class="fas fa-chart-line me-2 text-primary"></i> ¿Cómo sé si mis empleados realmente lo están usando?
                </button>
              </h2>
              <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  El sistema incluye un "Ranking de Empleados". Podrás ver en tiempo real quién envía más invitaciones y quién consigue más reseñas, permitiéndote premiar a los mejores y motivar al resto del equipo.
                </div>
              </div>
            </div>

            <!-- Q9 -->
            <div class="accordion-item mb-3 border-0 shadow-sm rounded overflow-hidden">
              <h2 class="accordion-header" id="headingNine">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                  <i class="far fa-times-circle me-2 text-primary"></i> ¿Puedo cancelar mi plan en cualquier momento?
                </button>
              </h2>
              <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  Nuestros planes están diseñados con una estructura anual para garantizar resultados a largo plazo en tu posicionamiento SEO. Puedes cancelar la renovación automática cuando quieras; tu servicio permanecerá activo y funcional hasta finalizar el año contratado.
                </div>
              </div>
            </div>

            <!-- Q10 -->
            <div class="accordion-item mb-3 border-0 shadow-sm rounded overflow-hidden">
              <h2 class="accordion-header" id="headingTen">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                  <i class="fab fa-google me-2 text-primary"></i> ¿Ustedes garantizan que Google publicará todas las reseñas?
                </button>
              </h2>
              <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  DiloHoy facilita al máximo la llegada de la reseña, pero Google es una entidad independiente y tiene sus propios filtros antispam. Si Google detecta comportamientos inusuales (como muchas reseñas desde una misma IP o wifi), podría no publicarlas. DiloHoy te da la herramienta de entrega, pero la publicación final depende 100% de las políticas de Google.
                </div>
              </div>
            </div>

            <!-- Q11 -->
            <div class="accordion-item mb-3 border-0 shadow-sm rounded overflow-hidden">
              <h2 class="accordion-header" id="headingEleven">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                  <i class="fas fa-star me-2 text-primary"></i> ¿El sistema garantiza que mi calificación subirá a 5 estrellas?
                </button>
              </h2>
              <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  DiloHoy es un amplificador de tu calidad. Si tu servicio es bueno, el sistema lo gritará a los cuatro vientos y tu calificación subirá rápidamente. Si tu servicio tiene fallas graves, el sistema te ayudará a contener las quejas en privado, pero no puede inventar clientes satisfechos donde no los hay. La herramienta potencia tu reputación, pero la base es tu buen servicio.
                </div>
              </div>
            </div>

            <!-- Q12 -->
            <div class="accordion-item mb-3 border-0 shadow-sm rounded overflow-hidden">
              <h2 class="accordion-header" id="headingTwelve">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                  <i class="fas fa-inbox me-2 text-primary"></i> ¿Qué hago cuando me llega una queja al buzón privado?
                </button>
              </h2>
              <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  ¡Actuar rápido! DiloHoy te entrega el mensaje del cliente insatisfecho al instante (vía email o panel), pero la gestión de la solución depende de ti. El objetivo es que contactes a ese cliente para disculparte o compensarlo. El sistema te da la "segunda oportunidad", aprovecharla para recuperar al cliente está en tus manos.
                </div>
              </div>
            </div>

            <!-- Q13 -->
            <div class="accordion-item mb-3 border-0 shadow-sm rounded overflow-hidden">
              <h2 class="accordion-header" id="headingThirteen">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                  <i class="fas fa-reply me-2 text-primary"></i> ¿Es necesario que yo conteste las reseñas o el sistema lo hace por mí?
                </button>
              </h2>
              <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#faqAccordion">
                <div class="accordion-body text-muted">
                  Aunque nos encantaría que el sistema respondiera por ti, Google funciona de manera independiente y sus algoritmos premian la interacción humana real. Por ello, es vital que tú contestes las reseñas personalmente. Responder (agradeciendo o solucionando) mantiene tu perfil "sano", evita bloqueos repentinos por sospecha de spam y valida ante Google que tu negocio está activo. DiloHoy te trae la oportunidad, tú cierras el trato.
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <footer id="footer" class="footer pt-5 pb-4 reveal">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-12 col-md-6 mb-3">
          <h5>Contacto</h5>
          <ul class="list-unstyled">
            <li><i class="fas fa-envelope me-2"></i>hola@dilohoy.com</li>
            <li><i class="fas fa-phone me-2"></i>+52 735 178 7171</li>
            <li><i class="fas fa-map-marker-alt me-2"></i>CDMX, México</li>
            <li><i class="fab fa-facebook me-2"></i><a href="https://www.facebook.com/DiloHoy" target="_blank">DiloHoy</a></li>
          </ul>
        </div>
        <div class="col-12 col-md-6 mb-3">
          <h5>Legales</h5>
          <ul class="list-unstyled">
            <li><a href="terminos-y-condiciones.php">Términos y Condiciones</a></li>
            <li><a href="avisos-de-privacidad.php">Aviso de Privacidad</a></li>
          </ul>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col-12 text-center text-muted">
          <small>© 2026 dilohoy. Todos los derechos reservados.</small>
        </div>
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/main.js?v=3.5"></script>
</body>
</html>
