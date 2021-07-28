<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
		
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Prueba</title>
        <!-- Fonts -->
		<link rel="shortcut icon" href="{{{ asset('../../../../public/images/logo.png') }}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:1rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:52rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}}
        </style>

		<style>
			html {
				font-family: "Poppins", sans-serif;
			background-color: #56baed;
			height: 100vh;
			}

			body {
			font-family: "Poppins", sans-serif;
			height: 100vh;
			}

			a {
			color: #92badd;
			display:inline-block;
			text-decoration: none;
			font-weight: 400;
			}

			h2 {
			text-align: center;
			font-size: 16px;
			font-weight: 600;
			text-transform: uppercase;
			display:inline-block;
			margin: 40px 8px 10px 8px;
			color: #cccccc;
			}

			.wrapper {
			display: flex;
			align-items: center;
			flex-direction: column;
			justify-content: center;
			width: 100%;
			min-height: 100%;
			padding: 20px;
			}

			#formContent {
			-webkit-border-radius: 10px 10px 10px 10px;
			border-radius: 10px 10px 10px 10px;
			background: #fff;
			padding: 30px;
			width: 90%;
			max-width: 450px;
			position: relative;
			padding: 0px;
			-webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
			box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
			text-align: center;
			}

			#formFooter {
			background-color: #f6f6f6;
			border-top: 1px solid #dce8f1;
			padding: 25px;
			text-align: center;
			-webkit-border-radius: 0 0 10px 10px;
			border-radius: 0 0 10px 10px;
			}

			h2.inactive {
			color: #cccccc;
			}

			h2.active {
			color: #0d0d0d;
			border-bottom: 2px solid #5fbae9;
			}

			input[type=button], input[type=submit], input[type=reset]  {
			background-color: #56baed;
			border: none;
			color: white;
			padding: 15px 80px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			text-transform: uppercase;
			font-size: 13px;
			-webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
			box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
			-webkit-border-radius: 5px 5px 5px 5px;
			border-radius: 5px 5px 5px 5px;
			margin: 5px 20px 40px 20px;
			-webkit-transition: all 0.3s ease-in-out;
			-moz-transition: all 0.3s ease-in-out;
			-ms-transition: all 0.3s ease-in-out;
			-o-transition: all 0.3s ease-in-out;
			transition: all 0.3s ease-in-out;
			}

			input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
			background-color: #39ace7;
			}

			input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
			-moz-transform: scale(0.95);
			-webkit-transform: scale(0.95);
			-o-transform: scale(0.95);
			-ms-transform: scale(0.95);
			transform: scale(0.95);
			}

			input[type=text] {
			background-color: #f6f6f6;
			border: none;
			color: #0d0d0d;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 5px;
			width: 85%;
			border: 2px solid #f6f6f6;
			-webkit-transition: all 0.5s ease-in-out;
			-moz-transition: all 0.5s ease-in-out;
			-ms-transition: all 0.5s ease-in-out;
			-o-transition: all 0.5s ease-in-out;
			transition: all 0.5s ease-in-out;
			-webkit-border-radius: 5px 5px 5px 5px;
			border-radius: 5px 5px 5px 5px;
			}

			input[type=text]:focus {
			background-color: #fff;
			border-bottom: 2px solid #5fbae9;
			}

			input[type=text]:placeholder {
			color: #cccccc;
			}

			.fadeInDown {
			-webkit-animation-name: fadeInDown;
			animation-name: fadeInDown;
			-webkit-animation-duration: 1s;
			animation-duration: 1s;
			-webkit-animation-fill-mode: both;
			animation-fill-mode: both;
			}

			@-webkit-keyframes fadeInDown {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0);
			}
			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none;
			}
			}

			@keyframes fadeInDown {
			0% {
				opacity: 0;
				-webkit-transform: translate3d(0, -100%, 0);
				transform: translate3d(0, -100%, 0);
			}
			100% {
				opacity: 1;
				-webkit-transform: none;
				transform: none;
			}
			}

			@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
			@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
			@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

			.fadeIn {
			opacity:0;
			-webkit-animation:fadeIn ease-in 1;
			-moz-animation:fadeIn ease-in 1;
			animation:fadeIn ease-in 1;

			-webkit-animation-fill-mode:forwards;
			-moz-animation-fill-mode:forwards;
			animation-fill-mode:forwards;

			-webkit-animation-duration:1s;
			-moz-animation-duration:1s;
			animation-duration:1s;
			}

			.fadeIn.first {
			-webkit-animation-delay: 0.4s;
			-moz-animation-delay: 0.4s;
			animation-delay: 0.4s;
			}

			.fadeIn.second {
			-webkit-animation-delay: 0.6s;
			-moz-animation-delay: 0.6s;
			animation-delay: 0.6s;
			}

			.fadeIn.third {
			-webkit-animation-delay: 0.8s;
			-moz-animation-delay: 0.8s;
			animation-delay: 0.8s;
			}

			.fadeIn.fourth {
			-webkit-animation-delay: 1s;
			-moz-animation-delay: 1s;
			animation-delay: 1s;
			}

			.underlineHover:after {
			display: block;
			left: 0;
			bottom: -10px;
			width: 0;
			height: 2px;
			background-color: #56baed;
			content: "";
			transition: width 0.2s;
			}

			.underlineHover:hover {
			color: #0d0d0d;
			}

			.underlineHover:hover:after{
			width: 100%;
			}


			*:focus {
				outline: none;
			}

			#icon {
			width:50%;
			}

		</style>

		
		<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
  				<div class="toast" style="position: absolute; top: 0; right: 0;" data-delay="3000">
    				<div class="toast-header" >
      					<img src="https://image.flaticon.com/icons/png/512/745/745419.png" style="width: 20px;" class="rounded mr-2" alt="aviso">
      					<strong class="mr-auto">Aviso</strong>
						<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
    				</div>
					<div class="toast-body">
					El usuario o la contraseña son inconrrectos
					</div>
        		</div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                	<div class="grid grid-cols-1 md:grid-cols-2">
                    	<div class="wrapper fadeInDown">
                            <div id="formContent">
                                <div class="fadeIn first" >
									</br></br>
                                 	<img src="https://image.flaticon.com/icons/png/512/2412/2412859.png" id="icon" alt="genesis empresarial" />
                                 	</br></br></br>
                                </div>
                                <input type="text" id="user" class="fadeIn second" name="user" placeholder="usuario">
                                <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
                                </br></br></br></br>
                                <button type="button" id="aceptar" class="btn btn-primary" >Aceptar</button>
                                </br></br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">  </a>
                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline"></a>
                        </div>
                    </div>
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Plataforma Prueba Tecnica (v1.0.0)
                    </div>
                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        	$(document).ready(function(){
            	$("#aceptar").click(function () {
					let user=$("#user").val();
					let password=$("#password").val();
              		if(user === "genesis.empresarial" && password ==="1234"){
                		window.location = "/home"
              		}else{
                		$('.toast').toast('show')
             		};
            	});
          	});
        </script>
    </body>
</html>
