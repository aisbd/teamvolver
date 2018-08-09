<template>
    <div>
        					<div class="container clearfix">

						<div class="row">

							<div class="col-md-12" style="text-align: left">
						        <h3 style="margin-bottom:40px; margin-top:40px" >Form Project and Team Roles</h3>
							</div>
						</div>

							<div class="col-md-12   steps" style="text-align: left">
								
								<div id="processTabs">
									<ul class="process-steps bottommargin clearfix">
										<li>
											<a href="#ptab1" class="i-circled i-bordered i-alt divcenter" v-bind:class="{active: isStep(1)}"></a>
											<h5>Forming</h5>
										</li>
										<li>
											<a href="#ptab2" class="i-circled i-bordered i-alt divcenter" v-bind:class="{active: isStep(2)}"></a>
											<h5>Team Roles</h5>
										</li>
										<li>
											<a href="#ptab3" class="i-circled i-bordered i-alt divcenter" v-bind:class="{active: isStep(3)}"></a>
											<h5>Preview</h5>
										</li>
									</ul>
									<div>
							
							</div>

						</div>



                          
                              
                                <div id="ptab1" class="row">
                                          <transition-group name="fadeLeft" enter-active-class="fadeIn" leave-active-class="a" tag="div" style="width:100%">
                                    <div v-bind:key="step">

                                    <div v-if="step == 1" class="col-md-12" style="padding: 0 80px; padding-bottom: 20px;">
                                            <h3 class="center">POST IDEA TO FORM A TEAM</h3>
                                                    <form action="">
                                                        <div class="form-group">
                                                            <label for="fullname">Select Category</label>
                                                            <select @change="categoryChanged" v-model="category" class="form-control">
                                                                <option v-for="cat in categories" v-bind:value="cat.id">{{cat.name}}</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="fullname">Tell us about your idea?</label>
                                                            <textarea v-model="description"  class="form-control bordered" cols="30" rows="10" placeholder="Write about your idea here..."></textarea>
                                                        </div>
                                                
                                                
                                                    </form>
                                        
                                    </div>


                                    <div v-if="step == 2" class="col-md-12" style="padding: 0 80px; padding-bottom: 20px;">
                                            <h3 class="center">TEAM ROLES</h3>
                                            <h6 class="center">Define team roles to set your team</h6>
                                                    <form action="">
                                                        <div class="form-group" style="display:block">
                                                            <label for="fullname"><strong>Select Team</strong></label>
                                                            <div class="col-md-12 float-left" style="padding:20px 0px">


                                                            <div v-for="designation in designationlist" class="col-md-3">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input @change="designationSelected($event)" type="checkbox" class="custom-control-input"   v-bind:value="designation.id" v-bind:id="'des_'+designation.id" />
                                                                    <label class="custom-control-label font-weight-normal" v-bind:for="'des_'+designation.id">
                                                                        {{designation.name}}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                               
                                                               
                                                            </div>



                                                        </div>
                                                   <!--      <div class="form-group">
                                                            <label for="fullname">Define Roles</label>
                                                            <div class="col-md-12 float-left" style="padding:20px 0">
                                                                <div class="col-md-3 ">
                                                                    <button class="btn btn-transparent btn-sm">Project Manager</button>
                                                                </div>



                                                                <div class="col-md-3">
                                                                    <button class="btn btn-transparent btn-sm">Project Manager</button>
                                                                </div>


                                                                <div class="col-md-3 ">
                                                                    <button class="btn btn-transparent btn-sm">Project Manager</button>
                                                                </div>


                                                                <div class="col-md-3 ">
                                                                    <button class="btn btn-transparent btn-sm">Project Manager</button>
                                                                </div>

                                                            </div>
                                                        </div> -->
                                                    </form>
                                        
                                    </div>  



                                    <div v-if="step == 3" class="col-md-12" style="padding: 0 80px; padding-bottom: 20px;">
                                            <h3 class="center">PREVIEW</h3>
                                            <h6 class="center">Preview your post and publish it</h6>
                                                
                                                        <div class="form-group">
                                                            <div ><strong>Category:</strong> </div>
                                                            <span>{{categoryName}}</span>
                                                        </div>
                                                        <div class="form-group">
                                                            <div > <strong>Idea Descripton:</strong></div>
                                                            {{description }}
                                                        </div>
                                                        
                                           
                                           <div>
                                                <hexagon :data="hexagonData()"></hexagon>
                                           </div>
                                            
                                        
                                    </div>
                                </div>
  </transition-group>
                                    <div class="col-md-12" style="padding:20px 80px">
                                        <hr>
                                                        <button @click="next" class="button button-circle primary right">
                                                            <span v-if="step != 3">Next</span>
                                                            <span v-else >Publish</span>
                                                        </button>
                                                        <div style="float: right;text-align: right; margin-top: 15px !important;"   >
                                                            
                                                            <a style="margin-right: 30px; color:#666;" href="#"><u>Cancel</u></a>
                                                    
                                                        </div>

                                                        <div @click="prev" v-if="step != 1" style="float: left;text-align: right; margin-top: 15px !important;"   >
                                                            
                                                            <a style="margin-right: 30px; color:#666;" href="#"><u>Previous</u></a>
            
                                                        </div>


                                    </div>
                                    
                                    <div class="clear"></div>


                                </div>






				</div>

		

					</div>
    </div>
</template>

<script>
     import Hexagon from './Hexagon.vue';
    export default {
                 components:{
                     'hexagon':Hexagon
                },
        mounted() {
            this.categoryChanged()
            // var that = this;
            axios.get('/categories').then((response)=>{
                this.categories =  response.data
            })
            axios.get('/designations').then((response)=>{
                this.designationlist =  response.data
            })
        },
        data(){
            return {
                step: 1,
                categories: [],
                designationlist: [
                ],
                category: 1,
                categoryName: 'Not selected',
                description: "",
                designations: [],
            }
        },
        methods: {
                submitForm(){
                    axios.post("/projects", {category: this.category, designations: this.designations, description: this.description})
                    .then(
                      function (response) {
                          window.location.href = "/"
                      }
                    )
                },
                hexagonData(){
                        var data = []; var name = " ";
                        var that = this;
                        this.designations.forEach(function (v, k) {
                            that.designationlist.forEach((val, key) => {
                                if(val.id == v){
                                    name = val.name
                                }
                            })

                            var obj =  {
                                    cat: 'language', name: name, value: 250,
                                    icon: '/d3/img/hex.png',
                                }
                                data.push(obj)
                        })
                        console.log(data)
                            return data;
                },
                next(){
                        if(this.isStep(3)){
                            this.submitForm()
                            return;
                        }
                        this.step++
                    },
                prev(){
                         this.designations = []
                        this.step--
                    },
                isStep(n){
                    return n <= this.step
                },
                designationSelected(e){
                    if(e.target.checked){
                         this.designations.push(e.target.value)
                     }else{
                        var array =this.designations;
                        var index = array.indexOf(e.target.value);
                        if (index > -1) {
                          array.splice(index, 1);
                        }
                        this.designations = array
                     }
                    },
                
                categoryChanged(){
                    this.categories.forEach((value, b) => {
                        console.log(value)
                        if(value.id == this.category ){
                            return this.categoryName =  value.name;
                        }
                    })
                }
                },
    }
</script>