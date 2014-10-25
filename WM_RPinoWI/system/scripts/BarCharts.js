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
   		
   		// Check Compass Pitch Value Change Color
   		if ((Ino_CmpssP >= 0 ) && (Ino_CmpssP < T01_CmpssP)) { Clr_StyleP = Clr_Styl10; }
   		if ((Ino_CmpssP >= T01_CmpssP) && (Ino_CmpssP < T02_CmpssP)) { Clr_StyleP = Clr_Styl01; }
	        if ((Ino_CmpssP >= T02_CmpssP) && (Ino_CmpssP < T03_CmpssP)) { Clr_StyleP = Clr_Styl02; }
	        // Check Compass Roll Value Change Color
   		if ((Ino_CmpssR >= 0 ) && (Ino_CmpssR < T01_CmpssR)) { Clr_StyleR = Clr_Styl10; }
   		if ((Ino_CmpssR >= T01_CmpssR) && (Ino_CmpssR < T02_CmpssR)) { Clr_StyleR = Clr_Styl01; }
	        if ((Ino_CmpssR >= T02_CmpssR) && (Ino_CmpssR < T03_CmpssR)) { Clr_StyleR = Clr_Styl02; }
	 
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
                    { y: Ino_CmpssP, label: "Pich", color: Clr_StyleP },
                    { y: Ino_CmpssR, label: "Roll", color: Clr_StyleR }                    
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

   	// Check Battery Autonomy Value Change Color
   	// if ((Ino_Depth >= 0 ) && (Ino_TmpInt < 30)) { Clr_Depth = Clr_Styl10; }
   	// if ((Ino_Depth >= 30) && (Ino_TmpInt < 40)) { Clr_Depth = Clr_Styl01; }
	// if ((Ino_Depth >= 40) && (Ino_TmpInt < 60)) { Clr_Depth = Clr_Styl02; }  	
  	
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
   	if ((Ino_BtAtmy >= 0 ) && (Ino_TmpInt < 30)) { Clr_BtAtmy = Clr_Styl10; }
   	if ((Ino_BtAtmy >= 30) && (Ino_TmpInt < 40)) { Clr_BtAtmy = Clr_Styl01; }
	if ((Ino_BtAtmy >= 40) && (Ino_TmpInt < 60)) { Clr_BtAtmy = Clr_Styl02; }  	
  	
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
    