<div class="col-md-2 hidden-sm-down" id="_desktop_logo">
	<a href="{$urls.base_url}">
		{if $an_logo_view_type == 'svg' && $an_logo_img}
			<img  width="auto" height="auto"
			class="logo img-responsive" src="{$an_logo_img}" alt="{$shop.name}">
		{else}
			<img  width="auto" height="auto"
			class="logo img-responsive" src="{$shop.logo}" alt="{$shop.name}">
		{/if}
	</a>
</div>