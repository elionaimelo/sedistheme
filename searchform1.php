<div class="custom-search">
    <form method="GET" class="search-form" action="<?php echo home_url('/'); ?>" role="search" novalidate="">
        <input required="" value="<?php echo get_search_query(); ?>" name="s" title="Pesquisa" placeholder="Pesquisar" class="form-control tt-input" id="pesquisar-customizado" autocomplete="off" spellcheck="false" dir="auto" type="text">
        <button class="search-btn" type="submit"><span aria-hidden="true" class="icon_search"></span></button>
    </form>
</div>