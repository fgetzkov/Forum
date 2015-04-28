<!DOCTYPE html>
<html>
   <head>
      <title>Forum</title>
      <base href="http://localhost/Forum/">
      <link rel="stylesheet" type="text/css" href="content/bootstrap.css">
      <script src="content/jquery-2.1.3.min.js"></script>
   </head>
   <body>
      <div class="navbar navbar-default navbar-fixed-top">
         <div class="container">
            <div class="navbar-header">
               <a href="" class="navbar-brand">My Forum</a>
               <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
            </div>
            <div class="navbar-collapse collapse" id="navbar-main">
               <ul class="nav navbar-nav">
                  <li class="dropdown">
                     <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Caterory <span class="caret"></span></a>
                     <ul class="dropdown-menu" aria-labelledby="themes">
                        <li><a href="../default/">Default</a></li>
                        <li class="divider"></li>
                        <li><a href="../cerulean/">Cerulean</a></li>
                        <li><a href="../cosmo/">Cosmo</a></li>
                        <li><a href="../cyborg/">Cyborg</a></li>
                        <li><a href="../darkly/">Darkly</a></li>
                        <li><a href="../flatly/">Flatly</a></li>
                        <li><a href="../journal/">Journal</a></li>
                        <li><a href="../lumen/">Lumen</a></li>
                        <li><a href="../paper/">Paper</a></li>
                        <li><a href="../readable/">Readable</a></li>
                        <li><a href="../sandstone/">Sandstone</a></li>
                        <li><a href="../simplex/">Simplex</a></li>
                        <li><a href="../slate/">Slate</a></li>
                        <li><a href="../spacelab/">Spacelab</a></li>
                        <li><a href="../superhero/">Superhero</a></li>
                        <li><a href="../united/">United</a></li>
                        <li><a href="../yeti/">Yeti</a></li>
                     </ul>
                  </li>
                  <li>
                     <a href="../help/">Help</a>
                  </li>
                  <li>
                     <a href="../about/">About</a>
                  </li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="user/login" >Login</a></li>
                  <li id="registrationForm"><a href="user/register">Registration</a></li>
               </ul>
            </div>
         </div>
      </div>
