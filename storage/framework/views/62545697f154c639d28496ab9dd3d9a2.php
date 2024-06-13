<?php if(session()->has('livewire-alert')): ?>
    <script>
        flashAlert(<?php echo json_encode(session('livewire-alert'), 15, 512) ?>)
    </script>
<?php endif; ?><?php /**PATH C:\Users\Dell\Desktop\gigfly\public_html\vendor\jantinnerezo\livewire-alert\src/../resources/views/components/flash.blade.php ENDPATH**/ ?>