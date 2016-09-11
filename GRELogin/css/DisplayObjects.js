var Largerrect;
var Largecirc ; 
var isDrawingRegularShapesOn ;
var TA;
var perimissionStatusHand;
var defaultProperties = {'fill': 'white',"fill-opacity":0.5,"stroke-width":1,"stroke":"#000"}
var freeTransformsize4properites = {draw: [ 'bbox'],attrs: { fill: "#fff", stroke: "#000","stroke-width":1 },size:4, drag:true}

Raphael.fn.roundedRectangle = function (x, y, w, h, r1, r2, r3, r4){
  var array = [];
  array = array.concat(["M",x,r1+y, "Q",x,y, x+r1,y]); //A
  array = array.concat(["L",x+w-r2,y, "Q",x+w,y, x+w,y+r2]); //B
  array = array.concat(["L",x+w,y+h-r3, "Q",x+w,y+h, x+w-r3,y+h]); //C
  array = array.concat(["L",x+r4,y+h, "Q",x,y+h, x,y+h-r4, "Z"]); //D

  return this.path(array);
};

//round rectangle






function DisplayPanel(){
    
	
				
var  D = Raphael(document.getElementById('panel'),"450", "60");
	

 
 var f_in =    function(){ 
 

 
var obj = this;

obj.attr({"fill": "#eee", "opacity":1 ,"cursor":"pointer","stroke": "#eee"})
               }
			   
 var f_out = function(){ 
 
 var obj = this;
 
 obj.attr({  "opacity":0});
 
 }
 
 
/* D.roundedRectangle(7, 5, 40, 43,2,2,2,2).attr({"opacity":1 ,"stroke": "#fff"}).hover(f_in, f_out);
	var DisplayRect = D.rect(0, 0, 34, 34).attr({fill:"white"})
	                    .click(function(){
								 
								 
						setHandleSizeZero(R);
								 
	
	Largerrect = R.rect(200, 200, 100, 100);
    Largerrect.freeT = R.freeTransform(Largerrect.attr(defaultProperties).data("type", "sprite").click(function(){
	
	
	   		setHandleSizeZero(R);					
		    SelectedRaphaelItemOnTheStage = this;		   
		    this.freeT.setOpts(freeTransformsize4properites);						
										
		
	    })).setOpts(freeTransformsize4properites);
					

		//show handles upon click of display item			
              SelectedRaphaelItemOnTheStage =  Largerrect;
              Largerrect.freeT.showHandles();
					                 
									

		  
						});
						
						
   DisplayRect.transform("t10,10 s0.8");
	

	
	
	
	
    var cpath = D.circle(40,15,15).attr({fill:"white"})
	                 .click(function(){
					 
					 setHandleSizeZero(R);	
					 
				//	window.history.replaceState( {} , 'foo', '/GRElogin/friends.php?foo' );//jQuery.param.querystring(window.location.href, 'valueA=321&valueB=123');	 
			
		 Largerrect =  R.circle(100, 100, 50) ;   	   
	     Largerrect.freeT = R.freeTransform(Largerrect.attr(defaultProperties).data("type", "sprite").click(function(){
	   
	
	   	   setHandleSizeZero(R);	
	   
           SelectedRaphaelItemOnTheStage =  this;
		   this.freeT.setOpts(freeTransformsize4properites);
	   
	           })).setOpts(freeTransformsize4properites);
             
		
			  
				       SelectedRaphaelItemOnTheStage = Largerrect;
					   Largerrect.freeT.showHandles();
						  

	   
						               });
						
   cpath.transform("t50,10 s1");
	
					$('body').keydown(function(e) {
			 
                    if(e.keyCode == 8){
					      // alert(globalArray[globalNumber]);
					        SelectedRaphaelItemOnTheStage.freeT.unplug();
                            SelectedRaphaelItemOnTheStage.remove();
					
					     }
                    });	
				 */
	

	
	

	

		
	TA = D.text(7, 20, "T").attr({cursor:"pointer","font-size": 35, "font-family": "Tahoma, Helvetica, sans-serif","fill" :"#000","stroke":"#000","stroke-width": 1.4})
	  TA.transform("t20,10 s1.1");

					 
			$(TA.node).click(function(){
	  

			$("#fname").css("display", "inline-block");
	       // $("#fname").focus();  To grab focus on the Desired eleemnt
			     $('#fname').keydown(function(e) {
			  
                             if(e.keyCode == 8){
							 
						      e.stopPropagation();
					              
					                           }
                                });	
		
	             Newtextfield();
				 
		document.getElementById('svgContainer').style.cursor = 'url(mypointer.cur)';
				 
				 
				 
	                 });

			 
	
			
			
	 var Pencil = D.path("M25.31,2.872l-3.384-2.127c-0.854-0.536-1.979-0.278-2.517,0.576l-1.334,2.123l6.474,4.066l1.335-2.122C26.42,4.533,26.164,3.407,25.31,2.872zM6.555,21.786l6.474,4.066L23.581,9.054l-6.477-4.067L6.555,21.786zM5.566,26.952l-0.143,3.819l3.379-1.787l3.14-1.658l-6.246-3.925L5.566,26.952z").attr({stroke: "black",fill:"white",cursor:"pointer"})
	  Pencil.transform("t70,15 s1");
	  Pencil.click(function()
	                {
					 
	
		 
		                AllowScribble();	
		 
		                                        
		
					    paperstroke = "#000";
						paperstrokewidth = 1;
						
			$('#svgContainer').css('cursor','url(images/mypointer.cur), auto')
					
					   // document.getElementById('svgContainer').style.cursor ='url(mypointer.cur)';
	
	                 }).attr("fill" ,"#fff");





/* 	 var erasor = D.path("M96.423,89.975H46.797l50.47-50.477c3.645-3.645,3.645-9.575,0-13.22L79.417,8.429c-1.42-1.42-3.186-2.249-5.028-2.562  c0.003,0.001-8.167,0.431-16.057,1.328c-2.425,0.274-4.449,1.648-5.86,3.058L2.733,59.995c-3.645,3.645-3.645,9.572,0,13.217  l17.849,17.85c1.753,1.756,4.097,2.724,6.587,2.724c0.194,0,12.049-0.234,12.172-0.24c0.598-0.056,2.033-0.219,2.033-0.219h55.048  c0.924,0,1.676-0.752,1.676-1.676C98.1,90.727,97.348,89.975,96.423,89.975z M43.279,88.2c-2.187,2.184-5.743,2.184-7.933,0  L17.497,70.353c-2.188-2.191-2.188-5.749,0-7.934l25.424-25.423l25.704,25.854L43.279,88.2z M65.267,9.865l5.046-0.413  l-27.469,27.47l-4.208-0.425L65.267,9.865z M5.378,70.572c-2.189-2.188-2.189-5.746,0-7.937l26.853-26.853l5.971,0.641l-23.35,23.35  c-3.645,3.645-3.645,9.579,0,13.22l16.966,16.966c-0.271,0.006-0.515,0.009-0.776,0.015h-4.597c-1.217-0.157-2.345-0.681-3.22-1.559  L5.378,70.572z").attr({stroke: "black",fill:"white",cursor:"pointer"}).attr("fill" , "#fff");
	  erasor.transform("t100,-20 s0.35");


	  erasor.click(function()
	                
					{
					 

						paperstroke = "#fff";
						paperstrokewidth = 10;
	
	                 }); */









					 
					 
/* 					 
		 
  var Line = D.path("M,4,36,L,4,36,L,16,8,L,16,8,L,22,22,L,22,22,L,35,19,L,35,19,L,46,39,L,46,39,L,46,39").attr({stroke: "#000",fill:"#fff",cursor:"pointer" })
		 	  Line.transform("t190,5 s1");
  
  
  
     Line.click(function()
	  {
	    
		
			 
	    setHandleSizeZero(R);	 
		
		AllowLineDrawing();
		
		document.getElementById('svgContainer').style.cursor ='crosshair';
		

	  });




  var curveDrawing = D.path("M,2,34,C,3.1666666666666665,29.333333333333332,6.166666666666667,7.333333333333333,9,6,C,11.833333333333334,4.666666666666667,15.666666666666666,25.5,19,26,C,22.333333333333332,26.5,25.666666666666668,10,29,9,C,32.333333333333336,8,37.333333333333336,18.166666666666668,39,20,C,40.666666666666664,21.833333333333332,39,20,39,20").attr({stroke: "#000",fill:"white",cursor:"pointer" })
		 	  curveDrawing.transform("t260,10 s1");
  
     curveDrawing.click(function()
	  {
	    
		
		
	    setHandleSizeZero(R);	 
	
		allowCurveDrawing();
		
		document.getElementById('svgContainer').style.cursor ='crosshair';
	  });

 */

	 
			 
			 
			 
			 
			 
			 
			 
			 
/*	var numberLine = D.text(0,30 ,"NumL").attr({cursor:"pointer","font-size" :"28" });
	  

     numberLine.transform("t400,0 s0.8");
     numberLine.click(function()
	  {
	    

			 var st = R.set();

st.push(
    R.path("M40,100L360,100"),
    R.path("M200,90L200,110"),
    R.path("M150,90L150,110"),
    R.path("M100,90L100,110"),
	R.path("M50,90L50,110"),
	R.path("M250,90L250,110"),
	R.path("M300,90L300,110"),
	R.path("M350,90L350,110"),
	R.text(200, 120, "0"),
	R.text(150, 120, "-1"),
	R.text(100, 120, "-2"),
	R.text(50, 120, "-3"),
	R.text(250, 120, "1"),
	R.text(300, 120, "2"),
	R.text(350, 120, "3")
	
);

st.attr({"font-size": 14,"stroke" : "black", "data": "sprite"}); 

R.freeTransform(st).setOpts({draw: [ 'bbox' ],attrs: { fill: "#fff" ,stroke :"#fff"},size:5, drag:true});		
			 
			

	  });  
	  */
	  
	  
	  
	  
	  

/* 	  
	    var man = D.path("M20.771,12.364c0,0,0.849-3.51,0-4.699c-0.85-1.189-1.189-1.981-3.058-2.548s-1.188-0.454-2.547-0.396c-1.359,0.057-2.492,0.792-2.492,1.188c0,0-0.849,0.057-1.188,0.397c-0.34,0.34-0.906,1.924-0.906,2.321s0.283,3.058,0.566,3.624l-0.337,0.113c-0.283,3.283,1.132,3.68,1.132,3.68c0.509,3.058,1.019,1.756,1.019,2.548s-0.51,0.51-0.51,0.51s-0.452,1.245-1.584,1.698c-1.132,0.452-7.416,2.886-7.927,3.396c-0.511,0.511-0.453,2.888-0.453,2.888h26.947c0,0,0.059-2.377-0.452-2.888c-0.512-0.511-6.796-2.944-7.928-3.396c-1.132-0.453-1.584-1.698-1.584-1.698s-0.51,0.282-0.51-0.51s0.51,0.51,1.02-2.548c0,0,1.414-0.397,1.132-3.68H20.771z").attr({stroke: "#000",fill:"white",cursor:"pointer" })
	    man.transform("t430,10 s1");
	  
	  		 
		     man.click(function()
	  {
	    
		R.freeTransform(R.path("M20.771,12.364c0,0,0.849-3.51,0-4.699c-0.85-1.189-1.189-1.981-3.058-2.548s-1.188-0.454-2.547-0.396c-1.359,0.057-2.492,0.792-2.492,1.188c0,0-0.849,0.057-1.188,0.397c-0.34,0.34-0.906,1.924-0.906,2.321s0.283,3.058,0.566,3.624l-0.337,0.113c-0.283,3.283,1.132,3.68,1.132,3.68c0.509,3.058,1.019,1.756,1.019,2.548s-0.51,0.51-0.51,0.51s-0.452,1.245-1.584,1.698c-1.132,0.452-7.416,2.886-7.927,3.396c-0.511,0.511-0.453,2.888-0.453,2.888h26.947c0,0,0.059-2.377-0.452-2.888c-0.512-0.511-6.796-2.944-7.928-3.396c-1.132-0.453-1.584-1.698-1.584-1.698s-0.51,0.282-0.51-0.51s0.51,0.51,1.02-2.548c0,0,1.414-0.397,1.132-3.68H20.771z").attr({stroke: "#000",fill:"white",cursor:"pointer" })).setOpts({draw: [ 'bbox'],attrs: { fill: "#fff", stroke: "#000","stroke-width":1 },size:0, drag:true});	
	 	
		
	  }); */
	  
	  


	  

	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
  
	
}