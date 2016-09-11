var Largerrect;
var Largecirc ; 
var isDrawingRegularShapesOn ;
var TA;
var perimissionStatusHand;
var defaultProperties = {'fill': 'white',"fill-opacity":0.5,"stroke-width":1,"stroke":"#000"}
var freeTransformsize4properites = {draw: [ 'bbox'],attrs: { fill: "#fff", stroke: "#000","stroke-width":1 },size:4, drag:true}
function DisplayPanel(){
    
		      $('body').keydown(function(e) {
			 
                 if(e.keyCode == 8){
					       // R.freeTransform(SelectedRaphaelItemOnTheStage.clone()).setOpts({draw: [ 'bbox' ],attrs: { fill: "#7b4", stroke: "#000" },size:5, drag:true});
					        SelectedRaphaelItemOnTheStage.freeT.unplug();
                            SelectedRaphaelItemOnTheStage.remove();
					
					                   }
                    });	
					


	var  D = Raphael(document.getElementById('panel'),"450", "60");

	       
	var DisplayRect = D.rect(0, 0, 34, 34).attr({fill:"WHITE"})
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
	
	
	

	
	
	var Pencil = D.path("M25.31,2.872l-3.384-2.127c-0.854-0.536-1.979-0.278-2.517,0.576l-1.334,2.123l6.474,4.066l1.335-2.122C26.42,4.533,26.164,3.407,25.31,2.872zM6.555,21.786l6.474,4.066L23.581,9.054l-6.477-4.067L6.555,21.786zM5.566,26.952l-0.143,3.819l3.379-1.787l3.14-1.658l-6.246-3.925L5.566,26.952z").attr({stroke: "black",fill:"white",cursor:"pointer"});
	  Pencil.transform("t140,10 s1");
	  Pencil.click(function()
	                {
					 
					 
					    setHandleSizeZero(R);	
		
					    perimissionStatusHand =  true; // later to be made false
						
	                    AllowScribble();
						
					    document.getElementById('svgContainer').style.cursor ='url(images/mypointer.cur)';
	
	                 });
	

		
	TA = D.text(0, 15, "T").attr({cursor:"pointer","font-size": 35, "font-family": "Tahoma, Helvetica, sans-serif","fill" :"#fff","stroke":"#000","stroke-width": 1.4});
	  TA.transform("t210,10 s1.1");

					 
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

			 
			
		 
					 
					 
		 
	  var Line = D.path("M12,48L12,48L22,9L22,9L38,34L38,34L58,14L58,14L58,14").attr({stroke: "#000",fill:"#fff",cursor:"pointer" });
		 	  Line.transform("t240,0 s0.8");
  
  
  
     Line.click(function()
	  {
	    
		
			 
	    setHandleSizeZero(R);	 
		
		AllowLineDrawing();
		
		document.getElementById('svgContainer').style.cursor ='crosshair';
		

	  });




  var curveDrawing = D.path("M2.021,9.748L2.021,9.748V9.746V9.748zM2.022,9.746l5.771,5.773l-5.772,5.771l2.122,2.123l7.894-7.895L4.143,7.623L2.022,9.746zM12.248,23.269h14.419V20.27H12.248V23.269zM16.583,17.019h10.084V14.02H16.583V17.019zM12.248,7.769v3.001h14.419V7.769H12.248z").attr({stroke: "#000",fill:"white",cursor:"pointer" });
		 	  curveDrawing.transform("t320,10 s1.3");
  
     curveDrawing.click(function()
	  {
	    
		
		
	    setHandleSizeZero(R);	 
	
		allowCurveDrawing();
		
		document.getElementById('svgContainer').style.cursor ='crosshair';
	  });



	  
	  
	  		 
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
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  


	  

	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
  
	
}