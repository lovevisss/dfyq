import Graph from './Graph';
export default Graph.extend({
	props:['player', 'opponent'],



	mounted(){
		this.render( {

			type: 'bar',

			data: {
                labels: ['Wins'],
                // ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [
                	{
                    label: this.player.name,
                    data: [this.player.wins],
                    // [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        // 'rgba(255, 99, 132, 0.2)',
                        this.color,
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
                		{
                    label: this.opponent.name,
                    data: [this.opponent.wins],
                    // [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        // 'rgba(255, 99, 132, 0.2)',
                        this.color,
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
                    borderColor:"red",
                	},
                ]
		}
	});
	// const chart = new Chart(this.$refs.canvas.getContext('2d'),datas);
	// this.legend = chart.generateLegend();


	}
})