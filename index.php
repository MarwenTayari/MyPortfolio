<?php include 'php/sendemail.php' ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css"> 
    <link rel="stylesheet" href="style/portfolio.css">
    <link rel="stylesheet" href="style/lightslider.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@0;1&display=swap" rel="stylesheet">  
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Otomanopee+One&family=Yanone+Kaffeesatz:wght@600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" href="https://static.wixstatic.com/media/a83626_7f415540a0124552ae54cea80031cac2~mv2.png/v1/fill/w_220,h_230,al_c,q_85,usm_0.66_1.00_0.01/avatars%20garcon.webp">
    <title>Portfolio - MARWEN TAYARI</title>
</head>
<body>
    <header>
        <nav> 
            <div class="logo-div"> 
                <img src="https://static.wixstatic.com/media/a83626_7f415540a0124552ae54cea80031cac2~mv2.png/v1/fill/w_220,h_230,al_c,q_85,usm_0.66_1.00_0.01/avatars%20garcon.webp" alt="logo" class="logo img-fluid" >
            </div>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn"> 
                <div class="menu-icon-div"></div>
                <div class="menu-icon-div"></div>
                <div class="menu-icon-div"></div>
            </label>

            <ul>
                <li><a class="scroll" href="#acceuil">Acceuil</a></li>
                <li><a class="scroll" href="#monprofil">Profil</a></li>   
                <li><a class="scroll" href="#monparcours" >Mon parcours</a></li>   
                <li><a class="scroll" href="#competences">Mes Compétences</a></li>
                <li><a class="scroll" href="#monportfolio">Portfolio</a></li>
                <li><a class="scroll" href="#contact">Contact</a></li>   
            </ul>
        </nav> 
        <div id="progress-bar-scroll"> 

        </div> 
    </header>
    <section id="acceuil">  
        <section class="my-section accueil"> 
        </section>
        <div class="acceuil-div">
            <div class="text1-div"> <span class="d-block text-center acceuil-animation1">         Bonjour , Je suis Marwen Tayari...</span></div> 
            <div class="acceuil-animation3"> <span class="d-block text-center acceuil-animation2">Dévloppeur Web</span></div> 
            
            <div class="qui-suis-je"> 
              <div class="d-flex justify-content-center align-items-center btn-style">
                <a  class="btn btn-warning mt-3" href="#monprofil">QUI-SUIS JE ?</a>
              </div>
            </div>
            
        </div>
    </section>
    <section class="my-section profil" id="monprofil">
        <div class="container profil-content"> 
            <div class="row">
                <div class="col-md-12 col-lg-3 my-img d-flex justify-content-center" data-aos="zoom-in-up">
                    <img src="images/Photo.PNG" alt="photo" width="250px" class="img-fluid">
                </div>
                <div class="col-md-12 col-lg-9" data-aos="zoom-in-up"> 
                    <div class="my-presentation"> 
                      <div class="text-center"> 
                        <span class="titre1">A PROPOS DE MOI : </span>
                      </div> 
                        <div class="d-flex justify-content-center align-items-center"> 
                            <p class="presentation text-center"> 
                                Bonjour, je m’appelle Marwen Tayari , 
                                je suis un ingénieur en Mécatronique très Passionné par la réalisation et le développement WEB, Je me suis tout naturellement tourné vers une carrière de développeur web, Aujourd’hui je souhaite intégrer une entreprise dynamique et jeune. <br> Autonome ,Organisé , Esprit d’équipe.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="myCaroussel"> 
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner carousel1">
              <div class="carousel-item active">
                <div class="carousel-caption d-none d-md-block"> 
                  <div class="carousel-div"> 
                    <div class="carousel-text-div"> 
                      <h4>"Mesurer la progression du développement d’un logiciel à l’a une de ses lignes de code revient à mesurer la progression de la construction d’un avion à l’a une de son poids"</h4>
                      <h5>Bill Gates</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item"> 
                <div class="carousel-caption d-none d-md-block">
                  <div class="carousel-div"> 
                    <div class="carousel-text-div">
                      <h4>"Codez toujours comme si la personne qui allait maintenir votre code était un violent psychopathe qui sait où vous habitez."</h4>
                      <h5>John Woods</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>

    <section class="my-section moncv monparcours" id="monparcours">
      <div >
        <div class="text-center"> 
          <span class="text-center titre1" data-aos="zoom-in-up">MON PARCOURS : </span>
        </div>
         <div class="container"> 
             <div class="row"> 
                <div class="col-md-12 col-lg-7" data-aos="zoom-in-up"> 
                    <span class="titre2">PARCOURS ACADEMIQUES : </span> 
                    <div> 
                         <ul>
                             <li class="pt-3">ENISo , ECOLE NATIONALE D’INGÉNIEURS DE SOUSSE.</li>
                                Diplôme nationale d’ingénieur en mécatronique.</li>
                             <li class="pt-3">IPEIM, INSTITUT PRÉPARATOIRE AUX ETUDES D’INGÉNIEURS DE MONASTIR.</li>
                                Concours nationale d’accés aux cycles de formation d’ingénieurs,
                                Physique technique.</li>
                             <li class="pt-3">LYCÉE HAMMAM SOUSSE, SOUSSE.</li>
                                Baccalauréat Sciences Technique </li>
                         </ul>
                    </div>
                    <span class="titre2">PARCOURS PROFESSIONELS : </span> 
                    <div> 
                        <ul>
                            <li class="pt-3">SOGECLAIR AEROSPACE SARL</li>
                               2017-2021 - Ingénieur MAP DESIGN (A350/SA/LR)</li>
                            <li class="pt-3">TUNIMARINE</li>
                               2016 - Ingénieur conception mécanique </li>
                        </ul>
                    </div>
                </div>
                 <div class="col-md-12 col-lg-5" data-aos="zoom-in-up"> 
                   <div class="text-center"> 
                       <span class="titre2">MON CV : </span> 
                   </div>
                    <div class="moncv-div d-flex justify-content-center align-items-center">
                        <img src="cv/CV_TAYARI_Marwen_Dévloppeur FULL_STACK.jpg" alt="mon cv" class="img-fluid">
                    </div>
                    <div class="text-center btn-style"> 
                        <a href="cv/CV_TAYARI_Marwen_Développeur WEB.pdf" class="btn btn-warning mt-3" target="_blank">
                           >> Télécharger
                        </a>
                    </div>
                 </div>
             </div>
         </div>
        </div>
        </div>
    </section> 

    <section class="myCaroussel"> 
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner carousel2">
              <div class="carousel-item active">
                <div class="carousel-caption d-none d-md-block">
                  <div class="carousel-div"> 
                    <div class="carousel-text-div"> 
                      <h4>"Mesurer la progression du développement d’un logiciel à l’a une de ses lignes de code revient à mesurer la progression de la construction d’un avion à l’a une de son poids"</h4>
                      <h5>Bill Gates</h5>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                  <div class="carousel-div"> 
                    <div class="carousel-text-div">
                      <h4>"Codez toujours comme si la personne qui allait maintenir votre code était un violent psychopathe qui sait où vous habitez."</h4>
                      <h5>John Woods</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>

    <section >
        <section class="my-section competences" id="competences">
            <div class="my-competences-info" >
              <div class="text-center competences-title" data-aos="zoom-in-up"> 
                <span class="titre1 p-3" > COMPETENCES : </span>
              </div>
                <div class="container">  
                    <div class="row" >
                        <div class="col-md-12 col-lg-6"> 
                            <div class="front-end" > 
                              <div data-aos="zoom-in-up"> 
                                <span class="titre2" >Front End : </span>
                              </div>
                                <div class="competences-items" data-aos="zoom-in-up"> 
                                    <div class="competence-item">
                                        <span >Html</span>
                                        <div class="progress">
                                            <div class="progress-value html"></div>
                                        </div>
                                    </div>
                                    <div class="competence-item" data-aos="zoom-in-up">
                                        <span>Css</span>
                                        <div class="progress">
                                            <div class="progress-value css"></div>
                                        </div>
                                    </div>
                                    <div class="competence-item" data-aos="zoom-in-up">
                                        <span>JavaScript / JQuery</span>
                                        <div class="progress">
                                        <div class="progress-value js"></div>
                                        </div>
                                    </div>
                                    <div class="competence-item" data-aos="zoom-in-up"> 
                                        <span>Bootstrap / React-Bootstrap</span>
                                        <div class="progress">
                                        <div class="progress-value bootstrap"></div>
                                        </div>
                                    </div >
                                    <div class="competence-item" data-aos="zoom-in-up"> 
                                        <span>React-Js</span>
                                        <div class="progress">
                                        <div class="progress-value react"></div>
                                        </div>
                                    </div>
                                    <div class="competence-item" data-aos="zoom-in-up"> 
                                        <span>Redux</span>
                                        <div class="progress">
                                        <div class="progress-value redux"></div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                        </div>
                        <div class="col-md-12 col-lg-6" >
                            <div class="back-end"> 
                              <div data-aos="zoom-in-up"> 
                                <span class="titre2" data-aos="zoom-in-up">Back End : </span>
                              </div>
                                <div class="competence-item" data-aos="zoom-in-up"> 
                                    <span>Node-Js</span>
                                    <div class="progress">
                                    <div class="progress-value node"></div>
                                    </div>
                                </div>
                                <div class="competence-item" data-aos="zoom-in-up"> 
                                    <span>Express-Js</span>
                                    <div class="progress">
                                    <div class="progress-value express"></div>
                                    </div>
                                </div>
                                <span class="titre2" data-aos="zoom-in-up">Data Base : </span>
                                <div class="competence-item" data-aos="zoom-in-up"> 
                                    <span>MongoDB</span>
                                    <div class="progress">
                                    <div class="progress-value mongodb"></div>
                                    </div>
                                </div>
                                <div class="competence-item" data-aos="zoom-in-up"> 
                                    <span>Mongoose</span>
                                    <div class="progress">
                                    <div class="progress-value mongoose"></div>
                                    </div>
                                </div>
                                <div class="competence-item" data-aos="zoom-in-up"> 
                                    <span>MySQL</span>
                                    <div class="progress">
                                    <div class="progress-value mysql"></div>
                                    </div>
                                </div>    
                           </div>
                       </div>
                   </div>
                </div>
            </div>
        </section>
    </section>

    <section class="myCaroussel"> 
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner carousel3">
              <div class="carousel-item active">
                <div class="carousel-caption d-none d-md-block"> 
                  <div class="carousel-div"> 
                    <div class="carousel-text-div"> 
                      <h4>"Mesurer la progression du développement d’un logiciel à l’a une de ses lignes de code revient à mesurer la progression de la construction d’un avion à l’a une de son poids"</h4>
                      <h5>Bill Gates</h5>
                    </div>
                </div>
                </div>
              </div>
              <div class="carousel-item">
                
                <div class="carousel-caption d-none d-md-block">
                  <div class="carousel-div"> 
                    <div class="carousel-text-div">
                      <h4>"Codez toujours comme si la personne qui allait maintenir votre code était un violent psychopathe qui sait où vous habitez."</h4>
                      <h5>John Woods</h5>
                    </div>
                </div>
                </div>
              </div>
              
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    
    <section class="my-section portfolio" id="monportfolio">
      <div >
        <div class="text-center"> 
          <span class="titre1" data-aos="zoom-in-up">PORTFOLIO : </span> 
        </div>
       
        <p class="text-center portfolio-pres" data-aos="zoom-in-up">Ci-dessous, quelques exemples de mes réalisations : </p> 
          <div class="container-protfolio" data-aos="zoom-in-up">

             <ul id="autoWidth" class="cs-hidden"> 
                   <li class="irem-a"> 
                    <div class="box"> 
                      <div> 
                        <p class="marvel text-center">1. S & B Store</p> 
                        <div class="image-div"> 
                           <img src="images/portfolio/S&BStore.jpg" alt="S&BStore" class="img-fluid"> 
                        </div> 
                        <div class="projet-pres"> 
                          <p class="text-center">Application E-commerce conçu pour vente/achat
                            de toutes sorte d’articles.</p>
                        </div>
                      </div>
                      
                      <div class="details"> 
                            <p class="p-3">Technologies utilisées : <br> MERN APP <br> REACT JS , REDUX , EXPRESS JS , REACT BOOTSTRAP, NODE JS, MONGO DB </p>
                            <p> <a href="https://polar-everglades-90055.herokuapp.com" Target="_blank"> <i class="bi bi-link"></i> Lien</a></p>
                      </div>
                    </div>
                   </li>

                   <li class="irem-a"> 
                    <div class="box"> 
                      <div> 
                        <p class="marvel text-center">2. N & B</p> 
                        <div class="image-div"> 
                          <img src="images/portfolio/N&B.jpg" alt="N&B" class="img-fluid">
                        </div>
                        <div class="projet-pres"> 
                          <p class="text-center"> Application Web conçu pour présenter quelques endroits du monde 
                          </p>
                        </div>
                      </div>
                      
                      <div class="details"> 
                            <p class="p-3"> Technologies utilisées : <br> HTML, CSS , JAVASCRIPT
                            </p>
                      </div>
                    </div>
                   </li>

                   <li class="irem-a"> 
                    <div class="box"> 
                      <div> 
                        <p class="marvel text-center">3. Shopping Cart</p> 
                        <div class="image-div"> 
                          <img src="images/portfolio/Shoppingcart.jpg" alt="ShoppingCart" class="img-fluid">
                        </div>
                        <div class="projet-pres">
                          <p class="text-center"> Application Web conçu pour l'achat des articles
                          </p>
                        </div>
                      </div>
                      
                      <div class="details"> 
                        <p class="p-3"> Technologies utilisées : <br> HTML, CSS , JAVASCRIPT 
                        </p>
                        <p> <a href="https://marwentayari.github.io/Shopping-cart/" Target="_blank"> <i class="bi bi-link"></i> Lien</a></p>
                      </div>
                    </div>
                   </li>

                   <li class="irem-a"> 
                    <div class="box"> 
                      <div> 
                        <p class="marvel text-center">4. Movie App</p> 
                        <div class="image-div"> 
                          <img src="images/portfolio/Movieapp.jpg" alt="MovieApp" class="model img-fluid">
                        </div> 
                        <div class="projet-pres">
                          <p class="text-center">Application Web conçu pour ajouter des filmes avec Description/Rate/trailer...
                          </p>
                        </div>
                      </div>
                      
                      <div class="details"> 
                        <p class="p-3">Technologies utilisées : <br> REACT JS , REDUX
                        </p>
                      </div>
                    </div>
                   </li>
             </ul>
          </div>
        
      </div>
    </section> 

    <section class="myCaroussel"> 
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner carousel4">
              <div class="carousel-item active">
                <div class="carousel-caption d-none d-md-block">
                  <div class="carousel-div"> 
                    <div class="carousel-text-div"> 
                      <h4>"Mesurer la progression du développement d’un logiciel à l’a une de ses lignes de code revient à mesurer la progression de la construction d’un avion à l’a une de son poids"</h4>
                      <h5>Bill Gates</h5>
                    </div>
                </div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="carousel-caption d-none d-md-block">
                  <div class="carousel-div"> 
                    <div class="carousel-text-div">
                      <h4>"Codez toujours comme si la personne qui allait maintenir votre code était un violent psychopathe qui sait où vous habitez."</h4>
                      <h5>John Woods</h5>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>

    <section class="my-section contact" id="contact">

        <div class="container"> 
          <div class="text-center"> 
            <span class="titre1">CONTACTER MOI : </span>
          </div>

          <form method="POST"> 

                  <div class="row">
                    <div class="col-md-6 col-sm-12"> 
                        <label for="name">NOM : </label>
                        <input type="text" class="form-control" placeholder="Nom" name="name" id="name" aria-label="First name" required>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="lastname">PRENOM : </label>
                        <input type="text" class="form-control" placeholder="Prénom" name="lastname" id="lastname" aria-label="Last name" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 col-sm-12"> 
                        <label for="email">E-MAIL: </label>
                        <input type="email" class="form-control" placeholder="E-mail" name="email" id="email" aria-label="E-mail" required>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <label for="object">OBJET : </label>
                        <input type="text" class="form-control" placeholder="Objet" name="object" id="object" aria-label="Object" required>
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-floating">
                         <div class="mb-3">
                            <label for="exampleFormControlTextarea1">MESSAGE : </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tapez votre massage ici" name="message" required></textarea>
                          </div>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center align-items-center"> 
                    <button type="submit" class="btn btn-light" name="submit">Envoyer</button> 
                  </div> 
                  <?php echo $alert; ?> 
          </form>

            <div class="mes-contacts"> 
                <div class="container">
                    <div class="row mes-contact"> 
                        <div class="col-lg-6 col-md-12 text-center">
                          <i class="bi bi-geo-alt"></i> <i> 43 Rue El Omrane Hammam Sousse 4011, Sousse, Tunisie</i> <br> 
                          <i class="bi bi-geo-alt"></i> <i> Route de Raoued Km3,5 ,2088 Ariana, Tunisie</i>
                         </div>
                        <div class="col-lg-3 col-md-12 text-center"><i class="bi bi-telephone"></i> <i>(+216) 92 06 72 45</i> </div>
                        <div class="col-lg-3 col-md-12 text-center"><i class="bi bi-envelope"></i> <a href="mailto:tayarimarwen@gmail.com"><i>tayarimarwen@gmail.com</i></a></div>
                    </div>
    
                    <div class="d-flex justify-content-center align-items-center"> 
                        <div> 
                            <a href="https://www.linkedin.com/in/marwen-tayari-28999910a/"
                        target="_blank"><img src="https://img.icons8.com/fluent/48/000000/linkedin.png"/></a>
    
                        <a href="https://github.com/MarwenTayari?tab=repositories"
                            target="_blank"><img src="https://img.icons8.com/fluent/48/000000/github.png"/></a>
    
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <div class="scroll-top-div"> 
      <div class="d-flex justify-content-center align-items-center"> 
        <a href="#acceuil"> 
          <img src="images/scrolltop.png" alt="scrolltop" class="scroll-btn">
        </a>
      </div>
    </div>
    <footer>
        <div class="text-center"> 
            © Copyright 2021 - Marwen TAYARI. Tous droits réservés. 
        </div> 
    </footer>
    <script
        src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"></script> 
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script type="text/javascript">  
          AOS.init({
            duration : 800
          });

          if(window.history.replaceState){
            window.history.replaceState(null,null,window.location.href) ; 
          }
    </script>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="js/scrolling.js" type="text/javascript"></script>  
    <script src="js/lightslider.js" type="text/javascript"></script>
</body>
</html>