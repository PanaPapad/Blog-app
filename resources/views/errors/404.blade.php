@extends('layouts.base')

@section('title', '404 - Page Not Found')

@push('styles')
<style>
/* Override body background for 404 page */
body {
    background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%) !important;
    color: #334155;
}

.error-page {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 80vh;
    text-align: center;
    padding: 2rem 1rem;
}

.error-page__gif {
    max-width: 400px;
    width: 100%;
    height: auto;
    border-radius: 1rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    margin-bottom: 2rem;
    border: 3px solid #ffffff;
}

.error-page__code {
    font-size: 6rem;
    font-weight: 900;
    color: #64748b;
    line-height: 1;
    margin-bottom: 1rem;
    text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.error-page__title {
    font-size: 2rem;
    font-weight: 700;
    color: #475569;
    margin-bottom: 1rem;
}

.error-page__message {
    font-size: 1.125rem;
    color: #64748b;
    max-width: 500px;
    margin-bottom: 2rem;
    line-height: 1.6;
}

.error-page__actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    justify-content: center;
}

.error-page__button {
    display: inline-flex;
    align-items: center;
    padding: 0.875rem 2rem;
    background: var(--primary-blue);
    color: var(--white);
    text-decoration: none;
    border-radius: 2rem;
    font-weight: 500;
    transition: all 0.3s ease;
    box-shadow: 0 4px 20px rgba(30, 64, 175, 0.2);
    border: none;
    font-size: 1rem;
}

.error-page__button:hover {
    background: var(--primary-blue-dark);
    transform: translateY(-3px);
    box-shadow: 0 8px 30px rgba(30, 64, 175, 0.3);
    color: var(--white);
}

.error-page__button--secondary {
    background: #94a3b8;
    box-shadow: 0 4px 20px rgba(148, 163, 184, 0.2);
}

.error-page__button--secondary:hover {
    background: #64748b;
    box-shadow: 0 8px 30px rgba(148, 163, 184, 0.3);
}

.error-page__decoration {
    position: absolute;
    top: 10%;
    right: 10%;
    font-size: 3rem;
    opacity: 0.1;
    color: var(--primary-blue);
    animation: float 3s ease-in-out infinite;
}

.error-page__decoration:nth-child(2) {
    top: 20%;
    left: 10%;
    animation-delay: 1s;
}

.error-page__decoration:nth-child(3) {
    bottom: 20%;
    right: 15%;
    animation-delay: 2s;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}

/* Fallback for when GIF doesn't load */
.error-page__gif-fallback {
    display: none;
    font-size: 8rem;
    margin-bottom: 2rem;
    opacity: 0.6;
}

@media (max-width: 768px) {
    .error-page__gif {
        max-width: 300px;
    }
    
    .error-page__code {
        font-size: 4rem;
    }
    
    .error-page__title {
        font-size: 1.5rem;
    }
    
    .error-page__message {
        font-size: 1rem;
    }
    
    .error-page__actions {
        flex-direction: column;
        align-items: center;
    }
    
    .error-page__button {
        width: 100%;
        max-width: 300px;
        justify-content: center;
    }
    
    .error-page__decoration {
        display: none;
    }
}
</style>
@endpush

@section('content')
<div class="error-page">
    <!-- Floating decorative elements -->
    <div class="error-page__decoration">✨</div>
    <div class="error-page__decoration">🔍</div>
    <div class="error-page__decoration">📄</div>
    
    <!-- Main GIF -->
    <img src="{{ asset('images/404.gif') }}" 
         alt="404 Not Found Animation" 
         class="error-page__gif"
         onerror="this.style.display='none'; document.querySelector('.error-page__gif-fallback').style.display='block';">
    
    <!-- Fallback if GIF fails to load -->
    <div class="error-page__gif-fallback">🤔</div>
    
    <h1 class="error-page__code">404</h1>
    <h2 class="error-page__title">Oops! Page Not Found</h2>
    <p class="error-page__message">
        The page you're looking for seems to have wandered off into the digital wilderness. 
        Let's get you back on track!
    </p>
    
    <div class="error-page__actions">
        <a href="/" class="error-page__button">
            🏠 Take Me Home
        </a>
        <a href="javascript:history.back()" class="error-page__button error-page__button--secondary">
            ← Go Back
        </a>
    </div>
</div>
@endsection
