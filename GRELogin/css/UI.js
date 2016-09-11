var A,B,C;
var R,gcText,r,rec;
var SelectedRaphaelItemOnTheStage;
var paperstroke="#888";
var paperstrokewidth = 2;
var masterBackground ;
var Largehandshape;
var PencilOn = true;
var g_masterPathArray;
var g_masterPaper;
var   globalNumber = 0;
var   globalCurveNumber = 0;
var   globalArray = new Array(20);
var   globalCurveArray = new Array(20);
var ruledPaper;
var ruledRectangles = [];
var SelectedRaphaetextitem;
		
		function alignTop(t) {
    var b = t.getBBox();
    var h = Math.abs(b.y2) - Math.abs(b.y) + 1;

    t.attr({
        'y': b.y + h
    });
}

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
  
  
  
  
  
  
  
  
  
R = Raphael(document.getElementById('svgContainer'),"100%","500");
 
R.canvas.setAttributeNS("http://www.w3.org/XML/1998/namespace", "xml:space","preserve");

 // var dbl = R.text(50, 50, "\tRaphael\n123\n345&nbsp;");
  
  
 

  for(i=1;i<21;i++){
 
 //ruledRectangles[i] = R.rect(5,i*25,'99%',0.5).attr({"stroke":"#eee"});
 // R.rect(i*20,0,0.5,'100%').attr({"stroke":"#eee"});
 }
 
  
 ruledPaper =  R.set();
 ruledPaper.push(
  
 //R.rect(50,0,0.5,'100%').attr({"stroke":"red"}),
 //R.rect(55,0,0.5,'100%').attr({"stroke":"red"})
 
		
 );

ruledPaper.attr({"font-size": 14});
 



 masterBackground = R.rect(0,0,'100%','100%').attr({"stroke":"#eee","stroke-width":1});
 masterBackground.attr("fill", "#fff");
 masterBackground.toBack();
  
  
                  
 // R.path("M100,100 C200,200 400,200 500,100");
  
  
/*var cp = Raphael.colorpicker(document.getElementById('propertiespanel').offsetLeft,document.getElementById('propertiespanel').offsetTop  , 100, "#eee", 
document.getElementById('propertiespanel')); 
cp.onchange = function(item){

SelectedRaphaelItemOnTheStage.attr({"fill":item});
}*/

					  //  $(TA.node).trigger("click");     
		
            };
			

		
		
		
		
	   function Newtextfield()
		{
		
		         setHandleSizeZero(R);
				 var C1 = new tObject(R);
			  
		
	  C1.raph.freeT = R.freeTransform(C1.raph).setOpts({attrs: { fill: "#fff", stroke: "#000" }, size: 0 , drag:true , rotate: true});	  
				


	   document.getElementById('fname').value = "Pratcie Math";
	    
		
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
 


Input.value = Input.value.replace(/<br>/g, "\n").replace("\t", "      ")


  
 var  str = Input.value;
 
  SelectedRaphaetextitem.attr({text:str})
  
 $('tspan').css({"white-space": "pre", "line-height" : 10});


 
 
 
 
 
 
// show last character in the string

// remove last character from string if a period

/* for(var i =0 ; i < str.length; i++)

{ */

/* if(str.charAt(i) == "^" )

{ 

//alert(str);

str = str.replace('^', returnunicodeforsuper(str.charAt(i+1))); 
 //returnunicode(str.charAt(i+1))'
 //delete chars at i and i+1 and insert unicode at i
 str = str.substr(0,i+1) + '' + str.substr(i+1+1);

// str.setCharAt(str,i,"1");
 //str.setCharAt(str,i+1,"1");
  SelectedRaphaetextitem.attr({text:str});

 } */

 
 
 
 
 
 
/* if(str.charAt(i) == "_" )

{ 

//alert(str);

str = str.replace('_', returnunicodeforsub(str.charAt(i+1))); 
 //returnunicode(str.charAt(i+1))'
 //delete chars at i and i+1 and insert unicode at i
 str = str.substr(0,i+1) + '' + str.substr(i+1+1);

// str.setCharAt(str,i,"1");
 //str.setCharAt(str,i+1,"1");
  SelectedRaphaetextitem.attr({text:str});
   
 }
 */
 






 
 
  
/* } */

 
}
             
      

	  
	  
  function returnunicodeforsuper(character)
  
  {
  
  
  
 var supercode = (character == "1")? "\u00B9" :(character == "2")?"\u00B2" :(character == "3")?"\u00B3" :(character == "4")?"\u2074":(character == "5")?"\u2075":(character == "6")?"\u2076" :(character == "7")?"\u2077" :(character == "8")?"\u2078" :(character == "9")?"\u2079" :(character == "+")?"\u207A" :(character == "-")?"\u207B" :(character == "=")?"\u207C" :(character == "n")?"\u207F" : (character == "0")?"\u2070" : (character == "a")?"\u1d43" :"false"; 
  
  return supercode;
  

  }
  

    function returnunicodeforsub(character)
  
  {
  
  
  
 var subcode = (character == "1")? "\u2081" :(character == "2")?"\u2082" :(character == "3")?"\u2083" :(character == "4")?"\u2084":(character == "5")?"\u2085":(character == "6")?"\u2086" :(character == "7")?"\u2087" :(character == "8")?"\u2088" :(character == "9")?"\u2089" :(character == "+")?"\u208A" :(character == "-")?"\u208B" :(character == "=")?"\u208C" :"false"; 
  
  return subcode;
  

  }
  


function setCharAt(str,index,chr) {
    if(index > str.length-1) return str;
    return str.substr(0,index) + chr + str.substr(index+1);
}




		


// Stright line drawing

/* var arrayOfRegularPaths = [];

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

	      
		
			  	   SelectedRaphaelItemOnTheStage = globalArray[globalNumber];
                   arrayOfRegularPaths.push(globalArray[globalNumber]);
              			   
			       console.log(globalArray[globalNumber]);
                   arrayOfRegularPaths[arrayOfRegularPaths.length -1].freeT =  R.freeTransform(globalArray[globalNumber].attr({"fill":"white","fill-opacity":0}).data({"type": "sprite","number": NumberofthePath }).click(
		
		   
		
		
		function(){
		      globalNumber = globalNumber + 1;	
	     refe = this;
	    
	   		R.forEach(function (el) {
                              if((el.type =="circle" || el.type =="rect" || el.type =="path") && el.data("type") == "sprite") {
							   
    
	
	
	              
							           el.freeT.setOpts({draw: [ 'bbox'],attrs: {"stroke-width":1 },size:0, drag:true});

								       globalArray[globalNumber] = refe;
									   SelectedRaphaelItemOnTheStage =  globalArray[globalNumber];
								       globalArray[globalNumber].freeT.setOpts({draw: [ 'bbox'],attrs: { fill: "#fff", stroke: "#000","stroke-width":1 },size:4, drag:true});
				  		       
								  
								  
							     
								  
								  
								  
								  
								  
								  
								  
								  
								  
								  
								
							            }
										
										
										
		
                                            });	
	  
	  
	  
	           }
	  
	  
	  
	  
	  )
	  
	  
	                        ).setOpts({draw: [ 'bbox' ],attrs: { fill: "#eee", stroke: "#000" },size:4, drag:true});

                         
			 
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


		
		
	

     
    });


	} */
	
	
	//curves
	
	
	
	
	
	//Cutmull curves,,,,,,,,,,,,,,,,,,,,,
	
/* var arrayOfRegularCurvepaths = [];

function allowCurveDrawing()
{

var refeCurve;
var CutmullPoints = "";
var curveNumberofthePath = 0;
var curveTime = 0;

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
	                
					if(curveTime == 1 )
					
					{
					   
					 globalCurveArray[globalCurveNumber].attr("path", "M" + " " + start.x  + " " + start.y + "L " + end.x + " " + end.y ); 
					   
					   return true;
					
					}
		
		 
		
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
		
		
	
		if(curveTime == 0)
		{
	    
	    CutmullPoints =  "M" + " " + x  + " " + y + "R" ;
		globalCurveArray[globalCurveNumber] = R.path("M" + " " + x  + " " + y);
		
		}
		
		
				if(curveTime > 0){
		
	        CutmullPoints =  CutmullPoints + " " + x + " " + y;
		
		       }
		
	

	    curveTime =   curveTime + 1;

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

		
	      
			  	   SelectedRaphaelItemOnTheStage = globalCurveArray[globalCurveNumber];
                   arrayOfRegularCurvepaths.push(globalCurveArray[globalCurveNumber]);  
			       console.log(globalCurveArray[globalCurveNumber]);
			 
		  	
                   arrayOfRegularCurvepaths[arrayOfRegularCurvepaths.length -1].freeT =  R.freeTransform(globalCurveArray[globalCurveNumber].attr({"fill":"white","fill-opacity":0}).data({"type": "sprite" , "number":curveNumberofthePath}).click(
		
		   
		
		
		function(){
		
		  
	        refeCurve = this;
	         
	   		R.forEach(function (el) {
                              if((el.type =="circle" || el.type =="rect" || el.type =="path") && el.data("type") == "sprite") {
							   

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
					
					
						
          for (var i = 0; i <  arrayOfRegularCurvepaths.length ; i++) {
		  
		               if(arrayOfRegularCurvepaths[i].data("number") ==  SelectedRaphaelItemOnTheStage.data("number")){
					   
					   
					        console.log(SelectedRaphaelItemOnTheStage.freeT);
			                console.log(globalCurveArray.length);
					        SelectedRaphaelItemOnTheStage.freeT.unplug();
						    arrayOfRegularCurvepaths.splice (i, 1);
                            SelectedRaphaelItemOnTheStage.remove();
					   
			  
			
					   
					   
					              }
		  


                      }
							
							
					
					     }
                    });	
					

	


     
    });


	} */				
			
		// pencil tool.......	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			

	           function AllowScribble()
{
		

		 
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
					
                        x = evt.pageX - R.canvas.offsetLeft;
                        y = evt.pageY - R.canvas.offsetTop;
					   
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
				
              /*      Largehandshape = g_masterDrawingBox;
				   g_masterDrawingBox.attr({"fill":"#fff","fill-opacity":0}); */
			
				
					   
                };

			

		
                masterBackground.drag(move, start, up);

		
             
			 

		 
		 
		 
		 

			
			}
		
			
		
/* 			
	a = ? = \u1d43 (modifier letter small a)
b = ? = \u1d47 (modifier letter small b)
c = ? = \u1d9c (modifier letter small c)
d = ? = \u1d48 (modifier letter small d)
e = ? = \u1d49 (modifier letter small e)
f = ? = \u1da0 (modifier letter small f)
g = ? = \u1d4d (modifier letter small g)
h = ? = \u02b0 (modifier letter small h)
i = ? = \u2071 (superscript latin small letter i)
j = ? = \u02b2 (modifier letter small j)
k = ? = \u1d4f (modifier letter small k)
l = ? = \u02e1 (modifier letter small l)
m = ? = \u1d50 (modifier letter small m)
n = n = \u207f (superscript latin small letter n)
o = ? = \u1d52 (modifier letter small o)
p = ? = \u1d56 (modifier letter small p)
q = n/a
r = ? = \u02b3 (modifier letter small r)
s = ? = \u02e2 (modifier letter small s)
t = ? = \u1d57 (modifier letter small t)
u = ? = \u1d58 (modifier letter small u)
v = ? = \u1d5b (modifier letter small v)
w = ? = \u02b7 (modifier letter small w)
x = ? = \u02e3 (modifier letter small x)
y = ? = \u02b8 (modifier letter small y)
z = ? = \u1dbb (modifier letter small z)	 */
			
			
			
			
			
			

  