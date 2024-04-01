<div class="grid grid-cols-1 sm:grid-cols-2 gap-[20px]">
    <div class="p-[32px] rounded-[8px] border border-solid border-[rgba(59,161,124,0.40)] bg-[#fff]">
        <div class="flex &>svg:h-[30px] &>svg:w-auto mb-[16px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="47" height="32" viewBox="0 0 47 32" fill="none">
                <path d="M46 1L15.8376 31L1 16.2417" stroke="#3BA17C" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="ml-[16px] text-[#3BA17C] font-poppins text-[24px] font-medium leading-normal tracking-[1.92px] uppercase">Do</div>
        </div>

        <div class="text-[#777] font-poppins font-normal leading-[1.625]"><?= $args['do_text'] ?></div>
    </div>

    <div class="p-[32px] rounded-[8px] border border-solid border-[rgba(229,80,37,0.40)] bg-[#fff]">
        <div class="flex &>svg:h-[30px] &>svg:w-auto mb-[16px]">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path d="M1 1L31 31M1 31L31 1" stroke="#E55025" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="ml-[16px] text-[#E55025] font-poppins text-[24px] font-medium leading-normal tracking-[1.92px] uppercase">Don't</div>
        </div>

        <div class="text-[#777] font-poppins font-normal leading-[1.625]"><?= $args['dont_text'] ?></div>
    </div>
</div>