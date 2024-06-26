<?php
session_start();
if(!isset($_SESSION['name'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>State info</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
          <a class="navbar-brand"style="font-family:jokerman;" href="#"><span class="text-warning">Nomadic</span>Nooks</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item"style="font-family:comic sans ms;">
                <a class="nav-link" href="css properties.html">Home</a>
              </li>
              <li class="nav-item"style="font-family:comic sans ms;">
                <a class="nav-link" href="Aboutus.html">About</a>

             <li class="nav-item"style="font-family:comic sans ms;">
                    <a class="nav-link" href="portofolio.html">Portofolio</a>

                        <li class="nav-item"style="font-family:comic sans ms;">
                            <a class="nav-link" href="contact.html">Contact</a>
                            <li class="nav-item"style="font-family:comic sans ms;">
                                <a class="nav-link" href="sign up form.html">Sign up</a>
                                <li class="nav-item"style="font-family:comic sans ms;">
                                    <a class="nav-link" href="login.html">Login</a>




            </ul>
            
          </div>
        </div>
      </nav>

      <div id="carouselExampleCaptions" class="carousel slide"data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="http://yesofcorsa.com/wp-content/uploads/2017/03/Temples-Of-India-Best-Wallpaper.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>INDIA</h5>
              <p>Travel not to escape life, but for life not to escape you</p>
              <p><a href="#"class="btn btn-warning mt-3">Learn More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://wallpapercave.com/wp/e7vo9d8.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
              <h5>BHARAT</h5>
              <p>The world is a book, and those who do not travel read only one page
            </p>
              <p><a href="#"class="btn btn-warning mt-3">Learn More</a></p>
            </div>
              
            </div>
          </div>
          <div class="carousel-item">
            <img src="https://cdn.wallpapersafari.com/67/42/aFP4ol.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
              <h5>Heart of Asia</h5>
              <p>ncredible India, Where every state tells a story, and every story is a celebration of diversity</p>
              <p><a href="#"class="btn btn-warning mt-3">Learn More</a></p>
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





      <!-- about section -->

      <section id="about" class="about-section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="https://wallpapercave.com/wp/wp11327547.jpg" alt="" class="img-fluid ">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>Ancient Civilizations<br> Home to one of the world’s oldest civilizations, the Indus Valley Civilization.</h2>
                        <p> India, a land of diverse cultures, languages, and landscapes, is divided into 28 states and 8 Union Territories</p>
                        <a href="#" class="btn btn-warning">Learn more</a>
                    </div>
                </div>
            
            </div>
        </div>
      </section>

      <!-- service section-->
    

      <section id="services" class="services section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Nomadic Nooks </h2>
                        <p> our main goal is<br> we want you to learn unknown history</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-subtract"></i>
                            <h3 class="card-title">Before Colonisation</h3>
                            <p class="lead">Before colonization, India was a land of rich cultural heritage, diverse kingdoms, and thriving trade.One of the world's oldest urban civilizations, located in present-day Pakistan and northwest India.
                                Known for advanced city planning, drainage systems, and trade.</p>
                            <a  href="beforecolonisation.html"> <button class="btn btn-warning text-dark">Read More</button></a>
                            <a href="index.html">Back</a>

                            

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-slack"></i>
                            <h3 class="card-title">After colonisation</h3>
                            <p class="lead">India underwent significant changes after colonization, primarily under British rule,Arrival of Europeans,
                                Portuguese,
                                Arrived in 1498 with Vasco da Gama.
                                Established trading posts in Goa, Daman, Diu, and other coastal areas.
                                </p>
                            <a href="aftercolonistion.html"> <button class="btn btn-warning text-dark">Read More</button></a>
                            <a href="index.html">Back</a>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-white text-center bg-dark pb-2">
                        <div class="card-body">
                            <i class="bi bi-playstation"></i>
                            <h3 class="card-title">Unknown facts of india</h3>
                            <p class="lead">Varanasi, Benares is one of the oldest continuously inhabited cities in the world.
                            Takshashila  University was the world's first university, attracting students from across the globe.
                            Chess, originally called "Chaturanga," was invented in India.
                                </p>
                            <button class="btn btn-warning text-dark">Read More</button>
            </div>
        </div>
                </div>
            </div>
        </div>
    </section>




    <!-- portofolio -->


    <section id="portfolio" class="portfolio section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2> our projects</h2>
                        <p> Name your state<br> I will suprise you!</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4">
                <div class="card text-center bg-white pb-2">
                    <div class="card-body text-dark">
                        <div class="img-area mb-47">
                            <img src="https://ihplb.b-cdn.net/wp-content/uploads/2017/03/Brihadeeswarar-TempleThanjavur.jpg" alt="" class="img-fluid">
                        </div>
                        <h3 class="card-title">Tamil Nadu</h3>
                        <p class="lead">Tamil Nadu is a state that beautifully combines tradition with modernity. Its rich cultural heritage, historical landmarks, and educational excellence make it a prominent and dynamic region in India. Whether it’s exploring ancient temples, enjoying classical music and dance,Tamil Nadu offers a unique and enriching experience.</p>
                        <a href="tamilnadu.html"> <button class="btn bg-warning text-dark">Learn more</button></a>

                    </div>
                </div>
            </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-47">
                                <img src="https://wallpaperaccess.com/full/2012317.jpg" alt="" class="img-fluid">
                            </div>
                            <h3 class="card-title">Maharashtra</h3>
                            <p class="lead">
                                Maharashtra is a state that seamlessly blends tradition and modernity. Its cultural richness, historical landmarks, economic strength, and educational excellence make it a pivotal state in India. From the bustling streets of Mumbai to the serene landscapes of the Western Ghats, Maharashtra offers a unique and multifaceted experience.
                            </p>
                            <a href="maharashtra.html"><button class="btn bg-warning text-dark">Learn more</button></a>

                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-47">
                                <img src="https://images.alphacoders.com/541/thumb-1920-541010.jpg" alt="" class="img-fluid">
                            </div>
                            <h3 class="card-title">Punjab</h3>
                            <p class="lead">Punjab is a state that embodies the spirit of resilience,and celebration.Its rich cultural heritage, agricultural prosperity, and dynamic lifestyle make it a vibrant and essential part of India. Whether exploring the serene Golden Temple, or savoring delectable cuisine, Punjab offers an enriching and unforgettable experience.</p>
                            <a href="punjab.html"><button class="btn bg-warning text-dark">Learn more</button></a>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-center bg-white pb-2">
                            <div class="card-body text-dark">
                                <div class="img-area mb-47">
                                    <img src="https://www.worldatlas.com/r/w1200/upload/e5/0e/5f/shutterstock-122322643.jpg" alt="" class="img-fluid">
                                </div>
                                <h3 class="card-title">Jharkhand</h3>
                                <p class="lead">Jharkhand is a state that beautifully blends ancient traditions with modern advancements. Its rich cultural heritage, historical landmarks,and natural beauty make it a dynamic region in India. Whether, enjoying vibrant festivals, or engaging with cutting-edge technology, Karnataka offers a diverse and enriching experience.

                                </p>
                                <a href="jharkhand.html"><button class="btn bg-warning text-dark">Learn more</button></a>

                            </div>
                        </div>
                    </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-47">
                                <img src="https://www.india-tours.com/images/states-images/assam.jpg" alt="" class="img-fluid">
                            </div>
                            <h3 class="card-title">Assam</h3>
                            <p class="lead">Assam is a state that beautifully blends natural beauty with rich cultural heritage,Its lush green landscapes, diverse wildlife,make it a unique and fascinating part of India. Whether exploring the tea gardens, visiting ancient temples, or experiencing the warmth of its festivals, Assam offers enriching experience.</p>
                            <a href="assam.html"><button class="btn bg-warning text-dark">Learn more</button></a>

                        </div>
                    </div>
                </div><div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-47">
                                <img src="https://i.pinimg.com/originals/76/56/a8/7656a8c5475616deccf9244dfb6d6470.jpg" alt="" class="img-fluid">
                            </div>
                            <h3 class="card-title">Gujarat</h3>
                            <p class="lead">Gujarat,with its rich history,cultural diversity, and is a crucial state in India. It offers a unique blend of ancient traditions and  making it a fascinating place to explore. From the spiritual ghats of Varanasi to the architectural splendor of the Taj Mahal, Uttar Pradesh captivates with its diverse experiences and profound heritage
                                 <a href="gujarat.html"></p><button class="btn bg-warning text-dark">Learn more</button></a>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- team section -->
    <section id="team" class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2> Nomadic Nooks</h2>
                        <p> Ancient India was a land of wisdom and enlightenment, a beacon for the world in the domains of science, philosophy, and spirituality.<br>The soul of India lives in its villages</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="https://i.pinimg.com/originals/f2/8a/7a/f28a7a855ea3e5c7c5e0f4a964ef9cbc.jpg" alt="" class="img-fluid rounded-circle">
                            <h3 class="card-title py-2">Kirthika</h3>
                            <p class="card-text">Alone we can do so little; together we can do so much</p>


                            <p class="socials">
                                <i class="bi bi-twitter text-dark mx-1"></i>
                                <i class="bi bi-facebook text-dark mx-1"></i>
                                <i class="bi bi-linkedin text-dark mx-1"></i>
                                <i class="bi bi-instagram text-dark mx-1"></i>

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <img src="https://i.pinimg.com/originals/19/19/3c/19193c02793ab9499c174965d84cd286.jpg" alt="" class="img-fluid rounded-circle">
                            <h3 class="card-title py-2">Divyadharshini</h3>
                            <p class="card-text">Strength lies in differences, not in similarities</p>


                            <p class="socials">
                                <i class="bi bi-twitter text-dark mx-1"></i>
                                <i class="bi bi-facebook text-dark mx-1"></i>
                                <i class="bi bi-linkedin text-dark mx-1"></i>
                                <i class="bi bi-instagram text-dark mx-1"></i>


                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- contact section -->
    <section id="contact" class="contact section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2> contact us </h2>
                        <p> Need assistance,<br> Our team is ready to support you. Contact us now</p>
                    </div>
                </div>
            </div>
            <div class="row m-0">
                <div class="col-md-12 p-0 pt-4 pb-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <input type="text" class="form-control" required placeholder="your full name">
                            </div>

                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <input type="email" class="form-control" required placeholder="your email Here">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <textarea name="" rows="3" required class="form-control" placeholder="your Query here"></textarea>
                            </div>
                        </div>

                        <button class="btn btn-warning btn-lg btn-block mt-3">Send now</button>
            </div>

        </div>
        <form><fieldset>
            <legend style="font-family:comic sans ms;">Are You satisfied with us?</legend>
            Yes <input name="yes" type="radio" value="yes" style="text-align:center;"/>

            No <input name="no" type="radio" value="no" style="text-align:center;"/>

            </fieldset>
        </form>
    </section>
    <?php
        echo $_SESSION['name'];
        echo $_SESSION['email'];
        echo $_SESSION['password'];
        ?>
    <!-- footer  -->
    <footer class="bg-dark p-2 text-center">
        <div class="container">
            <p class="text-white">All right reserved @website name</p>
        </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>