$(function(){var a,b,c=[];c.push([[2100,1],[3300,2],[3900,3],[4500,4],[5200,5],[3100,6]]),c.push([[1500,1],[2200,2],[2900,3],[2300,4],[3800,5],[1600,6]]),c.push([[600,1],[1300,2],[1900,3],[3500,4],[2700,5],[3200,6]]),a=[{label:"News",data:c[1]},{label:"Sports",data:c[0]},{label:"Movies",data:c[2]}],b={xaxis:{},grid:{hoverable:!0,clickable:!1,borderWidth:1,tickColor:"#353c48",borderColor:"#353c48"},series:{stack:!0},legend:{position:"se"},bars:{horizontal:!0,show:!0,barWidth:.25,fill:!0,lineWidth:0,fillColor:{colors:[{opacity:1},{opacity:1}]}},shadowSize:0,tooltip:!0,tooltipOpts:{content:"%s: %x"},colors:["#827CB6","#FD9EB4","#FFE0D4","#FEC5C1","#9F99C5"]};var d=$("#stacked-horizontal-chart");d.length&&$.plot(d,a,b)});