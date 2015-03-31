<?php

/* VisiteursAccueilBundle:Default:index.html.twig */
class __TwigTemplate_f528c8b7f33b239abe97036f8791f4c8b9e2763878ca7a5d41cb0d29af429e0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <p>coucou</p>
        ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            echo "    
            ";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "titre", array()), "html", null, true);
            echo "<br/>
            ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "text", array()), "html", null, true);
            echo " par ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["n"], "auteur", array()), "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "      
    </div>
";
    }

    public function getTemplateName()
    {
        return "VisiteursAccueilBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 9,  53 => 8,  49 => 7,  43 => 6,  39 => 4,  36 => 3,  11 => 1,);
    }
}
