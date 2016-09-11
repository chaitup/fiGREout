var A,B,C;
var R,gcText,r,rec;
var SelectedRaphaelItemOnTheStage;
var paperstroke="#888";
var paperstrokewidth = 4;
var masterBackground ;
var Largehandshape;
var PencilOn = true;
var RemoveRaphaelAllhandles;
var g_masterPathArray;
var g_masterPaper;
var   globalNumber = 0;
var   globalCurveNumber = 0;
var   globalArray = new Array(10);
var   globalCurveArray = new Array(10);
var ruledPaper;
var ruledRectangles = [];
var SelectedRaphaetextitem;


Array.prototype.remove = function(from, to) {
  var rest = this.slice((to || from) + 1 || this.length);
  this.length = from < 0 ? this.length + from : from;
  return this.push.apply(this, rest);
};



 function setHandleSizeZero(paper){
 
 		   	 paper.forEach(function (el) {
										
                              if((el.type =="circle" || el.type =="rect" || el.type =="path" ) && el.data("type") == "sprite") {
							   

							         el.freeT.setOpts({draw: [ 'bbox'],attrs: { fill: "#fff", stroke: "#000","stroke-width":1 },size:0, drag:true}); 
					            }
					 
				                     	 });	
 
 }
 

















function lineDistance( point1, point2 )
{
  var xs = 0;
  var ys = 0;
 
  xs = point2.x - point1.x;
  xs = xs * xs;
 
  ys = point2.y - point1.y;
  ys = ys * ys;
 
  return Math.sqrt( xs + ys );
}








   function UIinterface() 
   
   {
  
                   
  
  
  $(function(){
    /*
     * this swallows backspace keys on any non-input element.
     * stops backspace -> back
     */
    var rx = /INPUT|SELECT|TEXTAREA/i;

    $(document).bind("keydown keypress", function(e){
        if( e.which == 8 ){ // 8 == backspace
            if(!rx.test(e.target.tagName) || e.target.disabled || e.target.readOnly ){
                e.preventDefault();
            }
        }
    });
});
  
  
  
  
  
  
  
  
  
 R = Raphael(document.getElementById('svgContainer'),"100%","100%");
 
 
  for(i=1;i<21;i++){
 
 ruledRectangles[i] = R.rect(5,i*25,'99%',0.5).attr({"stroke":"#eee"});
 // R.rect(i*20,0,0.5,'100%').attr({"stroke":"#eee"});
 }
 
  
 ruledPaper =  R.set();
 ruledPaper.push(
  
 R.rect(50,0,0.5,'100%').attr({"stroke":"red"}),
 R.rect(55,0,0.5,'100%').attr({"stroke":"red"})
 
		
 );

ruledPaper.attr({"font-size": 14});
 


    //R.text(50, 50).attr({text:"<p>H\nI<p>"});;






 masterBackground = R.rect(0,0,'100%','100%').attr({"stroke":"#eee","stroke-width":1});
 masterBackground.attr("fill", "#fff");
 masterBackground.toBack();
  
  
                  
 // R.path("M100,100 C200,200 400,200 500,100");
  
  
  
  




 

/*var cp = Raphael.colorpicker(document.getElementById('propertiespanel').offsetLeft,document.getElementById('propertiespanel').offsetTop  , 100, "#eee", 
document.getElementById('propertiespanel')); 
cp.onchange = function(item){

SelectedRaphaelItemOnTheStage.attr({"fill":item});
}*/

					    $(TA.node).trigger("click");     
		
            };
			

		
		
		
		
	   function Newtextfield()
		{
		
		      var C1 = new tObject(R);
				  
	   R.freeTransform(C1.raph).setOpts({draw: [ 'bbox' ],attrs: { fill: "#fff", stroke: "#000" },size:0, drag:true,rotate: true });	  
				  
		document.getElementById('fname').value = "in their 81-year-old Test history, India had won three consecutive Tests ";
	    
		
		C1.raph.click(function(){
		
		
	    document.getElementById('fname').value = this.attr("text");
	    SelectedRaphaelItemOnTheStage = this;
		SelectedRaphaetextitem = this;		  

		 
		 //  $('#fname').focus();
		   
	        var v = document.getElementById('fname').value;
         document.getElementById('fname').value= '';
         document.getElementById('fname').value = v;
		 
		 

				                          });
										  
						
					      
						 var mouseclickEvent = document.createEvent ("MouseEvent");
                         mouseclickEvent.initMouseEvent("click");		
                         C1.raph.node.dispatchEvent(mouseclickEvent);   					  
										  
										  
										  
										  
										  
										  
										  
										  
		
		    }
		
		
		

  function myFunction(){
  

  
 var Input = document.getElementById('fname');
 

if(Input.value.length == 100)
{

Input.value = Input.value + "\n";

}

  
 var  str = Input.value;
// show last character in the string

// remove last character from string if a period

for(var i =0 ; i < str.length; i++)

{

if(str.charAt(i) == "^" )

{ 

//alert(str);

str = str.replace('^', returnunicodeforsuper(str.charAt(i+1))); 
 //returnunicode(str.charAt(i+1))'
 //delete chars at i and i+1 and insert unicode at i
 str = str.substr(0,i+1) + '' + str.substr(i+1+1);

// str.setCharAt(str,i,"1");
 //str.setCharAt(str,i+1,"1");
  SelectedRaphaetextitem.attr({text:str});

 }

 if(str.charAt(i) == "(" && str.charAt(i+1) == "s" && str.charAt(i+2) == "q" && str.charAt(i+3) == "r" && str.charAt(i+4) == "t" && str.charAt(i+5) == ")" )

{ 

//alert(str);

  str = str.replace('(sqrt)', '\u221A'); 
 //returnunicode(str.charAt(i+1))'
 //delete chars at i and i+1 and insert unicode at i
 //str = str.substr(0,i+1) + '' + str.substr(i+1+1);

// str.setCharAt(str,i,"1");
 //str.setCharAt(str,i+1,"1");
  SelectedRaphaetextitem.attr({text:str});

 } 
 
 
 if(str.charAt(i) == "i" && str.charAt(i+1) == "n" && str.charAt(i+2) == "t" && str.charAt(i+3) == "e" && str.charAt(i+4) == "g" && str.charAt(i+5) == "r" && str.charAt(i+6) == "a" && str.charAt(i+7) == "l" )
 
{ 

//alert(str);

  str = str.replace('integral', '\u221D'); 
 //returnunicode(str.charAt(i+1))'
 //delete chars at i and i+1 and insert unicode at i
 //str = str.substr(0,i+1) + '' + str.substr(i+1+1);

// str.setCharAt(str,i,"1");
 //str.setCharAt(str,i+1,"1");
  SelectedRaphaetextitem.attr({text:str });

 } 



 
 else
 {
 
    SelectedRaphaetextitem.attr({text:str});

 }

 
 
  
}

 
}
             
      

	  
	  
  function returnunicodeforsuper(character)
  
  {
  
  
  
    if(character=="2"){

	
	//alert("\u2082");
	return "\u00B2";
	
	                   }

	
	 if(character=="3"){

	return "\u00B3";
	
	}
	
	

  if(character=="4"){

	return "\u2074";
	
	}
	
	
	
if(character=="1"){

	return "\u00B9";
	
	}
	

	
if(character == "-"){

	return "\u207B";
	
}
	
if(character == "0"){

	return "\u2070";
	
}
		
	
	
  return '';
   }

  
  
  function returnunicodeforsub(character)
  
  {
    
  if(character=="4"){

	return "\u2084";
	
	}
  
  return '';
  

  }
  

  


function setCharAt(str,index,chr) {
    if(index > str.length-1) return str;
    return str.substr(0,index) + chr + str.substr(index+1);
}




		



var arrayOfRegularPaths = [];
function AllowLineDrawing()
{
var refe;
var Globalpath;
var NumberofthePath = 0;
var FirstTime = true;
var pathref = ""; 
function Line(startX, startY, endX, endY, raphael) {

    var start = {
        x: startX,
        y: startY
    };
    var end = {
        x: endX,
        y: endY
    };
	
    var curvePoint2 = {
       x :(start.x + end.x)/2,
       y :(start.y + end.y)/2
    };
	
	
	
    var getPath = function() {

			//document.getElementById('fname').value  += end.x,end.y;
	return "L"  + start.x + "," +  start.y + " " 
	+ (end.x) + "," +  (end.y);
	
	
    }
    var redraw = function() {
	    
		
        globalArray[globalNumber].attr("path", pathref + getPath()); 
    }

	
    return {
        updateStart: function(x, y) {
            start.x = x;
            start.y = y;
            redraw();
            return this;
        },
        updateEnd: function(x, y) {
            end.x = x;
            end.y = y;
            redraw();
            return this;
        }
	

		
    };
};
	
	

	



          var array=[]; 
 

    $("#svgContainer").mousedown(
     
    function(e) {
	
	  if (!e.offsetX) {
        e.offsetX = (e.pageX - $("#svgContainer").offset().left);
        e.offsetY = (e.pageY - $("#svgContainer").offset().top);
       }
        x = e.offsetX;
        y = e.offsetY;
		
		
	
		if(FirstTime)
		{
		
		globalArray[globalNumber] = R.path("M" + " " + x  + " " + y);
		
		}
		
	    FirstTime = false;

		pathref = globalArray[globalNumber].attr("path");
	    line = Line(x, y, x, y, R);
	
        $("#svgContainer").bind('mousemove', function(e) {
		
			  if (!e.offsetX) {
        e.offsetX = (e.pageX - $("#svgContainer").offset().left);
        e.offsetY = (e.pageY - $("#svgContainer").offset().top);
              }
            x = e.offsetX;
            y = e.offsetY;
            line.updateEnd(x, y);
		
        });
    });

    $("#svgContainer").dblclick(

		 

    function(e) {
         $("#svgContainer").unbind('mousemove');
		 $("#svgContainer").unbind('mousedown');
    
 document.getElementById('svgContainer').style.cursor ='default';
	     	 // alert();
			 
	//	 var arr = globalArray[globalNumber].attr("path").toString();
             // var normalized_path = arr.toString();
             // R.path(normalized_path).attr({stroke: "red", "stroke-width":6});
		//var result =  arr.substr(arr.lastIndexOf("S"));
			 
	//	var finalresult = arr.replace(result,"");
	
			 
	//	document.getElementById('fname').value = globalArray[globalNumber].attr("path");
		
		
		
		//globalArray[globalNumber].attr({"path":finalresult});
		
		
			  	   SelectedRaphaelItemOnTheStage = globalArray[globalNumber];
                   arrayOfRegularPaths.push(globalArray[globalNumber]);  
			  
                   arrayOfRegularPaths[arrayOfRegularPaths.length -1].freeT =  R.freeTransform(globalArray[globalNumber].attr({"fill":"white","fill-opacity":0}).data({"type": "sprite","number":NumberofthePath }).click(
		
		   
		
		
		function(){
		
	     refe = this;
	    
	   		R.forEach(function (el) {
                              if((el.type =="circle" || el.type =="rect" || el.type =="path") && el.data("type") == "sprite") {
							   
    
	
	
	                                 //  alert(refe.type);
							           el.freeT.setOpts({draw: [ 'bbox'],attrs: {"stroke-width":1 },size:0, drag:true});

								       globalArray[globalNumber] = refe;
									   SelectedRaphaelItemOnTheStage =  globalArray[globalNumber];
								       globalArray[globalNumber].freeT.setOpts({draw: [ 'bbox'],attrs: { fill: "#fff", stroke: "#000","stroke-width":1 },size:4, drag:true});
				  		       
								  
								
							            }
										
										
										
		
                                            });	
	  
	  
	  
	           }
	  
	  
	  
	  
	  )
	  
	  
	                        ).setOpts({draw: [ 'bbox' ],attrs: { fill: "#eee", stroke: "#000" },size:4, drag:true});

             globalNumber = globalNumber + 1;
			 
          for (var i = 0; i <  arrayOfRegularPaths.length - 1; i++) {
              arrayOfRegularPaths[i].freeT.setOpts({draw: [ 'bbox'],attrs: {"stroke-width":1 },size:0, drag:true});

                      }

  
			
                    

	  

	  	$('body').keydown(function(e) {
			 
                    if(e.keyCode == 8){
					      // alert(globalArray[globalNumber]);
					
						
          for (var i = 0; i <  arrayOfRegularPaths.length ; i++) {
		  
		               if(arrayOfRegularPaths[i].data("number") ==  SelectedRaphaelItemOnTheStage.data("number")){
					   
					   
					       		   
					        SelectedRaphaelItemOnTheStage.freeT.unplug();
						    arrayOfRegularPaths.splice (i, 1);
                            SelectedRaphaelItemOnTheStage.remove();
					   
			
			
					   
					   
					              }
		  


                      }
							
							
					
					     }
                    });	
    // $("#svgContainer").unbind('dblclick');

	 //alert((Raphael.pathBBox(node.attr("path"))).height);
	

		
		
	

     
    });


	}	
		
           function AllowScribble()
{
		

                     if(!perimissionStatusHand){
					 
					 
					 return false;
					 
					 }
 
 
 
   
   				    masterBackground.mousemove(function (event) {
                    var evt = event;
                    var IE = document.all?true:false;
                    var x, y;
                    if (IE) {
                        x = evt.clientX + document.body.scrollLeft +
						document.documentElement.scrollLeft;
                        y = evt.clientY + document.body.scrollTop +
						document.documentElement.scrollTop;
                    }
                    else {
					//alert(document.getElementById('svgContainer'));
                       // x = evt.pageX - R.canvas.offsetLeft;
                       // y = evt.pageY - R.canvas.offsetTop;
					   
					   	  if (!evt.offsetX) {
                              evt.offsetX = (evt.pageX - $("#svgContainer").offset().left);
                              evt.offsetY = (evt.pageY - $("#svgContainer").offset().top);
                         }
					   
					   
					   
					     x = evt.offsetX;
                         y = evt.offsetY;
				
                    }

                    // subtract paper coords on page
                    this.ox = x;
                    this.oy = y;
					
                });
   
   
					$("#svgContainer").mouseup(function(){
		
	    
		 
		                                      });
   
  

                var start = function () {
                    g_masterPathArray = new Array();
                },
                move = function (dx, dy) {
                    if (g_masterPathArray.length == 0) {
                        g_masterPathArray[0] = ["M",this.ox,this.oy];
						
						
                        g_masterDrawingBox = R.path(g_masterPathArray);
                        g_masterDrawingBox.attr({stroke:paperstroke,"stroke-width": paperstrokewidth});
                    }
                    else
                        g_masterPathArray[g_masterPathArray.length] =["L",this.ox,this.oy];

                        g_masterDrawingBox.attr({path: g_masterPathArray});
					
					 
					
                },
                up = function () {
                   Largehandshape = g_masterDrawingBox;
				   
				   g_masterDrawingBox.attr({"fill":"#fff","fill-opacity":0});
				   SelectedRaphaelItemOnTheStage = g_masterDrawingBox;
				   
				   Largehandshape.freeT = R.freeTransform(g_masterDrawingBox.data("type", "sprite").click(function(){
				   
				   	         SelectedRaphaelItemOnTheStage = this;
							
						  	   		R.forEach(function (el) {
                              if((el.type =="circle" || el.type =="rect" || el.type =="path" ) && el.data("type") == "sprite") {
							   

							           el.freeT.setOpts({draw: [ 'bbox'],attrs: { fill: "#fff", stroke: "#000","stroke-width":1 },size:0, drag:true});
									   
									   
								        SelectedRaphaelItemOnTheStage.freeT.setOpts({draw: [ 'bbox'],attrs: { fill: "#fff", stroke: "#000","stroke-width":1 },size:3, drag:true});
				  		       
								  
								
							            }
										
										
										
		
                                            });	
	        
				   
				   
				   
				   
				   })).setOpts({ draw: ['bbox'],attrs: { fill: "#eee", stroke: "#000" },size:3, drag:true});	 
					
					
					                masterBackground.undrag();
					
					   document.getElementById('svgContainer').style.cursor ='default';
					   
                };

			
				
					$('body').keydown(function(e) {
			 
                    if(e.keyCode == 8){
					      // alert(globalArray[globalNumber]);
					        SelectedRaphaelItemOnTheStage.freeT.unplug();
                            SelectedRaphaelItemOnTheStage.remove();
					
					     }
                    });	
				
				
				
				
				
				
				
				
				
                masterBackground.drag(move, start, up);

		
             
			 
			 
         masterBackground.click(function(){
		 
	                  R.forEach(function (el) {
                              if((el.type =="circle" || el.type =="rect" || el.type =="path" ) && el.data("type") == "sprite")       {
							   

							           el.freeT.setOpts({draw: [ 'bbox'],attrs: { fill: "#fff", stroke: "#000","stroke-width":1 },size:0, drag:true});
				
							
				  		       
								  
								
							            }
										
										
										
		
                                            });	
											
		             
		 
		 
		 });
		 
		 
		 
		 
		 

			
			}



			
			
			
			
			
			
			
			

var arrayOfRegularCurvepaths = [];

function allowCurveDrawing()
{

var refeCurve;
var CutmullPoints = "";
var curveNumberofthePath = 0;
var curveFirstTime = true;

function Curve(startX, startY, endX, endY, raphael) {

    var start = {
        x: startX,
        y: startY
    };
    var end = {
        x: endX,
        y: endY
    };
	
    var curvePoint2 = {
       x :(start.x + end.x)/2,
       y :(start.y + end.y)/2
    };
	
	
	
    var getPath = function() {

			//document.getElementById('fname').value  += end.x,end.y;

	
	
    }
    var redraw = function() {
	    
		   globalCurveArray[globalCurveNumber].attr("path", CutmullPoints + " " + end.x + " " + end.y ); 
   
    }

	
    return {
        updateStart: function(x, y) {
            start.x = x;
            start.y = y;
            redraw();
            return this;
        },
        updateEnd: function(x, y) {
            end.x = x;
            end.y = y;
            redraw();
            return this;
        }
	

		
    };
};
	
	

    $("#svgContainer").mousedown(
     
    function(e) {
	
	  if (!e.offsetX) {
        e.offsetX = (e.pageX - $("#svgContainer").offset().left);
        e.offsetY = (e.pageY - $("#svgContainer").offset().top);
       }
        x = e.offsetX;
        y = e.offsetY;
		
		
	
		if(curveFirstTime)
		{

	    CutmullPoints =  "M" + " " + x  + " " + y + " " + "R" ;
		globalCurveArray[globalCurveNumber] = R.path("M" + " " + x  + " " + y);
		
		}
		
		
				if(!curveFirstTime){
		
	        CutmullPoints =  CutmullPoints + " " + x + " " + y;
		
		       }
		
		

	    curveFirstTime = false;

	    curve = Curve(x, y, x, y, R);
	
        $("#svgContainer").bind('mousemove', function(e) {
		
			  if (!e.offsetX) {
        e.offsetX = (e.pageX - $("#svgContainer").offset().left);
        e.offsetY = (e.pageY - $("#svgContainer").offset().top);
              }
            x = e.offsetX;
            y = e.offsetY;
            curve.updateEnd(x, y);
		
        });
    });

    $("#svgContainer").dblclick(

		 

    function(e) {
         $("#svgContainer").unbind('mousemove');
		 $("#svgContainer").unbind('mousedown');
    
 document.getElementById('svgContainer').style.cursor ='default';
	     	 // alert();
			 
	//	 var arr = globalArray[globalNumber].attr("path").toString();
             // var normalized_path = arr.toString();
             // R.path(normalized_path).attr({stroke: "red", "stroke-width":6});
		//var result =  arr.substr(arr.lastIndexOf("S"));
			 
	//	var finalresult = arr.replace(result,"");
	
			 
		//document.getElementById('fname').value = globalCurveArray[globalCurveNumber].attr("path");
		
		
		
		//globalArray[globalNumber].attr({"path":finalresult});
		
		
			  	   SelectedRaphaelItemOnTheStage = globalCurveArray[globalCurveNumber];
                   arrayOfRegularCurvepaths.push(globalCurveArray[globalCurveNumber]);  
			  
                   arrayOfRegularCurvepaths[arrayOfRegularCurvepaths.length -1].freeT =  R.freeTransform(globalCurveArray[globalCurveNumber].attr({"fill":"white","fill-opacity":0}).data({"type": "sprite","number":curveNumberofthePath + 50 }).click(
		
		   
		
		
		function(){
		
	     refeCurve = this;
	    
	   		R.forEach(function (el) {
                              if((el.type =="circle" || el.type =="rect" || el.type =="path") && el.data("type") == "sprite") {
							   
    
	
	
	                                 //  alert(refe.type);
							           el.freeT.setOpts({draw: [ 'bbox'],attrs: {"stroke-width":1 },size:0, drag:true});

								       globalCurveArray[globalCurveNumber] = refeCurve;
									   SelectedRaphaelItemOnTheStage =  globalCurveArray[globalCurveNumber];
								       globalCurveArray[globalCurveNumber].freeT.setOpts({draw: [ 'bbox'],attrs: { fill: "#fff", stroke: "#000","stroke-width":1 },size:4, drag:true});
				  		       
								  
								
							            }
										
										
										
		
                                            });	
	  
	  
	  
	           }
	  
	  
	  
	  
	  )
	  
	  
	                        ).setOpts({draw: [ 'bbox' ],attrs: { fill: "#eee", stroke: "#000" },size:4, drag:true});

             globalCurveNumber = globalCurveNumber + 1;
			 
          for (var i = 0; i <  arrayOfRegularCurvepaths.length - 1; i++) {
              arrayOfRegularCurvepaths[i].freeT.setOpts({draw: [ 'bbox'],attrs: {"stroke-width":1 },size:0, drag:true});

                      }

  
			
                    

	  

	  	$('body').keydown(function(e) {
			 
                    if(e.keyCode == 8){
					      // alert(globalArray[globalNumber]);
					
						
          for (var i = 0; i <  arrayOfRegularCurvepaths.length ; i++) {
		  
		               if(arrayOfRegularCurvepaths[i].data("number") ==  SelectedRaphaelItemOnTheStage.data("number")){
					   
					   
					       		   
					        SelectedRaphaelItemOnTheStage.freeT.unplug();
						    arrayOfRegularCurvepaths.splice (i, 1);
                            SelectedRaphaelItemOnTheStage.remove();
					   
			
			
					   
					   
					              }
		  


                      }
							
							
					
					     }
                    });	
    // $("#svgContainer").unbind('dblclick');

	 //alert((Raphael.pathBBox(node.attr("path"))).height);
	

		
		
	

     
    });


	}				
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

  