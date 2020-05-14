<!DOCTYPE html>

<html>
	<head>
		<title>PPGED - Pograma de Pós Graduação em Educação</title>
		<meta name="viewport" content="width=device-width">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<!-- CSS -->
		<?php
		echo link_tag('css/style.css');
		echo link_tag('css/style_menu.css');
		echo link_tag('css/main.css');
		echo link_tag('css/font-awesome.css');
		echo link_tag('css/bootstrap3.4.css');
		echo link_tag('fontawesome/css/all.css');
		echo link_tag('css/modal.css');
		?>

		<style type="text/css" media="all">
			#barra-brasil div,
			#barra-brasil a,
			#barra-brasil ul,
			#barra-brasil li {
				margin: 0;
				padding: 0;
				font-size: 100%;
				font-family: inherit;
				vertical-align: baseline;
				border: none
			}

			#barra-brasil ul {
				list-style: none
			}

			@font-face {
				font-family: "Open Sans";
				font-style: normal;
				font-weight: 700;
				font-display: swap;
				src: local("Open Sans Bold"), local("OpenSans-Bold"), url("//barra.brasil.gov.br/static/opensans-bold.woff") format("woff")
			}

			#barra-brasil {
				height: 32px;
				background: #f1f1f1;
				font-weight: bold;
				font-size: 12px;
				line-height: 32px;
				font-family: "Open Sans", Arial, Helvetica, sans-serif;
				border-bottom: 1px solid #dfdfdf;
				box-sizing: content-box
			}

			#barra-brasil a {
				text-decoration: none
			}

			body.contraste #barra-brasil,
			body.contraste .link-vlibras {
				background: #000 !important
			}

			body.contraste #barra-brasil .link-barra,
			body.contraste #barra-brasil .link-vlibras {
				color: #FF0 !important;
				text-decoration: underline
			}

			div#wrapper-barra-brasil {
				position: relative;
				margin: 0 auto;
				width: 100%;
				max-width: 960px;
				height: 100%
			}

			#barra-brasil .brasil-flag {
				float: left;
				padding: 7px 0 6px;
				width: 115px;
				border-right: 2px solid #dfdfdf
			}

			#barra-brasil .brasil-flag .link-barra {
				display: block;
				padding-left: 42px;
				width: 43px;
				background: url("data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2226%22%20height%3D%2219%22%20viewBox%3D%220%200%201000%20700%22%3E%3Cpath%20fill%3D%22%2300923F%22%20d%3D%22M0%200h1000v700H0z%22%2F%3E%3Cpath%20fill%3D%22%23F8C300%22%20d%3D%22M500%2085L85%20350l415%20265%20415-265L500%2085z%22%2F%3E%3Ccircle%20fill%3D%22%2328166F%22%20cx%3D%22499%22%20cy%3D%22350%22%20r%3D%22174%22%2F%3E%3Cpath%20fill%3D%22%23FFF%22%20d%3D%22M395%20296c103%200%20199%2038%20272%20101%202-8%204-17%205-26-75-61-172-98-277-98-18%200-36%201-53%203-3%208-6%2016-9%2025%2020-3%2041-4%2063-4z%22%2F%3E%3C%2Fsvg%3E") 8px center no-repeat;
				text-transform: uppercase;
				line-height: 19px
			}

			#barra-brasil #brasil-vlibras {
				position: absolute;
				top: 0;
				right: 0
			}

			#barra-brasil #brasil-vlibras .logo-vlibras {
				background: url("data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyOSIgaGVpZ2h0PSIyOSI+PGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTI2Ni4yNTAzOCwtMjMxLjY4NTk0KSI+PHBhdGggZD0ibTI5Mi40IDIzNy44Yy0wLjEgMC0wLjItMC4xLTAuMi0wLjIgMC0xLTEuOC0yLjYtNC4xLTIuNmwtMi41IDAtNC44IDMuNi00LjgtMy42LTIuNSAwYy0yLjQgMC00LjEgMS42LTQuMSAyLjYgMCAwLjEtMC4xIDAuMi0wLjIgMC4yLTAuMSAwLTAuMi0wLjEtMC4yLTAuMiAwLTEuNCAyLjEtMy4xIDQuNi0zLjFsMi40IDAgMC42LTAuNmMwLjEtMC4xIDAuMi0wLjEgMC4zIDBsMy45IDQuNiAzLjktNC42YzAuMS0wLjEgMC4yLTAuMSAwLjMgMGwwLjYgMC42IDIuNCAwYzIuNSAwIDQuNiAxLjcgNC42IDMuMSAwIDAuMS0wLjEgMC4yLTAuMiAwLjJ6bS0zIDEwLjRjLTAuMSAwLjctMC4yIDEtMC4zIDEgMCAwLjEtMC4xIDAuMS0wLjIgMC4xLTAuMSAwLTAuMS0wLjEtMC4xLTAuMiAwIDAgMC4xLTAuMyAwLjItMC45IDAuMS0wLjYtMC4yLTEuMS0wLjItMS4xIDAtMC4xIDAtMC4yIDAuMS0wLjIgMC4xIDAgMC4xIDAgMC4yIDAgMCAwIDAgMCAwIDAuMSAwIDAgMC4zIDAuNiAwLjIgMS4zem0tMSAwLjhjMCAwLjEtMC4xIDAuMS0wLjIgMC4xLTAuMSAwLTAuMS0wLjEtMC4xLTAuMiAwIDAgMC4xLTAuMyAwLjEtMC45IDAtMC42LTAuMy0xLjEtMC4zLTEuMSAwLTAuMSAwLTAuMiAwLjEtMC4yIDAuMSAwIDAuMSAwIDAuMiAwIDAgMCAwIDAgMCAwIDAgMCAwLjMgMC42IDAuMyAxLjMgMCAwLjctMC4xIDEtMC4yIDF6bS0wLjctMC40Yy0wLjMgMS4yLTAuOCAyLjItMC45IDIuNi0wLjIgMC40LTAuMyAwLjktMC4yIDIuMiAwIDEuMyAwIDIuMi0wLjEgMi41IDAgMC4yLTAuMiAwLjMtMC40IDAuMy0wLjIgMC0wLjMtMC4xLTAuNC0wLjQtMC4xLTAuNS0wLjMtMi42LTAuMy0yLjkgMC0wLjItMC4yLTAuNC0wLjMtMC40LTAuMSAwLTAuMiAwLjEtMC4zIDAuNS0wLjIgMC45LTAuNSAzLjEtMC42IDMuNi0wLjEgMC41LTAuMyAwLjYtMC40IDAuNi0wLjEgMC0wLjEgMC0wLjEgMCAwIDAgMCAwIDAgMC0wLjEgMC0wLjQgMC0wLjQtMC40IDAtMC41IDAuNC0zLjUgMC40LTMuOCAwLTAuMiAwLTAuMy0wLjEtMC4zLTAuMSAwLTAuMSAwLjEtMC4yIDAuMi0wLjMgMC40LTEuNyAyLjktMi4xIDMuNy0wLjEgMC4yLTAuMiAwLjItMC40IDAuMi0wLjEgMC0wLjIgMC0wLjMtMC4xLTAuMS0wLjEtMC4zLTAuNC0wLjItMC42IDAuMS0wLjIgMS41LTMuNCAxLjctMy44IDAuMS0wLjMgMC4xLTAuNS0wLjEtMC41LTAuMSAwLTAuMiAwLjEtMC40IDAuMi0wLjUgMC41LTIuNCAyLjUtMi43IDIuNy0wLjEgMC4xLTAuMiAwLjItMC4zIDAuMi0wLjEgMC0wLjItMC4xLTAuMy0wLjItMC4yLTAuMi0wLjItMC40LTAuMS0wLjYgMC4yLTAuMiAyLjYtMy4zIDMtNC4xIDAuNC0wLjcgMS0xLjktMC4yLTEuOS0wLjEgMC0wLjEgMC0wLjIgMC0wLjUgMC0wLjggMC4xLTEuMSAwLjEtMC41IDAtMC43LTAuMS0wLjgtMC4xLTAuMi0wLjEtMC42LTAuMy0wLjUtMC42IDAuMS0wLjIgMC43LTAuMSAxLTAuMiAwLjItMC4xIDAuMi0wLjEgMC4yLTAuMSAwIDAgMS4xLTAuMyAxLjgtMC43IDAuNy0wLjQgMi4zLTEuMSAyLjctMS4xIDAuMiAwIDAuNC0wLjEgMC42LTAuMSAwLjMgMCAwLjYgMCAwLjcgMC4xIDAuMyAwLjEgMC42IDAuOSAyIDEuNSAwIDAgMC42IDAuNiAwLjMgMS44em0tMTEuNyAyLjJjLTAuNC0xLjItMC42LTIuMy0wLjYtMi43LTAuMS0wLjQtMC4zLTAuOS0xLTEuOS0wLjctMS0xLjItMS44LTEuMy0yLjEtMC4xLTAuMiAwLjEtMC41IDAuNC0wLjUgMC4xIDAgMC4yIDAgMC4zIDAuMiAwLjQgMC40IDEuNyAyIDEuOSAyLjIgMC4xIDAuMSAwLjMgMC4yIDAuNCAwLjIgMC4yIDAgMC4yLTAuMSAwLjEtMC42LTAuMy0wLjktMS4zLTIuOS0xLjUtMy4zLTAuMy0wLjcgMC4xLTAuNyAwLjEtMC43IDAgMCAwLjEtMC4xIDAuMi0wLjEgMC4xIDAgMC4yIDAgMC4zIDAuMiAwLjIgMC40IDEuNiAzLjIgMS44IDMuNCAwLjEgMC4xIDAuMiAwLjIgMC4zIDAuMiAwLjEgMCAwLjEtMC4xIDAuMS0wLjMgMC0wLjUtMC4yLTMuMy0wLjMtNC4yIDAtMC4zIDAuMy0wLjUgMC41LTAuNSAwIDAgMCAwIDAgMCAwLjIgMCAwLjQgMC4yIDAuNSAwLjQgMC4xIDAuMiAwLjYgMy43IDAuNyA0LjIgMCAwLjIgMC4yIDAuNCAwLjMgMC40IDAuMSAwIDAuMi0wLjEgMC4zLTAuNCAwLjEtMC43IDAuNy0zLjQgMC43LTMuNyAwLTAuMyAwLjItMC40IDAuNC0wLjQgMCAwIDAuMSAwIDAuMSAwIDAuMiAwIDAuNCAwLjIgMC40IDAuNSAwIDAuMy0wLjMgMy43LTAuMiA0LjgtMC41IDAuMi0xIDAuNC0xLjMgMC40bDAgMCAwIDAtMC4yIDAuMWMwIDAtMC4xIDAtMC4yIDAtMC40IDAtMSAwLTEuMyAwLjYtMC4xIDAuMy0wLjIgMC42LTAuMSAwLjggMC4yIDAuNSAwLjggMC44IDAuOSAwLjkgMCAwIDAgMCAwIDAgMC4yIDAuMSAwLjUgMC4yIDEuMSAwLjIgMC4zIDAgMC42IDAgMS4xLTAuMS0wLjEgMC4yLTAuMiAwLjQtMC4zIDAuNmwtMC4xIDAuMWMtMC4yIDAuMy0wLjggMS4yLTEuOCAyLjUtMC4yIDAtMC4zIDAtMC41IDAtMC4zIDAtMC42IDAtMC45IDAuMSAwIDAtMC44LTAuMS0xLjMtMS4zem0wLjggMi4yYzAgMC4xLTAuMSAwLjEtMC4yIDAuMSAwIDAgMCAwLTAuMSAwIDAgMC0wLjYtMC4yLTEtMC44LTAuNC0wLjYtMC41LTAuOS0wLjUtMC45IDAtMC4xIDAtMC4yIDAuMS0wLjIgMC4xIDAgMC4yIDAgMC4yIDAuMSAwIDAgMC4xIDAuMyAwLjQgMC44IDAuNCAwLjUgMC45IDAuNyAwLjkgMC43IDAuMSAwIDAuMSAwLjEgMC4xIDAuMnptLTAuOSAwLjRjMCAwLjEtMC4xIDAuMS0wLjEgMC4xIDAgMC0wLjEgMC0wLjEgMCAwIDAtMC42LTAuMy0wLjktMC45LTAuNC0wLjYtMC40LTAuOS0wLjQtMSAwLTAuMSAwLjEtMC4yIDAuMS0wLjIgMC4xIDAgMC4yIDAuMSAwLjIgMC4xIDAgMCAwIDAuMyAwLjQgMC44IDAuMyAwLjUgMC44IDAuOCAwLjggMC44IDAuMSAwIDAuMSAwLjEgMC4xIDAuMnptMTQuOS0yMS44LTIwLjIgMGMtMi40IDAtNC40IDItNC40IDQuNGwwIDIwLjJjMCAyLjQgMiA0LjQgNC40IDQuNGwyMC4yIDBjMi40IDAgNC40LTIgNC40LTQuNGwwLTIwLjJjMC0yLjQtMi00LjQtNC40LTQuNCIgZmlsbD0iIzFjNGY5YyIvPjwvZz48L3N2Zz4K") 8px center no-repeat;
				position: absolute;
				top: 0;
				right: 0;
				width: 43px;
				height: 32px;
				display: block
			}

			#barra-brasil #brasil-vlibras .link-vlibras {
				height: 0;
				top: 32px;
				transition: 0.1s;
				width: 166px !important;
				display: block;
				border: 2px solid #dfdfdf;
				color: #606060;
				visibility: hidden;
				position: relative
			}

			#barra-brasil #brasil-vlibras .link-vlibras a:hover,
			#barra-brasil #brasil-vlibras .link-vlibras a:focus,
			#barra-brasil #brasil-vlibras .link-vlibras a:active {
				visibility: visible;
				background: #f1f1f1;
				z-index: 8
			}

			#barra-brasil #brasil-vlibras .logo-vlibras:hover+.link-vlibras,
			#barra-brasil #brasil-vlibras .logo-vlibras:active+.link-vlibras,
			#barra-brasil #brasil-vlibras .logo-vlibras:focus+.link-vlibras,
			#barra-brasil #brasil-vlibras .link-vlibras:hover,
			#barra-brasil #brasil-vlibras .link-vlibras:active,
			#barra-brasil #brasil-vlibras .link-vlibras:focus {
				width: 132px !important;
				height: 50px !important;
				display: inline-table;
				border: 2px solid #dfdfdf;
				padding: 10px 24px 10px 24px;
				visibility: visible;
				background: #f1f1f1;
				z-index: 8;
				line-height: 1.75em
			}

			#barra-brasil .eselo {
				position: absolute;
				top: 0;
				right: 44px;
				display: block;
				font-size: 1.25em;
				color: blue
			}

			#barra-brasil .acesso-info {
				position: absolute;
				left: 130px
			}

			#barra-brasil .list {
				position: absolute;
				top: 0;
				right: 40px;
				width: auto
			}

			#barra-brasil .list-eselo {
				right: 90px !important
			}

			#barra-brasil .list .first {
				border-left: 2px solid #dfdfdf
			}

			#barra-brasil .list-item {
				display: inline-block;
				height: 32px;
				line-height: 32px;
				border-right: 2px solid #dfdfdf
			}

			#barra-brasil .list-item a {
				padding: 8px 15px 8px 13px
			}

			#barra-brasil .link-barra {
				color: #606060
			}

			#barra-brasil #menu-icon {
				position: absolute;
				top: 3px;
				border-top: 15px double #606060;
				border-bottom: 5px solid #606060;
				display: none;
				width: 20px;
				right: 5px
			}

			@media only screen and (max-width: 959px) {
				#barra-brasil #menu-icon {
					display: inline-block;
					padding: 5px 3px 0px 3px
				}

				#barra-brasil .list .first {
					border-left: 1px solid #dfdfdf
				}

				#barra-brasil nav:hover #menu-icon,
				#barra-brasil nav:active #menu-icon,
				#barra-brasil nav:focus #menu-icon {
					background-color: #DDD
				}

				body.contraste #barra-brasil nav:hover #menu-icon,
				body.contraste #barra-brasil nav:active #menu-icon,
				body.contraste #barra-brasil nav:focus #menu-icon {
					background-color: #606060 !important
				}

				#barra-brasil ul.list,
				#barra-brasil ul.list:active,
				#barra-brasil ul.list:focus {
					overflow: hidden;
					height: 0px;
					transition: 0.3s;
					padding-top: 32px;
					width: auto;
					position: absolute;
					z-index: 9
				}

				#barra-brasil .list-item {
					display: block;
					text-align: center;
					height: 30px;
					background: #EEE;
					border: 1px solid #dfdfdf
				}

				#barra-brasil .list-item a {
					padding: 8px 30px 8px 28px
				}

				body.contraste #barra-brasil .list-item {
					background: #000 !important
				}

				body.contraste #menu-icon {
					border-top: 15px double #fff !important;
					border-bottom: 5px solid #fff !important
				}

				#barra-brasil .list a:active li,
				#barra-brasil .list a:focus li,
				#barra-brasil .list a:hover li {
					background: #DDD
				}

				body.contraste #barra-brasil .list a:active li,
				body.contraste #barra-brasil .list a:focus li,
				body.contraste #barra-brasil .list a:hover li {
					background: #606060 !important
				}

				#barra-brasil nav:active ul.list,
				#barra-brasil nav:focus ul.list,
				#barra-brasil nav:hover ul.list {
					height: 165px;
					transition: 0.5s
				}

				div#wrapper-barra-brasil {
					overflow: visible
				}
			}

			@media screen and (min-width: 960px) {
				#wrapper-barra-brasil {
					width: 960px
				}
			}

			@media print {
				#barra-brasil .list {
					display: none
				}

				#barra-brasil .acesso-info .link-barra:after {
					content: " Barra GovBr"
				}
			}
		</style>

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

		<!-- JavaScript -->
		<script src="<?php echo base_url('js/jquery.min.js');?>"></script>
		<script src="<?php echo base_url('js/main.min.js');?>"></script>
		<script src="<?php echo base_url('js/bootstrap.js');?>"></script>
		<script src="<?php echo base_url('js/sideBar.js');?>"></script>

		<!-- Icone -->
		<link rel="shortcut icon" href="img/icon.ico">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
	</head>
	<body>

<?php date_default_timezone_set('America/Fortaleza'); ?>