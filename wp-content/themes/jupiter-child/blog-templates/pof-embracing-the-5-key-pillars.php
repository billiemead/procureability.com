<?php
/*
    Template Name: POF Embracing the 5 key pillars
    Template Post Type: post
*/

get_header();

$heroSubtitle = get_field('hero_subtitle');
$heroTitle = get_field('hero_title');
$heroImage = get_field('hero_image');

$quoteText = get_field('quote_text');
$quoteAuthor = get_field('quote_author');

$contentBlock1Text = get_field('content_block_1_text');
$contentBlock1AccentParagraph = get_field('content_block_1_accent_paragraph');

$contentBlock2Text = get_field('content_block_2_text');
$contentBlock2ListWithIcons = get_field('content_block_2_list_with_icons');

$contentBlock3Content = get_field('content_block_3_content');
$contentBlock3ListWithIcons = get_field('content_block_3_list_with_icons');
$contentBlock3AccentParagraph = get_field('content_block_3_accent_paragraph');

$contactTitle = get_field('contact_title');
$contactText = get_field('contact_text');
$contactButtonText = get_field('contact_button_text');
$contactButtonLink = get_field('contact_button_link');
$contactBackgroundImage = get_field('contact_background_image');

?>

<section class="pt-[64px] pb-[40px] w-[100%] max-w-[100%] box-border">
    <?php get_template_part('blog-templates/partials/blog', 'hero', [
        'subtitle' => $heroSubtitle,
        'title' => $heroTitle,
        'image' => $heroImage
    ]); ?>
</section>

<section class="max-w-[1076px] w-[100%] max-w-[100%] px-[15px] pb-[72px] mx-auto box-border">
    <?php get_template_part('blog-templates/partials/blog', 'quote', ['text' => $quoteText, 'author' => $quoteAuthor]); ?>

    <?php get_template_part('blog-templates/partials/blog', 'space', ['space' => '22px']); ?>

    <?php get_template_part('blog-templates/partials/blog', 'text-block', ['content' => $contentBlock1Text]); ?>

    <?php get_template_part('blog-templates/partials/blog', 'space', ['space' => '16px']); ?>

    <?php get_template_part('blog-templates/partials/blog', 'accent-paragraph-blue', ['content' => $contentBlock1AccentParagraph]); ?>

    <?php get_template_part('blog-templates/partials/blog', 'space', ['space' => '56px']); ?>

    <?php get_template_part('blog-templates/partials/blog', 'text-block', ['content' => $contentBlock2Text]); ?>

    <?php get_template_part('blog-templates/partials/blog', 'space', ['space' => '24px']); ?>

    <?php get_template_part('blog-templates/partials/blog', 'list-with-icons-type-1', ['list' => $contentBlock2ListWithIcons]); ?>

    <?php get_template_part('blog-templates/partials/blog', 'space', ['space' => '24px']); ?>

    <?php get_template_part('blog-templates/partials/blog', 'text-block', ['content' => $contentBlock3Content]); ?>

    <?php get_template_part('blog-templates/partials/blog', 'space', ['space' => '45px']); ?>

    <?php get_template_part('blog-templates/partials/blog', 'list-with-icons-type-2', ['list' => $contentBlock3ListWithIcons]); ?>

    <?php get_template_part('blog-templates/partials/blog', 'space', ['space' => '32px']); ?>

    <?php get_template_part('blog-templates/partials/blog', 'accent-paragraph-blue', ['content' => $contentBlock3AccentParagraph]); ?>

</section>

<section class="w-[100%]">
    <?php get_template_part('blog-templates/partials/blog', 'contact', [
        'title' => $contactTitle,
        'text' => $contactText,
        'button_text' => $contactButtonText,
        'button_link' => $contactButtonLink,
        'background_image' => $contactBackgroundImage
    ]); ?>
</section>

<?php get_footer(); ?>
