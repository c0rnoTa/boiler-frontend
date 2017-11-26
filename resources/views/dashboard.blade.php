<!-- Bread crumb is created dynamically -->

<!--
The ID "widget-grid" will start to initialize all widgets below
	You do not need to use widgets if you dont want to. Simply remove
	the <section></section> and you can use wells or panels instead
-->

<!-- widget grid -->
<section id="widget-grid" class="">

	<div class="row">
		<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget" id="wid-id-0" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false">
				<!-- widget options:
					usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

data-widget-colorbutton="false"
					data-widget-editbutton="false"
					data-widget-togglebutton="false"
					data-widget-deletebutton="false"
					data-widget-fullscreenbutton="false"
					data-widget-custombutton="false"
					data-widget-collapsed="true"
					data-widget-sortable="false"

                        -->
				<header>

					<h2>Температуры котла за последние {{ $minutes }} минут </h2>

				</header>

				<!-- widget div-->
				<div>

					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
						<input class="form-control" type="text">
					</div>
					<!-- end widget edit box -->

					<!-- widget content -->
					<div class="widget-body">
						<!-- this is what the user will see -->
						<canvas id="lineChart" height="50"></canvas>
					</div>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
			<!-- end widget -->

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false">
				<!-- widget options:
					usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

data-widget-colorbutton="false"
					data-widget-editbutton="false"
					data-widget-togglebutton="false"
					data-widget-deletebutton="false"
					data-widget-fullscreenbutton="false"
					data-widget-custombutton="false"
					data-widget-collapsed="true"
					data-widget-sortable="false"

                        -->
				<header>

					<h2>Мощность котла, кВт </h2>

				</header>

				<!-- widget div-->
				<div>

					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
						<input class="form-control" type="text">
					</div>
					<!-- end widget edit box -->

					<!-- widget content -->
					<div class="widget-body">
						<!-- this is what the user will see -->
						<canvas id="lineChart2" height="50"></canvas>
					</div>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
			<!-- end widget -->

		</article>


	</div>

	<!-- row -->
	<div class="row">

		<!-- NEW WIDGET START -->
		<article class="col-xs-12 col-sm-4 col-md-4 col-lg-4">

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget" id="wid-id-4" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false">
				<!-- widget options:
					usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

data-widget-colorbutton="false"
					data-widget-editbutton="false"
					data-widget-togglebutton="false"
					data-widget-deletebutton="false"
					data-widget-fullscreenbutton="false"
					data-widget-custombutton="false"
					data-widget-collapsed="true"
					data-widget-sortable="false"

                        -->
				<header>

					<h2>Режимы работы </h2>

				</header>

				<!-- widget div-->
				<div>

					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
						<input class="form-control" type="text">
					</div>
					<!-- end widget edit box -->

					<!-- widget content -->
					<div class="widget-body">

						<!-- this is what the user will see -->
						<canvas id="doughnutChart" height="120"></canvas>

					</div>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
			<!-- end widget -->

		</article>
		<!-- WIDGET END -->

		<!-- NEW WIDGET START -->
		<article class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

			<!-- Widget ID (each widget will need unique ID)-->
			<div class="jarviswidget" id="wid-id-5" data-widget-colorbutton="false" data-widget-fullscreenbutton="false" data-widget-editbutton="false" data-widget-sortable="false">
				<!-- widget options:
					usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

data-widget-colorbutton="false"
					data-widget-editbutton="false"
					data-widget-togglebutton="false"
					data-widget-deletebutton="false"
					data-widget-fullscreenbutton="false"
					data-widget-custombutton="false"
					data-widget-collapsed="true"
					data-widget-sortable="false"

                        -->
				<header>

					<h2>Суммарные показатели за {{ $minutes }} минут </h2>

				</header>

				<!-- widget div-->
				<div>

					<!-- widget edit box -->
					<div class="jarviswidget-editbox">
						<!-- This area used as dropdown edit box -->
						<input class="form-control" type="text">
					</div>
					<!-- end widget edit box -->

					<!-- widget content -->
					<div class="widget-body">

						Расход: {{ $rashod }} кг.

					</div>
					<!-- end widget content -->

				</div>
				<!-- end widget div -->

			</div>
			<!-- end widget -->

		</article>
		<!-- WIDGET END -->


	</div>

	<!-- end row -->

	<!-- row -->

	<div class="row">

		<!-- a blank row to get started -->
		<div class="col-sm-12">






		</div>

	</div>

	<!-- end row -->

</section>
<!-- end widget grid -->

<script type="text/javascript">

    /* DO NOT REMOVE : GLOBAL FUNCTIONS!
     *
     * pageSetUp(); WILL CALL THE FOLLOWING FUNCTIONS
     *
     * // activate tooltips
     * $("[rel=tooltip]").tooltip();
     *
     * // activate popovers
     * $("[rel=popover]").popover();
     *
     * // activate popovers with hover states
     * $("[rel=popover-hover]").popover({ trigger: "hover" });
     *
     * // activate inline charts
     * runAllCharts();
     *
     * // setup widgets
     * setup_widgets_desktop();
     *
     * // run form elements
     * runAllForms();
     *
     ********************************
     *
     * pageSetUp() is needed whenever you load a page.
     * It initializes and checks for all basic elements of the page
     * and makes rendering easier.
     *
     */

    pageSetUp();

	/*
	 * ALL PAGE RELATED SCRIPTS CAN GO BELOW HERE
	 * eg alert("my home function");
	 *
	 * var pagefunction = function() {
	 *   ...
	 * }
	 * loadScript("js/plugin/_PLUGIN_NAME_.js", pagefunction);
	 *
	 * TO LOAD A SCRIPT:
	 * var pagefunction = function (){
	 *  loadScript(".../plugin.js", run_after_loaded);
	 * }
	 *
	 * OR you can load chain scripts by doing
	 *
	 * loadScript(".../plugin.js", function(){
	 * 	 loadScript("../plugin.js", function(){
	 * 	   ...
	 *   })
	 * });
	 */

	 var  LineConfig, LineConfig2, DoughtnutConfig;

	// pagefunction

	var pagefunction = function() {
    // clears the variable if left blank



    // reference: http://www.chartjs.org/docs/
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
        //return 0;
    };
    var randomColorFactor = function() {
        return Math.round(Math.random() * 255);
    };
    var randomColor = function(opacity) {
        return 'rgba(' + randomColorFactor() + ',' + randomColorFactor() + ',' + randomColorFactor() + ',' + (opacity || '.3') + ')';
    };


    LineConfig = {
        type: 'line',
		data: {
            labels: [
				@foreach ($timeArray as $timePin)
						"{{ $timePin }}",
				@endforeach
			],
			datasets: [{
                label: "Температура котла",
                backgroundColor: 'rgba(234,116,16,0.5)',
                pointBackgroundColor: 'rgba(64,170,242,0.5)',
				data: [
				    @foreach ($alldata as $row)
						"{{ $row->val0 }}",
					@endforeach
				],
			}, {
                label: "Температура обратки",
                backgroundColor: 'rgba(22,96,142,0.5)',
                pointBackgroundColor: 'rgba(57,135,247,0.5)',
				data: [
					@foreach ($alldata as $row)
						"{{ $row->val1 }}",
					@endforeach
				]
			}]
		},
		options: {
            responsive: true,
			tooltips: {
                mode: 'label'
			},
			hover: {
                mode: 'dataset'
			},
			scales: {
                xAxes: [{
                    display: true,
					scaleLabel: {
                        show: true,
						labelString: 'Время'
                    }
                }],
				yAxes: [{
                    display: true,
					scaleLabel: {
                        show: true,
						labelString: 'Температура'
					},
					ticks: {
                        suggestedMin: {{ $suggested['min'] }},
						suggestedMax: {{ $suggested['max'] }}
					}
                }]
            }
        }
    };

    $.each(LineConfig.data.datasets, function(i, dataset) {
        dataset.borderColor = 'rgba(0,0,0,0.15)';
        //dataset.backgroundColor = randomColor(0.5);
		dataset.pointBorderColor = 'rgba(0,0,0,0.15)';
		// dataset.pointBackgroundColor = randomColor(0.5);
		dataset.pointBorderWidth = 1;
    });


        LineConfig2 = {
            type: 'line',
            data: {
                labels: [
					@foreach ($timeArray as $timePin)
                        "{{ $timePin }}",
					@endforeach
                ],
                datasets: [{
                    label: "Мощность котла",
                    backgroundColor: "rgba(0,203,104,0.5)",
                    pointBackgroundColor: "rgba(148,47,96,0.5)",
                    pointBorderWidth: 1,
                    pointBorderColor: 'rgba(0,0,0,0.15)',
                    borderColor: 'rgba(0,0,0,0.15)',
                    data: [
						@foreach ($alldata as $row)
                            "{{ $row->val2 }}",
						@endforeach
                    ],
                }]
            },
            options: {
                responsive: true,
                tooltips: {
                    mode: 'label'
                },
                hover: {
                    mode: 'dataset'
                },
                legend: {
                    display: false,
                    position: 'top'
                },
                scales: {
                    xAxes: [{
                        display: true,
                        scaleLabel: {
                            show: true,
                            labelString: 'Время'
                        }
                    }],
                    yAxes: [{
                        display: true,
                        scaleLabel: {
                            show: true,
                            labelString: 'Мощность'
                        },
                        ticks: {
                            suggestedMin: 4,
                            suggestedMax: 12
                        }
                    }]
                }
            }
        };

    DoughtnutConfig = {
        type: 'doughnut',
		data: {
            datasets: [{
                data: [
                    @foreach($regim as $work)
					{{ $work['value'] }},
					@endforeach
                ],
				backgroundColor: [
                    @foreach($regim as $work)
					"{{ $work['color'] }}",
					@endforeach
				],
				label: 'Режимы работы'
			}],

			labels: [
				@foreach($regim as $work)
				"{{ $work['name'] }}",
				@endforeach
			]
		},
		options: {
            responsive: true,
			legend: {
                display: true,
                position: 'top'
			}
        }
    };

    myLine = new Chart(document.getElementById("lineChart"), LineConfig);
    myLine2 = new Chart(document.getElementById("lineChart2"), LineConfig2);
    myDoughnut = new Chart(document.getElementById("doughnutChart"), DoughtnutConfig);

	}; // end of page load function


	loadScript("js/plugin/moment/moment.min.js", function(){
	    loadScript("js/plugin/chartjs/chart.min.js", pagefunction)
	});

	// end pagefunction

	// destroy generated instances
	// pagedestroy is called automatically before loading a new page
	// only usable in AJAX version!

	var pagedestroy = function(){

    //destroy all charts
    myLine.destroy();
    LineConfig=null;

    myDoughnut.destroy();
    DoughtnutConfig=null;

    if (debugState){
        root.console.log("✔ Chart.js charts destroyed");
    }
}

	// end destroy

</script>
