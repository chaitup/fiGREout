<?php
/*  AbyssGuard v1.7.7 
	Copyright: Julian Stoev
	Website and contacts: http://www.abyss-arts.co.uk/php/abyssguard-php-anti-spam-script/
	License: GPL3
	This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

///////////// CONFIGURATION /////////////

// Enable protection
// possible valies: true or false
$agactive = true;
 
// Project Honey Pot key, register at http://www.projecthoneypot.org/?rf=115387 for free to get one
// possible values: "" or "yourkeyhere"
$httpblkey = "eiejgxctnwli"; 

// Set to true to enable headers check
// possible values: true or false
$checkheaders = true;

// Checks for common hack and spam techniques.
// possible values: true or false
$commonhacks = true;

// Add IP addresses to the whitelist
// Top priority for the whitelist, the IPs inside won't be checked for anything
// possible values: array(); or array("127.0.0.1"); or array("127.0.0.1", "127.0.0.2");
$ipwhitelist = array("127.0.0.1");

// Add IP addresses to the blacklist
// Next to priority after the whitelist
// possible values: array(); or array("127.0.0.1"); or array("127.0.0.1", "127.0.0.2");
$ipblacklist = array();

// Ban for 1 hour with cookie to prevent writting the same messages in the log and further activity from the same user.
// This wouldn't matter for many offenders as they don't accept cookies
// possible values: true or false
$forbidbad = true;

// Change the cookiename with some random symbols between the quotation marks to make your "safe cookie" unique and harder to fake
// examples: "mycookie9327" or "042jgkdsf09234" or "rk9(%@KF_" ...
$cookiename = "abyssguard";

// Log the events?
// possible values: true or false
$logging = true;
// If logging is set to true, specify the path to the abyssguard folder ending with a slash "/"
// example: $logfile = "/path/to/abyssguardfolder/";
$logfile = "";

// If you want to protect the statistics with password, enter one bellow. Leave it blank for no password.
$password = "123";

// In order to prevent huge log file you can set maximum allowed lines. 
// The oldest record will be deleted upon writting a new one. Set to 0 to disable maximum lines at your own risk.
$maxloglines = 1000;

// Forbidden message served for the blocked visitors
// Page title, default: 403 Forbidden
$forbiddentitle = "403 Forbidden";
// Display message, default: <h1>Forbidden</h1><p>You don't have access to this page</p>
// Try to preserve the h1 and p tags
$forbiddentxt = "<h1>Forbidden</h1><p>You don't have access to this page</p>";


///////////// ADVANCED CONFIGURATION, DO NOT TOUCH UNLESS YOU KNOW WHAT YOU ARE DOING /////////////

// Legitimate browser user agents to match for certaing checks. Case sensitive!
$browsers = array("Firefox", "Chrome", "Opera", "Presto", "Safari", "MSIE ");

// Legitimate robots to be exempt from certain checks. Case sensitive!
$robots = array("Google" => array("Googlebot", "Google-Site-Verification", "http://www.google.com/bot.html"), 
				"Yahoo!" => array("Yahoo! Slurp", "http://help.yahoo.com/help/us/ysearch/slurp"), 
				"Bing" => array("bingbot", "http://www.bing.com/bingbot.htm"), 
				"MSN" => array("msnbot", "http://search.msn.com/msnbot.htm")
				);

// Blacklisted user agents of known bad bots, the user agent must start with one of the following names. Case sensitive!
$badagents1 = array("Java 1.", "Java/1.", "Mozilla/4.0(", "xpymep.exe", "Jakarta Commons", "Missigua Locator", 
					"Wells Search II", "Microsoft URL Control - 6.00.8862", "Microsoft URL Control - 6.01.9782", 
					"Wget", "ZmEu", "Mozilla/0", "Mozilla/3.0", "Python-urllib", "MSIE9", "myass",
					"Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.5) Gecko/2008120122 Firefox/3.0.5");

// Blacklisted user agents of known bad bots, the name can be matched anywhere in the user agent. Case sensitive!
$badagents2 = array("Windows 98", "Windows 95", "Windows 3.", "Windows NT 5.0)", "Windows NT 5.1;)", "DTS Agent", "compatible ; MSIE", 
					"unspecified.mail", "Indy Library", "MSIE 5.", "MSIE 4.", "compatible; news bot", 
					"jabse.com", "Mail.RU", "MJ12bot", "libwww-", "; Mozilla/", "Digital AlphaServer",
					"Add Catalog/", "href=", "src=", "<", "eval(", "compatible; ICS", "ISC Systems");

// Common hacks. Ban these requests. Case sensitive!
// In case you are using public hosting with working yourdomain.com/phpmyadmin you might want to remove this entrie from the list
$hackreq = array("/config.pp", "/configure.", "/configuration.", "/setup.", "phpmyadmin", "blackhat", 
				"url_include", "url_fopen", "auto_prepend_file", "input_file", "safe_mode", "resultLink", 
				"/pingserver", "eval(", "base64_", "/allaccounts/", "GLOBALS", "REQUEST", "path=", 
				"///index.", "index.php?option=com_user&view=reset&layout=confirm", "+++", 
				"+Result:+", "\'", "\"", "`", "UNION ", "SELECT ", "DELETE ",
				"UPDATE ", "ALTER TABLE", "DROP TABLE", "DROP DATABASE", " or ", "+OR+", "+AND+", "..",
				"<", ">", "CONCAT", "null", ".ini", " ", "://", "&_", "?nn_qp=", "errors.php?error=",
				"Config_absolute_path");


// Header Accept exempt. Exempt the following UA strings from header Accept check. Case sensitive!
$acceptexempt = array('W3C_Validator', 'crawler', 'spider', 'Feedfetcher-Google');

// httpBL settings
// the last record from this IP must be not older than X days
// default value 15
$httbllastactivity = 15;
// read more about threat score here: http://www.projecthoneypot.org/threat_info.php
// default value 10
$httblthreatscore = 10;
?>