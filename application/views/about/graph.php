<!-- tree -->
<script src="/public/js/echarts.js"></script>

<div id="echart1" class="container" style="height: 500px;margin: 30px auto;"></div>
<div id="echart2" class="container" style="height: 500px;margin: 30px auto;"></div>

<script type="text/javascript">
            // 基于准备好的dom，初始化echarts实例
            var echart1 = echarts.init(document.getElementById('echart1'));

            var xData = function() {
                var data = [];
                for (var i = 2012; i < 2017; i++) {
                    data.push(i + "年");
                }
                return data;
            }();

            echart1.setOption(option = {
                backgroundColor: "#344b58",
                "title": {
                    "text": "宏明电子增长统计",
                    "subtext": "宏明集团出品",
                    x: "4%",
                    textStyle: {
                        color: '#fff',
                        fontSize: '22'
                    },
                    subtextStyle: {
                        color: '#90979c',
                        fontSize: '16',
                    },
                },
                "tooltip": {
                    "trigger": "axis",
                    "axisPointer": {
                        "type": "shadow",
                        textStyle: {
                            color: "#fff"
                        }

                    },
                },
                "grid": {
                    "borderWidth": 0,
                    "top": 110,
                    "bottom": 95,
                    textStyle: {
                        color: "#fff"
                    }
                },
                "legend": {
                    x: '4%',
                    top: '11%',
                    textStyle: {
                        color: '#90979c',
                    },
                    "data": ['宏明电子', '宏科电子', '利润']
                },
                "calculable": true,
                "xAxis": [{
                        "type": "category",
                        "axisLine": {
                            lineStyle: {
                                color: '#90979c'
                            }
                        },
                        "splitLine": {
                            "show": false
                        },
                        "axisTick": {
                            "show": false
                        },
                        "splitArea": {
                            "show": false
                        },
                        "axisLabel": {
                            "interval": 0,
                        },
                        "data": xData,
                    }],
                "yAxis": [{
                        "type": "value",
                        "splitLine": {
                            "show": false
                        },
                        "axisLine": {
                            lineStyle: {
                                color: '#90979c'
                            }
                        },
                        "axisTick": {
                            "show": false
                        },
                        "axisLabel": {
                            "interval": 0,
                        },
                        "splitArea": {
                            "show": false
                        },
                    }],
                "dataZoom": [{
                        "show": true,
                        "height": 30,
                        "xAxisIndex": [
                            0
                        ],
                        bottom: 30,
                        "start": 10,
                        "end": 80,
                        handleIcon: 'path://M306.1,413c0,2.2-1.8,4-4,4h-59.8c-2.2,0-4-1.8-4-4V200.8c0-2.2,1.8-4,4-4h59.8c2.2,0,4,1.8,4,4V413z',
                        handleSize: '110%',
                        handleStyle: {
                            color: "#d3dee5",
                        },
                        textStyle: {
                            color: "#fff"},
                        borderColor: "#90979c"


                    }, {
                        "type": "inside",
                        "show": true,
                        "height": 15,
                        "start": 1,
                        "end": 35
                    }],
                "series": [{
                        "name": "宏明电子",
                        "type": "bar",
                        "stack": "总量",
                        "barMaxWidth": 35,
                        "barGap": "10%",
                        "itemStyle": {
                            "normal": {
                                "color": "rgba(255,144,128,1)",
                                "label": {
                                    "show": true,
                                    "textStyle": {
                                        "color": "#fff"
                                    },
                                    "position": "insideTop",
                                    formatter: function(p) {
                                        return p.value > 0 ? (p.value) : '';
                                    }
                                }
                            }
                        },
                        "data": [
                            3285,
                            5208,
                            3372,
                            2484,
                            4078
                        ],
                    },
                    {
                        "name": "宏科电子",
                        "type": "bar",
                        "stack": "总量",
                        "itemStyle": {
                            "normal": {
                                "color": "rgba(0,191,183,1)",
                                "barBorderRadius": 0,
                                "label": {
                                    "show": true,
                                    "position": "top",
                                    formatter: function(p) {
                                        return p.value > 0 ? (p.value) : '';
                                    }
                                }
                            }
                        },
                        "data": [
                            1390,
                            1001,
                            951,
                            381,
                            220
                        ]
                    }, {
                        "name": "总数",
                        "type": "line",
                        "stack": "总量",
                        symbolSize: 10,
                        symbol: 'circle',
                        "itemStyle": {
                            "normal": {
                                "color": "rgba(252,230,48,1)",
                                "barBorderRadius": 0,
                                "label": {
                                    "show": true,
                                    "position": "top",
                                    formatter: function(p) {
                                        return p.value > 0 ? (p.value) : '';
                                    }
                                }
                            }
                        },
                        "data": [
                            4675,
                            6209,
                            4323,
                            2865,
                            4298
                        ]
                    },
                ]
            });
            
            // 基于准备好的dom，初始化echarts实例
            var echart2 = echarts.init(document.getElementById('echart2'));

            var countries = ['宏明电子', '宏科电子', '宏明双新', '投资物业管理公司'];
            var years = ['2017年', '2018年', '2019年', '2020年'];

            var data = [
                [
                    [10, 32.81634155, 32.81634155],
                    [20, 34.81634155, 34.81634155],
                    [30, 42.81634155, 42.81634155],
                    [50, 52.81634155, 52.81634155]
                            // [11, 72.93094646, 1.049495413]
                ],
                [
                    [20, 42.85611751, 42.117552039],
                    [30, 48.85611751, 48.117552039],
                    [50, 66.85611751, 62.117552039],
                    [70, 80.85611751, 80.117552039]
                            // [38, 82.71666001, 1.516459314]
                ],
                [
                    [50, 59.64367964, 59.127082033],
                    [60, 62.64367964, 62.127082033],
                    [70, 79.64367964, 79.127082033],
                    [90, 90.64367964, 90.127082033]
                            // [85, 82.26465631, 2.05860102]
                ],
                [
                    [60, 78.86101514, 70.130459055],
                    [70, 79.86101514, 69.130459055],
                    [80, 92.861015145, 92.130459055],
                    [100, 98.86101514, 98.130459055]
                            // [100, 84.42110679, 10.899411182]
                ]
            ];

// 如果看不懂这段代码，那么就不用这段代码，
// 自己估计一个最大值也可以。
            function getMax(dim) {
                var max = 0;
                data.forEach(function(dataByYear) {
                    dataByYear.forEach(function(item) {
                        if (item[dim] > max) {
                            max = item[dim];
                        }
                    });
                });
                var exp = Math.round(Math.log(max) / Math.log(10));
                var exp10 = Math.pow(10, exp);
                max = Math.ceil(max / exp10 * 10) / 10 * exp10;

                return max;
            }


            var itemStyle = {
                normal: {
                    opacity: 0.8,
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowOffsetY: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            };

            option = {
                baseOption: {
                    timeline: {
                        axisType: 'category',
                        orient: 'vertical',
                        autoPlay: true,
                        inverse: true,
                        playInterval: 1500,
                        left: null,
                        right: 10,
                        top: 20,
                        bottom: 20,
                        width: 55,
                        height: null,
                        label: {
                            normal: {
                                textStyle: {
                                    color: '#ddd'
                                }
                            },
                            emphasis: {
                                textStyle: {
                                    color: '#fff'
                                }
                            }
                        },
                        symbol: 'none',
                        lineStyle: {
                            color: '#555'
                        },
                        checkpointStyle: {
                            color: '#bbb',
                            borderColor: '#777',
                            borderWidth: 2
                        },
                        controlStyle: {
                            showNextBtn: false,
                            showPrevBtn: false,
                            normal: {
                                color: '#666',
                                borderColor: '#666'
                            },
                            emphasis: {
                                color: '#aaa',
                                borderColor: '#aaa'
                            }
                        },
                        data: years
                    },
                    backgroundColor: '#333',
                    title: {
                        text: '',
                        textAlign: 'center',
                        right: '3',
                        bottom: 110,
                        textStyle: {
                            fontSize: 70,
                            color: 'rgba(255, 255, 255, 0.9)'
                        }
                    },
                    tooltip: {
                        padding: 5,
                        backgroundColor: '#222',
                        borderColor: '#777',
                        borderWidth: 1
                    },
                    xAxis: {
                        type: 'value',
                        name: '年份',
                        nameGap: 25,
                        min: 0,
                        max: getMax(0),
                        nameLocation: 'middle',
                        nameTextStyle: {
                            fontSize: 18
                        },
                        splitLine: {
                            show: false
                        },
                        axisTick: {
                            lineStyle: {
                                color: '#ddd'
                            }
                        },
                        axisLine: {
                            lineStyle: {
                                color: '#ddd'
                            }
                        },
                        axisLabel: {
                            textStyle: {
                                color: '#ddd'
                            }
                        }
                    },
                    yAxis: {
                        type: 'value',
                        name: '利润环比增长率 ',
                        nameGap: 25,
                        min: 0,
                        max: getMax(1),
                        nameTextStyle: {
                            color: '#ccc',
                            fontSize: 18
                        },
                        axisLine: {
                            lineStyle: {
                                color: '#ddd'
                            }
                        },
                        axisTick: {
                            lineStyle: {
                                color: '#ddd'
                            }
                        },
                        splitLine: {
                            show: false
                        },
                        axisLabel: {
                            formatter: '{value} ',
                            textStyle: {
                                color: '#ddd'
                            }
                        }
                    },
                    grid: {
                        left: 180,
                        right: 110,
                        bottom: 100
                    },
                    toolbox: {
                        top: 25,
                        left: 10,
                        itemSize: 20,
                        iconStyle: {
                            normal: {
                                borderColor: '#eee'
                            },
                            emphasis: {
                                borderColor: '#fffb60'
                            }
                        }
                    },
                    visualMap: [{
                            type: 'piecewise',
                            dimension: 3,
                            categories: countries,
                            left: 10,
                            bottom: 35,
                            calculable: true,
                            precision: 0.1,
                            textGap: 10,
                            itemGap: 3,
                            textStyle: {
                                color: '#ccc'
                            },
                            inRange: {
                                color: ['#bcd3bb', '#e88f70', '#9dc5c8', '#e1e8c8', '#7b7c68', '#e5b5b5', '#f0b489', '#928ea8', '#bda29a', '#376956', '#c3bed4', '#495a80', '#9966cc', '#bdb76a', '#eee8ab', '#a35015', '#04dd98', '#d9b3e6', '#b6c3fc', '#315dbc', '#c5c975', '#476a54', '#66e638', '#a59619', '#822ee2', '#49450d', '#eeebd4', '#2b98dc', '#b95c25', '#8f1ec2', '#d50390', '#36a15d', '#edc1a5']
                            },
                            outOfRange: {
                                color: '#555'
                            }
                        }, {
                            show: false,
                            type: 'continuous',
                            dimension: 2,
                            min: 0,
                            max: 5,
                            inRange: {
                                symbolSize: [10, 50]
                            }
                        }],
                    dataZoom: [{
                            type: 'inside',
                            xAxisIndex: 0
                        }, {
                            show: true,
                            type: 'slider',
                            xAxisIndex: 0
                        }],
                    series: [{
                            type: 'scatter',
                            id: 'gridScatter',
                            itemStyle: itemStyle,
                            data: [],
                            tooltip: {
                                formatter: function(obj) {
                                    var value = obj.value;
                                    return '<div style="border-bottom: 1px solid #555;padding-bottom: 5px; margin-bottom: 5px;">' + value[3] + '</div>' +
                                            '发展完善率：' + value[0] + ' %<br>' +
                                            '政府监管率：' + value[1] + ' %<br>' +
                                            '后台监管率：' + value[2] + ' %<br>'
                                }
                            }
                        }],
                    animationDurationUpdate: 1000,
                    animationEasingUpdate: 'quinticInOut'
                },
                options: []
            };

            for (var n = 0; n < years.length; n++) {
                option.options.push({
                    title: {
                        text: years[n]
                    },
                    series: {
                        id: 'gridScatter',
                        type: 'scatter',
                        itemStyle: itemStyle,
                        data: data[n].map(function(item, index) {
                            return item.concat([countries[index]]);
                        }),
                        symbolSize: 10
                    }
                });
            }
            
            echart2.setOption(option);
        </script>