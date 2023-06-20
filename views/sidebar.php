<?php     $action =  filter_input(INPUT_GET, 'action', FILTER_SANITIZE_SPECIAL_CHARS);
?>

	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span>
		</a>
		<ul class="side-menu top">
			<li class="<?php echo ($action === "dashboard" || $action == "")? "active": "" ?>">
				<a href=".?action=dashboard">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="<?php echo ($action === "reservation")? "active": "" ?>">
				<a href=".?action=reservation">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Reservation</span>
				</a>
			</li>
			<li class="<?php echo ($action === "rooms")? "active": "" ?>">
				<a href=".?action=rooms">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Manage rooms</span>
				</a>
			</li>
			<li class="<?php echo ($action === "staff")? "active": "" ?>">
				<a href=".?action=staff">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Staff</span>
				</a>
			</li>
			<li class="<?php echo ($action === "complaints")? "active": "" ?>">
				<a href=".?action=complaints">
					<i class='bx bxs-group' ></i>
					<span class="text">Complaints</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<!-- <li >
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li> -->
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->