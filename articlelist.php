<?php include("path.php");
include (ROOT_PATH . "/app/database/db.php"); 
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap CSS -->
		<link
			href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
			rel="stylesheet"
		/>
		<link
			href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
			rel="stylesheet"
		/>
		<link
			href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
			rel="stylesheet"
		/>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" media="all" href="assets/css/style.css" />
		<link href="img/favicon.png" rel="shortcut icon" type="image/png" />
		<title>Pipefy</title>
	</head>
	<body>
		<!-- Header -->

		<?php include (ROOT_PATH . "/app/includes/header.php");?>
   
		<!-- Cards -->

		<div class="content_body">
			<div
				class="container-sm mt-4 mb-4 py-4"
				style="max-width: 900px; flex-grow: 3; background-color: #ecf0f1"
			>
				<div class="py-3" style="display: flex">
					<div
						style="
							width: 160px;
							stroke: #818a97;
							display: flex;
							align-items: center;
							justify-content: center;
						"
					>
						<svg
							role="img"
							viewBox="0 0 48 48"
							width="48px"
							height="48px"
							style="height: 100%"
							class=""
						>
							<g id="chat-user" fill="none" fill-rule="evenodd">
								<path
									d="M12 32.395v4.342L4.117 39.56C2.23 40.235 1 42.02 1 44.022V47h30v-2.977c0-2.003-1.232-3.788-3.117-4.463L20 36.737v-4.613"
									stroke-width="2"
								></path>
								<path
									d="M23.697 24.105c0 5.232-3.534 9.475-7.895 9.475-4.36 0-7.895-4.243-7.895-9.475 0-5.232 3.535-9.473 7.895-9.473 4.36 0 7.895 4.242 7.895 9.473z"
									stroke-width="2"
								></path>
								<path
									d="M23.646 23.25c-.265.032-.47.015-.738.065-2.69.52-4.416-.456-5.897-3.046-.884 1.7-3.66 3.042-5.94 3.042-1.124 0-2.114-.205-3.08-.71M21 13c0-6.628 5.82-12 13-12s13 5.372 13 12c0 4.992-3.302 9.272-8 11.08C38 25 33 30 32 31c0-1 0-5 .007-6.14-1.06-.15-2.08-.42-3.04-.792"
									stroke-width="2"
								></path>
								<path
									d="M40 13h-2v2h2v-2zm-5 0h-2v2h2v-2zm-5 0h-2v2h2v-2z"
									fill="#231F1F"
								></path>
							</g>
						</svg>
					</div>
					<div>
						<div class="head_line mb-4">
							<h1 style="font-weight: 400">Pipefy Basic Concepts</h1>
						</div>
						<div class="header_subtext">
							<p class="paper">
								Want to know what we mean by company, pipe, start form, phase,
								field and card? Learn all about Pipefy&#39;s basic concepts in
								this collection!
							</p>
						</div>
					</div>
				</div>
				<div class="card mx-3">
					<div class="card-body">
						<div class="card_content">
							<div class="head_line">
								<h2 class="h2_primary">Pipe</h2>
							</div>
							<div class="header_subtext">
								<p class="paper">
									Pipes unlock full visibility over your entire workflow and
									centralize all critical information in a single place.
								</p>
							</div>
							<div class="info">
								<div class="author_pics">
									<img
										src="https://static.intercomassets.com/avatars/3802843/square_128/Ian_Photo-1581425147.jpeg?1581425147"
										alt="Ian Castelli avatar"
										class="avatar__image"
									/>
								</div>
								<div class="info_text">
									<div class="collection_count">
										<span class="c__darker"> Updated Over a week ago </span>
										<br />
										Written by
										<span class="c__darker">Isabela Saciotti</span>
									</div>
									<div class="author_name"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<hr class="m-0 mx-3" />
				<div class="card mx-3">
					<div class="card-body">
						<div class="card_content">
							<div class="head_line">
								<h2 class="h2_primary">Pipe</h2>
							</div>
							<div class="header_subtext">
								<p class="paper">
									Pipes unlock full visibility over your entire workflow and
									centralize all critical information in a single place.
								</p>
							</div>
							<div class="info">
								<div class="author_pics">
									<img
										src="https://static.intercomassets.com/avatars/3802843/square_128/Ian_Photo-1581425147.jpeg?1581425147"
										alt="Ian Castelli avatar"
										class="avatar__image"
									/>
								</div>
								<div class="info_text">
									<div class="collection_count">
										<span class="c__darker"> Updated Over a week ago </span>
										<br />
										Written by
										<span class="c__darker">Isabela Saciotti</span>
									</div>
									<div class="author_name"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			</div>
			<!-- Footer -->

			<?php include (ROOT_PATH . "/app/includes/footer.php");?>
      
		<!-- Optional JavaScript; choose one of the two! -->

		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj"
			crossorigin="anonymous"
		></script>
		<!-- MDB -->
		<script
			type="text/javascript"
			src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
		></script>
		<!-- Option 2: Separate Popper and Bootstrap JS -->
		<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
	</body>
</html>
