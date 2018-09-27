<template>
		<div class="row register" id="register-form">
			<div class="col-md-8 signup-tabs">

				<div class="tabs clearfix" id="tabs">
				
					<ul class="tab-nav clearfix">
						<li>
							<a  href="#tab-1">Igniter</a>
						</li> 
						<li>
							<a  href="#tab-3">Member</a>
						</li>
					</ul>
				
					<div class="tab-container">
				
						<div class="tab-content clearfix" id="tab-1">
							<div class="col-md-12" style="text-align: center">
								<h4>
									Build Your  Team</h4>
								<!-- <p>Lrorem ipsum donor fminet </p> -->
							</div>
							<div class="row">
								<div class="col-md-12" style="padding: 30px;padding-left:50px; padding-right: 50px; ">
									
									<div v-if="success" class="alert alert-warning">
									  <strong>Success!</strong> Registration successfull
									</div>
									<div v-if="error" class="alert alert-danger">
									  <strong>Error!</strong> Please fix the errors below
									</div>

										<div class="form-group " v-bind:class="{error: errors.fullname}">
											<label for="fullname">Full Name</label>

											<input @keyup="clearError('fullname')" type="text" v-model="fullname"   class="form-control" placeholder="Enter Full Name">
											<small v-if="errors.fullname"  class="form-text text-muted">{{errors.fullname[0]}}</small>

										</div>
										<div v-bind:class="{error: errors.email}" class="form-group">
											<label for="fullname">Email</label>
											<input  @keyup="clearError('email')"  type="text" v-model="email"  class="form-control" placeholder="Example: someone@example.com">											<small v-if="errors.email"  class="form-text text-muted">{{errors.email[0]}}</small>
										</div>
										<div v-bind:class="{error: errors.password}"  class="form-group">
											<label for="fullname">Password</label>
											<input  @keyup="clearError('password')"  type="password" v-model="password"   class="form-control" placeholder="Atleast 6 digits">	<small v-if="errors.password"  class="form-text text-muted">{{errors.password[0]}}</small>
										</div>
										<div class="form-group">
											<label for="fullname">Where you live</label>
											<input type="text" v-model="address"   class="form-control" placeholder="Example: New York, US">
										</div>
										<button @click="signUp('igniter')" class="button button-circle primary">Sign up</button>
										<div style="float: right;text-align: right">
											<span class="italic">Already a Member?</span> <br>
											<u><a class="loginButton"  href="#">LOGIN</a></u>
											
										</div>
								
								</div>
							</div>
                        </div>
						<div class="tab-content clearfix" id="tab-3">
							<div class="col-md-12" style="text-align: center">
								<h4>
									Find Your Dream Team</h4>
								<p>Lrorem ipsum donor fminet </p>
							</div>
							<div class="row">
								<div class="col-md-12" style="padding: 30px;padding-left:50px; padding-right: 50px; ">
									
										<div class="form-group">
											<label for="fullname">Full Name</label>
											<input type="text" v-model="fullname"   class="form-control" placeholder="Enter Full Name">
										</div>
										<div class="form-group">
											<label for="fullname">Email</label>
											<input type="text" v-model="email"  class="form-control" placeholder="Example: someone@example.com">
										</div>
										<div class="form-group">
											<label for="fullname">Password</label>
											<input type="password" v-model="password"   class="form-control" placeholder="Atleast 6 digits">
										</div>
										<div class="form-group">
											<label for="fullname">Where you live</label>
											<input type="text" v-model="address"   class="form-control" placeholder="Example: New York, US">
										</div>
										<button @click="signUp('member')"  class="button button-circle primary">Sign up</button>
										<div style="float: right;text-align: right">
											<span class="italic">Already a Member?</span> <br>
											<u><a class="loginButton"  href="#">LOGIN</a></u>
											
										</div>
								
								</div>
							</div>
                        </div>                        
					</div>
				

				</div>

			</div>
			<div class="col-md-4 description">
				<h2 style="margin-top: 30px;">Why Us</h2>
				<p>
				We offer a platform of creating and growing your activity, meeting the people that you find matching your needs. We are a community of learners and doers, we strive for new ideas to be realized. We start from scratch and follow the process of growing, supporting most needs in the developmental phases. 

				</p>
				<p>
					<strong>Our vision:</strong> We believe many ideas should be implemented for a better society, we share thoughts and practices to support each other. We wish you a great experience forming your team and developing your idea from scratch to a full working mode.

				</p>
				<h2 style="  margin-top: -20px; margin-bottom: 30px;">Join Us Now !</h2>
			</div>
		</div>	
</template>
<script>
	export default{
		data(){
		   	return { 
		   		fullname: "",
		   		email: "",
		   		password: "",
		   		address: "",
		   		errors: {
		   			fullname: false, email: false, password: false, address: false
		   		},
		   		success: false
		   	}
   		},
   		methods: {
   			signUp(type){
   				this.userType = type;
   				axios.post('/register', {
   					email: this.email,
   					password: this.password, 
   					fullname: this.fullname,
   					address: this.address,
   					type: this.userType
   				}).then((response) => { 
   					this.success = true;
   					window.location = '/dashboard'
   				},
  						(error) => { 
  							this.errors = error.response.data })
   			},
   			clearError(field){
				this.errors[field] = false
			}

   		}
}   
	
</script>