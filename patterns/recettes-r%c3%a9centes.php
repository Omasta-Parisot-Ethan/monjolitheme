<?php
/**
 * Title: Recettes Récentes
 * Slug: monjolitheme/recettes-r%c3%a9centes
 * Categories: Posts
 */
?>
<!-- wp:query {"queryId":13,"query":{"perPage":10,"pages":0,"offset":0,"postType":"recette","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"parents":[],"format":[]},"metadata":{"categories":["posts"],"patternName":"core/query-grid-posts","name":"Grid"}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","right":"30px","bottom":"30px","left":"30px"}}},"layout":{"inherit":false}} -->
<div class="wp-block-group" style="padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px"><!-- wp:post-title {"isLink":true} /-->

<!-- wp:post-excerpt /-->

<!-- wp:post-date {"metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->