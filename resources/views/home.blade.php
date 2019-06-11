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
                 <a class="nav-link active alert-link" href="home">evenement pagina</a>
            </li>
             <li class="nav-item-dark">
                  <a class="nav-link alert-link" href="login">login</a>
             </li>
             <li class="nav-item">
                  <a class="nav-link alert-link" href="beheer">beheer pagina</a>
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
  <div class="container" style="padding-top: 50px;">

<div class="row">

  <!-- Blog Entries Column -->
  <div class="col-md-8">

    <h1 class="my-4">Toekomstige evenementen
      <small>alle nodige informatie</small>
    </h1>

    <!-- Blog Post -->
    <div class="card mb-4">
      <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">evenement naam</h2>
        <p class="card-text "style="font-size:2em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
        <a href="#" class="btn btn-primary">lees meer &rarr;</a>
      </div>
      <div class="card-footer ">
          <b>  vind plaats op Januari 2020 </b>
      </div>
    </div>

    <!-- Blog Post -->
    <div class="card mb-4">
      <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">evenement naam</h2>
        <p class="card-text"style="font-size:2em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
        <a href="#" class="btn btn-primary">lees meer &rarr;</a>
      </div>
      <div class="card-footer text-bold">
          <b>  vind plaats op Januari 2020 </b>
      </div>
    </div>

    <!-- Blog Post -->
    <div class="card mb-4">
      <img class="card-img-top" src="http://placehold.it/750x300" alt="Card image cap">
      <div class="card-body">
        <h2 class="card-title">evenement naam</h2>
        <p class="card-text"style="font-size:2em;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
        <a href="#" class="btn btn-primary">lees meer &rarr;</a>
      </div>
      <div class="card-footer text-bold">
           <b> vind plaats op Januari 2020 </b>
      </div>
    </div>

    <!-- Pagination 
    <ul class="pagination justify-content-center mb-4">
      <li class="page-item">
        <a class="page-link" href="#">&larr; Older</a>
      </li>
      <li class="page-item disabled">
        <a class="page-link" href="#">Newer &rarr;</a>
      </li>
    </ul>
-->
  </div>

  <!-- Sidebar Widgets Column -->
  <div class="col-md-4" style="padding-top:93px;">

    <!-- Search Widget -->
    <div class="card my-4">
      <h5 class="card-header">Search</h5>
      <div class="card-body">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for...">
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="button">Go!</button>
          </span>
        </div>
      </div>
    </div>

                </div>

               
           
        </div>
        <footer class="py-5 bg-dark">
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
