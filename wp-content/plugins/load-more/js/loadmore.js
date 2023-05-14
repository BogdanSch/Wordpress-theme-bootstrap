jQuery(function ($) {
    $("#bootkit_loadmore").click(function () {
        console.log("loadmore");
        $(this).text("Loading..."); // змінюємо текст кнопки, ви також можете додати прелоадер
        var data = {
            action: "loadmore",
            query: bootkit_posts,
            page: current_page,
        };
        console.log(data);
        $.ajax({
            url: ajaxurl,
            data: data,
            type: "POST",
            success: function (data) {
                console.log(data);
                if (data) {
                    $("#bootkit_loadmore").text("Load more").before(data); // Вставляємо нові пости
                    current_page++; // збільшуємо номер сторінки на одиницю
                    if (current_page == max_pages) $("#bootkit_loadmore").remove(); // якщо остання сторінка видаляємо кнопку
                } else {
                    $("#bootkit_loadmore").remove(); // якщо ми дійшли до останньої сторінки постів, приховаємо кнопку
                }
            },
        });
    });
});