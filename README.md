<h1>Language Switcher</h1>

<p>A <strong>responsive language switcher</strong> built with <strong>CodeIgniter</strong>, allowing users to toggle between multiple languages on a website. Ideal for multilingual websites, this component uses <strong>HTML</strong>, <strong>PHP</strong>, and <strong>Bootstrap</strong> for a seamless and user-friendly experience.</p>

<hr>

<h2>Installation & Configuration</h2>

<h3>1. Autoload Session Library</h3>
<p>Open: <code>application/config/autoload.php</code></p>
<pre><code>$autoload['libraries'] = array('session');</code></pre>

<h3>2. Enable Language and Hooks</h3>
<p>Open: <code>application/config/config.php</code></p>
<pre><code>$config['language'] = 'English';
$config['enable_hooks'] = TRUE;</code></pre>

<h3>3. Add Language Switcher Dropdown to View</h3>
<p>In your view file, add the following dropdown code:</p>
<pre><code>&lt;li class="nav-item navbar-light dropdown"&gt;
  &lt;a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"&gt;
    &lt;?=$this-&gt;lang-&gt;line('language_title')?&gt;
  &lt;/a&gt;
  &lt;div class="dropdown-menu" aria-labelledby="navbarDropdown"&gt;
    &lt;a class="dropdown-item" href="&lt;?=base_url()?&gt;lan_switch/English"&gt;English&lt;/a&gt;
    &lt;a class="dropdown-item" href="&lt;?=base_url()?&gt;lan_switch/Sinhala"&gt;සිංහල&lt;/a&gt;
  &lt;/div&gt;
&lt;/li&gt;</code></pre>

<h3>4. Add Route for Language Switcher</h3>
<p>Open: <code>application/config/routes.php</code></p>
<pre><code>$route['lan_switch/(:any)'] = 'Language_switcher/switcher/$1';</code></pre>

<h3>5. Create Language Switcher Controller</h3>
<p>Create a file: <code>application/controllers/Language_switcher.php</code></p>
<pre><code>&lt;?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language_switcher extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function switcher($language) {
        $this-&gt;session-&gt;set_userdata('language', $language);
        redirect($_SERVER['HTTP_REFERER']);
    }
}</code></pre>

<h3>6. Enable Hook for Language Loader</h3>
<p>Open: <code>application/config/hooks.php</code></p>
<pre><code>$hook['post_controller_constructor'] = array(
    'class'    =&gt; 'Language_hooks',
    'function' =&gt; 'lang_loader',
    'filename' =&gt; 'Language_hooks.php',
    'filepath' =&gt; 'hooks'
);</code></pre>

<h3>7. Create Language Hook File</h3>
<p>Create a file: <code>application/hooks/Language_hooks.php</code></p>
<pre><code>&lt;?php
class Language_hooks {

    function lang_loader() {
        $ci =& get_instance();
        $ci-&gt;load-&gt;helper('language');
        $language = $ci-&gt;session-&gt;userdata('language');

        if ($language) {
            $ci-&gt;lang-&gt;load('information', $language);
        } else {
            $ci-&gt;lang-&gt;load('information', 'English');
        }
    }
}</code></pre>

<h3>8. Create Language Files</h3>
<p>Create the following folders:</p>
<ul>
  <li><code>application/language/English/</code></li>
  <li><code>application/language/Sinhala/</code></li>
</ul>

<p>Inside each, create: <code>information_lang.php</code></p>

<p>Example for <strong>English</strong>:</p>
<pre><code>&lt;?php
$lang['language_title'] = 'English';</code></pre>

<p>Example for <strong>Sinhala</strong>:</p>
<pre><code>&lt;?php
$lang['language_title'] = 'සිංහල';</code></pre>

<p>Use in views:</p>
<pre><code>&lt;?=$this-&gt;lang-&gt;line('language_title')?&gt;</code></pre>
