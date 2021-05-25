<?php

/** @var \App\Models\Menu */
if (empty($menu)) return;

?><header class="pb-10">
    <nav class="bg-gray-50 shadow-sm fixed z-50 w-full"
         x-data="{ isOpen: false }"
         @keydown.escape="isOpen = false">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="text-md font-medium">
                        <?php echo $menu->getName(); ?>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <?php foreach ($menu->getMenuItems() as $item): ?>
                            <a href="<?php echo $item->getLink(); ?>"
                               class="text-gray-500 hover:bg-yellow-600 hover:text-white px-3 py-2 rounded-md text-sm font-medium">
                                <?php echo $item->getTitle(); ?>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6 font-semibold text-gray-500">
                        <svg class="w-6 h-6 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <a href="tel:<?php echo $contacts->getPrimaryPhone() ?? ''; ?>"
                           class="font-semibold text-yellow-500 hover:text-yellow-600">
                            <?php echo $contacts->getPrimaryPhone(); ?>
                        </a>
                    </div>
                </div>
                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button @click="isOpen = !isOpen"
                            type="button"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-yellow-800 focus:ring-white"
                            aria-controls="mobile-menu" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6"
                             :class="{ 'block': isOpen, 'hidden': !isOpen }"
                             fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                        <svg class="h-6 w-6"
                             :class="{ 'hidden': isOpen, 'block': !isOpen }"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="md:hidden"
             :class="{ 'block shadow-md': isOpen, 'hidden': !isOpen }"
             id="mobile-menu">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <?php foreach ($menu->getMenuItems() as $item): ?>
                    <a href="<?php echo $item->getLink(); ?>"
                       class="text-gray-500 hover:bg-yellow-600 hover:text-white block px-3 py-2 rounded-md text-sm font-medium">
                        <?php echo $item->getTitle(); ?>
                    </a>
                <?php endforeach; ?>
            </div>
            <div class="pt-4 pb-3 border-t">
                <div class="flex items-center px-5 text-gray-500">
                    <svg class="w-6 h-6 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                    <a href="tel:<?php echo $contacts->getPrimaryPhone() ?? ''; ?>"
                       class="font-semibold text-yellow-500 hover:text-yellow-600">
                        <?php echo $contacts->getPrimaryPhone() ?? ''; ?>
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
<?php