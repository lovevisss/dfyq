
import Vue from 'vue';
import Graph from './components/Graph';
import WinsGraph from './components/WinsGraph';

new Vue(
{
	el:'#app',
	components: { Graph, WinsGraph }
	// components: { WinsGraph }
});
