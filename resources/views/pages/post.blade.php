@extends('layouts.layout')

@section('content')
    <section class="column-wrapper column-wrapper_post js-sticky-wrapper">
        <div class="content_left js-content_left">

            <article class="post post_full" id="post_529268" lang="ru">
                <div class="post__wrapper">
                    <header class="post__meta">
                        <a href="{{route('ru.users', ['nickname' => $post->user->nickname])}}"
                           class="post__user-info user-info"
                           title="Автор публикации">
                            <img
                                src="{{$post->user->avatar}}"
                                width="24" height="24" class="user-info__image-pic user-info__image-pic_small">
                            <span
                                class="user-info__nickname user-info__nickname_small">{{$post->user->nickname}}</span>
                        </a>

                        <span class="post__time"
                              data-time_published="2020-11-22T15:07Z">{{get_formated_date($post->created_at)}}</span>


                    </header>

                    <h1 class="post__title post__title_full">
                        <span class="post__title-text">{{$post->title}}</span>
                    </h1>


                    <ul class="post__hubs post__hubs_full-post inline-list">
                        @foreach($post->hubs as $key => $hub)
                            <li class="inline-list__item inline-list__item_hub">
                                <a href="{{route('ru.posts', ['hub' => $hub->title])}}"
                                   class="inline-list__item-link hub-link "
                                   title="Вы не подписаны на этот хаб"
                                   onclick="if (typeof ga === 'function') { ga('send', 'event', 'hub', 'post page', '{{$hub->title}}'); }">{{$hub->title}}</a>{{$key !== count($post->hubs) - 1 ? ',':''}}
                            </li>
                        @endforeach
                    </ul>

                    <div class="post__body post__body_full">
                        <div class="post__text post__text-html post__text_v1" id="post-content-body">
                            <p><img src="{{$post->img}}"
                                    alt="Laravel Дайджест"></p><a name="habracut"></a><br>
                            <p>{{$post->description}}</p><br>
                            {!! $post->body !!}
                        </div>
                        <div class="post__text post__text-html post__text_v1" id="post-content-body">

                        </div>
                    </div>


                    <dl class="post__tags">
                        <dt class="post__tags-label">Теги:</dt>
                        <dd class="post__tags-list">
                            <ul class="inline-list inline-list_fav-tags js-post-tags">
                                @foreach($post->tags as $key => $tag)
                                    <li class="inline-list__item inline-list__item_tag"><a
                                            href="https://habr.com/ru/search/?q=%5B%D0%B4%D0%B0%D0%B9%D0%B4%D0%B6%D0%B5%D1%81%D1%82%5D&target_type=posts"
                                            rel="tag"
                                            class="inline-list__item-link post__tag  ">{{$tag->title}}</a>
                                    </li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn btn_outline_grey btn_mini hidden js-fav-edit-link"
                                    data-type="2" data-id="529268" onclick="show_edit_tags(this)">Добавить метки
                            </button>
                        </dd>
                    </dl>
                    <dl class="post__tags">
                        <dt class="post__tags-label">Хабы:</dt>
                        <dd class="post__tags-list">
                            <ul class="inline-list inline-list_fav-tags js-post-hubs">
                                @foreach($post->hubs as $key => $hub)
                                    <li class="inline-list__item inline-list__item_tag">
                                        <a href="https://habr.com/ru/hub/laravel/" rel="tag"
                                           class="inline-list__item-link post__tag">
                                            {{$hub->title}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </dd>
                    </dl>
                </div>
                <div class="overlay hidden" id="js-vote-reason">
                    <div class="popup popup_reasons">
                        <div class="popup__head popup__head_lang-settings">
                            <span
                                class="popup__head-title">Укажите причину минуса, чтобы автор поработал над ошибками</span>
                            <button type="button" class="btn btn_small btn_popup-close js-hide_vote-reason">
                                <svg class="icon-svg" width="12" height="12">
                                    <use xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#close"/>
                                </svg>
                            </button>
                        </div>
                        <div class="popup__body">
       <span class="radio radio_custom reasons-vote__item js-vote-popup_list-item">
          <input type="radio" id="reasonList" name="reasonList" class="radio__input js-vote_radio" value="">
          <label for="reasonList" class="radio__label radio__label_another js-vote_title"></label>
        </span>
                            <div id="js-vote-popup_list"></div>
                            <button type="button" class="btn btn_blue btn_huge js-vote_send" disabled>Отправить
                                анонимно
                            </button>
                        </div>
                    </div>
                </div>

            </article>


            <form action="/json/favorites/" method="post" class="form form_bordered form_favorites-tags hidden"
                  id="edit_tags_form">
                <input type="hidden" name="action" value="add"/>
                <input type="hidden" name="ti" value="0"/>
                <input type="hidden" name="tt" value="0"/>

                <button type="button" class="btn form__close-btn" onclick="closeForm(this)" title="Закрыть">
                    <svg class="icon-svg icon-svg_navbar-close-search" width="31" height="32" viewBox="0 0 31 32"
                         aria-hidden="true" version="1.1" role="img">
                        <path
                            d="M26.67 0L15.217 11.448 3.77 0 0 3.77l11.447 11.45L0 26.666l3.77 3.77L15.218 18.99l11.45 11.448 3.772-3.77-11.448-11.45L30.44 3.772z"/>
                    </svg>
                </button>

                <fieldset class="form__fieldset">
                    <legend class="form__legend">Пометьте публикацию своими метками</legend>
                    <input type="text" name="tags_string" class="form__text-field"/>
                    <span class="form__desc">Метки лучше разделять запятой. Например: <i>программирование, алгоритмы</i></span>
                </fieldset>

                <div class="form__footer">
                    <button type="submit" class="btn btn_x-large btn_outline_blue" disabled>Сохранить</button>
                </div>
            </form>

        </div>

        <div class="sidebar">
            <div class="sidebar_right_ad">
                <!-- /235032688/HH/HH01_ATF_Poster -->
                <div class="dfp-slot dfp-slot_top is_visible">
                    <a href="https://tmtm.ru/services/advertising/" target="_blank" class="dfp-slot__label">Реклама</a>
                    <div class="dfp-slot__placeholder">
                        <span class="dfp-slot__placeholder-text">Мир ИБ в фактах: как меняются современные киберугрозы и как выбрать защиту для своей компании <a
                                href="https://u.tmtm.ru/isworld_sum_top" class="btn btn_large btn_blue"
                                style="display:inline-flex!important;" target="_blank">Читать</a></span>
                    </div>


                    <div class="dfp-slot__banner" id="div-gpt-hh-atf">
                        <script>
                            window.display_dfp_slot('div-gpt-hh-atf');
                        </script>
                    </div>
                </div>

            </div>
            <div class="sidebar_right sidebar_content-area">
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

                <div class="default-block default-block_sidebar hidden" id="tm-editoral-subscription">
                    <div class="tm-editoral-subscription">
      <span class="tm-editoral-subscription__close" id="editoral-subscribe-close">
        <svg width="12" height="12">
          <use xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#close"/>
        </svg>
      </span>

                        <h3 class="tm-editoral-subscription__title">
                            Редакторский дайджест
                        </h3>
                        <p class="tm-editoral-subscription__description">
                            Присылаем лучшие статьи раз в месяц
                        </p>
                        <form method="POST" class="tm-editoral-subscription__form" id="editoral-subscribe">
                            <input placeholder="Электропочта" name="email" type="email" id="editoral-subscribe-email"
                                   class="tm-editoral-subscription__input"/>
                            <input name="hl" type="hidden" value="ru"/>
                            <input name="fl" type="hidden" value="ru"/>
                            <button type="submit" class="tm-editoral-subscription__icon" id="editoral-subscribe-button">
                                <svg width="24" height="24">
                                    <use
                                        xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#arrow-right"/>
                                </svg>
                            </button>
                        </form>
                        <p class="tm-editoral-subscription__error hidden" id="editoral-subscribe-error"></p>
                        <p class="tm-editoral-subscription__success hidden" id="editoral-subscribe-success">
                            Скоро на этот адрес придет письмо. Подтвердите подписку, если всё в силе.
                        </p>
                    </div>
                    <script>
                        $(document).ready(function () {
                            var block = $('#tm-editoral-subscription');
                            var input = $('#editoral-subscribe-email');
                            var button = $('#editoral-subscribe-button');
                            var error = $('#editoral-subscribe-error');
                            var success = $('#editoral-subscribe-success');

                            var cookieOptions = {
                                expires: 90,
                                path: '/',
                                secure: true,
                            };

                            if (!$.cookie('habr-editoral-subscription')) {
                                block.removeClass('hidden');
                            }

                            $('#editoral-subscribe-close').click(function () {
                                $.cookie('habr-editoral-subscription', 'close', cookieOptions);
                                if (typeof ga === 'function') {
                                    ga('send', 'event', 'tm_block', 'edit-digest_post', 'close');
                                }
                                block.remove();
                            });


                            function onError(msg) {
                                input.prop('disabled', false);
                                button.prop('disabled', false);
                                button.removeClass('loading');
                                error.removeClass('hidden');
                                error.text(msg);
                            }

                            $('#editoral-subscribe').submit(function (e) {
                                var form = $(this);

                                form.ajaxSubmit({
                                    url: '/json/digests/editorial/subscribe',
                                    dataType: 'json',
                                    beforeSubmit: function () {
                                        input.prop('disabled', true);
                                        button.prop('disabled', true);
                                        error.addClass('hidden');
                                        button.addClass('loading');
                                    },
                                    error: function (err) {
                                        if (err.status !== 200) {
                                            onError(err.statusText);
                                        } else {
                                            onError(err);
                                        }
                                    },
                                    success: function (json) {
                                        if (json.system_errors) {
                                            onError(json.system_errors && json.system_errors[0]);
                                        } else {
                                            form.addClass('hidden');
                                            success.removeClass('hidden');
                                            button.removeClass('loading');
                                            $.cookie('habr-editoral-subscription', 'subscribe', cookieOptions);
                                            if (typeof ga === 'function') {
                                                ga('send', 'event', 'tm_block', 'edit-digest_post', 'subscribe');
                                            }
                                            setTimeout(function () {
                                                block.remove()
                                            }, 10000);
                                        }
                                    }
                                });
                                return false;
                            });
                        });
                    </script>

                </div>
            </div>
    </section>

    <section class="column-wrapper">
        <div class="content_left">
            <div class="post-additionals">
                <ul class="post-stats post-stats_post js-user_"
                    data-post-type="publish_ugc_ru,h_91,h_260,h_18812,f_develop" id="infopanel_post_529268">
                    <li class="post-stats__item post-stats__item_voting-wjt">
                        <div class="voting-wjt voting-wjt_post js-post-vote" data-id="529268" data-type="2">
                            <button type="button" class="btn voting-wjt__button " data-action="up"
                                    {{--onclick="posts_vote_plus(this);"--}} id='rating_update_up'
                                    style='border: 1px solid #000' name='rating_update' value='{{$post->id}}'>
                                <svg class="icon-svg_arrow-up" width="10" height="16">
                                    <use
                                        xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#vote-arrow"/>
                                </svg>
                            </button>

                            <span
                                class="voting-wjt__counter  {{$post->rating > 0 ?'voting-wjt__counter_positive':''}} {{$post->rating < 0 ?'voting-wjt__counter_negative':''}} js-score"
                                onclick="posts_vote_result(5, 5, 0)"
                                title="Всего голосов {{$post->rating_sum}}: &uarr;{{$post->rating_up}} и &darr;{{$post->rating_down}}">{{$post->rating > 0 ? '+'.$post->rating:$post->rating}}</span>

                            <button type="button" class="btn voting-wjt__button " data-action="down"
                                    {{--onclick="posts_vote_minus(this);"--}} id='rating_update_down'
                                    style='border: 1px solid #000' name='rating_update' value='{{$post->id}}'>
                                <svg class="icon-svg_arrow-down" width="10" height="16">
                                    <use
                                        xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#vote-arrow"/>
                                </svg>
                            </button>
                        </div>
                    </li>
                    <li class="post-stats__item post-stats__item_bookmark">
                        <button type="button" class="btn bookmark-btn bookmark-btn_post "
                                data-post-type="publish_ugc_ru,h_91,h_260,h_18812,f_develop" data-type="2"
                                data-id="529268" data-action="add"
                                title="Только зарегистрированные пользователи могут добавлять публикации в закладки"
                                onclick="posts_add_to_favorite(this);" disabled>
                            <span class="btn_inner"><svg class="icon-svg_bookmark" width="10" height="16"><use
                                        xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#book"/></svg><span
                                    class="bookmark__counter js-favs_count"
                                    title="Количество пользователей, добавивших публикацию в закладки">{{$post->bookmarks}}</span></span>
                        </button>
                    </li>

                    <li class="post-stats__item post-stats__item_views">
                        <div class="post-stats__views" title="Количество просмотров">
                            <svg class="icon-svg_views-count" width="21" height="12">
                                <use xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#eye"/>
                            </svg>
                            <span class="post-stats__views-count">{{get_formated_views($post->views)}}</span>
                        </div>
                    </li>

                    <li class="post-stats__item post-stats__item_comments">
                        <a href="https://habr.com/ru/post/529268/#comments" class="post-stats__comments-link"
                           rel="nofollow">
                            <svg class="icon-svg_post-comments" width="16" height="16">
                                <use xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#comment">
                            </svg>
                            <span class="post-stats__comments-text" title="Добавить комментарий">Комментировать</span>
                        </a>
                    </li>


                    <li class="post-stats__item post-stats__item_share">
                        <div class="dropdown dropdown_share">
                            <div href="https://habr.com/ru/post/529268/#comments" data-toggle="dropdown"
                                 class="post-stats__share" rel="nofollow">
                                <svg class="icon-svg_post-share" width="24" height="24">
                                    <use xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#share">
                                </svg>
                                <span class="post-stats__comments-text" title="Поделиться">
              Поделиться
            </span>
                            </div>

                            <div class="dropdown-container">
                                <div class="post-share">
                                    <ul class="post-share__buttons">
                                        <li class="post-share__item post-share__item_post">
      <span
          class="post-share__item-link post-share__item-link_normal post-share__item-link_copy"
          title="Скопировать ссылку"
          onclick="copyCurrentUrl(), $('.dropdown_share').removeClass('dropdown_active')"
      >
        Скопировать ссылку
      </span>
                                        </li>
                                        <li class="post-share__item post-share__item_post">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://habr.com/ru/post/529268/"
                                               class="post-share__item-link post-share__item-link_normal post-share__item-link_facebook"
                                               title="Facebook"
                                               onclick="window.open(this.href, 'Facebook', 'width=640,height=436,toolbar=0,status=0'); return false"
                                            >
                                                Facebook
                                            </a>
                                        </li>
                                        <li class="post-share__item post-share__item_post">
                                            <a href="https://twitter.com/intent/tweet?text=Laravel%E2%80%93%D0%94%D0%B0%D0%B9%D0%B4%D0%B6%D0%B5%D1%81%D1%82+%289%E2%80%9322+%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8F+2020%29+https://habr.com/p/529268/+via+%40habr_com"
                                               class="post-share__item-link post-share__item-link_normal post-share__item-link_twitter"
                                               title="Twitter"
                                               onclick="window.open(this.href, 'Twitter', 'width=800,height=300,resizable=yes,toolbar=0,status=0'); return false"
                                            >
                                                Twitter
                                            </a>
                                        </li>
                                        <li class="post-share__item post-share__item_post">
                                            <a href="https://vk.com/share.php?url=https://habr.com/ru/post/529268/"
                                               class="post-share__item-link post-share__item-link_normal post-share__item-link_vkontakte"
                                               title="ВКонтакте"
                                               onclick="window.open(this.href, 'ВКонтакте', 'width=800,height=300,toolbar=0,status=0'); return false"
                                            >
                                                ВКонтакте
                                            </a>
                                        </li>
                                        <li class="post-share__item post-share__item_post">
                                            <a href="https://t.me/share/url?url=https://habr.com/ru/post/529268/&title=Laravel–Дайджест (9–22 ноября 2020)"
                                               class="post-share__item-link post-share__item-link_normal post-share__item-link_telegram"
                                               title="Telegram"
                                               onclick="window.open(this.href, 'Telegram', 'width=800,height=300,toolbar=0,status=0'); return false"
                                            >
                                                Telegram
                                            </a>
                                        </li>
                                        <li class="post-share__item post-share__item_post">
                                            <a href="https://getpocket.com/edit?url=https://habr.com/ru/post/529268/&title=Laravel–Дайджест (9–22 ноября 2020)"
                                               class="post-share__item-link post-share__item-link_normal post-share__item-link_pocket"
                                               title="Pocket"
                                               target="_blank"
                                            >
                                                Pocket
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </li>


                </ul>


                <form action="/json/complaints/add/" class="form form_bordered form_abuse hidden" method="post"
                      id="abuse_form">
                    <input type="hidden" name="tt" value="2"/>
                    <input type="hidden" name="ti" value="529268"/>

                    <button type="button" class="btn form__close-btn" onclick="closeForm(this)">
                        <svg class="icon-svg icon-svg_navbar-close-search" width="31" height="32" viewBox="0 0 31 32"
                             aria-hidden="true" version="1.1" role="img">
                            <path
                                d="M26.67 0L15.217 11.448 3.77 0 0 3.77l11.447 11.45L0 26.666l3.77 3.77L15.218 18.99l11.45 11.448 3.772-3.77-11.448-11.45L30.44 3.772z"/>
                        </svg>
                    </button>

                    <fieldset class="form__fieldset">
                        <legend class="form__legend">Нарушение</legend>
                        <input type="text" name="text" class="form__text-field"/>
                        <span class="form__desc">Опишите суть нарушения</span>
                    </fieldset>

                    <div class="form__footer">
                        <button type="submit" class="btn btn_x-large btn_outline_blue" disabled>Отправить</button>
                    </div>
                </form>


                <div class="author-panel author-panel_user">
                    <div class="author-panel__user-info">
                        <div class="user-info" data-user-login="snowmage">
                            <div class="user-info__stats">
                                <div class="media-obj">
                                    <a href="{{route('ru.users', ['nickname' => $post->user->nickname])}}"
                                       class="media-obj__image"
                                       onclick="if (typeof ga === 'function') { ga('send', 'event', 'author_info_bottom', 'profile', '{{$post->user->nickname}}');}">
                                        <img
                                            src="{{$post->user->avatar}}"
                                            width="48" height="48"
                                            class="media-obj__image-pic media-obj__image-pic_user"/>
                                    </a>

                                    <div class="media-obj__body media-obj__body_user-info">
                                        <a href="https://habr.com/ru/info/help/karma/"
                                           class="user-info__stats-item stacked-counter" title="19 голосов">
                                            <div
                                                class="stacked-counter__value stacked-counter__value_green ">{{$post->user->karma}}</div>
                                            <div class="stacked-counter__label">Карма</div>
                                        </a>

                                        <a href="https://habr.com/ru/info/help/karma/#rating"
                                           class="user-info__stats-item stacked-counter stacked-counter_rating"
                                           title="Рейтинг пользователя">
                                            <div
                                                class="stacked-counter__value stacked-counter__value_magenta">{{$post->user->rating}}
                                            </div>
                                            <div class="stacked-counter__label">Рейтинг</div>
                                        </a>
                                    </div>
                                </div>

                            </div>

                            <div class="user-info__about">
                                <div class="user-info__links">
                                    <a href="{{route('ru.users', ['nickname' => $post->user->nickname])}}"
                                       class="user-info__fullname"
                                       onclick="if (typeof ga === 'function') { ga('send', 'event', 'author_info_top', 'profile', 'snowmage');}">{{$post->user->first_name}}
                                        {{$post->user->last_name}}</a>&nbsp;<a
                                        href="{{route('ru.users', ['nickname' => $post->user->nickname])}}"
                                        class="user-info__nickname user-info__nickname_doggy"
                                        onclick="if (typeof ga === 'function') { ga('send', 'event', 'author_info_top', 'profile', 'snowmage');}">{{$post->user->nickname}}</a>

                                </div>

                                <div class="user-info__specialization">{{$post->user->specialization}}</div>
                            </div>
                        </div>

                        <div class="overlay hidden" id="js-donate">
                            <div class="popup">
                                <div class="popup__head popup__head_lang-settings">
                                    <span class="popup__head-title js-popup_title"
                                          data-section="1">Платежная система</span>
                                    <button type="button" class="btn btn_small btn_popup-close js-hide-donate">
                                        <svg class="icon-svg" width="12" height="12">
                                            <use
                                                xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#close"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="popup__body js-donate-popup_body">
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="sidebar_right">
        </div>
    </section>

    <section class="column-wrapper column-wrapper__last">
        <div class="content_left">


            <div class="default-block default-block_content">
                <div class="default-block__header default-block__header_large">
                    <h2 class="default-block__header-title default-block__header-title_large">Похожие публикации</h2>
                </div>
                <div class="default-block__content">

                    <ul class="content-list">
                        <li class="content-list__item content-list__item_devided post-info">
                            <span class="post-info__date">14 января 2019 в 00:29</span>
                            <h3 class="post-info__title post-info__title_large">
                                <a href="https://habr.com/ru/post/435956/"
                                   class="post-info__title post-info__title_large"
                                   onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'similar_posts', 'common', '1'); }">
                                    PHP-Дайджест № 147 (1 – 14 января 2019)
                                </a>
                            </h3>

                            <div class="post-info__meta">
                <span class="post-info__meta-item" title="Рейтинг">
                  <svg class="post-info__meta-icon icon-svg_rating" width="11" height="13"><use
                          xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#arrow-bold"/></svg>
                      <span class="post-info__meta-counter">+46</span>
                </span>
                                <span class="post-info__meta-item" title="Количество просмотров">
                  <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                          xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#eye"/></svg><span
                                        class="post-info__meta-counter">14,8k</span>
                </span>
                                <span class="post-info__meta-item" title="Закладки">
                  <svg class="post-info__meta-icon icon-svg_bookmark-mini" width="8" height="13"><use
                          xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#book"/></svg><span
                                        class="post-info__meta-counter">47</span>
                </span>
                                <a href="https://habr.com/ru/post/435956#comments" class="post-info__meta-item"
                                   rel="nofollow" title="Комментарии">
                                    <svg class="post-info__meta-icon icon-svg_comments" width="14" height="13">
                                        <use
                                            xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#comment"/>
                                    </svg>
                                    <span class="post-info__meta-counter">8</span>
                                </a>
                            </div>
                        </li>
                        <li class="content-list__item content-list__item_devided post-info">
                            <span class="post-info__date">10 декабря 2018 в 00:44</span>
                            <h3 class="post-info__title post-info__title_large">
                                <a href="https://habr.com/ru/post/432600/"
                                   class="post-info__title post-info__title_large"
                                   onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'similar_posts', 'common', '2'); }">
                                    PHP-Дайджест № 145 (26 ноября – 10 декабря 2018)
                                </a>
                            </h3>

                            <div class="post-info__meta">
                <span class="post-info__meta-item" title="Рейтинг">
                  <svg class="post-info__meta-icon icon-svg_rating" width="11" height="13"><use
                          xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#arrow-bold"/></svg>
                      <span class="post-info__meta-counter">+45</span>
                </span>
                                <span class="post-info__meta-item" title="Количество просмотров">
                  <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                          xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#eye"/></svg><span
                                        class="post-info__meta-counter">14,9k</span>
                </span>
                                <span class="post-info__meta-item" title="Закладки">
                  <svg class="post-info__meta-icon icon-svg_bookmark-mini" width="8" height="13"><use
                          xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#book"/></svg><span
                                        class="post-info__meta-counter">51</span>
                </span>
                                <a href="https://habr.com/ru/post/432600#comments" class="post-info__meta-item"
                                   rel="nofollow" title="Комментарии">
                                    <svg class="post-info__meta-icon icon-svg_comments" width="14" height="13">
                                        <use
                                            xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#comment"/>
                                    </svg>
                                    <span class="post-info__meta-counter">4</span>
                                </a>
                            </div>
                        </li>
                        <li class="content-list__item content-list__item_devided post-info">
                            <span class="post-info__date">12 ноября 2018 в 05:15</span>
                            <h3 class="post-info__title post-info__title_large">
                                <a href="https://habr.com/ru/post/429536/"
                                   class="post-info__title post-info__title_large"
                                   onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'similar_posts', 'common', '3'); }">
                                    PHP-Дайджест № 143 (1 – 12 ноября 2018)
                                </a>
                            </h3>

                            <div class="post-info__meta">
                <span class="post-info__meta-item" title="Рейтинг">
                  <svg class="post-info__meta-icon icon-svg_rating" width="11" height="13"><use
                          xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#arrow-bold"/></svg>
                      <span class="post-info__meta-counter">+51</span>
                </span>
                                <span class="post-info__meta-item" title="Количество просмотров">
                  <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                          xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#eye"/></svg><span
                                        class="post-info__meta-counter">13,8k</span>
                </span>
                                <span class="post-info__meta-item" title="Закладки">
                  <svg class="post-info__meta-icon icon-svg_bookmark-mini" width="8" height="13"><use
                          xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#book"/></svg><span
                                        class="post-info__meta-counter">44</span>
                </span>
                                <a href="https://habr.com/ru/post/429536#comments" class="post-info__meta-item"
                                   rel="nofollow" title="Комментарии">
                                    <svg class="post-info__meta-icon icon-svg_comments" width="14" height="13">
                                        <use
                                            xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#comment"/>
                                    </svg>
                                    <span class="post-info__meta-counter">8</span>
                                </a>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>

            <div class="default-block_content">


                <div class="promo-block promo-block_courses">
                    <h2 class="promo-block__header">
                        <a onclick="if (typeof ga === 'function') { if (g_is_ugc_post) { var action = 'career_courses_post' } else {  var action = 'career_courses_feed' } ga('send', 'event', 'tm_block', action, 'blockname'); }"
                           href="https://career.habr.com/courses" target="_blank"
                           data-utm="?utm_source=habr&utm_medium=habr_block&utm_content=block_name&utm_campaign=courses_post"
                           class="promo-block__title-link" rel="nofollow">
                            Курсы
                        </a>
                    </h2>

                    <div class="promo-block__content">
                        <ul class="content-list content-list_promo">
                            <li class="content-list__item content-list__item_promo">
                                <a onclick="if (typeof ga === 'function') { if (g_is_ugc_post) { var action = 'career_courses_post' } else {  var action = 'career_courses_feed' } ga('send', 'event', 'tm_block', action, 'post'); }"
                                   href="https://career.habr.com/courses/13" class="promo-item"
                                   data-utm="?utm_source=habr&utm_medium=habr_block&utm_content=course&utm_campaign=courses_post">
                                    <div class="promo-item__wrap">
                                        <div class="promo-item__title promo-item__title_hovered">
                                            <img
                                                src="https://habrastorage.org/getpro/moikrug/uploads/education_platform/000/000/037/logo/medium_3869053716ff0b787b38590f7ae5ed62.jpg"
                                                class="promo-item__title-image" width="20" height="20"/>
                                            Комплексное обучение PHP
                                        </div>
                                        <div class="promo-item__attrs">
        <span class="promo-item__attrs-item">
            11 января 2021
        </span>
                                            <span class="promo-item__attrs-item">
            6 недель
        </span>
                                            <span class="promo-item__attrs-item promo-item__amount_rur">
            20 000
        </span>
                                            <span class="promo-item__attrs-item">
          Loftschool
        </span>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <li class="content-list__item content-list__item_promo">
                                <a onclick="if (typeof ga === 'function') { if (g_is_ugc_post) { var action = 'career_courses_post' } else {  var action = 'career_courses_feed' } ga('send', 'event', 'tm_block', action, 'post'); }"
                                   href="https://career.habr.com/courses/4" class="promo-item"
                                   data-utm="?utm_source=habr&utm_medium=habr_block&utm_content=course&utm_campaign=courses_post">
                                    <div class="promo-item__wrap">
                                        <div class="promo-item__title promo-item__title_hovered">
                                            <img
                                                src="https://habrastorage.org/getpro/moikrug/uploads/education_platform/000/000/037/logo/medium_3869053716ff0b787b38590f7ae5ed62.jpg"
                                                class="promo-item__title-image" width="20" height="20"/>
                                            Vue.js Продвинутая веб-разработка
                                        </div>
                                        <div class="promo-item__attrs">
        <span class="promo-item__attrs-item">
            11 января 2021
        </span>
                                            <span class="promo-item__attrs-item">
            6 недель
        </span>
                                            <span class="promo-item__attrs-item promo-item__amount_rur">
            27 000
        </span>
                                            <span class="promo-item__attrs-item">
          Loftschool
        </span>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <li class="content-list__item content-list__item_promo">
                                <a onclick="if (typeof ga === 'function') { if (g_is_ugc_post) { var action = 'career_courses_post' } else {  var action = 'career_courses_feed' } ga('send', 'event', 'tm_block', action, 'post'); }"
                                   href="https://career.habr.com/courses/358" class="promo-item"
                                   data-utm="?utm_source=habr&utm_medium=habr_block&utm_content=course&utm_campaign=courses_post">
                                    <div class="promo-item__wrap">
                                        <div class="promo-item__title promo-item__title_hovered">
                                            <img
                                                src="https://habrastorage.org/getpro/moikrug/uploads/education_platform/000/000/023/logo/medium_003285e04cd9c6506d56e6d082755cc1.png"
                                                class="promo-item__title-image" width="20" height="20"/>
                                            Backend разработчик на PHP
                                        </div>
                                        <div class="promo-item__attrs">
        <span class="promo-item__attrs-item">
            17 января 2021
        </span>
                                            <span class="promo-item__attrs-item">
            5 месяцев
        </span>
                                            <span class="promo-item__attrs-item promo-item__amount_rur">
            50 000
        </span>
                                            <span class="promo-item__attrs-item">
          OTUS
        </span>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <li class="content-list__item content-list__item_promo">
                                <a onclick="if (typeof ga === 'function') { if (g_is_ugc_post) { var action = 'career_courses_post' } else {  var action = 'career_courses_feed' } ga('send', 'event', 'tm_block', action, 'post'); }"
                                   href="https://career.habr.com/courses/12" class="promo-item"
                                   data-utm="?utm_source=habr&utm_medium=habr_block&utm_content=course&utm_campaign=courses_post">
                                    <div class="promo-item__wrap">
                                        <div class="promo-item__title promo-item__title_hovered">
                                            <img
                                                src="https://habrastorage.org/getpro/moikrug/uploads/education_platform/000/000/037/logo/medium_3869053716ff0b787b38590f7ae5ed62.jpg"
                                                class="promo-item__title-image" width="20" height="20"/>
                                            Веб-дизайн
                                        </div>
                                        <div class="promo-item__attrs">
        <span class="promo-item__attrs-item">
            25 января 2021
        </span>
                                            <span class="promo-item__attrs-item">
            6 недель
        </span>
                                            <span class="promo-item__attrs-item promo-item__amount_rur">
            15 000
        </span>
                                            <span class="promo-item__attrs-item">
          Loftschool
        </span>
                                        </div>
                                    </div>
                                </a>

                            </li>
                            <li class="content-list__item content-list__item_promo">
                                <a onclick="if (typeof ga === 'function') { if (g_is_ugc_post) { var action = 'career_courses_post' } else {  var action = 'career_courses_feed' } ga('send', 'event', 'tm_block', action, 'post'); }"
                                   href="https://career.habr.com/courses/10" class="promo-item"
                                   data-utm="?utm_source=habr&utm_medium=habr_block&utm_content=course&utm_campaign=courses_post">
                                    <div class="promo-item__wrap">
                                        <div class="promo-item__title promo-item__title_hovered">
                                            <img
                                                src="https://habrastorage.org/getpro/moikrug/uploads/education_platform/000/000/037/logo/medium_3869053716ff0b787b38590f7ae5ed62.jpg"
                                                class="promo-item__title-image" width="20" height="20"/>
                                            Разработка под Android: базовый уровень
                                        </div>
                                        <div class="promo-item__attrs">
        <span class="promo-item__attrs-item">
            25 января 2021
        </span>
                                            <span class="promo-item__attrs-item">
            6 недель
        </span>
                                            <span class="promo-item__attrs-item promo-item__amount_rur">
            20 000
        </span>
                                            <span class="promo-item__attrs-item">
          Loftschool
        </span>
                                        </div>
                                    </div>
                                </a>

                            </li>
                        </ul>
                    </div>

                    <div class="promo-block__footer">
                        <a onclick="if (typeof ga === 'function') { if (g_is_ugc_post) { var action = 'career_courses_post' } else {  var action = 'career_courses_feed' }  ga('send', 'event', 'tm_block', action, 'posts'); }"
                           href="https://career.habr.com/courses"
                           data-utm="?utm_source=habr&utm_medium=habr_block&utm_content=courses_all&utm_campaign=courses_post"
                           class="promo-block__footer-link promo-block__footer-link_selected" target="_blank"
                           rel="nofollow">Больше курсов на Хабр Карьере</a>
                    </div>
                </div>


            </div>
            <!-- /235032688/HH/HH02_inpage_wide -->
            <div class="dfp-slot">
                <a href="https://tmtm.ru/services/advertising/" target="_blank" class="dfp-slot__label">Реклама</a>
                <div class="dfp-slot__placeholder">
                    <span class="dfp-slot__placeholder-text">AdBlock похитил этот баннер, но&nbsp;баннеры не&nbsp;зубы &mdash; отрастут<br/><br/> <a
                            href="https://u.tmtm.ru/tmtalkadblock" class="btn btn_large btn_blue"
                            style="display:inline-flex!important;" target="_blank">Подробнее</a></span>
                </div>

                <div class="dfp-slot__banner dfp-slot__banner_wide" id='div-gpt-hh-inpage-wide'>
                    <script>
                        window.display_dfp_slot('div-gpt-hh-inpage-wide');
                    </script>
                </div>
            </div>

        </div>
        <div class="sidebar">
            <div class="sidebar_right">
                <div class="default-block_content">
                    <div class="content-list__item content-list__item_post shortcuts_item" id="effect-sidebar"
                         style="display: none;">
                        <div class="default-block">
                            <div class="default-block__header">
                                <h2 class="default-block__header-title">Минуточку внимания</h2>
                            </div>
                            <div class="default-block__content">
                                <ul class="megapost-teasers" id="megapost-teasers-sidebar">

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="column-wrapper column-wrapper_comments js-comments-wrapper">
        <div class="content_left">
            <div class="comments-section" id="comments">
                <header class="comments-section__head">
                    <h2 class="comments-section__head-title">
                        Комментарии
                        <span class="comments-section__head-counter" id="comments_count">
          0
        </span>
                    </h2>

                </header>


                <ul class="content-list content-list_comments" id="comments-list">


                </ul>
                <div class="js-form_placeholder">
                    <p class="for_users_only_msg">Только&nbsp;<a href="/info/help/registration/">полноправные
                            пользователи</a> могут оставлять комментарии. <a href="https://habr.com/ru/auth/login/">Войдите</a>,
                        пожалуйста.</p>

                </div>
            </div>


        </div>
        <div class="sidebar">
            <div class="sidebar_right sidebar_comments js-sidebar_right">


                <div class="js-ad_sticky_comments">
                    <div class="default-block">
                        <div class="default-block__header">
                            <h3 class="default-block__header-title">Что обсуждают</h3>
                        </div>

                        <div class="default-block__content default-block__content_most-comments"
                             id="broadcast_tabs_comments">
                            <ul class="toggle-menu toggle-menu_most-comments">
                                <li class="toggle-menu__item">
                                    <a href="#broadcast_comments_now" class="toggle-menu__item-link active"
                                       rel="nofollow">Сейчас</a>
                                </li>
                                <li class="toggle-menu__item">
                                    <a href="#broadcast_comments_yesterday" class="toggle-menu__item-link"
                                       rel="nofollow">Вчера</a>
                                </li>
                                <li class="toggle-menu__item">
                                    <a href="#broadcast_comments_week" class="toggle-menu__item-link" rel="nofollow">Неделя</a>
                                </li>
                            </ul>

                            <div class="tabs__content" id="broadcast_comments_now">
                                <ul class="content-list content-list_most-comments">
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/post/459042/"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'discussions', 'now'); }"
                                           class="post-info__title">Еще немного истории — на этот раз копаемся в
                                            OS/360</a>

                                        <div class="post-info__meta">
                    <span class="post-info__meta-item">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#eye"/></svg><span
                            class="post-info__meta-counter">3,2k</span>
                    </span>
                                            <a href="https://habr.com/ru/post/459042/#comments"
                                               class="post-info__meta-item" rel="nofollow">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">35</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/company/tinkoff/blog/527710/"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'discussions', 'now'); }"
                                           class="post-info__title">Заметки тимлида</a>

                                        <div class="post-info__meta">
                    <span class="post-info__meta-item">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#eye"/></svg><span
                            class="post-info__meta-counter">9,3k</span>
                    </span>
                                            <a href="https://habr.com/ru/company/tinkoff/blog/527710/#comments"
                                               class="post-info__meta-item" rel="nofollow">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">42</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/company/vdsina/blog/528544/"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'discussions', 'now'); }"
                                           class="post-info__title">Крушение Intel состоялось</a>

                                        <div class="post-info__meta">
                    <span class="post-info__meta-item">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#eye"/></svg><span
                            class="post-info__meta-counter">88,9k</span>
                    </span>
                                            <a href="https://habr.com/ru/company/vdsina/blog/528544/#comments"
                                               class="post-info__meta-item" rel="nofollow">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">451</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/company/unwds/blog/390601/"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'discussions', 'now'); }"
                                           class="post-info__title">Щелкаем реле правильно: коммутация мощных
                                            нагрузок</a>

                                        <div class="post-info__meta">
                    <span class="post-info__meta-item">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#eye"/></svg><span
                            class="post-info__meta-counter">174k</span>
                    </span>
                                            <a href="https://habr.com/ru/company/unwds/blog/390601/#comments"
                                               class="post-info__meta-item" rel="nofollow">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">146</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://u.tmtm.ru/huawei-mlkit-rn" class="post-info__title"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'most_read', 'prmlink'); }">R2D2
                                            курит в сторонке: что могут инструменты для AI на смартфонах HUAWEI</a>
                                        <div class="post-info__meta-label">
                                            Мегапост
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tabs__content" id="broadcast_comments_yesterday">
                                <ul class="content-list content-list_most-comments">
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/company/vdsina/blog/528544/"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'discussions', 'yesterday'); }"
                                           class="post-info__title">Крушение Intel состоялось</a>

                                        <div class="post-info__meta">
                    <span class="post-info__meta-item">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#eye"/></svg><span
                            class="post-info__meta-counter">88,9k</span>
                    </span>
                                            <a href="https://habr.com/ru/company/vdsina/blog/528544/#comments"
                                               class="post-info__meta-item" rel="nofollow">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">451</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/post/530670/"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'discussions', 'yesterday'); }"
                                           class="post-info__title">Ядерная война, скорее всего, не приведёт к вымиранию
                                            человечества</a>

                                        <div class="post-info__meta">
                    <span class="post-info__meta-item">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#eye"/></svg><span
                            class="post-info__meta-counter">21k</span>
                    </span>
                                            <a href="https://habr.com/ru/post/530670/#comments"
                                               class="post-info__meta-item" rel="nofollow">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">255</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/company/action360/blog/530486/"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'discussions', 'yesterday'); }"
                                           class="post-info__title">Зачем нужны простые привычки: пример с прогулкой</a>

                                        <div class="post-info__meta">
                    <span class="post-info__meta-item">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#eye"/></svg><span
                            class="post-info__meta-counter">18,9k</span>
                    </span>
                                            <a href="https://habr.com/ru/company/action360/blog/530486/#comments"
                                               class="post-info__meta-item" rel="nofollow">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">80</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/post/530682/"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'discussions', 'yesterday'); }"
                                           class="post-info__title">Загадочные субтитры на CNN</a>

                                        <div class="post-info__meta">
                    <span class="post-info__meta-item">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#eye"/></svg><span
                            class="post-info__meta-counter">23,5k</span>
                    </span>
                                            <a href="https://habr.com/ru/post/530682/#comments"
                                               class="post-info__meta-item" rel="nofollow">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">76</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://u.tmtm.ru/selectel_chitayut" class="post-info__title"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'most_read', 'prmlink'); }">Какие
                                            они, облака будущего? Опрос с открытыми результатами</a>
                                        <div class="post-info__meta-label">
                                            Опрос
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tabs__content" id="broadcast_comments_week">
                                <ul class="content-list content-list_most-comments">
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/company/vdsina/blog/528544/"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'discussions', 'week'); }"
                                           class="post-info__title">Крушение Intel состоялось</a>

                                        <div class="post-info__meta">
                    <span class="post-info__meta-item">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#eye"/></svg><span
                            class="post-info__meta-counter">88,9k</span>
                    </span>
                                            <a href="https://habr.com/ru/company/vdsina/blog/528544/#comments"
                                               class="post-info__meta-item" rel="nofollow">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">451</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/company/englishdom/blog/529646/"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'discussions', 'week'); }"
                                           class="post-info__title">Фристайлер ракомакофон! или почему иногда мы
                                            неправильно слышим слова песен на английском</a>

                                        <div class="post-info__meta">
                    <span class="post-info__meta-item">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#eye"/></svg><span
                            class="post-info__meta-counter">44,6k</span>
                    </span>
                                            <a href="https://habr.com/ru/company/englishdom/blog/529646/#comments"
                                               class="post-info__meta-item" rel="nofollow">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">343</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/post/530116/"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'discussions', 'week'); }"
                                           class="post-info__title">А что если перейти на Удобный Шестидневный
                                            календарь?</a>

                                        <div class="post-info__meta">
                    <span class="post-info__meta-item">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#eye"/></svg><span
                            class="post-info__meta-counter">35,9k</span>
                    </span>
                                            <a href="https://habr.com/ru/post/530116/#comments"
                                               class="post-info__meta-item" rel="nofollow">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">318</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://habr.com/ru/company/sberbank/blog/530120/"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'discussions', 'week'); }"
                                           class="post-info__title">NFC на банкомате: небольшой ликбез</a>

                                        <div class="post-info__meta">
                    <span class="post-info__meta-item">
                      <svg class="post-info__meta-icon icon-svg_views" width="16" height="9"><use
                              xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#eye"/></svg><span
                            class="post-info__meta-counter">97,9k</span>
                    </span>
                                            <a href="https://habr.com/ru/company/sberbank/blog/530120/#comments"
                                               class="post-info__meta-item" rel="nofollow">
                                                <svg class="post-info__meta-icon icon-svg_comments" width="14"
                                                     height="13">
                                                    <use
                                                        xlink:href="https://habr.com/5fc68335/images/common-svg-sprite.svg#comment"/>
                                                </svg>
                                                <span class="post-info__meta-counter">302</span>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="content-list__item content-list__item_devided post-info">
                                        <a href="https://u.tmtm.ru/data-quest-reading" class="post-info__title"
                                           onclick="if (typeof ga === 'function') { ga('send', 'event', 'tm_block', 'most_read', 'prmlink'); }">Карты,
                                            деньги, Data Science: изучаем нескучные банковские данные [КВЕСТ]</a>
                                        <div class="post-info__meta-label">
                                            Мегапост
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>


    <script type="text/javascript">
        var userLabel = 'reader';
    </script>
@endsection
