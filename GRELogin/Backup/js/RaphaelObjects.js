
		



	function recObject(obj)
			
{
	       

    this.c = obj.rect(100, 100, 100, 100).attr({
            fill: "white",
            stroke: "black",
            cursor: "move"
        }),
   this.s = obj.rect(200, 200, 10, 10).attr({
            fill: "#7b4",
            stroke: "black",
            opacity: 0,
		    cursor:"nw-resize"
        }),
    // start, move, and up are the drag functions
	
	
    start = function () {
        // storing original coordinates
        this.ox = this.attr("x");
        this.oy = this.attr("y");
    
        this.sizer.ox = this.sizer.attr("x");
        this.sizer.oy = this.sizer.attr("y");
    },
    move = function (dx, dy) {
        // move will be called with dx and dy
        this.attr({x: this.ox + dx, y: this.oy + dy});
        this.sizer.attr({x: this.sizer.ox + dx, y: this.sizer.oy + dy});        
    },
    up = function () {
        // restoring state
        this.attr({opacity: 1});
        this.sizer.attr({opacity: 0});   
          SelectedRaphaelItemOnTheStage = this;
	  
    },
    rstart = function () {
        // storing original coordinates
        this.ox = this.attr("x");
        this.oy = this.attr("y");        
        
        this.box.ow = this.box.attr("width");
        this.box.oh = this.box.attr("height");        
    },
    rmove = function (dx, dy) {
        // move will be called with dx and dy
        this.attr({x: this.ox + dx, y: this.oy + dy});
        this.box.attr({width: this.box.ow + dx, height: this.box.oh + dy});
    };   
    // rstart and rmove are the resize functions;
	
    this.c.drag(move, start, up);
    this.c.sizer = this.s;
    this.s.drag(rmove, rstart);
    this.s.box = this.c;












			  
}	
			
			
			
			
			
			
			
			
			function circObject(obj)
			
			{
		
		
		       this.c = R.circle(100, 100, 50).attr({
            fill: "orange",
            stroke: "black",
			cursor:"move"
          
        }),
        this.s = R.circle(140, 140, 10).attr({
            fill: "blue",
            stroke: "none",
			cursor:"nw-resize",
            opacity:0
        });
    var start = function () {
        // storing original coordinates
        this.ox = this.attr("cx");    
        this.oy = this.attr("cy");
        
        this.sizer.ox = this.sizer.attr("cx");    
        this.sizer.oy = this.sizer.attr("cy")
      
    },
    move = function (dx, dy) {
        // move will be called with dx and dy
        this.attr({cx: this.ox + dx, cy: this.oy + dy});
        this.sizer.attr({cx: this.sizer.ox + dx, cy: this.sizer.oy + dy});
    },
    up = function () {
        // restoring state
   SelectedRaphaelItemOnTheStage = this;
    },
    rstart = function() {
        // storing original coordinates
        this.ox = this.attr("cx");
        this.oy = this.attr("cy");        
        
        this.big.or = this.big.attr("r");
    },
    rmove = function (dx, dy) {
        // move will be called with dx and dy
        this.attr({cx: this.ox + dy, cy: this.oy + dy});
        this.big.attr({r: this.big.or + 
                       (dy < 0 ? -1 : 1) * Math.sqrt(2*dy*dy)});
    };
    this.c.drag(move, start, up);    
    this.c.sizer = this.s;
    this.s.drag(rmove, rstart);
    this.s.big = this.c;

			}	
			
	
			
			
			
			
			
			
			
			
			
			
			
			
			
			

		function tObject(obj)
			
			{ 
			
		     this.raph = obj.text(420, 50, "you can drag this text....to edit this ...type in the text area above..").attr({ "font-size": 15, 
			 "font-family": "Verdana, Helvetica, sans-serif", "cursor":"pointer"});
			this.s = obj.rect(100, 80, 10, 10).attr({
            fill: "#7b4",
            stroke: "#7b4",
            opacity: 0,
		    cursor:"nw-resize"
        });
			   var start = function () {
                    this.ox = this.attr("x");
                    this.oy = this.attr("y");
                  this.sizer.ox = this.sizer.attr("x");
                  this.sizer.oy = this.sizer.attr("y");
                },
                move = function (dx, dy) {
				
                          this.attr({x: this.ox + dx, y: this.oy + dy});
                        this.sizer.attr({x: this.sizer.ox + dx, y: this.sizer.oy + dy}); 
					
					
					
                },
                up = function () {
                      SelectedRaphaelItemOnTheStage = this;
					  this.sizer.attr("opacity",0);
					  document.getElementById('fname').style.display = "block";
                };
	
		
			    this.raph.drag(move, start, up);
                this.raph.sizer = this.s;
                this.s.box = this.raph;

			  
			  
			  
			}	
			
			
	





		
			
			
			
			
			
			
			

				