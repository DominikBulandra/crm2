<?php

/* C:\xampp\htdocs\crm/themes/demo/pages/apartments.htm */
class __TwigTemplate_6437f47669e4e36ffd4125da79b0fb998fea74156266f31fe1499f0fcf2aa498 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("session"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 2
        echo "
<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<style>
  .dialog-form {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
</style>
<div id='myDiv2' style=\"margin-top: 30px;\">
  <input name=\"active\" id=\"active\" type=\"text\">
<table id=\"table\" class=\"display compact\">
    <thead>
        <tr>
            <th>Id </th>
            <th>Oznaczenie</th>
            <th>cell id</th>
            <th>Edycja</th>
            <th>Aktywny</th>
        </tr>
    </thead>
    <tbody>
    \t
    \t";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ev4"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
            // line 34
            echo "        <tr id=\"tableon\">
            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "notation", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "cell_id", array()), "html", null, true);
            echo "</td>
            <td><button id=\"modalb\" onclick=\"loadDoc()\">test</button><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target='#exampleModal";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "'>Szczegóły</button>
             ";
            // line 39
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "isactive", array()) == "1")) {
                // line 40
                echo "               <button id=\"addc\" onclick=\"addCookie('";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "notation", array()), "html", null, true);
                echo "')\">dodaj do koszyka</button>

";
            }
            // line 42
            echo "                    

<div class=\"modal fade\" id=\"exampleModal";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
      
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
          ";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "
          <ul class=\"nav nav-tabs\"id=\"tabContent\">
              <li><a href=\"#details";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"tab\">Karta lokalu</a></li>
              <li><a href=\"#access-security";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"tab\">Dokumenty</a></li>
              <li><a href=\"#networking";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"tab\">Finanse</a></li>
                <li><a href=\"#plan";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"tab\">Plan</a></li>
              <li><a href=\"#wykonczenie";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\" data-toggle=\"tab\">Wykończenie</a></li>
            </ul>
        
            
              
         
            <div class=\"control-group\">
              <label class=\"control-label\">Instance Name</label>
            
              </div>
            
              
              <div class=\"tab-pane fade\" id=\"details";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\">
                <DIV id='displaydiv' style=\"display: none;\"><P>display none</P></DIV>
                <form onsubmit='onEdit()'>
                  <table>
                      
                      <tr>
                        <td>Oznaczenie</td>
                        <td><input id='EditInput' name='id' value='";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "notation", array()), "html", null, true);
            echo "' readonly='readonly'></td>
                      </tr>
                      <tr>
                        <td>Piętro</td>
                        <td><input  id='EditInput' name='floor' value='";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "floor", array()), "html", null, true);
            echo "' readonly='readonly'></td>
                        
                      </tr>
                      <tr>
                        <td>Cena</td>
                        <td><input  id='EditInput' name='price' value='";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "price", array()), "html", null, true);
            echo "' readonly='readonly'></td>
                       
                      </tr>
                      <tr>
                        <td>Powierzchnia</td>
                        <td>Helen Bennett</td>
                    
                      </tr>
                      <tr>
                        <td>Ilość pokoi</td>
                        <td>Yoshi Tannamuri</td>
                      </tr>
                      <tr>
                        <td>Vat</td>
                        <td>Giovanni Rovelli</td>
                      </tr>
                      <button type=\"submit\">Zapisz</button>
                    </table>
                    </form>
                    <button id=\"editapart\" onclick=\"loadEdit()\">Zmień</button>
                    


              </div>
              <div class=\"tab-pane fade\" id=\"access-security";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\">
               <P>Lista dokumentów:</P>
            </div> 
            
              <div class=\"tab-pane fade\" id=\"plan";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\">
                  ";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "notation", array()), "html", null, true);
            echo "
              ";
            // line 118
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("places/places"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            echo " plan
              </div> 
           
              <div class=\"tab-pane fade\" id=\"wykonczenie";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\">
              wykonczenia
              
              </div> 
            
      
           
              <div class=\"tab-pane fade\" id=\"networking";
            // line 128
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "id", array()), "html", null, true);
            echo "\">
              networking
             </div> 
            
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
      </div>
    </div>
  </div>
</div>


                                    </td>
                                    <td>
                                      ";
            // line 144
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["id"], "isactive", array()) == "1")) {
                // line 145
                echo "                Tak
";
            } else {
                // line 147
                echo "    Nie
";
            }
            // line 149
            echo "                                      
                                    </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "        
    </tbody>
</table>

<div id=\"dialog-form\" class=\"dialog-form\" title=\"Create new user\">
  <p class=\"validateTips\">All form fields are required.</p>
 
  <form>
    <fieldset>
      <label for=\"name\">Name</label>
      <input type=\"text\" name=\"name\" id=\"name\" value=\"Jane Smith\" class=\"text ui-widget-content ui-corner-all\">
      <label for=\"email\">Email</label>
      <input type=\"text\" name=\"email\" id=\"email\" value=\"jane@smith.com\" class=\"text ui-widget-content ui-corner-all\">
      <label for=\"password\">Password</label>
      <input type=\"password\" name=\"password\" id=\"password\" value=\"xxxxxxx\" class=\"text ui-widget-content ui-corner-all\">
 
      <!-- Allow form submission with keyboard without duplicating the dialog button -->
      <input type=\"submit\" tabindex=\"-1\" style=\"position:absolute; top:-1000px\">
    </fieldset>
  </form>
</div>
<DIV id='displaydiv' style=\"display: none;\"><P>display none</P></DIV>
<button id=\"testbutton\" onclick=\"loadDoc()\">test</button>
<div id=\"dialog\" title=\"Basic dialog\">
    <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
  </div>

  <button id=\"editapart\">Zmień</button>
</div>
<script type=\"text/javascript\">

 var dialog, form;
 function addUser (){
  alert(\"adduser\");
 };
 dialog = \$( \"#dialog-form\" ).dialog({
      autoOpen: false,
      height: 400,
      width: 350,
      modal: true,
      buttons: {
        \"Create an account\": addUser,
        Cancel: function() {
          dialog.dialog( \"close\" );
        }
      },
      close: function() {
        form[ 0 ].reset();
        allFields.removeClass( \"ui-state-error\" );
      }
    });
    \$( \"#testbutton\" ).button().on( \"click\", function() {
  dialog.dialog( \"open\" );
    });
    function loadDoc(){
      dialog.dialog( \"open\" );

    };
    function loadEdit(){
      var \$yourUl = \$(\"#displaydiv\"); 
\$yourUl.css(\"display\", \$yourUl.css(\"display\") === 'none' ? '' : 'none');
\$(\"#yourUlId\").toggle();
     
    };

function delCookie( name ) {
  document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
 
  alert(\"usunięto\");
  var y = document.cookie;
  var html=\"\";
  var res = y.split(\";\");
  for (var i = 0, len = res.length; i < len; i++) {
    if(res[i].includes(\"basket\"))
    {
      html += (res[i]);
      html +=  '<button onClick=\"delCookie(\\'' + res[i] + '\\')\" />Usuń</button>';
     
  html += (\"<P>-------</P>\");
    }
  }
  \$('#basketdiv').html(html);
}
function addCookie(c,notation){
  
  document.cookie = \"basket\"+c+\"=\"+notation;
  var y = document.cookie;
  var html=\"\";
  var res = y.split(\";\");
   for (var i = 0, len = res.length; i < len; i++) {
     
    if(res[i].includes(\"basket\"))
    {
      html += (res[i]);
      html +=  '<input type=\"button\" onClick=\"delCookie(\\'' + res[i] + '\\')\" />';
     
  html += (\"<P>-------</P>\");
    }
 
}
 html += (\"<P>Komórki:</P>\");
   for (var i = 0, len = res.length; i < len; i++) {
    
    if(res[i].includes(\"cell\"))
    {
      html += (res[i]);
      html +=  '<input type=\"button\" onClick=\"delCookie(\\'' + res[i] + '\\')\" />';
     
  html += (\"<P>-------</P>\");
    }
 
}
html += (\"<P>Parking/Garaż:</P>\");
   for (var i = 0, len = res.length; i < len; i++) {
    
    if(res[i].includes(\"garage\"))
    {
      html += (res[i]);
      html +=  '<input type=\"button\" onClick=\"delCookie(\\'' + res[i] + '\\')\" />';
     
  html += (\"<P>-------</P>\");
    }
 
}
  
\$('#basketdiv').html(html);
  
alert(\"dodano do koszyka \"+c);
}

  \$(document).ready( function () {
    
    \$('#table tr').bind('mouseover', function(e) {
    \$(e.currentTarget).children('td, th').css('background-color','#FFDF64');});
    \$('#table tr').bind('mouseleave', function(e) {
      var str=\$(e.currentTarget).children('td').eq(4).html();
      var str2='Nie';
     if (str && str.includes(str2))
     {
     \$(e.currentTarget).children('td').css('background-color','#DC0044');
     }
     else{
    \$(e.currentTarget).children('td, th').css('background-color','#FFF');
  };
});
    \$('#table tr').bind('dblclick', function(e) {
    //\$(e.currentTarget).children('td, th').css('background-color','#FFDF64');
    //alert(\$(e.currentTarget).children('td').eq(0).text())
    \$.request('onApartmentClick', {data: {id: \$(e.currentTarget).children('td').eq(0).text()}});

    });
    \$('#table tr').each(function(){
    //\$(this).children('td').eq(4).css('background-color','#DC0044');
     console.log(\$(this).children('td').eq(4).html());
     var str=\$(this).children('td').eq(4).html();
      var str2='Nie';
     if (str && str.includes(str2)) {
       console.log(\"działa\");
       \$(this).children('td').css('background-color','#DC0044');
     }
})

} );
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\crm/themes/demo/pages/apartments.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 153,  257 => 149,  253 => 147,  249 => 145,  247 => 144,  228 => 128,  218 => 121,  210 => 118,  206 => 117,  202 => 116,  195 => 112,  168 => 88,  160 => 83,  153 => 79,  143 => 72,  128 => 60,  124 => 59,  120 => 58,  116 => 57,  112 => 56,  107 => 54,  94 => 44,  90 => 42,  81 => 40,  79 => 39,  75 => 38,  71 => 37,  67 => 36,  63 => 35,  60 => 34,  56 => 33,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% component 'session' %}

<link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<style>
  .dialog-form {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
</style>
<div id='myDiv2' style=\"margin-top: 30px;\">
  <input name=\"active\" id=\"active\" type=\"text\">
<table id=\"table\" class=\"display compact\">
    <thead>
        <tr>
            <th>Id </th>
            <th>Oznaczenie</th>
            <th>cell id</th>
            <th>Edycja</th>
            <th>Aktywny</th>
        </tr>
    </thead>
    <tbody>
    \t
    \t{% for id in ev4 %}
        <tr id=\"tableon\">
            <td>{{id.id}}</td>
            <td>{{id.notation}}</td>
            <td>{{id.cell_id}}</td>
            <td><button id=\"modalb\" onclick=\"loadDoc()\">test</button><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target='#exampleModal{{ id.id }}'>Szczegóły</button>
             {% if id.isactive =='1' %}
               <button id=\"addc\" onclick=\"addCookie('{{id.id}}','{{id.notation}}')\">dodaj do koszyka</button>

{% endif %}                    

<div class=\"modal fade\" id=\"exampleModal{{ id.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
      
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
          {{id.id}}
          <ul class=\"nav nav-tabs\"id=\"tabContent\">
              <li><a href=\"#details{{ id.id }}\" data-toggle=\"tab\">Karta lokalu</a></li>
              <li><a href=\"#access-security{{ id.id }}\" data-toggle=\"tab\">Dokumenty</a></li>
              <li><a href=\"#networking{{ id.id }}\" data-toggle=\"tab\">Finanse</a></li>
                <li><a href=\"#plan{{ id.id }}\" data-toggle=\"tab\">Plan</a></li>
              <li><a href=\"#wykonczenie{{ id.id }}\" data-toggle=\"tab\">Wykończenie</a></li>
            </ul>
        
            
              
         
            <div class=\"control-group\">
              <label class=\"control-label\">Instance Name</label>
            
              </div>
            
              
              <div class=\"tab-pane fade\" id=\"details{{ id.id }}\">
                <DIV id='displaydiv' style=\"display: none;\"><P>display none</P></DIV>
                <form onsubmit='onEdit()'>
                  <table>
                      
                      <tr>
                        <td>Oznaczenie</td>
                        <td><input id='EditInput' name='id' value='{{id.notation}}' readonly='readonly'></td>
                      </tr>
                      <tr>
                        <td>Piętro</td>
                        <td><input  id='EditInput' name='floor' value='{{id.floor}}' readonly='readonly'></td>
                        
                      </tr>
                      <tr>
                        <td>Cena</td>
                        <td><input  id='EditInput' name='price' value='{{id.price}}' readonly='readonly'></td>
                       
                      </tr>
                      <tr>
                        <td>Powierzchnia</td>
                        <td>Helen Bennett</td>
                    
                      </tr>
                      <tr>
                        <td>Ilość pokoi</td>
                        <td>Yoshi Tannamuri</td>
                      </tr>
                      <tr>
                        <td>Vat</td>
                        <td>Giovanni Rovelli</td>
                      </tr>
                      <button type=\"submit\">Zapisz</button>
                    </table>
                    </form>
                    <button id=\"editapart\" onclick=\"loadEdit()\">Zmień</button>
                    


              </div>
              <div class=\"tab-pane fade\" id=\"access-security{{ id.id }}\">
               <P>Lista dokumentów:</P>
            </div> 
            
              <div class=\"tab-pane fade\" id=\"plan{{ id.id }}\">
                  {{id.notation}}
              {% partial 'places/places' %} plan
              </div> 
           
              <div class=\"tab-pane fade\" id=\"wykonczenie{{ id.id }}\">
              wykonczenia
              
              </div> 
            
      
           
              <div class=\"tab-pane fade\" id=\"networking{{ id.id }}\">
              networking
             </div> 
            
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
      </div>
    </div>
  </div>
</div>


                                    </td>
                                    <td>
                                      {% if id.isactive =='1' %}
                Tak
{% else %}
    Nie
{% endif %}
                                      
                                    </td>
        </tr>
        {% endfor %}
        
    </tbody>
</table>

<div id=\"dialog-form\" class=\"dialog-form\" title=\"Create new user\">
  <p class=\"validateTips\">All form fields are required.</p>
 
  <form>
    <fieldset>
      <label for=\"name\">Name</label>
      <input type=\"text\" name=\"name\" id=\"name\" value=\"Jane Smith\" class=\"text ui-widget-content ui-corner-all\">
      <label for=\"email\">Email</label>
      <input type=\"text\" name=\"email\" id=\"email\" value=\"jane@smith.com\" class=\"text ui-widget-content ui-corner-all\">
      <label for=\"password\">Password</label>
      <input type=\"password\" name=\"password\" id=\"password\" value=\"xxxxxxx\" class=\"text ui-widget-content ui-corner-all\">
 
      <!-- Allow form submission with keyboard without duplicating the dialog button -->
      <input type=\"submit\" tabindex=\"-1\" style=\"position:absolute; top:-1000px\">
    </fieldset>
  </form>
</div>
<DIV id='displaydiv' style=\"display: none;\"><P>display none</P></DIV>
<button id=\"testbutton\" onclick=\"loadDoc()\">test</button>
<div id=\"dialog\" title=\"Basic dialog\">
    <p>This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
  </div>

  <button id=\"editapart\">Zmień</button>
</div>
<script type=\"text/javascript\">

 var dialog, form;
 function addUser (){
  alert(\"adduser\");
 };
 dialog = \$( \"#dialog-form\" ).dialog({
      autoOpen: false,
      height: 400,
      width: 350,
      modal: true,
      buttons: {
        \"Create an account\": addUser,
        Cancel: function() {
          dialog.dialog( \"close\" );
        }
      },
      close: function() {
        form[ 0 ].reset();
        allFields.removeClass( \"ui-state-error\" );
      }
    });
    \$( \"#testbutton\" ).button().on( \"click\", function() {
  dialog.dialog( \"open\" );
    });
    function loadDoc(){
      dialog.dialog( \"open\" );

    };
    function loadEdit(){
      var \$yourUl = \$(\"#displaydiv\"); 
\$yourUl.css(\"display\", \$yourUl.css(\"display\") === 'none' ? '' : 'none');
\$(\"#yourUlId\").toggle();
     
    };

function delCookie( name ) {
  document.cookie = name + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';
 
  alert(\"usunięto\");
  var y = document.cookie;
  var html=\"\";
  var res = y.split(\";\");
  for (var i = 0, len = res.length; i < len; i++) {
    if(res[i].includes(\"basket\"))
    {
      html += (res[i]);
      html +=  '<button onClick=\"delCookie(\\'' + res[i] + '\\')\" />Usuń</button>';
     
  html += (\"<P>-------</P>\");
    }
  }
  \$('#basketdiv').html(html);
}
function addCookie(c,notation){
  
  document.cookie = \"basket\"+c+\"=\"+notation;
  var y = document.cookie;
  var html=\"\";
  var res = y.split(\";\");
   for (var i = 0, len = res.length; i < len; i++) {
     
    if(res[i].includes(\"basket\"))
    {
      html += (res[i]);
      html +=  '<input type=\"button\" onClick=\"delCookie(\\'' + res[i] + '\\')\" />';
     
  html += (\"<P>-------</P>\");
    }
 
}
 html += (\"<P>Komórki:</P>\");
   for (var i = 0, len = res.length; i < len; i++) {
    
    if(res[i].includes(\"cell\"))
    {
      html += (res[i]);
      html +=  '<input type=\"button\" onClick=\"delCookie(\\'' + res[i] + '\\')\" />';
     
  html += (\"<P>-------</P>\");
    }
 
}
html += (\"<P>Parking/Garaż:</P>\");
   for (var i = 0, len = res.length; i < len; i++) {
    
    if(res[i].includes(\"garage\"))
    {
      html += (res[i]);
      html +=  '<input type=\"button\" onClick=\"delCookie(\\'' + res[i] + '\\')\" />';
     
  html += (\"<P>-------</P>\");
    }
 
}
  
\$('#basketdiv').html(html);
  
alert(\"dodano do koszyka \"+c);
}

  \$(document).ready( function () {
    
    \$('#table tr').bind('mouseover', function(e) {
    \$(e.currentTarget).children('td, th').css('background-color','#FFDF64');});
    \$('#table tr').bind('mouseleave', function(e) {
      var str=\$(e.currentTarget).children('td').eq(4).html();
      var str2='Nie';
     if (str && str.includes(str2))
     {
     \$(e.currentTarget).children('td').css('background-color','#DC0044');
     }
     else{
    \$(e.currentTarget).children('td, th').css('background-color','#FFF');
  };
});
    \$('#table tr').bind('dblclick', function(e) {
    //\$(e.currentTarget).children('td, th').css('background-color','#FFDF64');
    //alert(\$(e.currentTarget).children('td').eq(0).text())
    \$.request('onApartmentClick', {data: {id: \$(e.currentTarget).children('td').eq(0).text()}});

    });
    \$('#table tr').each(function(){
    //\$(this).children('td').eq(4).css('background-color','#DC0044');
     console.log(\$(this).children('td').eq(4).html());
     var str=\$(this).children('td').eq(4).html();
      var str2='Nie';
     if (str && str.includes(str2)) {
       console.log(\"działa\");
       \$(this).children('td').css('background-color','#DC0044');
     }
})

} );
</script>", "C:\\xampp\\htdocs\\crm/themes/demo/pages/apartments.htm", "");
    }
}
