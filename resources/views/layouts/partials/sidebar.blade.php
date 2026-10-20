<!--  BEGIN SIDEBAR  -->
      <!-- BEGIN SIDEBAR -->
      <aside class="navbar navbar-vertical navbar-expand-lg">
        <div class="container-fluid">
          <!-- BEGIN NAVBAR TOGGLER -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle sidebar navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- END NAVBAR TOGGLER -->

          <!-- BEGIN NAVBAR LOGO -->
          <div class="navbar-brand navbar-brand-autodark">
            <a href="{{ route('dashboard') }}" aria-label="Tabler">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 68 68" width="32" height="32" aria-label="Tabler" class="navbar-brand-image">
                <path
                  d="M64.6 16.2C63 9.9 58.1 5 51.8 3.4 40 1.5 28 1.5 16.2 3.4 9.9 5 5 9.9 3.4 16.2 1.5 28 1.5 40 3.4 51.8 5 58.1 9.9 63 16.2 64.6c11.8 1.9 23.8 1.9 35.6 0C58.1 63 63 58.1 64.6 51.8c1.9-11.8 1.9-23.8 0-35.6zM33.3 36.3c-2.8 4.4-6.6 8.2-11.1 11-1.5.9-3.3.9-4.8.1s-2.4-2.3-2.5-4c0-1.7.9-3.3 2.4-4.1 2.3-1.4 4.4-3.2 6.1-5.3-1.8-2.1-3.8-3.8-6.1-5.3-2.3-1.3-3-4.2-1.7-6.4s4.3-2.9 6.5-1.6c4.5 2.8 8.2 6.5 11.1 10.9 1 1.4 1 3.3.1 4.7zM49.2 46H37.8c-2.1 0-3.8-1-3.8-3s1.7-3 3.8-3h11.4c2.1 0 3.8 1 3.8 3s-1.7 3-3.8 3z"
                  fill="#066fd1"
                  style="fill: var(--tblr-navbar-logo-color, var(--tblr-primary, #066fd1))"
                />
              </svg>
            </a>
          </div>
          <!-- END NAVBAR LOGO -->

          <!-- BEGIN SIDEBAR USER -->
          <div class="navbar-footer">
            <ul class="navbar-nav">
              <li class="nav-item dropup">
                <a href="#" class="nav-link" data-bs-toggle="dropdown" aria-label="Open user menu">
                  <span style="background-image: url('{{ asset('vendor/tabler/static/avatars/000m.jpg') }}')" class="avatar avatar-sm"></span>
                  <div class="nav-link-title">
                    Paweł Kuna
                    <div class="small text-secondary">UI Designer</div>
                  </div>
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="./profile.html"
                    ><!-- Download SVG icon from http://tabler.io/icons/icon/user -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon">
                      <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                      <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    </svg>
                    Profile</a
                  >
                  <a class="dropdown-item" href="#"
                    ><!-- Download SVG icon from http://tabler.io/icons/icon/chart-pie -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon dropdown-item-icon">
                      <path d="M10 3.2a9 9 0 1 0 10.8 10.8a1 1 0 0 0 -1 -1h-6.8a2 2 0 0 1 -2 -2v-7a.9 .9 0 0 0 -1 -.8" />
                      <path d="M15 3.5a9 9 0 0 1 5.5 5.5h-4.5a1 1 0 0 1 -1 -1v-4.5" />
                    </svg>
                    Analytics</a
                  >
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="./settings.html">Settings &amp; Privacy</a>
                  <a class="dropdown-item" href="#">Help</a>
                  <a class="dropdown-item" href="./sign-in.html">Sign out</a>
                </div>
              </li>
            </ul>
          </div>
          <!-- END SIDEBAR USER -->

          <nav class="collapse navbar-collapse" id="sidebar-menu" aria-label="Sidebar">
            <!-- BEGIN NAVBAR MENU -->
            <ul class="navbar-nav pt-lg-3">
              <li class="nav-section-title">Overview</li>
              <!-- BEGIN NAVBAR ITEM -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-link-icon"
                    ><!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                      <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                      <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                      <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg
                  ></span>

                  <span class="nav-link-title">Dashboards</span>
                </a>

                <div class="dropdown-menu">
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./index.html"> Default </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./dashboard-crypto.html">
                    Crypto

                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./dashboard-crm.html">
                    CRM

                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                  <!-- END NAVBAR ITEM -->
                </div>
              </li>
              <!-- END NAVBAR ITEM -->
              <li class="nav-section-title">Components</li>
              <!-- BEGIN NAVBAR ITEM -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-link-icon"
                    ><!-- Download SVG icon from http://tabler.io/icons/icon/package -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                      <path d="M12 3l8 4.5l0 9l-8 4.5l-8 -4.5l0 -9l8 -4.5" />
                      <path d="M12 12l8 -4.5" />
                      <path d="M12 12l0 9" />
                      <path d="M12 12l-8 -4.5" />
                      <path d="M16 5.25l-8 4.5" /></svg
                  ></span>

                  <span class="nav-link-title">Interface</span>
                </a>

                <div class="dropdown-menu">
                  <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./all-elements.html">
                        All Elements

                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./accordion.html"> Accordion </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./alerts.html"> Alerts </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <div class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-haspopup="true" aria-expanded="false"> Authentication </a>

                        <div class="dropdown-menu">
                          <a href="./sign-in.html" class="dropdown-item"> Sign in </a><a href="./sign-in-link.html" class="dropdown-item"> Sign in link </a><a href="./sign-in-illustration.html" class="dropdown-item"> Sign in with illustration </a
                          ><a href="./sign-in-cover.html" class="dropdown-item"> Sign in with cover </a><a href="./sign-up.html" class="dropdown-item"> Sign up </a><a href="./forgot-password.html" class="dropdown-item"> Forgot password </a><a href="./terms-of-service.html" class="dropdown-item"> Terms of service </a
                          ><a href="./auth-lock.html" class="dropdown-item"> Lock screen </a
                          ><a href="./onboarding.html" class="dropdown-item">
                            Onboarding

                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span> </a
                          ><a href="./2-step-verification.html" class="dropdown-item"> 2 step verification </a><a href="./2-step-verification-code.html" class="dropdown-item"> 2 step verification code </a>
                        </div>
                      </div>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./avatars.html"> Avatars </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./badges.html"> Badges </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./blank.html"> Blank page </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./buttons.html"> Buttons </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <div class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-haspopup="true" aria-expanded="false"> Cards </a>

                        <div class="dropdown-menu">
                          <a href="./cards.html" class="dropdown-item"> Sample cards </a><a href="./card-actions.html" class="dropdown-item"> Card actions </a
                          ><a href="./card-gradients.html" class="dropdown-item">
                            Card gradients

                            <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span> </a
                          ><a href="./cards-masonry.html" class="dropdown-item"> Cards Masonry </a>
                        </div>
                      </div>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./carousel.html"> Carousel </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./clipboard.html"> Clipboard </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./colors.html"> Colors </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./confetti.html"> Confetti </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./datagrid.html"> Data grid </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./dropdowns.html"> Dropdowns </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <div class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-haspopup="true" aria-expanded="false"> Error pages </a>

                        <div class="dropdown-menu"><a href="./error-404.html" class="dropdown-item"> 404 page </a><a href="./error-500.html" class="dropdown-item"> 500 page </a><a href="./error-maintenance.html" class="dropdown-item"> Maintenance page </a></div>
                      </div>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./hover-gallery.html">
                        Hover gallery

                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./icon-lists.html">
                        Icon lists

                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./image-labels.html">
                        Image labels

                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./legend.html"> Legend </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./lists.html"> Lists </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./modals.html"> Modals </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./mockup-browser.html">
                        Mockup browser

                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./prose.html"> Prose </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./navigation.html"> Navigation </a>
                      <!-- END NAVBAR ITEM -->
                    </div>
                    <div class="dropdown-menu-column">
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./nav-overflow.html">
                        Nav overflow

                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./offcanvas.html"> Offcanvas </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./pagination.html"> Pagination </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./password-strength.html"> Password strength </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./patterns.html">
                        Patterns

                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./placeholder.html"> Placeholder </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./progress.html"> Progress </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./segmented-control.html"> Segmented control </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./scroll-spy.html"> Scroll spy </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./shape.html">
                        Shape

                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./signal.html"> Signal </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./social-icons.html"> Social icons </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./sparkline.html"> Sparkline </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./stars-rating.html"> Stars rating </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./steps.html"> Steps </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./number-input.html">
                        Number input

                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./tables.html"> Tables </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./tabs.html"> Tabs </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./switch-icons.html"> Switch icons </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./tags.html"> Tags </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./text-shimmer.html"> Text shimmer </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./toasts.html"> Toasts </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./tracking.html"> Tracking </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./typography.html"> Typography </a>
                      <!-- END NAVBAR ITEM -->
                    </div>
                  </div>
                </div>
              </li>
              <!-- END NAVBAR ITEM -->
              <!-- BEGIN NAVBAR ITEM -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-link-icon"
                    ><!-- Download SVG icon from http://tabler.io/icons/icon/checkbox -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                      <path d="M9 11l3 3l8 -8" />
                      <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" /></svg
                  ></span>

                  <span class="nav-link-title">Forms</span>
                </a>

                <div class="dropdown-menu">
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./form-elements.html"> Form elements </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./form-layout.html"> Form layouts </a>
                  <!-- END NAVBAR ITEM -->
                </div>
              </li>
              <!-- END NAVBAR ITEM -->
              <!-- BEGIN NAVBAR ITEM -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-link-icon"
                    ><!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                      <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" /></svg
                  ></span>

                  <span class="nav-link-title">Extra</span>
                </a>

                <div class="dropdown-menu">
                  <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./activity.html"> Activity </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./billing.html">
                        Billing

                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./chat.html"> Chat </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./email-inbox.html">
                        Email inbox

                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./cookie-banner.html"> Cookie banner </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./empty.html"> Empty page </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./faq.html"> FAQ </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./gallery.html"> Gallery </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./invoice.html"> Invoice </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./pay.html">
                        Pay

                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./job-listing.html"> Job listing </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./license.html"> License </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./logs.html"> Logs </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./marketing.html"> Marketing </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./music.html"> Music </a>
                      <!-- END NAVBAR ITEM -->
                    </div>
                    <div class="dropdown-menu-column">
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./page-loader.html"> Page loader </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./photogrid.html"> Photogrid </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./pricing.html"> Pricing cards </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./pricing-table.html"> Pricing table </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./search-results.html"> Search results </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./settings.html"> Settings </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./settings-plan.html"> Settings plan </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./signatures.html"> Signatures </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <div class="dropend">
                        <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-haspopup="true" aria-expanded="false"> Tasks </a>

                        <div class="dropdown-menu"><a href="./tasks.html" class="dropdown-item"> Kanban </a><a href="./tasks-list.html" class="dropdown-item"> Task List </a></div>
                      </div>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./text-features.html"> Text features </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./trial-ended.html"> Trial ended </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./uptime.html"> Uptime monitor </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./users.html"> Users </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./widgets.html"> Widgets </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./wizard.html"> Wizard </a>
                      <!-- END NAVBAR ITEM -->
                    </div>
                  </div>
                </div>
              </li>
              <!-- END NAVBAR ITEM -->
              <li class="nav-section-title">Layout</li>
              <!-- BEGIN NAVBAR ITEM -->
              <li class="nav-item active dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-haspopup="true" aria-expanded="true">
                  <span class="nav-link-icon"
                    ><!-- Download SVG icon from http://tabler.io/icons/icon/layout-2 -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                      <path d="M4 6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -1" />
                      <path d="M4 15a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -3" />
                      <path d="M14 6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v3a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -3" />
                      <path d="M14 17a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v1a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2l0 -1" /></svg
                  ></span>

                  <span class="nav-link-title">Layout</span>
                </a>

                <div class="dropdown-menu show">
                  <div class="dropdown-menu-columns">
                    <div class="dropdown-menu-column">
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./layout-boxed.html"> Boxed </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./layout-condensed.html"> Condensed </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./layout-fluid.html"> Fluid </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item active" href="./layout-fluid-vertical.html" aria-current="page"> Fluid vertical </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./layout-horizontal.html"> Horizontal </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./layout-navbar-dark.html"> Navbar dark </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./layout-navbar-floating.html"> Navbar floating </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./layout-navbar-sticky.html"> Navbar sticky </a>
                      <!-- END NAVBAR ITEM -->
                    </div>
                    <div class="dropdown-menu-column">
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./layout-vertical-right.html"> Right vertical </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./layout-rtl.html"> RTL mode </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./layout-vertical.html"> Vertical </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./layout-vertical-transparent.html"> Vertical transparent </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./layout-vertical-floating.html"> Vertical floating </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./layout-folded.html">
                        Folded sidebar

                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <!-- END NAVBAR ITEM -->
                      <!-- BEGIN NAVBAR ITEM -->
                      <a class="dropdown-item" href="./layout-folded-hover.html">
                        Folded hover

                        <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                      </a>
                      <!-- END NAVBAR ITEM -->
                    </div>
                  </div>
                </div>
              </li>
              <!-- END NAVBAR ITEM -->
              <li class="nav-section-title">More</li>
              <!-- BEGIN NAVBAR ITEM -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-link-icon"
                    ><!-- Download SVG icon from http://tabler.io/icons/icon/puzzle -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                      <path
                        d="M4 7h3a1 1 0 0 0 1 -1v-1a2 2 0 0 1 4 0v1a1 1 0 0 0 1 1h3a1 1 0 0 1 1 1v3a1 1 0 0 0 1 1h1a2 2 0 0 1 0 4h-1a1 1 0 0 0 -1 1v3a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-1a2 2 0 0 0 -4 0v1a1 1 0 0 1 -1 1h-3a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1h1a2 2 0 0 0 0 -4h-1a1 1 0 0 1 -1 -1v-3a1 1 0 0 1 1 -1"
                      /></svg
                  ></span>

                  <span class="nav-link-title">Plugins</span>
                </a>

                <div class="dropdown-menu">
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./charts.html"> Charts </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./charts-advanced.html"> Charts advanced </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./colorpicker.html"> Color picker </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./datepicker.html">
                    Date picker

                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./datatables.html"> Datatables </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./dropzone.html"> Dropzone </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./sortable.html">
                    Sortable

                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./fullcalendar.html"> Fullcalendar </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./inline-player.html"> Inline player </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./lightbox.html"> Lightbox </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./maps.html"> Map </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./map-fullsize.html"> Map fullsize </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./map-blocks.html">
                    Map blocks

                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./maps-vector.html"> Map vector </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./tour.html">
                    Tour

                    <span class="badge badge-sm bg-green-lt text-uppercase ms-auto">New</span>
                  </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./wysiwyg.html"> WYSIWYG editor </a>
                  <!-- END NAVBAR ITEM -->
                </div>
              </li>
              <!-- END NAVBAR ITEM -->
              <!-- BEGIN NAVBAR ITEM -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-link-icon"
                    ><!-- Download SVG icon from http://tabler.io/icons/icon/gift -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                      <path d="M3 9a1 1 0 0 1 1 -1h16a1 1 0 0 1 1 1v2a1 1 0 0 1 -1 1h-16a1 1 0 0 1 -1 -1l0 -2" />
                      <path d="M12 8l0 13" />
                      <path d="M19 12v7a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-7" />
                      <path d="M7.5 8a2.5 2.5 0 0 1 0 -5a4.8 8 0 0 1 4.5 5a4.8 8 0 0 1 4.5 -5a2.5 2.5 0 0 1 0 5" /></svg
                  ></span>

                  <span class="nav-link-title">Addons</span>
                </a>

                <div class="dropdown-menu">
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./icons.html"> Icons </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./emails.html"> Emails </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./flags.html"> Flags </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./illustrations.html"> Illustrations </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./payment-providers.html"> Payment providers </a>
                  <!-- END NAVBAR ITEM -->
                </div>
              </li>
              <!-- END NAVBAR ITEM -->
              <!-- BEGIN NAVBAR ITEM -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-haspopup="true" aria-expanded="false">
                  <span class="nav-link-icon"
                    ><!-- Download SVG icon from http://tabler.io/icons/icon/lifebuoy -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                      <path d="M8 12a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                      <path d="M3 12a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                      <path d="M15 15l3.35 3.35" />
                      <path d="M9 15l-3.35 3.35" />
                      <path d="M5.65 5.65l3.35 3.35" />
                      <path d="M18.35 5.65l-3.35 3.35" /></svg
                  ></span>

                  <span class="nav-link-title">Help</span>
                </a>

                <div class="dropdown-menu">
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="https://tabler.io/docs" target="_blank" rel="noopener"> Documentation </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="./changelog.html"> Changelog </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item" href="https://github.com/tabler/tabler" target="_blank" rel="noopener"> Source code </a>
                  <!-- END NAVBAR ITEM -->
                  <!-- BEGIN NAVBAR ITEM -->
                  <a class="dropdown-item text-pink" href="https://github.com/sponsors/codecalm" target="_blank" rel="noopener">
                    <!-- Download SVG icon from http://tabler.io/icons/icon/heart -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon icon-inline me-1">
                      <path d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" />
                    </svg>

                    Sponsor project!
                  </a>
                  <!-- END NAVBAR ITEM -->
                </div>
              </li>
              <!-- END NAVBAR ITEM -->
            </ul>
            <!-- END NAVBAR MENU -->

            <div class="navbar-side">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <button type="button" class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-settings" aria-controls="offcanvas-settings">
                    <span class="nav-link-icon"
                      ><!-- Download SVG icon from http://tabler.io/icons/icon/brush -->
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                        <path d="M3 21v-4a4 4 0 1 1 4 4h-4" />
                        <path d="M21 3a16 16 0 0 0 -12.8 10.2" />
                        <path d="M21 3a16 16 0 0 1 -10.2 12.8" />
                        <path d="M10.6 9a9 9 0 0 1 4.4 4.4" /></svg
                    ></span>
                    <span class="nav-link-title">Customize</span>
                  </button>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </aside>
      <!-- END SIDEBAR -->
      <!--  END SIDEBAR  -->
