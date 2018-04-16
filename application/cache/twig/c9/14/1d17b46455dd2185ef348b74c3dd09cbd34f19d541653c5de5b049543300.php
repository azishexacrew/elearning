<?php

/* layout-private.html */
class __TwigTemplate_c9141d17b46455dd2185ef348b74c3dd09cbd34f19d541653c5de5b049543300 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 5
        $this->env->loadTemplate("layout-header.html")->display($context);
        // line 6
        echo "        ";
        $this->displayBlock('css', $context, $blocks);
        // line 7
        echo "    </head>

    <body>
        <div class=\"navbar navbar-fixed-top\">
            <div class=\"navbar-inner\">
                <div class=\"container\">
                    <a class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".navbar-inverse-collapse\">
                        <i class=\"icon-reorder shaded\"></i>
                    </a>
                    <a class=\"brand\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["site_url"]) ? $context["site_url"] : null), "html", null, true);
        echo "\">
                        <span class=\"visible-phone brand-txt\">e-Learning</span><span class=\"visible-desktop visible-tablet brand-txt\">";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
        echo "</span>
                    </a>
                    <div class=\"nav-collapse collapse navbar-inverse-collapse\">
                        <form class=\"navbar-search pull-left input-append\" method=\"get\" action=\"";
        // line 20
        echo twig_escape_filter($this->env, site_url("welcome/search"), "html", null, true);
        echo "\">
                            <input type=\"text\" class=\"span3\" name=\"q\">
                            <button class=\"btn\" type=\"submit\">
                                <i class=\"icon-search\"></i>
                            </button>
                        </form>
                        <ul class=\"nav pull-right\">
                            ";
        // line 27
        $this->env->loadTemplate("top-mobile-menu.html")->display($context);
        // line 28
        echo "                            <li class=\"nav-user dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                ";
        // line 29
        echo twig_escape_filter($this->env, nama_panggilan(get_sess_data("user", "nama")), "html", null, true);
        echo "

                                <span class=\"pull-right\">
                                <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, get_url_image_session(get_sess_data("user", "foto"), "medium", get_sess_data("user", "jenis_kelamin")), "html", null, true);
        echo "\" class=\"nav-avatar img-polaroid\" />
                                <b class=\"caret\"></b></a>
                                </span>
                                <ul class=\"dropdown-menu\">
                                    ";
        // line 36
        if (is_admin()) {
            // line 37
            echo "                                    <li>";
            echo anchor(((("pengajar/detail/" . get_sess_data("user", "status_id")) . "/") . get_sess_data("user", "id")), "Detail Profil", array("title" => "Detail Profil"));
            echo "</li>
                                    ";
        }
        // line 39
        echo "
                                    ";
        // line 40
        if (is_pengajar()) {
            // line 41
            echo "                                    <li>";
            echo anchor("login/pp", "Profil & Akun Login");
            echo "</li>
                                    ";
        }
        // line 43
        echo "
                                    ";
        // line 44
        if (is_siswa()) {
            // line 45
            echo "                                    <li>";
            echo anchor("login/pp", "Profil & Akun Login");
            echo "</li>
                                    ";
        }
        // line 47
        echo "
                                    <li><a href=\"";
        // line 48
        echo twig_escape_filter($this->env, site_url(("login/login_log/" . get_sess_data("login", "id"))), "html", null, true);
        echo "\">Login log</a></li>
                                    <li><a href=\"";
        // line 49
        echo twig_escape_filter($this->env, site_url("login/logout"), "html", null, true);
        echo "\">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>

        <!-- /navbar -->
        <div class=\"wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"span3 visible-desktop\">
                        <div class=\"sidebar\">
                            ";
        // line 66
        $this->env->loadTemplate("sidebar-menu.html")->display($context);
        // line 67
        echo "                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class=\"span9 mobile-12\">
                        <div class=\"content\">
                            ";
        // line 73
        if ((pass_siswa_equal_nis() == true)) {
            // line 74
            echo "                                ";
            echo get_alert("warning", ("Dimohon untuk segera mengganti password anda untuk alasan keamanan. " . anchor("login/pp?show=edit-password", "Ganti Password")));
            echo "
                            ";
        }
        // line 76
        echo "
                            ";
        // line 77
        $this->displayBlock('content', $context, $blocks);
        // line 78
        echo "                        </div>
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class=\"footer\">
            <div class=\"container\">
                <center>
                    <b class=\"copyright\">";
        // line 89
        echo (isset($context["copyright"]) ? $context["copyright"] : null);
        echo " </b> All rights reserved.
                </center>
            </div>
        </div>

        ";
        // line 94
        $this->env->loadTemplate("layout-footer.html")->display($context);
        // line 95
        echo "        ";
        $this->displayBlock('js', $context, $blocks);
        // line 96
        echo "
    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true);
    }

    // line 6
    public function block_css($context, array $blocks = array())
    {
    }

    // line 77
    public function block_content($context, array $blocks = array())
    {
    }

    // line 95
    public function block_js($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout-private.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 95,  205 => 6,  199 => 4,  192 => 96,  189 => 95,  187 => 94,  179 => 89,  166 => 78,  164 => 77,  161 => 76,  155 => 74,  153 => 73,  145 => 67,  143 => 66,  123 => 49,  119 => 48,  116 => 47,  110 => 45,  108 => 44,  105 => 43,  99 => 41,  97 => 40,  94 => 39,  88 => 37,  86 => 36,  79 => 32,  58 => 20,  52 => 17,  48 => 16,  37 => 7,  34 => 6,  32 => 5,  23 => 1,  374 => 190,  362 => 180,  353 => 177,  350 => 176,  346 => 175,  336 => 167,  324 => 163,  320 => 161,  316 => 160,  308 => 154,  296 => 150,  292 => 148,  288 => 147,  280 => 141,  272 => 136,  266 => 132,  263 => 131,  260 => 130,  258 => 129,  255 => 128,  242 => 117,  233 => 114,  230 => 113,  226 => 112,  218 => 106,  210 => 77,  204 => 97,  201 => 96,  198 => 95,  196 => 94,  193 => 93,  181 => 83,  172 => 80,  169 => 79,  165 => 78,  152 => 68,  148 => 67,  142 => 64,  138 => 63,  132 => 60,  128 => 59,  122 => 56,  118 => 55,  114 => 53,  102 => 44,  91 => 36,  80 => 28,  73 => 29,  70 => 28,  68 => 27,  62 => 17,  56 => 15,  54 => 14,  50 => 13,  45 => 11,  39 => 10,  31 => 4,  28 => 4,);
    }
}
