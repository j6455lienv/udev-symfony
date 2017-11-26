<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_ca22c6ed7129b14750fa99a4627e4d14f1a188f5721b3fd8e0738d0dc1cc6940 extends Twig_Template
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
        $__internal_ec2f4576d51b775d4602d19a67848825f36f164d33ef5f1d4c1b3ee9229593e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec2f4576d51b775d4602d19a67848825f36f164d33ef5f1d4c1b3ee9229593e1->enter($__internal_ec2f4576d51b775d4602d19a67848825f36f164d33ef5f1d4c1b3ee9229593e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_8a94604ba5e863a8242dd07650764d70e036a24e40a8cf7af1ab79f737db6d9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a94604ba5e863a8242dd07650764d70e036a24e40a8cf7af1ab79f737db6d9c->enter($__internal_8a94604ba5e863a8242dd07650764d70e036a24e40a8cf7af1ab79f737db6d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_ec2f4576d51b775d4602d19a67848825f36f164d33ef5f1d4c1b3ee9229593e1->leave($__internal_ec2f4576d51b775d4602d19a67848825f36f164d33ef5f1d4c1b3ee9229593e1_prof);

        
        $__internal_8a94604ba5e863a8242dd07650764d70e036a24e40a8cf7af1ab79f737db6d9c->leave($__internal_8a94604ba5e863a8242dd07650764d70e036a24e40a8cf7af1ab79f737db6d9c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/udev_symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
