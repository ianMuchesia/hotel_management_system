
<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

<div class="dashboard">
   <div class="dashboard__container">
    <img src="views/img/room.png" alt="bedroom">
    <h3><?= $rooms[0]; ?> Total rooms</h3>
   </div>
   <div class="dashboard__container">
   <img src="views/img/homework.png" alt="bedroom">
    <h3><?= $booked[0]; ?> rooms booked</h3>
   </div>
   <div class="dashboard__container">
   <img src="views/img/bad.png" alt="bedroom">
    <h3>15 complaints</h3>
   </div>
   <div class="dashboard__container">
   <img src="views/img/in-time.png" alt="bedroom">
    <h3>15 Checked in</h3>
   </div>
   <div class="dashboard__container">
   <img src="views/img/bedroom.png" alt="bedroom">
    <h3><?= $available[0]; ?> rooms Available</h3>
   </div>
   <div class="dashboard__container">
   <img src="views/img/teamwork.png" alt="bedroom">
    <h3>Staff</h3>
   </div>
</div>