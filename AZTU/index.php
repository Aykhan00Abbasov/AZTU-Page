<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <title>Document</title>
  </head>

  <body>
    <header>
      <div class="header">
        <div class="container">
          <div class="flex">
            <div class="logo">
              <img src="./assets/images/logo.png" alt="" />
            </div>
            <input type="checkbox" id="nav-check" />
            <div class="nav-btn">
              <label for="nav-check">
                <span></span>
                <span></span>
                <span></span>
              </label>
            </div>
            <div class="nav">
              <nav>
                <ul>
                  <ul>
                    <li class="haqqimizda">
                      <a href="./index.html">Haqqımızda</a>
                      <div class="dropdownNavHaqqimizda">
                        <ul>
                          <li>
                            <div class="navigate">
                              <div>
                                <a href="./unitarixi.html">Universitetin tarixi</a>
                                <a href="./fexri-doktorlarimiz.html">Fəxri doktorlarımız</a>
                                <a href="./fexri-mezunlarimiz.html">Fəxri məzunlarımız</a>
                                <a href="./qehremanlarimiz.html">Qəhrəmanlarımız</a>
                                <a href="./strategiya.html">Strategiya</a>
                              </div>
                              <div>
                                <a href="./Rektor.html">Rektor</a>
                                <a href="./Prorektorlar.html">Prorektorlar</a>
                                <a href="./sabiq rektorlar.html">Sabiq rektorlarımız</a>
                                <a href="./suralar.html">Şuralar</a>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="education">
                      <a href="#">Təhsil</a>
                      <div class="dropdownNavEdu">
                        <ul>
                          <li>
                            <div class="navigate">
                              <div>
                                <a href="./education.html">Tədris hissəsi</a>
                                <a href="#">Fakültələr</a>
                                <a href="./Kafedralar.html">Kafedralar</a>
                                <a href="#">Aztu Beynəlxalq Biznes Məktəbi</a>
                              </div>
                              <div>
                                <a href="./Yüksək Təhsil İnstitutu.html">Yüksək Təhsil İnstitutu</a>
                                <a href="./Kolleclər.html">Kolleclər</a>
                                <a href="./Abituriyent.html">Abituriyentlər</a>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="teqdiqat">
                      <a href="./research.html">Tədqiqat</a>
                      <div class="dropdownNavTeqdiqat">
                        <ul>
                          <li>
                            <div class="navigate">
                              <div>
                                <a href="#">Institutlar</a>
                                <a href="./research.html">Tələbə Elmi Cəmiyyəti</a>
                                <a href="#">CDIO</a>
                                <a href="#">Konfranslar</a>
                              </div>
                              <div>
                                <a href="#">Elmi əsərlər jurnalı</a>
                                <a href="#">Machine Science Journal</a>
                                <a href="#">Tədqiqat və inkişaf şöbəsi</a>
                                <a href="#">Elmi-innovasiya Strategiyası</a>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li class="sosial">
                      <a href="./socialactivities.html">Sosial fəaliyyətlər</a>
                      <div class="dropdownNavSosial">
                        <ul>
                          <li>
                            <div class="navigate">
                              <div>
                                <a href="#">Həmkarlar İttifaqı Komitəsi</a>
                                <a href="#">Aztu Radio</a>
                                <a href="#">Aztu idman klubu</a>
                              </div>
                              <div>
                                <a href="#">THİK</a>
                                <a href="#">TGT</a>
                                <a href="#">Tələbə-rektor</a>
                              </div>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li><a href="./contact.html">Əlaqə</a></li>
                    <li><a href="./AdminPanel/signin.php">KOICA</a></li>
                    <li><a href="./Xəbərlər.html">Xəbərlər</a></li>
                  </ul>
                </ul>
              </nav>
            </div>
          </div>
        </div>
        <div class="aztuText">
          <div class="center">
            <h1 >Azərbaycan Texniki Universitetinə xoş gəlmisiniz!</h1>
          </div>
        </div>
      </div>
      <div class="bg">
        <div id="carousel">
          <img class="slide" src="./assets/images/aztu.jpg" />
          <img class="slide" src="./assets/images/aztu1.jpg" />

          <button id="prev-button"><</button>
          <button id="next-button">></button>
        </div>
      </div>
    </header>
  <br>
    <div class="hero">
      <video autoplay loop muted plays-inline class="vid1">
        <source
          src="./assets/images/AzTU-nun tanıtım videoçarxı - promo.mp4"
          type="video/mp4"
        />
      </video>
    </div>
    <main>
      <section class="service-box">
        <div class="container text-center">
          <div class="row">
            <div class="col service">
              <a href="#">
                <img
                  src="	https://www.aztu.edu.az/assets/dist/img/f_panel/k.svg"
                  alt=""
                />
              </a>
              <h4>Kitabxana</h4>
            </div>
            <div class="col service">
              <a href="./Fakulteler.html">
                <img
                  src="https://www.aztu.edu.az/assets/dist/img/f_panel/f.svg"
                  alt=""
                />
              </a>
              <h4>Fakültələr</h4>
            </div>
            <div class="col service">
              <a href="#"
                ><img
                  src="	https://www.aztu.edu.az/assets/dist/img/f_panel/t.svg"
                  alt=""
                />
              </a>
              <h4>Əcnəbi tələbələr</h4>
            </div>
            <div class="col service">
              <a href="#">
                <img
                  src="	https://www.aztu.edu.az/assets/dist/img/f_panel/oi.svg"
                  alt=""
                />
              </a>
              <h4>Onlayn imtahan</h4>
            </div>
            <div class="col service">
              <a href="./apelasiya.html">
                <img
                  src="	https://www.aztu.edu.az/assets/dist/img/f_panel/oa.svg"
                  alt=""
                />
              </a>
              <h4>Onlayn Apellyasiya</h4>
            </div>
            <div class="col service">
              <a href="#">
                <img
                  src="	https://www.aztu.edu.az/assets/dist/img/f_panel/d.svg"
                  alt=""
                />
              </a>
              <h4>Distant təhsil</h4>
            </div>
          </div>
        </div>
      </section>
      <section class="heyderaliyevyear">
        <div class="container">
          <div class="row">
            <div class="col text">
              <h4>Heydər Əliyev ili - 2023</h4>
            </div>
            <div class="col image">
              <img
                src="https://www.aztu.edu.az/web_admin/upload/files/aztu.edu.az/menus/sekil.png"
                alt=""
              />
            </div>
          </div>
        </div>
      </section>

      <section class="project">
        <div class="container">
          <h4>Layihələr</h4>
          <div class="row">
            <div class="col card-sec">
              <a href="">
                <div class="card">
                  <img
                    src="	https://www.aztu.edu.az/web_admin/upload/files/aztu.edu.az/projects/9-2022/sabah-qruplari.jpg"
                    class="card-img-top"
                    alt=""
                  />
                  <div class="card-body">
                    <h5 class="card-title">Sabah qrupları layihəsi...</h5>
                    <p class="card-text">
                      Niyə SABAH? Sürətlə inkişaf edən iqtisadiy..
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col card-sec">
              <a href="">
                <div class="card">
                  <img
                    src="https://www.aztu.edu.az/web_admin/upload/files/aztu.edu.az/projects/9-2022/creng.jpg"
                    class="card-img-top"
                    alt=""
                  />
                  <div class="card-body">
                    <h5 class="card-title">
                      CRENG “Crisis and Risks Engine...
                    </h5>
                    <p class="card-text">
                      Project goalsTo support the development of Crisis ..
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col card-sec">
              <a href="">
                <div class="card">
                  <img
                    src="https://www.aztu.edu.az/web_admin/upload/files/aztu.edu.az/projects/9-2022/ASIIN.jpg"
                    class="card-img-top"
                    alt=""
                  />
                  <div class="card-body">
                    <h5 class="card-title">
                      Akkreditasiya olunmuş ixtisasl...
                    </h5>
                    <p class="card-text">
                      Dokumente der akkreditierten Bachelor - und Master..
                    </p>
                  </div>
                </div>
              </a>
            </div>
            <div class="col card-sec">
              <a href="">
                <div class="card">
                  <img
                    src="https://www.aztu.edu.az/web_admin/upload/files/aztu.edu.az/projects/9-2022/Movlana-Mubadile-Proqrami.jpg"
                    class="card-img-top"
                    alt=""
                  />
                  <div class="card-body">
                    <h5 class="card-title">Mövlana Mübadilə Proqramı...</h5>
                    <p class="card-text">
                      Mövlana Mübadilə Proqramı (Mevlana Değiş.. )
                    </p>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="signoffooter">
        <div class="container">
          <hr />
          <div class="row sign">
            <div class="col-6 col-xl-3 col-lg-12 col-md-6 col-sm-6">
              <a href="https://president.az/">
                <img
                  src="https://www.aztu.edu.az/assets/dist/img/gov_links/president.png"
                  alt=""
                />
              </a>
            </div>
            <div class="col-6 col-xl-3 col-lg-12 col-md-6 col-sm-6">
              <a href="https://heydar-aliyev-foundation.org/az">
                <img
                  src="	https://www.aztu.edu.az/assets/dist/img/gov_links/heydar-aliyev-foundation.png"
                  alt=""
                />
              </a>
            </div>
            <div class="col-6 col-xl-3 col-lg-12 col-md-6 col-sm-6">
              <a href="https://mehriban-aliyeva.az/">
                <img
                  src="	https://www.aztu.edu.az/assets/dist/img/gov_links/first_lady.png"
                  alt=""
                />
              </a>
            </div>
            <div class="col-6 col-xl-3 col-lg-12 col-md-6 col-sm-6">
              <a href="https://www.virtualkarabakh.az/">
                <img
                  src="https://www.aztu.edu.az/assets/dist/img/gov_links/virtual_qarabaq.png"
                  alt=""
                />
              </a>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 text-left">
              <img
                src="	https://www.aztu.edu.az/web_admin/upload/files/aztu.edu.az/sitesettings/5-2022/logo.png"
                alt=""
              />
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 social">
              <ul class="social-medias">
                <li>
                  <a href="https://twitter.com/aztueduaz"><i class="fa-brands fa-twitter fa-2x"></i></a>
                </li>
                <li>
                  <a href="https://www.instagram.com/aztueduaz"><i class="fa-brands fa-instagram fa-2x"></i></a>
                </li>
                <li>
                  <a href="https://www.youtube.com/channel/UCu_PoZ-9DKNYs3hxuK9pW1Q"><i class="fa-brands fa-youtube fa-2x"></i></a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/authwall?trk=qf&original_referer=http://aztu.edu.az/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fschool%2Faztueduaz%2F"><i class="fa-brands fa-linkedin fa-2x"></i></a>
                </li>
                <li>
                  <a href="https://www.facebook.com/aztu1950.official/"><i class="fa-brands fa-facebook fa-2x"></i></a>
                </li>
                <li>
                  <a href="https://t.me/aztu_edu_az"><i class="fa-brands fa-telegram fa-2x"></i></a>
                </li>
              </ul>
              <p>
                H.Cavid prospekti 25, Bakı, Azərbaycan AZ 1073 Azərbaycan
                Texniki Universiteti.
              </p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 contact">
              <p>Tel: (+994 12) 538-33-83</p>
              <p>Qaynar xətt: (+994 12) 539-13-05</p>
              <p>E-poçt: aztu@aztu.edu.az</p>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p>
          Copyright &copy; 2022 Azərbaycan Texniki Universiteti. Bütün hüquqlar
          qorunur.
        </p>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/js/script.js"></script>
  </body>
</html>
