<?php

/* C:\xampp\htdocs\crm/themes/demo/partials/deals/UD.htm */
class __TwigTemplate_71b398b995ccd2aa999d564537e8923819b8d8b96433cc08f74c88079754ce1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Umowy deweloperskie

<table id=\"table\" class=\"display\">
    <thead>
        <tr>
            <th>Id </th>
            <th>Numer notarialny</th>
            <th>Data podpisania</th>
         
        </tr>
    </thead>
    <tbody>
    \t
    \t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ev4"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 15
            echo "        <tr id=\"tableon\" >
            <td id=\"cid\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "notarial", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "date", array()), "html", null, true);
            echo "</td>
            
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        
    </tbody>
</table>
<script type=\"text/javascript\">
\t\$(document).ready( function () {
    var table= \$('#table').DataTable();
    \$('#table tr').bind('mouseover', function(e) {
    \$(e.currentTarget).children('td, th').css('background-color','#FFDF64');});
    \$('#table tr').bind('mouseleave', function(e) {
    \$(e.currentTarget).children('td, th').css('background-color','#FFF');});
    \$('#table tr').bind('dblclick', function(e) {
    //\$(e.currentTarget).children('td, th').css('background-color','#FFDF64');
    //alert(\$(e.currentTarget).children('td').eq(0).text())
    \$.request('onClientClick', {data: {id: \$(e.currentTarget).children('td').eq(0).text()}});

    });

} );
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/themes/demo/partials/deals/UD.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 22,  49 => 18,  45 => 17,  41 => 16,  38 => 15,  34 => 14,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Umowy deweloperskie

<table id=\"table\" class=\"display\">
    <thead>
        <tr>
            <th>Id </th>
            <th>Numer notarialny</th>
            <th>Data podpisania</th>
         
        </tr>
    </thead>
    <tbody>
    \t
    \t{% for id in ev4 %}
        <tr id=\"tableon\" >
            <td id=\"cid\">{{id.id}}</td>
            <td>{{id.notarial}}</td>
            <td>{{id.date}}</td>
            
        </tr>
        {% endfor %}
        
    </tbody>
</table>
<script type=\"text/javascript\">
\t\$(document).ready( function () {
    var table= \$('#table').DataTable();
    \$('#table tr').bind('mouseover', function(e) {
    \$(e.currentTarget).children('td, th').css('background-color','#FFDF64');});
    \$('#table tr').bind('mouseleave', function(e) {
    \$(e.currentTarget).children('td, th').css('background-color','#FFF');});
    \$('#table tr').bind('dblclick', function(e) {
    //\$(e.currentTarget).children('td, th').css('background-color','#FFDF64');
    //alert(\$(e.currentTarget).children('td').eq(0).text())
    \$.request('onClientClick', {data: {id: \$(e.currentTarget).children('td').eq(0).text()}});

    });

} );
</script>", "C:\\xampp\\htdocs\\crm/themes/demo/partials/deals/UD.htm", "");
    }
}
