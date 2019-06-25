{"changed":false,"filter":false,"title":"single.php","tooltip":"/WordPress/wp-content/themes/demo-child/single.php","value":"<?php get_header(); ?>\n    <div id=\"content\" class=\"clearfix\">\n        <aside>\n            <?php get_sidebar(); ?>\n        </aside>\n        <article>\n            <?php if ( have_posts() ) : ?>\n                <?php while ( have_posts() ) : the_post(); ?>\n            \n            <section <?php post_class(); //投稿の種類に応じたクラスを付加 ?>>\n                <h1 class=\"blog-title-article\"><?php the_title(); //投稿（固定ページ）のタイトルを表示 ?></h1>\n                <div class=\"blog-wrap\">\n                    <div class=\"date\"><?php the_time('Y.m.j'); //投稿日時を表示 パラメータで書式を指定 ?></div>\n                    <div class=\"category\">カテゴリー：<?php the_category(','); //投稿の属するカテゴリー名を全て表示 パラメータで区切り文字を指定 ?></div>\n                </div>\n                <div class=\"blog-body\">\n                    <?php the_content(); ?>\n                      <?php the_meta(); //カスタムフィールドのメタデータをリスト表示 ?>\n\n                </div>\n            </section>\n            <section class=\"clearfix\">\n                <div class=\"leftcol\"><?php next_post_link('%link', '&laquo: 新しい投稿へ'); //新しい記事へのリンクを表示 ?></div>\n                <div class=\"righttcol\"><?php previous_post_link('%link', '古い投稿へ &raquo'); //古い記事へのリンクを表示 ?></div>\n            </section>\n                <div id=\"comment-container\"><?php comments_template(); //コメントテンプレートを取得  ?></div>\n                \n                <?php endwhile; ?>\n            <?php else : ?>\n            \n            <h2>投稿が見つかりません。</h2>\n            <p><a href=\"<?php echo home_url(); ?>\">トップページに戻る</a></p>\n            \n            <?php endif; ?>\n        </article>\n    </div>\n<?php get_footer();","undoManager":{"mark":-1,"position":-1,"stack":[]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":23,"column":19},"end":{"row":23,"column":19},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1552186774006}