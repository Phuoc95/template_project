!function(a){a.fn.tempGauge=function(b){function c(b){var c=document.createElement("canvas"),e=c.getContext("2d"),k=a(b).text(),l=parseFloat(k)||i.defaultTemp;c.width=i.width,c.height=2*i.width+i.labelSize,a(b).replaceWith(c);var m=d(l,i.minTemp,i.maxTemp-i.minTemp);e.lineWidth=i.borderWidth,e.strokeStyle=i.borderColor,e.fillStyle=i.fillColor,e.font=i.labelSize,e.textAlign="center",g(e,0,j/2,i.width,2*i.width-j,m),f(e,0,j/2,i.width,2*i.width-j),i.showLabel&&h(e,c.width/2,c.height-i.labelSize/5,k)}function d(a,b,c){var d=(a-b)/c;return d=d>1?1:d,d=d<0?0:d}function e(a,b,c,d,e,f,g){var h=2*Math.PI,i=d/3/2-f,j=b+d/2,k=e/6-f,l=b+d/2,m=c+e/6*5,n=Math.sqrt(Math.pow(k,2)-Math.pow(i/2,2),2),o=e/6*5-n-d/3/2,p=o*g,q=m-n-p,r=Math.asin(i/k);a.beginPath(),a.arc(j,q,i,0,h*-.5,!0),a.arc(l,m,k,.75*h-r,h*-.25+r,!0),a.closePath()}function f(a,b,c,d,f){e(a,b,c,d,f,0,1),a.stroke()}function g(a,b,c,d,f,g){e(a,b,c,d,f,i.borderWidth,g),a.fill()}function h(a,b,c,d){a.fillStyle=i.labelColor,a.fillText(d,b,c)}var i=a.extend({},a.fn.tempGauge.defaults,b),j=i.borderWidth,k=[];return this.each(function(a,b){k.push(c(b))}),a(k)},a.fn.tempGauge.defaults={borderColor:"#707C8E",borderWidth:4,defaultTemp:26,fillColor:"#A9BD7A",labelSize:15,labelColor:"#707C8E",maxTemp:40,minTemp:-10,showLabel:!1,width:100}}(jQuery);