import Graph from './Graph';


import Axios from 'axios';


export default Graph.extend({


    template: `
		<div>
		    <div>
                <label for="">How many days?</label>
                <select v-model="range" @change="reload">
                    <option v-for="n in 365">{{n}}</option>
                </select>
            </div>
			<canvas width="800" height="600" ref="canvas"></canvas>
			<div class="legend" v-html="legend">{{ legend }}</div>
		</div>
		
		`,

    props:{
        range:{default: 30}
    },

    methods:{
           fetchData(){
               return Axios.get(this.url, {
                   params:{
                       range: this.range,
                   }
               });
           },





    }
});