<div class="site_wrapper" ng-controller="DashboardController">

<div class="clearfix"></div>

<header class="header innerpages">
 
    <div class="container">
    
    <!-- Logo -->
    <div class="logo"><a href="index.html" id="logo"></a></div>
        
    <!-- Navigation Menu -->
    <nav class="menu_main">
        
    <div class="navbar yamm navbar-default">
    
	    <div class="container">
	    	
	      <div class="navbar-header">
	        <div class="navbar-toggle .navbar-collapse .pull-right " data-toggle="collapse" data-target="#navbar-collapse-1"  > <span>Menu</span>
	          <button type="button" > <i class="fa fa-bars"></i></button>
	        </div>
	      </div>
	      
	      <div id="navbar-collapse-1" class="navbar-collapse collapse pull-right">
	      
	        <ul class="nav navbar-nav"> 
		        <li><a ng-click="go('Dashboard','/ci22/adminpanel_controller')" title="Home" class="">Dashboard</a><li>
		        <li><a ng-click="go('Categorias','/ci22/categorias_controller')" title="Categorias" class="">Categorias</a><li>
		        <li><a ng-click="go('Idiomas','/ci22/idiomas_controller')" title="Idiomas" class="">Idiomas</a><li>
		        <li><a ng-click="go('Contenidos','/ci22/contenidos_controller')" title="Contenidos" class="">Contenidos</a><li>
		    	<li><a href="#" title="Usuarios" class="">Usuarios</a><li> 
	        </ul>
	        
	      </div>
	  	</div>
	  	
 	</div>
     
    </nav><!-- end Navigation Menu -->
    
    <div class="menu_right"><a href="#" class="buynow">Perfil</a></div>    
    
    </div>

</header>

<div class="clearfix"></div>

<!-- <div class="menu_shadow">dhf</div> -->

<div class="clearfix margin_top10"></div>

<div class="page_title2">
<div class="container">    
    <h1>{{this.titulo}}</h1>
    <div class="pagenation">&nbsp;<a href="/ci22/adminpanel_controller">Admin Dashboard</a> <i>/</i> <a href="#">{{this.titulo}}</a></div>
     
</div>
</div>
<!-- end page title -->
<div class="clearfix"></div>