/* BarCharts */

/*
	[WM_RPinoWI]
	U-boat Module Control Web Interface

    	Copyright (C) 2014 Martinelli Michele

   	This program is free software: you can redistribute it and/or modify
    	it under the terms of the GNU General Public License as published by
    	the Free Software Foundation, either version 3 of the License, or
    	(at your option) any later version.

    	This program is distributed in the hope that it will be useful,
    	but WITHOUT ANY WARRANTY; without even the implied warranty of
    	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    	GNU General Public License for more details.

    	You should have received a copy of the GNU General Public License
    	along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/
  	
  	window.onload = function () {
 
 
  // BarCharts Compass
  if ((Enb_BrdTop== '01') && (Enb_GPSCmp== '01')) {	
   	
	      	var Clr_StyleH = Clr_Styl10;
	      	var Clr_StyleP = Clr_Styl10;
	      	var Clr_StyleR = Clr_Styl10;
	      	
	      	var Clr_CmpssP = Clr_Styl10;
	      	var Clr_CmpssR = Clr_Styl10;
   		
   		// Check Compass Pitch Value Change Color
   		if ((Ino_CmpssP >= 0 ) && (Ino_CmpssP < T01_CmpssP)) { Clr_CmpssP = Clr_Styl10; }
   		if ((Ino_CmpssP >= T01_CmpssP) && (Ino_CmpssP < T02_CmpssP)) { Clr_CmpssP = Clr_Styl01; }
	        if ((Ino_CmpssP >= T02_CmpssP) && (Ino_CmpssP < T03_CmpssP)) { Clr_CmpssP = Clr_Styl02; }
	        // Check Compass Roll Value Change Color
   		if ((Ino_CmpssR >= 0 ) && (Ino_CmpssR < T01_CmpssR)) { Clr_StyleR = Clr_Styl10; }
   		if ((Ino_CmpssR >= T01_CmpssR) && (Ino_CmpssR < T02_CmpssR)) { Clr_CmpssR = Clr_Styl01; }
	        if ((Ino_CmpssR >= T02_CmpssR) && (Ino_CmpssR < T03_CmpssR)) { Clr_CmpssR = Clr_Styl02; }
	 
	 // Compass Header
  	 var BChtsCmpHr = new CanvasJS.Chart("WM_BChtsCmpHr", {
        
        	backgroundColor: Clr_Bkgd10,
        	theme: "theme1",
        	height: 55,
 
            axisY: {
            	minimum: 0,
		maximum: 180,
                interval: 10,
                gridColor: Clr_Grid00,
            	gridThickness: 1,
                tickThickness: 0,
                lineThickness: 0,
		labelFontSize: 8,
		labelFontStyle: "normal",
		labelFontWeight: "normal",
		labelFontFamily: "Arial",
		labelFontColor: "#EEEEEE"                
            },
            axisX: {
            	gridThickness: 1,
                tickThickness: 0,
                lineThickness: 0,
                gridColor: Clr_Grid00,
                labelFontSize: 10,
		labelFontStyle: "normal",
		labelFontWeight: "normal",
		labelFontFamily: "Arial",
		labelFontColor: "#EEEEEE"
            },
            data: [
            {
		labelFontSize: 10,
		labelFontStyle: "normal",
		labelFontWeight: "normal",
		labelFontFamily: "Arial",
                type: "stackedBar",

                dataPoints: [
                    { y:Ino_CmpssH, label: "", color: Clr_Bkgd10 }                  
                ]
            },
            {
		labelFontSize: 10,
		labelFontStyle: "normal",
		labelFontWeight: "normal",
		labelFontFamily: "Arial",
                type: "stackedBar",

                dataPoints: [
                    { y:5, label: "Head", color: Clr_Styl10 }                  
                ]
            },
            {
		labelFontSize: 10,
		labelFontStyle: "normal",
		labelFontWeight: "normal",
		labelFontFamily: "Arial",
                type: "stackedBar",

                dataPoints: [
                    { y:175-Ino_CmpssH, label: "", color: Clr_Bkgd10 }                  
                ]
            }
            ]
        })
        
		BChtsCmpHr.render();
		
	 // Compass Pitch/Roll
 	 var BChtsCmpPR = new CanvasJS.Chart("WM_BChtsCmpPR", {
        
        	backgroundColor: Clr_Bkgd10,
        	theme: "theme1",
        	height: 70,

            axisY: {
            	minimum: 0,
		maximum: 30,
                interval: 2,
                gridColor: Clr_Grid00,
            	gridThickness: 1,
                tickThickness: 0,
                lineThickness: 0,
		labelFontSize: 8,
		labelFontStyle: "normal",
		labelFontWeight: "normal",
		labelFontFamily: "Arial",
		labelFontColor: "#EEEEEE"                
            },
            axisX: {
            	gridThickness: 1,
                tickThickness: 0,
                lineThickness: 0,
                gridColor: Clr_Grid00,
                labelFontSize: 10,
		labelFontStyle: "normal",
		labelFontWeight: "normal",
		labelFontFamily: "Arial",
		labelFontColor: "#EEEEEE"
            },
            data: [
            {
		labelFontSize: 10,
		labelFontStyle: "normal",
		labelFontWeight: "bold",
		labelFontFamily: "Arial",
                type: "bar",

                dataPoints: [
                    { y: Ino_CmpssP, label: "Pich", color: Clr_CmpssP },
                    { y: Ino_CmpssR, label: "Roll", color: Clr_CmpssR }                    
                ]
            }
            ]
        })
        
		BChtsCmpPR.render();                       
                       
 	};
  
  // BarCharts Depth/Speed
  
  if ((Enb_BrdTop== '01') &&  (Enb_DthSpd== '01')) {  	
  	
   	var Clr_Depth = Clr_Styl10;
   	var Clr_Speed = Clr_Styl10;

   	// Check Depth Value Change Color
   	if ((Ino_Depth >= 0 ) && (Ino_Depth < T01_Depth)) { Clr_Depth = Clr_Styl10; }
   	if ((Ino_Depth >= T01_Depth) && (Ino_Depth < T02_Depth)) { Clr_Depth = Clr_Styl01; }
	if ((Ino_Depth >= T02_Depth) && (Ino_Depth < T03_Depth)) { Clr_Depth = Clr_Styl02; } 	
	// Check Speed Value Change Color
   	if ((Ino_Speed >= 0 ) && (Ino_Speed < T01_Speed)) { Clr_Speed = Clr_Styl10; }
   	if ((Ino_Speed >= T01_Speed) && (Ino_Speed < T02_Speed)) { Clr_Speed = Clr_Styl01; }
	if ((Ino_Speed >= T02_Speed) && (Ino_Speed < T03_Speed)) { Clr_Speed = Clr_Styl02; } 
  	
  	// Depth
        var BChtsDth = new CanvasJS.Chart("WM_BChtsDth", {
        
        	backgroundColor: Clr_Bkgd10,
        	theme: "theme1",
        	height: 55,

            axisY: {
            	minimum: 0,
		maximum: 50,
                interval: 5,
                gridColor: Clr_Grid00,
            	gridThickness: 1,
                tickThickness: 0,
                lineThickness: 0,
		labelFontSize: 8,
		labelFontStyle: "normal",
		labelFontWeight: "normal",
		labelFontFamily: "Arial",
		labelFontColor: "#EEEEEE"                
            },
            axisX: {
            	gridThickness: 1,
                tickThickness: 0,
                lineThickness: 0,
                gridColor: Clr_Grid00,
                labelFontSize: 10,
		labelFontStyle: "normal",
		labelFontWeight: "bold",
		labelFontFamily: "Arial",
		labelFontColor: "#EEEEEE"
            },
            data: [
            {
		labelFontSize: 10,
		labelFontStyle: "normal",
		labelFontWeight: "normal",
		labelFontFamily: "Arial",
                type: "bar",

                dataPoints: [
                    { y: Ino_Depth, label: "Depth" , color: Clr_Depth }
                ]
            }
            ]
        })
        
        BChtsDth.render();
        
        // Speed
        var BChtsSpd = new CanvasJS.Chart("WM_BChtsSpd", {
        
        	backgroundColor: Clr_Bkgd10,
        	theme: "theme1",
        	height: 55,

            axisY: {
            	minimum: 0,
		maximum: 50,
                interval: 5,
                gridColor: Clr_Grid00,
            	gridThickness: 1,
                tickThickness: 0,
                lineThickness: 0,
		labelFontSize: 8,
		labelFontStyle: "normal",
		labelFontWeight: "normal",
		labelFontFamily: "Arial",
		labelFontColor: "#EEEEEE"                
            },
            axisX: {
            	gridThickness: 1,
                tickThickness: 0,
                lineThickness: 0,
                gridColor: Clr_Grid00,
                labelFontSize: 10,
		labelFontStyle: "normal",
		labelFontWeight: "normal",
		labelFontFamily: "Arial",
		labelFontColor: "#EEEEEE"
            },
            data: [
            {
		labelFontSize: 10,
		labelFontStyle: "normal",
		labelFontWeight: "bold",
		labelFontFamily: "Arial",
                type: "bar",

                dataPoints: [
                    { y: Ino_Speed, label: "Speed" , color: Clr_Speed }
                ]
            }
            ]
        })
        
        BChtsSpd.render();
        
        };
 
  // BarCharts Tempemperature/Humidity
  if ((Enb_BrdBot== '01') &&  (Enb_TmpHmd== '01')) {	
   	
   		var Clr_BlTTmp = Clr_Styl10;
   		var Clr_MEnTmp = Clr_Styl10;
   		
   		var Clr_TmpInt = Clr_Styl10;
   		var Clr_TmpExt = Clr_Styl10;
   		var Clr_TmpH2O = Clr_Styl10;
   		
	      	var Clr_HmdInt = Clr_Styl10;
   		
   		// Check Internal Temperature Value Change Color
   		if ((Ino_TmpInt >= 0 ) && (Ino_TmpInt < T01_TmpInt)) { Clr_TmpInt = Clr_Styl10; }
   		if ((Ino_TmpInt >= T01_TmpInt) && (Ino_TmpInt < T02_TmpInt)) { Clr_TmpInt = Clr_Styl01; }
	        if ((Ino_TmpInt >= T02_TmpInt) && (Ino_TmpInt < T03_TmpInt)) { Clr_TmpInt = Clr_Styl02; }
	        // Check Internal Humidity Value Change Color
   		if ((Ino_HmdInt >= 0 ) && (Ino_HmdInt < T01_HmdInt)) { Clr_HmdInt = Clr_Styl10; }
   		if ((Ino_HmdInt >= T01_HmdInt) && (Ino_HmdInt < T02_HmdInt)) { Clr_HmdInt = Clr_Styl01; }
	        if ((Ino_HmdInt >= T02_HmdInt) && (Ino_HmdInt < T03_HmdInt)) { Clr_HmdInt = Clr_Styl02; }
   	
   	// Tempemperature
  	var BChtsTmp = new CanvasJS.Chart("WM_BChtsTmp", {
        
        	backgroundColor: Clr_Bkgd10,
        	theme: "theme1",
        	height: 110,

            axisY: {
            	minimum: 0,
		maximum: 50,
                interval: 3,
                gridColor: Clr_Grid00,
            	gridThickness: 1,
                tickThickness: 0,
                lineThickness: 0,
		labelFontSize: 8,
		labelFontStyle: "normal",
		labelFontWeight: "normal",
		labelFontFamily: "Arial",
		labelFontColor: "#EEEEEE"                
            },
            axisX: {
            	gridThickness: 1,
                tickThickness: 0,
                lineThickness: 0,
                gridColor: Clr_Grid00,
                labelFontSize: 10,
		labelFontStyle: "normal",
		labelFontWeight: "normal",
		labelFontFamily: "Arial",
		labelFontColor: "#EEEEEE"
            },
            data: [
            {
		labelFontSize: 10,
		labelFontStyle: "normal",
		labelFontWeight: "bold",
		labelFontFamily: "Arial",
                type: "bar",

                dataPoints: [
                    { y: Ino_BlTTmp, label: "B.Tank" ,color: Clr_BlTTmp },
                    { y: Ino_MEnTmp, label: "Engine" ,color: Clr_MEnTmp },
                    { y: 0, label: " " },
                    { y: Ino_TmpInt, label: "Internal" ,color: Clr_TmpInt },
                    { y: Ino_TmpExt, label: "External" ,color: Clr_TmpExt },
                    { y: Ino_TmpH2O, label: "Water" ,color: Clr_TmpH2O }                    
                ]
            }
            ]
        })
        
		BChtsTmp.render();
        
        // Humidity
        var BChtsHmd = new CanvasJS.Chart("WM_BChtsHmd", {
        
        	backgroundColor: Clr_Bkgd10,
        	theme: "theme1",
        	height: 55,

            axisY: {
            	minimum: 0,
		maximum: 90,
                interval: 5,
                gridColor: Clr_Grid00,
            	gridThickness: 1,
                tickThickness: 0,
                lineThickness: 0,
		labelFontSize: 8,
		labelFontStyle: "normal",
		labelFontWeight: "normal",
		labelFontFamily: "Arial",
		labelFontColor: "#EEEEEE"                
            },
            axisX: {
            	gridThickness: 1,
                tickThickness: 0,
                lineThickness: 0,
                gridColor: Clr_Grid00,
                labelFontSize: 10,
		labelFontStyle: "normal",
		labelFontWeight: "normal",
		labelFontFamily: "Arial",
		labelFontColor: "#EEEEEE"
            },
            data: [
            {
		labelFontSize: 10,
		labelFontStyle: "normal",
		labelFontWeight: "bold",
		labelFontFamily: "Arial",
                color: "#3B6D88",
                type: "bar",

                dataPoints: [
                    { y: Ino_HmdInt, label: "HmdInt", color: Clr_HmdInt }                   
                ]
            }
            ]
        })
        

                BChtsHmd.render();
        
 	};
  
  // BarCharts Hardware Status
  
  if ((Enb_BrdBot== '01') &&  (Enb_HdwSts== '01')) {  	
  	
   	var Clr_BtAtmy = Clr_Styl10;
   	var Clr_EngBtV = Clr_Styl10;
   	var Clr_EngBtI = Clr_Styl10;
   	var Clr_HdwBtV = Clr_Styl10;
   	var Clr_MEnSnI = Clr_Styl10;
   	var Clr_BlTSnI = Clr_Styl10;   	

   	// Check Battery Autonomy Value Change Color
   	if ((Ino_BtAtmy >= 0 ) && (Ino_BtAtmy < T01_BtAtmy)) { Clr_BtAtmy = Clr_Styl10; }
   	if ((Ino_BtAtmy >= T01_BtAtmy) && (Ino_BtAtmy < T02_BtAtmy)) { Clr_BtAtmy = Clr_Styl01; }
	if ((Ino_BtAtmy >= T02_BtAtmy) && (Ino_BtAtmy < T03_BtAtmy)) { Clr_BtAtmy = Clr_Styl02; }  
	// Check Battery Engine Value Change Color
   	if ((Ino_EngBtV >= 0 ) && (Ino_EngBtV < T01_EngBtV)) { Clr_EngBtV = Clr_Styl10; }
   	if ((Ino_EngBtV >= T01_EngBtV) && (Ino_EngBtV < T02_EngBtV)) { Clr_EngBtV = Clr_Styl01; }
	if ((Ino_EngBtV >= T02_EngBtV) && (Ino_EngBtV < T03_EngBtV)) { Clr_EngBtV = Clr_Styl02; } 
	// Check Battery Hardware Value Change Color
   	if ((Ino_HdwBtV >= 0 ) && (Ino_HdwBtV < T01_HdwBtV)) { Clr_HdwBtV = Clr_Styl10; }
   	if ((Ino_HdwBtV >= T01_HdwBtV) && (Ino_HdwBtV < T02_HdwBtV)) { Clr_HdwBtV = Clr_Styl01; }
	if ((Ino_HdwBtV >= T02_HdwBtV) && (Ino_HdwBtV < T03_HdwBtV)) { Clr_HdwBtV = Clr_Styl02; }  	
  	
  	// Hardware
        var BChtsHdw = new CanvasJS.Chart("WM_BChtsHdw", {
        
        	backgroundColor: Clr_Bkgd10,
        	theme: "theme1",
        	height: 110,

            axisY: {
            	minimum: 0,
		maximum: 12,
                interval: 1,
                gridColor: Clr_Grid00,
            	gridThickness: 1,
                tickThickness: 0,
                lineThickness: 0,
		labelFontSize: 8,
		labelFontStyle: "normal",
		labelFontWeight: "normal",
		labelFontFamily: "Arial",
		labelFontColor: "#EEEEEE"                
            },
            axisX: {
            	gridThickness: 1,
                tickThickness: 0,
                lineThickness: 0,
                gridColor: Clr_Grid00,
                labelFontSize: 10,
		labelFontStyle: "normal",
		labelFontWeight: "normal",
		labelFontFamily: "Arial",
		labelFontColor: "#EEEEEE"
            },
            data: [
            {
		labelFontSize: 10,
		labelFontStyle: "normal",
		labelFontWeight: "bold",
		labelFontFamily: "Arial",
                type: "bar",

                dataPoints: [
                    { y: Ino_BtAtmy, label: "BtAtmy" , color: Clr_BtAtmy },
                    { y: Ino_EngBtV, label: "EngBtV" , color: Clr_EngBtV },
                    { y: Ino_EngBtI, label: "EngBtI" , color: Clr_EngBtI },
                    { y: Ino_HdwBtV, label: "HdwBtV" , color: Clr_HdwBtV },
                    { y: Ino_MEnSnI, label: "MEnSnI" , color: Clr_MEnSnI },
                    { y: Ino_BlTSnI, label: "BlTSnI" , color: Clr_BlTSnI }
                ]
            }
            ]
        })
        
        BChtsHdw.render();
        
        };

        
    }
    