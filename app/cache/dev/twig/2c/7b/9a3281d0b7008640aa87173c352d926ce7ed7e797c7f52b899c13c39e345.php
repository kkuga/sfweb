<?php

/* ::base.html.twig */
class __TwigTemplate_2c7b9a3281d0b7008640aa87173c352d926ce7ed7e797c7f52b899c13c39e345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        
        
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />

        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <nav class=\"navbar navbar-default\">
  <div class=\"container-fluid\">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class=\"navbar-header\">
      <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"#\">SymfonySite</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
      <ul class=\"nav navbar-nav\">
        <li><a href=\"#\">Accueil</a></li>
        <li><a href=\"#\">Les news</a></li>
      </ul>
      
      <ul class=\"nav navbar-nav navbar-right\">
        ";
        // line 34
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 35
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
            <li class=\"dropdown\">
              <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <span class=\"caret\"></span></a>
              <ul class=\"dropdown-menu\" role=\"menu\">
                <li><a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Profile</a></li>
                <li><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("admin_news_ajouter");
            echo "\">Rediger un news</a></li> 
              </ul>
            </li>
        ";
        } else {
            // line 44
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
                <li><a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Enregistrement</a></li> 
        ";
        }
        // line 47
        echo "        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
    </head>
    <body>
        ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\"></script>    
     <script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    

    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 54,  146 => 53,  141 => 6,  135 => 5,  125 => 56,  120 => 55,  117 => 54,  115 => 53,  107 => 47,  102 => 45,  97 => 44,  90 => 40,  86 => 39,  81 => 37,  75 => 35,  73 => 34,  48 => 12,  43 => 10,  39 => 9,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
