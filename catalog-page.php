<?php
/**
 * Template name: Catalog page
 */

get_header();
?>
    <main class="catalog">
        <div class="catalog__breadcrumbs">
        <?php woocommerce_breadcrumb(); ?>
        </div>
        <div class="catalog__title">
            Уход за лицом
        </div>
        <div class="catalog__filters">
            <div class="catalog__filters-left">
                <div class="dropdown">
                    <span>Сортировать по</span>
                    <div class="dropdown-content">
                        <div class="item">Цена: убывание</div>
                        <div class="item">Цена: возрастание</div>
                        <div class="item">Название: А-Я</div>
                        <div class="item">Название: Я-А</div>
                    </div>
                </div>
            </div>
            <div class="catalog__filters-right"></div>
        </div>
    </main>
<?php
get_footer();
?>