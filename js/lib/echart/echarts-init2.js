$(document).ready(function() {

<!-- Dynamic Data-->

    var dom = document.getElementById("barScore");
    var barScore = echarts.init(dom);

    var barScoreOption = {
            color: ['#25c3b2'],

            tooltip : {
                trigger: 'axis'
            },
            legend: {
                // data:['SDJ','AJE', 'BINSUA', 'LATI', 'KDC', 'PAD', 'TBR']
            },

            calculable : true,
            xAxis : [
                {
                    type : 'category',
                    boundaryGap : true,
                    data:['SDJ','AJE', 'BINSUA', 'LATI', 'KDC', 'PAD', 'TBR']
                }
            ],
            yAxis : [
                {
                    type : 'value',
                    axisLabel : {
                        formatter: '{value}'
                    }
                }
            ],
            series : [
                {
                    name:'Score',
                    type:'bar',
                    detail : {formatter:'{value}'},
                    data:[
                    {
                        value:70,
                        symbolSize : 15,
                        itemStyle : { normal: {label : {
                            show: true,
                            textStyle : {
                                fontSize : '20',
                                fontFamily : '微软雅黑',
                                fontWeight : 'bold'
                            }
                        }}}
                    },{
                    value:90,
                    symbolSize : 15,
                    itemStyle : { normal: {label : {
                        show: true,
                        textStyle : {
                            fontSize : '20',
                            fontFamily : '微软雅黑',
                            fontWeight : 'bold'
                        }
                    }}}
                },{
                    value:82,
                    symbolSize : 15,
                    itemStyle : { normal: {label : {
                        show: true,
                        textStyle : {
                            fontSize : '20',
                            fontFamily : '微软雅黑',
                            fontWeight : 'bold'
                        }
                    }}}
                },{
                    value:65,
                    symbolSize : 15,
                    itemStyle : { normal: {label : {
                        show: true,
                        textStyle : {
                            fontSize : '20',
                            fontFamily : '微软雅黑',
                            fontWeight : 'bold'
                        }
                    }}}
                },{
                    value:74,
                    symbolSize : 15,
                    itemStyle : { normal: {label : {
                        show: true,
                        textStyle : {
                            fontSize : '20',
                            fontFamily : '微软雅黑',
                            fontWeight : 'bold'
                        }
                    }}}
                },{
                    value:50,
                    symbolSize : 15,
                    itemStyle : { normal: {label : {
                        show: true,
                        textStyle : {
                            fontSize : '20',
                            fontFamily : '微软雅黑',
                            fontWeight : 'bold'
                        }
                    }}}
                },
                {
                    value:77,
                    symbolSize : 15,
                    itemStyle : { normal: {label : {
                        show: true,
                        textStyle : {
                            fontSize : '20',
                            fontFamily : '微软雅黑',
                            fontWeight : 'bold'
                        }
                    }}}
                },],
                markPoint : {
                    data : [
                        {type : 'min', name: 'Score', itemStyle: { normal: { color: '#ff6961'}}},
                        {type : 'max', name: 'Score', itemStyle: { normal: { color: '#7EC0EE'}}}
                    ]
                },
                    /*markLine : {
                        data : [
                            {type : 'average', name: 'Average'}
                        ]
                    }*/
                },
            ]
        };

    if (barScoreOption && typeof barScoreOption === "object") {
        barScore.setOption(barScoreOption, true);
    }

    <!--basic line echarts init-->

    var chartOneDom = document.getElementById("b-line");
    var chartOne = echarts.init(chartOneDom);

    var chartOneOption = {
        color: ['#ea6390','#7EC0EE'],

        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:['Plan','Actual']
        },

        calculable : true,
        xAxis : [
            {
                type : 'category',
                boundaryGap : true,
                data: ['Jan','Feb','Mar','Apr','May','Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            }
        ],
        yAxis : [
            {
                type : 'value',
                axisLabel : {
                    formatter: '{value}'
                }
            }
        ],
        series : [
            {
                name:'Plan',
                type:'bar',
                data:[16, 10, 15, 12, 7, 9, 18, 15, 8, 14, 17, 19],
                markPoint : {
                    data : [
                        {type : 'max', name: 'Plan'},
                        {type : 'min', name: 'Plan', itemStyle: { normal: { color: '#ff5872'}}}
                    ]
                },
                markLine : {
                    data : [
                        {type : 'average', name: 'Average'}
                    ]
                }
            },
            {
                name:'Actual',
                type:'bar',
                data:[10, 10, 13, 12, 8, 10, 15, 8, 13, 16, 15],
                markPoint : {
                    data : [
                        {type : 'max', name: 'Actual'},
                        {type : 'min', name: 'Actual', itemStyle: { normal: { color: '#ff9161'}}}
                    ]
                },
                markLine : {
                    data : [
                        {type : 'average', name : 'Average'}
                    ]
                }
            }
        ]
    };

    if (chartOneOption && typeof chartOneOption === "object") {
        chartOne.setOption(chartOneOption, true);
    }

    <!-- Dynamic Data-->

    var dom = document.getElementById("dynArea");
    var dynArea = echarts.init(dom);

    var dynAreaOption = {
            color: ['#7EC0EE','#ea6390'],

            tooltip : {
                trigger: 'axis'
            },
            legend: {
                data:['Plan','Actual']
            },

            calculable : true,
            xAxis : [
                {
                    type : 'category',
                    boundaryGap : true,
                    data: [2016, 2017, 2018, 2019]
                }
            ],
            yAxis : [
                {
                    type : 'value',
                    axisLabel : {
                        formatter: '{value}'
                    }
                }
            ],
            series : [
                {
                    name:'Plan',
                    type:'bar',
                    data:[8, 9, 9, 9],
                    /*markPoint : {
                        data : [
                            {type : 'max', name: 'Plan'},
                            {type : 'min', name: 'Actual'}
                        ]
                    },*/
                    markLine : {
                        data : [
                            {type : 'average', name: 'Average'}
                        ]
                    }
                },
                {
                    name:'Actual',
                    type:'line',
                    data:[7,8,9, 9],
                    smooth: true,
                    /*markPoint : {
                        data : [
                            {name : 'Min of Week', value : -2, xAxis: 1, yAxis: -1.5}
                        ]
                    },*/
                    markLine : {
                        data : [
                            {type : 'average', name : 'Average'}
                        ]
                    }
                }
            ]
        };

    if (dynAreaOption && typeof dynAreaOption === "object") {
        dynArea.setOption(dynAreaOption, true);
    }

    <!--Basic Pie echarts init-->

    var dom = document.getElementById("basic-Pie");
    var bpChart = echarts.init(dom);

    var app = {};
    option = null;
    option = {
        color: ['#25c3b2','#ea6390','#ffa500'],
        tooltip : {
            trigger: 'item',
            formatter: '{a} <br/>{b} : {c} ({d}%)'
        },
        legend: {
            /*orient : 'horizontal',
            x : 'left',*/
            data:['Open','On Progress','Closed']
        },
        calculable : true,
        series : [
            {
                name:'Parfu',
                type:'pie',
                radius : '70%',
                // center: ['50%', '60%'],
                data:[
                    {value:20, name:'Open'},
                    {value:34, name:'On Progress'},
                    {value:15, name:'Closed'}
                ]
            }
        ]
    };

    if (option && typeof option === "object") {
        bpChart.setOption(option, false);
    }


    <!--Basic Pie echarts init-->

    var dom = document.getElementById("basic-Pie2");
    var aaChart = echarts.init(dom);

    var app = {};
    option = null;
    option = {
        color: ['#25c3b2','#ea6390','#ffa500'],
        tooltip : {
            trigger: 'item',
            formatter: '{b} : {c} ({d}%)'
        },
        legend: {
            /*orient : 'horizontal',
            x : 'left',*/
            data:['Complete','Not Started','Pending']
        },
        calculable : true,
        series : [
            {
                name:'Audit Assignment',
                type:'pie',
                radius : '60%',
                center: ['50%', '60%'],
                label: {
                    normal: {
                        /*textStyle: {
                            color: 'rgba(255, 255, 255, 0.3)'
                        },*/
                         formatter: '{b} : {c} ({d}%)'
                    },                                
                },
                data:[
                    {value:1, name:'Complete'},
                    {value:2, name:'Pending'},
                    {value:1, name:'Not Started'}
                ]
            }
        ]
    };

    if (option && typeof option === "object") {
        aaChart.setOption(option, false);
    }



    <!--basic area echarts init-->

    /*var dom = document.getElementById("b-area");
    var myChart = echarts.init(dom);

    var app = {};
    option = null;
    option = {
        color: ['#ea6390','#67f3e4'],

        tooltip : {
            trigger: 'axis'
        },
        legend: {
            data:['Budget','Actual']
        },

        calculable : true,
        xAxis : [
            {
                type : 'category',
                name: 'Hari',
                boundaryGap : true,
                data : ['MKE','AYS','ASI','ARI','EYP','ANA']
            }
        ],
        yAxis : [
            {
                type : 'value',
                name: 'Auditor'
            }
        ],
        series : [
            {
                name:'Budget',
                type:'line',
                smooth:true,
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                data:[90, 90, 90, 80, 80, 80]
            },
            {
                name:'Actual',
                type:'line',
                smooth:true,
                itemStyle: {normal: {areaStyle: {type: 'default'}}},
                data:[95, 50, 88, 45, 40, 35]
            }
        ]
    };


    if (option && typeof option === "object") {
        myChart.setOption(option, false);
    }*/

    <!--Doughnut echarts init-->

    // var dom = document.getElementById("doughnut");
    // var dnutChart = echarts.init(dom);

    // var app = {};
    // option = null;
    // option = {
    //     color: [/*'#62549a',*/'#4aa9e9', /*,'#eac459'*/ '#25c3b2', '#ea6390'],
    //     tooltip : {
    //         trigger: 'item',
    //         formatter: '{a} <br/>{b} : {c} ({d}%)'
    //     },
    //     legend: {
    //         orient : 'vertical',
    //         x : 'left',
    //         data:['Open','On Progress','Closed']
    //     },
    //     calculable : true,
    //     series : [
    //         {
    //             name:'Source',
    //             type:'pie',
    //             radius : ['50%', '70%'],
    //             data:[
    //                 {value:30, name:'Open'},
    //                 {value:50, name:'On Progress'},
    //                 {value:45, name:'Closed'}
    //             ]
    //         }
    //     ]
    // };

    // if (option && typeof option === "object") {
    //     dnutChart.setOption(option, false);
    // }

<!--Radar Workload echarts init-->

    /*var dom = document.getElementById("workload");
    var myChart = echarts.init(dom);
    var app = {};
    option = null;
    option = {
        title: {
            text: 'Workload'
        },
        tooltip: {},
        legend: {
            data: ['Budget', 'Actual']
        },
        radar: {
            // shape: 'circle',
            name: {
                textStyle: {
                    color: '#fff',
                    backgroundColor: '#999',
                    borderRadius: 3,
                    padding: [3, 5]
                }
            },
            indicator: [
                { name: 'MKE', max: 100},
                { name: 'AYS', max: 100},
                { name: 'ARI', max: 100},
                { name: 'EYP', max: 100},
                { name: 'ANA', max: 100}
            ],
            radius: 80,
            center: ['50%','60%']
        },
        series: [{
            name: 'Budget vs Actual',
            type: 'radar',
            // areaStyle: {normal: {}},
            data : [
                {
                    value : [90, 90, 90, 90, 90],
                    name : 'Budget'
                },
                {
                    value : [90, 85, 83, 78, 80],
                    name : 'Actual'
                }
            ]
        }]
    };
    if (option && typeof option === "object") {
        myChart.setOption(option, true);
    }*/

    var dom = document.getElementById("radar");
    var rdChart = echarts.init(dom);

    var app = {};
    option = null;
    option = {
        color: ['#ea6390','#7EC0EE'],
        tooltip : {},
        legend: {
            orient : 'vertical',
            x : 'left',
            y : 0,
            data:['Budget','Actual']
        },
        polar : [
            {
                indicator : [
                    { text: 'FIR', max: 120},
                    { text: 'MKE', max: 120},
                    { text: 'AYS', max: 120},
                    { text: 'ARI', max: 120},
                    { text: 'EYP', max: 120},
                    { text: 'ANA', max: 120}
                ]
            }
        ],
        calculable : true,
        series : [
            {
                name: 'Budget vs Actual',
                type: 'radar',
                data : [
                    {
                        value : [110, 110, 110, 110, 110, 110],
                        name : 'Budget'
                    },
                    {
                        value : [120, 110, 100, 70, 80, 90],
                        name : 'Actual'
                    }
                ]
            }
        ]
    };

    if (option && typeof option === "object") {
        rdChart.setOption(option, false);
    }

    /**
     * Resize chart on window resize
     * @return {void}
     */
    window.onresize = function() {
        barScore.resize();
        chartOne.resize();
        // myChart.resize();
        // rainChart.resize();
        // nbChart.resize();
        bpChart.resize();
        aaChart.resize();
        // npChart.resize();
        // dnutChart.resize();
        // bsChart.resize();
        myChart.resize();
        // gaugeChart.resize();
    };


});

$('#modChart').on('shown.bs.modal',function(event){
    var link = $(event.relatedTarget);
    // get data source
    // var source = link.attr('data-source').split(',');
    // get title
    var title = link.html();
    // get labels
    var table = link.parents('table');
    var labels = ['HO', 'SDJ', 'KDC', 'ADR', 'LATI', 'AJE', 'TBR'];
    var open = [4, 7, 8, 15, 20, 11, 9];
    var close = [6, 6, 5, 17, 13, 11, 8];
    /*$('#'+table.attr('id')+'>thead>tr>th').each(function(index,value){
        // without first column
        if(index>0){labels.push($(value).html());}
    });*/
    // get target source
    /*var target = [];
    $.each(labels, function(index,value){
        target.push(link.attr('data-target-source'));
    });*/
    // Chart initialisieren
    var modal = $(this);
    var canvas = modal.find('.modal-body canvas');
    modal.find('.modal-title').html(title);
    var ctx = canvas[0].getContext("2d");
    /*var chart = new Chart(ctx, {
              type: 'bar',
              data: {
                labels: ['Votes'],
                datasets: [{
                  label: '# of Votes',
                  backgroundColor: "#000080",
                  data: [80]
                }, {
                  label: '# of Votes2',
                  backgroundColor: "#d3d3d3",
                  data: [90]
                }, {
                  label: '# of Votes3',
                  backgroundColor: "#add8e6",
                  data: [45]
                }]
              },

              options: {
                legend: {
                  display: true,
                  position: 'bottom',
                  labels: {
                    fontColor: "#000080",
                  }
                },
                scales: {
                  yAxes: [{
                    ticks: {
                      beginAtZero: true
                    }
                  }]
                }
              }
        });*/
/*var densityData = {
  label: 'Density of Planet (kg/m3)',
  data: [5427, 5243, 5514, 3933, 1326, 687, 1271, 1638],
  backgroundColor: 'rgba(0, 99, 132, 0.6)',
  borderColor: 'rgba(0, 99, 132, 1)',
  yAxisID: "y-axis-density"
};
 
var gravityData = {
  label: 'Gravity of Planet (m/s2)',
  data: [3.7, 8.9, 9.8, 3.7, 23.1, 9.0, 8.7, 11.0],
  backgroundColor: 'rgba(99, 132, 0, 0.6)',
  borderColor: 'rgba(99, 132, 0, 1)',
  yAxisID: "y-axis-gravity"
};*/
    /*var chart = new Chart(ctx).Bar({
        responsive: true,
        labels: labels,
        datasets: [densityData, gravityData]
        datasets: [{
            label: 'Open',
            fillColor: "rgba(151,187,205,0.2)",
            strokeColor: "rgba(151,187,205,1)",
            pointColor: "rgba(151,187,205,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(151,187,205,1)",
            data: open,
            displayLegend: true,
        },{
            label: 'Closed',
            fillColor: "rgba(220,220,220,0.2)",
            strokeColor: "#F7464A",
            pointColor: "#FF5A5E",
            pointStrokeColor: "#FF5A5E",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "red",
            data: close,
            displayLegend: true,
        }]
    },{});*/

    var densityData = {
  label: 'Density of Planet (kg/m3)',
  data: [5427, 5243, 5514, 3933, 1326, 687, 1271, 1638],
  backgroundColor: 'rgba(0, 99, 132, 0.6)',
  borderColor: 'rgba(0, 99, 132, 1)',
  yAxisID: "y-axis-density"
};
 
var gravityData = {
  label: 'Gravity of Planet (m/s2)',
  data: [3.7, 8.9, 9.8, 3.7, 23.1, 9.0, 8.7, 11.0],
  backgroundColor: 'rgba(99, 132, 0, 0.6)',
  borderColor: 'rgba(99, 132, 0, 1)',
  yAxisID: "y-axis-gravity"
};
 
var planetData = {
    responsive: true,
    labels: ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"],
    datasets: [densityData, gravityData]
};
 
var chartOptions = {
  scales: {
    xAxes: [{
      barPercentage: 1,
      categoryPercentage: 0.6
    }],
    yAxes: [{
      id: "y-axis-density"
    }, {
      id: "y-axis-gravity"
    }]
  }
};
 
var barChart = new Chart(ctx, {
    type: 'bar',
    data: planetData,
    options: chartOptions
});

}).on('hidden.bs.modal',function(event){
    // reset canvas size
    var modal = $(this);
    var canvas = modal.find('.modal-body canvas');
    canvas.attr('width','568px').attr('height','300px');
    // destroy modal
    $(this).data('bs.modal', null);
});
