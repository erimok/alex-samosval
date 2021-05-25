<?php

/** @var \App\Models\Service[]|null */
if (empty($services)) $services = null;

?><section class="py-20 bg-white" id="services">
    <div class="md:max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
            <h2 class="text-base text-yellow-500 font-semibold tracking-wide uppercase">Услуги</h2>
            <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                «АвтоБыстроГруз»
            </p>
            <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto pb-10">
                предоставляет следующие услуги:
            </p>
        </div>

        <div class="md:grid md:grid-flow-col md:grid-rows-4 lg:grid-rows-3 md:w-full md:gap-3">
            <?php foreach ($services as $service): ?>
                <a href="#service-<?php echo $service->getId(); ?>"
                   class="block bg-gray-50 rounded-xl p-0 mb-4 shadow-sm hover:shadow-md sm:w-full">
                    <img class="w-full rounded-t-xl mx-auto"
                         src="<?php echo $service->getImage(); ?>"
                         alt="<?php echo $service->getTitle(); ?>"
                         loading="lazy">
                    <div class="pt-6 p-8 text-center md:text-left space-y-4">
                        <h3 class="text-lg font-semibold">
                            <?php echo $service->getTitle(); ?>
                        </h3>
                        <p class="text-gray-500">
                            <?php echo $service->getExcerpt(); ?>
                        </p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>

        <?php /*
        <div class="mt-10">
            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
                <?php foreach ($services as $service): ?>
                <div class="relative">
                    <dt>
                        <div class="absolute flex items-center justify-center h-12 w-12 rounded-md bg-yellow-500 text-white">
                            <!-- Heroicon name: outline/globe-alt -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <h3 class="ml-16 text-lg leading-6 font-medium text-gray-900">
                            <a href="#service-<?php echo $service->getId(); ?>">
                                <?php echo $service->getTitle(); ?>
                            </a>
                        </h3>
                    </dt>
                    <dd class="mt-2 ml-16 text-base text-gray-500">
                        <?php echo $service->getExcerpt(); ?>
                    </dd>
                </div>
                <?php endforeach; ?>
            </dl>
        </div>
        */ ?>
    </div>
</section><?php