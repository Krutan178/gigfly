<div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mt-[7rem] py-12 lg:pt-16 lg:pb-24" x-data="window.DIFZGFMIayApDwK" x-init="initialize">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-zinc-800 rounded-lg shadow overflow-hidden">
            <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x rtl:divide-x-reverse">

                
                <aside class="lg:col-span-3 py-6 hidden lg:block" wire:ignore>
                    <?php if (isset($component)) { $__componentOriginal897c321ee9b9bb967400e80c55835c23 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal897c321ee9b9bb967400e80c55835c23 = $attributes; } ?>
<?php $component = App\View\Components\Main\Account\Sidebar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main.account.sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Main\Account\Sidebar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal897c321ee9b9bb967400e80c55835c23)): ?>
<?php $attributes = $__attributesOriginal897c321ee9b9bb967400e80c55835c23; ?>
<?php unset($__attributesOriginal897c321ee9b9bb967400e80c55835c23); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal897c321ee9b9bb967400e80c55835c23)): ?>
<?php $component = $__componentOriginal897c321ee9b9bb967400e80c55835c23; ?>
<?php unset($__componentOriginal897c321ee9b9bb967400e80c55835c23); ?>
<?php endif; ?>
                </aside>

                
                <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">

                    
                    <div class="py-6 px-4 sm:p-6 lg:pb-8 h-[calc(100%-80px)]">

                        
                        <div class="mb-14">
                            <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100"><?php echo e(__('messages.t_write_a_review'), false); ?></h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300"><?php echo e(__('messages.t_give_ur_opinion_about_this_item'), false); ?></p>
                        </div>
                        
                        
                        <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                            
                            <div class="col-span-12 md:col-span-6">

                                
                                <div class="mb-4 w-full">
                                    <span class="block text-xs font-semibold text-gray-700 dark:text-gray-50 mb-2"><?php echo e(__('messages.t_rating'), false); ?></span>
                                    <template x-for="(star, index) in ratings" :key="index">
                        				<button @click="rate(star)" @mouseover="hoverRating= star"
                        					@mouseleave="hoverRating= rating"
                        					aria-hidden="true"
                        					class="rounded-sm text-gray-400 fill-current focus:outline-none
                        					focus:shadow-outline p-1 w-6 m-0 cursor-pointer"
                        					:class="{'text-gray-600 dark:text-gray-100': hoverRating>= star, 'text-amber-400 dark:text-amber-400':
                        					rating >= star && hoverRating >= star}">
                        					<svg class="w-6 transition duration-150"
                        						xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        						fill="currentColor" style="color: inherit">
                        						<path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0
                        							00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364
                        							1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175
                        							0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0
                        							00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0
                        							00.951-.69l1.07-3.292z" />
                        					</svg>
                        				</button>
                        			</template>
                                </div>

                                
                                <div class="w-full mb-6">
                                    <?php if (isset($component)) { $__componentOriginal2f60389a9e230471cd863683376c182f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2f60389a9e230471cd863683376c182f = $attributes; } ?>
<?php $component = App\View\Components\Forms\Textarea::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Textarea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_message')),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_enter_your_review_message')),'model' => 'message','rows' => '8','icon' => 'calendar-text']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2f60389a9e230471cd863683376c182f)): ?>
<?php $attributes = $__attributesOriginal2f60389a9e230471cd863683376c182f; ?>
<?php unset($__attributesOriginal2f60389a9e230471cd863683376c182f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2f60389a9e230471cd863683376c182f)): ?>
<?php $component = $__componentOriginal2f60389a9e230471cd863683376c182f; ?>
<?php unset($__componentOriginal2f60389a9e230471cd863683376c182f); ?>
<?php endif; ?>
                                </div>

                                
                                <div class="w-full">
                                    <?php if (isset($component)) { $__componentOriginal039608dc70b2e4c26356f5d84408f584 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal039608dc70b2e4c26356f5d84408f584 = $attributes; } ?>
<?php $component = App\View\Components\Forms\Button::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('forms.button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Forms\Button::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['action' => 'create','text' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('messages.t_submit_ur_review')),'block' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $attributes = $__attributesOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__attributesOriginal039608dc70b2e4c26356f5d84408f584); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal039608dc70b2e4c26356f5d84408f584)): ?>
<?php $component = $__componentOriginal039608dc70b2e4c26356f5d84408f584; ?>
<?php unset($__componentOriginal039608dc70b2e4c26356f5d84408f584); ?>
<?php endif; ?>
                                </div>

                            </div>

                            
                            <div class="col-span-12 md:col-span-6">
                                <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('main.cards.gig', ['gig' => $item->gig]);

$__html = app('livewire')->mount($__name, $__params, 'qNbdrLN', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
                            </div>

                        </div>

                    </div>               

                </div>

            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>

    
    <script>
        function DIFZGFMIayApDwK() {
            return {

                rating     : 0,
                hoverRating: 0,
                ratings    : [1,2,3,4,5],
    			rate(amount) {
    				if (this.rating == amount) {
					    this.rating= 0;
    				} else {
    					this.rating= amount;
    					window.Livewire.find('<?php echo e($_instance->getId(), false); ?>').set('rating', amount);
    				} 
    			},

                // Init
                initialize() {
                }

            }
        }
        window.DIFZGFMIayApDwK = DIFZGFMIayApDwK();
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/gigfly.in/public_html/resources/views/livewire/main/account/reviews/options/create.blade.php ENDPATH**/ ?>