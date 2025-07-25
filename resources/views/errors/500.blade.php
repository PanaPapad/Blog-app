@extends('layouts.base')

@section('title', '500 - Server Error')

@push('styles')
<style>
.error-page {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 70vh;
    text-align: center;
    padding: 2rem 1rem;
}

.error-page__code {
    font-size: 8rem;
    font-weight: 900;
    color: var(--error);
    line-height: 1;
    margin-bottom: 1rem;
}

.error-page__title {
    font-size: 2rem;
    font-weight: 700;
    color: var(--gray-800);
    margin-bottom: 1rem;
}

.error-page__message {
    font-size: 1.125rem;
    color: var(--gray-600);
    max-width: 500px;
    margin-bottom: 2rem;
    line-height: 1.6;
}

.error-page__button {
    display: inline-flex;
    align-items: center;
    padding: 0.75rem 1.5rem;
    background: var(--primary-blue);
    color: var(--white);
    text-decoration: none;
    border-radius: 0.5rem;
    font-weight: 500;
    transition: all 0.3s ease;
}

.error-page__button:hover {
    background: var(--primary-blue-dark);
    transform: translateY(-2px);
    color: var(--white);
}
</style>
@endpush

@section('content')
<div class="error-page">
    <div style="font-size: 4rem; margin-bottom: 2rem;">🔧</div>
    <h1 class="error-page__code">500</h1>
    <h2 class="error-page__title">Internal Server Error</h2>
    <p class="error-page__message">
        Something went wrong on our end. We're working to fix it!
    </p>
    
    <a href="/" class="error-page__button">
        🏠 Go Home
    </a>
</div>
@endsection
