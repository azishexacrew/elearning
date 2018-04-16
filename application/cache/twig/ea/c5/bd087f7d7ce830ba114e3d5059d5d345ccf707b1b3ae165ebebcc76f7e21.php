<?php

/* welcome.html */
class __TwigTemplate_eac5bd087f7d7ce830ba114e3d5059d5d345ccf707b1b3ae165ebebcc76f7e21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("layout-private.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout-private.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"btn-controls\">
    <div id=\"show-urgent-info\"></div>

    <div class=\"btn-box-row row-fluid\">
        <div class=\"span12\">
            <div class=\"well well-small well-box\">
                <small class=\"pull-right hidden-phone hidden-tablet\">";
        // line 10
        echo twig_escape_filter($this->env, tgl_indo(date("Y-m-d")), "html", null, true);
        echo ", IP anda: ";
        echo twig_escape_filter($this->env, get_ip(), "html", null, true);
        echo "</small>
                Selamat datang di <b>e-Learning ";
        // line 11
        echo twig_escape_filter($this->env, get_pengaturan("nama-sekolah", "value"), "html", null, true);
        echo "</b>
                <br>
                <i class=\"icon icon-map-marker\"></i> Alamat: ";
        // line 13
        echo twig_escape_filter($this->env, get_pengaturan("alamat", "value"), "html", null, true);
        echo "
                ";
        // line 14
        if ((!twig_test_empty(get_pengaturan("telp", "value")))) {
            // line 15
            echo "                <i class=\"icon icon-phone\"></i> Telpon: ";
            echo twig_escape_filter($this->env, get_pengaturan("telp", "value"), "html", null, true);
            echo "
                ";
        }
        // line 17
        echo "            </div>
        </div>
    </div>

    ";
        // line 21
        if (is_admin()) {
            // line 22
            echo "    ";
            if (((isset($context["count_mapel_kelas"]) ? $context["count_mapel_kelas"] : null) == 0)) {
                // line 23
                echo "    <div class=\"well well-large well-box\" style=\"border:2px solid #29b7d3;\">
        <b><i class=\"icon-wrench\"></i> Atur data berikut supaya aplikasi e-Learning dapat berjalan dengan baik:</b>
        <table class=\"table table-hover\" style=\"margin-top:10px;\">
            <tr>
                <td width=\"30%\">
                    <a href=\"";
                // line 28
                echo twig_escape_filter($this->env, site_url("mapel"), "html", null, true);
                echo "\"><b><i class=\"menu-icon icon-book\"></i> Manajemen Matapelajaran</b></a>
                </td>
                <td>
                    Input semua Matapelajaran yang ada di sekolah
                </td>
            </tr>
            <tr>
                <td width=\"30%\">
                    <a href=\"";
                // line 36
                echo twig_escape_filter($this->env, site_url("kelas"), "html", null, true);
                echo "\"><b><i class=\"menu-icon icon-tasks\"></i> Manajemen Kelas</b></a>
                </td>
                <td>
                    Input semua Kelas yang ada di sekolah
                </td>
            </tr>
            <tr>
                <td width=\"30%\">
                    <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, site_url("kelas/mapel_kelas"), "html", null, true);
                echo "\"><b><i class=\"menu-icon icon-paste\"></i> Matapelajaran Kelas</b></a>
                </td>
                <td>
                    Atur Matapelajaran pada tiap-tiap Kelas
                </td>
            </tr>
        </table>
    </div>
    ";
            }
            // line 53
            echo "
    <div class=\"btn-box-row row-fluid\">
        <a href=\"";
            // line 55
            echo twig_escape_filter($this->env, site_url("siswa/index/1"), "html", null, true);
            echo "\" class=\"btn-box big span3\">
            <i class=\"icon-group\"></i><b>";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["jml_siswa"]) ? $context["jml_siswa"] : null), "html", null, true);
            echo "</b>
            <p class=\"text-muted\">Siswa</p>
        </a>
        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, site_url("pengajar/index/1"), "html", null, true);
            echo "\" class=\"btn-box big span3\">
            <i class=\"icon-user\"></i><b>";
            // line 60
            echo twig_escape_filter($this->env, (isset($context["jml_pengajar"]) ? $context["jml_pengajar"] : null), "html", null, true);
            echo "</b>
            <p class=\"text-muted\">Pengajar</p>
        </a>
        <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, site_url("siswa/index/0"), "html", null, true);
            echo "\" class=\"btn-box big span3\">
            <i class=\"icon-group\"></i><b>";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["jml_siswa_pending"]) ? $context["jml_siswa_pending"] : null), "html", null, true);
            echo "</b>
            <p class=\"text-muted\">Pending siswa</p>
        </a>
        <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, site_url("pengajar/index/0"), "html", null, true);
            echo "\" class=\"btn-box big span3\">
            <i class=\"icon-user\"></i><b>";
            // line 68
            echo twig_escape_filter($this->env, (isset($context["jml_pengajar_pending"]) ? $context["jml_pengajar_pending"] : null), "html", null, true);
            echo "</b>
            <p class=\"text-muted\">Pending pengajar</p>
        </a>
    </div>

    <div class=\"btn-box-row row-fluid\">
        <div class=\"span12\">
            <div class=\"well well-small well-box\">
                <b><i class=\"icon-bullhorn\"></i> Pengumuman</b>
                <table class=\"table table-striped table-condensed\">
                    ";
            // line 78
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pengumuman"]) ? $context["pengumuman"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 79
                echo "                    <tr>
                        <td>";
                // line 80
                echo anchor(("pengumuman/detail/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul"));
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                </table>
            </div>

            <div class=\"well well-small well-box\">
                <b><i class=\"icon-signin\"></i> Riwayat login pengguna</b>
                <div id=\"show-last-login-list\"></div>
            </div>
        </div>
    </div>
    ";
        }
        // line 93
        echo "
    ";
        // line 94
        if (is_pengajar()) {
            // line 95
            echo "    ";
            $context["peraturan"] = get_pengaturan("peraturan-elearning", "value");
            // line 96
            echo "    ";
            if ((!twig_test_empty((isset($context["peraturan"]) ? $context["peraturan"] : null)))) {
                // line 97
                echo "    <div class=\"btn-box-row row-fluid\">
         <div class=\"span12\">
            <div class=\"well well-small well-box\">
                <b>Peraturan e-learning : </b><br>
                ";
                // line 101
                echo (isset($context["peraturan"]) ? $context["peraturan"] : null);
                echo "
            </div>
         </div>
    </div>
    ";
            }
            // line 106
            echo "
    <div class=\"btn-box-row row-fluid\">
        <div class=\"span6\">
            <div class=\"well well-small well-box\">
                <b><i class=\"icon-bullhorn\"></i> Pengumuman</b>
                <table class=\"table table-striped table-condensed\">
                    ";
            // line 112
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pengumuman"]) ? $context["pengumuman"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 113
                echo "                    <tr>
                        <td>";
                // line 114
                echo anchor(("pengumuman/detail/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul"));
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                </table>
            </div>
        </div>
        <div class=\"span6\">
            <div class=\"well well-small well-box\">
                <b><i class=\"icon-signin\"></i> Riwayat login pengguna</b>
                <div id=\"show-last-login-list\"></div>
            </div>
        </div>
    </div>
    ";
        }
        // line 128
        echo "
    ";
        // line 129
        if (is_siswa()) {
            // line 130
            echo "    ";
            $context["peraturan"] = get_pengaturan("peraturan-elearning", "value");
            // line 131
            echo "    ";
            if ((!twig_test_empty((isset($context["peraturan"]) ? $context["peraturan"] : null)))) {
                // line 132
                echo "    <div class=\"btn-box-row row-fluid\">
         <div class=\"span12\">
            <div class=\"well well-small well-box\">
                <b>Peraturan e-learning : </b><br>
                ";
                // line 136
                echo (isset($context["peraturan"]) ? $context["peraturan"] : null);
                echo "
            </div>
         </div>
    </div>
    ";
            }
            // line 141
            echo "
    <div class=\"btn-box-row row-fluid\">
        <div class=\"span6\">
            <div class=\"well well-small well-box\">
                <b><i class=\"icon-tasks\"></i> Tugas terbaru</b>
                <table class=\"table table-striped table-condensed\">
                    ";
            // line 147
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tugas_terbaru"]) ? $context["tugas_terbaru"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 148
                echo "                    <tr>
                        <td>
                            <a href=\"";
                // line 150
                echo twig_escape_filter($this->env, site_url(("tugas?judul=" . urlencode($this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                echo "</a>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "                </table>
            </div>

            <div class=\"well well-small well-box\">
                <b><i class=\"icon-book\"></i> Materi terbaru</b>
                <table class=\"table table-striped table-condensed\">
                    ";
            // line 160
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["materi_terbaru"]) ? $context["materi_terbaru"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 161
                echo "                    <tr>
                        <td>
                            <a href=\"";
                // line 163
                echo twig_escape_filter($this->env, site_url(("materi/detail/" . $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "id"))), "html", null, true);
                echo "\" target=\"_tab\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["m"]) ? $context["m"] : null), "judul"), "html", null, true);
                echo "</a>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "                </table>
            </div>
        </div>

        <div class=\"span6\">
            <div class=\"well well-small well-box\">
                <b><i class=\"icon-bullhorn\"></i> Pengumuman</b>
                <table class=\"table table-striped table-condensed\">
                    ";
            // line 175
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pengumuman"]) ? $context["pengumuman"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 176
                echo "                    <tr>
                        <td>";
                // line 177
                echo anchor(("pengumuman/detail/" . $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "id")), $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "judul"));
                echo "</td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "                </table>
            </div>

            <div class=\"well well-small well-box\">
                <b><i class=\"icon-signin\"></i> Riwayat login pengguna</b>
                <div id=\"show-last-login-list\"></div>
            </div>
        </div>
    </div>
    ";
        }
        // line 190
        echo "
</div>
<!--/#btn-controls-->
";
    }

    public function getTemplateName()
    {
        return "welcome.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 190,  362 => 180,  353 => 177,  350 => 176,  346 => 175,  336 => 167,  324 => 163,  320 => 161,  316 => 160,  308 => 154,  296 => 150,  292 => 148,  288 => 147,  280 => 141,  272 => 136,  266 => 132,  263 => 131,  260 => 130,  258 => 129,  255 => 128,  242 => 117,  233 => 114,  230 => 113,  226 => 112,  218 => 106,  210 => 101,  204 => 97,  201 => 96,  198 => 95,  196 => 94,  193 => 93,  181 => 83,  172 => 80,  169 => 79,  165 => 78,  152 => 68,  148 => 67,  142 => 64,  138 => 63,  132 => 60,  128 => 59,  122 => 56,  118 => 55,  114 => 53,  102 => 44,  91 => 36,  80 => 28,  73 => 23,  70 => 22,  68 => 21,  62 => 17,  56 => 15,  54 => 14,  50 => 13,  45 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
