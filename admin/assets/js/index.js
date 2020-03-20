$(function() {
    "use strict";


// chart 1

var ctx = document.getElementById("dashboard-chart-1").getContext('2d');

      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [1, 2, 3, 4, 5, 6, 7, 8],
          datasets: [{
            label: 'New Orders',
            data: [40, 30, 60, 35, 60, 25, 50, 40],
            borderColor: '#11cdef',
            backgroundColor: '#11cdef',
            hoverBackgroundColor: '#11cdef',
            pointRadius: 0,
            fill: false,
            borderWidth: 1
          }, {
            label: 'Pending',
            data: [50, 60, 40, 70, 35, 75, 30, 20],
            borderColor: '#e8e8e8',
            backgroundColor: '#e8e8e8',
            hoverBackgroundColor: '#e8e8e8',
            pointRadius: 0,
            fill: false,
            borderWidth: 1
          }]
        },
    options:{
      legend: {
        position: 'bottom',
              display: true,
        labels: {
                boxWidth:12
              }
            },  
      scales: {
        xAxes: [{
        stacked: true,
        barPercentage: .5
        }],
          yAxes: [{ 
            stacked: true
             }]
         },
      tooltips: {
        displayColors:false,
      }
    }
      });



// chart 2

 var ctx = document.getElementById("dashboard-chart-2").getContext('2d');
var totaluser = document.getElementById("totaluser").innerHTML;
var totalvendor = document.getElementById("totalvendor").innerHTML;
var totalpackage = document.getElementById("totalpackage").innerHTML;
      var myChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
          labels: ["User","Vendor","Packages","Hotel","Notificaiton"],
          datasets: [{
            backgroundColor: [
              '#5e72e4',
              '#ff2fa0',
              '#2dce89',
              '#f5365c',
              '#fb6340',
              '#11cdef'
            ],
            hoverBackgroundColor: [
              '#5e72e4',
              '#ff2fa0',
              '#2dce89',
              '#f5365c',
              '#fb6340',
              '#11cdef'
            ],
            data: [totaluser,totalvendor, totalpackage],
      borderWidth: [1, 1, 1, 1, 1, 1]
          }]
        },
        options: {
      cutoutPercentage: 25,
            legend: {
        position: 'right',
              display: true,
        labels: {
                boxWidth:12
              }
            },
      tooltips: {
        displayColors:false,
      }
        }
      });

	
// chart 3

    

   
 //donut

    $("span.donut").peity("donut",{
          width: 120,
          height: 120 
      });







   });	 
   