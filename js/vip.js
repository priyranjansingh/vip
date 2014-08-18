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
        success:function(data) {
            if(id == 'home') {
                $('#bjax-target').addClass('scrollable padder-lg w-f-md');
            } else {
                $('#bjax-target').removeClass('scrollable padder-lg w-f-md');
            }
            $('#bjax-target').html(data);
            $('#genre-list a[data-id=0]').addClass('active');
            $('a[song-genres]').on('click',function(e){
                
                var id = $(this).data('id');
                var type = $(this).data('type');
                genreId = id;
                getDataByGenre(type,id);
            });
            
            $('#selected-genres-data').scroll(function(){zz
                if($('#selected-genres-data')[0].scrollHeight - 50 < $('#selected-genres-data')[0].scrollTop + $('#selected-genres-data')[0].offsetHeight){
                    $('div#loadmoreajaxloader').show();
                    NProgress.inc();
                    setTimeout(function() {
                       
                        $.ajax({
                            url: "infinite-loading?type=" + type + "&id=" + genreId,
                            success: function(html){
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
$('a[my-ajax]').on('click',function(e){
    $('#left-menu li').removeClass('active');
    $(this).parent().addClass('active');
    var id = $(this).data('url');
    renderContent(id);
});

function getDataByGenre(type, id) {
    NProgress.inc();
    $('.scrollable')[2].scrollTop = 0;
    $('#genre-list a').removeClass('active');
    $('#genre-list a[data-id=' + id+ ']').addClass('active');
    $.ajax({
        url: 'by-genres?type='+ type +'&id=' + id,
        success:function(data) {
            $('#selected-genres-data').html(data);
            NProgress.done(true);
          
        }
    });
}



