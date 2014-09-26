NProgress.configure({
    parent: '#content'
});
var type = '';
var genreId = 0;
function renderContent(id) {

    NProgress.inc();
    genreId = 0;
    type = id;
    $.ajax({
        url: id,
        success: function(data) {
            if (id == 'home') {
                $('#bjax-target').addClass('scrollable padder-lg w-f-md');
            } else {
                $('#bjax-target').removeClass('scrollable padder-lg w-f-md');
            }
            $('#bjax-target').html(data);
            $('#genre-list a[data-id=0]').addClass('active');
            $('a[song-genres]').on('click', function(e) {

                var id = $(this).data('id');
                var type = $(this).data('type');
                genreId = id;
                getDataByGenre(type, id);
            });

            $('#selected-genres-data').scroll(function() {
                zz
                if ($('#selected-genres-data')[0].scrollHeight - 50 < $('#selected-genres-data')[0].scrollTop + $('#selected-genres-data')[0].offsetHeight) {
                    $('div#loadmoreajaxloader').show();
                    NProgress.inc();
                    setTimeout(function() {

                        $.ajax({
                            url: "infinite-loading?type=" + type + "&id=" + genreId,
                            success: function(html) {
                                $('div#loadmoreajaxloader').hide();
                                $('#song-list').append(html);
                                NProgress.done(true);
                            }
                        });

                    }, 3000);
                }
            });
            NProgress.done(true);
        }
    });

}
renderContent('home');
$('a[my-ajax]').on('click', function(e) {
    $('#left-menu li').removeClass('active');
    $(this).parent().addClass('active');
    var id = $(this).data('url');
    renderContent(id);
});

function getDataByGenre(type, id) {
    NProgress.inc();
    $('.scrollable')[2].scrollTop = 0;
    $('#genre-list a').removeClass('active');
    $('#genre-list a[data-id=' + id + ']').addClass('active');
    $.ajax({
        url: 'by-genres?type=' + type + '&id=' + id,
        success: function(data) {
            $('#selected-genres-data').html(data);
            NProgress.done(true);

        }
    });
}
$(document).ready(function() {
    $(".genre").click(function() {
        var boundary = 1;
        var id = $(this).attr("id");
        NProgress.inc();
        $.ajax({
            type: "POST",
            url: base_url + "vip/genre_songs/",
            data: {id: id, boundary: boundary},
            success: function(data) {
                boundary = boundary + 1;
                $("#bjax-target").html(data);
                NProgress.done(true);
                $('#load_more').click(function() {
                    $('#loader_image').show();
                    $('div#loadmoreajaxloader').show();
                    NProgress.inc();
                    $.ajax({
                        type: "POST",
                        url: base_url + "vip/ajax_genre_loading",
                        data: {type: "genre", boundary: boundary, id: id},
                        success: function(html) {
                            $("#current_page").html(boundary);
                            var total_page = $("#total_page").html();
                            var current_page = $("#current_page").html();
                            //alert( $("#total_page").html()+$("#current_page").html());
                            if (total_page == current_page)
                            {
                                $("#load_more").hide();
                            }
                            boundary = boundary + 1;

                            $('#loader_image').hide();
                            $('#song-list').append(html);
                            NProgress.done(true);
                        }
                    });

                });
            }
        });
    });
    $(".subgenre").click(function() {
        var boundary = 1;
        var id = $(this).attr("id");
        NProgress.inc();
        $.ajax({
            type: "POST",
            url: base_url + "vip/subgenre_songs/",
            data: {id: id, boundary: boundary},
            success: function(data) {
                boundary = boundary + 1;
                $("#bjax-target").html(data);
                NProgress.done(true);
                $('#load_more').click(function() {
                    $('#loader_image').show();
                    $('div#loadmoreajaxloader').show();
                    NProgress.inc();
                    $.ajax({
                        type: "POST",
                        url: base_url + "vip/ajax_subgenre_loading",
                        data: {type: "genre", boundary: boundary, id: id},
                        success: function(html) {
                            $("#current_page").html(boundary);
                            var total_page = $("#total_page").html();
                            var current_page = $("#current_page").html();
                            //alert( $("#total_page").html()+$("#current_page").html());
                            if (total_page == current_page)
                            {
                                $("#load_more").hide();
                            }
                            boundary = boundary + 1;

                            $('#loader_image').hide();
                            $('#song-list').append(html);
                            NProgress.done(true);
                        }
                    });

                });
            }
        });
    });

    $("#video").click(function() {
        var boundary = 1;
        NProgress.inc();
        $.ajax({
            type: "POST",
            url: base_url + "vip/ajax_videos/",
            data: {type: "genre", boundary: boundary},
            success: function(data) {
                boundary = boundary + 1;
                $("#bjax-target").html(data);
                NProgress.done(true);
                $('#load_more').click(function() {
                    $('#loader_image').show();
                    $('div#loadmoreajaxloader').show();
                    NProgress.inc();
                    $.ajax({
                        type: "POST",
                        url: base_url + "vip/ajax_video_loading",
                        data: {type: "genre", boundary: boundary},
                        success: function(html) {
                            $("#current_page").html(boundary);
                            var total_page = $("#total_page").html();
                            var current_page = $("#current_page").html();
                            //alert( $("#total_page").html()+$("#current_page").html());
                            if (total_page == current_page)
                            {
                                $("#load_more").hide();
                            }
                            boundary = boundary + 1;

                            $('#loader_image').hide();
                            $('#song-list').append(html);
                            NProgress.done(true);
                        }
                    });

                });
            }
        });
    });

    $(".video_genre").click(function() {
        var boundary = 1;
        var id = $(this).attr("id");
        NProgress.inc();
        $.ajax({
            type: "POST",
            url: base_url + "vip/genre_videos/",
            data: {id: id, boundary: boundary},
            success: function(data) {
                boundary = boundary + 1;
                $("#bjax-target").html(data);
                NProgress.done(true);
                $('#load_more').click(function() {
                    $('#loader_image').show();
                    $('div#loadmoreajaxloader').show();
                    NProgress.inc();
                    $.ajax({
                        type: "POST",
                        url: base_url + "vip/ajax_genre_video_loading",
                        data: {type: "genre", boundary: boundary, id: id},
                        success: function(html) {
                            $("#current_page").html(boundary);
                            var total_page = $("#total_page").html();
                            var current_page = $("#current_page").html();
                            //alert( $("#total_page").html()+$("#current_page").html());
                            if (total_page == current_page)
                            {
                                $("#load_more").hide();
                            }
                            boundary = boundary + 1;

                            $('#loader_image').hide();
                            $('#song-list').append(html);
                            NProgress.done(true);
                        }
                    });

                });
            }
        });
    });


    $(".video_subgenre").click(function() {
        var boundary = 1;
        var id = $(this).attr("id");
        NProgress.inc();
        $.ajax({
            type: "POST",
            url: base_url + "vip/subgenre_videos/",
            data: {id: id, boundary: boundary},
            success: function(data) {
                boundary = boundary + 1;
                $("#bjax-target").html(data);
                NProgress.done(true);
                $('#load_more').click(function() {
                    $('#loader_image').show();
                    $('div#loadmoreajaxloader').show();
                    NProgress.inc();
                    $.ajax({
                        type: "POST",
                        url: base_url + "vip/ajax_subgenre_video_loading",
                        data: {type: "genre", boundary: boundary, id: id},
                        success: function(html) {
                            $("#current_page").html(boundary);
                            var total_page = $("#total_page").html();
                            var current_page = $("#current_page").html();
                            //alert( $("#total_page").html()+$("#current_page").html());
                            if (total_page == current_page)
                            {
                                $("#load_more").hide();
                            }
                            boundary = boundary + 1;

                            $('#loader_image').hide();
                            $('#song-list').append(html);
                            NProgress.done(true);
                        }
                    });

                });
            }
        });
    });

    // for download
    $("body").on("click", ".download", function() {
        var slug = $(this).attr("id");
        window.location.href = base_url + "vip/downloads/" + slug;
    });
    // end of the download


    // for crate functionality

    $("body").on("click", '.add_to_crate', function() {
        var flag;
        if ($(this).hasClass("fa-plus-circle"))
        {
            $(this).removeClass("fa-plus-circle").addClass("fa-minus-circle");
            flag = 'add';
        }
        else if ($(this).hasClass("fa-minus-circle"))
        {
            $(this).removeClass("fa-minus-circle").addClass("fa-plus-circle");
            flag = 'remove';
        }
        var id = $(this).attr('id');
        $.ajax({
            type: "POST",
            url: base_url + "vip/addTocrate/",
            data: {flag: flag, id : id},
            success: function(data) {
                $('#crate_count').html(data);
            }
        });
    });

    // end of the crate functionality



});






