<x-mail::message>
# Bleep bloop, this is an automatic verification from  https://GR888.dk

## We have got your message! 

Should be here:
{{config('arostech-mail.test')}}
{{config('app.name')}}


### Email WHAT
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
