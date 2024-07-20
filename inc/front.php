<?php

//ajax search
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
    ?>
    <script type="text/javascript">
        function fetch(){

            $("#result").html('');
            key = jQuery('#query_search').val();
            if(!key){
                $("#result").html('');
                return;
            }
            jQuery.ajax({
                url: '<?php echo admin_url('admin-ajax.php'); ?>',
                type: 'post',
                data: { action: 'search_film', keyword:key ,limit : 5 },
                success: function(res) {
                    $("#result").html('');
                    let data = JSON.parse(res);
                    $.each(data, function(key, value){
                        $('#result').append('<a href="'+value.slug+'"><div class="rowsearch"> <div class="column left"> <img src="'+value.image+'" width="40" /> </div> <div class="column right"><p> '+value.title+' ' + '</p> '+value.original_title+'| '+value.year+' </div></a> </div>' )
                    });
                }
            });
            document.body.addEventListener("click", function (event) {
                $("#result").html('');
            });

        }
    </script>

    <?php
}

//search fim
function mySearchFilter($query) {
    if ($query->is_search) {
        if (!isset($_GET['filter'])){
            $_GET['filter']['categories'] ='';
            $_GET['filter']['genres'] ='';
            $_GET['filter']['regions'] ='';
            $_GET['filter']['years'] ='';
        }
        $categories = $_GET['filter']['categories'];
        $years = $_GET['filter']['years'];
        $genres = $_GET['filter']['genres'];
        $regions = $_GET['filter']['regions'];
        $query->set('post_type', 'ophim');
        $args = array();
        if($categories) {
            $args[] = array(
                'taxonomy' => 'ophim_categories',
                'field' => 'slug',
                'terms' => $categories,
            );
        }
        if($years) {
            $args[] = array(
                'taxonomy' => 'ophim_years',
                'field' => 'slug',
                'terms' => $years,
            );
        }
        if($genres) {
            $args[] = array(
                'taxonomy' => 'ophim_genres',
                'field' => 'slug',
                'terms' => $genres,
            );
        }
        if($regions) {
            $args[] = array(
                'taxonomy' => 'ophim_regions',
                'field' => 'slug',
                'terms' => $regions,
            );
        }
        $query->set('tax_query',$args);
    };
    return $query;
};

add_filter('pre_get_posts','mySearchFilter');

function op_get_actors_custom($limit = 10,$end ='')
{
    $getslug = get_option('ophim_slug_actors');
    if($getslug){
        $slug = $getslug;
    }else{
        $slug = 'actors';
    }
    global $post;
    $html = "";
    $actors = get_the_terms($post->ID, "ophim_actors");
    if (is_array($actors)) {
        foreach (array_slice($actors, 0, $limit) as $actor) {
            $image = get_template_directory_uri().'/assets/images/cast-image.png';
            $html .= "<li><a href=\"" . home_url($slug . "/" . $actor->slug) ."><figure> <span class=\"Objf\"><img src='".$image."'></span><figcaption>" . $actor->name . "</figcaption></figure></a></li>".$end;
        }
    }
    return $html;
}