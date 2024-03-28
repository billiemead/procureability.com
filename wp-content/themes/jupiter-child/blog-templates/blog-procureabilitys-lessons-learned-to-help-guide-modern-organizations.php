<?php
/*
 * Template Name: Blog ProcureAbility's Lessons Learned to help guide Modern Organizations
 * Template Post Type: post
 */

$heroSubtitle = get_field('hero_subtitle');
$heroTitle = get_field('hero_title');
$heroImage = get_field('hero_image');

$contentBlock1Text = get_field('content_block_1_text');

$contentBlock2Title = get_field('content_block_2_title');
$contentBlock2DoDont = get_field('content_block_2_do_dont');
$contentBlock2Content = get_field('content_block_2_content');

$contentBlock3Title = get_field('content_block_3_title');
$contentBlock3DoDont = get_field('content_block_3_do_dont');
$contentBlock3Content = get_field('content_block_3_content');

$contentBlock4Title = get_field('content_block_4_title');
$contentBlock4DoDont = get_field('content_block_4_do_dont');
$contentBlock4Content = get_field('content_block_4_content');

$contentBlock5Title = get_field('content_block_5_title');
$contentBlock5DoDont = get_field('content_block_5_do_dont');
$contentBlock5Content1 = get_field('content_block_5_content_1');
$contentBlock5GrayIconText = get_field('content_block_5_gray_icon_text');
$contentBlock5Content2 = get_field('content_block_5_content_2');

$contentBlock6Title = get_field('content_block_6_title');
$contentBlock6DoDont = get_field('content_block_6_do_dont');
$contentBlock6Content = get_field('content_block_6_content');

$contentBlock7Title = get_field('content_block_7_title');
$contentBlock7DoDont = get_field('content_block_7_do_dont');
$contentBlock7Content1 = get_field('content_block_7_content_1');
$contentBlock7GrayIconText = get_field('content_block_7_gray_icon_text');
$contentBlock7Content2 = get_field('content_block_7_content_2');

$contentBlock8Background = get_field('content_block_8_background');
$contentBlock8Title = get_field('content_block_8_title');
$contentBlock8Content = get_field('content_block_8_content');

$authorPhoto = get_field('author_photo');
$authorName = get_field('author_name');
$authorLink = get_field('author_link');

$contributorsList = get_field('contributors_list');

$sources = get_field('sources');

$references = get_field('references');

$contactTitle = get_field('cta_title');
$contactText = get_field('cta_text');
$contactButtonText = get_field('cta_button_text');
$contactButtonLink = get_field('cta_button_link');
$contactBackgroundImage = get_field('cta_background_image');
?>

<?php get_header(); ?>

<section class="pt-[64px] pb-[40px] w-[100%] max-w-[100%] box-border">
    <?php get_template_part('blog-templates/partials/blog', 'hero', [
        'subtitle' => $heroSubtitle,
        'title' => $heroTitle,
        'image' => $heroImage,
        'content_width' => '52%',
        'image_width' => '44%'
    ]); ?>
</section>

<section class="max-w-[970px] w-[100%] px-[15px] mx-auto box-border [&_a]:border-b [&_a]:border-[#0098AE] [&_a]:border-dotted [&_a]:text-[#0098AE] [&_a:hover]:border-b-0 [&_sup]:text-[10px] [&_sup]:top-[1px]">
    <div class="mb-[56px]">
        <?php get_template_part('blog-templates/partials/blog', 'text-block', ['content' => $contentBlock1Text]); ?>
    </div>

    <div class="mb-[56px]">
        <?php get_template_part('blog-templates/partials/blog', 'section-title', ['title' => $contentBlock2Title]); ?>

        <div class="mb-[24px]">
            <?php get_template_part('blog-templates/partials/blog', 'do-don\'t', [
                'do_text' => $contentBlock2DoDont['do_text'],
                'dont_text' => $contentBlock2DoDont['dont_text']
            ]); ?>
        </div>

        <?php get_template_part('blog-templates/partials/blog', 'text-block', ['content' => $contentBlock2Content]); ?>
    </div>

    <div class="mb-[56px]">
        <?php get_template_part('blog-templates/partials/blog', 'section-title', ['title' => $contentBlock3Title]); ?>

        <div class="mb-[24px]">
            <?php get_template_part('blog-templates/partials/blog', 'do-don\'t', [
                'do_text' => $contentBlock3DoDont['do_text'],
                'dont_text' => $contentBlock3DoDont['dont_text']
            ]); ?>
        </div>

        <?php get_template_part('blog-templates/partials/blog', 'text-block', ['content' => $contentBlock3Content]); ?>
    </div>

    <div class="mb-[56px]">
        <?php get_template_part('blog-templates/partials/blog', 'section-title', ['title' => $contentBlock4Title]); ?>

        <div class="mb-[24px]">
            <?php get_template_part('blog-templates/partials/blog', 'do-don\'t', [
                'do_text' => $contentBlock4DoDont['do_text'],
                'dont_text' => $contentBlock4DoDont['dont_text']
            ]); ?>
        </div>

        <?php get_template_part('blog-templates/partials/blog', 'text-block', ['content' => $contentBlock4Content]); ?>
    </div>

    <div class="mb-[56px]">
        <?php get_template_part('blog-templates/partials/blog', 'section-title', ['title' => $contentBlock5Title]); ?>

        <div class="mb-[24px]">
            <?php get_template_part('blog-templates/partials/blog', 'do-don\'t', [
                'do_text' => $contentBlock5DoDont['do_text'],
                'dont_text' => $contentBlock5DoDont['dont_text']
            ]); ?>
        </div>

        <div class="mb-[16px]">
            <?php get_template_part('blog-templates/partials/blog', 'text-block', ['content' => $contentBlock5Content1]); ?>
        </div>

        <div class="mb-[16px]">
            <?php get_template_part('blog-templates/partials/blog', 'gray-icon-text', [
                'icon' => $contentBlock5GrayIconText['icon']['url'],
                'title' => $contentBlock5GrayIconText['title'],
                'text' => $contentBlock5GrayIconText['text']
            ]); ?>
        </div>

        <div>
            <?php get_template_part('blog-templates/partials/blog', 'text-block', ['content' => $contentBlock5Content2]); ?>
        </div>
    </div>

    <div class="mb-[56px]">
        <?php get_template_part('blog-templates/partials/blog', 'section-title', ['title' => $contentBlock6Title]); ?>

        <div class="mb-[24px]">
            <?php get_template_part('blog-templates/partials/blog', 'do-don\'t', [
                'do_text' => $contentBlock6DoDont['do_text'],
                'dont_text' => $contentBlock6DoDont['dont_text']
            ]); ?>
        </div>

        <?php get_template_part('blog-templates/partials/blog', 'text-block', ['content' => $contentBlock6Content]); ?>
    </div>

    <div class="mb-[56px]">
        <?php get_template_part('blog-templates/partials/blog', 'section-title', ['title' => $contentBlock7Title]); ?>

        <div class="mb-[24px]">
            <?php get_template_part('blog-templates/partials/blog', 'do-don\'t', [
                'do_text' => $contentBlock7DoDont['do_text'],
                'dont_text' => $contentBlock7DoDont['dont_text']
            ]); ?>
        </div>

        <div class="mb-[16px]">
            <?php get_template_part('blog-templates/partials/blog', 'text-block', ['content' => $contentBlock7Content1]); ?>
        </div>

        <div class="mb-[16px]">
            <?php get_template_part('blog-templates/partials/blog', 'gray-icon-text', [
                'icon' => $contentBlock7GrayIconText['icon']['url'],
                'title' => $contentBlock7GrayIconText['title'],
                'text' => $contentBlock7GrayIconText['text']
            ]); ?>
        </div>

        <div>
            <?php get_template_part('blog-templates/partials/blog', 'text-block', ['content' => $contentBlock7Content2]); ?>
        </div>
    </div>
</section>

<section class="py-[56px] bg-no-repeat bg-cover bg-right" style="background-image: url(<?= $contentBlock8Background['url'] ?>);">
    <div class="max-w-[970px] w-[100%] px-[15px] mx-auto box-border">
        <h2 class="text-[#0098AE] font-poppins text-[24px] font-semibold leading-[1.4] mb-[16px]"><?= $contentBlock8Title ?></h2>

        <div>
            <?php get_template_part('blog-templates/partials/blog', 'text-block', ['content' => $contentBlock8Content]); ?>
        </div>
    </div>
</section>

<section class="pt-[56px] pb-[72px]">
    <div class="max-w-[970px] w-[100%] px-[15px] mx-auto box-border">
        <div class="mb-[24px]">
            <?php get_template_part('blog-templates/partials/blog', 'author', [
                'author_photo' => $authorPhoto,
                'author_name' => $authorName,
                'author_link' => $authorLink
            ]); ?>
        </div>

        <div class="mb-[24px]">
            <?php get_template_part('blog-templates/partials/blog', 'contributors', [
                'contributors_list' => $contributorsList
            ]); ?>
        </div>

        <div class="mb-[24px]">
            <?php get_template_part('blog-templates/partials/blog', 'sources', [
                'sources' => $sources
            ]); ?>
        </div>

        <div>
            <?php get_template_part('blog-templates/partials/blog', 'references', [
                'references' => $references
            ]); ?>
        </div>
    </div>
</section>

<section class="w-[100%]">
    <?php get_template_part('blog-templates/partials/blog', 'cta-text-left', [
        'title' => $contactTitle,
        'text' => $contactText,
        'button_text' => $contactButtonText,
        'button_link' => $contactButtonLink,
        'background_image' => $contactBackgroundImage
    ]); ?>
</section>

<?php get_footer(); ?>
