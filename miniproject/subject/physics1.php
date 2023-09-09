<!DOCTYPE html>
<html>
<head>
	<title>Physics Questions</title>
	<style type="text/css">
		body{
			font-size: 20px;
			font-weight: bolder;
			margin-left: 10px;
		}
		
		.header{
			display: flex;
			justify-content: space-between;
			background-color:#33c7ff;
			line-height: 20px;
			width: 100%;
			position: fixed;
			z-index: 12;


		}
		#countdown{
			padding-top: 10px;
			padding-left: 30px;
			padding-right: 60px;
			padding-bottom: 10px;
			font-size: 25px;
			background-color: #fff;
			border-radius: 15px;

		}
		.content1{
			background-color:#fff;
			padding-top: 80px;
		}
		.content{
			background-color:#fff;
			padding-top: 15px;
		}
		input[type=radio]{
			margin-left: 50px;
		}
		#button{
			margin-left: 50px;
			background-color: #00ff41;
			color: black;
			width: 70px;
			height: 30px;
			border-radius: 10px;
			font-size: 17px;
			font-style: bolder;
			border: none;
		}
		.fotter{
			display: flex;
			justify-content: space-between;
			background-color:#33c7ff;
			line-height: 20px;
			width: 100%;
			z-index: 12;
		}
	</style>
	<script type="text/javascript" src="physics.js"></script>

</head>
<body>
	<form name="physics" id="quiz">
		<div class="header">
			<p>header</p>

			<p id="countdown">Time left  </p>
		</div>
		
		<div class="content1">
			<p>Q.1) Which of the following pairs has the same dimensions?</p>
			<p><input type="radio" name="question1" value="work and power">A)  work and power</p>
			<p><input type="radio" name="question1" value="work and torque">B)  work and torque</p> 
			<p><input type="radio" name="question1" value="torque and moment of inertia">C)  torque and moment of inertia</p> 
			<p><input type="radio" name="question1" value="torque and angular momentum">D)  torque and angular momentum</p> 
		</div>
		<div class="content">
			<p>Q.2) Which of the following is not a unit of time?</p>
			<p><input type="radio" name="question2" value="leap year">A)  leap year</p>
			<p><input type="radio" name="question2" value="microsecond">B)  microsecond</p> 
			<p><input type="radio" name="question2" value="lunar month">C)  lunar month</p> 
			<p><input type="radio" name="question2" value="light year">D)  light year</p> 
		</div>
		<div class="content">
			<p>Q.3) Joule*second is the unit of</p>
			<p><input type="radio" name="question3" value="energy">A)  energy</p>
			<p><input type="radio" name="question3" value="momentum">B)  momentum</p> 
			<p><input type="radio" name="question3" value="amgular momentum">C)  angular momentum</p> 
			<p><input type="radio" name="question3" value="power">D)  power</p> 
		</div>
		<div class="content">
			<p> Q.4) The units of length, velocity and force are doubled, which of the following is the correct change in the other units?</p>
			<p><input type="radio" name="question4" value="unit of time is doubled">A)  unit of time is doubled</p>
			<p><input type="radio" name="question4" value="unit of mass is doubled">B)  unit of mass is doubled</p> 
			<p><input type="radio" name="question4" value="unit of momentum is doubled">C)  unit of momentum is doubled</p> 
			<p><input type="radio" name="question4" value="unit of energy is doubled">D)  unit of energy is doubled</p> 
		</div>
		<div class="content">
			<p>Q.5) If the unit of force is 2N that of length is 4m and that of velocity is 6m/s units of mass is</p>
			<p><input type="radio" name="question5" value="4/3 kg">A)  4/3 kg</p>
			<p><input type="radio" name="question5" value="2/9 kg">B)  2/9 kg</p> 
			<p><input type="radio" name="question5" value="4/9 kg">C)  4/9 kg</p> 
			<p><input type="radio" name="question5" value="-9/2 kg">D)  -9/2 kg</p> 
		</div>
		<div class="content">
			<p>Q.6) Which of the following is not dimensional Constant</p>
			<p><input type="radio" name="question6" value="Planck's Constant">A)  Planck's Constant</p>
			<p><input type="radio" name="question6" value="Gravitational Constant">B)  Gravitational Constant</p> 
			<p><input type="radio" name="question6" value="Dielectric Constant">C)  Dielectric Constant</p> 
			<p><input type="radio" name="question6" value="Gas Constant">D)  Gas Constant</p> 
		</div>
		<div class="content">
			<p>Q.7) The pair of quantities having same dimensions are</p>
			<p><input type="radio" name="question7" value="Surface tension and tension">A)  Surface tension and tension</p>
			<p><input type="radio" name="question7" value="Stress and Strain">B)  Stress and Strain</p> 
			<p><input type="radio" name="question7" value="Angular momentum and Plank's Constant">C)  Angular momentum and Plank's Constant</p> 
			<p><input type="radio" name="question7" value="relative velocity and relative density">D)  relative velocity and relative density</p> 
		</div>
		<div class="content">
			<p> Q.8) A and B are two physical quantities having different dimensions which of the following operations may be meaningful.</p>
			<p><input type="radio" name="question8" value="A+B">A)  A+B</p>
			<p><input type="radio" name="question8" value="A-B">B)  A-B</p> 
			<p><input type="radio" name="question8" value="A/B">C)  A/B</p> 
			<p><input type="radio" name="question8" value="None of the above">D) None of the above </p> 
		</div>
		<div class="content">
			<p>Q.9) The quantity having units but no dimension is</p>
			<p><input type="radio" name="question9" value="solid angle">A)  solid angle</p>
			<p><input type="radio" name="question9" value="Strain">B)  Strain</p> 
			<p><input type="radio" name="question9" value="Specific gravity">C)  Specific gravity</p> 
			<p><input type="radio" name="question9" value="All">D)  All</p> 
		</div>
		<div class="content">
			<p>Q.10) Which of the following is vector?</p>
			<p><input type="radio" name="question10" value="electric flux">A)  electric flux</p>
			<p><input type="radio" name="questio10" value="charge">B)  charge</p> 
			<p><input type="radio" name="question10" value="magnetic flux">C)  magnetic flux</p> 
			<p><input type="radio" name="question10" value="magnetic field intensity">D)  magnetic field intensity</p> 
		</div>
		<div class="content">
			<p>Q.11)  The resultant of two force 8N and 6N cannot be </p>
			<p><input type="radio" name="question11" value="10 N">A)  10 N</p>
			<p><input type="radio" name="question11" value="5 N">B)  5 N</p> 
			<p><input type="radio" name="question11" value="16 N">C)  16 N</p> 
			<p><input type="radio" name="question11" value="4 N">D)  4 N</p> 
		</div>
		<div class="content">
			<p> Q.12) The rectangular component of force 80N is 40N then other is</p>
			<p><input type="radio" name="question12" value="89.44 N">A)  89.44 N</p>
			<p><input type="radio" name="question12" value="69.28 N">B)  69.28 N</p> 
			<p><input type="radio" name="question12" value="40 N">C)  40 N</p> 
			<p><input type="radio" name="question12" value="120 N">D)  120 N</p> 
		</div>
		<div class="content">
			<p>Q.13) The vector have magnitude 7 and 5 can have maximum and minimum value of magnitude of their resultant are</p>
			<p><input type="radio" name="question13" value="12 and 3">A)  12 and 3</p>
			<p><input type="radio" name="question13" value="10 and 8">B)  10 and 8</p> 
			<p><input type="radio" name="question13" value="12 and 2">C)  12 and 2</p> 
			<p><input type="radio" name="question13" value="13 and 10">D) 13 and 10</p> 
		</div>
		<div class="content">
			<p>Q.14) A body of mass 50N hangs from a rope stretched between two poles. Find the tension in the two parts of a rope</p>
			<p><input type="radio" name="question14" value="60N and 70N">A)  60N and 70N</p>
			<p><input type="radio" name="question14" value="40N and 50N">B)  40N and 50N</p> 
			<p><input type="radio" name="question14" value="61.24N and 68.3N">C)  61.24N and 68.3N</p> 
			<p><input type="radio" name="question14" value="62N and 69N">D)  62N and 69N</p> 
		</div>
		<div class="content">
			<p>Q.15) An aeroplane mones 400m towards north, 300m towards west and then 1200m vertically upwards then its displacement from the initial positions</p>
			<p><input type="radio" name="question15" value="1300 m">A)  1300 m</p>
			<p><input type="radio" name="question15" value="1400 m">B)  1400 m</p> 
			<p><input type="radio" name="question15" value="1500 m">C)  1500 m</p> 
			<p><input type="radio" name="question15" value="1600 m">D) 1600 m</p> 
		</div>
		<div class="content">
			<p> Q.16) A bus travelling the first one-third distance at a speed of 10 km/hr, the next one fourth at 20 km/hr and the remaining at 40 km/hr.The average speed of the bus is nearly</p>
			<p><input type="radio" name="question16" value="9 km/hr">A)   9 km/hr</p>
			<p><input type="radio" name="question16" value="16 km/hr">B)  16 km/hr</p> 
			<p><input type="radio" name="question16" value="18 km/hr">C)  18 km/hr</p> 
			<p><input type="radio" name="question16" value="48 km/hr">D)  48 km/hr</p> 
		</div>
		<div class="content">
			<p>Q.17) A ball is thrown upwards from the top of the  tower 40m high wuth velocity of 10 m/s. Find the time when it strikes the ground?</p>
			<p><input type="radio" name="question17" value="2 sec">A)  2 sec</p>
			<p><input type="radio" name="question17" value="4 sec">B)  4 sec</p> 
			<p><input type="radio" name="question17" value="-2 sec">C) -2 sec</p> 
			<p><input type="radio" name="question17" value="6 sec">D)  6 sec</p> 
		</div>
		<div class="content">
			<p>Q.18) A train moving with a speed of 36 km/hr takes 14 sec to cross a bridge of length 100 m.The length of train is </p>
			<p><input type="radio" name="question18" value="140 m">A)  140 m</p>
			<p><input type="radio" name="question18" value="40 m">B)   40 m</p> 
			<p><input type="radio" name="question18" value="100 m">C)  100 m</p> 
			<p><input type="radio" name="question18" value="360 m">D)  360 m</p> 
		</div>
		<div class="content">
			<p>Q.19) A body loses half of it's velocity on penetrating 3 cm in a wooden block, then how much will it penetrate more before coming to rest?</p>
			<p><input type="radio" name="question19" value="1 cm">A)  1 cm</p>
			<p><input type="radio" name="question19" value="3 cm">B)  3 cm</p> 
			<p><input type="radio" name="question19" value="4 cm">C)  4 cm</p> 
			<p><input type="radio" name="question19" value="2 cm">D)  2 cm</p> 
		</div>
		<div class="content">
			<p>Q.20) A car starts from rest and acceleratrs uniformly to a speed of 180 km/hr in 10 sec.The distance covered by the car in this time interval is</p>
			<p><input type="radio" name="question20" value="500 m">A)  500 m</p>
			<p><input type="radio" name="question20" value="200 m">B)  200 m</p> 
			<p><input type="radio" name="question20" value="250 m">C)  250 m</p> 
			<p><input type="radio" name="question20" value="150 m">D)  150 m</p> 
		</div>
		<input type="button" name="" value="Submit" id="button" onclick="check()">

	</form>


	<p id="result"> </p> 
</body>
</html>