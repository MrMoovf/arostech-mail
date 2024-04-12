@php
    $app_url = env('APP_URL');
    $app_name = env('APP_NAME');
    $app_owner_name = env('APP_OWNER_NAME');
@endphp
<x-mail::message>
# Bleep bloop, this is an automatic verification from  https://GR888.dk

## We have got your message! {{$app_url}}

### Email
{{$email}}

### Name 
{{$name}}

### Message
{{$msg}}

<x-mail::button :url="'https://gr888.dk'">
Read more
</x-mail::button>

### Thanks,<br>
Bjørn Guldager<br>
CEO of GR888
</x-mail::message>
