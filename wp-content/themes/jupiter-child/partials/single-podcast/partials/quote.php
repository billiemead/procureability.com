<?php

$quoteText = get_field('quote_text');
$quoteAuthor = get_field('quote_author');

?>

<?php if ($quoteText && $quoteAuthor): ?>
    <p
        class="text-center bg-[#0098AE08] border-[0.4px] border-solid border-[#0098AE] rounded-[10px] py-[24px] px-[32px] mb-[20px] text-[#0098AE] font-poppins text-[16px] font-medium leading-[1.66] tracking-[0.7px]"
        style="font-family: Poppins;"
    >
        <?= $quoteText ?>
        <span
            class="text-[#61636B] block text-center font-poppins text-[16px] font-normal leading-[1.6]"
        ><?= $quoteAuthor ?></span>
    </p>
<?php endif; ?>