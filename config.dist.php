<?php

/*  
    Copyright 2009 Abdul Ibad (loopxcrack[at]yahoo.co.uk)
    http://ibad.bebasbelanja.com

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

$rge_config['dbhost'] = "localhost";
$rge_config['dbuser'] = "";
$rge_config['dbpass'] = "";
$rge_config['dbbase'] = "rssgoemail";

$rge_config['email']  = "email_blogging@domain.tld";
$rge_config['cachedir'] = dirname(__FILE__)."/cache";
$rge_config['cachetime'] = "86400";

$rge_config['readmore'] = "Read More";

// Add more URL(s) here.
$rge_config['feedurls'] = array(
	'http://example.tld/feed',
	'http://subdomain.example.tld/feed'
);
?>