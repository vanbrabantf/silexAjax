<?php

/* index.html */
class __TwigTemplate_3e7c80f6b1b70e512b593af6cd15cd93b35b063b37f9f8e18e87751d42c2c8b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"locationfinder\">
    <h1>Find offices in your area.</h1>

    <form v-on=\"submit: findOffices\">

        <div class=\"form-group\">
            <label for=\"location\">Show offices in the neighborhood of:</label>
            <input type=\"location\" class=\"form-control\" id=\"location\" placeholder=\"Location\" v-model=\"search.location\">
        </div>

        <div class=\"checkbox\">
            <label>
                <input type=\"checkbox\" v-model=\"search.weekends\"> Show only open in weekends
            </label>
        </div>

        <div class=\"checkbox\">
            <label>
                <input type=\"checkbox\" v-model=\"search.support\"> Show only with support desk
            </label>
        </div>

        <div class=\"checkbox\">
            <label>
                <input type=\"checkbox\" v-model=\"search.strict\"> Strict mode
            </label>
        </div>
        <button type=\"find\" class=\"btn btn-success btn-lg btn-block\">Submit</button>
    </form>

    <table class=\"table table-striped\" v-if=\"offices\">
        <thead>
            <tr>
                <th>Street</th>
                <th>City</th>
                <th>Open in weekends</th>
                <th>Has a support desk</th>
            </tr>
        </thead>
        <tbody>
            <tr v-repeat=\"offices\">
                <td scope=\"row\">";
        // line 45
        echo "{{street | lowercase | capitalize}}";
        echo "</td>
                <td>";
        // line 46
        echo "{{city | lowercase | capitalize}}";
        echo "</td>
                <td><span class='glyphicon ";
        // line 47
        echo "{{is_open_in_weekends}}";
        echo "' aria-hidden=\"true\"></span></td>
                <td><span class='glyphicon ";
        // line 48
        echo "{{has_support_desk}}";
        echo "' aria-hidden=\"true\"></span></td>

            </tr>
        </tbody>
    </table>

</div>
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 48,  82 => 47,  78 => 46,  74 => 45,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html" %}*/
/* */
/* {% block content %}*/
/* <div id="locationfinder">*/
/*     <h1>Find offices in your area.</h1>*/
/* */
/*     <form v-on="submit: findOffices">*/
/* */
/*         <div class="form-group">*/
/*             <label for="location">Show offices in the neighborhood of:</label>*/
/*             <input type="location" class="form-control" id="location" placeholder="Location" v-model="search.location">*/
/*         </div>*/
/* */
/*         <div class="checkbox">*/
/*             <label>*/
/*                 <input type="checkbox" v-model="search.weekends"> Show only open in weekends*/
/*             </label>*/
/*         </div>*/
/* */
/*         <div class="checkbox">*/
/*             <label>*/
/*                 <input type="checkbox" v-model="search.support"> Show only with support desk*/
/*             </label>*/
/*         </div>*/
/* */
/*         <div class="checkbox">*/
/*             <label>*/
/*                 <input type="checkbox" v-model="search.strict"> Strict mode*/
/*             </label>*/
/*         </div>*/
/*         <button type="find" class="btn btn-success btn-lg btn-block">Submit</button>*/
/*     </form>*/
/* */
/*     <table class="table table-striped" v-if="offices">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Street</th>*/
/*                 <th>City</th>*/
/*                 <th>Open in weekends</th>*/
/*                 <th>Has a support desk</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             <tr v-repeat="offices">*/
/*                 <td scope="row">{{ '{{street | lowercase | capitalize}}' }}</td>*/
/*                 <td>{{"{{city | lowercase | capitalize}}"}}</td>*/
/*                 <td><span class='glyphicon {{"{{is_open_in_weekends}}"}}' aria-hidden="true"></span></td>*/
/*                 <td><span class='glyphicon {{"{{has_support_desk}}"}}' aria-hidden="true"></span></td>*/
/* */
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/* </div>*/
/* {% endblock %}*/
