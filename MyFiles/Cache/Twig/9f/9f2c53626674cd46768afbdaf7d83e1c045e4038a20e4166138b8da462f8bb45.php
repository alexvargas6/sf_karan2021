<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ReportResult.html.twig */
class __TwigTemplate_195140b5da9402e1709ea29c51e7a087a9c4aa2940b98e1411d4b8293916bb7e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 6
        return "Master/MenuBgTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        $context["pageData"] = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 8);
        // line 6
        $this->parent = $this->loadTemplate("Master/MenuBgTemplate.html.twig", "ReportResult.html.twig", 6);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "    <div class=\"container-fluid d-print-none\">
        ";
        // line 12
        $this->displayParentBlock("body", $context, $blocks);
        echo "
        <div class=\"row\">
            <div class=\"col-md-7\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 16), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["refresh"], "method", false, false, false, 16), "html", null, true);
        echo "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 19), "html", null, true);
        echo "?defaultPage=TRUE\"
                       title=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["mark-as-homepage"], "method", false, false, false, 20), "html", null, true);
        echo "\">
                        <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                    </a>
                </div>
            </div>

            <div class=\"col-md-5 text-right\">
                <h1 class=\"h4 mb-0 d-none d-md-inline-block\">
                    ";
        // line 28
        $context["title"] = twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", [(($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 28)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["title"] ?? null) : null)], "method", false, false, false, 28));
        // line 29
        echo "                    ";
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "<i class=\"";
        echo twig_escape_filter($this->env, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 29)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["icon"] ?? null) : null), "html", null, true);
        echo " ml-3\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"card border-primary shadow mt-4\">
                    <div class=\"card-header bg-primary text-white d-flex flex-row\">
                        <select class=\"form-control\" id=\"selectYear\">
                            ";
        // line 41
        echo twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getYears", [], "method", false, false, false, 41);
        echo "
                        </select>
                        <button class=\"btn btn-primary btn-sm btn-spin-action ml-2 mt-2\"></button>
                    </div>
                    <div id=\"summaryData\"></div>
                </div>

                <div class=\"card border-success shadow mt-4\">
                    <h5 class=\"card-header bg-success text-white pointer d-flex\" id=\"showSales\">
                        ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["sales"], "method", false, false, false, 50), "html", null, true);
        echo "
                        <button class=\"btn btn-success btn-sm btn-spin-action ml-auto\">
                            <i class=\"fa fa-plus\"></i>
                        </button>
                    </h5>
                    <div id=\"salesReport\" class=\"collapse\">
                        <div class=\"card-body p-0\"></div>
                    </div>
                </div>

                <div class=\"card border-danger shadow mt-4\">
                    <h5 class=\"card-header bg-danger text-white pointer d-flex\" id=\"showPurchases\">
                        ";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["expenses"], "method", false, false, false, 62), "html", null, true);
        echo "
                        <button class=\"btn btn-danger btn-sm btn-spin-action ml-auto\">
                            <i class=\"fa fa-plus\"></i>
                        </button>
                    </h5>
                    <div id=\"purchasesReport\" class=\"collapse\">
                        <div class=\"card-body p-0\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"col-12\">
                <div class=\"card shadow mt-4\">
                    <div class=\"card-body h5\">
                        <i class=\"fas fa-chart-line\"></i> ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["annual-result"], "method", false, false, false, 77), "html", null, true);
        echo "
                    </div>
                    <div class=\"canva\">
                        <canvas id=\"chartsResume\"></canvas>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card shadow mt-4\">
                    <div class=\"card-body h5\">
                        <i class=\"fas fa-chart-pie\"></i> ";
        // line 87
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["sales-per-family"], "method", false, false, false, 87), "html", null, true);
        echo "
                    </div>
                    <div class=\"canva\">
                        <canvas id=\"chartsFamilies\"></canvas>
                    </div>
                    <div class=\"table-responsive\" id=\"chartsListFamilies\">
                        <table class=\"table mb-0 table-sm\">
                            <thead>
                            <th></th>
                            <th>";
        // line 96
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["family"], "method", false, false, false, 96), "html", null, true);
        echo "</th>
                            <th class=\"porc\">%</th>
                            <th class=\"total\">";
        // line 98
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total"], "method", false, false, false, 98), "html", null, true);
        echo "</th>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card shadow mt-4\">
                    <div class=\"card-body h5\">
                        <i class=\"fas fa-chart-pie\"></i> ";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["sales-per-serie"], "method", false, false, false, 108), "html", null, true);
        echo "
                    </div>
                    <div class=\"canva\">
                        <canvas id=\"chartsSeries\"></canvas>
                    </div>
                    <div class=\"table-responsive\" id=\"chartsListSeries\">
                        <table class=\"table mb-0 table-sm\">
                            <thead>
                            <th></th>
                            <th>";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["serie"], "method", false, false, false, 117), "html", null, true);
        echo "</th>
                            <th class=\"porc\">%</th>
                            <th class=\"total\">";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total"], "method", false, false, false, 119), "html", null, true);
        echo "</th>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card shadow mt-4\">
                    <div class=\"card-body h5\">
                        <i class=\"fas fa-chart-pie\"></i> ";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["sales-per-paymethod"], "method", false, false, false, 129), "html", null, true);
        echo "
                    </div>
                    <div class=\"canva\">
                        <canvas id=\"chartsPagos\"></canvas>
                    </div>
                    <div class=\"table-responsive\" id=\"chartsListPagos\">
                        <table class=\"table mb-0 table-sm\">
                            <thead>
                            <th></th>
                            <th>";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["method-payment"], "method", false, false, false, 138), "html", null, true);
        echo "</th>
                            <th class=\"porc\">%</th>
                            <th class=\"total\">";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total"], "method", false, false, false, 140), "html", null, true);
        echo "</th>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card shadow mt-4\">
                    <div class=\"card-body h5\">
                        <i class=\"fas fa-chart-pie\"></i> ";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["sales-per-agent"], "method", false, false, false, 150), "html", null, true);
        echo "
                    </div>
                    <div class=\"canva\">
                        <canvas id=\"chartsAgentes\"></canvas>
                    </div>
                    <div class=\"table-responsive\" id=\"chartsListAgentes\">
                        <table class=\"table mb-0 table-sm\">
                            <thead>
                            <th></th>
                            <th>";
        // line 159
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["agent"], "method", false, false, false, 159), "html", null, true);
        echo "</th>
                            <th class=\"porc\">%</th>
                            <th class=\"total\">";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total"], "method", false, false, false, 161), "html", null, true);
        echo "</th>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 172
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 173
        echo "    ";
        $this->displayParentBlock("css", $context, $blocks);
        echo "

    <style>
        .canva {
            height: 300px;
        }

        .card-header .fa {
            transition: .3s transform ease-in-out;
        }

        .card-header .collapsed .fa {
            transform: rotate(90deg);
        }

        #selectYear {
            max-width: 300px;
        }

        table .porc, table .total, table .month {
            white-space: nowrap;
            text-align: right;
        }

        table .title {
            width: 15%;
        }

        table .porc {
            width: 6%;
        }

        tr.subfamily{
            background: #e6f0ff;
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
        }
    </style>
";
    }

    // line 213
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 214
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getFunction('asset')->getCallable()("node_modules/chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>

    <script>
        let accountReport = '';
        let agentesChart;
        let familiesChart;
        let familyReport = '';
        let pagosChart;
        let purchasesReport = false;
        let resumeChart;
        let salesReport = false;
        let seriesChart;

        \$(document).ready(function () {
            function initPage() {
                if (salesReport) {
                    \$('#showSales').click();
                }

                if (purchasesReport) {
                    \$('#showPurchases').click();
                }

                \$('#salesReport .card-body').html('');
                \$('#purchasesReport .card-body').html('');

                let formData = new FormData();
                formData.append('action', 'load-summary');
                sendForm(formData);
            }

            function sendForm(formData) {
                animateSpinner('add');

                formData.append('codejercicio', \$('#selectYear option:selected').val());

                console.log(Object.fromEntries(formData));

                fetch('";
        // line 254
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 254), "html", null, true);
        echo "', {
                    method: 'POST',
                    body: formData
                }).then(function (response) {
                    if (response.ok) {
                        return response.json();
                    }
                    return Promise.reject(response);
                }).then(function (data) {
                    console.log(data);

                    if (data.summary && data.summary !== '') {
                        \$('#summaryData').html(data.summary);
                        setCharts(data.charts);
                    }

                    if (data.sales && data.sales !== '') {
                        \$('#salesReport .card-body').html(data.sales);
                    }

                    if (data.purchases && data.purchases !== '') {
                        \$('#purchasesReport .card-body').html(data.purchases);
                    }

                    if (data.family && data.family !== '') {
                        \$('#salesReport tr').each(function(){
                            if (\$(this).attr('codfamilia') === data.codfamilia) {
                                \$(this).after(data.family);
                            }
                        });
                    }

                    if (data.account && data.account !== '') {
                        \$('#purchasesReport tr').each(function(){
                            if (\$(this).attr('codcuenta') === data.codcuenta) {
                                \$(this).after(data.account);
                            }
                        });
                    }

                    if (Array.isArray(data.messages)) {
                        data.messages.forEach(item => alert(item.message));
                    }

                    animateSpinner('remove');
                }).catch(function (error) {
                    alert('error');
                    console.warn(error);
                    animateSpinner('remove');
                });

                return false;
            }

            function setCharts(charts) {
                \$('#chartsListFamilies table tbody').html(charts['families']['table']);
                \$('#chartsListSeries table tbody').html(charts['series']['table']);
                \$('#chartsListPagos table tbody').html(charts['pagos']['table']);
                \$('#chartsListAgentes table tbody').html(charts['agentes']['table']);

                window.chartColors = {
                    red: 'rgb(255, 99, 132)',
                    orange: 'rgb(255, 159, 64)',
                    yellow: 'rgb(255, 205, 86)',
                    green: 'rgb(75, 192, 192)',
                    blue: 'rgb(54, 162, 235)',
                    purple: 'rgb(153, 102, 255)',
                    grey: 'rgb(231,233,237)'
                };
                let dataResume = {
                    labels: [
                        \"";
        // line 325
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["january"], "method", false, false, false, 325), "html", null, true);
        echo "\",
                        \"";
        // line 326
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["february"], "method", false, false, false, 326), "html", null, true);
        echo "\",
                        \"";
        // line 327
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["march"], "method", false, false, false, 327), "html", null, true);
        echo "\",
                        \"";
        // line 328
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["april"], "method", false, false, false, 328), "html", null, true);
        echo "\",
                        \"";
        // line 329
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["may"], "method", false, false, false, 329), "html", null, true);
        echo "\",
                        \"";
        // line 330
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["june"], "method", false, false, false, 330), "html", null, true);
        echo "\",
                        \"";
        // line 331
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["july"], "method", false, false, false, 331), "html", null, true);
        echo "\",
                        \"";
        // line 332
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["august"], "method", false, false, false, 332), "html", null, true);
        echo "\",
                        \"";
        // line 333
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["september"], "method", false, false, false, 333), "html", null, true);
        echo "\",
                        \"";
        // line 334
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["october"], "method", false, false, false, 334), "html", null, true);
        echo "\",
                        \"";
        // line 335
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["november"], "method", false, false, false, 335), "html", null, true);
        echo "\",
                        \"";
        // line 336
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["december"], "method", false, false, false, 336), "html", null, true);
        echo "\"],
                    datasets: [{
                        type: 'line',
                        label: '";
        // line 339
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["sales"], "method", false, false, false, 339), "html", null, true);
        echo "',
                        borderColor: window.chartColors.green,
                        borderWidth: 2,
                        fill: false,
                        data: charts['totales']['ventas']
                    }, {
                        type: 'line',
                        label: '";
        // line 346
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["expenses"], "method", false, false, false, 346), "html", null, true);
        echo "',
                        borderColor: window.chartColors.red,
                        borderWidth: 2,
                        fill: false,
                        data: charts['totales']['gastos']
                    }, {
                        type: 'line',
                        label: '";
        // line 353
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["result"], "method", false, false, false, 353), "html", null, true);
        echo "',
                        borderColor: window.chartColors.blue,
                        borderWidth: 4,
                        fill: false,
                        data: charts['totales']['resultado']
                    }]
                };
                let dataFamilies = {
                    labels: charts['families']['labels'],
                    datasets: [{
                        data: charts['families']['porc'],
                        data2: charts['families']['totales'],
                        backgroundColor: charts['families']['colors'],
                        hoverBackgroundColor: charts['families']['colors']
                    }]
                };
                let dataSeries = {
                    labels: charts['series']['labels'],
                    datasets: [{
                        data: charts['series']['porc'],
                        data2: charts['series']['totales'],
                        backgroundColor: charts['series']['colors'],
                        hoverBackgroundColor: charts['series']['colors']
                    }]
                };
                let dataPagos = {
                    labels: charts['pagos']['labels'],
                    datasets: [{
                        data: charts['pagos']['porc'],
                        data2: charts['pagos']['totales'],
                        backgroundColor: charts['pagos']['colors'],
                        hoverBackgroundColor: charts['pagos']['colors']
                    }]
                };
                let dataAgentes = {
                    labels: charts['agentes']['labels'],
                    datasets: [{
                        data: charts['agentes']['porc'],
                        data2: charts['agentes']['totales'],
                        backgroundColor: charts['agentes']['colors'],
                        hoverBackgroundColor: charts['agentes']['colors']
                    }]
                };

                if (resumeChart != null) {
                    resumeChart.destroy();
                }

                if (familiesChart != null) {
                    familiesChart.destroy();
                }

                if (seriesChart != null) {
                    seriesChart.destroy();
                }

                if (pagosChart != null) {
                    pagosChart.destroy();
                }

                if (agentesChart != null) {
                    agentesChart.destroy();
                }

                let canvaResume = document.getElementById(\"chartsResume\");
                let canvaFamilies = document.getElementById(\"chartsFamilies\");
                let canvaSeries = document.getElementById(\"chartsSeries\");
                let canvaPagos = document.getElementById(\"chartsPagos\");
                let canvaAgentes = document.getElementById(\"chartsAgentes\");

                resumeChart = Chart.Line(canvaResume.getContext(\"2d\"), {
                    data: dataResume,
                    options: {
                        maintainAspectRatio: false,
                        showAllTooltips: false,
                        responsive: true,
                        hoverMode: 'index',
                        stacked: false,
                        title: {
                            display: false,
                            text: '";
        // line 433
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["charts-per-month"], "method", false, false, false, 433), "html", null, true);
        echo "'
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: true
                        }
                    }
                });

                familiesChart = new Chart(canvaFamilies.getContext(\"2d\"), {
                    type: 'pie',
                    data: dataFamilies,
                    options: {
                        maintainAspectRatio: false,
                        showAllTooltips: false,
                        cutoutPercentage: 40,
                        responsive: true,
                        animation: {
                            animateRotate: true,
                            animateScale: true
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: true,
                            callbacks: {
                                label: function (tooltipItem, data) {
                                    let allData = data.datasets[tooltipItem.datasetIndex].data;
                                    let allData2 = data.datasets[tooltipItem.datasetIndex].data2;
                                    let tooltipLabel = data.labels[tooltipItem.index];
                                    let tooltipData = allData[tooltipItem.index];
                                    let tooltipData2 = allData2[tooltipItem.index];
                                    let total = 0;
                                    for (let i in allData) {
                                        total += allData[i];
                                    }
                                    let tooltipPercentage = Math.round((tooltipData / total) * 100);
                                    return tooltipLabel + ': ' + tooltipData2 + ' (' + tooltipPercentage + '%)';
                                }
                            }
                        }
                    }
                });

                seriesChart = new Chart(canvaSeries.getContext(\"2d\"), {
                    type: 'pie',
                    data: dataSeries,
                    options: {
                        maintainAspectRatio: false,
                        showAllTooltips: false,
                        cutoutPercentage: 40,
                        responsive: true,
                        animation: {
                            animateRotate: true,
                            animateScale: true
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: true,
                            callbacks: {
                                label: function (tooltipItem, data) {
                                    let allData = data.datasets[tooltipItem.datasetIndex].data;
                                    let allData2 = data.datasets[tooltipItem.datasetIndex].data2;
                                    let tooltipLabel = data.labels[tooltipItem.index];
                                    let tooltipData = allData[tooltipItem.index];
                                    let tooltipData2 = allData2[tooltipItem.index];
                                    let total = 0;
                                    for (let i in allData) {
                                        total += allData[i];
                                    }
                                    let tooltipPercentage = Math.round((tooltipData / total) * 100);
                                    return tooltipLabel + ': ' + tooltipData2 + ' (' + tooltipPercentage + '%)';
                                }
                            }
                        }
                    }
                });

                pagosChart = new Chart(canvaPagos.getContext(\"2d\"), {
                    type: 'pie',
                    data: dataPagos,
                    options: {
                        maintainAspectRatio: false,
                        showAllTooltips: false,
                        cutoutPercentage: 40,
                        responsive: true,
                        animation: {
                            animateRotate: true,
                            animateScale: true
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: true,
                            callbacks: {
                                label: function (tooltipItem, data) {
                                    let allData = data.datasets[tooltipItem.datasetIndex].data;
                                    let allData2 = data.datasets[tooltipItem.datasetIndex].data2;
                                    let tooltipLabel = data.labels[tooltipItem.index];
                                    let tooltipData = allData[tooltipItem.index];
                                    let tooltipData2 = allData2[tooltipItem.index];
                                    let total = 0;
                                    for (let i in allData) {
                                        total += allData[i];
                                    }
                                    let tooltipPercentage = Math.round((tooltipData / total) * 100);
                                    return tooltipLabel + ': ' + tooltipData2 + ' (' + tooltipPercentage + '%)';
                                }
                            }
                        }
                    }
                });

                agentesChart = new Chart(canvaAgentes.getContext(\"2d\"), {
                    type: 'pie',
                    data: dataAgentes,
                    options: {
                        maintainAspectRatio: false,
                        showAllTooltips: false,
                        cutoutPercentage: 40,
                        responsive: true,
                        animation: {
                            animateRotate: true,
                            animateScale: true
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: true,
                            callbacks: {
                                label: function (tooltipItem, data) {
                                    let allData = data.datasets[tooltipItem.datasetIndex].data;
                                    let allData2 = data.datasets[tooltipItem.datasetIndex].data2;
                                    let tooltipLabel = data.labels[tooltipItem.index];
                                    let tooltipData = allData[tooltipItem.index];
                                    let tooltipData2 = allData2[tooltipItem.index];
                                    let total = 0;
                                    for (let i in allData) {
                                        total += allData[i];
                                    }
                                    let tooltipPercentage = Math.round((tooltipData / total) * 100);
                                    return tooltipLabel + ': ' + tooltipData2 + ' (' + tooltipPercentage + '%)';
                                }
                            }
                        }
                    }
                });
            }

            \$(document).on('change', '#selectYear', function () {
                initPage();
            });

            \$(document).on('click', '#showSales', function () {
                if (salesReport === false) {
                    \$('#showSales svg').removeClass('fa-plus').addClass('fa-minus');
                    salesReport = true;
                    let formData = new FormData();
                    formData.append('action', 'load-sales');
                    sendForm(formData);
                } else {
                    \$('#showSales svg').addClass('fa-plus').removeClass('fa-minus');
                    salesReport = false;
                }
                \$('#salesReport').collapse('toggle');
            });

            \$(document).on('click', '#salesReport tr.ventas', function () {
                if (salesReport) {
                    if (familyReport === \$(this).attr('codfamilia')) {
                        \$('tr.subfamily').remove();
                        familyReport = '';
                        return;
                    }

                    familyReport = \$(this).attr('codfamilia');

                    let formData = new FormData();
                    formData.append('action', 'load-family');
                    formData.append('parent_codfamilia', familyReport);
                    sendForm(formData);
                }
            });

            \$(document).on('click', '#showPurchases', function () {
                if (purchasesReport === false) {
                    \$('#showPurchases svg').removeClass('fa-plus').addClass('fa-minus');
                    purchasesReport = true;
                    let formData = new FormData();
                    formData.append('action', 'load-purchases');
                    sendForm(formData);
                } else {
                    \$('#showPurchases svg').addClass('fa-plus').removeClass('fa-minus');
                    purchasesReport = false;
                }
                \$('#purchasesReport').collapse('toggle');
            });

            \$(document).on('click', '#purchasesReport tr.gastos', function () {
                if (purchasesReport) {
                    if (accountReport === \$(this).attr('codcuenta')) {
                        \$('tr.subaccount').remove();
                        accountReport = '';
                        return;
                    }

                    accountReport = \$(this).attr('codcuenta');

                    let formData = new FormData();
                    formData.append('action', 'load-account');
                    formData.append('parent_codcuenta', accountReport);
                    sendForm(formData);
                }
            });

            initPage();
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "ReportResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  613 => 433,  530 => 353,  520 => 346,  510 => 339,  504 => 336,  500 => 335,  496 => 334,  492 => 333,  488 => 332,  484 => 331,  480 => 330,  476 => 329,  472 => 328,  468 => 327,  464 => 326,  460 => 325,  386 => 254,  345 => 216,  339 => 214,  335 => 213,  291 => 173,  287 => 172,  273 => 161,  268 => 159,  256 => 150,  243 => 140,  238 => 138,  226 => 129,  213 => 119,  208 => 117,  196 => 108,  183 => 98,  178 => 96,  166 => 87,  153 => 77,  135 => 62,  120 => 50,  108 => 41,  90 => 29,  88 => 28,  77 => 20,  73 => 19,  65 => 16,  58 => 12,  55 => 11,  51 => 10,  46 => 6,  44 => 8,  37 => 6,);
    }

    public function getSourceContext()
    {
        return new Source("{#
* Copyright (C) 2019-2023 Carlos Garcia Gomez <carlos@facturascripts.com>
* Author Daniel Fernández Giménez <hola@danielfg.es>
#}

{% extends \"Master/MenuBgTemplate.html.twig\" %}

{% set pageData = fsc.getPageData() %}

{% block body %}
    <div class=\"container-fluid d-print-none\">
        {{ parent() }}
        <div class=\"row\">
            <div class=\"col-md-7\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"{{ fsc.url() }}\" title=\"{{ i18n.trans('refresh') }}\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    <a class=\"btn btn-sm btn-secondary\" href=\"{{ fsc.url() }}?defaultPage=TRUE\"
                       title=\"{{ i18n.trans('mark-as-homepage') }}\">
                        <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                    </a>
                </div>
            </div>

            <div class=\"col-md-5 text-right\">
                <h1 class=\"h4 mb-0 d-none d-md-inline-block\">
                    {% set title = i18n.trans(fsc.getPageData()['title']) | capitalize %}
                    {{ title }}<i class=\"{{ fsc.getPageData()['icon'] }} ml-3\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>

    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <div class=\"card border-primary shadow mt-4\">
                    <div class=\"card-header bg-primary text-white d-flex flex-row\">
                        <select class=\"form-control\" id=\"selectYear\">
                            {{ fsc.getYears() | raw }}
                        </select>
                        <button class=\"btn btn-primary btn-sm btn-spin-action ml-2 mt-2\"></button>
                    </div>
                    <div id=\"summaryData\"></div>
                </div>

                <div class=\"card border-success shadow mt-4\">
                    <h5 class=\"card-header bg-success text-white pointer d-flex\" id=\"showSales\">
                        {{ i18n.trans('sales') }}
                        <button class=\"btn btn-success btn-sm btn-spin-action ml-auto\">
                            <i class=\"fa fa-plus\"></i>
                        </button>
                    </h5>
                    <div id=\"salesReport\" class=\"collapse\">
                        <div class=\"card-body p-0\"></div>
                    </div>
                </div>

                <div class=\"card border-danger shadow mt-4\">
                    <h5 class=\"card-header bg-danger text-white pointer d-flex\" id=\"showPurchases\">
                        {{ i18n.trans('expenses') }}
                        <button class=\"btn btn-danger btn-sm btn-spin-action ml-auto\">
                            <i class=\"fa fa-plus\"></i>
                        </button>
                    </h5>
                    <div id=\"purchasesReport\" class=\"collapse\">
                        <div class=\"card-body p-0\"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"form-row\">
            <div class=\"col-12\">
                <div class=\"card shadow mt-4\">
                    <div class=\"card-body h5\">
                        <i class=\"fas fa-chart-line\"></i> {{ i18n.trans('annual-result') }}
                    </div>
                    <div class=\"canva\">
                        <canvas id=\"chartsResume\"></canvas>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card shadow mt-4\">
                    <div class=\"card-body h5\">
                        <i class=\"fas fa-chart-pie\"></i> {{ i18n.trans('sales-per-family') }}
                    </div>
                    <div class=\"canva\">
                        <canvas id=\"chartsFamilies\"></canvas>
                    </div>
                    <div class=\"table-responsive\" id=\"chartsListFamilies\">
                        <table class=\"table mb-0 table-sm\">
                            <thead>
                            <th></th>
                            <th>{{ i18n.trans('family') }}</th>
                            <th class=\"porc\">%</th>
                            <th class=\"total\">{{ i18n.trans('total') }}</th>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card shadow mt-4\">
                    <div class=\"card-body h5\">
                        <i class=\"fas fa-chart-pie\"></i> {{ i18n.trans('sales-per-serie') }}
                    </div>
                    <div class=\"canva\">
                        <canvas id=\"chartsSeries\"></canvas>
                    </div>
                    <div class=\"table-responsive\" id=\"chartsListSeries\">
                        <table class=\"table mb-0 table-sm\">
                            <thead>
                            <th></th>
                            <th>{{ i18n.trans('serie') }}</th>
                            <th class=\"porc\">%</th>
                            <th class=\"total\">{{ i18n.trans('total') }}</th>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card shadow mt-4\">
                    <div class=\"card-body h5\">
                        <i class=\"fas fa-chart-pie\"></i> {{ i18n.trans('sales-per-paymethod') }}
                    </div>
                    <div class=\"canva\">
                        <canvas id=\"chartsPagos\"></canvas>
                    </div>
                    <div class=\"table-responsive\" id=\"chartsListPagos\">
                        <table class=\"table mb-0 table-sm\">
                            <thead>
                            <th></th>
                            <th>{{ i18n.trans('method-payment') }}</th>
                            <th class=\"porc\">%</th>
                            <th class=\"total\">{{ i18n.trans('total') }}</th>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class=\"col-md-6 col-lg-3\">
                <div class=\"card shadow mt-4\">
                    <div class=\"card-body h5\">
                        <i class=\"fas fa-chart-pie\"></i> {{ i18n.trans('sales-per-agent') }}
                    </div>
                    <div class=\"canva\">
                        <canvas id=\"chartsAgentes\"></canvas>
                    </div>
                    <div class=\"table-responsive\" id=\"chartsListAgentes\">
                        <table class=\"table mb-0 table-sm\">
                            <thead>
                            <th></th>
                            <th>{{ i18n.trans('agent') }}</th>
                            <th class=\"porc\">%</th>
                            <th class=\"total\">{{ i18n.trans('total') }}</th>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block css %}
    {{ parent() }}

    <style>
        .canva {
            height: 300px;
        }

        .card-header .fa {
            transition: .3s transform ease-in-out;
        }

        .card-header .collapsed .fa {
            transform: rotate(90deg);
        }

        #selectYear {
            max-width: 300px;
        }

        table .porc, table .total, table .month {
            white-space: nowrap;
            text-align: right;
        }

        table .title {
            width: 15%;
        }

        table .porc {
            width: 6%;
        }

        tr.subfamily{
            background: #e6f0ff;
            border-top: 1px solid #000;
            border-bottom: 1px solid #000;
        }
    </style>
{% endblock %}

{% block javascripts %}
    {{ parent() }}

    <script src=\"{{ asset('node_modules/chart.js/dist/Chart.min.js') }}\"></script>

    <script>
        let accountReport = '';
        let agentesChart;
        let familiesChart;
        let familyReport = '';
        let pagosChart;
        let purchasesReport = false;
        let resumeChart;
        let salesReport = false;
        let seriesChart;

        \$(document).ready(function () {
            function initPage() {
                if (salesReport) {
                    \$('#showSales').click();
                }

                if (purchasesReport) {
                    \$('#showPurchases').click();
                }

                \$('#salesReport .card-body').html('');
                \$('#purchasesReport .card-body').html('');

                let formData = new FormData();
                formData.append('action', 'load-summary');
                sendForm(formData);
            }

            function sendForm(formData) {
                animateSpinner('add');

                formData.append('codejercicio', \$('#selectYear option:selected').val());

                console.log(Object.fromEntries(formData));

                fetch('{{ fsc.url() }}', {
                    method: 'POST',
                    body: formData
                }).then(function (response) {
                    if (response.ok) {
                        return response.json();
                    }
                    return Promise.reject(response);
                }).then(function (data) {
                    console.log(data);

                    if (data.summary && data.summary !== '') {
                        \$('#summaryData').html(data.summary);
                        setCharts(data.charts);
                    }

                    if (data.sales && data.sales !== '') {
                        \$('#salesReport .card-body').html(data.sales);
                    }

                    if (data.purchases && data.purchases !== '') {
                        \$('#purchasesReport .card-body').html(data.purchases);
                    }

                    if (data.family && data.family !== '') {
                        \$('#salesReport tr').each(function(){
                            if (\$(this).attr('codfamilia') === data.codfamilia) {
                                \$(this).after(data.family);
                            }
                        });
                    }

                    if (data.account && data.account !== '') {
                        \$('#purchasesReport tr').each(function(){
                            if (\$(this).attr('codcuenta') === data.codcuenta) {
                                \$(this).after(data.account);
                            }
                        });
                    }

                    if (Array.isArray(data.messages)) {
                        data.messages.forEach(item => alert(item.message));
                    }

                    animateSpinner('remove');
                }).catch(function (error) {
                    alert('error');
                    console.warn(error);
                    animateSpinner('remove');
                });

                return false;
            }

            function setCharts(charts) {
                \$('#chartsListFamilies table tbody').html(charts['families']['table']);
                \$('#chartsListSeries table tbody').html(charts['series']['table']);
                \$('#chartsListPagos table tbody').html(charts['pagos']['table']);
                \$('#chartsListAgentes table tbody').html(charts['agentes']['table']);

                window.chartColors = {
                    red: 'rgb(255, 99, 132)',
                    orange: 'rgb(255, 159, 64)',
                    yellow: 'rgb(255, 205, 86)',
                    green: 'rgb(75, 192, 192)',
                    blue: 'rgb(54, 162, 235)',
                    purple: 'rgb(153, 102, 255)',
                    grey: 'rgb(231,233,237)'
                };
                let dataResume = {
                    labels: [
                        \"{{ i18n.trans('january') }}\",
                        \"{{ i18n.trans('february') }}\",
                        \"{{ i18n.trans('march') }}\",
                        \"{{ i18n.trans('april') }}\",
                        \"{{ i18n.trans('may') }}\",
                        \"{{ i18n.trans('june') }}\",
                        \"{{ i18n.trans('july') }}\",
                        \"{{ i18n.trans('august') }}\",
                        \"{{ i18n.trans('september') }}\",
                        \"{{ i18n.trans('october') }}\",
                        \"{{ i18n.trans('november') }}\",
                        \"{{ i18n.trans('december') }}\"],
                    datasets: [{
                        type: 'line',
                        label: '{{ i18n.trans('sales') }}',
                        borderColor: window.chartColors.green,
                        borderWidth: 2,
                        fill: false,
                        data: charts['totales']['ventas']
                    }, {
                        type: 'line',
                        label: '{{ i18n.trans('expenses') }}',
                        borderColor: window.chartColors.red,
                        borderWidth: 2,
                        fill: false,
                        data: charts['totales']['gastos']
                    }, {
                        type: 'line',
                        label: '{{ i18n.trans('result') }}',
                        borderColor: window.chartColors.blue,
                        borderWidth: 4,
                        fill: false,
                        data: charts['totales']['resultado']
                    }]
                };
                let dataFamilies = {
                    labels: charts['families']['labels'],
                    datasets: [{
                        data: charts['families']['porc'],
                        data2: charts['families']['totales'],
                        backgroundColor: charts['families']['colors'],
                        hoverBackgroundColor: charts['families']['colors']
                    }]
                };
                let dataSeries = {
                    labels: charts['series']['labels'],
                    datasets: [{
                        data: charts['series']['porc'],
                        data2: charts['series']['totales'],
                        backgroundColor: charts['series']['colors'],
                        hoverBackgroundColor: charts['series']['colors']
                    }]
                };
                let dataPagos = {
                    labels: charts['pagos']['labels'],
                    datasets: [{
                        data: charts['pagos']['porc'],
                        data2: charts['pagos']['totales'],
                        backgroundColor: charts['pagos']['colors'],
                        hoverBackgroundColor: charts['pagos']['colors']
                    }]
                };
                let dataAgentes = {
                    labels: charts['agentes']['labels'],
                    datasets: [{
                        data: charts['agentes']['porc'],
                        data2: charts['agentes']['totales'],
                        backgroundColor: charts['agentes']['colors'],
                        hoverBackgroundColor: charts['agentes']['colors']
                    }]
                };

                if (resumeChart != null) {
                    resumeChart.destroy();
                }

                if (familiesChart != null) {
                    familiesChart.destroy();
                }

                if (seriesChart != null) {
                    seriesChart.destroy();
                }

                if (pagosChart != null) {
                    pagosChart.destroy();
                }

                if (agentesChart != null) {
                    agentesChart.destroy();
                }

                let canvaResume = document.getElementById(\"chartsResume\");
                let canvaFamilies = document.getElementById(\"chartsFamilies\");
                let canvaSeries = document.getElementById(\"chartsSeries\");
                let canvaPagos = document.getElementById(\"chartsPagos\");
                let canvaAgentes = document.getElementById(\"chartsAgentes\");

                resumeChart = Chart.Line(canvaResume.getContext(\"2d\"), {
                    data: dataResume,
                    options: {
                        maintainAspectRatio: false,
                        showAllTooltips: false,
                        responsive: true,
                        hoverMode: 'index',
                        stacked: false,
                        title: {
                            display: false,
                            text: '{{ i18n.trans('charts-per-month') }}'
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: true
                        }
                    }
                });

                familiesChart = new Chart(canvaFamilies.getContext(\"2d\"), {
                    type: 'pie',
                    data: dataFamilies,
                    options: {
                        maintainAspectRatio: false,
                        showAllTooltips: false,
                        cutoutPercentage: 40,
                        responsive: true,
                        animation: {
                            animateRotate: true,
                            animateScale: true
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: true,
                            callbacks: {
                                label: function (tooltipItem, data) {
                                    let allData = data.datasets[tooltipItem.datasetIndex].data;
                                    let allData2 = data.datasets[tooltipItem.datasetIndex].data2;
                                    let tooltipLabel = data.labels[tooltipItem.index];
                                    let tooltipData = allData[tooltipItem.index];
                                    let tooltipData2 = allData2[tooltipItem.index];
                                    let total = 0;
                                    for (let i in allData) {
                                        total += allData[i];
                                    }
                                    let tooltipPercentage = Math.round((tooltipData / total) * 100);
                                    return tooltipLabel + ': ' + tooltipData2 + ' (' + tooltipPercentage + '%)';
                                }
                            }
                        }
                    }
                });

                seriesChart = new Chart(canvaSeries.getContext(\"2d\"), {
                    type: 'pie',
                    data: dataSeries,
                    options: {
                        maintainAspectRatio: false,
                        showAllTooltips: false,
                        cutoutPercentage: 40,
                        responsive: true,
                        animation: {
                            animateRotate: true,
                            animateScale: true
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: true,
                            callbacks: {
                                label: function (tooltipItem, data) {
                                    let allData = data.datasets[tooltipItem.datasetIndex].data;
                                    let allData2 = data.datasets[tooltipItem.datasetIndex].data2;
                                    let tooltipLabel = data.labels[tooltipItem.index];
                                    let tooltipData = allData[tooltipItem.index];
                                    let tooltipData2 = allData2[tooltipItem.index];
                                    let total = 0;
                                    for (let i in allData) {
                                        total += allData[i];
                                    }
                                    let tooltipPercentage = Math.round((tooltipData / total) * 100);
                                    return tooltipLabel + ': ' + tooltipData2 + ' (' + tooltipPercentage + '%)';
                                }
                            }
                        }
                    }
                });

                pagosChart = new Chart(canvaPagos.getContext(\"2d\"), {
                    type: 'pie',
                    data: dataPagos,
                    options: {
                        maintainAspectRatio: false,
                        showAllTooltips: false,
                        cutoutPercentage: 40,
                        responsive: true,
                        animation: {
                            animateRotate: true,
                            animateScale: true
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: true,
                            callbacks: {
                                label: function (tooltipItem, data) {
                                    let allData = data.datasets[tooltipItem.datasetIndex].data;
                                    let allData2 = data.datasets[tooltipItem.datasetIndex].data2;
                                    let tooltipLabel = data.labels[tooltipItem.index];
                                    let tooltipData = allData[tooltipItem.index];
                                    let tooltipData2 = allData2[tooltipItem.index];
                                    let total = 0;
                                    for (let i in allData) {
                                        total += allData[i];
                                    }
                                    let tooltipPercentage = Math.round((tooltipData / total) * 100);
                                    return tooltipLabel + ': ' + tooltipData2 + ' (' + tooltipPercentage + '%)';
                                }
                            }
                        }
                    }
                });

                agentesChart = new Chart(canvaAgentes.getContext(\"2d\"), {
                    type: 'pie',
                    data: dataAgentes,
                    options: {
                        maintainAspectRatio: false,
                        showAllTooltips: false,
                        cutoutPercentage: 40,
                        responsive: true,
                        animation: {
                            animateRotate: true,
                            animateScale: true
                        },
                        legend: {
                            display: false
                        },
                        tooltips: {
                            mode: 'index',
                            intersect: true,
                            callbacks: {
                                label: function (tooltipItem, data) {
                                    let allData = data.datasets[tooltipItem.datasetIndex].data;
                                    let allData2 = data.datasets[tooltipItem.datasetIndex].data2;
                                    let tooltipLabel = data.labels[tooltipItem.index];
                                    let tooltipData = allData[tooltipItem.index];
                                    let tooltipData2 = allData2[tooltipItem.index];
                                    let total = 0;
                                    for (let i in allData) {
                                        total += allData[i];
                                    }
                                    let tooltipPercentage = Math.round((tooltipData / total) * 100);
                                    return tooltipLabel + ': ' + tooltipData2 + ' (' + tooltipPercentage + '%)';
                                }
                            }
                        }
                    }
                });
            }

            \$(document).on('change', '#selectYear', function () {
                initPage();
            });

            \$(document).on('click', '#showSales', function () {
                if (salesReport === false) {
                    \$('#showSales svg').removeClass('fa-plus').addClass('fa-minus');
                    salesReport = true;
                    let formData = new FormData();
                    formData.append('action', 'load-sales');
                    sendForm(formData);
                } else {
                    \$('#showSales svg').addClass('fa-plus').removeClass('fa-minus');
                    salesReport = false;
                }
                \$('#salesReport').collapse('toggle');
            });

            \$(document).on('click', '#salesReport tr.ventas', function () {
                if (salesReport) {
                    if (familyReport === \$(this).attr('codfamilia')) {
                        \$('tr.subfamily').remove();
                        familyReport = '';
                        return;
                    }

                    familyReport = \$(this).attr('codfamilia');

                    let formData = new FormData();
                    formData.append('action', 'load-family');
                    formData.append('parent_codfamilia', familyReport);
                    sendForm(formData);
                }
            });

            \$(document).on('click', '#showPurchases', function () {
                if (purchasesReport === false) {
                    \$('#showPurchases svg').removeClass('fa-plus').addClass('fa-minus');
                    purchasesReport = true;
                    let formData = new FormData();
                    formData.append('action', 'load-purchases');
                    sendForm(formData);
                } else {
                    \$('#showPurchases svg').addClass('fa-plus').removeClass('fa-minus');
                    purchasesReport = false;
                }
                \$('#purchasesReport').collapse('toggle');
            });

            \$(document).on('click', '#purchasesReport tr.gastos', function () {
                if (purchasesReport) {
                    if (accountReport === \$(this).attr('codcuenta')) {
                        \$('tr.subaccount').remove();
                        accountReport = '';
                        return;
                    }

                    accountReport = \$(this).attr('codcuenta');

                    let formData = new FormData();
                    formData.append('action', 'load-account');
                    formData.append('parent_codcuenta', accountReport);
                    sendForm(formData);
                }
            });

            initPage();
        });
    </script>
{% endblock %}
", "ReportResult.html.twig", "C:\\xampp\\htdocs\\public\\Plugins\\Informes\\View\\ReportResult.html.twig");
    }
}
