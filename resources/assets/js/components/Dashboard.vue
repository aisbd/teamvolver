<template>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="panel-heading"></div>
            <div class="card-body">
                <h5 class="card-title">
                    @lang('app.activity') (@lang('app.last_two_weeks'))
                </h5>

                <div class="pt-4 px-3">
                    <canvas id="myChart" height="400"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>


</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>