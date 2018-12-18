<template>
	<div>
		<svg :id="id" width="100%" :height="getHeight" font-family="sans-serif" font-size="10" text-anchor="middle"></svg>
	</div>


</template>

	<script>
		export default{
			props: ['data', 'height'], 
			data(){
				return {
					nodes: null,
					id: null
				}
			},
			computed:{
				getHeight(){
					if(this.height == null){
						return  375
					}
					return this.height
				}
			},
			methods: {
				draw(){
					var data =  this.nodes
						let svg = d3.select("#"+this.id);
		let width = document.body.clientWidth; // get width in pixels
		if(width > 574){
			width = document.querySelector("#"+this.id).clientWidth;
		}
		let height = +svg.attr('height');
		let centerX = width * 0.5;
		let centerY = height * 0.5;
		let strength = 0.5;
		let focusedNode;

		let format = d3.format(',d');

		let scaleColor = d3.scaleOrdinal(d3.schemeCategory20);

		// use pack to calculate radius of the circle
		let pack = d3.pack()
			.size([width , height ])
			.padding(10);

		let forceCollide = d3.forceCollide(d => d.r + 1);

		// use the force
		let simulation = d3.forceSimulation()
			// .force('link', d3.forceLink().id(d => d.id))
			.force('charge', d3.forceManyBody())
			.force('collide', forceCollide)
			// .force('center', d3.forceCenter(centerX, centerY))
			.force('x', d3.forceX(centerX ).strength(strength))
			.force('y', d3.forceY(centerY ).strength(strength));

		// reduce number of circles on mobile screen due to slow computation
		if ('matchMedia' in window && window.matchMedia('(max-device-width: 767px)').matches) {
			data = data.filter(el => {
				return el.value >= 50;
			});
		}

		let root = d3.hierarchy({ children: data })
			.sum(d => d.value);

		// we use pack() to automatically calculate radius conveniently only
		// and get only the leaves
		let nodes = pack(root).leaves().map(node => {
			// console.log('node:', node.x, (node.x - centerX) * 2);
			const data = node.data;
			return {
				x: centerX + (node.x - centerX) * 3, // magnify start position to have transition to center movement
				y: centerY + (node.y - centerY) * 3,
				r: 0, // for tweening
				radius: node.r, //original radius
				id: data.cat + '.' + (data.name.replace(/\s/g, '-')),
				cat: data.cat,
				name: data.name,
				value: data.value,
				icon: data.icon,
				desc: data.desc,
			}
		});
		simulation.nodes(nodes).on('tick', ticked);

		// svg.style('background-color', '#eee');
		let node = svg.selectAll('.node')
			.data(nodes)
			.enter().append('g')
			.attr('class', 'node')
			.call(d3.drag()
				.on('start', (d) => {
					if (!d3.event.active) simulation.alphaTarget(0.2).restart();
					d.fx = d.x;
					d.fy = d.y;
				})
				.on('drag', (d) => {
					d.fx = d3.event.x;
					d.fy = d3.event.y;
				})
				.on('end', (d) => {
					if (!d3.event.active) simulation.alphaTarget(0);
					d.fx = null;
					d.fy = null;
				}));

		node.append('circle')
			.attr('id', d => d.id)
			.attr('r', 0)
			.style('fill', '#ffffff00')
			.style('fill', "#ffc10799")
			.transition().duration(2000).ease(d3.easeElasticOut)
				.tween('circleIn', (d) => {
					let i = d3.interpolateNumber(0, d.radius);
					return (t) => {
						d.r = i(t);
						simulation.force('collide', forceCollide);
					}
				})

		 node.append("text").text(d => d.name).attr("fill", "#000");

		node.append('clipPath')
			.attr('id', d => `clip-${d.id}`)
			.append('use')
			.attr('xlink:href', d => `#${d.id}`);

		// custom

		// custom

		// display image as circle icon
		// node.filter(d => String(d.icon).includes('/'))
		// 	.append('image')
		// 	.classed('node-icon', true)
		// 	.attr('clip-path', d => `url(#clip-${d.id})`)
		// 	.attr('xlink:href', d => d.icon)
		// 	.attr('x', d => - d.radius *1.13)
		// 	.attr('y', d => - d.radius *1.13)
		// 	.attr('height', d => d.radius * 2 * 1.13 )
		// 	.attr('width', d => d.radius * 2 * 1.13)



		// display text as circle icon
		node.filter(d => !String(d.icon).includes('/'))
			.append('text')
			.classed('node-icon', true)
			.attr('clip-path', d => `url(#clip-${d.id})`)
			.selectAll('tspan')
			.data(d => d.icon.split(';'))
			.enter()
				.append('tspan')
				.attr('x', 0)
				.attr('y', (d, i, nodes) => (13 + (i - nodes.length / 2 - 0.5) * 10))
				.text(name => name);



		node.append('title')
			.text(d => (d.cat + '::' + d.name + '\n' + format(d.value)));




		let infoBox = node.append('foreignObject')
			.classed('circle-overlay hidden', true)
			.attr('x', -350 * 0.5 * 0.8)
			.attr('y', -350 * 0.5 * 0.8)
			.attr('height', 350 * 0.8)
			.attr('width', 350 * 0.8)
				.append('xhtml:div')
				.classed('circle-overlay__inner', true);

		infoBox.append('h2')
			.classed('circle-overlay__title', true)
			.text(d => d.name);

		infoBox.append('p')
			.classed('circle-overlay__body', true)
			.html(d => d.desc);

		node.on('click', (currentNode) => {
			d3.event.stopPropagation();
			return;
			// console.log('currentNode', currentNode);
			let currentTarget = d3.event.currentTarget; // the <g> el

			if (currentNode === focusedNode) {
				// no focusedNode or same focused node is clicked
				return;
			}
			let lastNode = focusedNode
			focusedNode = currentNode;

			simulation.alphaTarget(.1).restart();
			// hide all circle-overlay
			d3.selectAll('.circle-overlay').classed('hidden', true);
			d3.selectAll('.node-icon').classed('node-icon--faded', false);

			// don't fix last node to center anymore
			if (lastNode) {
				lastNode.fx = null;
				lastNode.fy = null;
				node.filter((d, i) => i === lastNode.index)
					.transition().duration(2000).ease(d3.easePolyOut)
					.tween('circleOut', () => {
						let irl = d3.interpolateNumber(lastNode.r, lastNode.radius);
						return (t) => {
							lastNode.r = irl(t);
						}
					})
					.on('interrupt', () => {
						lastNode.r = lastNode.radius;
					});
			}
			// if (!d3.event.active) simulation.alphaTarget(0.5).restart();

			d3.transition().duration(2000).ease(d3.easePolyOut)
				.tween('moveIn', () => {
					// console.log('tweenMoveIn', currentNode);
					let ix = d3.interpolateNumber(currentNode.x, centerX);
					let iy = d3.interpolateNumber(currentNode.y, centerY);
					let ir = d3.interpolateNumber(currentNode.r, centerY * 0.5);
					return function (t) {
						// console.log('i', ix(t), iy(t));
						currentNode.fx = ix(t);
						currentNode.fy = iy(t);
						currentNode.r = ir(t);
						simulation.force('collide', forceCollide);
					};
				})
				.on('end', () => {
					simulation.alphaTarget(0);
					let $currentGroup = d3.select(currentTarget);
					$currentGroup.select('.circle-overlay')
						.classed('hidden', false);
					$currentGroup.select('.node-icon')
						.classed('node-icon--faded', true);

				})
				.on('interrupt', () => {
					// console.log('move interrupt', currentNode);
					currentNode.fx = null;
					currentNode.fy = null;
					simulation.alphaTarget(0);
				});

		});
		// blur
		d3.select(document).on('click', () => {
			let target = d3.event.target;
			// check if click on document but not on the circle overlay
			if (!target.closest('#circle-overlay') && focusedNode) {
				focusedNode.fx = null;
				focusedNode.fy = null;
				simulation.alphaTarget(0.2).restart();
				d3.transition().duration(2000).ease(d3.easePolyOut)
					.tween('moveOut', function () {
						// console.log('tweenMoveOut', focusedNode);
						let ir = d3.interpolateNumber(focusedNode.r, focusedNode.radius);
						return function (t) {
							focusedNode.r = ir(t);
							simulation.force('collide', forceCollide);
						};
					})
					.on('end', () => {
						focusedNode = null;
						simulation.alphaTarget(0.2);
					})
					.on('interrupt', () => {
						simulation.alphaTarget(0);
					});

				// hide all circle-overlay
				d3.selectAll('.circle-overlay').classed('hidden', true);
				d3.selectAll('.node-icon').classed('node-icon--faded', false);
			}
		});

		function ticked() {
			node
				.attr('transform', d => `translate(${d.x},${d.y})`)
				.select('circle')
					.attr('r', d => d.r);
		}

				}
			},
			mounted(){
				this.nodes = this.data;
				var data = this.nodes;
				this.id = "svg"+this._uid
				if(data == null){
					data = [];

					var i = 0;
					var val = 100;
					axios.get('/projects?random=true').then((response) => {
						response.data.forEach((v, k)=> {
									// {
									// 	cat: 'language', name: '', value: 250,
									// 	icon: '/d3/img/hex.png',
									// 	desc: `
									// 	`
									// },
									i++
									var val = 100 + (20*i)
							var obj = {cat: "Team", name: v.name, title: v.name, value: val, icon: '/d3/img/hex.png'};
							data.push(obj)
						});
						this.nodes = data;
							setTimeout(()=> {this.draw()}, 1000);
					})
					return 
				}else{
					var data =[];
					var i = 0;
					var val = 100;
						this.nodes.forEach((v, k)=> {
									// {
									// 	cat: 'language', name: '', value: 250,
									// 	icon: '/d3/img/hex.png',
									// 	desc: `
									// 	`
									// },
									i++
									var val = 100 + (20*i)
							var obj = {cat: "Team", name: v.name, title: v.name, value: val, icon: '/assets/img/circle.png'};
							data.push(obj)
						});		
						this.nodes = data			
					setTimeout(()=> {this.draw()}, 1000);
				}
			},

		}
	</script>