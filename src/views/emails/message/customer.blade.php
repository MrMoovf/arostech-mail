<x-mail::message>
# Bleep bloop, this is an automatic verification response from  {{config('arostech-mail.app_name')}}

## We have got your message! 

### Email 
{{$email}}

### Name 
{{$name}}

### Message
{{$msg}}

<x-mail::button :url="'{{$app_url}}'">
Go to GR888
</x-mail::button>

### Thanks,<br>
{{config('arostech-mail.app_owner_name')}}<br>
{{config('arostech-mail.app_name')}}
</x-mail::message>
