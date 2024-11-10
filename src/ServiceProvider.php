<?php

namespace Varsuite\StatamicResendFormSubmissions;

use Statamic\Providers\AddonServiceProvider;
use Varsuite\StatamicResendFormSubmissions\Actions\ResendFormSubmissions;

class ServiceProvider extends AddonServiceProvider
{
    protected $actions = [
        ResendFormSubmissions::class
    ];

    public function bootAddon()
    {
        parent::boot();

        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'resend-form-submissions');
    }
}
