<?php
/**
 * Title: List of posts in one column.
 * Slug: edublock/query-default
 * Categories: edublock-query
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">

<!-- wp:spacer {"height":"81px"} -->
<div style="height:81px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":4,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":2},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0","right":"0","bottom":"var:preset|spacing|x-small","left":"0"}}},"textColor":"tertiary","fontSize":"max-36"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-small"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--x-small)"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:paragraph {"textColor":"lightgrey"} -->
<p class="has-lightgrey-color has-text-color">•</p>
<!-- /wp:paragraph -->

<!-- wp:post-date /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt /-->

<!-- wp:read-more {"content":"\u003cstrong\u003eRead more →\u003c/strong\u003e","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"white","textColor":"secondary"} /-->

<!-- wp:spacer {"height":"71px"} -->
<div style="height:71px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"fontSize":"medium"} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"81px"} -->
<div style="height:81px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->