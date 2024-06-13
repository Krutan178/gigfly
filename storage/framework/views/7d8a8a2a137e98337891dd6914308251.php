<div class="w-full sm:mx-auto sm:max-w-2xl">
	<?php if (isset($component)) { $__componentOriginalefda5ddba01882262075fadff48950fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalefda5ddba01882262075fadff48950fb = $attributes; } ?>
<?php $component = Rawilk\FormComponents\Components\Form::resolve(['hasFiles' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Rawilk\FormComponents\Components\Form::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:submit' => 'update','class' => 'card px-4 py-10 sm:p-10 md:mx-0']); ?>

        
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

        
        <div class="flex items-center gap-4 border-b pb-6 border-slate-100 dark:border-zinc-700 mb-8">
            <div class="bg-slate-100 flex h-14 items-center justify-center rounded-full shrink-0 text-2xl text-slate-500 w-14 dark:bg-zinc-700 dark:text-zinc-400">
                <i class="ph-duotone ph-pencil-line"></i>
            </div>
            <div class="text-muted-700 block text-xl font-semibold">
                <h3 class="text-sm font-bold text-zinc-700 dark:text-white pb-2">
                    <?php echo app('translator')->get('messages.t_edit_level'); ?>
                </h3>
                <p class="text-xs font-medium text-slate-500 dark:text-zinc-400 tracking-wide">
                    <?php echo app('translator')->get('dashboard.t_create_edit_level_subtitle'); ?>
                </p>
            </div>
        </div>

        
        <div class="w-full">
            <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                
                <div class="col-span-12">
                    <div class="flex flex-col space-y-2 sm:space-y-3 lg:space-y-4 divide-y divide-slate-100 dark:divide-zinc-700">
                        <?php $__currentLoopData = supported_languages(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            
                            <div x-data="{ expanded: false }" class="bg-transparent font-medium" wire:key="translation-language-<?php echo e($lang->id, false); ?>">
    
                                
                                <div class="flex w-full items-center gap-2 <?php echo e(!$loop->first ? 'pt-4' : '', false); ?>">

                                    
                                    <div class="bg-transparent border-2 border-slate-200 dark:border-zinc-600 flex h-11 items-center justify-center relative rounded-full shrink-0 w-11">
                                        <img src="<?php echo e(asset('img/flags/rounded/'. $lang->country_code .'.svg'), false); ?>" alt="<?php echo e($lang->name, false); ?>" class="h-8 w-8 rounded-full">
                                    </div>

                                    
                                    <div>

                                        
                                        <p class="text-xs+ font-bold tracking-wide text-zinc-600 dark:text-gray-200" tag="h3">
                                            <?php echo e($lang->name, false); ?>

                                        </p>

                                        
                                        <p class="text-xs mt-0.5 text-slate-400 dark:text-gray-400">
                                            <?php echo app('translator')->get('dashboard.t_create_new_record_in_language_name', ['language' => strtolower($lang->name)]); ?>
                                        </p>

                                    </div>

                                    
                                    <div class="ms-auto">
                                        <button @click="expanded = !expanded" type="button" class="border border-slate-300 dark:border-zinc-600 dark:text-zinc-400 duration-100 ease-in flex h-10 hover:border-2 items-center justify-center rounded-full text-slate-400 transition-all w-10">
                                            <i class="ph-duotone ph-pencil-simple text-lg"></i>
                                        </button>
                                    </div>

                                </div>
    
                                
                                <div x-collapse x-show="expanded">
                                    <div class="grid grid-cols-12 md:gap-x-6 gap-y-5 mb-6 px-4 py-7 sm:px-5">
    
                                        
                                        <div class="col-span-12">
                                            <?php if (isset($component)) { $__componentOriginal0241d3f51813223308810020791c4a83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0241d3f51813223308810020791c4a83 = $attributes; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => ''.e(__('messages.t_title'), false).' ('.e(strtolower($lang->language_code), false).')','placeholder' => ''.e(__('messages.t_enter_title'), false).'','model' => 'title.'.e($lang->language_code, false).'','icon' => 'text-italic']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $attributes = $__attributesOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__attributesOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $component = $__componentOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__componentOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
                                        </div>
    
                                    </div>
                                </div>
    
                            </div>

                            
                            <?php $__errorArgs = ['title.' . $lang->language_code];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="!mt-1.5 text-xs text-red-500"><?php echo app('translator')->get('messages.t_toast_something_went_wrong'); ?></span>
                            <?php endif; ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                
                <div class="col-span-12 -mx-10">
                    <div class="h-px w-full bg-zinc-200 dark:bg-zinc-700 block"></div>
                </div>

                
                <div class="col-span-12" wire:ignore>
                    <?php if (isset($component)) { $__componentOriginal160a9f5614921a5c6d7bcbb94e63c998 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal160a9f5614921a5c6d7bcbb94e63c998 = $attributes; } ?>
<?php $component = App\View\Components\Forms\ColorPicker::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.color-picker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\ColorPicker::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_level_text_color')),'model' => 'text_color']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal160a9f5614921a5c6d7bcbb94e63c998)): ?>
<?php $attributes = $__attributesOriginal160a9f5614921a5c6d7bcbb94e63c998; ?>
<?php unset($__attributesOriginal160a9f5614921a5c6d7bcbb94e63c998); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal160a9f5614921a5c6d7bcbb94e63c998)): ?>
<?php $component = $__componentOriginal160a9f5614921a5c6d7bcbb94e63c998; ?>
<?php unset($__componentOriginal160a9f5614921a5c6d7bcbb94e63c998); ?>
<?php endif; ?>
                </div>

                
                <div class="col-span-12" wire:ignore>
                    <?php if (isset($component)) { $__componentOriginal160a9f5614921a5c6d7bcbb94e63c998 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal160a9f5614921a5c6d7bcbb94e63c998 = $attributes; } ?>
<?php $component = App\View\Components\Forms\ColorPicker::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.color-picker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\ColorPicker::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_level_bg_color')),'model' => 'bg_color']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal160a9f5614921a5c6d7bcbb94e63c998)): ?>
<?php $attributes = $__attributesOriginal160a9f5614921a5c6d7bcbb94e63c998; ?>
<?php unset($__attributesOriginal160a9f5614921a5c6d7bcbb94e63c998); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal160a9f5614921a5c6d7bcbb94e63c998)): ?>
<?php $component = $__componentOriginal160a9f5614921a5c6d7bcbb94e63c998; ?>
<?php unset($__componentOriginal160a9f5614921a5c6d7bcbb94e63c998); ?>
<?php endif; ?>
                </div>

                
                <div class="col-span-12 -mx-10">
                    <div class="h-px w-full bg-zinc-200 dark:bg-zinc-700 block"></div>
                </div>

                
                <div class="col-span-12">
                    <div class="py-2.5 px-3 rounded text-blue-700 bg-blue-50">
                        <div class="flex items-center gap-x-3">
                            <svg class="inline-block w-5 h-5 flex-none text-blue-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
                            <h3 class="font-semibold grow text-xs">
                                <?php echo app('translator')->get('dashboard.t_levels_order_explain'); ?>
                            </h3>
                        </div>
                    </div>
                </div>

                
                <div class="col-span-12">
                    <?php if (isset($component)) { $__componentOriginal0241d3f51813223308810020791c4a83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0241d3f51813223308810020791c4a83 = $attributes; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_level_order')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_enter_a_number')),'model' => 'order_number','icon' => 'list-numbers']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $attributes = $__attributesOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__attributesOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $component = $__componentOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__componentOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
                </div>

                
                <div class="col-span-12 -mx-10">
                    <div class="h-px w-full bg-zinc-200 dark:bg-zinc-700 block"></div>
                </div>

                
                <div class="col-span-12">

                    
                    <div class="w-full" wire:ignore>
                        <?php if (isset($component)) { $__componentOriginal763d7a4c405696a85a7a7ec4f959c809 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal763d7a4c405696a85a7a7ec4f959c809 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select','data' => ['required' => true,'componentId' => $this->__id,'name' => 'account_type','selectedValue' => $account_type,'label' => __('messages.t_account_type'),'placeholder' => __('messages.t_choose_account_type'),'data' => 'manual']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'component-id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($this->__id),'name' => 'account_type','selected_value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($account_type),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_account_type')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_choose_account_type')),'data' => 'manual']); ?>
                        
                            
                            <?php if (isset($component)) { $__componentOriginal38f82459cf8970d8f2d44f3eff89fff0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select-item','data' => ['label' => __('messages.t_seller'),'value' => 'seller']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_seller')),'value' => 'seller']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0)): ?>
<?php $attributes = $__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0; ?>
<?php unset($__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38f82459cf8970d8f2d44f3eff89fff0)): ?>
<?php $component = $__componentOriginal38f82459cf8970d8f2d44f3eff89fff0; ?>
<?php unset($__componentOriginal38f82459cf8970d8f2d44f3eff89fff0); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal38f82459cf8970d8f2d44f3eff89fff0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.select-item','data' => ['label' => __('messages.t_buyer'),'value' => 'buyer']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.select-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_buyer')),'value' => 'buyer']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0)): ?>
<?php $attributes = $__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0; ?>
<?php unset($__attributesOriginal38f82459cf8970d8f2d44f3eff89fff0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal38f82459cf8970d8f2d44f3eff89fff0)): ?>
<?php $component = $__componentOriginal38f82459cf8970d8f2d44f3eff89fff0; ?>
<?php unset($__componentOriginal38f82459cf8970d8f2d44f3eff89fff0); ?>
<?php endif; ?>

                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal763d7a4c405696a85a7a7ec4f959c809)): ?>
<?php $attributes = $__attributesOriginal763d7a4c405696a85a7a7ec4f959c809; ?>
<?php unset($__attributesOriginal763d7a4c405696a85a7a7ec4f959c809); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal763d7a4c405696a85a7a7ec4f959c809)): ?>
<?php $component = $__componentOriginal763d7a4c405696a85a7a7ec4f959c809; ?>
<?php unset($__componentOriginal763d7a4c405696a85a7a7ec4f959c809); ?>
<?php endif; ?>
                    </div>

                      
                    <?php $__errorArgs = ['account_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="mt-1 text-xs text-red-600 dark:text-red-500"><?php echo e($errors->first('account_type'), false); ?></p>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> 

                </div>

                
                <?php if($account_type === 'seller'): ?>
                    
                    
                    <div class="col-span-12" wire:key="seller-max-sales">
                        <?php if (isset($component)) { $__componentOriginal0241d3f51813223308810020791c4a83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0241d3f51813223308810020791c4a83 = $attributes; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_seller_maximum_sales')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_maximum_sales_for_seller')),'model' => 'seller_max_sales','icon' => 'trend-up']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $attributes = $__attributesOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__attributesOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $component = $__componentOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__componentOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
                    </div>

                    
                    <div class="col-span-12" wire:key="seller-min-sales">
                        <?php if (isset($component)) { $__componentOriginal0241d3f51813223308810020791c4a83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0241d3f51813223308810020791c4a83 = $attributes; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_seller_minimum_sales')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_minimum_sales_for_seller')),'model' => 'seller_min_sales','icon' => 'trend-down']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $attributes = $__attributesOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__attributesOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $component = $__componentOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__componentOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
                    </div>

                <?php endif; ?>

                
                <?php if($account_type === 'buyer'): ?>
                
                    
                    <div class="col-span-12" wire:key="buyer-max-purchases">
                        <?php if (isset($component)) { $__componentOriginal0241d3f51813223308810020791c4a83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0241d3f51813223308810020791c4a83 = $attributes; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_buyer_maximum_purchases')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_maximum_purchases_for_buyer')),'model' => 'buyer_max_purchases','icon' => 'trend-up']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $attributes = $__attributesOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__attributesOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $component = $__componentOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__componentOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
                    </div>

                    
                    <div class="col-span-12" wire:key="buyer-min-purchases">
                        <?php if (isset($component)) { $__componentOriginal0241d3f51813223308810020791c4a83 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0241d3f51813223308810020791c4a83 = $attributes; } ?>
<?php $component = App\View\Components\Forms\TextInput::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\TextInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['required' => true,'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_buyer_minimum_purchases')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_minimum_purchases_for_buyer')),'model' => 'buyer_min_purchases','icon' => 'trend-down']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $attributes = $__attributesOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__attributesOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0241d3f51813223308810020791c4a83)): ?>
<?php $component = $__componentOriginal0241d3f51813223308810020791c4a83; ?>
<?php unset($__componentOriginal0241d3f51813223308810020791c4a83); ?>
<?php endif; ?>
                    </div>

                <?php endif; ?>

                
                <div class="col-span-12 -mx-10">
                    <div class="h-px w-full bg-zinc-200 dark:bg-zinc-700 block"></div>
                </div>

                
                <div class="col-span-12" wire:ignore wire:key="level-badge-upload-container">
                    <?php if (isset($component)) { $__componentOriginal74ca15e70645af8cef7acd003df5945e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal74ca15e70645af8cef7acd003df5945e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.filepicker','data' => ['url' => !empty($level->badge) ? src($level->badge) : '','name' => 'badge','placeholder' => __('dashboard.t_upload_level_badge_icon'),'acceptedFileTypes' => '.jpg,.png,.jpeg,.gif,.svg']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.filepicker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(!empty($level->badge) ? src($level->badge) : ''),'name' => 'badge','placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('dashboard.t_upload_level_badge_icon')),'accepted_file_types' => '.jpg,.png,.jpeg,.gif,.svg']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal74ca15e70645af8cef7acd003df5945e)): ?>
<?php $attributes = $__attributesOriginal74ca15e70645af8cef7acd003df5945e; ?>
<?php unset($__attributesOriginal74ca15e70645af8cef7acd003df5945e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal74ca15e70645af8cef7acd003df5945e)): ?>
<?php $component = $__componentOriginal74ca15e70645af8cef7acd003df5945e; ?>
<?php unset($__componentOriginal74ca15e70645af8cef7acd003df5945e); ?>
<?php endif; ?>  
                </div>
                
            </div>
        </div>

        
        <div class="w-full mt-12">
            <?php if (isset($component)) { $__componentOriginal9a524495f8fba1bb9db48a43313dffc1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9a524495f8fba1bb9db48a43313dffc1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bladewind.button.index','data' => ['size' => 'small','class' => 'mx-auto block w-full','canSubmit' => 'true']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bladewind.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['size' => 'small','class' => 'mx-auto block w-full','can_submit' => 'true']); ?>
                <?php echo app('translator')->get('messages.t_update'); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9a524495f8fba1bb9db48a43313dffc1)): ?>
<?php $attributes = $__attributesOriginal9a524495f8fba1bb9db48a43313dffc1; ?>
<?php unset($__attributesOriginal9a524495f8fba1bb9db48a43313dffc1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9a524495f8fba1bb9db48a43313dffc1)): ?>
<?php $component = $__componentOriginal9a524495f8fba1bb9db48a43313dffc1; ?>
<?php unset($__componentOriginal9a524495f8fba1bb9db48a43313dffc1); ?>
<?php endif; ?>
        </div>
            
	 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalefda5ddba01882262075fadff48950fb)): ?>
<?php $attributes = $__attributesOriginalefda5ddba01882262075fadff48950fb; ?>
<?php unset($__attributesOriginalefda5ddba01882262075fadff48950fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalefda5ddba01882262075fadff48950fb)): ?>
<?php $component = $__componentOriginalefda5ddba01882262075fadff48950fb; ?>
<?php unset($__componentOriginalefda5ddba01882262075fadff48950fb); ?>
<?php endif; ?>
</div>


<?php $__env->startPush('scripts'); ?>

    
    <script src="<?php echo e(asset('js/plugins/coloris/dist/coloris.min.js'), false); ?>"></script>
    <script>
        document.querySelectorAll('.color-picker-input').forEach(input => {
            Coloris({
                el   : '#' + input.id,
                theme: 'large'
            });
        });
    </script>

<?php $__env->stopPush(); ?>


<?php $__env->startPush('styles'); ?>
    
    
    <link rel="stylesheet" href="<?php echo e(asset('js/plugins/coloris/dist/coloris.min.css'), false); ?>"/>

<?php $__env->stopPush(); ?><?php /**PATH /home/gigfly.in/public_html/resources/views/livewire/admin/levels/options/edit.blade.php ENDPATH**/ ?>