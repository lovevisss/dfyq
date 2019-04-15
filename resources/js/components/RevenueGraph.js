import Graph from './Graph';




export default Graph.extend({


    template: `
		<div>
		    <div>
                <label for="">How many days?</label>
                <select name="" id="" v-for="n in 365">{{n}}</select>
            </div>
			<canvas width="800" height="600" ref="canvas"></canvas>
			<div class="legend" v-html="legend">{{ legend }}</div>
		</div>
		
		`,

    props:{
        range:{default: 30}
    }
});