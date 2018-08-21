<?php

/* C:\xampp\htdocs\crm/themes/demo/partials/deals/CreateReservation.htm */
class __TwigTemplate_5cdc31ec0593b6be05c5eb92dbaec4973d39241eab0cc8b01f44b03fa7939ec0 extends Twig_Template
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
        echo "<label>Kreator Umowy</label>
\t<form class=\"form-horizontal\" data-request=\"onDealCreate\" data-request-success=\"alert('Created')\">
 <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
  ";
        // line 4
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "
  ";
        // line 5
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), array("sessionKey"));
        echo "
<fieldset>

<!-- Form Name -->


<!-- Button -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Create\"></label>
  <div class=\"col-md-4\">
    <button id=\"Create\" name=\"Create\" class=\"btn btn-primary\">Utwórz Umowę</button>
  </div>
</div>

</fieldset>
</form>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/themes/demo/partials/deals/CreateReservation.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<label>Kreator Umowy</label>
\t<form class=\"form-horizontal\" data-request=\"onDealCreate\" data-request-success=\"alert('Created')\">
 <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
  {{ form_token() }}
  {{ form_sessionKey() }}
<fieldset>

<!-- Form Name -->


<!-- Button -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Create\"></label>
  <div class=\"col-md-4\">
    <button id=\"Create\" name=\"Create\" class=\"btn btn-primary\">Utwórz Umowę</button>
  </div>
</div>

</fieldset>
</form>", "C:\\xampp\\htdocs\\crm/themes/demo/partials/deals/CreateReservation.htm", "");
    }
}
