<?php  if (!empty($MetaTitle)): ?><title><?php echo $MetaTitle ?></title><?php endif; ?>
<?php  if (!empty($MetaDescription)): ?><meta name="description" content="<?php echo $MetaDescription ?>" /><?php endif; ?>
<?php  if (!empty($CanonicalUrl)): ?><link rel="canonical" href="<?php echo $CanonicalUrl ?>" /><?php endif; ?>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
<meta name="REVISIT-AFTER" CONTENT="7 days" />
<meta name="ROBOTS" CONTENT="follow,index" />
	<?php // Social Media Open Graph Tags ?>
<meta property="og:type" content="website" />
<?php  if (!empty($MetaTitle)): ?><meta property="og:title" content="<?php echo $MetaTitle ?>" /><?php endif; ?>
<?php  if (!empty($CanonicalUrl)): ?><meta property="og:url" content="<?php echo $CanonicalUrl ?>" /><?php endif; ?>
<?php  if (!empty($MetaDescription)): ?><meta property="og:description" content="<?php echo $MetaDescription ?>" /><?php endif; ?>
<?php // <meta property="og:site_name" content="SITE NAME" /> ?>
<?php  if (!empty($ThumbnailPath)): ?><meta property="og:image" content="<?php echo $ThumbnailPath ?>" /><?php endif; ?>
	<?php // Twitter Card ?>
<meta name="twitter:card" content="summary_large_image" />
<?php  if (!empty($MetaTitle)): ?><meta name="twitter:title" content="<?php echo $MetaTitle ?>" /><?php endif; ?>
<?php  if (!empty($MetaDescription)): ?><meta name="twitter:description" content="<?php echo $MetaDescription ?>" /><?php endif; ?>
<?php  if (!empty($ThumbnailPath)): ?><meta name="twitter:image:src" content="<?php echo $ThumbnailPath ?>" /><?php endif; ?>
<?php // <meta name="twitter:site" content="@publisher_handle" /> ?>
<?php // <meta name="twitter:creator" content="@author_handle" /> ?>
	<?php // Google+ ?>
<?php  if (!empty($MetaTitle)): ?><meta itemprop="name" content="<?php echo $MetaTitle ?>" /><?php endif; ?>
<?php  if (!empty($MetaDescription)): ?><meta itemprop="description" content="<?php echo $MetaDescription ?>" /><?php endif; ?>
<?php  if (!empty($ThumbnailPath)): ?><meta itemprop="image" content="<?php echo $ThumbnailPath ?>" /><?php endif; ?>
<?php // Schema.org markup for Google+ Google Authorship and Publisher Markup 
// <link rel="author" href="https://plus.google.com/[Google+_Profile]/posts"/>
// <link rel="publisher" href="https://plus.google.com/[Google+_Page_Profile]"/> */ ?>

<?php // Prevent iOS Standalone Mode Web Apps From Opening Links in Safari ?>
<meta name="apple-mobile-web-app-capable" content="yes" />
<script>if("standalone"in window.navigator&&window.navigator.standalone){var noddy,remotes=false;document.addEventListener("click",function(e){noddy=e.target;while(noddy.nodeName!=="A"&&noddy.nodeName!=="HTML"){noddy=noddy.parentNode}if("href"in noddy&&noddy.href.indexOf("http")!==-1&&(noddy.href.indexOf(document.location.host)!==-1||remotes)){e.preventDefault();document.location.href=noddy.href}},false)}</script>