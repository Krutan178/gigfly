@props([ 
    // unique name for identifying the toggle element
    // useful for checking the value of the toggle when form is submitted
    'name' => 'bw-toggle',
    // label to display next to the toggle element
    'label' => '',
    // position of the label above.. left or right
    'label_position' => 'left',
    'labelPosition' => 'left',
    // sets or unsets disabled on the toggle element
    'disabled' => false,
    // sets or unsets checked on the toggle element
    'checked' => false,
    // background color to display when toggle is active
    'color' => 'blue',
    // should the label and toggle element be justified in their parent element
    'justified' => false,
    // how thin or thick should the toggle bar be
    'bar' => 'thick',
    // javascript function to run when toggle is clicked
    'onclick' => 'javascript:void(0)',
    // css for label
    'class' => '',
])
@php 
    // reset variables for Laravel 8 support
    if ($labelPosition !== $label_position) $label_position = $labelPosition;
    $name = preg_replace('/[\s-]/', '_', $name);
    $disabled = filter_var($disabled, FILTER_VALIDATE_BOOLEAN);
    $checked = filter_var($checked, FILTER_VALIDATE_BOOLEAN);
    $justified = filter_var($justified, FILTER_VALIDATE_BOOLEAN);
@endphp

<label class="relative @if(!$justified)inline-flex @else flex justify-between @endif items-center group" onclick="{!!$onclick!!}">
    @if($label_position == 'left' && $label !== '')<span class="ltr:pr-3 rtl:pl-3 {{$class}}">{!!$label!!}</span>@endif
    <input type="checkbox" wire:model="{{$name}}" @if($checked) checked @endif @if($disabled) disabled @endif class="absolute ltr:left-1/2 rtl:right-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2 w-full h-full peer sr-only appearance-none border-0 rounded-full cursor-pointer" />
    <span  class="w-8 @if($bar=='thick') h-5 @else h-4 @endif flex items-center flex-shrink-0 p-1 bg-gray-300  dark:bg-zinc-700 rounded-full duration-300 ease-in-out cursor-pointer
        peer-disabled:opacity-40 @if($color=='red')peer-checked:bg-red-500/80 @endif @if($color=='yellow')peer-checked:bg-yellow-500/80 @endif @if($color=='green')peer-checked:bg-green-500/80 @endif @if($color=='pink')peer-checked:bg-pink-500/80 @endif @if($color=='cyan')peer-checked:bg-cyan-500/80 @endif @if($color=='gray')peer-checked:bg-zinc-500 @endif @if($color=='purple')peer-checked:bg-purple-500/80 @endif @if($color=='orange')peer-checked:bg-orange-500/80 @endif @if($color=='blue')peer-checked:bg-primary-600 @endif after:w-3 after:h-3 after:bg-white after:rounded-full after:shadow-md after:duration-300
        peer-checked:after:translate-x-3 group-hover:after:translate-x-0"></span>
    @if($label_position=='right' && $label !== '')<span class="ltr:pl-3 rtl:pr-3 text-xs+ text-gray-500 dark:text-zinc-300 cursor-pointer {{$class}}">{!!$label!!}</span>@endif
</label>