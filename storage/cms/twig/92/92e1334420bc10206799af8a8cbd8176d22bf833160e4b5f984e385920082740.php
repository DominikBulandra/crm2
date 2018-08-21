<?php

/* C:\xampp\htdocs\crm/plugins/dominik/clients/components/create/default.htm */
class __TwigTemplate_428631e6c97ce5bd4117ff9a949d4f002bf3b649456094487ed8be5ca1ffc1c3 extends Twig_Template
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
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"/>

<form class=\"form-horizontal\" data-request=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onCreate\" data-request-success=\"alert('Created')\">
 <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
  ";
        // line 6
        echo call_user_func_array($this->env->getFunction('form_token')->getCallable(), array("token"));
        echo "
  ";
        // line 7
        echo call_user_func_array($this->env->getFunction('form_sessionKey')->getCallable(), array("sessionKey"));
        echo "
<fieldset>

<!-- Form Name -->
<legend>Nowy Klient</legend>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"firstname\">Imię</label>  
  <div class=\"col-md-4\">
  <input id=\"firstname\" name=\"firstname\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\" required=\"\">
  <span class=\"help-block\">Imię klienta</span>  
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"lastname\">Nazwisko</label>  
  <div class=\"col-md-4\">
  <input id=\"lastname\" name=\"lastname\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\" required=\"\">
  <span class=\"help-block\">Nazwisko klienta</span>  
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
\t<label for=\"borndate\" class=\"control-label col-md-4\">Data Urodzenia</label>
<div class=\"fb-date field-borndate col-md-4\">
\t
\t<input type=\"date\" class=\"form-control input-md\" name=\"borndate\" id=\"borndate\">
</div>
</div>
<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"email\">E-mail</label>  
  <div class=\"col-md-4\">
  <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\">
  <span class=\"help-block\">Adres e-mail</span>  
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"email\">Numer telefonu</label>  
  <div class=\"col-md-4\">
  <input id=\"number\" name=\"number\" type=\"number\" placeholder=\"placeholder\" class=\"form-control input-md\">
  <span class=\"help-block\">Numer telefonu</span>  
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"email\">Ulica</label>  
  <div class=\"col-md-4\">
  <input id=\"street\" name=\"street\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\">
  <span class=\"help-block\">Ulica</span>  
  </div>
</div>


<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"email\">Numer</label>  
  <div class=\"col-md-4\">
  <input id=\"street_number\" name=\"street_number\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\">
  <span class=\"help-block\">Numer</span>  
  </div>
</div>


<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"email\">Kod pocztowy</label>  
  <div class=\"col-md-4\">
  <input id=\"zip\" name=\"zip\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\">
  <span class=\"help-block\">Kod pocztowy</span>  
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"email\">Miasto</label>  
  <div class=\"col-md-4\">
  <input id=\"city\" name=\"city\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\">
  <span class=\"help-block\">Miasto</span>  
  </div>
</div>
\t
<!-- Multiple Radios -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Comercial\">Zgoda na rozsyłanie ofert</label>
  <div class=\"col-md-4\">
  <div class=\"radio\">
    <label for=\"Comercial-0\">
      <input type=\"radio\" name=\"comercial\" id=\"Comercial-0\" value=\"1\" checked=\"checked\">
      Tak
    </label>
\t</div>
  <div class=\"radio\">
    <label for=\"Comercial-1\">
      <input type=\"radio\" name=\"comercial\" id=\"Comercial-1\" value=\"0\">
      Nie
    </label>
\t</div>
  </div>
</div>

<!-- Select Basic -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Gender\">Płeć</label>
  <div class=\"col-md-4\">
    <select id=\"gender\" name=\"gender\" class=\"form-control\">
      <option value=\"0\">Kobieta</option>
      <option value=\"1\">Mężczyzna</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Create\"></label>
  <div class=\"col-md-4\">
    <button id=\"Create\" name=\"Create\" class=\"btn btn-primary\">Utwórz Klienta</button>
  </div>
</div>

</fieldset>
</form>
";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/plugins/dominik/clients/components/create/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 7,  29 => 6,  24 => 4,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<link rel=\"stylesheet\" type=\"text/css\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"/>

<form class=\"form-horizontal\" data-request=\"{{ __SELF__ }}::onCreate\" data-request-success=\"alert('Created')\">
 <input type=\"hidden\" name=\"_handler\" value=\"onSave\">
  {{ form_token() }}
  {{ form_sessionKey() }}
<fieldset>

<!-- Form Name -->
<legend>Nowy Klient</legend>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"firstname\">Imię</label>  
  <div class=\"col-md-4\">
  <input id=\"firstname\" name=\"firstname\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\" required=\"\">
  <span class=\"help-block\">Imię klienta</span>  
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"lastname\">Nazwisko</label>  
  <div class=\"col-md-4\">
  <input id=\"lastname\" name=\"lastname\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\" required=\"\">
  <span class=\"help-block\">Nazwisko klienta</span>  
  </div>
</div>

<!-- Text input-->
<div class=\"form-group\">
\t<label for=\"borndate\" class=\"control-label col-md-4\">Data Urodzenia</label>
<div class=\"fb-date field-borndate col-md-4\">
\t
\t<input type=\"date\" class=\"form-control input-md\" name=\"borndate\" id=\"borndate\">
</div>
</div>
<!-- Text input-->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"email\">E-mail</label>  
  <div class=\"col-md-4\">
  <input id=\"email\" name=\"email\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\">
  <span class=\"help-block\">Adres e-mail</span>  
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"email\">Numer telefonu</label>  
  <div class=\"col-md-4\">
  <input id=\"number\" name=\"number\" type=\"number\" placeholder=\"placeholder\" class=\"form-control input-md\">
  <span class=\"help-block\">Numer telefonu</span>  
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"email\">Ulica</label>  
  <div class=\"col-md-4\">
  <input id=\"street\" name=\"street\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\">
  <span class=\"help-block\">Ulica</span>  
  </div>
</div>


<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"email\">Numer</label>  
  <div class=\"col-md-4\">
  <input id=\"street_number\" name=\"street_number\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\">
  <span class=\"help-block\">Numer</span>  
  </div>
</div>


<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"email\">Kod pocztowy</label>  
  <div class=\"col-md-4\">
  <input id=\"zip\" name=\"zip\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\">
  <span class=\"help-block\">Kod pocztowy</span>  
  </div>
</div>

<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"email\">Miasto</label>  
  <div class=\"col-md-4\">
  <input id=\"city\" name=\"city\" type=\"text\" placeholder=\"placeholder\" class=\"form-control input-md\">
  <span class=\"help-block\">Miasto</span>  
  </div>
</div>
\t
<!-- Multiple Radios -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Comercial\">Zgoda na rozsyłanie ofert</label>
  <div class=\"col-md-4\">
  <div class=\"radio\">
    <label for=\"Comercial-0\">
      <input type=\"radio\" name=\"comercial\" id=\"Comercial-0\" value=\"1\" checked=\"checked\">
      Tak
    </label>
\t</div>
  <div class=\"radio\">
    <label for=\"Comercial-1\">
      <input type=\"radio\" name=\"comercial\" id=\"Comercial-1\" value=\"0\">
      Nie
    </label>
\t</div>
  </div>
</div>

<!-- Select Basic -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Gender\">Płeć</label>
  <div class=\"col-md-4\">
    <select id=\"gender\" name=\"gender\" class=\"form-control\">
      <option value=\"0\">Kobieta</option>
      <option value=\"1\">Mężczyzna</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class=\"form-group\">
  <label class=\"col-md-4 control-label\" for=\"Create\"></label>
  <div class=\"col-md-4\">
    <button id=\"Create\" name=\"Create\" class=\"btn btn-primary\">Utwórz Klienta</button>
  </div>
</div>

</fieldset>
</form>
", "C:\\xampp\\htdocs\\crm/plugins/dominik/clients/components/create/default.htm", "");
    }
}
