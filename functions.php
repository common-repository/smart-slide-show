<?php
function sss_get_def_settings()
{
	$sss_settings = array('bannerHeight' => '350',
			'bannerWidth' => '670',
			'backgroundColor' => '#ffffff',
			'wmode' => 'transparent',
			'roundCorner' => 0,
			'autoPlayTime' => 8,
			'isHeightQuality' => 'no',
			'transDuration' => 1,
			'windowOpen' => '_self',
			'btnSetMargin' => 'auto 5 5 auto',
			'titleBgColor' => '000000',
			'titleTextColor' => 'ffffff',
			'titleBgAlpha' => '.4',
			'titleMoveDuration' => 1,
			'changImageMode' => 'click',
			'isShowBtn' => 'yes',
			'randomorder' => 'false',
			'scaleMode' => 'noScale',
			'transform' => 'blur',
			'isShowAbout' => 'no',
			'titleFontSize' => 14,
			'isShowTitle' => 'yes',
			'buttonStartcolor'=> 'FE3B32',
			'buttonEndcolor'=> 'CC2922',
			'buttonTextcolor'=> 'FFFFFF',
			'buttonHoverStartcolor'=> 'd4271f',
			'buttonHoverEndcolor'=> 'ac211b',
			'buttonHoverTextcolor'=> 'FFFFFF',
			'buttonShape'=> '1',
			'showAutoPlay'=> 'true',
			'AutoPlay'=> 'true',
			'autoPlayButtonX'=> '50',
			'autoPlayButtonY'=> '150',
			'buttonSize'=> '30'
			);
	return $sss_settings;
}
function __get_sss_xml_settings()
{
	//(($ops['auto_play'] == 'yes') ? 'true' : 'false')
	//SSS_PLUGIN_URL.'/price_images/'.$ops['pricebtn_img']
	$ops = get_option('sss_settings', array());
	$blendMode	= 'normal';
	$titleFont = '';
	$isHeightQuality = ($ops['isHeightQuality'] == "yes") ? 'true' : 'false';
	$isShowBtn = ($ops['isShowBtn'] == "yes") ? 'true' : 'false';
	$isShowTitle = ($ops['isShowTitle'] == "yes") ? 'true' : 'false';
	$randomorder = ($ops['randomorder'] == "yes") ? 'true' : 'false';	
	$isShowAbout = ($ops['isShowAbout'] == "yes") ? 'true' : 'false';
	
	$xml_settings = '	<roundCorner>'.$ops['roundCorner'].'</roundCorner>
		<autoPlayTime>'.$ops['autoPlayTime'].'</autoPlayTime>
		<isHeightQuality>'.$isHeightQuality.'</isHeightQuality>
		<blendMode>'.$blendMode.'</blendMode>
		<transDuration>'.$ops['transDuration'].'</transDuration>
		<windowOpen>'.$ops['windowOpen'].'</windowOpen>
		<btnSetMargin>'.$ops['btnSetMargin'].'</btnSetMargin>
		<titleBgColor>0x'.$ops['titleBgColor'].'</titleBgColor>
		<titleTextColor>0x'.$ops['titleTextColor'].'</titleTextColor>
		<titleBgAlpha>'.$ops['titleBgAlpha'].'</titleBgAlpha>
		<titleMoveDuration>'.$ops['titleMoveDuration'].'</titleMoveDuration>	
		<changImageMode>'.$ops['changImageMode'].'</changImageMode>
		<isShowBtn>'.$isShowBtn.'</isShowBtn>
		<isShowTitle>'.$isShowTitle.'</isShowTitle>
		<randomOrder>'.$ops['randomorder'].'</randomOrder>
		<scaleMode>'.$ops['scaleMode'].'</scaleMode>
		<transform>'.$ops['transform'].'</transform>
		<isShowAbout>'.$isShowAbout.'</isShowAbout>
		<titleFont>'.$titleFont.'</titleFont>
		<titleFontSize>'.$ops['titleFontSize'].'</titleFontSize>
			<controls>
	<fontSize>12</fontSize>
	<type>'.$ops['buttonShape'].'</type>
	<arrow_type>2</arrow_type>
	<size>'.$ops['buttonSize'].'</size>
	<howManyVisible>10</howManyVisible>
	<btnDistance>5</btnDistance>

	<normalState>
		<color1>0x'.$ops['buttonStartcolor'].'</color1>
		<color2>0x'.$ops['buttonEndcolor'].'</color2>
		<textColor>0x'.$ops['buttonTextcolor'].'</textColor>
	</normalState>

	<overState>
		<color1>0x'.$ops['buttonHoverStartcolor'].'</color1>
		<color2>0x'.$ops['buttonHoverEndcolor'].'</color2>
		<textColor>0x'.$ops['buttonHoverTextcolor'].'</textColor>
	</overState>

	<focusState>
		<color1>0x'.$ops['buttonHoverStartcolor'].'</color1>
		<color2>0x'.$ops['buttonHoverEndcolor'].'</color2>
		<textColor>0x'.$ops['buttonHoverTextcolor'].'</textColor>
	</focusState>

	<shadowColor>0x000000</shadowColor>
</controls>
		
<playPauseBtn>
	<autoPlay>'.$ops['AutoPlay'].'</autoPlay>
	<x>'.$ops['autoPlayButtonX'].'</x>
	<y>'.$ops['autoPlayButtonY'].'</y>
	<size>'.$ops['buttonSize'].'</size>
	<show>'.$ops['showAutoPlay'].'</show>
	<backgroundColor>0x000000</backgroundColor>
	<backgroundAlpha>0.5</backgroundAlpha>
	<overColor>0xe7ebee</overColor>			
	<iconNormal>
		<color1>0x'.$ops['buttonStartcolor'].'</color1>
		<color2>0x'.$ops['buttonEndcolor'].'</color2>
	</iconNormal>
	<iconOver>
		<color1>0x'.$ops['buttonHoverStartcolor'].'</color1>
		<color2>0x'.$ops['buttonHoverEndcolor'].'</color2>
	</iconOver>
</playPauseBtn>'
		
		;
	return $xml_settings;
}
function sss_get_album_dir($album_id)
{
	global $gsss;
	$album_dir = SSS_PLUGIN_UPLOADS_DIR . "/{$album_id}_uploadfolder";
	return $album_dir;
}
/**
 * Get album url
 * @param $album_id
 * @return unknown_type
 */
function sss_get_album_url($album_id)
{
	global $gsss;
	$album_url = SSS_PLUGIN_UPLOADS_URL . "/{$album_id}_uploadfolder";
	return $album_url;
}
function sss_get_table_actions(array $tasks)
{
	?>
	<div class="bulk_actions">
		<form action="" method="post" class="bulk_form">Bulk action
			<select name="task">
				<?php foreach($tasks as $t => $label): ?>
				<option value="<?php print $t; ?>"><?php print $label; ?></option>
				<?php endforeach; ?>
			</select>
			<button class="button-secondary do_bulk_actions" type="submit">Do</button>
		</form>
	</div>
	<?php 
}
function shortcode_display_sss_gallery($atts)
{
	$vars = shortcode_atts( array(
									'cats' => '',
									'imgs' => '',
								), 
							$atts );
	//extract( $vars );
	
	$ret = display_sss_gallery($vars);
	return $ret;
}
function display_sss_gallery($vars)
{
	global $wpdb, $gsss;
	$ops = get_option('sss_settings', array());
	//print_r($ops);
	$albums = null;
	$images = null;
	$cids = trim($vars['cats']);
	if (strlen($cids) != strspn($cids, "0123456789,")) {
		$cids = '';
		$vars['cats'] = '';
	}
	$imgs = trim($vars['imgs']);
	if (strlen($imgs) != strspn($imgs, "0123456789,")) {
		$imgs = '';
		$vars['imgs'] = '';
	}
	$categories = '';
	$xml_filename = '';
	if( !empty($cids) && $cids{strlen($cids)-1} == ',')
	{
		$cids = substr($cids, 0, -1);
	}
	if( !empty($imgs) && $imgs{strlen($imgs)-1} == ',')
	{
		$imgs = substr($imgs, 0, -1);
	}
	//check for xml file
	if( !empty($vars['cats']) )
	{
		$xml_filename = "cat_".str_replace(',', '', $cids) . '.xml';	
	}
	elseif( !empty($vars['imgs']))
	{
		$xml_filename = "image_".str_replace(',', '', $imgs) . '.xml';
	}
	else
	{
		$xml_filename = "sss_all.xml";
	}
	//die(SSS_PLUGIN_XML_DIR . '/' . $xml_filename);


	
	if( !empty($vars['cats']) )
	{
		$query = "SELECT * FROM {$wpdb->prefix}sss_albums WHERE album_id IN($cids) AND status = 1 ORDER BY `order` ASC";
		//print $query;
		$albums = $wpdb->get_results($query, ARRAY_A);
		foreach($albums as $key => $album)
		{
			$images = $gsss->sss_get_album_images($album['album_id']);
			if ($images && !empty($images) && is_array($images)) {
			$album_dir = sss_get_album_url($album['album_id']);//SSS_PLUGIN_UPLOADS_URL . '/' . $album['album_id']."_".$album['name'];
			foreach($images as $key => $img)
			{
				if( $img['status'] == 0 ) continue;
				$categories .= '
				<item>
					<link>' . $img['link'] . '</link>';
				if (false === strpos($img['image'], '://')) {
					$categories .= '
					<image>' . trim(str_replace(" ","-",$album_dir)."/big/".$img['image']).'</image>' ;
				}else{
					$categories .= '
					<image>' . trim($img['image']).'</image>' ;
				}
				$categories .= '
					<title>' . trim($img['description']) . '</title>
				</item>';
			}
			}
		}
		//$xml_filename = "cat_".str_replace(',', '', $cids) . '.xml';
	}
	elseif( !empty($vars['imgs']))
	{
		$query = "SELECT * FROM {$wpdb->prefix}sss_images WHERE image_id IN($imgs) AND status = 1 ORDER BY `order` ASC";
		$images = $wpdb->get_results($query, ARRAY_A);
		if ($images && !empty($images) && is_array($images)) {
		foreach($images as $key => $img)
		{
			$album = $gsss->sss_get_album($img['category_id']);
			$album_dir = sss_get_album_url($album['album_id']);//SSS_PLUGIN_UPLOADS_URL . '/' . $album['album_id']."_".$album['name'];

			if( $img['status'] == 0 ) continue;
			$categories .= '
				<item>
					<link>' . $img['link'] . '</link>';
				if (false === strpos($img['image'], '://')) {
					$categories .= '
					<image>' . trim(str_replace(" ","-",$album_dir)."/big/".$img['image']).'</image>' ;
				}else{
					$categories .= '
					<image>' . trim($img['image']).'</image>' ;
				}
				$categories .= '
					<title>' . trim($img['description']) . '</title>
				</item>';
		}
		}
	}
	//no values paremeters setted
	else//( empty($vars['cats']) && empty($vars['imgs']))
	{
		$query = "SELECT * FROM {$wpdb->prefix}sss_albums WHERE status = 1 ORDER BY `order` ASC";
		$albums = $wpdb->get_results($query, ARRAY_A);
		foreach($albums as $key => $album)
		{
			$images = $gsss->sss_get_album_images($album['album_id']);
			$album_dir = sss_get_album_url($album['album_id']);//SSS_PLUGIN_UPLOADS_URL . '/' . $album['album_id']."_".$album['name'];
			if ($images && !empty($images) && is_array($images)) {
			foreach($images as $key => $img)
			{
				if($img['status'] == 0 ) continue;
				$categories .= '
				<item>
					<link>' . $img['link'] . '</link>';
				if (false === strpos($img['image'], '://')) {
					$categories .= '
					<image>' . trim(str_replace(" ","-",$album_dir)."/big/".$img['image']).'</image>' ;
				}else{
					$categories .= '
					<image>' . trim($img['image']).'</image>' ;
				}
				$categories .= '
					<title>' . trim($img['description']) . '</title>
				</item>';
			}
			}
		}
		//$xml_filename = "sss_all.xml";
	}
	
	$xml_tpl = __get_sss_xml_template();
	$settings = __get_sss_xml_settings();
	$xml = str_replace(array('{settings}', '{categories}'), 
						array($settings, $categories), $xml_tpl);
	//write new xml file
	$fh = fopen(SSS_PLUGIN_XML_DIR . '/' . $xml_filename, 'w+');
	fwrite($fh, $xml);
	fclose($fh);
	//print "<h3>Generated filename: $xml_filename</h3>";
	//print $xml;
	if( file_exists(SSS_PLUGIN_XML_DIR . '/' . $xml_filename ) )
	{
		$fh = fopen(SSS_PLUGIN_XML_DIR . '/' . $xml_filename, 'r');
		$xml = fread($fh, filesize(SSS_PLUGIN_XML_DIR . '/' . $xml_filename));
		fclose($fh);
		//print "<h3>Getting xml file from cache: $xml_filename</h3>";
		$ret_str = "
		<script language=\"javascript\">AC_FL_RunContent = 0;</script>
<script src=\"".SSS_PLUGIN_URL."/js/AC_RunActiveContent.js\" language=\"javascript\"></script>

		<script language=\"javascript\"> 
	if (AC_FL_RunContent == 0) {
		alert(\"This page requires AC_RunActiveContent.js.\");
	} else {
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0',
			'width', '".$ops['bannerWidth']."',
			'height', '".$ops['bannerHeight']."',
			'src', '".SSS_PLUGIN_URL."/js/wp_smartslideshow',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'showall',
			'wmode', '".$ops['wmode']."',
			'devicefont', 'false',
			'id', 'xmlswf_vmsss',
			'bgcolor', '".$ops['backgroundColor']."',
			'name', 'xmlswf_vmsss',
			'menu', 'true',
			'allowFullScreen', 'true',
			'allowScriptAccess','sameDomain',
			'movie', '".SSS_PLUGIN_URL."/js/wp_smartslideshow',
			'salign', '',
			'flashVars','url=".SSS_PLUGIN_URL."/xml/$xml_filename'
			); //end AC code
	}
</script>
";
//echo SSS_PLUGIN_UPLOADS_URL."<hr>";
//		print $xml;
		return $ret_str;
	}
	return true;
}
function __get_sss_xml_template()
{
	$xml_tpl = '<?xml version="1.0" encoding="utf-8"?>
<data>
	<channel>{categories}
	</channel>
	<config>
	{settings}
	</config>
</data>';
	return $xml_tpl;
}
?>