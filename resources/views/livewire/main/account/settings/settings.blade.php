<div class="max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 mt-[7rem] py-12 lg:pt-16 lg:pb-24">
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-zinc-800 rounded-lg shadow overflow-hidden">
            <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:grid lg:grid-cols-12 lg:divide-y-0 lg:divide-x rtl:divide-x-reverse">

                {{-- Sidebar --}}
                <aside class="lg:col-span-3 py-6 hidden lg:block" wire:ignore>
                    <x-main.account.sidebar />
                </aside>

                {{-- Section content --}}
                <div class="divide-y divide-gray-200 dark:divide-zinc-700 lg:col-span-9">

                    {{-- Form --}}
                    <div class="py-6 px-4 sm:p-6 lg:pb-8 h-[calc(100%-80px)]">

                        {{-- Section header --}}
                        <div class="mb-14">
                            <h2 class="text-base leading-6 font-bold text-gray-900 dark:text-gray-100">{{ __('messages.t_account_settings') }}</h2>
                            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300">{{ __('messages.t_account_settings_subtitle') }}</p>
                        </div>
                        
                        {{-- Section content --}}
                        <div class="grid grid-cols-12 md:gap-x-8 gap-y-8 mb-6">

                            {{-- Username --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input required
                                    label="{{ __('messages.t_username') }}" 
                                    placeholder="{{ __('messages.t_enter_username') }}" 
                                    model="username"
                                    icon="user-circle-gear" />
                            </div>

                            {{-- E-mail address --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input required
                                    label="{{ __('messages.t_email_address') }}" 
                                    placeholder="{{ __('messages.t_enter_email_address') }}" 
                                    model="email"
                                    type="email"
                                    icon="at" />
                            </div>

                            {{-- Fullname --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input required
                                    label="{{ __('messages.t_fullname') }}" 
                                    placeholder="{{ __('messages.t_enter_fullname') }}" 
                                    model="fullname"
                                    icon="user" />
                            </div>

                            {{-- Country --}}
                            <div class="col-span-12 md:col-span-6">

                                {{-- Select --}}
                                <div class="w-full" wire:ignore>
                                    <x-bladewind.select required searchable
                                        :component-id="$this->id()"
                                        name="country"
                                        :selected_value="$country"
                                        :label="__('messages.t_country')"
                                        :placeholder="__('messages.t_choose_country')"
                                        data="manual">
                                    
                                        {{-- Values --}}
                                        @foreach ($countries as $country)
                                            <x-bladewind.select-item :label="$country->name" :value="$country->id" />
                                        @endforeach

                                    </x-bladewind.select>
                                </div>

                                {{-- Error --}}  
                                @error('country')
                                    <p class="mt-1 text-xs text-red-600 dark:text-red-500">{{ $errors->first('country') }}</p>
                                @enderror 

                            </div>

                            {{-- City --}}
                            <div class="col-span-12 md:col-span-6">
                                <x-forms.text-input 
                                    label="{{ __('messages.t_city') }}" 
                                    placeholder="{{ __('messages.t_enter_city') }}" 
                                    model="city"
                                    icon="buildings" />
                            </div>

                            {{-- Timezone --}}
                            <div class="col-span-12 md:col-span-6">

                                {{-- Select --}}
                                <div class="w-full" wire:ignore>
                                    <x-bladewind.select required searchable
                                        :component-id="$this->id()"
                                        name="timezone"
                                        :selected_value="$timezone"
                                        :label="__('messages.t_timezone')"
                                        :placeholder="__('messages.t_choose_timezone')"
                                        data="manual">
                                    
                                        {{-- Values --}}
                                        @foreach (config('timezones') as $key => $tz)
                                            <x-bladewind.select-item :label="$tz['label']" :value="$tz['tzCode']" />
                                        @endforeach

                                    </x-bladewind.select>
                                </div>

                                {{-- Error --}}  
                                @error('timezone')
                                    <p class="mt-1 text-xs text-red-600 dark:text-red-500">{{ $errors->first('timezone') }}</p>
                                @enderror 
                                
                            </div>

                            {{-- Current password --}}
                            @if (auth()->user()->password)
                                <div class="col-span-12">
                                    <x-forms.text-input required
                                        label="{{ __('messages.t_password') }}" 
                                        placeholder="{{ __('messages.t_enter_your_current_password') }}" 
                                        model="password"
                                        type="password"
                                        icon="password" />
                                </div>
                            @endif

                        </div>

                    </div>

                    {{-- Actions --}}
                    <div class="py-4 px-4 flex justify-end sm:px-6 bg-transparent">
                        <x-forms.button action="update" text="{{ __('messages.t_update') }}"  />
                    </div>                    

                </div>

            </div>
        </div>
    </div>
</div>