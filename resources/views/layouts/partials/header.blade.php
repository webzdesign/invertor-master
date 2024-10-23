<style data-shopify="">
    .logo img {
    width: 55px !important;
    }
    .logo-area__middle--logo-image {
    max-width: 215px;
    }
    @media (max-width: 767.98px) {
    .logo img {
    width: 100px;
    }
    }.section-header {
    position: -webkit-sticky;
    position: sticky;
    }
</style>

<div data-section-type="header" data-cc-animate="" class="cc-animate-init -in cc-animate-complete">
    <div id="pageheader" class="pageheader pageheader--layout-inline-menu-center pageheader--sticky pageheader--layout-inline-permitted">
        <div class="logo-area container container--no-max">
            <div class="logo-area__left">
                <div class="logo-area__left__inner" style="max-width: 1333px;">
                    <button class="button notabutton mobile-nav-toggle" aria-label="Toggle menu" aria-controls="main-nav">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu" aria-hidden="true">
                            <line x1="3" y1="12" x2="21" y2="12"></line>
                            <line x1="3" y1="6" x2="21" y2="6"></line>
                            <line x1="3" y1="18" x2="21" y2="18"></line>
                        </svg>
                    </button>
                    <a class="show-search-link" href="#" aria-label="Search">
                        <span class="show-search-link__icon">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" aria-hidden="true">
                                <g transform="translate(3.000000, 3.000000)" stroke="currentColor" stroke-width="1.5" fill="none" fill-rule="evenodd">
                                    <circle cx="7.82352941" cy="7.82352941" r="7.82352941"></circle>
                                    <line x1="13.9705882" y1="13.9705882" x2="18.4411765" y2="18.4411765" stroke-linecap="square"></line>
                                </g>
                            </svg>
                        </span>
                        <span class="show-search-link__text">Search</span>
                    </a>
                    <div class="navigation navigation--left navigation--tight-underline" role="navigation" aria-label="Primary navigation">
                        <div class="navigation__tier-1-container">
                            <ul class="navigation__tier-1">
                                <li class="navigation__item navigation__item--with-children navigation__item--with-small-menu navigation__item--active">
                                    <a href="{{ route('home') }}" class="navigation__link" aria-haspopup="true" aria-expanded="false" aria-controls="NavigationTier2-1">SHOP</a>
                                </li>
                                <li class="navigation__item">
                                    <a href="#" class="navigation__link">REPAIRS</a>
                                </li>
                                <li class="navigation__item">
                                    <a href="#" class="navigation__link">ABOUT US</a>
                                </li>
                                <li class="navigation__item">
                                    <a href="#" class="navigation__link">REVIEWS</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="logo-area__middle logo-area__middle--logo-image">
                <div class="logo-area__middle__inner">
                    <div class="logo"><a class="logo__link" href="{{ route('home') }}" title="Skootz "><img class="logo__image" src="{{ env('APP_Image_URL').'assets/images/logo.png' }}" alt="Skootz " itemprop="logo" width="500" height="129"></a></div>
                </div>
            </div>
            <div class="logo-area__right">
                <div class="logo-area__right__inner">
                    <a class="header-account-link" href="#" aria-label="Account">
                        <span class="header-account-link__text desktop-only">Account</span>
                        <span class="header-account-link__icon mobile-only">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <path d="M12,2 C14.7614237,2 17,4.23857625 17,7 C17,9.76142375 14.7614237,12 12,12 C9.23857625,12 7,9.76142375 7,7 C7,4.23857625 9.23857625,2 12,2 Z M12,3.42857143 C10.0275545,3.42857143 8.42857143,5.02755446 8.42857143,7 C8.42857143,8.97244554 10.0275545,10.5714286 12,10.5714286 C13.2759485,10.5714286 14.4549736,9.89071815 15.0929479,8.7857143 C15.7309222,7.68071045 15.7309222,6.31928955 15.0929479,5.2142857 C14.4549736,4.10928185 13.2759485,3.42857143 12,3.42857143 Z" fill="currentColor"></path>
                                    <path d="M3,18.25 C3,15.763979 7.54216175,14.2499656 12.0281078,14.2499656 C16.5140539,14.2499656 21,15.7636604 21,18.25 C21,19.9075597 21,20.907554 21,21.2499827 L3,21.2499827 C3,20.9073416 3,19.9073474 3,18.25 Z" stroke="currentColor" stroke-width="1.5"></path>
                                    <circle stroke="currentColor" stroke-width="1.5" cx="12" cy="7" r="4.25"></circle>
                                </g>
                            </svg>
                        </span>
                    </a>
                    <a class="show-search-link" href="#">
                        <span class="show-search-link__text">Search</span>
                        <span class="show-search-link__icon">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" aria-hidden="true">
                                <g transform="translate(3.000000, 3.000000)" stroke="currentColor" stroke-width="1.5" fill="none" fill-rule="evenodd">
                                    <circle cx="7.82352941" cy="7.82352941" r="7.82352941"></circle>
                                    <line x1="13.9705882" y1="13.9705882" x2="18.4411765" y2="18.4411765" stroke-linecap="square"></line>
                                </g>
                            </svg>
                        </span>
                    </a>
                    <a href="#" class="cart-link">
                        <span class="cart-link__label">Cart</span>
                        <span class="cart-link__icon">
                            <svg width="24px" height="24px" viewBox="0 0 24 24" aria-hidden="true">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <polygon stroke="currentColor" stroke-width="1.5" points="2 9.25 22 9.25 18 21.25 6 21.25"></polygon>
                                    <line x1="12" y1="9" x2="12" y2="3" stroke="currentColor" stroke-width="1.5" stroke-linecap="square"></line>
                                </g>
                            </svg>
                            <span class="cart-link__count">2</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div id="main-search" class="main-search " data-live-search="true" data-live-search-price="false" data-live-search-vendor="false" data-live-search-meta="false" data-per-row-mob="2">
            <div class="main-search__container container">
                <button class="main-search__close button notabutton" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x" aria-hidden="true">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
                <form class="main-search__form" action="/search" method="get" autocomplete="off">
                    <input type="hidden" name="type" value="product,article,page">
                    <input type="hidden" name="options[prefix]" value="last">
                    <div class="main-search__input-container">
                        <input class="main-search__input" type="text" name="q" autocomplete="off" placeholder="Search..." aria-label="Search Store">
                    </div>
                    <button class="main-search__button button notabutton" type="submit" aria-label="Submit">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" aria-hidden="true">
                            <g transform="translate(3.000000, 3.000000)" stroke="currentColor" stroke-width="1.5" fill="none" fill-rule="evenodd">
                                <circle cx="7.82352941" cy="7.82352941" r="7.82352941"></circle>
                                <line x1="13.9705882" y1="13.9705882" x2="18.4411765" y2="18.4411765" stroke-linecap="square"></line>
                            </g>
                        </svg>
                    </button>
                </form>
                <div class="main-search__results"></div>
            </div>
        </div>
    </div>
    <div id="main-nav" class="desktop-only">
        <div class="navigation navigation--main" role="navigation" aria-label="Primary navigation">
          <div class="navigation__tier-1-container">
            <ul class="navigation__tier-1">
      
    <li class="navigation__item navigation__item--with-children navigation__item--with-small-menu navigation__item--active">
          <a href="{{ route('home') }}" class="navigation__link" aria-haspopup="true" aria-expanded="false" aria-controls="NavigationTier2-1">SHOP</a>
    
          
            <a class="navigation__children-toggle" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><title>Toggle menu</title><polyline points="6 9 12 15 18 9"></polyline></svg></a>
    
            <div id="NavigationTier2-1" class="navigation__tier-2-container navigation__child-tier"><div class="container">
                  <ul class="navigation__tier-2">
                    
                      
                        <li class="navigation__item">
                          <a href="{{ route('home') }}" class="navigation__link" >E-Scooters</a>
                          
    
                          
                        </li>
                      
                        <li class="navigation__item">
                          <a href="{{ route('home') }}" class="navigation__link" >E-Bikes</a>
                          
    
                          
                        </li>
                      
                        <li class="navigation__item">
                          <a href="{{ route('home') }}" class="navigation__link" >Maintenance</a>
                          
    
                          
                        </li>
                      
                        <li class="navigation__item">
                          <a href="{{ route('home') }}" class="navigation__link" >Accessories</a>
                          
    
                          
                        </li>
                      
                    
    </ul>
                </div></div>
          
        </li>
      
    <li class="navigation__item">
          <a href="{{ route('home') }}" class="navigation__link" >REPAIRS</a>
    
          
        </li>
      
    <li class="navigation__item">
          <a href="{{ route('home') }}" class="navigation__link" >ABOUT US</a>
    
          
        </li>
      
    <li class="navigation__item">
          <a href="{{ route('home') }}" class="navigation__link" >REVIEWS</a>
    
          
        </li>
      
    </ul>
          </div>
        </div>
      </div><script class="mobile-navigation-drawer-template" type="text/template">
        <div class="mobile-navigation-drawer" data-mobile-expand-with-entire-link="true">
          <div class="navigation navigation--main" role="navigation" aria-label="Primary navigation">
            <div class="navigation__tier-1-container">
              <div class="navigation__mobile-header">
                <a href="#" class="mobile-nav-back ltr-icon" aria-label="Back"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><title>Left</title><polyline points="15 18 9 12 15 6"></polyline></svg></a>
                <span class="mobile-nav-title"></span>
                <a href="#" class="mobile-nav-toggle"  aria-label="Close"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></a>
              </div>
              <ul class="navigation__tier-1">
      
    <li class="navigation__item navigation__item--with-children navigation__item--with-small-menu navigation__item--active">
          <a href="{{ route('home') }}" class="navigation__link" aria-haspopup="true" aria-expanded="false" aria-controls="NavigationTier2-1-mob">SHOP</a>
    
          
            <a class="navigation__children-toggle" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><title>Toggle menu</title><polyline points="6 9 12 15 18 9"></polyline></svg></a>
    
            <div id="NavigationTier2-1-mob" class="navigation__tier-2-container navigation__child-tier"><div class="container">
                  <ul class="navigation__tier-2">
                    
                      
                        <li class="navigation__item">
                          <a href="{{ route('home') }}" class="navigation__link" >E-Scooters</a>
                          
    
                          
                        </li>
                      
                        <li class="navigation__item">
                          <a href="{{ route('home') }}" class="navigation__link" >E-Bikes</a>
                          
    
                          
                        </li>
                      
                        <li class="navigation__item">
                          <a href="{{ route('home') }}" class="navigation__link" >Maintenance</a>
                          
    
                          
                        </li>
                      
                        <li class="navigation__item">
                          <a href="{{ route('home') }}" class="navigation__link" >Accessories</a>
                          
    
                          
                        </li>
                      
                    
    </ul>
                </div></div>
          
        </li>
      
    <li class="navigation__item">
          <a href="{{ route('home') }}" class="navigation__link" >REPAIRS</a>
    
          
        </li>
      
    <li class="navigation__item">
          <a href="{{ route('home') }}" class="navigation__link" >ABOUT US</a>
    
          
        </li>
      
    <li class="navigation__item">
          <a href="{{ route('home') }}" class="navigation__link" >REVIEWS</a>
    
          
        </li>
      
    </ul>
              
            </div>
          </div>
        </div>
      </script>
    
      <a href="#" class="header-shade mobile-nav-toggle" aria-label="general.navigation_menu.toggle_aria_label"></a>
    </div><script id="InlineNavigationCheckScript">
      theme.inlineNavigationCheck = function() {
        var pageHeader = document.querySelector('.pageheader'),
            inlineNavContainer = pageHeader.querySelector('.logo-area__left__inner'),
            inlineNav = inlineNavContainer.querySelector('.navigation--left');
        if (inlineNav && getComputedStyle(inlineNav).display != 'none') {
          var inlineMenuCentered = document.querySelector('.pageheader--layout-inline-menu-center'),
              logoContainer = document.querySelector('.logo-area__middle__inner');
          if(inlineMenuCentered) {
            var rightWidth = document.querySelector('.logo-area__right__inner').clientWidth,
                middleWidth = logoContainer.clientWidth,
                logoArea = document.querySelector('.logo-area'),
                computedLogoAreaStyle = getComputedStyle(logoArea),
                logoAreaInnerWidth = logoArea.clientWidth - Math.ceil(parseFloat(computedLogoAreaStyle.paddingLeft)) - Math.ceil(parseFloat(computedLogoAreaStyle.paddingRight)),
                availableNavWidth = logoAreaInnerWidth - Math.max(rightWidth, middleWidth) * 2 - 40;
            inlineNavContainer.style.maxWidth = availableNavWidth + 'px';
          }
    
          var firstInlineNavLink = inlineNav.querySelector('.navigation__item:first-child'),
              lastInlineNavLink = inlineNav.querySelector('.navigation__item:last-child');
          if (lastInlineNavLink) {
            var inlineNavWidth = null;
            if(document.querySelector('html[dir=rtl]')) {
              inlineNavWidth = firstInlineNavLink.offsetLeft - lastInlineNavLink.offsetLeft + firstInlineNavLink.offsetWidth;
            } else {
              inlineNavWidth = lastInlineNavLink.offsetLeft - firstInlineNavLink.offsetLeft + lastInlineNavLink.offsetWidth;
            }
            if (inlineNavContainer.offsetWidth >= inlineNavWidth) {
              pageHeader.classList.add('pageheader--layout-inline-permitted');
              var tallLogo = logoContainer.clientHeight > lastInlineNavLink.clientHeight + 20;
              if (tallLogo) {
                inlineNav.classList.add('navigation--tight-underline');
              } else {
                inlineNav.classList.remove('navigation--tight-underline');
              }
            } else {
              pageHeader.classList.remove('pageheader--layout-inline-permitted');
            }
          }
        }
      }
      theme.inlineNavigationCheck();
    
      theme.setInitialHeaderHeightProperty = () => {
        let headerHeight = 0,
            section = document.querySelector('.section-header');
        if (section) {
          headerHeight = Math.ceil(section.clientHeight);
          document.documentElement.style.setProperty('--theme-header-height', headerHeight + 'px');
        }
      };
      setTimeout(theme.setInitialHeaderHeightProperty, 0);
    </script>
</div>