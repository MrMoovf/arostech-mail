<x-mail::message>
# Bleep bloop, this is an automatic message from your website: {{config('arostech-mail.app_url')}} 

## Email
{{$email}}

## Name 
{{$name}}

## Message
{{$msg}}

<x-mail::button :url="'https://arostech.dk'">
See all your messages
</x-mail::button>

### Thanks,<br>
Aros Tech CMS
</x-mail::message>
