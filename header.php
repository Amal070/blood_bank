<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />


    <!-- website font  -->
    <link rel="stylesheet" href="home/css/fontawesome.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="home/css/bootstrapcdn.css" />
    <link rel="stylesheet" href="home/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="home/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="home/css/style.css" />

    <title>Blood Bank</title>
</head>

<body>


    <!-- Navbar 2 Start -->
    <section id="Nav2">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="home/imgs/logo.png" width="18%"></img>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link selected" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About-us.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#search_box">Donor search</a>
                    </li>
                </ul>
                <button class="btn signup" onclick= "window.location.href = 'admin_login/admin_login.php';">Admin login</button>
                <button class="btn login" onclick= "window.location.href = 'reg_form/registration.html';">Register</button>
            </div>
        </nav>
    </section>
    <!-- Navbar 2 End -->



    
    <!-- Requests Start -->
    <section id="requests">
        <div class="title">
            <h2>Donors</h2>
            <hr class="line">
        </div>


        <div class="container" id="search_box">

        <form action="search2.php" method="post" style="margin-top: 50px;margin-bottom: 50px;">   
                <div class="row">


                    <div class="col-lg-5">
                        <select name="blood_group" id="Blood group">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                           </select>
                    </div>
                    <div class="col-lg-5">
                        <select name="district" class="form-control">
                            <option value="thiruvananthapuram">Thiruvananthapuram</option>
                            <option value="kollam">Kollam</option>
                            <option value="pathanamthitta">Pathanamthitta</option>
                            <option value="alappuzha">Alappuzha</option>
                            <option value="kottayam">Kottayam</option>
                            <option value="idukki">Idukki</option>
                            <option value="ernakulam">Ernakulam</option>
                            <option value="thrissur">Thrissur</option>
                            <option value="palakkad">Palakkad</option>
                            <option value="malappuram">Malappuram</option>
                            <option value="kozhikode">Kozhikode</option>
                            <option value="wayanad">Wayanad</option>
                            <option value="kannur">Kannur</option>
                            <option value="kasaragod">Kasaragod</option>
                          </select>
                    </div>
                    <div class="search" >
                        <button style="width: auto; background-color: rgb(173, 191, 250);" name="submit" type="submit">search</button>
                    </div>
                </div>
            </form> 