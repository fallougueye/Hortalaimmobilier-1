<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8c374e12e73914b5f102e3be95402f14f258e97959a5553ee752256db776868e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38e65d8433f08276d4fd6fc143567e976a25c06852a301eb2592ea7972bd7831 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38e65d8433f08276d4fd6fc143567e976a25c06852a301eb2592ea7972bd7831->enter($__internal_38e65d8433f08276d4fd6fc143567e976a25c06852a301eb2592ea7972bd7831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_023f1979a781a89d2f27d821747e253138bc9244a96f4f1198930eca2834c5be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_023f1979a781a89d2f27d821747e253138bc9244a96f4f1198930eca2834c5be->enter($__internal_023f1979a781a89d2f27d821747e253138bc9244a96f4f1198930eca2834c5be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38e65d8433f08276d4fd6fc143567e976a25c06852a301eb2592ea7972bd7831->leave($__internal_38e65d8433f08276d4fd6fc143567e976a25c06852a301eb2592ea7972bd7831_prof);

        
        $__internal_023f1979a781a89d2f27d821747e253138bc9244a96f4f1198930eca2834c5be->leave($__internal_023f1979a781a89d2f27d821747e253138bc9244a96f4f1198930eca2834c5be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd1faa5f944b9c7659a146eefd925a44a82501074766539abadc6372042ba08a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd1faa5f944b9c7659a146eefd925a44a82501074766539abadc6372042ba08a->enter($__internal_dd1faa5f944b9c7659a146eefd925a44a82501074766539abadc6372042ba08a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_37a5ba071f2629c431da4dc7d8c8041f69bf068776ae1e4b9f08106caf43a7d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37a5ba071f2629c431da4dc7d8c8041f69bf068776ae1e4b9f08106caf43a7d6->enter($__internal_37a5ba071f2629c431da4dc7d8c8041f69bf068776ae1e4b9f08106caf43a7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_37a5ba071f2629c431da4dc7d8c8041f69bf068776ae1e4b9f08106caf43a7d6->leave($__internal_37a5ba071f2629c431da4dc7d8c8041f69bf068776ae1e4b9f08106caf43a7d6_prof);

        
        $__internal_dd1faa5f944b9c7659a146eefd925a44a82501074766539abadc6372042ba08a->leave($__internal_dd1faa5f944b9c7659a146eefd925a44a82501074766539abadc6372042ba08a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f73755be24dae8c6959049607072a7a330f8179bbcb692005c50a2aa2431f6ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f73755be24dae8c6959049607072a7a330f8179bbcb692005c50a2aa2431f6ab->enter($__internal_f73755be24dae8c6959049607072a7a330f8179bbcb692005c50a2aa2431f6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_045e41c7d3212fc6128a6b98bdf9fee900e9a69f57ddf7bc4345e5bf995e24a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045e41c7d3212fc6128a6b98bdf9fee900e9a69f57ddf7bc4345e5bf995e24a0->enter($__internal_045e41c7d3212fc6128a6b98bdf9fee900e9a69f57ddf7bc4345e5bf995e24a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_045e41c7d3212fc6128a6b98bdf9fee900e9a69f57ddf7bc4345e5bf995e24a0->leave($__internal_045e41c7d3212fc6128a6b98bdf9fee900e9a69f57ddf7bc4345e5bf995e24a0_prof);

        
        $__internal_f73755be24dae8c6959049607072a7a330f8179bbcb692005c50a2aa2431f6ab->leave($__internal_f73755be24dae8c6959049607072a7a330f8179bbcb692005c50a2aa2431f6ab_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_1aa7ba382f1f41e9ddc4a23b4c1243fd4b6cf68eda88bf54811992ca114b4e15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aa7ba382f1f41e9ddc4a23b4c1243fd4b6cf68eda88bf54811992ca114b4e15->enter($__internal_1aa7ba382f1f41e9ddc4a23b4c1243fd4b6cf68eda88bf54811992ca114b4e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b01aa7b6d2c3af2e9551e08389b9a3d62e4a48f9d9e8d0a13fdcf90aa9bd8de4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b01aa7b6d2c3af2e9551e08389b9a3d62e4a48f9d9e8d0a13fdcf90aa9bd8de4->enter($__internal_b01aa7b6d2c3af2e9551e08389b9a3d62e4a48f9d9e8d0a13fdcf90aa9bd8de4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_b01aa7b6d2c3af2e9551e08389b9a3d62e4a48f9d9e8d0a13fdcf90aa9bd8de4->leave($__internal_b01aa7b6d2c3af2e9551e08389b9a3d62e4a48f9d9e8d0a13fdcf90aa9bd8de4_prof);

        
        $__internal_1aa7ba382f1f41e9ddc4a23b4c1243fd4b6cf68eda88bf54811992ca114b4e15->leave($__internal_1aa7ba382f1f41e9ddc4a23b4c1243fd4b6cf68eda88bf54811992ca114b4e15_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/hortala/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
