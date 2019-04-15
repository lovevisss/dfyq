import Vue from 'vue';
import Axios from 'axios';
import Chart from 'chart.js';
export default Vue.extend({
	template: `
		<div>
			<canvas width="800" height="600" ref="canvas"></canvas>
			<div class="legend" v-html="legend">{{ legend }}</div>
		</div>
		`,

	props:['url'],

	data() {
		return { legend: ''}
	},

	mounted(){
	        this.load();


		},

		methods:{
			render(datas){
					var context = this.$refs.canvas.getContext('2d');
					const chart = new Chart(context, datas);
					this.legend = chart.generateLegend();
			},

			load(){
			    //fetch the data

                var _this = this;
                this.fetchData()
                    .then(function (res) {
                        _this.render({

                            type: 'line',
                            data: {
                                labels: Object.keys(res.data),
                                // ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                                datasets: [{
                                    label: '# of Votes',
                                    data: Object.values(res.data),
                                    // [12, 19, 3, 5, 2, 3],
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        // this.color,
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)'
                                    ],
                                    borderColor: [
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)'
                                    ],
                                    borderWidth: 1,
                                    borderColor:"green",
                                },

                                    // {
                                    //    label: 'Ohter',
                                    //    data: [56,54,33],
                                    //    // [12, 19, 3, 5, 2, 3],
                                    //    backgroundColor: [
                                    //        'rgba(255, 99, 132, 0.2)',
                                    //        // this.color,
                                    //        'rgba(54, 162, 235, 0.2)',
                                    //        'rgba(255, 206, 86, 0.2)',
                                    //        'rgba(75, 192, 192, 0.2)',
                                    //        'rgba(153, 102, 255, 0.2)',
                                    //        'rgba(255, 159, 64, 0.2)'
                                    //    ],
                                    //    borderColor: [
                                    //        'rgba(255, 99, 132, 1)',
                                    //        'rgba(54, 162, 235, 1)',
                                    //        'rgba(255, 206, 86, 1)',
                                    //        'rgba(75, 192, 192, 1)',
                                    //        'rgba(153, 102, 255, 1)',
                                    //        'rgba(255, 159, 64, 1)'
                                    //    ],
                                    //    borderWidth: 1,
                                    //    borderColor:"red",
                                    // },





                                ]
                            }



                        });
                    });
            },
            fetchData(){

                return Axios.get(this.url);

            }
		},
		
	})