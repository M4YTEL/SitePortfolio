<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service_design_HelloFresh</title>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "nicolas-chonavey.fr",
            "url": "https://nicolas-chonavey.fr/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
    <link rel="stylesheet" href="styles/service_design_HelloFresh.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image" href="images/Logo_simplifie.svg" />
</head>
<body>
    <section class="container">
        <?php include("header.php"); ?>
        <main>
            <?php include("cursor.php"); ?>
            <section class="banner_HelloFresh">
                <div class="banner-title_HelloFresh">
                    <h2>HellowFresh</h2>
                    <h3>Reconcevoir le design du service</h3>
                    <!-- <div class="badges"> -->
                    <!-- <div class="badge">
                    <a href="pdf/Ggraph_maquette.pdf" target="_blank"><button class="btn btn-primary" target="_blank">Télécharger
                            la maquette<i class="bi bi-download"></i></button></a>
                </div> -->
                    <!-- <div class="badge">
                        <a href="pdf/Ggraph_charte_graphique.pdf" target="_blank"><button class="btn btn-primary" target="_blank">Télécharger charte graphique</button></a>
                    </div> -->
                </div>
            </section>
            <section class="container">
                <div class="presentation-header">
                    <h4>#SERVICE DESIGN</h4>
                    <h2>Le service design HellowFresh</h2>
                </div>
                <div class="presentation">
                    <!-- Slideshow container -->
                    <div class="slideshow-container">
                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 8</div>
                            <img src="images/HelloFresh/Presentation.PNG" style="width:100%">
                            <!-- <div class="text">Caption One</div> -->
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">2 / 8</div>
                            <img src="images/HelloFresh/Positif&Negatif.PNG" style="width:100%">
                            <!-- <div class="text">Caption Two</div> -->
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">3 / 8</div>
                            <img src="images/HelloFresh/UserFlow.PNG" style=" width:100%">
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">4 / 8</div>
                            <img src="images/HelloFresh/Odile_Persona.PNG" style="width:100%">
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">5 / 8</div>
                            <img src="images/HelloFresh/Roxane_Persona.PNG" style="width:100%">
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">6 / 8</div>
                            <img src="images/HelloFresh/Aurelien_Persona.PNG" style="width:100%">
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">7 / 8</div>
                            <img src="images/HelloFresh/Priorisation.PNG" style="width:100%">
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">8 / 8</div>
                            <img src="images/HelloFresh/Blueprint.PNG" style="width:100%">
                        </div>
                        <!-- <div class="mySlides fade">
                        <div class="numbertext">5 / 5</div>
                        <img src="images/Ggraph/Footer_Desktop.jpg" style="width:100%">
                    </div> -->
                    </div>
                    <div class="presentation-description" id="a-propos">
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
                        <div class="badge">
                            <a href="index.php#contact"><button class="btn btn-primary">Me contacter</button></a>
                        </div>
                    </div>
                </div>
                <div class="outils">
                    <div class="tabs">
                        <div class="tab-registers">
                            <button class="active-tab">
                                <h3>Outils utilisés</h3>
                            </button>
                        </div>
                        <div class="tab-bodies">
                            <div style="display:block;">
                                <img src="icons/Figma_logo.svg" class="outils-icon" alt="figma" />
                            </div>
                        </div>
                    </div>
                    <div class="outils-content">
                        <h3>Durée</h3>
                        <p>2 semaines</p>
                    </div>
                </div>
            </section>
            <?php include("reseaux_sociaux.php"); ?>
            <?php include("footer.php"); ?>
        </main>
    </section>
    <script src="js/menu.js">
    </script>
    <script src="js/onglet.js">
    </script>
    <script src="js/carousel.js">
    </script>
    <script src="js/deplier.js">
    </script>
    <script src="js/cursor.js">
    </script>
    <script src="js/dark_mode.js">
    </script>
</body>
</html>