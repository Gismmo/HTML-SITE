</div><?php // end .#mc ?>
</div><?php // end .page-wrap ?>
<div class="mc">
    <div id="footer">
        <div class="footer-container">
            <section class="row footer-content">
                <article class="eight columns">
                    Footer Area 1
                </article>
                <article class="four columns align-right">
                    Footer Area 2
                </article> 
            </section>
            <section class="row">
                <article class="five columns footer-copyright">
                    <p>&copy; <?php  echo date('Y')?> Site Name</p>
                </article>
                <article class="seven columns footer-sign-in align-right">
                    <p><a href="http://www.knibbs.co.uk/" target="_blank">Designed by Knibbs</a></p>
                </article>
            </section>
        </div>
    </div><?php // end #footer ?>
</div><?php // end .mc ?>
</div><?php // end .knibbs-inner ?>
</div><?php // end .knibbs-outer ?>
<?php // Load Bottom javascript files asynchronously ?>
<script>
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src='http://cdnjs.cloudflare.com/ajax/libs/hammer.js/1.0.5/hammer.min.js';s.parentNode.insertBefore(g,s)}(document,'script'));
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src='<?=$this->getThemePath()?>/js/plugin/jquery.flexmenu.js';s.parentNode.insertBefore(g,s)}(document,'script'));
(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.src='<?=$this->getThemePath()?>/js/main.js';s.parentNode.insertBefore(g,s)}(document,'script'));</script>
<!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
chromium.org/developers/how-tos/chrome-frame-getting-started -->
<!--[if lt IE 7 ]>
<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->