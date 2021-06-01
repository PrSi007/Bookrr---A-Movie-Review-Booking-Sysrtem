<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Theatre Booking</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<style>
		body {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: black;
			overflow: hidden;
		}

		.seat {
			height: 32px;
			width: 40px;
			background: white;
			margin: 7px;
			border-radius: 8px 8px 0 0;
			box-shadow: 0px 1px 4px #000;
		}

		.seat:nth-of-type(2),
		.seat:nth-of-type(8) {
			margin-right: 32px;
		}

		.booked {
			background-color: #F53844;
			box-shadow: 0px 1px 3px #000;
		}

		.selected {
			background-color: #30C209;
			box-shadow: 0px 1px 2px #000;
		}

		.notations div:nth-child(even) {
			margin-left: 4px;
			margin-top: 8px;
			color: #fff;
			letter-spacing: 1px;
			text-transform: uppercase;
		}

		.notation {
			height: 32px;
			width: 32px;
			border-radius: 50%;
		}

		.n1 {
			background: white;
		}

		.n2 {
			background: #30C209;
		}

		.n3 {
			background: #F53844;
		}

		.sign {
			font-family: roboto, cursive;
			font-size: 50px;
			color: rgba(255, 255, 255, 0.5);
			position: fixed;
			bottom: -120px;
			right: -360px;
		}

		.btn {
			background-color:#30C209;
			margin-left: 53%;
			width:200%;
		}
	</style>
</head>

<body>
	<div class="container">
		<div class="row">
			<div class="col-11 d-flex align-items-center notations justify-content-center">
				<div class="notation n1 shadow"></div>
				<div>
					<h6>Not Booked</h6>
				</div>
				<div class="notation n2 ml-3 shadow"></div>
				<div>
					<h6>Selected</h6>
				</div>
				<div class="notation n3 ml-3 shadow"></div>
				<div>
					<h6>Booked</h6>
				</div>
			</div>
			<div class="col-11 ml-8 my-5">
				<select id="movie" class="form-control shadow">
					<option value="249">Audi A <strong><b>( 5:45 p.m )</b></strong></option>
					<option value="249">Audi B <strong><b>( 6:10 p.m )</b></strong></option>
					<option value="249">Audi C <strong><b>( 6:30 p.m )</b></strong></option>
					<option value="249">Audi D <strong><b>( 7:15 p.m )</b></strong></option>
				</select>
			</div>
		</div>
		<!-- row  -->
		<div class="row">
			<div class="seat" id="div1"></div>
			<div class="seat" id="div2"></div>
			<div class="seat" id="div3"></div>
			<div class="seat" id="div4"></div>
			<div class="seat" id="div5"></div>
			<div class="seat" id="div6"></div>
			<div class="seat" id="div7"></div>
			<div class="seat" id="div8"></div>
			<div class="seat" id="div9"></div>
			<div class="seat" id="div10"></div>
		</div>
		<!-- row ends here -->
		<!-- row  -->
		<div class="row">
			<div class="seat" id="div11"></div>
			<div class="seat" id="div12"></div>
			<div class="seat" id="div13"></div>
			<div class="seat" id="div14"></div>
			<div class="seat" id="div15"></div>
			<div class="seat" id="div16"></div>
			<div class="seat" id="div17"></div>
			<div class="seat" id="div18"></div>
			<div class="seat" id="div19"></div>
			<div class="seat" id="div20"></div>
		</div>
		<!-- row ends here -->
		<!-- row  -->
		<div class="row">
			<div class="seat" id="div21"></div>
			<div class="seat" id="div22"></div>
			<div class="seat" id="div23"></div>
			<div class="seat" id="div24"></div>
			<div class="seat" id="div25"></div>
			<div class="seat" id="div26"></div>
			<div class="seat" id="div27"></div>
			<div class="seat" id="div28"></div>
			<div class="seat" id="div29"></div>
			<div class="seat" id="div30"></div>
		</div>
		<!-- row ends here -->
		<!-- row  -->
		<div class="row">
			<div class="seat" id="div31"></div>
			<div class="seat" id="div32"></div>
			<div class="seat" id="div33"></div>
			<div class="seat" id="div34"></div>
			<div class="seat" id="div35"></div>
			<div class="seat" id="div36"></div>
			<div class="seat" id="div37"></div>
			<div class="seat" id="div38"></div>
			<div class="seat" id="div39"></div>
			<div class="seat" id="div40"></div>
		</div>
		<!-- row ends here -->
		<!-- row  -->
		<div class="row">
			<div class="seat" id="div41"></div>
			<div class="seat" id="div42"></div>
			<div class="seat" id="div43"></div>
			<div class="seat" id="div44"></div>
			<div class="seat" id="div45"></div>
			<div class="seat" id="div46"></div>
			<div class="seat" id="div47"></div>
			<div class="seat" id="div48"></div>
			<div class="seat" id="div49"></div>
			<div class="seat" id="div50"></div>
		</div>
		<!-- row ends here -->
		<div class="row my-3">
			<div class="col-12">
				<h5 class="text-center text-white">You have selected <span id="count" class="text-warning">0</span> seats with price of <span class="text-warning">&#8377;</span><span id="price" class="text-warning">0</span></h5>
			</div>
		</div>
		<div class="row">
			<div class="col-6 col-md-4">
				<button class="btn btn-success py-2 shadow" id="save" onclick="window.location.href='payment.php'">Confirm Selected</button>
			</div>
		</div>
	</div>
	<script>
		const container = document.querySelector('.container');
		const slectedMovie = document.getElementById('movie');
		let ticketPrice = slectedMovie.value;
		let divIds = ['1'];
		container.addEventListener('click', function(e) {
			if (e.target.classList.contains('seat') && !e.target.classList.contains('booked')) {
				e.target.classList.toggle('selected');

				saveToLocalStorage(document.getElementById('movie').value);
				updatedSelcetCount();
			}
		});
		// change selct
		slectedMovie.addEventListener('change', function(e) {
			ticketPrice = e.target.value;

			for (let i = 1; i <= 50; i++) {
				document.getElementById('div' + i).classList.remove('selected');
			};
			clearView();
			updateView(document.getElementById('movie').value);
			updatedSelcetCount();
		});


		function updatedSelcetCount() {

			const selectSeat = document.querySelectorAll('.selected');

			document.getElementById('count').innerHTML = selectSeat.length;

			document.getElementById('price').innerHTML = ticketPrice * selectSeat.length;

			// saveToLocalStorage();
		}

		function saveToLocalStorage(userSlectedmovie) {
			let allSeats = document.querySelectorAll('.seat');
			let bookedSeats = document.querySelectorAll('.booked');
			let selectedUserId = document.querySelectorAll('.selected');


			// console.log(selectedUserId);
			let dd = [...selectedUserId].map(function(s) {
				return s.id;
			});
			switch (userSlectedmovie) {
				case '249':
					localStorage.setItem('movie1Id', dd);
					break;
				case '249':
					localStorage.setItem('movie2Id', dd);
					break;
				case '249':
					localStorage.setItem('movie3Id', dd);
					break;
				case '249':
					localStorage.setItem('movie4Id', dd);
					break;
				default:
					console.log('invalid operation');
					break;
			}


		}

		// updateview

		function updateView(usm) {
			let selectedMovieInUpdateView;
			console.log(usm);
			switch (usm) {
				case '249':
					selectedMovieInUpdateView = 'movie1Id';
					break;
				case '249':
					selectedMovieInUpdateView = 'movie2Id';
					break;
				case '249':
					selectedMovieInUpdateView = 'movie3Id';
					break;
				case '249':
					selectedMovieInUpdateView = 'movie4Id';
					break;
				default:
					console.log('invalid operation');
					break;
			}
			// console.log(localStorage.getItem('movie1Id'));
			if (localStorage.getItem(selectedMovieInUpdateView) != null) {
				let localStorageArray = localStorage.getItem(selectedMovieInUpdateView).split(',');
				console.log(localStorageArray.length);
				for (let i = 0; i < localStorageArray.length; i++) {
					if (localStorageArray[i] != '') {
						document.getElementById(localStorageArray[i]).classList.add('selected');
					}

				}
			}

			let BookedMovie;
			switch (usm) {
				case '249':
					BookedMovie = 'movie1Booked';
					break;
				case '249':
					BookedMovie = 'movie2Booked';
					break;
				case '249':
					BookedMovie = 'movie3Booked';
					break;
				case '249':
					BookedMovie = 'movie4Booked';
					break;
				default:
					console.log('invalid operation');
					break;
			}

			if (localStorage.getItem(BookedMovie) != null) {
				let localStorageArray = localStorage.getItem(BookedMovie).split(',');
				console.log(localStorageArray.length);
				for (let i = 0; i < localStorageArray.length; i++) {
					if (localStorageArray[i] != '') {
						document.getElementById(localStorageArray[i]).classList.add('booked');
					}

				}
			}

		}
		// booking Logic
		document.getElementById('save').addEventListener('click', () => {
			let newBookSeat = document.querySelectorAll('.selected');

			let currntMovie;
			switch (document.getElementById('movie').value) {
				case '249':
					currntMovie = 'movie1Id';
					break;
				case '249':
					currntMovie = 'movie2Id';
					break;
				case '249':
					currntMovie = 'movie3Id';
					break;
				case '249':
					currntMovie = 'movie4Id';
					break;
			}


			let bookingArray;
			switch (document.getElementById('movie').value) {
				case '249':
					bookingArray = 'movie1Booked';
					break;
				case '249':
					bookingArray = 'movie2Booked';
					break;
				case '249':
					bookingArray = 'movie3Booked';
					break;
				case '249':
					bookingArray = 'movie4Booked';
					break;
			}


			console.log(currntMovie);
			let bookedId = [];
			let newId = localStorage.getItem(currntMovie).split(',');
			if (localStorage.getItem(bookingArray) != null) {
				bookedId = localStorage.getItem(bookingArray).split(',');
			}

			console.log(newId);
			let newArry = [];
			for (let i = 0; i < newId.length; i++) {
				document.getElementById(newId[i]).classList.remove('selected');
				document.getElementById(newId[i]).classList.add('booked');
			}
			let arr = bookedId.concat(newId);
			localStorage.setItem(currntMovie, '');
			localStorage.setItem(bookingArray, arr)
		})

		function clearView() {
			for (let i = 1; i <= 50; i++) {
				document.getElementById('div' + i).classList.remove('selected');
				document.getElementById('div' + i).classList.remove('booked');
			}

		}

		updateView('100');
		updatedSelcetCount();
	</script>
</body>

</html>