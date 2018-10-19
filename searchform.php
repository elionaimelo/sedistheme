<form method="GET" class="search-form" action="<?php echo esc_url(home_url('/') . 'index.php/' . pll_current_language() . '/'); ?>" role="search" novalidate="">
    <div class="input-group pesquisar-input">
    <input required="" value="<?php echo get_search_query(); ?>" name="s" title="Pesquisa" placeholder="<?php pll_e('Pesquisar'); ?>" class="form-control" type="text">
        <div class="input-group-append">
            <div class="input-group-text"><i class="icon icon_search"></i></div>
        </div>
    </div>
</form>
