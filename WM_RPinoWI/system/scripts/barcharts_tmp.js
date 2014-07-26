/* BarCharts_Tmp */

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

	// Script BarCharts Temperature (CanvasJS)
  	
  	window.onload = function () {
  	
        var chart = new CanvasJS.Chart("WM_BarGraph", {
        
        	backgroundColor: "#333333",
        	theme: "theme1",
        	height: 150,
        	        	
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
        });

        chart.render();
    }
    