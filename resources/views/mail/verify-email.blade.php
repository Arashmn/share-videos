@component('mail::message')
# Introduction

This is tests for Arash

@component('mail::button', ['url' => ''])
Restorepassword
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
