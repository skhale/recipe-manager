<?php
namespace app\helpers;

class AppHelper
{
	public static function textToHtml($text, $lineBreaks = true, $xml = true) {
		$text = str_replace(['<p>', '</p>', '<br>', '<br />'], '', $text);

		if ($lineBreaks) {
			$text = preg_replace(["/([\n]{2,})/i", "/([^>])\n([^<])/i"], ["</p>\n<p>", '$1<br' . ($xml == true ? ' /' : '') . '>$2'], trim($text));
		} else {
			$text = preg_replace(
				["/([\n]{2,})/i", "/([\r\n]{3,})/i","/([^>])\n([^<])/i"],
				["</p>\n<p>", "</p>\n<p>", '$1<br' . ($xml == true ? ' /' : '') . '>$2'],
				trim($text));
		}

		return '<p>' . $text . '</p>';
	}
}