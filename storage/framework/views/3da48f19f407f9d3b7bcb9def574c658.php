<div class="w-full">

    
    <?php if (isset($component)) { $__componentOriginala21f49a74cfebdbb98a47509c8a19010 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala21f49a74cfebdbb98a47509c8a19010 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.loading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.loading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala21f49a74cfebdbb98a47509c8a19010)): ?>
<?php $attributes = $__attributesOriginala21f49a74cfebdbb98a47509c8a19010; ?>
<?php unset($__attributesOriginala21f49a74cfebdbb98a47509c8a19010); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala21f49a74cfebdbb98a47509c8a19010)): ?>
<?php $component = $__componentOriginala21f49a74cfebdbb98a47509c8a19010; ?>
<?php unset($__componentOriginala21f49a74cfebdbb98a47509c8a19010); ?>
<?php endif; ?>

    
    <div class="lg:flex lg:items-center lg:justify-between mb-14">
    
        <div class="min-w-0 flex-1">

            
            <h2 class="text-lg font-bold leading-7 text-zinc-700 dark:text-gray-50 sm:truncate sm:text-xl sm:tracking-tight">
                <?php echo app('translator')->get('messages.t_countries'); ?>
            </h2>

            
            <div class="mt-3 flex flex-col sm:flex-row sm:flex-wrap sm:space-x-6 rtl:space-x-reverse">
                <ol class="inline-flex items-center mb-3 space-x-1 md:space-x-3 md:rtl:space-x-reverse sm:mb-0">

                    
                    <li>
                        <div class="flex items-center">
                            <a href="<?php echo e(url('/'), false); ?>" class="text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-zinc-300 dark:hover:text-white">
                                <?php echo app('translator')->get('messages.t_home'); ?>
                            </a>
                        </div>
                    </li>
    
                    
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <a href="<?php echo e(admin_url('/'), false); ?>" class="ltr:ml-1 rtl:mr-1 text-sm font-medium text-gray-700 hover:text-primary-600 md:ltr:ml-2 md:rtl:mr-2 dark:text-zinc-300 dark:hover:text-white">
                                <?php echo app('translator')->get('messages.t_dashboard'); ?>
                            </a>
                        </div>
                    </li>
    
                    
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg aria-hidden="true" class="w-4 h-4 text-gray-400 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                            <span class="mx-1 text-sm font-medium text-gray-400 md:mx-2 dark:text-zinc-400">
                                <?php echo app('translator')->get('messages.t_countries'); ?>
                            </span>
                        </div>
                    </li>
    
                </ol>
            </div>
            
        </div>

        
        <div class="mt-5 flex lg:mt-0 lg:ltr::ml-4 lg:rtl:mr-4 justify-between">

            
            <a href="<?php echo e(admin_url('countries/create'), false); ?>" class="btn p-2.5 hover:shadow-none ring-slate-300 dark:ring-zinc-600 focus:ring-offset-2 focus:ring-offset-slate-300 dark:focus:ring-offset-zinc-600 space-x-2 rtl:space-x-reverse border">
                <?php if (isset($component)) { $__componentOriginal30b1ecc3bb8af1d000115fef1c04cca2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal30b1ecc3bb8af1d000115fef1c04cca2 = $attributes; } ?>
<?php $component = WireUi\View\Components\Icon::resolve(['name' => 'plus'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(WireUi\View\Components\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'w-6 h-6 text-gray-400 dark:text-zinc-300','variant' => 'solid','mini' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal30b1ecc3bb8af1d000115fef1c04cca2)): ?>
<?php $attributes = $__attributesOriginal30b1ecc3bb8af1d000115fef1c04cca2; ?>
<?php unset($__attributesOriginal30b1ecc3bb8af1d000115fef1c04cca2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal30b1ecc3bb8af1d000115fef1c04cca2)): ?>
<?php $component = $__componentOriginal30b1ecc3bb8af1d000115fef1c04cca2; ?>
<?php unset($__componentOriginal30b1ecc3bb8af1d000115fef1c04cca2); ?>
<?php endif; ?>
            </a>

        </div>

    </div>

    
    <ul role="list" class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-2 sm:gap-6 lg:grid-cols-4">

        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="col-span-1 flex card !rounded-md" wire:key="admin-countries-<?php echo e($country->code, false); ?>">

                
                <div class="flex-shrink-0 flex items-center justify-center w-16 text-sm font-medium bg-slate-100 dark:bg-zinc-800 ltr:dark:border-r rtl:dark:border-l dark:border-zinc-700 ltr:rounded-l-md rtl:rounded-r-md">
                    <?php if(file_exists(public_path('vendor/blade-flags/country-' . strtolower($country->code) . '.svg'))): ?>
                        <img src="<?php echo e(countryFlag($country->code), false); ?>" alt="<?php echo e($country->name, false); ?>" class="h-6">
                    <?php else: ?>
                        <span><?php echo e($country->code, false); ?></span>
                    <?php endif; ?>
                </div>

                
                <div class="flex flex-1 items-center justify-between truncate">
                    <div class="flex-1 truncate px-4 py-2 text-xs+">

                        
                        <span class="font-semibold text-gray-900 hover:text-gray-600 dark:text-white block truncate pb-0.5">
                            <?php echo e($country->name, false); ?>

                        </span>

                        
                        <?php if($country->is_active): ?>
                            <p class="text-green-500 block text-xs">
                                <?php echo app('translator')->get('messages.t_enabled'); ?>
                            </p>
                        <?php else: ?>
                            <p class="text-red-500 block text-xs">
                                <?php echo app('translator')->get('messages.t_disabled'); ?>
                            </p>
                        <?php endif; ?>

                    </div>
                    <div class="flex-shrink-0 ltr:pr-2 rtl:pl-2">

                        
                        <a href="<?php echo e(admin_url('countries/edit/' . $country->id), false); ?>" class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white bg-transparent text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:bg-transparent dark:ring-offset-zinc-800">
                            <svg class="h-4.5 w-4.5 fill-slate-500 dark:fill-zinc-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5,3C3.89,3 3,3.89 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V12H19V19H5V5H12V3H5M17.78,4C17.61,4 17.43,4.07 17.3,4.2L16.08,5.41L18.58,7.91L19.8,6.7C20.06,6.44 20.06,6 19.8,5.75L18.25,4.2C18.12,4.07 17.95,4 17.78,4M15.37,6.12L8,13.5V16H10.5L17.87,8.62L15.37,6.12Z" /></svg>
                        </a>

                    </div>
                </div>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </ul>

    
    <?php if($countries->hasPages()): ?>
        <div class="bg-gray-100 px-4 py-5 sm:px-6 rounded-lg flex justify-center mt-8">
            <?php echo $countries->links('pagination::tailwind'); ?>

        </div>
    <?php endif; ?>

</div>





<?php /**PATH /home/gigfly.in/public_html/resources/views/livewire/admin/countries/countries.blade.php ENDPATH**/ ?>