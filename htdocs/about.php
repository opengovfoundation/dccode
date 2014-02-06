<?php

/**
 * The "About" page, explaining this State Decoded website.
 *
 * PHP version 5
 *
 * @license		http://www.gnu.org/licenses/gpl.html GPL 3
 * @version		0.8
 * @link		http://www.statedecoded.com/
 * @since		0.1
 *
 */

/*
 * Create a container for our content.
 */
$content = new Content();

/*
 * Define some page elements.
 */
$content->set('browser_title', 'About');
$content->set('page_title', 'About');

$body = '<h2>Introduction</h2>
<p>
	<a href="http://dcdecoded.org">DCDecoded.org</a> is a non-profit,
non-governmental, non-partisan implementation of <a
href="http://www.statedecoded.com/">The State Decoded</a> brought to you
by the folks at the <a href="http://opengovfoundation.org/">OpenGov
Foundation</a>. It is part of a broader initiative to bring the law - the most
important information in any community - to the people in more accessible,
modern formats that can be used and reused. <a
href="http://dcdecoded.org">DCDecoded.org</a> provides a platform to
display Windy City legal information in a friendly, accessible, modern
fashion. It is a part of the <a href="http://americadecoded/">America Decoded</a>
network of legal code sites.
</p>

<h2>Beta Testing</h2>
<p>
	<a href="http://dcdecoded.org">DCDecoded.org</a> is currently in
public beta, which is to say that the site is under active development, with
known shortcomings, but it has reached a point where it would benefit from
being used by the general public (who one hopes will likewise benefit from
it). While every effort is made to ensure that the data provided on <a
href="http://dcdecoded.org">DCDecoded.org</a> is accurate and
up-to-date, it would be gravely unwise to rely on it for any matter of
importance while it is in this beta testing phase.
</p>
<p>
	Many more features are under development, including city council
legislation, regulations, calculations of the importance of given laws,
inclusion of city attorney&rsquo;s opinions, court rulings, extensive
explanatory text, social media integration, significant navigation
enhancements, a vastly expanded built-in glossary of legal terms, scholarly
article citations, and much more.
</p>

<h2>Data Sources</h2>
<p>
	The data that powers <a
href="http://dcdecoded.org">DCDecoded.org</a> is also
<a href="http://dccouncil.us/UnofficialDCCode">available from
the DC Council\'s Office</a>.  The official code is maintained by the District of Columbia
and should be the primary reference for any legal questions. Even then, it is
always good to consult with a lawyer when interpreting the law.
</p>
<p>
	The data is translated into the State Decoded format using a
	<a href="https://github.com/JoshData/dc-code-prototype-tools">parser</a>
	provided by <a href="http://razor.occams.info/">Joshua Tauberer</a>.
</p>
<p>
	An <a href="https://github.com/openlawdc/dc-decoded">alternative parser</a> is
	made available by the OpenLawDC organization, and the results can be viewed at
	<a href="http://dccode.org/">dccode.org</a>.
</p>

<h2>API</h2>
<p>
	The site has a RESTful, JSON-based API. <a
href="/downloads/">Register for an API key</a> and <a
href="https://github.com/statedecoded/statedecoded/wiki/API-Documentation">
read the documentation</a> for details.
</p>

<h2>Thanks</h2>
<p>
<a href="http://dcdecoded.org">DCDecoded.org</a> wouldn\'t be
possible without the contributions and years of work by <a
href="http://waldo.jaquith.org/">Waldo Jaquith</a>, and the many dozens of
people who participated in 18 months of private alpha and beta testing of <a
href="http://vacode.org/about/">Virginia Decoded</a> - the first <a
href="http://www.statedecoded.com/">Decoded</a> site - beginning in 2010.
The platform on which this site is based, <a
href="http://www.statedecoded.com/">The State Decoded</a>, was expanded to
function beyond Virginia thanks to a generous grant by the <a
href="http://knightfoundation.org/">John S. and James L. Knight
Foundation.</a> Special thanks to the awesome people working in DC,
both inside and outside of government, to produce and maintain the laws of the
city and open up government to citizens.  You know who you are.
</p>

<h2>Colophon</h2>
<p>
	Hosted on <a href="http://www.centos.org/">CentOS</a>, driven by <a
href="http://httpd.apache.org/">Apache</a>, <a
href="http://www.mysql.com/">MySQL</a>, and <a
href="http://www.php.net/">PHP</a>. Hosting by Rackspace. Search by <a
href="http://lucene.apache.org/solr/">Solr</a>. Comments by <a
href="http://disqus.com/">Disqus</a>.
</p>

<h2>Disclaimer</h2>
<p>
	This is not the official copy of the DC Code and should not
be relied upon for legal or any other official purposes.  The <a
href="http://opengovfoundation.org/">OpenGov Foundation</a> offers open
law data with no warranty as to accuracy or completeness.
</p>
';

$sidebar = '';

/*
 * Put the shorthand $body variable into its proper place.
 */
$content->set('body', $body);
unset($body);

/*
 * Put the shorthand $sidebar variable into its proper place.
 */
$content->set('sidebar', $sidebar);
unset($sidebar);

/*
 * Add the custom classes to the body.
 */
$content->set('body_class', 'law inside');


/*
 * Fire up our templating engine.
 */
$template = Template::create();

/*
 * Parse the template, which is a shortcut for a few steps that culminate in sending the content
 * to the browser.
 */
$template->parse($content);
