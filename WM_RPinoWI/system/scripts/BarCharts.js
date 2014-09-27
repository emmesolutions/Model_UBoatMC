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
 
 
  // BarCharts GPS/Compass
  if ((Enb_BrdTop== '01') &&  (Enb_GPSCmp== '01')) {	
   	
  	 var BChtsCmp = new CanvasJS.Chart("WM_BChtsCmp", {
        
        	backgroundColor: Clr_Bkgd10,
        	theme: "theme1",
        	height: 110,
        	        	
            title: { 
            	text: "Compass",
            	horizontalAlign: "left",
            	fontColor: "#EEEEEE",
            	fontSize: 10
            },
            axisY: {
            	minimum: 0,
		maximum: 90,
                interval: 5,
                gridColor: "#454545",
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
                gridColor: "#454545",
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
		labelFontWeight: "bold",
		labelFontFamily: "Arial",
                type: "bar",

                dataPoints: [
                    { y: Ino_CmpssH, label: "Head", color: Clr_Styl01 },
                    { y: Ino_CmpssP, label: "Pich", color: Clr_Styl02 },
                    { y: Ino_CmpssR, label: "Roll", color: Clr_Styl10 }                    
                ]
            }
            ]
        })
        
		BChtsCmp.render();
                       
 	};
  
 
  // BarCharts Tempemperature/Humidity
  if ((Enb_BrdBot== '01') &&  (Enb_TmpHmd== '01')) {	
   	
  	 var BChtsTmp = new CanvasJS.Chart("WM_BChtsTmp", {
        
        	backgroundColor: Clr_Bkgd10,
        	theme: "theme1",
        	height: 140,
        	        	
            title: { 
            	text: "Temperature",
            	horizontalAlign: "left",
            	fontColor: "#EEEEEE",
            	fontSize: 10
            },
            axisY: {
            	minimum: 0,
		maximum: 50,
                interval: 3,
                gridColor: "#454545",
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
                gridColor: "#454545",
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
		labelFontWeight: "bold",
		labelFontFamily: "Arial",
                color: "#3B6D88",
                type: "bar",

                dataPoints: [
                    { y: Ino_BlTTmp, label: "B.Tank" },
                    { y: Ino_MEnTmp, label: "Engine" },
                    { y: 0, label: " " },
                    { y: Ino_TmpInt, label: "Internal" },
                    { y: Ino_TmpExt, label: "External" },
                    { y: Ino_TmpH2O, label: "Water" }                    
                ]
            }
            ]
        })
        
		BChtsTmp.render();
        
        
          var BChtsHmd = new CanvasJS.Chart("WM_BChtsHmd", {
        
        	backgroundColor: Clr_Bkgd10,
        	theme: "theme1",
        	height: 80,
        	        	
            title: { 
            	text: "Humidity",
            	horizontalAlign: "left",
            	fontColor: "#EEEEEE",
            	fontSize: 10
            },
            axisY: {
            	minimum: 0,
		maximum: 90,
                interval: 5,
                gridColor: "#454545",
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
                gridColor: "#454545",
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
		labelFontWeight: "bold",
		labelFontFamily: "Arial",
                color: "#3B6D88",
                type: "bar",

                dataPoints: [
                    { y: Ino_HmdInt, label: "HmdInt" }                   
                ]
            }
            ]
        })
        

                BChtsHmd.render();
        
 	};
  
  // BarCharts Hardware Status
  if ((Enb_BrdBot== '01') &&  (Enb_HdwSts== '01')) {  	
        var BChtsHdw = new CanvasJS.Chart("WM_BChtsHdw", {
        
        	backgroundColor: Clr_Bkgd10,
        	theme: "theme1",
        	height: 140,
        	        	
            title: { 
            	text: "Hardware",
            	horizontalAlign: "left",
            	fontColor: "#EEEEEE",
            	fontSize: 10
            },
            axisY: {
            	minimum: 0,
		maximum: 12,
                interval: 1,
                gridColor: "#454545",
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
                gridColor: "#454545",
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
		labelFontWeight: "bold",
		labelFontFamily: "Arial",
                color: "#3B6D88",
                type: "bar",

                dataPoints: [
                    { y: Ino_BtAtmy, label: "BtAtmy" },
                    { y: Ino_EngBtV, label: "EngBtV" },
                    { y: Ino_EngBtI, label: "EngBtI" },
                    { y: Ino_HdwBtV, label: "HdwBtV" },
                    { y: Ino_MEnSnI, label: "MEnSnI" },
                    { y: Ino_BlTSnI, label: "BlTSnI" }
                ]
            }
            ]
        })
        
        BChtsHdw.render();
        
        };

        
    }
    