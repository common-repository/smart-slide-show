<?php
global $wpdb, $gsss;
$ops = get_option('sss_settings', array());
//$ops = array_merge($sss_settings, $ops);
?>
<div class="wrap">
	<h2><?php _e('Create XML File'); ?></h2>
	<form action="" method="post">
		<input type="hidden" name="task" value="save_sss_settings" />
		<table>
		<tr>
			<td><?php _e('SlideShow Height'); ?></td>
			<td><input type="text" name="settings[bannerHeight]" value="<?php print  @$ops['bannerHeight']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Slideshow Width'); ?></td>
			<td><input type="text" name="settings[bannerWidth]" value="<?php print @$ops['bannerWidth']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Slideshow Background color'); ?></td>
			<td>
				<input type="text" name="settings[backgroundColor]" class="color {hash:false,caps:true}" value="<?php print @$ops['backgroundColor']; ?>" />
			</td>
		</tr>
		<tr>
			<td><?php _e('Slideshow window mode'); ?></td>
			<td>
				<select name="settings[wmode]">
					<option value="opaque" <?php print (@$ops['wmode'] == 'opaque') ? 'selected' : ''; ?>><?php _e('Opaque'); ?></option>
					<option value="transparent" <?php print (@$ops['wmode'] == 'transparent') ? 'selected' : ''; ?>><?php _e('Transparent'); ?></option>
					<option value="window" <?php print (@$ops['wmode'] == 'window') ? 'selected' : ''; ?>><?php _e('window'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('0,1,2,3...,10(most often used),11...'); ?>"><?php _e('Slideshow Round Corner'); ?></td>
			<td><input type="text" name="settings[roundCorner]" value="<?php print @$ops['roundCorner']; ?>" /></td>
		</tr>

		<tr>
			<td><?php _e('Slideshow Height Quality'); ?></td>
			<td>
				<select name="settings[isHeightQuality]">
					<option value="true" <?php print (@$ops['isHeightQuality'] == 'true') ? 'selected' : ''; ?>><?php _e('yes'); ?></option>
					<option value="false" <?php print (@$ops['isHeightQuality'] == 'false') ? 'selected' : ''; ?>><?php _e('no'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Slideshow Transition Duration'); ?></td>
			<td><input type="text" name="settings[transDuration]" value="<?php print @$ops['transDuration']; ?>" /></td>
		</tr>
		<tr>
			<td title="<?php _e('Window Open Target parameter'); ?>" ><?php _e('Target'); ?></td>
			<td>
				<select name="settings[windowOpen]">
					<option value="_self" <?php print (@$ops['windowOpen'] == '_self') ? 'selected' : ''; ?>><?php _e('_self'); ?></option>
					<option value="_blank" <?php print (@$ops['windowOpen'] == '_blank') ? 'selected' : ''; ?>><?php _e('_blank'); ?></option>
					<option value="_parent" <?php print (@$ops['windowOpen'] == '_parent') ? 'selected' : ''; ?>><?php _e('_parent'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Button Set Margin'); ?></td>
			<td><input type="text" name="settings[btnSetMargin]" value="<?php print @$ops['btnSetMargin']; ?>" /></td>
		</tr>

		<tr>
			<td><?php _e('Title Background Color'); ?></td>
			<td><input type="text" name="settings[titleBgColor]" class="color {hash:false,caps:true}" value="<?php print @$ops['titleBgColor']; ?>" /></td>
		</tr>
		
		<tr>
			<td><?php _e('Title Text Color'); ?></td>
			<td>
				<input type="text" name="settings[titleTextColor]" class="color {hash:false,caps:true}" value="<?php print @$ops['titleTextColor']; ?>" />
			</td>
		</tr>
		<tr>
			<td><?php _e('Title Background Alpha'); ?></td>
			<td><input type="text" name="settings[titleBgAlpha]" value="<?php print @$ops['titleBgAlpha']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Title Move Duration'); ?></td>
			<td><input type="text" name="settings[titleMoveDuration]" value="<?php print @$ops['titleMoveDuration']; ?>" /></td>
		</tr>
		
		<tr>
			<td><?php _e('Change Image Mode'); ?></td>
			<td>
				<select name="settings[changImageMode]">
					<option value="click" <?php print (@$ops['changImageMode'] == 'click') ? 'selected' : ''; ?>><?php _e('click'); ?></option>
					<option value="hover" <?php print (@$ops['changImageMode'] == 'hover') ? 'selected' : ''; ?>><?php _e('hover'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Show Button'); ?></td>
			<td>
				<select name="settings[isShowBtn]">
					<option value="yes" <?php print (@$ops['isShowBtn'] == 'yes') ? 'selected' : ''; ?>><?php _e('yes'); ?></option>
					<option value="no" <?php print (@$ops['isShowBtn'] == 'no') ? 'selected' : ''; ?>><?php _e('no'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td title="<?php _e('Show slides randomly. Show Button setting should be NO for this'); ?>" ><?php _e('Random Order'); ?></td>
			<td>
				<select name="settings[randomorder]">
					<option value="true" <?php print (@$ops['randomorder'] == 'true') ? 'selected' : ''; ?>><?php _e('yes'); ?></option>
					<option value="false" <?php print (@$ops['randomorder'] == 'false') ? 'selected' : ''; ?>><?php _e('no'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Scale Mode'); ?></td>
			<td>
				<select name="settings[scaleMode]">
					<option value="showAll" <?php print (@$ops['scaleMode'] == 'showAll') ? 'selected' : ''; ?>><?php _e('showAll'); ?></option>
					<option value="exactFit" <?php print (@$ops['scaleMode'] == 'exactFit') ? 'selected' : ''; ?>><?php _e('exactFit'); ?></option>
					<option value="noScale" <?php print (@$ops['scaleMode'] == 'noScale') ? 'selected' : ''; ?>><?php _e('noScale'); ?></option>
					<option value="noBorder" <?php print (@$ops['scaleMode'] == 'noBorder') ? 'selected' : ''; ?>><?php _e('noBorder'); ?></option>
				</select>
			</td>
		</tr>		
		<tr>
			<td><?php _e('Transform'); ?></td>
			<td>
				<select name="settings[transform]">
	<option value="blur" <?php print (@$ops['transform'] == 'blur') ? 'selected' : ''; ?>><?php _e('blur'); ?></option>
	<option value="alpha" <?php print (@$ops['transform'] == 'alpha') ? 'selected' : ''; ?>><?php _e('alpha'); ?></option>
	<option value="left" <?php print (@$ops['transform'] == 'left') ? 'selected' : ''; ?>><?php _e('left'); ?></option>
	<option value="right" <?php print (@$ops['transform'] == 'right') ? 'selected' : ''; ?>><?php _e('right'); ?></option>
	<option value="top" <?php print (@$ops['transform'] == 'top') ? 'selected' : ''; ?>><?php _e('top'); ?></option>
	<option value="bottom" <?php print (@$ops['transform'] == 'bottom') ? 'selected' : ''; ?>><?php _e('bottom'); ?></option>
	<option value="breathe" <?php print (@$ops['transform'] == 'breathe') ? 'selected' : ''; ?>><?php _e('breathe'); ?></option>
	<option value="breathBlur" <?php print (@$ops['transform'] == 'breathBlur') ? 'selected' : ''; ?>><?php _e('breathBlur'); ?></option>
	<option value="barsConverge" <?php print (@$ops['transform'] == 'barsConverge') ? 'selected' : ''; ?>><?php _e('barsConverge'); ?></option>
	<option value="blindsUp" <?php print (@$ops['transform'] == 'blindsUp') ? 'selected' : ''; ?>><?php _e('blindsUp'); ?></option>
	<option value="barsFlip" <?php print (@$ops['transform'] == 'barsFlip') ? 'selected' : ''; ?>><?php _e('barsFlip'); ?></option>
	<option value="blindsOpen" <?php print (@$ops['transform'] == 'blindsOpen') ? 'selected' : ''; ?>><?php _e('blindsOpen'); ?></option>
	<option value="stripes" <?php print (@$ops['transform'] == 'stripes') ? 'selected' : ''; ?>><?php _e('stripes'); ?></option>
	<option value="iris" <?php print (@$ops['transform'] == 'iris') ? 'selected' : ''; ?>><?php _e('iris'); ?></option>
	<option value="blindsMovingDown" <?php print (@$ops['transform'] == 'blindsMovingDown') ? 'selected' : ''; ?>><?php _e('blindsMovingDown'); ?></option>
	<option value="barsRight" <?php print (@$ops['transform'] == 'barsRight') ? 'selected' : ''; ?>><?php _e('barsRight'); ?></option>
	<option value="squaresFlip" <?php print (@$ops['transform'] == 'squaresFlip') ? 'selected' : ''; ?>><?php _e('squaresFlip'); ?></option>
	<option value="barsWavy" <?php print (@$ops['transform'] == 'barsWavy') ? 'selected' : ''; ?>><?php _e('barsWavy'); ?></option>
	<option value="blendHardLight" <?php print (@$ops['transform'] == 'blendHardLight') ? 'selected' : ''; ?>><?php _e('blendHardLight'); ?></option>
	<option value="blendMultiply" <?php print (@$ops['transform'] == 'blendMultiply') ? 'selected' : ''; ?>><?php _e('blendMultiply'); ?></option>
	<option value="blendDifference" <?php print (@$ops['transform'] == 'blendDifference') ? 'selected' : ''; ?>><?php _e('blendDifference'); ?></option>
	<option value="barsIntersect" <?php print (@$ops['transform'] == 'barsIntersect') ? 'selected' : ''; ?>><?php _e('barsIntersect'); ?></option>
	<option value="squaresLight" <?php print (@$ops['transform'] == 'squaresLight') ? 'selected' : ''; ?>><?php _e('squaresLight'); ?></option>
	<option value="blindsWave" <?php print (@$ops['transform'] == 'blindsWave') ? 'selected' : ''; ?>><?php _e('blindsWave'); ?></option>
	<option value="blendAddative" <?php print (@$ops['transform'] == 'blendAddative') ? 'selected' : ''; ?>><?php _e('blendAddative'); ?></option>
	<option value="squaresScale" <?php print (@$ops['transform'] == 'squaresScale') ? 'selected' : ''; ?>><?php _e('squaresScale'); ?></option>
	<option value="barsLeft" <?php print (@$ops['transform'] == 'barsLeft') ? 'selected' : ''; ?>><?php _e('barsLeft'); ?></option>
	<option value="barsOpen" <?php print (@$ops['transform'] == 'barsOpen') ? 'selected' : ''; ?>><?php _e('barsOpen'); ?></option>
	<option value="blindsConverge" <?php print (@$ops['transform'] == 'blindsConverge') ? 'selected' : ''; ?>><?php _e('blindsConverge'); ?></option>
	<option value="blindsDown" <?php print (@$ops['transform'] == 'blindsDown') ? 'selected' : ''; ?>><?php _e('blindsDown'); ?></option>
	<option value="blindsMovingUp" <?php print (@$ops['transform'] == 'blindsMovingUp') ? 'selected' : ''; ?>><?php _e('blindsMovingUp'); ?></option>
	<option value="philoAlpha" <?php print (@$ops['transform'] == 'philoAlpha') ? 'selected' : ''; ?>><?php _e('philoAlpha'); ?></option>
	<option value="philoBlurSquare" <?php print (@$ops['transform'] == 'philoBlurSquare') ? 'selected' : ''; ?>><?php _e('philoBlurSquare'); ?></option>
	<option value="philoClouds" <?php print (@$ops['transform'] == 'philoClouds') ? 'selected' : ''; ?>><?php _e('philoClouds'); ?></option>
	<option value="philoDisc" <?php print (@$ops['transform'] == 'philoDisc') ? 'selected' : ''; ?>><?php _e('philoDisc'); ?></option>
	<option value="philoFlipHorizontal" <?php print (@$ops['transform'] == 'philoFlipHorizontal') ? 'selected' : ''; ?>><?php _e('philoFlipHorizontal'); ?></option>
	<option value="philoFloatingWaves" <?php print (@$ops['transform'] == 'philoFloatingWaves') ? 'selected' : ''; ?>><?php _e('philoFloatingWaves'); ?></option>
	<option value="philoMultipleFlip" <?php print (@$ops['transform'] == 'philoMultipleFlip') ? 'selected' : ''; ?>><?php _e('philoMultipleFlip'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Show About'); ?></td>
			<td>
				<select name="settings[isShowAbout]">
	<option value="yes" <?php print (@$ops['isShowAbout'] == 'yes') ? 'selected' : ''; ?>><?php _e('yes'); ?></option>
	<option value="no" <?php print (@$ops['isShowAbout'] == 'no') ? 'selected' : ''; ?>><?php _e('no'); ?></option>
				</select>
			</td>
		</tr>
		<tr>
			<td><?php _e('Title font size'); ?></td>
			<td><input type="text" name="settings[titleFontSize]"  value="<?php print @$ops['titleFontSize']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Show Title'); ?></td>
			<td>
				<input type="radio" name="settings[isShowTitle]" value="yes" <?php print (@$ops['isShowTitle'] == 'yes') ? 'checked' : ''; ?>><span><?php _e('Show'); ?></span>
				<input type="radio" name="settings[isShowTitle]" value="no" <?php print (@$ops['isShowTitle'] == 'no') ? 'checked' : ''; ?>><span><?php _e('Hide'); ?></span>
			</td>
		</tr>
		<tr>
			<td><?php _e('Button Shape'); ?></td>
			<td>
				<input type="radio" name="settings[buttonShape]" value="1" <?php print (@$ops['buttonShape'] == '1') ? 'checked' : ''; ?>><span><?php _e('square'); ?></span>
				<input type="radio" name="settings[buttonShape]" value="2" <?php print (@$ops['buttonShape'] == '2') ? 'checked' : ''; ?>><span><?php _e('round'); ?></span>
			</td>
		</tr>
		<tr>
			<td><?php _e('Button size'); ?></td>
			<td><input type="text" name="settings[buttonSize]"  value="<?php print @$ops['buttonSize']; ?>" /></td>
		</tr>
		<tr>
			<td><?php _e('Button start color'); ?></td>
			<td>
				<input type="text" name="settings[buttonStartcolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['buttonStartcolor']; ?>" />
			</td>
		</tr>
		<tr>
			<td><?php _e('Button end color'); ?></td>
			<td>
				<input type="text" name="settings[buttonEndcolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['buttonEndcolor']; ?>" />
			</td>
		</tr>
		<tr>
			<td><?php _e('Button Text color'); ?></td>
			<td>
				<input type="text" name="settings[buttonTextcolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['buttonTextcolor']; ?>" />
			</td>
		</tr>
		<tr>
			<td><?php _e('Button hover start color'); ?></td>
			<td>
				<input type="text" name="settings[buttonHoverStartcolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['buttonHoverStartcolor']; ?>" />
			</td>
		</tr>
		<tr>
			<td><?php _e('Button hover end color'); ?></td>
			<td>
				<input type="text" name="settings[buttonHoverEndcolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['buttonHoverEndcolor']; ?>" />
			</td>
		</tr>
		<tr>
			<td><?php _e('Button hover Text color'); ?></td>
			<td>
				<input type="text" name="settings[buttonHoverTextcolor]" class="color {hash:false,caps:true}" value="<?php print @$ops['buttonHoverTextcolor']; ?>" />
			</td>
		</tr>
		<tr>
			<td><?php _e('Show Auto Play'); ?></td>
			<td>
				<input type="radio" name="settings[showAutoPlay]" value="true" <?php print (@$ops['showAutoPlay'] == 'true') ? 'checked' : ''; ?>><span><?php _e('Show'); ?></span>
				<input type="radio" name="settings[showAutoPlay]" value="false" <?php print (@$ops['showAutoPlay'] == 'false') ? 'checked' : ''; ?>><span><?php _e('Hide'); ?></span>
			</td>
		</tr>
		<tr>
			<td><?php _e('Default auto Play state'); ?></td>
			<td>
				<input type="radio" name="settings[AutoPlay]" value="true" <?php print (@$ops['AutoPlay'] == 'true') ? 'checked' : ''; ?>><span><?php _e('Play'); ?></span>
				<input type="radio" name="settings[AutoPlay]" value="false" <?php print (@$ops['AutoPlay'] == 'false') ? 'checked' : ''; ?>><span><?php _e('Stop'); ?></span>
			</td>
		</tr>
		<tr>
			<td><?php _e('Auto Play Time'); ?></td>
			<td>
				<input type="text" name="settings[autoPlayTime]" value="<?php print @$ops['autoPlayTime']; ?>" />
			</td>
		</tr>
		<tr>
			<td><?php _e('Auto Play Button X position'); ?></td>
			<td>
				<input type="text" name="settings[autoPlayButtonX]" value="<?php print @$ops['autoPlayButtonX']; ?>" />
			</td>
		</tr>

	<tr>
			<td><?php _e('Auto Play Button Y position'); ?></td>
			<td>
				<input type="text" name="settings[autoPlayButtonY]" value="<?php print @$ops['autoPlayButtonY']; ?>" />
			</td>
		</tr>


		</table>
	<p><button type="submit" class="button-primary"><?php _e('Save Config'); ?></button></p>
	</form>
</div>