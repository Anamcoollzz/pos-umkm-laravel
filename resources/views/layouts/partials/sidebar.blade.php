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
            <a href="." aria-label="Tabler">
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

      <!-- BEGIN NAVBAR  -->
      <!-- BEGIN NAVBAR -->
      <header class="navbar navbar-expand-md d-print-none">
        <div class="container-xl">
          <!-- BEGIN NAVBAR TOGGLER -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle primary navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <!-- END NAVBAR TOGGLER -->

          <!-- BEGIN NAVBAR LOGO -->
          <div class="navbar-brand navbar-brand-autodark pe-0 pe-md-3">
            <a href="." aria-label="Tabler">
              <svg xmlns="http://www.w3.org/2000/svg" width="110" height="32" viewBox="0 0 232 68" class="navbar-brand-image">
                <path
                  d="M64.6 16.2C63 9.9 58.1 5 51.8 3.4 40 1.5 28 1.5 16.2 3.4 9.9 5 5 9.9 3.4 16.2 1.5 28 1.5 40 3.4 51.8 5 58.1 9.9 63 16.2 64.6c11.8 1.9 23.8 1.9 35.6 0C58.1 63 63 58.1 64.6 51.8c1.9-11.8 1.9-23.8 0-35.6zM33.3 36.3c-2.8 4.4-6.6 8.2-11.1 11-1.5.9-3.3.9-4.8.1s-2.4-2.3-2.5-4c0-1.7.9-3.3 2.4-4.1 2.3-1.4 4.4-3.2 6.1-5.3-1.8-2.1-3.8-3.8-6.1-5.3-2.3-1.3-3-4.2-1.7-6.4s4.3-2.9 6.5-1.6c4.5 2.8 8.2 6.5 11.1 10.9 1 1.4 1 3.3.1 4.7zM49.2 46H37.8c-2.1 0-3.8-1-3.8-3s1.7-3 3.8-3h11.4c2.1 0 3.8 1 3.8 3s-1.7 3-3.8 3z"
                  fill="#066fd1"
                  style="fill: var(--tblr-navbar-logo-color, var(--tblr-primary, #066fd1))"
                />
                <path
                  d="M105.8 46.1c.4 0 .9.2 1.2.6s.6 1 .6 1.7c0 .9-.5 1.6-1.4 2.2s-2 .9-3.2.9c-2 0-3.7-.4-5-1.3s-2-2.6-2-5.4V31.6h-2.2c-.8 0-1.4-.3-1.9-.8s-.9-1.1-.9-1.9c0-.7.3-1.4.8-1.8s1.2-.7 1.9-.7h2.2v-3.1c0-.8.3-1.5.8-2.1s1.3-.8 2.1-.8 1.5.3 2 .8.8 1.3.8 2.1v3.1h3.4c.8 0 1.4.3 1.9.8s.8 1.2.8 1.9-.3 1.4-.8 1.8-1.2.7-1.9.7h-3.4v13c0 .7.2 1.2.5 1.5s.8.5 1.4.5c.3 0 .6-.1 1.1-.2.5-.2.8-.3 1.2-.3zm28-20.7c.8 0 1.5.3 2.1.8.5.5.8 1.2.8 2.1v20.3c0 .8-.3 1.5-.8 2.1-.5.6-1.2.8-2.1.8s-1.5-.3-2-.8-.8-1.2-.8-2.1c-.8.9-1.9 1.7-3.2 2.4-1.3.7-2.8 1-4.3 1-2.2 0-4.2-.6-6-1.7-1.8-1.1-3.2-2.7-4.2-4.7s-1.6-4.3-1.6-6.9c0-2.6.5-4.9 1.5-6.9s2.4-3.6 4.2-4.8c1.8-1.1 3.7-1.7 5.9-1.7 1.5 0 3 .3 4.3.8 1.3.6 2.5 1.3 3.4 2.1 0-.8.3-1.5.8-2.1.5-.5 1.2-.7 2-.7zm-9.7 21.3c2.1 0 3.8-.8 5.1-2.3s2-3.4 2-5.7-.7-4.2-2-5.8c-1.3-1.5-3-2.3-5.1-2.3-2 0-3.7.8-5 2.3-1.3 1.5-2 3.5-2 5.8s.6 4.2 1.9 5.7 3 2.3 5.1 2.3zm32.1-21.3c2.2 0 4.2.6 6 1.7 1.8 1.1 3.2 2.7 4.2 4.7s1.6 4.3 1.6 6.9-.5 4.9-1.5 6.9-2.4 3.6-4.2 4.8c-1.8 1.1-3.7 1.7-5.9 1.7-1.5 0-3-.3-4.3-.9s-2.5-1.4-3.4-2.3v.3c0 .8-.3 1.5-.8 2.1-.5.6-1.2.8-2.1.8s-1.5-.3-2.1-.8c-.5-.5-.8-1.2-.8-2.1V18.9c0-.8.3-1.5.8-2.1.5-.6 1.2-.8 2.1-.8s1.5.3 2.1.8c.5.6.8 1.3.8 2.1v10c.8-1 1.8-1.8 3.2-2.5 1.3-.7 2.8-1 4.3-1zm-.7 21.3c2 0 3.7-.8 5-2.3s2-3.5 2-5.8-.6-4.2-1.9-5.7-3-2.3-5.1-2.3-3.8.8-5.1 2.3-2 3.4-2 5.7.7 4.2 2 5.8c1.3 1.6 3 2.3 5.1 2.3zm23.6 1.9c0 .8-.3 1.5-.8 2.1s-1.3.8-2.1.8-1.5-.3-2-.8-.8-1.3-.8-2.1V18.9c0-.8.3-1.5.8-2.1s1.3-.8 2.1-.8 1.5.3 2 .8.8 1.3.8 2.1v29.7zm29.3-10.5c0 .8-.3 1.4-.9 1.9-.6.5-1.2.7-2 .7h-15.8c.4 1.9 1.3 3.4 2.6 4.4 1.4 1.1 2.9 1.6 4.7 1.6 1.3 0 2.3-.1 3.1-.4.7-.2 1.3-.5 1.8-.8.4-.3.7-.5.9-.6.6-.3 1.1-.4 1.6-.4.7 0 1.2.2 1.7.7s.7 1 .7 1.7c0 .9-.4 1.6-1.3 2.4-.9.7-2.1 1.4-3.6 1.9s-3 .8-4.6.8c-2.7 0-5-.6-7-1.7s-3.5-2.7-4.6-4.6-1.6-4.2-1.6-6.6c0-2.8.6-5.2 1.7-7.2s2.7-3.7 4.6-4.8 3.9-1.7 6-1.7 4.1.6 6 1.7 3.4 2.7 4.5 4.7c.9 1.9 1.5 4.1 1.5 6.3zm-12.2-7.5c-3.7 0-5.9 1.7-6.6 5.2h12.6v-.3c-.1-1.3-.8-2.5-2-3.5s-2.5-1.4-4-1.4zm30.3-5.2c1 0 1.8.3 2.4.8.7.5 1 1.2 1 1.9 0 1-.3 1.7-.8 2.2-.5.5-1.1.8-1.8.7-.5 0-1-.1-1.6-.3-.2-.1-.4-.1-.6-.2-.4-.1-.7-.1-1.1-.1-.8 0-1.6.3-2.4.8s-1.4 1.3-1.9 2.3-.7 2.3-.7 3.7v11.4c0 .8-.3 1.5-.8 2.1-.5.6-1.2.8-2.1.8s-1.5-.3-2.1-.8c-.5-.6-.8-1.3-.8-2.1V28.8c0-.8.3-1.5.8-2.1.5-.6 1.2-.8 2.1-.8s1.5.3 2.1.8c.5.6.8 1.3.8 2.1v.6c.7-1.3 1.8-2.3 3.2-3 1.3-.7 2.8-1 4.3-1z"
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  fill="#4a4a4a"
                  style="fill: var(--tblr-navbar-logo-color, #4a4a4a)"
                />
              </svg>
            </a>
          </div>
          <!-- END NAVBAR LOGO -->

          <!-- BEGIN NAVBAR ACTIONS -->
          <div class="navbar-nav flex-row order-md-last">
            <div class="d-none d-md-flex me-3">
              <!-- BEGIN THEME TOGGLE -->
              <div class="nav-item">
                <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                  <!-- Download SVG icon from http://tabler.io/icons/icon/moon -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                    <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454l0 .008" />
                  </svg>
                </a>

                <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                  <!-- Download SVG icon from http://tabler.io/icons/icon/sun -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                    <path d="M8 12a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                    <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
                  </svg>
                </a>
              </div>
              <!-- END THEME TOGGLE -->
              <!-- BEGIN NOTIFICATIONS -->
              <div class="nav-item dropdown d-none d-md-flex">
                <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" aria-label="Show notifications" data-bs-auto-close="outside" aria-expanded="false">
                  <!-- Download SVG icon from http://tabler.io/icons/icon/bell -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                    <path d="M10 5a2 2 0 1 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />
                    <path d="M9 17v1a3 3 0 0 0 6 0v-1" />
                  </svg>
                  <span class="badge bg-red"></span>
                </a>
                <!-- BEGIN NAVBAR NOTIFICATIONS -->
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                  <div class="card">
                    <div class="card-header d-flex">
                      <h2 class="card-title">Notifications</h2>
                      <button type="button" class="btn-close ms-auto" data-navbar-notifications-close aria-label="Close"></button>
                    </div>
                    <div class="list-group list-group-flush list-group-hoverable">
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="status-dot status-dot-animated bg-red d-block"><span class="visually-hidden">Unread</span></span>
                          </div>
                          <div class="col text-truncate">
                            <a href="#" class="text-body d-block">Example 1</a>
                            <div class="d-block text-secondary text-truncate mt-n1">Change deprecated html tags to text decoration classes (#29604)</div>
                          </div>
                          <div class="col-auto">
                            <a href="#" class="list-group-item-actions" aria-label="Add to favorites">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="status-dot d-block"><span class="visually-hidden">Read</span></span>
                          </div>
                          <div class="col text-truncate">
                            <a href="#" class="text-body d-block">Example 2</a>
                            <div class="d-block text-secondary text-truncate mt-n1">justify-content:between ⇒ justify-content:space-between (#29734)</div>
                          </div>
                          <div class="col-auto">
                            <a href="#" class="list-group-item-actions show" aria-label="Remove from favorites">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-yellow">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="status-dot d-block"><span class="visually-hidden">Read</span></span>
                          </div>
                          <div class="col text-truncate">
                            <a href="#" class="text-body d-block">Example 3</a>
                            <div class="d-block text-secondary text-truncate mt-n1">Update change-version.js (#29736)</div>
                          </div>
                          <div class="col-auto">
                            <a href="#" class="list-group-item-actions" aria-label="Add to favorites">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="list-group-item">
                        <div class="row align-items-center">
                          <div class="col-auto">
                            <span class="status-dot status-dot-animated bg-green d-block"><span class="visually-hidden">Unread</span></span>
                          </div>
                          <div class="col text-truncate">
                            <a href="#" class="text-body d-block">Example 4</a>
                            <div class="d-block text-secondary text-truncate mt-n1">Regenerate package-lock.json (#29730)</div>
                          </div>
                          <div class="col-auto">
                            <a href="#" class="list-group-item-actions" aria-label="Add to favorites">
                              <!-- Download SVG icon from http://tabler.io/icons/icon/star -->
                              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon text-muted">
                                <path d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873l-6.158 -3.245" />
                              </svg>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="row">
                        <div class="col"><button type="button" class="btn w-100">Archive all</button></div>
                        <div class="col"><button type="button" class="btn w-100">Mark all as read</button></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END NAVBAR NOTIFICATIONS -->
              </div>

              <!-- END NOTIFICATIONS -->
              <!-- BEGIN APPS -->
              <div class="nav-item dropdown d-none d-md-flex">
                <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" aria-label="Show app menu" data-bs-auto-close="outside" aria-expanded="false">
                  <!-- Download SVG icon from http://tabler.io/icons/icon/apps -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                    <path d="M4 5a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1l0 -4" />
                    <path d="M4 15a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1l0 -4" />
                    <path d="M14 15a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1l0 -4" />
                    <path d="M14 7l6 0" />
                    <path d="M17 4l0 6" />
                  </svg>
                </a>
                <!-- BEGIN NAVBAR APPS -->
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end dropdown-menu-card">
                  <div class="card">
                    <div class="card-header">
                      <h2 class="card-title">My Apps</h2>

                      <div class="card-actions btn-actions">
                        <a href="#" class="btn btn-action" aria-label="App settings">
                          <!-- Download SVG icon from http://tabler.io/icons/icon/settings -->
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                            <path
                              d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065"
                            />
                            <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                          </svg>
                        </a>
                      </div>
                    </div>
                    <div class="card-body scroll-y p-2" style="max-height: 50vh">
                      <div class="row g-0">
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/amazon.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Amazon</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/android.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Android</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/app-store.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Apple App Store</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/apple-podcast.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Apple Podcast</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/apple.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Apple</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/behance.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Behance</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/discord.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Discord</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/dribbble.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Dribbble</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/dropbox.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Dropbox</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/ever-green.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Ever Green</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/facebook.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Facebook</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/figma.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Figma</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/github.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">GitHub</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/gitlab.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">GitLab</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/google-ads.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Google Ads</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/google-adsense.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Google AdSense</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/google-analytics.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Google Analytics</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/google-cloud.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Google Cloud</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/google-drive.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Google Drive</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/google-fit.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Google Fit</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/google-home.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Google Home</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/google-maps.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Google Maps</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/google-meet.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Google Meet</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/google-photos.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Google Photos</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/google-play.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Google Play</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/google-shopping.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Google Shopping</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/google-teams.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Google Teams</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/google.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Google</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/instagram.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Instagram</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/klarna.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Klarna</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/linkedin.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">LinkedIn</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/mailchimp.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Mailchimp</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/medium.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Medium</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/messenger.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Messenger</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/meta.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Meta</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/monday.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Monday</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/netflix.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Netflix</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/notion.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Notion</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/office-365.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Office 365</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/opera.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Opera</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/paypal.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">PayPal</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/petreon.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Patreon</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/pinterest.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Pinterest</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/play-store.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Play Store</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/quora.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Quora</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/reddit.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Reddit</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/shopify.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Shopify</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/skype.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Skype</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/slack.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Slack</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/snapchat.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Snapchat</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/soundcloud.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">SoundCloud</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/spotify.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Spotify</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/stripe.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Stripe</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/telegram.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Telegram</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/tiktok.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">TikTok</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/tinder.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Tinder</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/trello.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Trello</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/truth.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Truth</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/tumblr.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Tumblr</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/twitch.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Twitch</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/twitter.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Twitter</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/vimeo.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Vimeo</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/vk.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">VK</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/watppad.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Wattpad</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/webflow.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Webflow</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/whatsapp.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">WhatsApp</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/wordpress.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">WordPress</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/xing.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Xing</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/yelp.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Yelp</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/youtube.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">YouTube</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/zapier.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Zapier</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/zendesk.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Zendesk</span>
                          </a>
                        </div>
                        <div class="col-4">
                          <a href="#" class="d-flex flex-column text-center text-secondary py-2 px-2 link-hoverable">
                            <img src="./static/brands/zoom.svg" class="w-6 h-6 mx-auto mb-2" width="24" height="24" alt="" />
                            <span class="h5">Zoom</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END NAVBAR APPS -->
              </div>
              <!-- END APPS -->
              <!-- BEGIN LANGUAGE SELECTOR -->
              <div class="nav-item dropdown d-none d-md-flex">
                <a href="#" class="nav-link px-0" data-bs-toggle="dropdown" aria-label="Select language" data-bs-auto-close="outside" aria-expanded="false"> EN </a>
                <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-end">
                  <a class="dropdown-item" href="#" data-lang="cs"> Čeština </a><a class="dropdown-item" href="#" data-lang="de"> Deutsch </a><a class="dropdown-item" href="#" data-lang="el"> Ελληνικά </a><a class="dropdown-item" href="#" data-lang="en"> English </a
                  ><a class="dropdown-item" href="#" data-lang="es"> Español </a><a class="dropdown-item" href="#" data-lang="fr"> Français </a><a class="dropdown-item" href="#" data-lang="hi"> हिंदी </a><a class="dropdown-item" href="#" data-lang="hu"> Magyar </a
                  ><a class="dropdown-item" href="#" data-lang="id"> Bahasa Indonesia </a><a class="dropdown-item" href="#" data-lang="it"> Italiano </a><a class="dropdown-item" href="#" data-lang="ja"> 日本語 </a><a class="dropdown-item" href="#" data-lang="ko"> 한국어 </a
                  ><a class="dropdown-item" href="#" data-lang="nl"> Nederlands (Nederland) </a><a class="dropdown-item" href="#" data-lang="pl"> Polski </a><a class="dropdown-item" href="#" data-lang="pt"> Português </a><a class="dropdown-item" href="#" data-lang="ro"> Română </a
                  ><a class="dropdown-item" href="#" data-lang="ru"> Русский </a><a class="dropdown-item" href="#" data-lang="th"> ภาษาไทย </a><a class="dropdown-item" href="#" data-lang="tr"> Türkçe </a><a class="dropdown-item" href="#" data-lang="uk"> Українською </a
                  ><a class="dropdown-item" href="#" data-lang="vi"> Tiếng Việt </a><a class="dropdown-item" href="#" data-lang="zh"> 中文 </a>
                </div>
              </div>
              <!-- END LANGUAGE SELECTOR -->
            </div>

            <!-- BEGIN USER MENU -->
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 p-0 px-2" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span style="background-image: url('{{ asset('vendor/tabler/static/avatars/000m.jpg') }}')" class="avatar avatar-sm"></span>
                <div class="d-none d-xl-block ps-2">
                  <div>Paweł Kuna</div>
                  <div class="mt-1 small text-secondary">UI Designer</div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
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
            </div>
            <!-- END USER MENU -->
          </div>
          <!-- END NAVBAR ACTIONS -->
        </div>
      </header>

      <div class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar">
            <div class="container-xl">
              <div class="row flex-column flex-md-row flex-fill align-items-center">
                <div class="col">
                  <!-- BEGIN NAVBAR MENU -->
                  <nav aria-label="Primary" class="nav-overflow" data-bs-toggle="nav-overflow">
                    <!-- BEGIN NAVBAR MENU -->
                    <ul class="navbar-nav">
                      <!-- BEGIN NAVBAR ITEM -->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-haspopup="true" aria-expanded="false">
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
                      <!-- BEGIN NAVBAR ITEM -->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-haspopup="true" aria-expanded="false">
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
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-haspopup="true" aria-expanded="false"> Authentication </a>

                                <div class="dropdown-menu">
                                  <a href="./sign-in.html" class="dropdown-item"> Sign in </a><a href="./sign-in-link.html" class="dropdown-item"> Sign in link </a><a href="./sign-in-illustration.html" class="dropdown-item"> Sign in with illustration </a
                                  ><a href="./sign-in-cover.html" class="dropdown-item"> Sign in with cover </a><a href="./sign-up.html" class="dropdown-item"> Sign up </a><a href="./forgot-password.html" class="dropdown-item"> Forgot password </a
                                  ><a href="./terms-of-service.html" class="dropdown-item"> Terms of service </a><a href="./auth-lock.html" class="dropdown-item"> Lock screen </a
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
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-haspopup="true" aria-expanded="false"> Cards </a>

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
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-haspopup="true" aria-expanded="false"> Error pages </a>

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
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-haspopup="true" aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-haspopup="true" aria-expanded="false">
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
                                <a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-haspopup="true" aria-expanded="false"> Tasks </a>

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
                      <!-- BEGIN NAVBAR ITEM -->
                      <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-haspopup="true" aria-expanded="false">
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

                        <div class="dropdown-menu">
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
                      <!-- BEGIN NAVBAR ITEM -->
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-haspopup="true" aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-haspopup="true" aria-expanded="false">
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
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-haspopup="true" aria-expanded="false">
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
                  </nav>
                  <!-- END NAVBAR MENU -->
                </div>

                <div class="col col-md-auto">
                  <!-- BEGIN NAVBAR SIDE -->
                  <div class="navbar-side">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <button type="button" class="nav-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-settings" aria-controls="offcanvas-settings">
                          <span class="nav-link-icon">
                            <!-- Download SVG icon from http://tabler.io/icons/icon/brush -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false" class="icon">
                              <path d="M3 21v-4a4 4 0 1 1 4 4h-4" />
                              <path d="M21 3a16 16 0 0 0 -12.8 10.2" />
                              <path d="M21 3a16 16 0 0 1 -10.2 12.8" />
                              <path d="M10.6 9a9 9 0 0 1 4.4 4.4" />
                            </svg>
                          </span>
                          <span class="nav-link-title">Customize</span>
                        </button>
                      </li>
                    </ul>
                  </div>
                  <!-- END NAVBAR SIDE -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END NAVBAR -->
      <!-- END NAVBAR  -->

