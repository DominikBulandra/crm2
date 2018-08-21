<?php

/* C:\xampp\htdocs\crm/themes/demo/partials/datatable/apartmentdetail.htm */
class __TwigTemplate_7c43fea1f47b06a18386690ded1a7a2e09a0d471c7824b29b41e6cf1224ad90c extends Twig_Template
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
        echo "<div class=\"row\">
    <div class=\"col-sm-6\" style=\"background-color: #FFF44F; min-height: 1000px; \">
      <H1>Lokal:</H1>
";
        // line 4
        echo $this->env->getExtension('Cms\Twig\DebugExtension')->runDump($this->env, $context, ($context["value"] ?? null));
        echo "
Klient lista cech
<P>
";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
        echo "
";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "  
</P>
    </div>
    <div class=\"col-sm-6\" style=\"background-color: #DBAB04; min-height: 1000px;\">
      <H1>Dokumenty</H1>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/themes/demo/partials/datatable/apartmentdetail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  38 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
    <div class=\"col-sm-6\" style=\"background-color: #FFF44F; min-height: 1000px; \">
      <H1>Lokal:</H1>
{{dump(value)}}
Klient lista cech
<P>
{{data.id}}
{% for id in data %}
{{id.id}}
{%endfor%}  
</P>
    </div>
    <div class=\"col-sm-6\" style=\"background-color: #DBAB04; min-height: 1000px;\">
      <H1>Dokumenty</H1>
    </div>
  </div>", "C:\\xampp\\htdocs\\crm/themes/demo/partials/datatable/apartmentdetail.htm", "");
    }
}
