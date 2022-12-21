<a class="inline-block py-[8px] px-[28px] brand-button-gradient rounded-[3px] border-0 group relative overflow-hidden"
   href="<?= $args['footer_button']['url']; ?>"
   target="<?= $args['footer_button']['target'] ?: '_self'; ?>"
>
    <div class="absolute inset-0 group-hover:opacity-0 opacity-100 transition-opacity duration-500"
         style="background-image: url('<?= get_stylesheet_directory_uri(); ?>/page-digital-services/button-bg.svg')"
    ></div>
    <span class="relative text-white text-[16px] leading-[1.51] font-[700] tracking-[0.1em] uppercase"><?= $args['footer_button']['title']; ?></span>
</a>