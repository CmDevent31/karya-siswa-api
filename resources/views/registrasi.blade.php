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


    
        <title>Registre</title>
        <link rel="stylesheet" href="style.css">


    <body>
        <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="/Home" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
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
            <a href="" class="btn btn-danger py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->
        <div class="container"style="border-radius: 30px 30px 30px 30px;">
         <h1>Register</h1>
            <form>
                <label>Username</label>
                <br>
                <input type="text">
                <br>
                <label>Email</label>
                <br>
                <input type="text">
                <br>
                <label>Password</label>
                <br>
                <input type="password">
                <br>
                <button>Register</button>
                <p> Sudah punya akun?
                  <a href="/Login">Login di sini</a>
                </p>
                
                <style>
                    *{
    margin: 0;
    padding: 0;
    outline: 0;
    font-family: 'Open Sans', sans-serif;
}
body{
    height: 100vh;
    background-image: url(data:image/jpeg;base64,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);
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
p {
  color: rgb(240, 225, 225);
  font-family: 'Open Sans', sans-serif;
  padding-top: 8px;
}

h1 {
  text-align: center;
  padding-left: 75px;
  padding-bottom: 15px;
}

a {
  color: white;
  font-family: 'Open Sans', sans-serif;
}
.container{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    padding: 20px 20px;
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
    padding: 6px 10px;
    margin-bottom: 10px;
    border: none;
    background-color: transparent;
    border-bottom: 2px solid #6b6868;
    color: #fff;
    font-size: 20px;
}
.container form button{
    width: 100%;
    height: 30px;
    padding: 5px 0;
    border: none;
    background-color:#d13d3d;
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
