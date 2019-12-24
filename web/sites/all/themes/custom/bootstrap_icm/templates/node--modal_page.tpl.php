<div class="floater">
  <h4 class="block-title">On this page:</h4>
    <ul class="navigation">
    <?php
    // Modal page sidebar links, markup provided by mw_modal_links module
      $link_count=0;
      foreach($content['field_text_group']['#items'] as $item) {
      $index=$item['value'];
      if ($content['field_text_group'][$link_count]['entity']['field_collection_item'][$index]['field_section_title'][0]['#markup']) {
      print render($content['field_text_group'][$link_count]['entity']['field_collection_item'][$index]['field_section_title'][0]['#linktext']);
      }
      $link_count++;
      }
    ?>
    	<li><a href="#top">Back to top</a></li>
    </ul>
</div>


<article id="node-1" class="node node-modal-page clearfix" about="/about_us" typeof="foaf:Document">
<div>
	
	<?php print render($content['field_description']); ?>

  	<?php print render($content['field_image']); ?>

    <?php
      // Modal page section title and text, anchor tag markup provided by mw_modal_links module
      $text_count=0;
      foreach($content['field_text_group']['#items'] as $item) {
      $index=$item['value'];
      if ($content['field_text_group'][$text_count]['entity']['field_collection_item'][$index]['field_section_title'][0]['#markup']) {
      print render ($content['field_text_group'][$text_count]['entity']['field_collection_item'][$index]['field_section_title'][0]['#markup']);
        }
      print render($content['field_text_group'][$text_count]['entity']['field_collection_item'][$index]['field_section_text'][0]['#markup']);
      $text_count++;
        }
    ?>
</div>
</article>

