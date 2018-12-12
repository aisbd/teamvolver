<template>
    <div class="row" >
<!-- modals -->
<form @submit.prevent="submitApplyForm">
<Modal :id="'applayModal'">
	<template slot="title">
		Apply
	</template>
	<template slot="content">
	<div class="row">
		<div class="col-md-12">

			  <div class="form-group">
			  	<input type="hidden" v-model="project_id">
			    <label for="email">Role:</label>
			    <select required class="form-control" v-model="role">
			    	<option value="">Select Role</option>
			    	<option v-for="designation in designations" :value="designation.id">{{designation.name}}</option>
			    </select>
			  </div>

			  <div class="form-group">
			    <label for="pwd">Message:</label>
			    <textarea required v-model="message"  class="form-control" id="pwd" placeholder="Write your message to the igniter"></textarea>
			  </div>
		</div>
	</div>
	</template>


	<template slot="footer">
			  <button type="submit"  class="btn btn-primary">Submit</button>
			  <button type="submit" class="btn btn-danger"  data-dismiss="modal">Close</button>
	</template>
</Modal>
</form>
<!-- modals -->
        <div class="col-md-12" id="projects" style="background:#fff; padding-bottom:30px">
            <h3 class="center uppercase">Projects</h3>
            <br>

     <div style="width:100%; text-align:center; display:inline-block">  
   <ul class="portfolio-filter clearfix" data-container="#portfolio" style="float:none; display:inline-block">

	<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
	<li  v-for="category in categories" ><a href="#" :data-filter="`.pf_${category.id}`">{{category.name}}</a></li>

</ul>

         </div>    
<!-- <div class="portfolio-shuffle" data-container="#portfolio">
	<i class="icon-random"></i>
</div> -->

<div id="portfolio" class="portfolio grid-container clearfix">

	<article v-for="project in projects" :class="`portfolio-item pf_${project.category_id}`" >

		<!-- Portfolio Image -->
		<div  class="portfolio-image" style="position:relative; boder:1px solid #000">
			<Hexagon :data="project.designations" :height="250" />
			<div class="portfolio-overlay" style="text-align:center;">
				<button v-if="loggedIn" @click="openApplyModal(project.id, project.designations)" class="btn btn-primary" style="top:calc(50% - 40px); position:absolute; left:calc(50% - 40px)">Apply</button>
				<button v-else @click="openLoginModal" class="btn btn-primary" style="top:calc(50% - 40px); position:absolute; left:calc(50% - 70px)">Login to Apply</button>
			</div>
		</div>

		<!-- Portfolio Description -->
		<div class="portfolio-desc">
			<h3><a href="portfolio-single.html">{{project.title}}</a></h3>
			<span><a href="#">Short</a> <a href="#">{{project.description}}</a></span>
		</div>

	</article>




</div>


    
            </div>
    </div>

</template>
<script>    
import Hexagon from './Hexagon.vue'
import Modal from './Modal.vue'
export default {
	components:{Hexagon, Modal},
   data(){
   	return {
   		categories:{},
   		message: '',
   		role: '',
   		designations:[],
   		project_id : '-1',
   		projects: [],
   		loggedIn: true
   	}
   },   	
   created(){
   		this.loggedIn = window.loggedIn
   		axios.get('/categories').then((response)=>{
   			this.categories = response.data
   		})
   		axios.get('/projects').then((response)=>{
   			this.projects = response.data
   		})
   	},
   	methods:{
   		openApplyModal(project_id, designations){
   			this.project_id = project_id
   			this.designations = designations
   			this.role = ""
   			$('#applayModal').modal();
   		},
   		submitApplyForm(){
   			var data =  {"project_id": this.project_id, "designation_id": this.role}
   			axios.post('/application-submissions', data).then((response)=>{
   				Swal(
					  'Success!',
					  'Your application successfully submited.',
					  'success'
					)

   			$('#applayModal').modal('hide');
   			})
   			//send post request to server
   		},
   		openLoginModal(){
     	   $('.loginButton').trigger('click')
   			$("#loginModal").modal();
   		}
   	}
}   
</script>

