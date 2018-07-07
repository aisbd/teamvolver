<div id="heatmap-chart"></div>

<script>
    //Used in the blog 2013-07-22-self-organizing-maps-creating-hexagonal.md

//https://d3js.org/d3.hexbin.v0.min.js
!function(){d3.hexbin=function(){function u(n){var r={};return n.forEach(function(n,t){var a=s.call(u,n,t)/o,e=Math.round(a),c=h.call(u,n,t)/i-(1&e?.5:0),f=Math.round(c),l=a-e;if(3*Math.abs(l)>1){var v=c-f,g=f+(f>c?-1:1)/2,m=e+(e>a?-1:1),M=c-g,d=a-m;v*v+l*l>M*M+d*d&&(f=g+(1&e?1:-1)/2,e=m)}var j=f+"-"+e,p=r[j];p?p.push(n):(p=r[j]=[n],p.i=f,p.j=e,p.x=(f+(1&e?.5:0))*i,p.y=e*o)}),d3.values(r)}function a(r){var t=0,u=0;return n.map(function(n){var a=Math.sin(n)*r,e=-Math.cos(n)*r,i=a-t,o=e-u;return t=a,u=e,[i,o]})}var e,i,o,c=1,f=1,h=r,s=t;return u.x=function(n){return arguments.length?(h=n,u):h},u.y=function(n){return arguments.length?(s=n,u):s},u.hexagon=function(n){return arguments.length<1&&(n=e),"m"+a(n).join("l")+"z"},u.centers=function(){for(var n=[],r=0,t=!1,u=0;f+e>r;r+=o,t=!t,++u)for(var a=t?i/2:0,h=0;c+i/2>a;a+=i,++h){var s=[a,r];s.i=h,s.j=u,n.push(s)}return n},u.mesh=function(){var n=a(e).slice(0,4).join("l");return u.centers().map(function(r){return"M"+r+"m"+n}).join("")},u.size=function(n){return arguments.length?(c=+n[0],f=+n[1],u):[c,f]},u.radius=function(n){return arguments.length?(e=+n,i=2*e*Math.sin(Math.PI/3),o=1.5*e,u):e},u.radius(1)};var n=d3.range(0,2*Math.PI,Math.PI/3),r=function(n){return n[0]},t=function(n){return n[1]}}();


function create_heatmap() {
    //The color of each hexagon
    var color = ["#63FBFF"]

    ///////////////////////////////////////////////////////////////////////////
    ////////////// Initiate SVG and create hexagon centers ////////////////////
    ///////////////////////////////////////////////////////////////////////////

    //svg sizes and margins
    var margin = {
        top: 30,
        right: 10,
        bottom: 10,
        left: 10
    };

    var width = Math.min(950, document.getElementById("heatmap-chart").offsetWidth - margin.left - margin.right);
    var height = Math.round(350/850 * width);

    //The number of columns and rows of the heatmap
    var MapColumns = 2,
        MapRows = 10;
        
    //The maximum radius the hexagons can have to still fit the screen
    var hexRadius = d3.min([width/((MapColumns + 0.5) * Math.sqrt(3)), height/((MapRows + 1/3) * 1.5)])+20;

    //Set the new height and width of the SVG based on the max possible
    width = MapColumns*hexRadius*Math.sqrt(3);
    heigth = MapRows*1.5*hexRadius+0.5*hexRadius;

    //Set the hexagon radius
    var hexbin = d3.hexbin().radius(hexRadius);

    //Calculate the center positions of each hexagon	
    var points = [];
    for (var i = 0; i < MapRows; i++) {
        for (var j = 0; j < MapColumns; j++) {
            points.push([hexRadius * j * 1.75, hexRadius * i * 1.5]);
        }//for j
    }//for i

    //Create SVG element
    var svg = d3.select("#heatmap-chart").append("svg")
        .attr("width", width + margin.left + margin.right)
        .attr("height", height + margin.top + margin.bottom)
        .append("g")
        .attr("transform", "translate(" + margin.left + "," + margin.top + ")");

    ///////////////////////////////////////////////////////////////////////////
    ////////////////////// Draw hexagons and color them ///////////////////////
    ///////////////////////////////////////////////////////////////////////////

    //Start drawing the hexagons
    svg.append("g")
        .selectAll(".hexagon")
        .data(hexbin(points))
        .enter().append("path")
        .attr("class", "hexagon")
        .attr("d", function (d) { return "M" + d.x + "," + d.y + hexbin.hexagon(); })
        .attr("stroke", function (d,i) { return "#ffffff10"; })
        .attr("stroke-width", "10px")
        .style("fill", function (d,i) { return color[i]; })
        .on("mouseover", mover)
        .on("mouseout", mout);

    //Function to call when you mouseover a node
    function mover(d) {
    var el = d3.select(this)
            .transition()
            .duration(10)		  
            .style("fill-opacity", 0.3);
    }//function mover

    //Mouseout function
    function mout(d) { 
        var el = d3.select(this)
        .transition()
        .duration(1000)
        .style("fill-opacity", 1);
    }//function mout
}//function create_heatmap

create_heatmap();
</script>