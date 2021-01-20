const buttonUp = $("#rating_update_up"); // Кнопка положительного голоса
const buttonDown = $("#rating_update_down"); // Кнопка отрицательного голоса
const rating = $("span.voting-wjt__counter") // Span со значением рейтинга

/*Клик по кнопке*/
buttonUp.on("click", function (e) {
    clickHandler(e, buttonUp)
});
buttonDown.on("click", function (e) {
    clickHandler(e, buttonDown)
});

/*Отправка запроса*/
function clickHandler(e, button) {
    e.preventDefault()
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let name = button.attr('name')
    let value = button.val()
    let dataAction = button.attr('data-action')
    // Данные, отправляемые по ajax
    let data = {
        [name]: value,
        "data-action": dataAction
    };
    // Ajax заппрос
    let jqXHR = $.post('update', data, function (data, status) {
        dataHandler(data)
    }, 'json')

    jqXHR.fail(function () {
        console.log("Error: " + jqXHR.status)
    })
}

/*Обработка данных, полученных от сервера*/
function dataHandler(data) {
    // Список классов для спана со значением рейтинга
    let ratingColorTypeClassList
    // Знак перед значением рейтинга
    let symbol = ''

    if (data.rating > 0) {
        ratingColorTypeClassList = 'voting-wjt__counter voting-wjt__counter_positive js-score'
        symbol = '+'
    } else if (data.rating < 0) {
        ratingColorTypeClassList = 'voting-wjt__counter  voting-wjt__counter_negative  js-score'
    } else {
        ratingColorTypeClassList = 'voting-wjt__counter js-score'
    }

    rating.text(symbol + data.rating)
    rating.attr('class', ratingColorTypeClassList)
    rating.attr('title', `Всего голосов ${data.rating_sum}: ↑${data.rating_up} и ↓${data.rating_down}`)
}
