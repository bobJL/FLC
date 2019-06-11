<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
        <style>
            
           
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                margin-top: 100px;
                
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 10px 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .evenementen{

            }
            .event{
                border: 1px solid black;
                margin: 100px 50px 50px 50px;
            }
            .eventname{

            }
            .header{
              border:1px solid white;
              height: 100px;
              background-color:#f0f0f5;  
            }
            .nav{
                float:right;
                width:100%;
                font-size:2em;
                
            }
            

        </style>
    </head>
    <body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
    <div class="container">
        <div class="same"> 
        <h3 class=""> FCL evenement planner</h3>
        <ul class="nav nav-tabs nav-tabs-dark">
            <li class="nav-item-dark">
                 <a class="nav-link  alert-link" href="home">evenement pagina</a>
            </li>
             <li class="nav-item-dark">
                  <a class="nav-link alert-link" href="login">login</a>
             </li>
             <li class="nav-item">
                  <a class="nav-link active alert-link" href="beheer">beheer pagina</a>
             </li>
             <li class="nav-item">
                  <a class="nav-link alert-link" href="#">link</a>
             </li>
        </ul>
		<span class="line"></span>
    </nav>
        </div>
</header>
 

        
                 <!-- Page Content -->
  <div class="container" style="padding-top: 150px;">

        <div class="row">
     

        </div>
  </div>
  <!-- footer-->
  <footer class="py-5 bg-dark" style="margin-top:300px;">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy;FCL 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    </body>
</html>