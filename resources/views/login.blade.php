<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
    <title>PrimaSeru</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
        <title>Login</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>

        <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->
<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="/KaryaSiswa" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h2 class="m-0 text-danger"><i class="fas fa-users me-3"></i>KaryaSiswa</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/Home" class="nav-item nav-link active">Home</a>
            <a href="/TentangKami" class="nav-item nav-link">TentangKami</a>
            <a href="/Pembelajaran" class="nav-item nav-link">Pembelajaran</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">List</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="/TimKami" class="dropdown-item">TimKami</a>
                    <a href="/Testimoni" class="dropdown-item">Testimoni</a>
                    <a href="/PageNotFound" class="dropdown-item">PageNotFound</a>
                </div>
            </div>
            <a href="/Kontak" class="nav-item nav-link">Kontak</a>
        </div>
        <a href="/Login" class="btn btn-danger py-4 px-lg-5 d-none d-lg-block"class="nav-item nav-link active">Login<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>
<!-- Navbar End -->

    
       
        <div class="container"style="border-radius: 30px 30px 30px 30px;">
          <h1>Login</h1>
            <form>
                <label>Username</label><br>
                <input type="text"><br>
                <label>Password</label><br>
                <input type="password"><br>
                <button>Log in</button>
                <p> Belum punya akun?
                  <a href="/Registrasi">Register di sini</a>
                </p>
                
                <style>


body{
    height: 100vh;
    background-image: url(https://img.freepik.com/premium-vector/abstract-white-bg-02-edit_7505-1800.jpg);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
p {
  color: rgb(165, 165, 165);
  font-family: 'Open Sans', sans-serif;
  padding-top: 10px;
}

h1 {
  text-align: center;
  padding-left: 100px;
  padding-bottom: 20px;
}

a {
  color: rgb(235, 235, 235);
  font-family: 'Open Sans', sans-serif;
}
.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 25px;
    width: 300px;

    background-color: rgba(0,0,0,.7);
    box-shadow: 0 0 10px rgba(255,255,255,.3);
}
.container h1{
    text-align: left;
    color: #fafafa;
    margin-bottom: 30px;
    text-transform: uppercase;
    border-bottom: 4px solid #535353;
}
.container label{
    text-align: left;
    color: #e8ebec;
}
.container form input{
    width: calc(100% - 20px);
    padding: 8px 10px;
    margin-bottom: 15px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #6b6868;
    color: #fff;
    font-size: 20px;
}
.container form button{
    width: 100%;
    height: 40px;
    padding: 5px 0;
    border: none;
    background-color:#c94b4b;
    font-size: 18px;
    color: #fafafa;
    border-radius: 20px;
}
</style>
            </form>
        </div>

        
        <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </body>
</html>
