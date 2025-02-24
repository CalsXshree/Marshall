<div
    class=" mb-10 w-full flex flex-col items-center divide-y divide-outline overflow-hidden rounded-radius border border-outline bg-surface-alt/40 text-on-surface dark:divide-outline-dark dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:text-on-surface-dark">
    <div x-data="{ isExpanded: false }">
        <div class="text-center mt-16">
            <h3 class="uppercase text-xg font-semibold mb-2">frequently asked questions</h3>
            <h4 class="uppercase text-4xl font-serif mb-7">List your frequently asked <br>questions below</h4>
            <br>

            <div class="h-[1px] w-6/6 bg-gray-800"></div>

            <button id="controlsAccordionItemOne" type="button"
                class="flex w-full items-center justify-between gap-4 bg-surface-alt p-4 text-left underline-offset-2 hover:bg-surface-alt/75 focus-visible:bg-surface-alt/75 focus-visible:underline focus-visible:outline-hidden dark:bg-surface-dark-alt dark:hover:bg-surface-dark-alt/75 dark:focus-visible:bg-surface-dark-alt/75"
                aria-controls="accordionItemOne" x-on:click="isExpanded = ! isExpanded"
                x-bind:class="isExpanded ?
                    'text-on-surface-strong dark:text-on-surface-dark-strong text-2xl font-normal font-semibold ' :
                    'text-on-surface dark:text-on-surface-dark font-medium'"
                x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
                <div class="flex">
                    <span class="style-script-regular text-3xl m-0 pr-3">01.</span>How far in advance should I book my
                    wedding photography?
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                    stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                    x-bind:class="isExpanded ? 'rotate-180' : ''">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>

            <div class="h-[1px] w-6/6 bg-gray-800"></div>

            <div x-cloak x-show="isExpanded" id="accordionItemOne" role="region"
                aria-labelledby="controlsAccordionItemOne" x-collapse>
                <div class="p-4 sm:text-xg text-lg font-normal text-center">
                    We recommend booking as early as possible, ideally 10-16 months
                    in advance, to ensure<br> availability for your special day.
                    However, don't hesitate to reach out for last-minute
                    inquiries as we <br>occasionally have open dates! Book your date now! <br>.
                </div>
            </div>
        </div>
        <div x-data="{ isExpanded: false }">
            <button id="controlsAccordionItemTwo" type="button"
                class="flex w-full items-center justify-between gap-4 bg-surface-alt p-4 text-left underline-offset-2 hover:bg-surface-alt/75 focus-visible:bg-surface-alt/75 focus-visible:underline focus-visible:outline-hidden dark:bg-surface-dark-alt dark:hover:bg-surface-dark-alt/75 dark:focus-visible:bg-surface-dark-alt/75"
                aria-controls="accordionItemTwo" x-on:click="isExpanded = ! isExpanded"
                x-bind:class="isExpanded ?
                    'text-on-surface-strong dark:text-on-surface-dark-strong  text-2xl font-normal font-semibold' :
                    'text-on-surface dark:text-on-surface-dark font-medium'"
                x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
                <div class="flex">
                    <span class="style-script-regular text-3xl m-0 pr-3">02. </span>Do you offer engagement or
                    pre-wedding photo sessions?
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                    stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                    x-bind:class="isExpanded ? 'rotate-180' : ''">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>

            <div class="h-[1px] w-6/6 bg-gray-800"></div>

            <div x-cloak x-show="isExpanded" id="accordionItemTwo" role="region"
                aria-labelledby="controlsAccordionItemTwo" x-collapse>
                <div class="p-4 sm:text-xg text-lg font-normal text-center ">
                    Absolutely! Engagement or pre-wedding sessions are a wonderful way to get<br> comfortable in front
                    of the camera and create beautiful,
                    intimate images <br>before your big day. These sessions can be added to your custom wedding
                    <br> collection or as is.
                </div>
            </div>
        </div>
        <div x-data="{ isExpanded: false }">
            <button id="controlsAccordionItemThree" type="button"
                class="flex w-full items-center justify-between gap-4 bg-surface-alt p-4 text-left underline-offset-2 hover:bg-surface-alt/75 focus-visible:bg-surface-alt/75 focus-visible:underline focus-visible:outline-hidden dark:bg-surface-dark-alt dark:hover:bg-surface-dark-alt/75 dark:focus-visible:bg-surface-dark-alt/75"
                aria-controls="accordionItemThree" x-on:click="isExpanded = ! isExpanded"
                x-bind:class="isExpanded ?
                    'text-on-surface-strong dark:text-on-surface-dark-strong  text-2xl font-normal font-semibold' :
                    'text-on-surface dark:text-on-surface-dark font-medium'"
                x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
                <div class="flex">
                    <span class="style-script-regular text-3xl m-0 pr-3">03. </span> Can we order prints or albums
                    directly through you?
                </div> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                    stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                    x-bind:class="isExpanded ? 'rotate-180' : ''">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>

            <div class="h-[1px] w-6/6 bg-gray-800"></div>

            <div x-cloak x-show="isExpanded" id="accordionItemThree" role="region"
                aria-labelledby="controlsAccordionItemThree" x-collapse>
                <div class="p-4 sm:text-xg text-lg font-normal text-center ">
                    Yes, you can! We offer a variety of high-quality print options and custom-designed <br>Heirloom
                    Albums.

                    These are great ways to preserve your memories and can be<br> ordered directly
                    through your online gallery or during our pre-wedding consultation.

                </div>
            </div>
        </div>
        <div x-data="{ isExpanded: false }">
            <button id="controlsAccordionItemThree" type="button"
                class="flex w-full items-center justify-between gap-4 bg-surface-alt p-4 text-left underline-offset-2 hover:bg-surface-alt/75 focus-visible:bg-surface-alt/75 focus-visible:underline focus-visible:outline-hidden dark:bg-surface-dark-alt dark:hover:bg-surface-dark-alt/75 dark:focus-visible:bg-surface-dark-alt/75"
                aria-controls="accordionItemThree" x-on:click="isExpanded = ! isExpanded"
                x-bind:class="isExpanded ?
                    'text-on-surface-strong dark:text-on-surface-dark-strong  text-2xl font-normal font-semibold' :
                    'text-on-surface dark:text-on-surface-dark font-medium'"
                x-bind:aria-expanded="isExpanded ? 'true' : 'false'">
                <div class="flex">
                    <span class="style-script-regular text-3xl m-0 pr-3 ">04. </span> How many photographers will
                    be
                    present on my wedding day?
                </div> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke-width="2"
                    stroke="currentColor" class="size-5 shrink-0 transition" aria-hidden="true"
                    x-bind:class="isExpanded ? 'rotate-180' : ''">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg>
            </button>

            <div class="h-[1px] w-6/6 bg-gray-800"></div>

            <div x-cloak x-show="isExpanded" id="accordionItemThree" role="region"
                aria-labelledby="controlsAccordionItemThree" x-collapse>
                <div class="p-4 sm:text-xg text-lg font-normal text-center">
                    We always provide with a team of two photographers on your wedding days and we can add <br>
                    more depending on your event and schedule. We believe that having <br>
                    a team is the best way to provide an elevated experience for <br>
                    our couples while capturing all of your meaningful moments.
                </div>
            </div>
            <div class="text-sm font-bold text-center mt-6 mb-6"><i> <a href="#">More questions? Contact
                        Marshall
                        Photographs</a></i></div>
            <div class="mb-16"></div>
        </div>
    </div>
</div>
