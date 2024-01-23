<?php

include_once get_stylesheet_directory() . "/services/Blog/Pagination.php";

global $wp;

$blogPages = get_field('blog_pages');
$blogPosts = get_field('blog_posts');

$posts = array_merge($blogPages, $blogPosts);

$currentPage = get_query_var('paged') ? get_query_var('paged') : 1;
$countPosts = count($posts);
$countPostsPerPage = 12;

$countPages = ceil($countPosts / $countPostsPerPage);

$sliceArrayPosts = array_slice($posts, ($currentPage - 1) * $countPostsPerPage, $countPostsPerPage);

$blogPagination = new BlogPagination($countPages, $currentPage);

?>

<?php if ($sliceArrayPosts): ?>
    <div class="max-w-[960px] mx-auto px-[15px] grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-7">
        <?php foreach ($sliceArrayPosts as $post): ?>
            <div>
                <?php if ($post->post_type === 'page'): ?>
                    <div class="relative w-[100%] pb-[134.52%]">
                        <a
                                href="<?= get_permalink($post->ID) ?>"
                                class="absolute w-[100%] h-[100%] flex bg-cover bg-no-repeat bg-center"
                                title="<?= $post->post_title ?>"
                                style="background-image: url('<?= get_the_post_thumbnail_url($post->ID) ?>');"
                                target="_blank"
                        ></a>
                    </div>
                <?php elseif ($post->post_type === 'post'): ?>
                    <div>
                        <div class="relative w-[100%] pb-[55.168%]">
                            <a
                                    href="<?= get_permalink($post->ID) ?>"
                                    class="absolute w-[100%] h-[100%] flex bg-cover bg-no-repeat bg-center"
                                    title="<?= $post->post_title ?>"
                                    style="background-image: url('<?= get_the_post_thumbnail_url($post->ID) ?>');"
                                    target="_blank"
                            ></a>
                        </div>
                        <div class="relative w-[100%] pb-[75%] border-t-0 border-l border-b border-r border-[#e5e5e5] border-solid">
                            <div class="p-[30px] absolute w-[100%] h-[100%] flex box-border justify-center">
                                <a
                                        href="<?= get_permalink($post->ID) ?>"
                                        class="text-[16px] text-[#555] font-normal text-center"
                                        title="<?= $post->post_title ?>"
                                        target="_blank"
                                ><?= $post->post_title ?></a>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>

    <?php get_template_part('partials/blog/pagination', null, [
        'paginationList' => $blogPagination->getPaginationList()
    ]); ?>
<?php endif; ?>