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

/* user/user.html */
class __TwigTemplate_4845b0a525ce4e6f4627e5507ea6382d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/user.html"));

        // line 1
        echo "<table class=\"table\">
    <thead>
        <tr>
            <th>firstname</th>
            <th>lastname</th>
            <th>phone</th>
            <th>age</th>
            <th>mail</th>
        </tr>
    </thead>
    <tbody>
    <?php   if (!\$users){
                foreach( \$user as \$users) {
    ?>
                    <tr>
                        <td><?php \$user[firstname] ?></td>
                        <td><?php \$user[lastname] ?></td>
                        <td><?php \$user[phone] ?></td>
                        <td><?php \$user[age] ?></td>
                        <td><?php \$user[mail] ?></td>
                    </tr>
    <?php       }
            }
            else {?>
            <tr>
                <td colspan=\"2\">no records found</td>
            </tr>
    <?php   } 
    ?>
    </tbody>
</table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "user/user.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table class=\"table\">
    <thead>
        <tr>
            <th>firstname</th>
            <th>lastname</th>
            <th>phone</th>
            <th>age</th>
            <th>mail</th>
        </tr>
    </thead>
    <tbody>
    <?php   if (!\$users){
                foreach( \$user as \$users) {
    ?>
                    <tr>
                        <td><?php \$user[firstname] ?></td>
                        <td><?php \$user[lastname] ?></td>
                        <td><?php \$user[phone] ?></td>
                        <td><?php \$user[age] ?></td>
                        <td><?php \$user[mail] ?></td>
                    </tr>
    <?php       }
            }
            else {?>
            <tr>
                <td colspan=\"2\">no records found</td>
            </tr>
    <?php   } 
    ?>
    </tbody>
</table>", "user/user.html", "C:\\Users\\Utilisateur\\Desktop\\php\\testWimova\\templates\\user\\user.html");
    }
}
