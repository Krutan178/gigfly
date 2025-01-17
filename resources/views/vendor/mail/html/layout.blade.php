<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>{{ config('app.name') }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="color-scheme" content="light">
<meta name="supported-color-schemes" content="light">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    .button-blue,
    .button-primary {
        background-color: {{ settings('appearance')->colors['primary'] }};
    }
    .logo {
        background-color: #ffffff !important;
        border-bottom   : 1px solid #f8f8f8 !important;
        padding         : 25px 5px !important;
    }

@media only screen and (max-width: 600px) {
.inner-body {
    width: 100% !important;
    }

.footer {
width: 100% !important;
}
}

@media only screen and (max-width: 500px) {
.button {
width: 100% !important;
}
}
</style>
</head>
<body>

<table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td align="center">
<table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
{{ $header ?? '' }}

<!-- Email Body -->
<tr>
<td class="body" width="100%" cellpadding="0" cellspacing="0" style="border: hidden !important;">
<table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation" style="margin-bottom: 30px">
<!-- Body content -->
<tr>
<td class="content-cell">
    
    {{-- Header --}}
    <a href="{{ url('/') }}" class="h-full logo">
        <img src="{{ src(settings('general')->logo) }}">
    </a>
    
    {{-- Content --}}
    <div style="padding: 32px">
        
        {{ Illuminate\Mail\Markdown::parse($slot) }}
        
        {{ $subcopy ?? '' }}
        
    </div>
</td>
</tr>
</table>
</td>
</tr>

{{ $footer ?? '' }}

</table>
</td>
</tr>
</table>
</body>
</html>
