@extends('layouts.layout')

@section('content')
    <div class="column-wrapper js-sticky-wrapper">

        <div class="content_left js-content_left">
            <div class="page-header page-header_full" id="hub_260">
                <div class="page-header_wrapper">
                    <div class="media-obj media-obj_page-header">
                        <a href="{{route('ru.posts', ['hub' => 'php'])}}" class="media-obj__image">
                            <img
                                src="//habrastorage.org/getpro/habr/hub/98a/7a8/831/98a7a88319d5644cdc627b5e04b47d0f.png"
                                width="48" height="48" class="media-obj__image-pic"/>
                        </a>

                        <div
                            class="media-obj__body media-obj__body_page-header media-obj__body_page-header_hub">
                            <div class="page-header__stats">
                                <div class="page-header__stats-value">110,87</div>
                                <div class="page-header__stats-label">Рейтинг</div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="page-header__info">
                    <h1 class="page-header__info-title">PHP</h1>
                    <span class="n-profiled_hub" title="Профильный хаб"></span>
                    <h2 class="page-header__info-desc">
                        Скриптовый язык общего назначения
                    </h2>
                </div>
            </div>

            <div class="tabs">
                <div class="tabs__level tabs-level_top tabs-menu">
                    <a href="https://habr.com/ru/hub/php/" class="tabs-menu__item tabs-menu__item_link"
                       rel="nofollow">
                        <h3 class="tabs-menu__item-text tabs-menu__item-text_active">
                            Все подряд


                        </h3>
                    </a>
                    <a href="https://habr.com/ru/hub/php/top/" class="tabs-menu__item tabs-menu__item_link"
                       rel="nofollow">
                        <h3 class="tabs-menu__item-text ">
                            Лучшие


                        </h3>
                    </a>
                    <a href="https://habr.com/ru/hub/php/authors/" class="tabs-menu__item tabs-menu__item_link"
                       rel="nofollow">
                        <h3 class="tabs-menu__item-text ">
                            Авторы


                        </h3>
                    </a>
                    <a href="https://habr.com/ru/hub/php/companies/"
                       class="tabs-menu__item tabs-menu__item_link" rel="nofollow">
                        <h3 class="tabs-menu__item-text ">
                            Компании
                        </h3>
                    </a>
                </div>

                <div class="tabs__level tabs__level_bottom">
                    <ul class="toggle-menu ">
                        @foreach($ratings as $rating_item)
                            <li class="toggle-menu__item">
                                <a href="{{route('ru.posts', ['hub' => $hub->title,'rating' => $rating_item != 'all'? 'top'. $rating_item: $rating_item])}}"
                                   class="toggle-menu__item-link {{($rating_item === 'all' && $rating === null)||$rating_item === $rating ? 'toggle-menu__item-link_active' : ''}}"
                                   rel="nofollow"
                                   title="Все публикации в хронологическом порядке"> {{$rating_item != 'all'? '≥'. $rating_item: 'Без порога'}}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="posts_list">
                <ul class="content-list shortcuts_items">
                    @foreach($posts as $post)
                        <li class="content-list__item content-list__item_post shortcuts_item" id="post_530562">

                            <article class="post post_preview" lang="ru">
                                <header class="post__meta">
                                    <a href="{{route('ru.users', ['nickname' => $post->user->nickname])}}"
                                       class="post__user-info user-info"
                                       title="Автор публикации">
                                        <img
                                            src="{{$post->user->avatar}}"
                                            width="24" height="24"
                                            class="user-info__image-pic user-info__image-pic_small">
                                        <span
                                            class="user-info__nickname user-info__nickname_small">{{$post->user->nickname}}</span>
                                    </a>

                                    <span class="post__time">{{get_formated_date($post->created_at)}}</span>

                                </header>

                                <h2 class="post__title">
                                    <a href="{{route('ru.post', ['id' => $post->id])}}"
                                       class="post__title_link">{{$post->title}}</a>
                                </h2>

                                <ul class="post__hubs inline-list">
                                    @foreach($post->hubs as $key => $hub)
                                        <li class="inline-list__item inline-list__item_hub">
                                            <a href="{{route('ru.posts', ['hub' => $hub->title])}}"
                                               class="inline-list__item-link hub-link " rel="nofollow"
                                               title="Вы не подписаны на этот хаб"
                                               onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'feed page', '{{$hub->title}}'); }">{{$hub->title}}</a>{{$key !== count($post->hubs) - 1 ? ',':''}}
                                        </li>
                                    @endforeach
                                </ul>

                                <ul class="post__marks inline-list"></ul>

                                <div class="post__body post__body_crop">

                                    <div class="post__text post__text-html  post__text_v1 ">
                                        <a href="{{route('ru.post', ['id' => $post->id])}}">
                                            <div style="text-align:center;"><img
                                                    src="{{$post->img}}">
                                            </div>
                                        </a><br>
                                        <p>{{$post->description}}</p><br>
                                    </div>

                                    <a class="btn btn_x-large btn_outline_blue post__habracut-btn"
                                       href="{{route('ru.post', ['id' => $post->id])}}">Читать дальше
                                        &rarr;</a>
                                </div>


                                <footer class="post__footer">
                                    <ul class="post-stats  js-user_"
                                        data-post-type="publish_ugc_ru,h_91,h_260,h_477,h_9554,h_18812"
                                        id="infopanel_post_530562">
                                        <li class="post-stats__item">
                                            <div class="post-stats__result">

              <span class="post-stats__result-icon">
                <svg class="icon-svg_votes" width="10" height="16"><use
                        xlink:href="https://habr.com/5fc4fe37/images/common-svg-sprite.svg#counter-rating"/></svg>
              </span>

                                                <span
                                                    class="post-stats__result-counter {{$post->rating > 0 ?'voting-wjt__counter_positive':''}} {{$post->rating < 0 ?'voting-wjt__counter_negative':''}}"
                                                    title="Всего голосов {{$post->rating_sum}}: &uarr;{{$post->rating_up}} и &darr;{{$post->rating_down}}">{{$post->rating > 0 ? '+'.$post->rating:$post->rating}}</span>
                                            </div>
                                        </li>
                                        <li class="post-stats__item post-stats__item_bookmark">
                                            <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                                    data-post-type="publish_ugc_ru,h_91,h_260,h_477,h_9554,h_18812"
                                                    data-type="2" data-id="530562" data-action="add"
                                                    title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                                    onclick="posts_add_to_favorite(this);" disabled>
                                                    <span class="btn_inner"><svg class="icon-svg_bookmark" width="10"
                                                                                 height="16"><use
                                                                xlink:href="https://habr.com/5fc4fe37/images/common-svg-sprite.svg#book"/></svg><span
                                                            class="bookmark__counter js-favs_count"
                                                            title="Количество пользователей, добавивших публикацию в закладки">{{$post->bookmarks}}</span></span>
                                            </button>
                                        </li>

                                        <li class="post-stats__item post-stats__item_views">
                                            <div class="post-stats__views" title="Количество просмотров">
                                                <svg class="icon-svg_views-count" width="21" height="12">
                                                    <use
                                                        xlink:href="https://habr.com/5fc4fe37/images/common-svg-sprite.svg#eye"/>
                                                </svg>
                                                <span
                                                    class="post-stats__views-count">{{get_formated_views($post->views)}}</span>
                                            </div>
                                        </li>

                                        <li class="post-stats__item post-stats__item_comments">
                                            <a href="{{route('ru.post_slug', ['id' => $post->id,'slug' => '#comments'])}}"
                                               class="post-stats__comments-link" rel="nofollow">
                                                <svg class="icon-svg_post-comments" width="16" height="16">
                                                    <use
                                                        xlink:href="https://habr.com/5fc4fe37/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-stats__comments-count"
                                                      title="Читать комментарии">{{$post->comments}}</span>
                                            </a>
                                        </li>


                                    </ul>

                                </footer>
                            </article>


                        </li>
                    @endforeach
                </ul>
                {{$posts->links('vendor.pagination.pagination')}}


            </div>
        </div>
        <div class="sidebar">
            <div class="sidebar_right_ad">
                <!-- /235032688/HH/HH01_ATF_Poster -->
                <div class="dfp-slot dfp-slot_top is_visible">
                    <a href="https://tmtm.ru/services/advertising/" target="_blank" class="dfp-slot__label">Реклама</a>
                    <div class="dfp-slot__placeholder">
                                <span class="dfp-slot__placeholder-text">Ой, у вас баннер убежал!<br/><br/> <a
                                        href="https://u.tmtm.ru/tmtalkadblock" class="btn btn_large btn_blue"
                                        style="display:inline-flex!important;" target="_blank">Ну. И что?</a></span>
                    </div>


                    <div class="dfp-slot__banner" id="div-gpt-hh-atf">
                        <script>
                            window.display_dfp_slot('div-gpt-hh-atf');
                        </script>
                    </div>
                </div>

            </div>
            <div class="sidebar_right js-sidebar_right sidebar_content-area">

                <div class="default-block default-block_sidebar" id="our-partners">
                    <div class="default-block__header">
                        <h3 class="default-block__header-title">Спонсоры сообщества</h3>
                    </div>
                    <div class="default-block__content">
                        <ul class="content-list content-list_partners-block">
                            <li class="content-list__item content-list__item_partners-block">
                                <a href="https://u.tmtm.ru/vtb_sb_2020"
                                   onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'sponsors', 'ВТБ'); }"
                                   rel="nofollow" class="partner-info">
                                    <div class="partner-info__head">
                                        <span class="partner-info__title">ВТБ</span>
                                        <img
                                            src="https://habrastorage.org/getpro/tmtm/pictures/dce/bfe/ca6/dcebfeca67166611a3fe63b567bb1a52.png"
                                            class="partner-info__image">
                                    </div>

                                    <div class="partner-info__description">
                                        Развивает и делает финансовые услуги доступными онлайн.
                                    </div>
                                </a>
                            </li>
                            <li class="content-list__item content-list__item_partners-block">
                                <a href="https://u.tmtm.ru/huawei_sb"
                                   onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'sponsors', 'Huawei'); }"
                                   rel="nofollow" class="partner-info">
                                    <div class="partner-info__head">
                                        <span class="partner-info__title">Huawei</span>
                                        <img
                                            src="https://habrastorage.org/webt/xd/7s/lr/xd7slrn4wx_gpd-ltoqlzhszqlc.png"
                                            class="partner-info__image">
                                    </div>

                                    <div class="partner-info__description">
                                        ИКТ-эксперт. Поставляет умные устройства и строит интеллектуальную
                                        инфраструктуру
                                    </div>
                                </a>
                            </li>
                            <li class="content-list__item content-list__item_partners-block">
                                <a href="https://u.tmtm.ru/avito_sb_20ru"
                                   onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'sponsors', 'Авито'); }"
                                   rel="nofollow" class="partner-info">
                                    <div class="partner-info__head">
                                        <span class="partner-info__title">Авито</span>
                                        <img
                                            src="https://habrastorage.org/getpro/tmtm/pictures/3ee/dd3/e11/3eedd3e1101c841acf64c939da69dbb7.png"
                                            class="partner-info__image">
                                    </div>

                                    <div class="partner-info__description">
                                        Главные по объявлениям в России. Укрощают высокие нагрузки.
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="default-block__footer">
                        <a href="https://habr.com/ru/docs/companies/sponsorship/"
                           class="default-block__footer_link">Как стать спонсором?</a>
                    </div>
                </div>


                <div class="default-block default-block_sidebar" id="hubs-top-users">
                    <div class="default-block__header">
                        <h3 class="default-block__header-title">Вклад авторов</h3>
                    </div>
                    <div class="default-block__content">
                        <ul class="content-list сontent-list_top-users">
                            <li class="content-list__item content-list__item_top-users">
                                <a href="https://habr.com/ru/users/pronskiy/" class="media-obj media-obj_link">
                                    <div class="media-obj__image">
                                        <img
                                            src="//habrastorage.org/getpro/habr/avatars/27f/b99/eb3/27fb99eb3e30e3221c5839e88be02395.jpg"
                                            class="user-pic__img" width="30" height="30"/>
                                    </div>

                                    <div class="media-obj__body">
                                        <div class="rating-info rating-info_top-1">
                                            <span class="rating-info__title">pronskiy</span>
                                            <span class="rating-info__stat">9 034,4</span>
                                        </div>
                                        <div class="rating-info__progress">
                                            <div class="rating-info__progress-scale" style="width:100%;"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="content-list__item content-list__item_top-users">
                                <a href="https://habr.com/ru/users/AloneCoder/"
                                   class="media-obj media-obj_link">
                                    <div class="media-obj__image">
                                        <img
                                            src="//habrastorage.org/getpro/habr/avatars/741/45e/bea/74145ebeab7f222cce402aed2683f9d7.png"
                                            class="user-pic__img" width="30" height="30"/>
                                    </div>

                                    <div class="media-obj__body">
                                        <div class="rating-info rating-info_top-2">
                                            <span class="rating-info__title">AloneCoder</span>
                                            <span class="rating-info__stat">1 871,4</span>
                                        </div>
                                        <div class="rating-info__progress">
                                            <div class="rating-info__progress-scale" style="width:21%;"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="content-list__item content-list__item_top-users">
                                <a href="https://habr.com/ru/users/SamDark/" class="media-obj media-obj_link">
                                    <div class="media-obj__image">
                                        <img
                                            src="//habrastorage.org/getpro/habr/avatars/2df/fce/7ee/2dffce7ee42c7b79cce513e382cec05c.jpg"
                                            class="user-pic__img" width="30" height="30"/>
                                    </div>

                                    <div class="media-obj__body">
                                        <div class="rating-info rating-info_top-3">
                                            <span class="rating-info__title">SamDark</span>
                                            <span class="rating-info__stat">1 029,8</span>
                                        </div>
                                        <div class="rating-info__progress">
                                            <div class="rating-info__progress-scale" style="width:11%;"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="content-list__item content-list__item_top-users">
                                <a href="https://habr.com/ru/users/AntonShevchuk/"
                                   class="media-obj media-obj_link">
                                    <div class="media-obj__image">
                                        <img
                                            src="//habrastorage.org/getpro/habr/avatars/c94/ce9/9e3/c94ce99e339f03c02a78c4130bff9eaf.jpg"
                                            class="user-pic__img" width="30" height="30"/>
                                    </div>

                                    <div class="media-obj__body">
                                        <div class="rating-info rating-info_top-4">
                                            <span class="rating-info__title">AntonShevchuk</span>
                                            <span class="rating-info__stat">815,0</span>
                                        </div>
                                        <div class="rating-info__progress">
                                            <div class="rating-info__progress-scale" style="width:9%;"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="content-list__item content-list__item_top-users">
                                <a href="https://habr.com/ru/users/youROCK/" class="media-obj media-obj_link">
                                    <div class="media-obj__image">
                                        <img
                                            src="//habrastorage.org/getpro/habr/avatars/371/51f/213/37151f213dce4543faf649cbb6522063.jpg"
                                            class="user-pic__img" width="30" height="30"/>
                                    </div>

                                    <div class="media-obj__body">
                                        <div class="rating-info rating-info_top-5">
                                            <span class="rating-info__title">youROCK</span>
                                            <span class="rating-info__stat">688,0</span>
                                        </div>
                                        <div class="rating-info__progress">
                                            <div class="rating-info__progress-scale" style="width:8%;"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="content-list__item content-list__item_top-users">
                                <a href="https://habr.com/ru/users/pmurzakov/" class="media-obj media-obj_link">
                                    <div class="media-obj__image">
                                        <img
                                            src="//habrastorage.org/getpro/habr/avatars/7cb/450/197/7cb450197c546e0f13d38c61021ac846.jpg"
                                            class="user-pic__img" width="30" height="30"/>
                                    </div>

                                    <div class="media-obj__body">
                                        <div class="rating-info rating-info_top-6">
                                            <span class="rating-info__title">pmurzakov</span>
                                            <span class="rating-info__stat">566,4</span>
                                        </div>
                                        <div class="rating-info__progress">
                                            <div class="rating-info__progress-scale" style="width:6%;"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="content-list__item content-list__item_top-users">
                                <a href="https://habr.com/ru/users/zapimir/" class="media-obj media-obj_link">
                                    <div class="media-obj__image">
                  <span class="default-image default-image_small default-image_green">
                      <svg class="icon-svg" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" version="1.1"
                           role="img"><path
                              d="M21.5 24h-19c-1.379 0-2.5-1.122-2.5-2.5v-19c0-1.379 1.122-2.5 2.5-2.5h19c1.379 0 2.5 1.122 2.5 2.5v19c0 1.379-1.122 2.5-2.5 2.5zm-19-23c-.827 0-1.5.673-1.5 1.5v19c0 .827.673 1.5 1.5 1.5h19c.827 0 1.5-.673 1.5-1.5v-19c0-.827-.673-1.5-1.5-1.5h-19zM15.598 12.385zM19.438 15.417l-.002-.005v-.001c-.875-2.226-2.484-3.054-3.445-3.549l-.273-.143c.029-.497-.025-1.034-.167-1.599l-.128.032.123-.044c-.765-2.152-1.757-2.585-2.632-2.967l-.006-.003-.535-2.121c.357-.065.628-.375.628-.752.001-.423-.342-.765-.765-.765s-.766.342-.766.765c0 .358.248.657.581.74l-.825 1.654-.014-.003-.024-.003c-1.053-.033-1.842.369-2.5.947-.633-.322-1.515-.729-2.158-1.814.107-.12.174-.276.174-.45 0-.375-.303-.678-.678-.678s-.678.303-.678.678.303.678.678.678l.221-.04c.416.597 1.09 1.181 1.347 2.828l-.072.091.104.081-.112-.067c-1.157 1.914-.793 4.248.207 5.37-.998 2.546-1.035 4.681-.097 5.868l.002.002.003.003c.119.162.313.233.524.233.189 0 .39-.057.559-.154.312-.179.441-.459.326-.713l-.12.054.119-.056c-.581-1.243-.474-2.713.314-4.37.4.131.778.208 1.145.234l.139.73c.264 1.418.514 2.757 1.297 4.006.132.264.453.387.777.387.122 0 .245-.018.357-.051.385-.116.591-.399.537-.738l-.129.021.125-.042c-.204-.606-.431-1.146-.649-1.67-.373-.894-.725-1.742-.891-2.737.407-.042.797-.129 1.161-.261.825.692 1.661 1.492 2.743 3.406h.001c.072.14.224.215.41.215.105 0 .222-.024.339-.073.365-.155.652-.531.477-1.006v-.001c-.432-1.849-1.426-2.778-2.428-3.547.162-.175.311-.366.442-.576.75.399 1.878 1.005 3.127 2.766l.047.067.011-.008c.151.156.317.24.48.24.096 0 .191-.027.279-.084.306-.194.439-.662.29-1.005zm-8.878-2.493c-.947 0-1.713-.767-1.713-1.713s.767-1.713 1.713-1.713c.947 0 1.713.767 1.713 1.713s-.767 1.713-1.713 1.713zm6.587 4.648l-.084.021v-.001l.084-.02zm-2.007-5.312zm.022 1.006zM11.225 11.604c0 .385-.312.697-.697.697s-.697-.312-.697-.697c0-.385.312-.697.697-.697s.697.312.697.697z"/></svg>
                    </span>
                                    </div>

                                    <div class="media-obj__body">
                                        <div class="rating-info rating-info_top-7">
                                            <span class="rating-info__title">zapimir</span>
                                            <span class="rating-info__stat">559,0</span>
                                        </div>
                                        <div class="rating-info__progress">
                                            <div class="rating-info__progress-scale" style="width:6%;"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="content-list__item content-list__item_top-users">
                                <a href="https://habr.com/ru/users/alexzfort/" class="media-obj media-obj_link">
                                    <div class="media-obj__image">
                                        <img
                                            src="//habrastorage.org/getpro/habr/avatars/d2a/e8a/5ac/d2ae8a5ac9876f838ebdd45f3ea3bc3b.png"
                                            class="user-pic__img" width="30" height="30"/>
                                    </div>

                                    <div class="media-obj__body">
                                        <div class="rating-info rating-info_top-8">
                                            <span class="rating-info__title">alexzfort</span>
                                            <span class="rating-info__stat">558,0</span>
                                        </div>
                                        <div class="rating-info__progress">
                                            <div class="rating-info__progress-scale" style="width:6%;"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="content-list__item content-list__item_top-users">
                                <a href="https://habr.com/ru/users/olegbunin/" class="media-obj media-obj_link">
                                    <div class="media-obj__image">
                                        <img
                                            src="//habrastorage.org/getpro/habr/avatars/fdb/8a5/6e3/fdb8a56e3bbf010b012a4eb597cdf134.jpg"
                                            class="user-pic__img" width="30" height="30"/>
                                    </div>

                                    <div class="media-obj__body">
                                        <div class="rating-info rating-info_top-9">
                                            <span class="rating-info__title">olegbunin</span>
                                            <span class="rating-info__stat">557,0</span>
                                        </div>
                                        <div class="rating-info__progress">
                                            <div class="rating-info__progress-scale" style="width:6%;"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="content-list__item content-list__item_top-users">
                                <a href="https://habr.com/ru/users/iGusev/" class="media-obj media-obj_link">
                                    <div class="media-obj__image">
                                        <img
                                            src="//habrastorage.org/getpro/habr/avatars/398/182/212/39818221233f641a20d067615a7e0e01.jpg"
                                            class="user-pic__img" width="30" height="30"/>
                                    </div>

                                    <div class="media-obj__body">
                                        <div class="rating-info rating-info_top-10">
                                            <span class="rating-info__title">iGusev</span>
                                            <span class="rating-info__stat">483,0</span>
                                        </div>
                                        <div class="rating-info__progress">
                                            <div class="rating-info__progress-scale" style="width:5%;"></div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="default-block__footer">
                        <a href="https://habr.com/ru/hub/php/authors/" class="default-block__footer-link"
                           rel="nofollow">100 лучших авторов</a>
                    </div>
                </div>

                <div class="default-block default-block_sidebar" id="neuro-habr">
                </div>
                <script>
                    var rndmvlue = Math.random().toString(36).substring(2);
                    var neuroHabrUrl = '/ru/json/mrnh/?v=' + rndmvlue;


                    $.ajax({
                        url: neuroHabrUrl,
                        success: function (data) {
                            if (data.messages === 'ok' && data.html && data.html.length) {
                                $('#neuro-habr').append(data.html);
                            }
                        },
                        error: function (err) {
                        },
                        dataType: 'json',
                        type: 'GET',
                    });
                </script>
                <script src="https://hsto.org/getpro/neuro-habr/2.1.0/neuro-habr.js"></script>

                <script>
                    if (window.fetch) {
                        var nh = window.neuroHabr;
                        var host = 'https://b2b.ainews.kz/api';

                        var projectId = '4bf28fae-b05a-4f44-b28e-9a0c4a658524';
                        var widgetId = 'cab341f3-0932-4b6d-9664-d6b4d38dd2c5';

                        nh.init(host, projectId, widgetId);

                        var nhStateWidget = {
                            widgetViewSent: false,
                        };

                        var neuroHabrBlock = document.querySelector('#neuro-habr');

                        var isInViewport = function (e) {
                            if (!e) return false;
                            var b = e.getBoundingClientRect();
                            return b.top <= window.innerHeight && b.top + b.height >= 0;
                        };

                        if (typeof document.addEventListener !== 'undefined') {
                            document.addEventListener('scroll', () => {
                                if (!nhStateWidget.widgetViewSent && isInViewport(neuroHabrBlock)) {
                                    nhStateWidget.widgetViewSent = true;
                                    nh.sendWidget();
                                }
                            });
                        }
                    }
                </script>

            </div>
        </div>
    </div>
    <div class="overlay hidden" id="js-vote-result">
        <div class="popup popup_reasons">
            <div class="popup__head">
                <span class="popup__head-title js-result-popup_title"></span>
                <button type="button" class="btn btn_small btn_popup-close js-hide_result-reason">
                    <svg class="icon-svg" width="12" height="12">
                        <use xlink:href="https://habr.com/5fc4fe37/images/common-svg-sprite.svg#close"/>
                    </svg>
                </button>
            </div>
            <div class="popup__body">
                <div class="js-reasons-vote_result-empty">Пока никто не указал причину минусов</div>
                <div class="js-reasons-vote_result-content">
                    <div class="reasons-vote__title">Причины минусов</div>
                    <div id="js-result-popup_list"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
