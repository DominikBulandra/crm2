<?php

/* C:\xampp\htdocs\crm/themes/demo/partials/clients/myclients.htm */
class __TwigTemplate_07f102a1cbe033cdf3d38be37bf13c0f02171c83a910292e94db108974163d8e extends Twig_Template
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
        echo "Wszyscy Klienci

<table id=\"table\" class=\"display\">
    <thead>
        <tr>
            <th>Id </th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>E-mail</th>
            <th>Numer telefonu </th>
            <th>Adres</th>
            <th>Data urodzenia</th>
            <th>Zgoda na oferty</th>
        </tr>
    </thead>
    <tbody>
    \t
    \t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ev4"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 19
            echo "        <tr id=\"tableon\">
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "firstname", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "lastname", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "email", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "phone", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "street", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "number", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "citycode", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "city", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "borndate", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 27
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "offer_agree", array()) == "1")) {
                // line 28
                echo "                Tak
";
            } else {
                // line 30
                echo "    Nie
";
            }
            // line 31
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        
    </tbody>
</table>
<script type=\"text/javascript\">
\t\$(document).ready( function () {
    var table= \$('#table').DataTable();

} );
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/themes/demo/partials/clients/myclients.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 34,  89 => 31,  85 => 30,  81 => 28,  79 => 27,  75 => 26,  65 => 25,  61 => 24,  57 => 23,  53 => 22,  49 => 21,  45 => 20,  42 => 19,  38 => 18,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Wszyscy Klienci

<table id=\"table\" class=\"display\">
    <thead>
        <tr>
            <th>Id </th>
            <th>Imię</th>
            <th>Nazwisko</th>
            <th>E-mail</th>
            <th>Numer telefonu </th>
            <th>Adres</th>
            <th>Data urodzenia</th>
            <th>Zgoda na oferty</th>
        </tr>
    </thead>
    <tbody>
    \t
    \t{% for id in ev4 %}
        <tr id=\"tableon\">
            <td>{{id.id}}</td>
            <td>{{id.firstname}}</td>
            <td>{{id.lastname}}</td>
            <td>{{id.email}}</td>
              <td>{{id.phone}}</td>
            <td>{{id.street}} {{id.number}} {{id.citycode}} {{id.city}}</td>
            <td>{{id.borndate}}</td>
            <td>{% if id.offer_agree =='1' %}
                Tak
{% else %}
    Nie
{% endif %}</td>
        </tr>
        {% endfor %}
        
    </tbody>
</table>
<script type=\"text/javascript\">
\t\$(document).ready( function () {
    var table= \$('#table').DataTable();

} );
</script>", "C:\\xampp\\htdocs\\crm/themes/demo/partials/clients/myclients.htm", "");
    }
}
