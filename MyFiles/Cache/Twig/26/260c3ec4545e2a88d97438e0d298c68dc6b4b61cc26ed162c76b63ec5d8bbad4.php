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

/* Tab/PurchasesDocument.html.twig */
class __TwigTemplate_24c786711f43dcb7511c817aae88f5c0fa9ebbf2430f4b5510ce8e1fd543c0ac extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["model"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 1), "model", [], "any", false, false, false, 1);
        // line 2
        echo "
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

<script>
    let waitCounter = 0;
    let keyupInputName = null;

    function changeColumn(btn) {
        \$(btn).addClass('active').siblings().removeClass('active');
        document.forms['purchasesForm']['columnView'].value = \$(btn).data('column');

        if (\$(btn).data('column') === 'subtotal') {
            \$('.columSubtotal').removeClass('d-none').addClass('d-block');
            \$('.columNeto').removeClass('d-block').addClass('d-none');
        } else {
            \$('.columSubtotal').removeClass('d-block').addClass('d-none');
            \$('.columNeto').removeClass('d-none').addClass('d-block');
        }
    }

    function findProduct() {
        \$(\"#findProductInput\").autocomplete({
            source: function (request, response) {
                \$.ajax({
                    method: \"POST\",
                    url: '";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 39), "html", null, true);
        echo "',
                    data: {action: 'autocomplete-product', term: request.term},
                    dataType: \"json\",
                    success: function (results) {
                        let values = [];
                        results.forEach(function (element) {
                            if (element.key === null || element.key === element.value) {
                                values.push(element);
                            } else {
                                values.push({key: element.key, value: element.key + \" | \" + element.value});
                            }
                        });
                        response(values);
                    },
                    error: function (msg) {
                        alert(msg.status + \" \" + msg.responseText);
                    }
                });
            },
            select: function (event, ui) {
                if (ui.item.key !== null) {
                    const value = ui.item.value.split(\" | \");
                    purchasesFormAction(\"fast-product\", value[0]);
                }
            }
        });
    }

    function purchasesFastLine(e) {
        if (e.which == 13) {
            purchasesFormAction('fast-line', '0');
        }
    }

    function purchasesFormAction(action, selectedLine) {
        animateSpinner('add');
        \$('#headerModal').modal('hide');

        document.forms['purchasesForm']['action'].value = action;
        document.forms['purchasesForm']['selectedLine'].value = selectedLine;

        const formData = new FormData(document.forms['purchasesForm']);
        const plainFormData = Object.fromEntries(formData.entries());
        const formDataJsonString = JSON.stringify(plainFormData);

        let data = new FormData();
        data.append('action', action);
        data.append('code', document.forms['purchasesForm']['code'].value);
        data.append('multireqtoken', document.forms['purchasesForm']['multireqtoken'].value);
        data.append('selectedLine', document.forms['purchasesForm']['selectedLine'].value);
        data.append('data', formDataJsonString);
        console.log(data);

        fetch('";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 92), "html", null, true);
        echo "', {
            method: 'POST',
            body: data
        }).then(function (response) {
            animateSpinner('remove', true);
            if (response.ok) {
                return response.json();
            }
            return Promise.reject(response);
        }).then(function (data) {
            if (data.header !== '') {
                document.getElementById(\"purchasesFormHeader\").innerHTML = data.header;
            }
            if (data.lines !== '') {
                document.getElementById(\"purchasesFormLines\").innerHTML = data.lines;
            } else {
                \$.each(data.linesMap, function (index, value) {
                    if (document.forms['purchasesForm'][index] != null) {
                        document.forms['purchasesForm'][index].value = value;
                    }
                });
            }
            if (data.footer !== '') {
                document.getElementById(\"purchasesFormFooter\").innerHTML = data.footer;
            }
            if (data.products !== '') {
                document.getElementById(\"findProductList\").innerHTML = data.products;
            }
            if (Array.isArray(data.messages)) {
                data.messages.forEach(item => alert(item.message));
            }
            switch (document.forms['purchasesForm']['action'].value) {
                case 'add-product':
                case 'fast-product':
                    \$(\".doc-line-qty:last\").select();
                    break;

                case 'fast-line':
                    document.forms['purchasesForm']['fastli'].focus();
                    break;

                case 'new-line':
                    \$(\".doc-line-desc:last\").focus();
                    break;

                case 'set-supplier':
                    \$(\"#findProductInput\").focus();
                    break;
            }

            // si la acción no es eliminar la línea y,
            // establecemos el foco si tenemos el name del input donde se estaba escribiendo
            if (document.forms['purchasesForm']['action'].value !== 'rm-line'
                && document.activeElement.name === undefined && keyupInputName !== null) {
                let focusInput = \$('input[name=\"' + keyupInputName + '\"]');
                let focusLength = focusInput.val().length;
                let focusType = focusInput[0].type;
                // para establecer el cursor al final de input el type debe ser text
                if (focusType !== 'text') {
                    focusInput[0].type = 'text';
                }
                focusInput.focus();
                focusInput[0].setSelectionRange(focusLength, focusLength);
                focusInput[0].type = focusType;
                keyupInputName = null;
            }

            findProduct();
        }).catch(function (error) {
            alert('error');
            console.warn(error);
            animateSpinner('remove', false);
        });

        return false;
    }

    async function purchasesFormActionWait(action, selectedLine, event) {
        if (event.keyCode === 9) {
            // si se pulsa tabulador no hacemos nada
            return false;
        }

        animateSpinner('add');

        // usamos un contador y un temporizador para solamente procesar la última llamada
        waitCounter++;
        let waitNum = waitCounter;
        await new Promise(r => setTimeout(r, 300));
        if (waitNum < waitCounter) {
            return false;
        }

        // obtenemos el name del input si cumple la condición de pulsado
        if (\$(event.target).is('input') && ['keyup', 'keypress', 'change'].includes(event.type)) {
            keyupInputName = event.target.name;
        }

        console.log('waitNum: ' + waitNum);
        return purchasesFormAction(action, selectedLine)
    }

    function purchasesFormSave(action, selectedLine) {
        animateSpinner('add');
        setOrdenLines();

        document.forms['purchasesForm']['action'].value = action;
        document.forms['purchasesForm']['selectedLine'].value = selectedLine;

        const formData = new FormData(document.forms['purchasesForm']);
        const plainFormData = Object.fromEntries(formData.entries());
        const formDataJsonString = JSON.stringify(plainFormData);

        let data = new FormData();
        data.append('action', action);
        data.append('code', document.forms['purchasesForm']['code'].value);
        data.append('multireqtoken', document.forms['purchasesForm']['multireqtoken'].value);
        data.append('selectedLine', document.forms['purchasesForm']['selectedLine'].value);
        data.append('data', formDataJsonString);
        console.log(data);

        fetch('";
        // line 213
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 213), "html", null, true);
        echo "', {
            method: 'POST',
            body: data
        }).then(function (response) {
            animateSpinner('remove', true);
            if (response.ok) {
                return response.json();
            }
            return Promise.reject(response);
        }).then(function (data) {
            console.log(data);
            if (Array.isArray(data.messages)) {
                data.messages.forEach(item => alert(item.message));
            }
            if (data.ok) {
                window.location.replace(data.newurl);
            }
        }).catch(function (error) {
            alert('error');
            console.warn(error);
            animateSpinner('remove', false);
        });

        return false;
    }

    function purchasesLineTotalWithTaxes(id) {
        const total = parseFloat(prompt('";
        // line 240
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["total-with-taxes"], "method", false, false, false, 240), "html", null, true);
        echo "').replace(',', '.')) || 0;
        const dtopor = parseFloat(document.forms['purchasesForm']['dtopor_' + id].value) || 0;
        const dtopor2 = parseFloat(document.forms['purchasesForm']['dtopor2_' + id].value) || 0;
        const iva = parseFloat(document.forms['purchasesForm']['iva_' + id].value) || 0;
        const recargo = document.forms['purchasesForm']['recargo_' + id] ? parseFloat(document.forms['purchasesForm']['recargo_' + id].value) || 0 : 0;
        const irpf = parseFloat(document.forms['purchasesForm']['irpf_' + id].value) || 0;
        const cantidad = parseFloat(document.forms['purchasesForm']['cantidad_' + id].value) || 0;
        if (total <= 0) {
            alert('total > 0');
        } else if (cantidad <= 0) {
            alert('cantidad > 0');
        } else {
            let pvpSinDto = (100 * total / cantidad) / (100 + iva + recargo - irpf);
            let pvp = 10000 * pvpSinDto / ((100 - dtopor) * (100 - dtopor2));
            document.forms['purchasesForm']['pvpunitario_' + id].value = Math.round(pvp * 100000) / 100000;
            purchasesFormAction('recalculate', '0');
        }
    }

    function purchasesLineTotalWithoutTaxes(id) {
        const total = parseFloat(prompt('";
        // line 260
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["i18n"] ?? null), "trans", ["net"], "method", false, false, false, 260), "html", null, true);
        echo "').replace(',', '.')) || 0;
        const dtopor = parseFloat(document.forms['purchasesForm']['dtopor_' + id].value) || 0;
        const dtopor2 = parseFloat(document.forms['purchasesForm']['dtopor2_' + id].value) || 0;
        const cantidad = parseFloat(document.forms['purchasesForm']['cantidad_' + id].value) || 0;
        if (total <= 0) {
            alert('total > 0');
        } else if (cantidad <= 0) {
            alert('cantidad > 0');
        } else {
            let pvpSinDto = (100 * total / cantidad) / 100;
            let pvp = 10000 * pvpSinDto / ((100 - dtopor) * (100 - dtopor2));
            document.forms['purchasesForm']['pvpunitario_' + id].value = Math.round(pvp * 100000) / 100000;
            purchasesFormAction('recalculate', '0');
        }
    }

    function setOrdenLines() {
        let orderInputs = \$(\"input[name^='orden_']\");
        let count = orderInputs.length * 10;
        orderInputs.each(function (index) {
            \$(this).val(count - (index * 10));
        });
    }

    function sortableEnable() {
        \$(\"#purchasesFormLines\").sortable({
            update: function (event, ui) {
                setOrdenLines();
            }
        });
        \$(\"#purchasesFormLines\").sortable(\"option\", \"disabled\", false);
        \$(\"#purchasesFormLines\").disableSelection();
    }

    function sortableDisable() {
        \$(\"#purchasesFormLines\").sortable(\"disable\");
    }

    \$(document).on('keyup', '.doc-line-desc', function (e) {
        while (\$(this).outerHeight() < this.scrollHeight + parseFloat(\$(this).css(\"borderTopWidth\")) + parseFloat(\$(this).css(\"borderBottomWidth\"))) {
            \$(this).height(\$(this).height() + 1);
            if (\$(this).height() > 200) {
                break;
            }
        }
    });

    ";
        // line 307
        if (twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "editable", [], "any", false, false, false, 307)) {
            // line 308
            echo "    let sortable = false;

    \$(document).on('click', '#sortableBtn', function () {
        if (sortable) {
            sortableDisable();
            sortable = false;
            \$(this).removeClass('btn-secondary').addClass('btn-light');
        } else {
            sortableEnable();
            sortable = true;
            \$(this).removeClass('btn-light').addClass('btn-secondary');
        }
    });
    ";
        }
        // line 322
        echo "
    \$(document).ready(function () {
        findProduct();

        if (document.forms['purchasesForm']['codproveedor'].value === '') {
            \$('#btnFindSupplierModal').click();
        }

        \$(\"#findSupplierInput\").autocomplete({
            autoFocus: true,
            source: function (request, response) {
                \$.ajax({
                    method: \"POST\",
                    url: '";
        // line 335
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 335), "html", null, true);
        echo "',
                    data: {action: 'find-supplier', term: request.term},
                    dataType: \"json\",
                    success: function (results) {
                        response(results);
                    },
                    error: function (msg) {
                        alert(msg.status + \" \" + msg.responseText);
                    }
                });
            },
            select: function (event, ui) {
                if (ui.item.key !== null) {
                    const value = ui.item.value.split(\" | \");
                    if (value.length > 1) {
                        document.forms['purchasesForm']['codproveedor'].value = value[0];
                        ui.item.value = value[1];
                    }
                    \$(\"#findSupplierModal\").modal(\"hide\");
                    purchasesFormAction(\"set-supplier\", \"0\");
                }
            },
            open: function (event, ui) {
                \$(this).autocomplete('widget').css('z-index', 1500);
                return false;
            }
        });
    });
</script>

<form name=\"purchasesForm\" method=\"post\">
    <input type=\"hidden\" name=\"action\"/>
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 367
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "primaryColumnValue", [], "method", false, false, false, 367), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"";
        // line 368
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "multiRequestProtection", [], "any", false, false, false, 368), "newToken", [], "method", false, false, false, 368), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"selectedLine\"/>
    <input type=\"hidden\" name=\"columnView\" value=\"";
        // line 370
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["appSettings"] ?? null), "get", ["default", "columnetosubtotal", "subtotal"], "method", false, false, false, 370), "html", null, true);
        echo "\"/>
    ";
        // line 371
        echo twig_get_attribute($this->env, $this->source, ($context["fsc"] ?? null), "renderPurchasesForm", [($context["model"] ?? null), twig_get_attribute($this->env, $this->source, ($context["model"] ?? null), "getLines", [], "method", false, false, false, 371)], "method", false, false, false, 371);
        echo "
</form>";
    }

    public function getTemplateName()
    {
        return "Tab/PurchasesDocument.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 371,  438 => 370,  433 => 368,  429 => 367,  394 => 335,  379 => 322,  363 => 308,  361 => 307,  311 => 260,  288 => 240,  258 => 213,  134 => 92,  78 => 39,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set model = fsc.getCurrentView().model %}

<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

<script>
    let waitCounter = 0;
    let keyupInputName = null;

    function changeColumn(btn) {
        \$(btn).addClass('active').siblings().removeClass('active');
        document.forms['purchasesForm']['columnView'].value = \$(btn).data('column');

        if (\$(btn).data('column') === 'subtotal') {
            \$('.columSubtotal').removeClass('d-none').addClass('d-block');
            \$('.columNeto').removeClass('d-block').addClass('d-none');
        } else {
            \$('.columSubtotal').removeClass('d-block').addClass('d-none');
            \$('.columNeto').removeClass('d-none').addClass('d-block');
        }
    }

    function findProduct() {
        \$(\"#findProductInput\").autocomplete({
            source: function (request, response) {
                \$.ajax({
                    method: \"POST\",
                    url: '{{ fsc.url() }}',
                    data: {action: 'autocomplete-product', term: request.term},
                    dataType: \"json\",
                    success: function (results) {
                        let values = [];
                        results.forEach(function (element) {
                            if (element.key === null || element.key === element.value) {
                                values.push(element);
                            } else {
                                values.push({key: element.key, value: element.key + \" | \" + element.value});
                            }
                        });
                        response(values);
                    },
                    error: function (msg) {
                        alert(msg.status + \" \" + msg.responseText);
                    }
                });
            },
            select: function (event, ui) {
                if (ui.item.key !== null) {
                    const value = ui.item.value.split(\" | \");
                    purchasesFormAction(\"fast-product\", value[0]);
                }
            }
        });
    }

    function purchasesFastLine(e) {
        if (e.which == 13) {
            purchasesFormAction('fast-line', '0');
        }
    }

    function purchasesFormAction(action, selectedLine) {
        animateSpinner('add');
        \$('#headerModal').modal('hide');

        document.forms['purchasesForm']['action'].value = action;
        document.forms['purchasesForm']['selectedLine'].value = selectedLine;

        const formData = new FormData(document.forms['purchasesForm']);
        const plainFormData = Object.fromEntries(formData.entries());
        const formDataJsonString = JSON.stringify(plainFormData);

        let data = new FormData();
        data.append('action', action);
        data.append('code', document.forms['purchasesForm']['code'].value);
        data.append('multireqtoken', document.forms['purchasesForm']['multireqtoken'].value);
        data.append('selectedLine', document.forms['purchasesForm']['selectedLine'].value);
        data.append('data', formDataJsonString);
        console.log(data);

        fetch('{{ fsc.url() }}', {
            method: 'POST',
            body: data
        }).then(function (response) {
            animateSpinner('remove', true);
            if (response.ok) {
                return response.json();
            }
            return Promise.reject(response);
        }).then(function (data) {
            if (data.header !== '') {
                document.getElementById(\"purchasesFormHeader\").innerHTML = data.header;
            }
            if (data.lines !== '') {
                document.getElementById(\"purchasesFormLines\").innerHTML = data.lines;
            } else {
                \$.each(data.linesMap, function (index, value) {
                    if (document.forms['purchasesForm'][index] != null) {
                        document.forms['purchasesForm'][index].value = value;
                    }
                });
            }
            if (data.footer !== '') {
                document.getElementById(\"purchasesFormFooter\").innerHTML = data.footer;
            }
            if (data.products !== '') {
                document.getElementById(\"findProductList\").innerHTML = data.products;
            }
            if (Array.isArray(data.messages)) {
                data.messages.forEach(item => alert(item.message));
            }
            switch (document.forms['purchasesForm']['action'].value) {
                case 'add-product':
                case 'fast-product':
                    \$(\".doc-line-qty:last\").select();
                    break;

                case 'fast-line':
                    document.forms['purchasesForm']['fastli'].focus();
                    break;

                case 'new-line':
                    \$(\".doc-line-desc:last\").focus();
                    break;

                case 'set-supplier':
                    \$(\"#findProductInput\").focus();
                    break;
            }

            // si la acción no es eliminar la línea y,
            // establecemos el foco si tenemos el name del input donde se estaba escribiendo
            if (document.forms['purchasesForm']['action'].value !== 'rm-line'
                && document.activeElement.name === undefined && keyupInputName !== null) {
                let focusInput = \$('input[name=\"' + keyupInputName + '\"]');
                let focusLength = focusInput.val().length;
                let focusType = focusInput[0].type;
                // para establecer el cursor al final de input el type debe ser text
                if (focusType !== 'text') {
                    focusInput[0].type = 'text';
                }
                focusInput.focus();
                focusInput[0].setSelectionRange(focusLength, focusLength);
                focusInput[0].type = focusType;
                keyupInputName = null;
            }

            findProduct();
        }).catch(function (error) {
            alert('error');
            console.warn(error);
            animateSpinner('remove', false);
        });

        return false;
    }

    async function purchasesFormActionWait(action, selectedLine, event) {
        if (event.keyCode === 9) {
            // si se pulsa tabulador no hacemos nada
            return false;
        }

        animateSpinner('add');

        // usamos un contador y un temporizador para solamente procesar la última llamada
        waitCounter++;
        let waitNum = waitCounter;
        await new Promise(r => setTimeout(r, 300));
        if (waitNum < waitCounter) {
            return false;
        }

        // obtenemos el name del input si cumple la condición de pulsado
        if (\$(event.target).is('input') && ['keyup', 'keypress', 'change'].includes(event.type)) {
            keyupInputName = event.target.name;
        }

        console.log('waitNum: ' + waitNum);
        return purchasesFormAction(action, selectedLine)
    }

    function purchasesFormSave(action, selectedLine) {
        animateSpinner('add');
        setOrdenLines();

        document.forms['purchasesForm']['action'].value = action;
        document.forms['purchasesForm']['selectedLine'].value = selectedLine;

        const formData = new FormData(document.forms['purchasesForm']);
        const plainFormData = Object.fromEntries(formData.entries());
        const formDataJsonString = JSON.stringify(plainFormData);

        let data = new FormData();
        data.append('action', action);
        data.append('code', document.forms['purchasesForm']['code'].value);
        data.append('multireqtoken', document.forms['purchasesForm']['multireqtoken'].value);
        data.append('selectedLine', document.forms['purchasesForm']['selectedLine'].value);
        data.append('data', formDataJsonString);
        console.log(data);

        fetch('{{ fsc.url() }}', {
            method: 'POST',
            body: data
        }).then(function (response) {
            animateSpinner('remove', true);
            if (response.ok) {
                return response.json();
            }
            return Promise.reject(response);
        }).then(function (data) {
            console.log(data);
            if (Array.isArray(data.messages)) {
                data.messages.forEach(item => alert(item.message));
            }
            if (data.ok) {
                window.location.replace(data.newurl);
            }
        }).catch(function (error) {
            alert('error');
            console.warn(error);
            animateSpinner('remove', false);
        });

        return false;
    }

    function purchasesLineTotalWithTaxes(id) {
        const total = parseFloat(prompt('{{ i18n.trans('total-with-taxes') }}').replace(',', '.')) || 0;
        const dtopor = parseFloat(document.forms['purchasesForm']['dtopor_' + id].value) || 0;
        const dtopor2 = parseFloat(document.forms['purchasesForm']['dtopor2_' + id].value) || 0;
        const iva = parseFloat(document.forms['purchasesForm']['iva_' + id].value) || 0;
        const recargo = document.forms['purchasesForm']['recargo_' + id] ? parseFloat(document.forms['purchasesForm']['recargo_' + id].value) || 0 : 0;
        const irpf = parseFloat(document.forms['purchasesForm']['irpf_' + id].value) || 0;
        const cantidad = parseFloat(document.forms['purchasesForm']['cantidad_' + id].value) || 0;
        if (total <= 0) {
            alert('total > 0');
        } else if (cantidad <= 0) {
            alert('cantidad > 0');
        } else {
            let pvpSinDto = (100 * total / cantidad) / (100 + iva + recargo - irpf);
            let pvp = 10000 * pvpSinDto / ((100 - dtopor) * (100 - dtopor2));
            document.forms['purchasesForm']['pvpunitario_' + id].value = Math.round(pvp * 100000) / 100000;
            purchasesFormAction('recalculate', '0');
        }
    }

    function purchasesLineTotalWithoutTaxes(id) {
        const total = parseFloat(prompt('{{ i18n.trans('net') }}').replace(',', '.')) || 0;
        const dtopor = parseFloat(document.forms['purchasesForm']['dtopor_' + id].value) || 0;
        const dtopor2 = parseFloat(document.forms['purchasesForm']['dtopor2_' + id].value) || 0;
        const cantidad = parseFloat(document.forms['purchasesForm']['cantidad_' + id].value) || 0;
        if (total <= 0) {
            alert('total > 0');
        } else if (cantidad <= 0) {
            alert('cantidad > 0');
        } else {
            let pvpSinDto = (100 * total / cantidad) / 100;
            let pvp = 10000 * pvpSinDto / ((100 - dtopor) * (100 - dtopor2));
            document.forms['purchasesForm']['pvpunitario_' + id].value = Math.round(pvp * 100000) / 100000;
            purchasesFormAction('recalculate', '0');
        }
    }

    function setOrdenLines() {
        let orderInputs = \$(\"input[name^='orden_']\");
        let count = orderInputs.length * 10;
        orderInputs.each(function (index) {
            \$(this).val(count - (index * 10));
        });
    }

    function sortableEnable() {
        \$(\"#purchasesFormLines\").sortable({
            update: function (event, ui) {
                setOrdenLines();
            }
        });
        \$(\"#purchasesFormLines\").sortable(\"option\", \"disabled\", false);
        \$(\"#purchasesFormLines\").disableSelection();
    }

    function sortableDisable() {
        \$(\"#purchasesFormLines\").sortable(\"disable\");
    }

    \$(document).on('keyup', '.doc-line-desc', function (e) {
        while (\$(this).outerHeight() < this.scrollHeight + parseFloat(\$(this).css(\"borderTopWidth\")) + parseFloat(\$(this).css(\"borderBottomWidth\"))) {
            \$(this).height(\$(this).height() + 1);
            if (\$(this).height() > 200) {
                break;
            }
        }
    });

    {% if model.editable %}
    let sortable = false;

    \$(document).on('click', '#sortableBtn', function () {
        if (sortable) {
            sortableDisable();
            sortable = false;
            \$(this).removeClass('btn-secondary').addClass('btn-light');
        } else {
            sortableEnable();
            sortable = true;
            \$(this).removeClass('btn-light').addClass('btn-secondary');
        }
    });
    {% endif %}

    \$(document).ready(function () {
        findProduct();

        if (document.forms['purchasesForm']['codproveedor'].value === '') {
            \$('#btnFindSupplierModal').click();
        }

        \$(\"#findSupplierInput\").autocomplete({
            autoFocus: true,
            source: function (request, response) {
                \$.ajax({
                    method: \"POST\",
                    url: '{{ fsc.url() }}',
                    data: {action: 'find-supplier', term: request.term},
                    dataType: \"json\",
                    success: function (results) {
                        response(results);
                    },
                    error: function (msg) {
                        alert(msg.status + \" \" + msg.responseText);
                    }
                });
            },
            select: function (event, ui) {
                if (ui.item.key !== null) {
                    const value = ui.item.value.split(\" | \");
                    if (value.length > 1) {
                        document.forms['purchasesForm']['codproveedor'].value = value[0];
                        ui.item.value = value[1];
                    }
                    \$(\"#findSupplierModal\").modal(\"hide\");
                    purchasesFormAction(\"set-supplier\", \"0\");
                }
            },
            open: function (event, ui) {
                \$(this).autocomplete('widget').css('z-index', 1500);
                return false;
            }
        });
    });
</script>

<form name=\"purchasesForm\" method=\"post\">
    <input type=\"hidden\" name=\"action\"/>
    <input type=\"hidden\" name=\"code\" value=\"{{ model.primaryColumnValue() }}\"/>
    <input type=\"hidden\" name=\"multireqtoken\" value=\"{{ fsc.multiRequestProtection.newToken() }}\"/>
    <input type=\"hidden\" name=\"selectedLine\"/>
    <input type=\"hidden\" name=\"columnView\" value=\"{{ appSettings.get('default', 'columnetosubtotal', 'subtotal') }}\"/>
    {{ fsc.renderPurchasesForm(model, model.getLines()) | raw }}
</form>", "Tab/PurchasesDocument.html.twig", "C:\\xampp\\htdocs\\public\\Core\\View\\Tab\\PurchasesDocument.html.twig");
    }
}