var $border_color="#eee",$grid_color="#eee",$default_black="#666";$(function(){var a,b;a=[{label:"HTML",data:Math.floor(100*Math.random()+190)},{label:"CSS",data:Math.floor(100*Math.random()+220)},{label:"PHP",data:Math.floor(100*Math.random()+370)},{label:"jQuery",data:Math.floor(100*Math.random()+120)},{label:"RUBY",data:Math.floor(100*Math.random()+430)}],b={series:{pie:{show:!0,innerRadius:0,stroke:{width:0}}},grid:{hoverable:!0,clickable:!1,borderWidth:0,tickColor:"#353c48",borderColor:"#353c48"},legend:{position:"nw"},shadowSize:0,tooltip:!0,tooltipOpts:{content:"%s: %y"},colors:["#827CB6","#9F99C5","#FD9EB4","#FEC5C1","#FFE0D4"]};var c=$("#pie-chart");c.length&&$.plot(c,a,b)});