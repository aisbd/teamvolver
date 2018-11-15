					<nav id="primary-menu">

						<ul class="one-page-menu" data-easing="easeInOutExpo" data-speed="1250" data-offset="65">
							@if(Request::path() == "/" || Request::path() == 'login')
							<li><a href="#" data-href="#wrapper"><div>Home</div></a></li>
							<li><a href="#" data-href="#team-igniter" data-offset="150"><div>Team Igniter</div></a></li>
							<li><a href="#" data-href="#team-member" data-offset="165"><div>Team member</div></a></li>
							<li><a href="#" data-href="#demo"><div>Demo</div></a></li>
							<li><a href="#" data-href="#projects"><div>Projects</div></a></li>
							<li><a href="#" data-href="#contactUs"><div>About Us</div></a></li>
							@if(Auth::guest())
							<li><a href="#" data-href="#abc" id="loginButton"><div>Login</div></a></li>							
							@else
							<li><a href="/dashboard"  ><div>Dashboard</div></a></li>
							@endif

							@else
							<li><a href="/#wrapper" data-href="/#wrapper"><div>Home</div></a></li>
							<li><a href="/#team-igniter" data-href="/#team-igniter" data-offset="150"><div>Team Igniter</div></a></li>
							<li><a href="/#team-member" data-href="/#team-member" data-offset="165"><div>Team member</div></a></li>
							<li><a href="/#demo" data-href="/#demo"><div>Demo</div></a></li>
							<li><a href="/#projects" data-href="/#projects"><div>Projects</div></a></li>
							<li><a href="/#contactUs" data-href="/#contactUs"><div>About Us</div></a></li>
							@if(Auth::guest())
							<li><a href="#" data-href="#abc" id="loginButton"><div>Login</div></a></li>							
							@else
							<li><a href="/dashboard"  ><div>Dashboard</div></a></li>
							@endif

							@endif
						</ul>

					</nav><!-- #primary-menu end -->