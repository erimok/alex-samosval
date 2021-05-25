<?php

/** @var \App\Models\CallToAction */
if (empty($cta)) return;

$link = !empty($contacts) && !empty($contacts->getPrimaryPhone())
    ? 'tel:' . $contacts->getPrimaryPhone()
    : '#';

?><div class="bg-gray-50">
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            <span class="block">
                <?php echo $cta->getHeading(); ?>
            </span>
            <span class="block text-yellow-500">
                <?php echo $cta->getSubheading(); ?>
            </span>
        </h2>
        <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
            <div class="inline-flex rounded-md shadow">
<!--                TODO -->
                <a href="<?php echo $link; ?>"
                   class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-yellow-500 hover:bg-yellow-600">
                    Позвонить
                </a>
            </div>
        </div>
    </div>
</div><?php