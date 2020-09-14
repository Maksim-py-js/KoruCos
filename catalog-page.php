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
                <div class="catalog__dropdowns">
                    <div class="catalog__dropdown">
                        <span>Сортировать по</span>
                        <div class="catalog__dropdown-content">
                            <div class="item">Цена: убывание</div>
                            <div class="item">Цена: возрастание</div>
                            <div class="item">Название: А-Я</div>
                            <div class="item">Название: Я-А</div>
                        </div>
                    </div>
                    <div class="catalog__dropdown">
                        <span>Фильтр</span>
                        <div class="catalog__dropdown-content catalog__dropdown-content-right">
                            <div class="sub-dropdown">
                                <span>Цена (руб.):</span>
                                <div    
                                    class='slider-horizontal' 
                                    role='group' 
                                    aria-labelledby='multi-lbl' 
                                    style='        
                                        --min-price: 0;
                                        --max-price: 20000;
                                    '
                                >            
                                    <input 
                                        id='min-price'
                                        type='range'    
                                        min='0'
                                        value='0'
                                        max='25000'
                                    />
                                    <input 
                                        id='max-price'
                                        type='range'    
                                        min='0'
                                        value='20000'
                                        max='25000'
                                    />
                                    <output style='--c: var(--min-price)'></output>            
                                    <output style='--c: var(--max-price)'></output>
                                </div>
                            </div>
                            <div class="sub-dropdown">
                                <span>Производитель:</span>
                                <div class="sub-dropdown-content">
                                    <div class="item">Тестовое наполнение</div>
                                </div>
                                <div class="sub-dropdown-content">
                                    <div class="item">Тестовое наполнение</div>
                                </div>
                                <div class="sub-dropdown-content">
                                    <div class="item">Тестовое наполнение</div>
                                </div>
                            </div>
                            <div class="sub-dropdown">
                                <span>Тип кожи:</span>
                                <div class="sub-dropdown-content">
                                    <div class="item">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        <label for="vehicle1"> Комбинированная</label>
                                    </div>
                                    <div class="item">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        <label for="vehicle1"> Нормальная</label>
                                    </div>
                                    <div class="item">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        <label for="vehicle1"> Чувствительная</label>
                                    </div>
                                    <div class="item">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        <label for="vehicle1"> Сухая</label>
                                    </div>
                                    <div class="item">
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                        <label for="vehicle1"> Жирная</label>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-dropdown">
                                <span>Объём:</span>
                                <div class="sub-dropdown-content">
                                    <div class="item">Тестовое наполнение</div>
                                </div>
                                <div class="sub-dropdown-content">
                                    <div class="item">Тестовое наполнение</div>
                                </div>
                                <div class="sub-dropdown-content">
                                    <div class="item">Тестовое наполнение</div>
                                </div>
                            </div>
                            <div class="sub-dropdown">
                                <span>Тестовое наполнение:</span>
                                <div class="sub-dropdown-content">
                                    <div class="item">Тестовое наполнение</div>
                                </div>
                                <div class="sub-dropdown-content">
                                    <div class="item">Тестовое наполнение</div>
                                </div>
                                <div class="sub-dropdown-content">
                                    <div class="item">Тестовое наполнение</div>
                                </div>
                            </div>
                            <div class="buttons">
                                <div class="button"><button>Показать 10</button></div>
                                <div class="button"><button>Очистить</button></div>  
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="catalog__filters-right">
                <div class="catalog__nav-buttons">
                    <div class="catalog__nav-button-block">
                        <button 
                            id="block-button"
                            class="active"
                            onclick="
                                document.querySelectorAll('.catalog__item').forEach(item => {
                                    item.classList.remove('catalog__row-page-item');
                                }),
                                document.querySelector('#block-button').classList.add('active'),
                                document.querySelector('#row-button').classList.remove('active')
                            "
                        ></button>
                    </div>
                    <div class="catalog__nav-button-row">
                        <button 
                            id="row-button"
                            class=""
                            onclick="
                                document.querySelectorAll('.catalog__item').forEach(item => {
                                    item.classList.add('catalog__row-page-item');
                                }),
                                document.querySelector('#block-button').classList.remove('active'),
                                document.querySelector('#row-button').classList.add('active')
                            "                            
                        ></button>
                    </div>
                </div>
            </div>
        </div>        
        <div class="catalog__main">
            <div class="catalog__items">
                <div id="catalog__row-page-item" class="catalog__item">
                    <div class="catalog__image">
                        <div class="catalog__image-salePercent">10%</div>
                        <div class="catalog__image-label">
                            <div class="catalog__image-labelText red">Sale</div>
                            <div class="catalog__image-labelText blue">New</div>
                        </div>
                        <div class="catalog__itemHover">
                            <button class="catalog__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
                            <button class="catalog__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
                            <button class="catalog__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
                        </div>
                        <img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide2.png" alt="Img">
                    </div>
                    <div class="catalog__description">
                        <div class="catalog__stars">
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                        </div>    
                        <p class="catalog__price">924 р.</p>
                        <strike class="catalog__sale"><span class="catalog__saleText">1555 р.</span></strike>
                        <p class="catalog__about">
                            Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream
                        </p>
                        <ul class="catalog__data">
                            <li>
                                <span class="catalog__dataName">Артикул:</span>
                                <span class="catalog__dataMean">0177/409</span>
                            </li>
                            <li>
                                <span class="catalog__dataName">Бренд:</span>
                                <span class="catalog__dataMean">Anita</span>
                            </li>
                        </ul>   
                        <div class="catalog__comparison">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1">Сравнить</label>
                        </div>
                        <p class="catalog__price-2">924 р.</p>
                        <strike class="catalog__sale-2"><span class="catalog__saleText">1555 р.</span></strike>
                        <div class="catalog__container">
                            <div class="quantity-block">
                                <button class="quantity-arrow-minus"></button>
                                <input class="quantity-num" type="number" value="1" />
                                <button class="quantity-arrow-plus"></button>
                            </div>
                            <div class="addToCart">
                                <button><span>В корзину</span></button>
                            </div>
                        </div>
                    </div>                       
                </div>
                <div id="catalog__row-page-item" class="catalog__item">
                    <div class="catalog__image">
                        <div class="catalog__image-salePercent">10%</div>
                        <div class="catalog__image-label">
                            <div class="catalog__image-labelText red">Sale</div>
                            <div class="catalog__image-labelText blue">New</div>
                        </div>
                        <div class="catalog__itemHover">
                            <button class="catalog__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
                            <button class="catalog__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
                            <button class="catalog__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
                        </div>
                        <img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide2.png" alt="Img">
                    </div>
                    <div class="catalog__description">
                        <div class="catalog__stars">
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                        </div>    
                        <p class="catalog__price">924 р.</p>
                        <strike class="catalog__sale"><span class="catalog__saleText">1555 р.</span></strike>
                        <p class="catalog__about">
                            Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream
                        </p>
                        <ul class="catalog__data">
                            <li>
                                <span class="catalog__dataName">Артикул:</span>
                                <span class="catalog__dataMean">0177/409</span>
                            </li>
                            <li>
                                <span class="catalog__dataName">Бренд:</span>
                                <span class="catalog__dataMean">Anita</span>
                            </li>
                        </ul>   
                        <div class="catalog__comparison">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1">Сравнить</label>
                        </div>
                        <p class="catalog__price-2">924 р.</p>
                        <strike class="catalog__sale-2"><span class="catalog__saleText">1555 р.</span></strike>
                        <div class="catalog__container">
                            <div class="quantity-block">
                                <button class="quantity-arrow-minus"></button>
                                <input class="quantity-num" type="number" value="1" />
                                <button class="quantity-arrow-plus"></button>
                            </div>
                            <div class="addToCart">
                                <button><span>В корзину</span></button>
                            </div>
                        </div>
                    </div>                       
                </div>
                <div id="catalog__row-page-item" class="catalog__item">
                    <div class="catalog__image">
                        <div class="catalog__image-salePercent">10%</div>
                        <div class="catalog__image-label">
                            <div class="catalog__image-labelText red">Sale</div>
                            <div class="catalog__image-labelText blue">New</div>
                        </div>
                        <div class="catalog__itemHover">
                            <button class="catalog__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
                            <button class="catalog__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
                            <button class="catalog__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
                        </div>
                        <img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide2.png" alt="Img">
                    </div>
                    <div class="catalog__description">
                        <div class="catalog__stars">
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                        </div>    
                        <p class="catalog__price">924 р.</p>
                        <strike class="catalog__sale"><span class="catalog__saleText">1555 р.</span></strike>
                        <p class="catalog__about">
                            Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream
                        </p>
                        <ul class="catalog__data">
                            <li>
                                <span class="catalog__dataName">Артикул:</span>
                                <span class="catalog__dataMean">0177/409</span>
                            </li>
                            <li>
                                <span class="catalog__dataName">Бренд:</span>
                                <span class="catalog__dataMean">Anita</span>
                            </li>
                        </ul>   
                        <div class="catalog__comparison">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1">Сравнить</label>
                        </div>
                        <p class="catalog__price-2">924 р.</p>
                        <strike class="catalog__sale-2"><span class="catalog__saleText">1555 р.</span></strike>
                        <div class="catalog__container">
                            <div class="quantity-block">
                                <button class="quantity-arrow-minus"></button>
                                <input class="quantity-num" type="number" value="1" />
                                <button class="quantity-arrow-plus"></button>
                            </div>
                            <div class="addToCart">
                                <button><span>В корзину</span></button>
                            </div>
                        </div>
                    </div>                       
                </div>
                <div id="catalog__row-page-item" class="catalog__item">
                    <div class="catalog__image">
                        <div class="catalog__image-salePercent">10%</div>
                        <div class="catalog__image-label">
                            <div class="catalog__image-labelText red">Sale</div>
                            <div class="catalog__image-labelText blue">New</div>
                        </div>
                        <div class="catalog__itemHover">
                            <button class="catalog__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget.png" alt="img"></button>
                            <button class="catalog__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget2.png" alt="img"></button>
                            <button class="catalog__widget"><img src="<?php bloginfo('template_directory') ?>/assets/img/png/widget3.png" alt="img"></button>
                        </div>
                        <img src="<?php bloginfo('template_directory') ?>/assets/img/png/slide2.png" alt="Img">
                    </div>
                    <div class="catalog__description">
                        <div class="catalog__stars">
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                            <span class="catalog__starIcon">
                                <img src="<?php bloginfo('template_directory') ?>/assets/img/svg/star.svg" alt="Star">
                            </span>	
                        </div>    
                        <p class="catalog__price">924 р.</p>
                        <strike class="catalog__sale"><span class="catalog__saleText">1555 р.</span></strike>
                        <p class="catalog__about">
                            Крем для глаз The Face Shop Calendula Essential Moisture Eye Cream
                        </p>
                        <ul class="catalog__data">
                            <li>
                                <span class="catalog__dataName">Артикул:</span>
                                <span class="catalog__dataMean">0177/409</span>
                            </li>
                            <li>
                                <span class="catalog__dataName">Бренд:</span>
                                <span class="catalog__dataMean">Anita</span>
                            </li>
                        </ul>   
                        <div class="catalog__comparison">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1">Сравнить</label>
                        </div>
                        <p class="catalog__price-2">924 р.</p>
                        <strike class="catalog__sale-2"><span class="catalog__saleText">1555 р.</span></strike>
                        <div class="catalog__container">
                            <div class="quantity-block">
                                <button class="quantity-arrow-minus"></button>
                                <input class="quantity-num" type="number" value="1" />
                                <button class="quantity-arrow-plus"></button>
                            </div>
                            <div class="addToCart">
                                <button><span>В корзину</span></button>
                            </div>
                        </div>
                    </div>                       
                </div>
            </div>
                
            <nav>
                <ul class="catalog__pagination">
                    <li class="page-item arrow"><a class="page-link-arrow" href="#"><</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item page-item-active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                    <li class="page-item arrow"><a class="page-link" href="#">></a></li>
                </ul>
            </nav>
        </div>
    </main>
<?php
get_footer();
?>