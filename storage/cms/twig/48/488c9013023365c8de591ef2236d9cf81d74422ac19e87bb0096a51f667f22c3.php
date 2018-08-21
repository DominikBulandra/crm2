<?php

/* C:\xampp\htdocs\crm/themes/demo/partials/clients/client.htm */
class __TwigTemplate_a8c413421b67db80d40ee2366b0dcc5e684427bfffacec4e8ee013fac305ba03 extends Twig_Template
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
        echo $this->env->getExtension('Cms\Twig\DebugExtension')->runDump($this->env, $context, ($context["data"] ?? null));
        echo "
Klient lista cech
<P>
";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
        echo "
";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 6
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/themes/demo/partials/clients/client.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  29 => 5,  25 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{dump(data)}}
Klient lista cech
<P>
{{data.id}}
{% for id in data %}
{{id.id}}
{%endfor%}", "C:\\xampp\\htdocs\\crm/themes/demo/partials/clients/client.htm", "");
    }
}
