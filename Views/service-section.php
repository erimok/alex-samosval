<?php

/** @var \App\Models\Service */
if (empty($service)) return;

?><section class="py-24 bg-white" id="service-<?php echo $service->getId(); ?>">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2">
            <div class="pr-4">
                <img src="<?php echo $service->getImage(); ?>"
                     alt="<?php echo $service->getTitle(); ?>"
                     loading="lazy"
                     class="rounded-xl">
            </div>
            <div class="lg:text-left px-4">
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    <?php echo $service->getTitle(); ?>
                </h3>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    <?php echo $service->getExcerpt(); ?>
                </p>
                <div class="mt-8 text-gray-500">
                    <?php echo $service->getContent(); ?>
                </div>
                <div class="mt-4">
                    <p class="text-gray-500">Стоимость:
                        <span class="text-base text-yellow-500 font-semibold tracking-wide">
                            <?php echo $service->getPrice(); ?>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><?php