<?php namespace ChinoVN\BBCode\Custom;

use Flarum\Extend;
use s9e\TextFormatter\Configurator;

return [
    (new Extend\Frontend('forum'))
  	->css(__DIR__.'/less/forum.less'),
    (new Extend\Formatter)
    ->configure(function (Configurator $config) {
        
    	$config->BBCodes->addCustom('[FAC={TEXT}]{IDENTIFIER}[/FAC]', '<i class="fas fa-{IDENTIFIER} fa-{TEXT}"></i>');
		
    	$config->BBCodes->addCustom('[BR]', '<div class="cb-line-break"></div>');
  	  $config->BBCodes->addCustom('[SP]', '&nbsp;');
	 
	    $config->BBCodes->addCustom('[HL]{TEXT1}[/HL]', '<mark class="cb-mark">{TEXT1}</mark>');
    	$config->BBCodes->addCustom('[HLC={COLOR1}]{TEXT2}[/HLC]', '<mark style="background: {COLOR1} !important;">{TEXT2}</mark>');
		
    	$config->BBCodes->addCustom('[BC={COLOR2}]{ANYTHING1}[/BC]', '<div style="background: {COLOR2} !important; padding: 10px;">{ANYTHING1}</div>');
	    $config->BBCodes->addCustom('[SH]{ANYTHING2}[/SH]', '<div class="cb-box-shadow">{ANYTHING2}</div>');
		
    	$config->BBCodes->addCustom('[COLUMNS]{ANYTHING3}[/COLUMNS]', '<div class="cb-columns">{ANYTHING3}</div>');	    
   	  $config->BBCodes->addCustom('[FIGURE]{ANYTHING4}[/FIGURE]', '<figure class="cb-figure">{ANYTHING4}</figure>');
	    
	    $config->BBCodes->addCustom('[NSFW]{ANYTHING5}[/NSFW]', 
                                  '<div class="cb-nsfw-alert">
                                    <i class="fas fa-exclamation-triangle" style="color:red"></i> 
                                    <b>Cảnh báo:</b> Nội dung dưới đây có thể gây khó chịu với một số người. Cân nhắc trước khi nhấp vào để xem.
                                   </div>
                                   <div class="cb-nsfw-blur" onclick="if(this.className == \'cb-nsfw-blur\'){this.className = \'cb-nsfw-show\';} else {this.className = \'cb-nsfw-blur\';}">{ANYTHING5}</div>'
                                 );
	    $config->BBCodes->addCustom('[ACCORDION={NUMBER} {TEXT3}]{ANYTHING6}[/ACCORDION]', 
	    
	      '<div class="cb-tab">
		      <input type="checkbox" id="cb-tab-{NUMBER}">
		      <label class="cb-tab-label" for="cb-tab-{NUMBER}">{TEXT3}</label>
		      <div class="cb-tab-content">{ANYTHING6}</div>
	      </div>
	      ');
    
      $config->BBCodes->addCustom('[MAP]{TEXT}[/MAP]', '<iframe   width="100%" height="400px" style="border:0" loading="lazy"   allowfullscreen referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/place?key=xxx&q={TEXT}"></iframe>');
      
      $config->BBCodes->addCustom('[IMGH={URL} p={TEXT}]{ANYTHING}[/IMGH]', '<div class="infoimg"><img src="{URL}"><div class="infoimg-text {TEXT}">{ANYTHING}</div></div>');
        
      
        
        
    })
];
