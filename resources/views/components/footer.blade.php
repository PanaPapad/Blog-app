<!-- Footer -->
@push('styles')
@vite(['resources/css/footer.css'])    
@endpush
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__content">
                <!-- About Section -->
                <div class="footer__section">
                    <h3 class="footer__title">About My Blog</h3>
                    <p class="footer__text">
                        Text here
                    </p>
                    <div class="footer__social">
                        <a href="#" class="footer__social-link" title="Other">📱</a>
                        <a href="#" class="footer__social-link" title="GitHub">💻</a>
                        <a href="#" class="footer__social-link" title="Other">💼</a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div class="footer__section">
                    <h3 class="footer__title">Quick Links</h3>
                    <div class="footer__links">
                        <a href="/" class="footer__link">Home</a>
                    </div>
                </div>
                
                <!-- Categories -->
                <div class="footer__section">
                    <h3 class="footer__title">Categories</h3>
                    <div class="footer__links">
                        <a href="/category/tech" class="footer__link">Technology</a>
                        <a href="/category/tutorials" class="footer__link">Tutorials</a>
                        <a href="/category/news" class="footer__link">News</a>
                        <a href="/category/personal" class="footer__link">Personal</a>
                    </div>
                </div>
            </div>
            
            <div class="footer__bottom">
                <a href="/" class="footer__brand">My Blog</a>
                <div class="footer__credits">
                    <span class="footer__copyright">&copy; 2025 My Blog. All rights reserved.</span>
                    <a href="https://laravel.com" class="footer__credit-link">Built with Laravel</a>
                    <a href="#" class="footer__credit-link">Made with ❤️</a>
                </div>
            </div>
        </div>
    </footer>