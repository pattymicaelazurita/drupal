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

/* themes/custom/custom_theme/templates/layouts/page.html.twig */
class __TwigTemplate_6f70c798c720aab8b596bd2cc0003221 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"main.css\">
        <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"main.scss\">
        
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Raleway:wght@400;700&display=swap\" rel=\"stylesheet\">



<title>Progreso 1 - PZ</title>

        
    </head>
    <body>
        <header>
            <nav class=\"nav\">
                <a href=\"#\" class=\"brand-logo\">
                    <img src=\"images/logo.png\" alt=\"Fylo\">
                </a>
                <ul class=\"nav-items\">
                    <li class=\"nav-link\">
                        <a href=\"#\">Features</a>
                    </li>
                    <li class=\"nav-link\">
                        <a href=\"#\">Team</a>
                    </li>
                    <li class=\"nav-link\">
                        <a href=\"#\">Sign In</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            <section class=\"firstPart\">
                <img src=\"images/illustration_1-01.png\" alt=\"Saving files on a folder\">
                <h2 class=\"headingFirstPart\">All your files in one secure location, accessible anywhere.</h2>
                <p>
                    Fylo stores all your most important files in one secure location. 
                    Access them wherever you need, share and collaborate with friends family, and co-workers.
                </p>
                <a href=\"#\" class=\"cta\">Get Started</a>
            </section>
            <section class=\"secondPart\">
                <div class=\"element\">
                    <img src=\"images/Access.png\" alt=\"Access anywhere icon\" />
                    <h3 class=\"second-title-heading\">Access your files, anywhere</h3>
                    <p>
                      The ability to use a smartphone, tablet, or computer to access your
                      account means your files follow you everywhere
                    </p>
                  </div>
          
                  <div class=\"element\">
                    <img src=\"images/Security.png\" alt=\"Security icon\" />
                    <h3 class=\"second-title-heading\">Security you can trust</h3>
                    <p>
                      2-factor authentication and user-controlled encryption are just a
                      couple of the security features we allow to help secure your files.
                    </p>
                  </div>
          
                  <div class=\"element\">
                    <img
                      src=\"images/RealTime.png\" alt=\"Real-time icon\"
                    />
                    <h3 class=\"second-title-heading\">Real-time collaboration</h3>
                    <p>
                      Securely share files and folders with friends, family and colleagues
                      for live collaboration. No email attachments required.
                    </p>
                  </div>

                  <div class=\"element\">
                    <img src=\"images/Store.png\" alt=\"Files icon\" />
                    <h3 class=\"second-title-heading\">Store any type of file</h3>
                    <p>
                      Whether you're sharing holidays photos or work documents, Fylo has
                      you covered allowing for all types to be securely stored and shared.
                    </p>
                  </div>
            </section>
            <section class=\"thirdPart\">
                <div class=\"img-box\">
                    <img src=\"images/illustration_2-01.png\" alt=\"People get in touch in many places\">
                </div>
                <div class=\"text-box\">
                    <h2>Stay productive, wherever you are</h2>
                        <p>
                            Never let location be an issue when accessing your files. Fylo has
                            covered for all of your file storage needs.
                        </p>
                        <p>
                            Securely share files and folders with friends, family and colleagues
                            for live collaboration. No email attachments required.
                        </p>
                        <a class=\"desc-link\" href=\"#\"
                            ><span>See how Fylo works</span
                            ><img src=\"images/arrow.png\" alt=\"next arrow\"
                        /></a>
                </div>
            </section>
            <section class=\"fourthPart\">
                
            </section>
            
            <section class=\"other\">
                <div class=\"slider-container\">  
                    <div class=\"itemCarrousels\" id=\"itemCarrousel-6\">
                        <p>
                            Fylo has improved our team productivity by an order of magnitude.
                            Since making the switch our team has become a well-oiled
                            collaboration machine.
                          </p>
                          <div class=\"persona\">
                            <img src=\"images/Iva.png\" alt=\"Picture of Iva\"/>
                            <div class=\"descripcion\">
                              <h3>Iva Boyd</h3>
                              <p>Founder & CEO, Huddle</p>
                            </div>
                          </div>
                    </div>
                    <div class=\"itemCarrousels\" id=\"itemCarrousel-4\">
                        <p>
                            Fylo has improved our team productivity by an order of magnitude.
                            Since making the switch our team has become a well-oiled
                            collaboration machine.
                          </p>
                          <div class=\"persona\">
                            <img src=\"images/Satish.png\" alt=\"Picture of Satish\"/>
                            <div class=\"descripcion\">
                              <h3>Satish Patel</h3>
                              <p>Founder & CEO, Huddle</p>
                            </div>
                          </div>
                    </div>
                    <div class=\"itemCarrousels\" id=\"itemCarrousel-5\">
                        <p>
                            Fylo has improved our team productivity by an order of magnitude.
                            Since making the switch our team has become a well-oiled
                            collaboration machine.
                          </p>
                          <div class=\"persona\">
                            <img src=\"images/Bruce.png\" alt=\"Picture of Bruce\"/>
                            <div class=\"descripcion\">
                              <h3>Bruce McKenzie</h3>
                              <p>Founder & CEO, Huddle</p>
                            </div>
                          </div>
                    </div>
                    <div class=\"itemCarrousels\" id=\"itemCarrousel-6\">
                        <p>
                            Fylo has improved our team productivity by an order of magnitude.
                            Since making the switch our team has become a well-oiled
                            collaboration machine.
                          </p>
                          <div class=\"persona\">
                            <img src=\"images/Iva.png\" alt=\"Picture of Iva\"/>
                            <div class=\"descripcion\">
                              <h3>Iva Boyd</h3>
                              <p>Founder & CEO, Huddle</p>
                            </div>
                          </div>
                    </div>
                    <div class=\"itemCarrousels\" id=\"itemCarrousel-4\">
                        <p>
                            Fylo has improved our team productivity by an order of magnitude.
                            Since making the switch our team has become a well-oiled
                            collaboration machine.
                          </p>
                          <div class=\"persona\">
                            <img src=\"images/Satish.png\" alt=\"Picture of Satish\"/>
                            <div class=\"descripcion\">
                              <h3>Satish Patel</h3>
                              <p>Founder & CEO, Huddle</p>
                            </div>
                          </div>
                    </div>
                    <div class=\"itemCarrousels\" id=\"itemCarrousel-5\">
                        <p>
                            Fylo has improved our team productivity by an order of magnitude.
                            Since making the switch our team has become a well-oiled
                            collaboration machine.
                          </p>
                          <div class=\"persona\">
                            <img src=\"images/Bruce.png\" alt=\"Picture of Bruce\"/>
                            <div class=\"descripcion\">
                              <h3>Bruce McKenzie</h3>
                              <p>Founder & CEO, Huddle</p>
                            </div>
                          </div>
                    </div>
                    
                  </div> 
            </section>
            <section class=\"fivePart\">
                <h2>Get early access today</h2>
                <p>
                  It only takes a minute to sign up and our free starter tier is
                  extremely generous. If you have any questions, our support team would
                  be happy to help you
                </p>
                <form>
                  <input type=\"email\" placeholder=\"email@example.com\" />
                  <input class=\"cta\" type=\"submit\" value=\"Get Started For Free\" />
                </form>
            </section>
        </main>
        <footer>
            <div class=\"footer-logo\">
              <img src=\"images/logo.png\" />
            </div>
            <div class=\"footer-location\">
              <img src=\"images/location.png\" /><span
                >Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua</span
              >
            </div>
            <div class=\"footer-contact\">
              <p><img src=\"images/phone.png\" /><span>+1-543-123-4567</span></p>
              <p><img src=\"images/Gmail.png\" /><span>example@fylo.com</span></p>
            </div>
            <div class=\"footer-links\">
              <a href=\"#\">About Us</a>
              <a href=\"#\">Jobs</a>
              <a href=\"#\">Press</a>
              <a href=\"#\">Blog</a>
            </div>
            <div class=\"footer-more-links\">
              <a href=\"#\">Contact Us</a>
              <a href=\"#\">Terms</a>
              <a href=\"#\">Privacy</a>
            </div>
            <div class=\"social-icons\">
              <i class=\"facebook\">
                <img src=\"images/facebook.png\" />
              </i>
              <i class=\"twitter\">
                <img src=\"images/twitter.png\"/>
              </i>
              <i class=\"instagram\">
                <img src=\"images/instagram.png\"/>
              </i>
            </div>
          </footer>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "themes/custom/custom_theme/templates/layouts/page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/custom_theme/templates/layouts/page.html.twig", "C:\\xampp\\htdocs\\drupal10\\drupal10\\themes\\custom\\custom_theme\\templates\\layouts\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
