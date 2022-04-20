@component('mail::message')
# Introduction

This is tests for Arash

@component('mail::button', ['url' => '','color'=>'primary'])
Restore password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
