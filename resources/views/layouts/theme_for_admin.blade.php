<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('/img/logo/Doc. Kaffe.png') }}" type="image/png" />
	<!-- icon -->
  	<link href="https://kit-pro.fontawesome.com/releases/v6.0.0/css/pro.min.css" rel="stylesheet">
	<!--plugins-->
	<link href="{{ asset('assets_for_admin/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets_for_admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets_for_admin/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('assets_for_admin/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('assets_for_admin/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('assets_for_admin/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('assets_for_admin/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('assets_for_admin/css/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ asset('assets_for_admin/css/dark-theme.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets_for_admin/css/semi-dark.css') }}" />
	<link rel="stylesheet" href="{{ asset('assets_for_admin/css/header-colors.css') }}" />
	<title>Doc. Kaffe - ADMIN</title>

	<style type="text/css">
	    .main-shadow {
	      box-shadow: 0 4px 4px 0 rgba(0, 0, 0, 0.15), 0 4px 10px 0 rgba(0, 0, 0, 0.15);
	    }

	    .main-radius {
	      border-radius: 5px;
	    }
	</style>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--start header wrapper-->	
		<div class="header-wrapper">
			<!--start header -->
			<header>
				<div class="topbar d-flex align-items-center">
					<nav class="navbar navbar-expand">
						<div class="topbar-logo-header">
							<div class="">
								<img src="{{ asset('/img/logo/logo doc. kaffa-01-01.png') }}" class="logo-icon" alt="logo icon">
							</div>
							<div class="">
								<h4 class="logo-text" style="color: #cfb378;">Doc. Kaffe</h4>
							</div>
						</div>
						<div class="mobile-toggle-menu"><i class='bx bx-menu'></i></div>
						<div class="top-menu-left d-none d-lg-block ps-3">
							<ul class="nav">
							  <li class="nav-item">
								<a class="nav-link" href="app-emailbox.html"><i class='bx bx-envelope'></i></a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" href="app-chat-box.html"><i class='bx bx-message'></i></a>
							  </li>
							  <li class="nav-item">
								<a class="nav-link" href="app-fullcalender.html"><i class='bx bx-calendar'></i></a>
							  </li>
							  <li class="nav-item">
								  <a class="nav-link" href="app-to-do.html"><i class='bx bx-check-square'></i></a>
							  </li>
						  </ul>
						 </div>
						<div class="search-bar flex-grow-1">
							<div class="position-relative search-bar-box">
								<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
								<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
							</div>
						</div>
						<div class="top-menu ms-auto">
							<ul class="navbar-nav align-items-center">
								<li class="nav-item mobile-search-icon">
									<a class="nav-link" href="#">	<i class='bx bx-search'></i>
									</a>
								</li>
								<li class="nav-item dropdown dropdown-large">
									<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">	<i class='bx bx-category'></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<div class="row row-cols-3 g-3 p-3">
											<div class="col text-center">
												<div class="app-box mx-auto bg-gradient-cosmic text-white"><i class='bx bx-group'></i>
												</div>
												<div class="app-title">Teams</div>
											</div>
											<div class="col text-center">
												<div class="app-box mx-auto bg-gradient-burning text-white"><i class='bx bx-atom'></i>
												</div>
												<div class="app-title">Projects</div>
											</div>
											<div class="col text-center">
												<div class="app-box mx-auto bg-gradient-lush text-white"><i class='bx bx-shield'></i>
												</div>
												<div class="app-title">Tasks</div>
											</div>
											<div class="col text-center">
												<div class="app-box mx-auto bg-gradient-kyoto text-dark"><i class='bx bx-notification'></i>
												</div>
												<div class="app-title">Feeds</div>
											</div>
											<div class="col text-center">
												<div class="app-box mx-auto bg-gradient-blues text-dark"><i class='bx bx-file'></i>
												</div>
												<div class="app-title">Files</div>
											</div>
											<div class="col text-center">
												<div class="app-box mx-auto bg-gradient-moonlit text-white"><i class='bx bx-filter-alt'></i>
												</div>
												<div class="app-title">Alerts</div>
											</div>
										</div>
									</div>
								</li>
								<li class="nav-item dropdown dropdown-large">
									<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
										<i class='bx bx-bell'></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a href="javascript:;">
											<div class="msg-header">
												<p class="msg-header-title">Notifications</p>
												<p class="msg-header-clear ms-auto">Marks all as read</p>
											</div>
										</a>
										<div class="header-notifications-list">
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
													ago</span></h6>
														<p class="msg-info">5 new user registered</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
													ago</span></h6>
														<p class="msg-info">You have recived new orders</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-success text-success"><i class="bx bx-file"></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
													ago</span></h6>
														<p class="msg-info">The pdf files generated</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-warning text-warning"><i class="bx bx-send"></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
													ago</span></h6>
														<p class="msg-info">5.1 min avarage time response</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-info text-info"><i class="bx bx-home-circle"></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">New Product Approved <span
													class="msg-time float-end">2 hrs ago</span></h6>
														<p class="msg-info">Your new product has approved</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-danger text-danger"><i class="bx bx-message-detail"></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
													ago</span></h6>
														<p class="msg-info">New customer comments recived</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
													ago</span></h6>
														<p class="msg-info">Successfully shipped your item</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-primary text-primary"><i class='bx bx-user-pin'></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
													ago</span></h6>
														<p class="msg-info">24 new authors joined last week</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-warning text-warning"><i class='bx bx-door-open'></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
													ago</span></h6>
														<p class="msg-info">45% less alerts last 4 weeks</p>
													</div>
												</div>
											</a>
										</div>
										<a href="javascript:;">
											<div class="text-center msg-footer">View All Notifications</div>
										</a>
									</div>
								</li>
								<li class="nav-item dropdown dropdown-large">
									<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
										<i class='bx bx-comment'></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a href="javascript:;">
											<div class="msg-header">
												<p class="msg-header-title">Messages</p>
												<p class="msg-header-clear ms-auto">Marks all as read</p>
											</div>
										</a>
										<div class="header-message-list">
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets_for_admin/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
													ago</span></h6>
														<p class="msg-info">The standard chunk of lorem</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets_for_admin/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
													sec ago</span></h6>
														<p class="msg-info">Many desktop publishing packages</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets_for_admin/images/avatars/avatar-3.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8 min
													ago</span></h6>
														<p class="msg-info">Various versions have evolved over</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets_for_admin/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
													min ago</span></h6>
														<p class="msg-info">Making this the first true generator</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets_for_admin/images/avatars/avatar-5.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22 min
													ago</span></h6>
														<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets_for_admin/images/avatars/avatar-6.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Cristina Jhons <span class="msg-time float-end">2 hrs
													ago</span></h6>
														<p class="msg-info">The passage is attributed to an unknown</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets_for_admin/images/avatars/avatar-7.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">James Caviness <span class="msg-time float-end">4 hrs
													ago</span></h6>
														<p class="msg-info">The point of using Lorem</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets_for_admin/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
													ago</span></h6>
														<p class="msg-info">It was popularised in the 1960s</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets_for_admin/images/avatars/avatar-9.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">David Buckley <span class="msg-time float-end">2 hrs
													ago</span></h6>
														<p class="msg-info">Various versions have evolved over</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets_for_admin/images/avatars/avatar-10.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Thomas Wheeler <span class="msg-time float-end">2 days
													ago</span></h6>
														<p class="msg-info">If you are going to use a passage</p>
													</div>
												</div>
											</a>
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="assets_for_admin/images/avatars/avatar-11.png" class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5 days
													ago</span></h6>
														<p class="msg-info">All the Lorem Ipsum generators</p>
													</div>
												</div>
											</a>
										</div>
										<a href="javascript:;">
											<div class="text-center msg-footer">View All Messages</div>
										</a>
									</div>
								</li>
							</ul>
						</div>
						<div class="user-box dropdown">
							<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								<img src="assets_for_admin/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
								<div class="user-info ps-3">
									<p class="user-name mb-0">Pauline Seitz</p>
									<p class="designattion mb-0">Web Designer</p>
								</div>
							</a>
							<ul class="dropdown-menu dropdown-menu-end">
								<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
								</li>
								<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-cog"></i><span>Settings</span></a>
								</li>
								<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-home-circle'></i><span>Dashboard</span></a>
								</li>
								<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-dollar-circle'></i><span>Earnings</span></a>
								</li>
								<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-download'></i><span>Downloads</span></a>
								</li>
								<li>
									<div class="dropdown-divider mb-0"></div>
								</li>
								<li><a class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</header>
			<!--end header -->
			<!--navigation-->
			<div class="nav-container">
				<div class="mobile-topbar-header">
					<div>
						<img src="assets_for_admin/images/logo-icon.png" class="logo-icon" alt="logo icon">
					</div>
					<div>
						<h4 class="logo-text">Synadmin</h4>
					</div>
					<div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
					</div>
				</div>
				<nav class="topbar-nav">
					<ul class="metismenu" id="menu">
						<li>
							<a href="javascript:;" class="has-arrow">
								<div class="parent-icon"><i class='bx bx-home-circle'></i>
								</div>
								<div class="menu-title">ภาพรวม</div>
							</a>
							<ul>
								<li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>Analytics</a>
								</li>
								<li> <a href="index2.html"><i class="bx bx-right-arrow-alt"></i>Sales</a>
								</li>
								<li> <a href="index3.html"><i class="bx bx-right-arrow-alt"></i>eCommerce</a>
								</li>
								<li> <a href="index4.html"><i class="bx bx-right-arrow-alt"></i>Alternate</a>
								</li>
								<li> <a href="index5.html"><i class="bx bx-right-arrow-alt"></i>Hospitality</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="javascript:;" class="has-arrow">
								<div class="parent-icon">
									<i class="fa-solid fa-sack-dollar"></i>
								</div>
								<div class="menu-title">การเงิน</div>
							</a>
							<ul>
								<li>
									<a href="{{ url('/income_expense') }}">
										<i class="bx bx-right-arrow-alt"></i>รายรับ - รายจ่าย
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bx-right-arrow-alt"></i>สรุปบิลรายวัน
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="has-arrow" href="javascript:;">
								<div class="parent-icon"><i class="bx bx-line-chart"></i>
								</div>
								<div class="menu-title">Charts</div>
							</a>
							<ul>
								<li> <a href="charts-apex-chart.html"><i class="bx bx-right-arrow-alt"></i>Apex</a>
								</li>
								<li> <a href="charts-chartjs.html"><i class="bx bx-right-arrow-alt"></i>Chartjs</a>
								</li>
								<li> <a href="charts-highcharts.html"><i class="bx bx-right-arrow-alt"></i>Highcharts</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="has-arrow" href="javascript:;">
								<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
								</div>
								<div class="menu-title">Components</div>
							</a>
							<ul>
								<li> <a href="widgets.html"><i class="bx bx-right-arrow-alt"></i>Widgets</a>
								</li>
								<li> <a href="component-alerts.html"><i class="bx bx-right-arrow-alt"></i>Alerts</a>
								</li>
								<li> <a href="component-accordions.html"><i class="bx bx-right-arrow-alt"></i>Accordions</a>
								</li>
								<li> <a href="component-buttons.html"><i class="bx bx-right-arrow-alt"></i>Buttons</a>
								</li>
								<li> <a href="component-cards.html"><i class="bx bx-right-arrow-alt"></i>Cards</a>
								</li>
								<li> <a href="component-list-groups.html"><i class="bx bx-right-arrow-alt"></i>List Groups</a>
								</li>
								<li> <a href="component-media-object.html"><i class="bx bx-right-arrow-alt"></i>Media Objects</a>
								</li>
								<li> <a href="component-modals.html"><i class="bx bx-right-arrow-alt"></i>Modals</a>
								</li>
								<li> <a href="component-navs-tabs.html"><i class="bx bx-right-arrow-alt"></i>Navs & Tabs</a>
								</li>
								<li> <a href="component-navbar.html"><i class="bx bx-right-arrow-alt"></i>Navbar</a>
								</li>
								<li> <a href="component-popovers-tooltips.html"><i class="bx bx-right-arrow-alt"></i>Popovers & Tooltips</a>
								</li>
								<li> <a href="component-progress-bars.html"><i class="bx bx-right-arrow-alt"></i>Progress</a>
								</li>
								<li> <a href="component-spinners.html"><i class="bx bx-right-arrow-alt"></i>Spinners</a>
								</li>
								<li> <a href="component-notifications.html"><i class="bx bx-right-arrow-alt"></i>Notifications</a>
								</li>
								<li> <a href="component-avtars-chips.html"><i class="bx bx-right-arrow-alt"></i>Avatrs & Chips</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="has-arrow" href="javascript:;">
								<div class="parent-icon"><i class="bx bx-lock"></i>
								</div>
								<div class="menu-title">Authentication</div>
							</a>
							<ul>
								<li> <a href="authentication-signin.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign In</a>
								</li>
								<li> <a href="authentication-signup.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign Up</a>
								</li>
								<li> <a href="authentication-signin-with-header-footer.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign In with Header & Footer</a>
								</li>
								<li> <a href="authentication-signup-with-header-footer.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Sign Up with Header & Footer</a>
								</li>
								<li> <a href="authentication-forgot-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Forgot Password</a>
								</li>
								<li> <a href="authentication-reset-password.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Reset Password</a>
								</li>
								<li> <a href="authentication-lock-screen.html" target="_blank"><i class="bx bx-right-arrow-alt"></i>Lock Screen</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="has-arrow" href="javascript:;">
								<div class="parent-icon icon-color-6"> <i class="bx bx-donate-blood"></i>
								</div>
								<div class="menu-title">Pages</div>
							</a>
							<ul>
								<li> <a href="user-profile.html"><i class="bx bx-right-arrow-alt"></i>User Profile</a>
								</li>
								<li> <a href="timeline.html"><i class="bx bx-right-arrow-alt"></i>Timeline</a>
								</li>
								<li> <a href="pricing-table.html"><i class="bx bx-right-arrow-alt"></i>Pricing</a>
								</li>
								<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Errors</a>
									<ul>
										<li> <a href="errors-404-error.html"><i class="bx bx-right-arrow-alt"></i>404 Error</a>
										</li>
										<li> <a href="errors-500-error.html"><i class="bx bx-right-arrow-alt"></i>500 Error</a>
										</li>
										<li> <a href="errors-coming-soon.html"><i class="bx bx-right-arrow-alt"></i>Coming Soon</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a class="has-arrow" href="javascript:;">
								<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
								</div>
								<div class="menu-title">Forms</div>
							</a>
							<ul>
								<li> <a href="form-elements.html"><i class="bx bx-right-arrow-alt"></i>Form Elements</a>
								</li>
								<li> <a href="form-input-group.html"><i class="bx bx-right-arrow-alt"></i>Input Groups</a>
								</li>
								<li> <a href="form-layouts.html"><i class="bx bx-right-arrow-alt"></i>Forms Layouts</a>
								</li>
								<li> <a href="form-validations.html"><i class="bx bx-right-arrow-alt"></i>Form Validation</a>
								</li>
								<li> <a href="form-wizard.html"><i class="bx bx-right-arrow-alt"></i>Form Wizard</a>
								</li>
								<li> <a href="form-text-editor.html"><i class="bx bx-right-arrow-alt"></i>Text Editor</a>
								</li>
								<li> <a href="form-file-upload.html"><i class="bx bx-right-arrow-alt"></i>File Upload</a>
								</li>
								<li> <a href="form-date-time-pickes.html"><i class="bx bx-right-arrow-alt"></i>Date Pickers</a>
								</li>
								<li> <a href="form-select2.html"><i class="bx bx-right-arrow-alt"></i>Select2</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<!--end navigation-->
		   </div>
		   <!--end header wrapper-->

		<!-- ---- CONTENT ---- -->
		<!-- ---- CONTENT ---- -->
		<!-- ---- CONTENT ---- -->
		@yield('content')
		<!-- ---- CONTENT ---- -->
		<!-- ---- CONTENT ---- -->
		<!-- ---- CONTENT ---- -->

		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2021. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
					<label class="form-check-label" for="lightmode">Light</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
					<label class="form-check-label" for="darkmode">Dark</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
					<label class="form-check-label" for="semidark">Semi Dark</label>
				</div>
			</div>
			<hr/>
			<div class="form-check">
				<input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
				<label class="form-check-label" for="minimaltheme">Minimal Theme</label>
			</div>
			<hr/>
			<h6 class="mb-0">Header Colors</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator headercolor1" id="headercolor1"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor2" id="headercolor2"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor3" id="headercolor3"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor4" id="headercolor4"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor5" id="headercolor5"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor6" id="headercolor6"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor7" id="headercolor7"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor8" id="headercolor8"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{ asset('assets_for_admin/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('assets_for_admin/js/jquery.min.js') }}"></script>
	<script src="{{ asset('assets_for_admin/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('assets_for_admin/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('assets_for_admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<!--app JS-->
	<script src="{{ asset('assets_for_admin/js/app.js') }}"></script>
</body>

</html>