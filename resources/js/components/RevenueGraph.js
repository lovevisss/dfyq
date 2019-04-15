import Graph from './Graph';




export default Graph.extend({


    template: `
		<div>
		    <div>
                <label for="">How many days?</label>
                <select v-model="range">
                    <option v-for="n in 365">{{n}}</option>
                </select>
            </div>
			<canvas width="800" height="600" ref="canvas"></canvas>
			<div class="legend" v-html="legend">{{ legend }}</div>
		</div>
		
		`,

    props:{
        range:{default: 30}
    }
});