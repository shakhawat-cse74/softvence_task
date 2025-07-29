<!doctype html>
<html lang="en" dir="ltr"> 
	
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>

		@include('admin.includes.meta');
        <!-- TITLE -->
		<title>Softvence Task</title>

       @include('admin.includes.style');

    </head>

    <body class="ltr app sidebar-mini">

     

        <!-- PAGE -->
		<div class="page">
			<div class="page-main">

               @include('admin.includes.header');

               @include('admin.includes.sidebar');

                <!--app-content open-->
                <div class="app-content main-content mt-0">
                    <div class="side-app">

                        <!-- CONTAINER -->
                        <div class="main-container container-fluid">

                                
                          @yield('body')

                          

                            
                        </div>
                    </div>
                </div>
                    <!-- CONTAINER CLOSED -->
             </div>

 

        
           @include('admin.includes.footer');

        @include('admin.includes.script');

    </body>


</html>
