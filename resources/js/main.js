
import Vue from 'vue';
import Graph from './components/Graph';
import WinsGraph from './components/WinsGraph';
import RevenueGraph from './components/RevenueGraph';
new Vue(
{
	el:'#app',
	components: { Graph, WinsGraph, RevenueGraph }
	// components: { WinsGraph }
});
