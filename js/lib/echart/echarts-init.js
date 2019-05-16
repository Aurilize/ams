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

    <!--Radar Workload echarts init-->

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

    <!--Doughnut echarts init-->

    

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
        rdChart.resize();
        // gaugeChart.resize();
    };


});


