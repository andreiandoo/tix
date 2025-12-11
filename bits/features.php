<?php
/**
 * Template pentru lista de features Tixello
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Mapare pentru label-urile tipului de feature
$type_labels = [
    'addon'       => 'Add-on',
    'microservice'=> 'Microservice',
    'roadmap'     => 'Roadmap',
    'template'    => 'Template',
    'usage_based' => 'Usage based',
];

$sections = [];

// Luăm toate categoriile de features
$terms = get_terms([
    'taxonomy'   => 'features_cat',
    'hide_empty' => true,
    'orderby'    => 'term_order',
    'order'      => 'ASC',
]);

if ( ! is_wp_error( $terms ) && ! empty( $terms ) ) {
    foreach ( $terms as $term ) {
        // Luăm toate feature-urile din categoria curentă
        $features = get_posts([
            'post_type'      => 'feature',
            'posts_per_page' => -1,
            'tax_query'      => [
                [
                    'taxonomy' => 'features_cat',
                    'field'    => 'term_id',
                    'terms'    => $term->term_id,
                ],
            ],
            'orderby'        => 'menu_order',
            'order'          => 'ASC',
        ]);

        if ( empty( $features ) ) {
            continue;
        }

        $items = [];

        foreach ( $features as $feature ) {
            $feature_id = $feature->ID;

            // ACF fields / meta
            $icon       = get_field( 'icon', $feature_id );        // URL
            $short_text = get_field( 'short_text', $feature_id );  // descriere scurtă
            $type_field = get_field( 'type', $feature_id );        // poate fi value sau array

            $type_slug   = '';
            $badge_label = '';

            if ( is_array( $type_field ) ) {
                // cazul ACF select cu return_format = 'array'
                $type_slug   = isset( $type_field['value'] ) ? $type_field['value'] : '';
                $badge_label = isset( $type_field['label'] ) ? $type_field['label'] : '';
            } else {
                // cazul return_format = 'value'
                $type_slug   = (string) $type_field;
                $badge_label = isset( $type_labels[ $type_slug ] ) ? $type_labels[ $type_slug ] : '';
            }

            $items[] = [
                't'           => get_the_title( $feature_id ),
                'd'           => $short_text ? $short_text : '',
                'i'           => $icon ? $icon : '',
                'h'           => get_permalink( $feature_id ),
                'type'        => $type_slug,      // ex: addon, microservice...
                'badge_label' => $badge_label,    // ex: Add-on, Microservice...
            ];
        }

        if ( ! empty( $items ) ) {
            $sections[] = [
                'title' => $term->name,
                'items' => $items,
            ];
        }
    }
}
?>

<div id="tixello-benefits"
     x-data="tixelloBenefits(<?php echo wp_json_encode( $sections ); ?>)"
     class="mx-auto py-12 min-h-screen bg-slate-50 text-slate-800">

  <!-- (momentan ascuns) nav pe categorii -->
  <nav class="flex flex-wrap gap-2 hidden">
    <template x-for="s in sections" :key="s.title">
      <a :href="'#' + slugify(s.title)"
         class="rounded-full border border-slate-200 px-3 py-1.5 text-xs font-medium text-slate-700 hover:bg-slate-50"
         x-text="s.title"></a>
    </template>
  </nav>

  <!-- Bara sticky cu search -->
  <div class="sticky top-20 z-20 border-b border-slate-200 bg-black backdrop-blur">
    <div class="mx-auto max-w-7xl px-6 py-3">
      <div class="flex flex-col gap-3 md:flex-row md:items-center md:justify-between">
        <div class="w-full">
          <label class="relative block">
            <span class="sr-only">Caută funcționalități</span>
            <input x-model="q"
                   placeholder="Caută funcționalități… (ex: offline, Stripe, afiliat)"
                   class="w-full rounded-md p-4 border border-slate-300 bg-white text-slate-900 placeholder:text-slate-400 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-200" />
            <span class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2 text-slate-400">⌘K</span>
          </label>
        </div>
      </div>
    </div>
  </div>

  <div class="mx-auto max-w-7xl px-6 space-y-8">
    <!-- Nimic găsit -->
    <template x-if="filtered().length === 0">
      <div class="text-center py-16">
        <p class="text-lg font-semibold text-slate-900">Nicio potrivire găsită</p>
        <p class="mt-1 text-slate-600">Încearcă alt termen de căutare sau golește câmpul de căutare.</p>
      </div>
    </template>

    <!-- Secțiuni pe categorii (features_cat) -->
    <template x-for="sec in filtered()" :key="sec.title">
      <section :id="slugify(sec.title)" class="scroll-mt-28">
        <div class="mb-6 flex items-end justify-between">
          <h2 class="text-xl font-bold text-slate-900" x-text="sec.title"></h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
          <template x-for="item in sec.items" :key="item.t">
            <div class="group relative rounded-2xl border border-slate-200 bg-white p-5 shadow-sm transition hover:shadow-md">
              <a :href="item.h || '#'" class="mb-3 flex items-center justify-between gap-3">
                <template x-if="item.i">
                  <img :src="item.i" alt="" class="h-8 w-8 flex-shrink-0" />
                </template>
                <h3 class="group-hover:text-blue-500 transition-all ease-in-out duration-200 text-base font-semibold text-slate-900 leading-tight"
                    x-text="item.t"></h3>

                <template x-if="item.badge_label">
                  <span class="inline-flex items-center rounded-full px-2.5 py-0.5 text-xs font-medium ring-1 ring-inset"
                        :class="badgeClass(item.type)"
                        x-text="item.badge_label"></span>
                </template>
              </a>
              <p class="text-sm text-slate-600" x-text="item.d"></p>
            </div>
          </template>
        </div>
      </section>
    </template>
  </div>
</div>

<script>
  function tixelloBenefits(initialSections) {
    return {
      q: '',
      sections: initialSections || [],

      slugify(label) {
        return label
          .toLowerCase()
          .replace(/[ăâîșşțţ]/g, (m) => ({
            'ă': 'a',
            'â': 'a',
            'î': 'i',
            'ș': 's',
            'ş': 's',
            'ț': 't',
            'ţ': 't'
          }[m] || m))
          .replace(/[^a-z0-9]+/g, '-')
          .replace(/(^-|-$)/g, '');
      },

      // type = addon | microservice | roadmap | template | usage_based
      badgeClass(type) {
        const map = {
          'addon':        'bg-indigo-50 text-indigo-700 ring-indigo-200',
          'microservice': 'bg-emerald-50 text-emerald-700 ring-emerald-200',
          'roadmap':      'bg-amber-50 text-amber-700 ring-amber-200',
          'template':     'bg-fuchsia-50 text-fuchsia-700 ring-fuchsia-200',
          'usage_based':  'bg-sky-50 text-sky-700 ring-sky-200',
        };
        return map[type] || 'bg-slate-50 text-slate-700 ring-slate-200';
      },

      filtered() {
        const needle = this.q.trim().toLowerCase();
        if (!needle) return this.sections;

        const filtered = this.sections
          .map((sec) => {
            const items = sec.items.filter((it) =>
              `${it.t || ''} ${it.d || ''} ${it.badge_label || ''} ${it.type || ''}`
                .toLowerCase()
                .includes(needle)
            );
            return { ...sec, items };
          })
          .filter((sec) => sec.items.length > 0);

        return filtered;
      },
    };
  }
</script>
