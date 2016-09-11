
 var Raphael = Raphael;

 Raphael.fn = Raphael.fn;
 
 var global = this;
 var RaphaelSM = global.RaphaelSM;

 (function(global,undefined) {

	
	
	
	RaphaelSM = {};







/** Parabolic curve (e.g. bending moment line)
	* @class represents parabolic curve
	* @param {Point2d} point1 1st point
	* @param {Point2d} point2 2nd point
 	* @param {Object} params parameters, see below
	* @param {float} [params.val1=0.] value in 1st point
 	* @param {float} [params.valMid=0.] value in the middle of 1st and 2nd point
 	* @param {float} [params.val2=0.] value in 2nd point
 	* @param {float} [params.sclale=1.] scale factor
 	* @param {bool} [params.closedBegin=true] the line conecting 1st point with 1st nodal value
 	* @param {bool} [params.closedEnd=true] the line conecting 2nd point with 2nd nodal value
 	* @param {bool} [params.closedBase=true] the line conecting 1st and 2nd point
 	* @param {int} [params.nSeg=5] number of interpolating points
 	* @borrows Raphael.fn.CurveObj#point1 as this.point1
 	* @borrows Raphael.fn.CurveObj#point2 as this.point2
 	* @borrows Raphael.fn.CurveObj#scale as this.scale
 	* @borrows Raphael.fn.CurveObj#closedBegin as this.closedBegin
 	* @borrows Raphael.fn.CurveObj#closedEnd as this.closedEnd
 	* @borrows Raphael.fn.CurveObj#closedBase as this.closedBase
 	* @borrows Raphael.fn.CurveObj.setPathList as this.setPathList
 	* @borrows Raphael.fn.CurveObj.consts as this.consts
 	* @borrows Raphael.fn.CurveObj.update as this.update
 	* @property {float} val1 value in 1st point
 	* @property {float} val2 value in 2nd point
 	* @property {float} valMid value in the middle*/
 	Raphael.fn.ParabolicCurve = function(point1,point2,params) {
 		var params = params==undefined? {} : params;
 		var retParabolicCurve = this.CurveObj(point1,point2,params);
 
 		retParabolicCurve.val1 = params.val1==undefined? 0. : params.val1;
 		retParabolicCurve.valMid = params.valMid==undefined? 0. : params.valMid;
 		retParabolicCurve.val2 = params.val2==undefined? 0. : params.val2;
 		retParabolicCurve.nSeg = params.nSeg==undefined? 5 : params.nSeg;
 
 		/** @exports retParabolicCurve as Raphael.fn.ParabolicCurve */
 		/**#@+
 		* @memberOf Raphael.fn.ParabolicCurve#
 		*/
 
 		retParabolicCurve.consts = function() {
 			this.c0 = this.val1;
 			this.c1 = (-3*this.val1 - this.val2 + 4*this.valMid)/this.len;
 			this.c2 = (2*this.val1 + 2*this.val2 - 4*this.valMid)/this.len/this.len;
 		}
 
 		retParabolicCurve.v = function(s) {
 			return this.c0 + this.c1*s + this.c2*s*s;
 		}
 
 		retParabolicCurve.dv = function(s) {
 			return this.c1 + 2*this.c2*s;
 		}
 
 		retParabolicCurve.setPathList = function() {
 			this.pathList = [["M",this.x1-this.scale*this.sin*this.v(0),this.y1+this.scale*this.cos*this.v(0)]];
 			var t = .3;
 			for (var i=0; i<this.nSeg; i++) {
 				var v1 = this.v(i*this.segLen);
 				var v2 = this.v((i+1)*this.segLen);
 				var dv1 = this.dv(i*this.segLen);
 				var dv2 = this.dv((i+1)*this.segLen);
 				var vec1 = RaphaelTools.vecTrans((i+t)*this.segLen,this.scale*(v1+dv1*t*this.segLen),this.sin,this.cos);
 				var vec2 = RaphaelTools.vecTrans((i+1-t)*this.segLen,this.scale*(v2-dv2*t*this.segLen),this.sin,this.cos);
 				var vec3 = RaphaelTools.vecTrans((i+1)*this.segLen,this.scale*v2,this.sin,this.cos);
 				var ll = ["C",this.x1+vec1[0],this.y1+vec1[1],this.x1+vec2[0],this.y1+vec2[1],this.x1+vec3[0],this.y1+vec3[1]];
 				this.pathList.push(ll);
 			}
 			this.closedPartsHandle(this.v(0));
 		}
 
 		/** Sets values of receiver
 		* @param {float} val1 value in 1st point
 		* @param {float} val2 value in 2nd point
 		* @param {float} valMid value in the middle
 		*/
 		retParabolicCurve.setVals = function(val1,val2,valMid) {
 			this.val1 = val1;
 			this.val2 = val2;
 			this.valMid = valMid;
 			this.update();
 		}
 		/**#@-*/
 
 		retParabolicCurve.update();
 		return retParabolicCurve;
 	}
	
	
	
	
  	/** Dimension
1310 	* @class represents dimension
1311 	* @param {Paper} paper raphael instance
1312 	* @param {Point2d} point1 1st point
1313 	* @param {Point2d} point2 2nd point
1314 	* @param {Object} params parameters, see below
1315 	* @param {string} [params.type="c"] type fo arrow ("c" for civil engineering, "m" for mechanical engineering)
1316 	* @param {float} [params.height=30.] height
1317 	* @param {float} [params.overhang=6.] size of overhang
1318 	* @param {float} [params.offset=10.] offset
1319 	* @param {float} [params.textOffset=12.] text offset
1320 	* @param {bool} [prams.lower=true] if the dimension is lower or upper from line point1-point2
1321 	* @param {string|float} [params.val=""] value to be displayed
1322 	* @param {Object} [prams.pathAttrs={}] attrs passed to path
1323 	* @param {Object} [prams.textAttrs={}] attrs passed to text
1324 	* @param {float} [prams.arrowSize=overhang] arrow size (only for "c" type)
1325 	* @param {float} [prams.threshold=1.] length threshold, if length is lower, the dimension is hidden
1326 	* @property {Point2d} point1 1st point
1327 	* @property {Point2d} point2 2nd point
1328 	* @property {string} type type fo arrow ("c" for civil engineering, "m" for mechanical engineering)
1329 	* @property {float} height height
1330 	* @property {float} overhang size of overhang
1331 	* @property {float} offset offset
1332 	* @property {float} textOffset text offset
1333 	* @property {string|float} val value to be displayed
1334 	* @property {Raphael.el} path path
1335 	* @property {Raphael.el} text text
1336 	* @property {Array} pathList path list
1337 	* @property {float} arrowSize arrow size
1338 	* @property {float} threshold length threshold
1339 	* @property {bool} lower if the dimension is lower or upper
1340 	*/
 	RaphaelSM.Dimension = function(paper,point1,point2,params) {
 		this.point1 = point1;
 		this.point2 = point2;
 		var params = params==undefined? {} : params;
 		this.type = params.type==undefined? "c" : params.type=="e"? "e" : "c";
 		this.height = params.height==undefined? 30. : params.height;
		this.overhang = params.overhang==undefined? 6. : params.overhang;
 		this.offset = params.offset==undefined? 10. : params.offset;
 		this.arrowSize = params.arrowSize==undefined? this.overhang : params.arrowSize;
 		this.textOffset = params.textOffset==undefined? 12. : params.textOffset;
 		this.val = params.val==undefined? "" : params.val;
 		this.threshold = params.threshold==undefined? 1. : params.threshold;
		this.lower = params.lower==undefined? true : params.lower;
 		var pathAttrs = params.pathAttrs==undefined? {} : params.pathAttrs;
 		this.path = paper.path().attr(pathAttrs);
		var textAttrs = params.textAttrs==undefined? {} : params.textAttrs;
		if (this.type == "e") { textAttrs["arrow-end"] = "classic-midium-long"; }
 		this.text = paper.text(0,0,this.val).attr({"font-size":20}).attr(textAttrs);
		this.pathList = [];
	}


 	RaphaelSM.Dimension.prototype.update = function() {
 		var dx = this.point2.x - this.point1.x;
		var dy = this.point2.y - this.point1.y;
		var l = Math.sqrt(dx*dx+dy*dy);
 		this.show();
		if (l < this.threshold) {
			this.hide();
			return;
		}
		var sign = this.lower? 1 : -1
 		var c = dx/l;
		var s = dy/l;
		var y1 = sign*this.offset;
 		var y2 = y1 + sign*this.height;
 		var y3 = y2 + sign*this.overhang;
 		var x = this.overhang;
		this.pathList = [
 			["M",this.point1.x-s*y1,this.point1.y+c*y1],
			["L",this.point1.x-s*y3,this.point1.y+c*y3],
			["M",this.point2.x-s*y1,this.point2.y+c*y1],
		["L",this.point2.x-s*y3,this.point2.y+c*y3],
			["M",this.point1.x-s*y2,this.point1.y+c*y2],
			["L",this.point2.x-s*y2,this.point2.y+c*y2],
 		];
 		if (this.type == "c") {
			y1 = y2 + this.arrowSize;
		y3 = y2 - this.arrowSize;
			this.pathList.push(["M",this.point1.x-s*y1-c*x,this.point1.y+c*y1-s*x]);
			this.pathList.push(["L",this.point1.x-s*y3+c*x,this.point1.y+c*y3+s*x]);
		this.pathList.push(["M",this.point2.x-s*y1-c*x,this.point2.y+c*y1-s*x]);
			this.pathList.push(["L",this.point2.x-s*y3+c*x,this.point2.y+c*y3+s*x]);
 		}
		this.path.attr({"path":this.pathList})
 		//
 		y3 = this.offset + this.height - sign*this.textOffset;
		x  = .5*(this.point1.x+this.point2.x) - sign*s*y3;
 		y1 = .5*(this.point1.y+this.point2.y) + sign*c*y3;
		var a = Math.acos(c)*180./Math.PI;
 		if (s<0) { a = 360. - a; }
 		this.text.attr({"transform":"t"+x+","+y1+"r"+a,"text":this.val});
 		this.text.attr({"x":+x,"y":y1,"transform":"r"+a,"text":this.val});
 	}
 
* @param {string|float} val new text value
 	*/
 	RaphaelSM.Dimension.prototype.setVal = function(val) {
 		this.val = val;
 		this.update();
 	}
 
 	/** Hides receiver
 	* @param {string|float} val new text value
 	*/
 	RaphaelSM.Dimension.prototype.hide = function() {
 		this.path.hide();
 		this.text.hide();
 	}
 
 	/** Shows receiver
 	* @param {string|float} val new text value
 	*/
 	RaphaelSM.Dimension.prototype.show = function() {
 		this.text.show();
	}

 	/** Creates new Dimension object, for parameters meaning see {@link RaphaelSM.Dimension}
 	* @returns {Dimension} new Dimension object
 	*/
	RaphaelSM.Dimension.create = function(paper,point1,point2,params) {
		ret.update();
 		return ret;
 	}

 })(this);