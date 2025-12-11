<?php
?>

<div
    x-data="{
      activeId: 'section-1',
      sections: [],
      init() {
        // Collect all sections inside the content area
        this.sections = Array.from(this.$refs.content.querySelectorAll('[data-section]')).map(el => ({
          id: el.id,
          el
        }));

        const onScroll = () => {
          const sidebarTop = this.$refs.sidebar.getBoundingClientRect().top;
          let currentId = this.activeId;
          let currentTop = -Infinity;

          this.sections.forEach(section => {
            const rect = section.el.getBoundingClientRect();

            // Section top is at or above the sidebar's top line
            if (rect.top <= sidebarTop + 1 && rect.top > currentTop) {
              currentTop = rect.top;
              currentId = section.id;
            }
          });

          this.activeId = currentId;
        };

        // Run on load + on scroll
        window.addEventListener('scroll', onScroll);
        onScroll();
      }
    }"
    class="min-h-screen"
  >
    <div class="max-w-6xl px-4 py-10 mx-auto lg:py-16">
      <div class="grid grid-cols-1 lg:grid-cols-[260px,1fr] gap-10 lg:gap-16">
        <!-- LEFT: Sticky section titles -->
        <aside
          x-ref="sidebar"
          class="self-start lg:sticky lg:top-8"
        >
          <h2 class="mb-4 text-xs font-semibold tracking-wider uppercase text-slate-500">
            Features
          </h2>

          <nav class="space-y-1">
            <!-- Item 1 -->
            <button
              @click="document.getElementById('section-1').scrollIntoView({ behavior: 'smooth', block: 'start' })"
              type="button"
              class="w-full px-3 py-2 text-left transition-colors border-l-4 rounded-md"
              :class="activeId === 'section-1'
                ? 'border-indigo-600 bg-indigo-50 text-indigo-700 font-semibold'
                : 'border-transparent text-slate-600 hover:bg-slate-100'"
            >
              Event communication
            </button>

            <!-- Item 2 -->
            <button
              @click="document.getElementById('section-2').scrollIntoView({ behavior: 'smooth', block: 'start' })"
              type="button"
              class="w-full px-3 py-2 text-left transition-colors border-l-4 rounded-md"
              :class="activeId === 'section-2'
                ? 'border-indigo-600 bg-indigo-50 text-indigo-700 font-semibold'
                : 'border-transparent text-slate-600 hover:bg-slate-100'"
            >
              Ticketing automation
            </button>

            <!-- Item 3 -->
            <button
              @click="document.getElementById('section-3').scrollIntoView({ behavior: 'smooth', block: 'start' })"
              type="button"
              class="w-full px-3 py-2 text-left transition-colors border-l-4 rounded-md"
              :class="activeId === 'section-3'
                ? 'border-indigo-600 bg-indigo-50 text-indigo-700 font-semibold'
                : 'border-transparent text-slate-600 hover:bg-slate-100'"
            >
              Event analytics
            </button>
          </nav>
        </aside>

        <!-- RIGHT: Scrollable content sections -->
        <main x-ref="content" class="space-y-12 lg:space-y-16">
          <!-- SECTION 1 -->
          <section id="section-1" data-section class="scroll-mt-24">
            <div class="p-6 bg-white border shadow-sm rounded-2xl border-slate-100 md:p-8">
              <div class="flex flex-col items-start gap-8 md:flex-row">
                <!-- Text content -->
                <div class="space-y-4 md:w-2/3">
                  <p class="text-sm font-semibold tracking-wide text-indigo-600 uppercase">
                    Event communication
                  </p>
                  <h3 class="text-2xl font-bold md:text-3xl text-slate-900">
                    Targeted event communication
                  </h3>
                  <p class="text-slate-600">
                    Reach the right people at the right time – via email, SMS or reminders.
                  </p>

                  <ul class="space-y-2 text-sm text-slate-700">
                    <li class="flex gap-2">
                      <span class="inline-flex items-center justify-center w-5 h-5 mt-1 text-xs border rounded-full border-emerald-500">
                        ✓
                      </span>
                      <span>Automated sends for event invitations &amp; reminders</span>
                    </li>
                    <li class="flex gap-2">
                      <span class="inline-flex items-center justify-center w-5 h-5 mt-1 text-xs border rounded-full border-emerald-500">
                        ✓
                      </span>
                      <span>Personalised content thanks to dynamic placeholders</span>
                    </li>
                    <li class="flex gap-2">
                      <span class="inline-flex items-center justify-center w-5 h-5 mt-1 text-xs border rounded-full border-emerald-500">
                        ✓
                      </span>
                      <span>High deliverability thanks to powerful mail servers &amp; SPF records</span>
                    </li>
                  </ul>

                  <button
                    type="button"
                    class="inline-flex items-center justify-center px-4 py-2 mt-3 text-sm font-semibold text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                  >
                    Learn more about event communication
                  </button>
                </div>

                <!-- Image -->
                <div class="md:w-1/3">
                  <div class="aspect-[4/3] w-full rounded-xl bg-slate-100 overflow-hidden">
                    <!-- Replace with your own image -->
                    <img
                      src="https://via.placeholder.com/400x300"
                      alt="Event communication illustration"
                      class="object-cover w-full h-full"
                    />
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- SECTION 2 (demo content) -->
          <section id="section-2" data-section class="scroll-mt-24">
            <div class="p-6 bg-white border shadow-sm rounded-2xl border-slate-100 md:p-8">
              <div class="flex flex-col items-start gap-8 md:flex-row">
                <div class="space-y-4 md:w-2/3">
                  <p class="text-sm font-semibold tracking-wide text-indigo-600 uppercase">
                    Ticketing
                  </p>
                  <h3 class="text-2xl font-bold md:text-3xl text-slate-900">
                    Automated ticketing flows
                  </h3>
                  <p class="text-slate-600">
                    Sell out events faster with streamlined, automated ticket workflows.
                  </p>

                  <ul class="space-y-2 text-sm text-slate-700">
                    <li class="flex gap-2">
                      <span class="inline-flex items-center justify-center w-5 h-5 mt-1 text-xs border rounded-full border-emerald-500">
                        ✓
                      </span>
                      <span>Instant ticket delivery via email or wallet passes</span>
                    </li>
                    <li class="flex gap-2">
                      <span class="inline-flex items-center justify-center w-5 h-5 mt-1 text-xs border rounded-full border-emerald-500">
                        ✓
                      </span>
                      <span>Smart capacity limits &amp; waitlists</span>
                    </li>
                    <li class="flex gap-2">
                      <span class="inline-flex items-center justify-center w-5 h-5 mt-1 text-xs border rounded-full border-emerald-500">
                        ✓
                      </span>
                      <span>Discount codes &amp; early-bird pricing</span>
                    </li>
                  </ul>

                  <button
                    type="button"
                    class="inline-flex items-center justify-center px-4 py-2 mt-3 text-sm font-semibold text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                  >
                    Learn more about ticketing
                  </button>
                </div>

                <div class="md:w-1/3">
                  <div class="aspect-[4/3] w-full rounded-xl bg-slate-100 overflow-hidden">
                    <img
                      src="https://via.placeholder.com/400x300"
                      alt="Ticketing automation illustration"
                      class="object-cover w-full h-full"
                    />
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- SECTION 3 (demo content) -->
          <section id="section-3" data-section class="scroll-mt-24">
            <div class="p-6 bg-white border shadow-sm rounded-2xl border-slate-100 md:p-8">
              <div class="flex flex-col items-start gap-8 md:flex-row">
                <div class="space-y-4 md:w-2/3">
                  <p class="text-sm font-semibold tracking-wide text-indigo-600 uppercase">
                    Analytics
                  </p>
                  <h3 class="text-2xl font-bold md:text-3xl text-slate-900">
                    Real-time event analytics
                  </h3>
                  <p class="text-slate-600">
                    Understand performance at a glance and optimise every upcoming event.
                  </p>

                  <ul class="space-y-2 text-sm text-slate-700">
                    <li class="flex gap-2">
                      <span class="inline-flex items-center justify-center w-5 h-5 mt-1 text-xs border rounded-full border-emerald-500">
                        ✓
                      </span>
                      <span>Live sales dashboards &amp; conversion tracking</span>
                    </li>
                    <li class="flex gap-2">
                      <span class="inline-flex items-center justify-center w-5 h-5 mt-1 text-xs border rounded-full border-emerald-500">
                        ✓
                      </span>
                      <span>Audience segmentation &amp; behaviour insights</span>
                    </li>
                    <li class="flex gap-2">
                      <span class="inline-flex items-center justify-center w-5 h-5 mt-1 text-xs border rounded-full border-emerald-500">
                        ✓
                      </span>
                      <span>Export-ready reports for your team</span>
                    </li>
                  </ul>

                  <button
                    type="button"
                    class="inline-flex items-center justify-center px-4 py-2 mt-3 text-sm font-semibold text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                  >
                    Learn more about analytics
                  </button>
                </div>

                <div class="md:w-1/3">
                  <div class="aspect-[4/3] w-full rounded-xl bg-slate-100 overflow-hidden">
                    <img
                      src="https://via.placeholder.com/400x300"
                      alt="Analytics illustration"
                      class="object-cover w-full h-full"
                    />
                  </div>
                </div>
              </div>
            </div>
          </section>
        </main>
      </div>
    </div>
  </div>