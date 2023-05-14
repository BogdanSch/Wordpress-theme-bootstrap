jQuery(function ($) {
    $(window).scroll(function () {
        let bottomOffset = 2000; // Відступ від нижньої межі сайту, до якого повинен доскролити користувач, щоб підвантажилися нові пости
        let data = {
            action: "loadmore",
            query: bootkit_posts,
            page: current_page,
        };
        if ($(document).scrollTop() > $(document).height() - bottomOffset && !$("body").hasClass("loading")) {
            $.ajax({
                url: ajaxurl,
                data: data,
                type: "POST",
                beforeSend: function (xhr) {
                    $("body").addClass("loading");
                },
                success: function (data) {
                    if (data) {
                        $("#loadmore").before(data);
                        $("body").removeClass("loading");
                        current_page++;
                    }
                },
            });
        }
    });
});