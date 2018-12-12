<template>
	<div :id="id" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><slot name="title">Modal header</slot></h4>
      </div>
      <div class="modal-body">
      	<slot name="content"></slot>
      </div>
      <div class="modal-footer">
      	<slot name="footer">
     	   <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      	</slot>
      </div>
    </div>

  </div>
</div>	
</template>
<script>
	export default{
		props:['id'],
		data(){
			return {

			}
		},
		created(){

		}
	}
</script>
<style scoped>
	.modal-content{
		background: #fff;
		padding:10px;
		text-align:left;
	}
	.modal-header{
		display:inline-block;
		padding: 5px !important;
	}
	.modal-body{
		padding:10px !important;
	}

</style>