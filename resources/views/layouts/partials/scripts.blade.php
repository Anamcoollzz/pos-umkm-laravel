<!-- BEGIN PAGE LIBRARIES -->
    <script src="{{ asset('vendor/tabler/dist/libs/apexcharts/dist/apexcharts.min.js') }}" defer></script>
    <!-- END PAGE LIBRARIES -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('vendor/tabler/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('vendor/tabler/dist/js/tabler-vector-map.min.js') }}" defer></script>
    <script src="{{ asset('vendor/tabler/dist/js/maps/world.js') }}" defer></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <script>
      // onclick, not addEventListener: a page with several navbars runs this once per navbar,
      // and assigning the property keeps it at one handler per button.
      for (const close of document.querySelectorAll('[data-navbar-notifications-close]')) {
        close.onclick = () => {
          const toggle = close.closest('.dropdown').querySelector('[data-bs-toggle="dropdown"]')
          window.tabler.bootstrap.Dropdown.getOrCreateInstance(toggle).hide()
        }
      }
    </script>

    <script>
      ;(function () {
        const chartKey = 'chart-visitors'
        const elementId = 'chart-visitors'
        const config = {
          chart: { id: 'visitors', type: 'line', fontFamily: 'inherit', height: 96, sparkline: { enabled: true }, animations: { enabled: false } },
          stroke: { width: [2, 1], dashArray: [0, 3], lineCap: 'round', curve: 'smooth' },
          series: [
            { name: 'Visitors', data: [7687, 7543, 7545, 7543, 7635, 8140, 7810, 8315, 8379, 8441, 8485, 8227, 8906, 8561, 8333, 8551, 9305, 9647, 9359, 9840, 9805, 8612, 8970, 8097, 8070, 9829, 10545, 10754, 10270, 9282] },
            { name: 'Visitors last month', data: [8630, 9389, 8427, 9669, 8736, 8261, 8037, 8922, 9758, 8592, 8976, 9459, 8125, 8528, 8027, 8256, 8670, 9384, 9813, 8425, 8162, 8024, 8897, 9284, 8972, 8776, 8121, 9476, 8281, 9065] },
          ],
          grid: { strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, type: 'datetime' },
          yaxis: { labels: { padding: 4 } },
          labels: [
            '2020-06-20',
            '2020-06-21',
            '2020-06-22',
            '2020-06-23',
            '2020-06-24',
            '2020-06-25',
            '2020-06-26',
            '2020-06-27',
            '2020-06-28',
            '2020-06-29',
            '2020-06-30',
            '2020-07-01',
            '2020-07-02',
            '2020-07-03',
            '2020-07-04',
            '2020-07-05',
            '2020-07-06',
            '2020-07-07',
            '2020-07-08',
            '2020-07-09',
            '2020-07-10',
            '2020-07-11',
            '2020-07-12',
            '2020-07-13',
            '2020-07-14',
            '2020-07-15',
            '2020-07-16',
            '2020-07-17',
            '2020-07-18',
            '2020-07-19',
          ],
          colors: ['var(--chart-visitors-color-0)', 'var(--chart-visitors-color-1)'],
          legend: { show: false },
        }
        const xFormatter = undefined
        const yFormatter = undefined

        window.tabler_chart ??= {}

        const formatters = {
          'thousands': (val) => val.toLocaleString('en-US'),
          'suffix-k': (val) => val + 'K',
        }

        // Heatmap and treemap shade each cell by computing off the literal base color in JS
        // (light -> full color-mix by value), unlike other chart types where the
        // SVG `fill` attribute just holds `var(--chart-...)` and the browser paints
        // it directly. A raw var()/color-mix() string can't be parsed by that color
        // math, so it falls back to gray — and ApexCharts' heatmap parser only
        // accepts hex, not rgb()/rgba() either. Probing a real element's computed
        // `color` resolves var()/color-mix() (Chromium serializes it as a CSS Color 4
        // `color(srgb ...)` string), then a 1x1 canvas round-trip converts that to hex.
        function resolveCssVar(value) {
          if (typeof value !== 'string' || !value.includes('var(')) return value
          const probe = document.createElement('span')
          probe.style.cssText = 'position:absolute;visibility:hidden'
          probe.style.color = value
          document.body.appendChild(probe)
          const resolved = getComputedStyle(probe).color
          probe.remove()
          if (!resolved) return value

          const canvas = document.createElement('canvas')
          canvas.width = canvas.height = 1
          const ctx = canvas.getContext('2d')
          ctx.fillStyle = resolved
          ctx.fillRect(0, 0, 1, 1)
          const [r, g, b] = ctx.getImageData(0, 0, 1, 1).data
          return `#${[r, g, b].map((c) => c.toString(16).padStart(2, '0')).join('')}`
        }

        function initChart() {
          if (Object.hasOwn(formatters, xFormatter) && config.xaxis?.labels) {
            config.xaxis.labels.formatter = formatters[xFormatter]
          }

          if (Object.hasOwn(formatters, yFormatter) && config.yaxis?.labels) {
            config.yaxis.labels.formatter = formatters[yFormatter]
          }

          if ((config.chart?.type === 'heatmap' || config.chart?.type === 'treemap') && Array.isArray(config.colors)) {
            config.colors = config.colors.map(resolveCssVar)
          }

          window.ApexCharts && (window.tabler_chart[chartKey] = new ApexCharts(document.getElementById(elementId), config)).render()
        }

        document.readyState !== 'loading' ? initChart() : document.addEventListener('DOMContentLoaded', initChart, { once: true })
      })()
    </script>

    <script>
      ;(function () {
        const chartId = 'chart-active-users-4'
        const height = 200
        const value = 58
        const fixedTitle = 'ACTIVE USERS'

        function initRadialChart() {
          window.tabler_chart ??= {}

          window.ApexCharts &&
            (window.tabler_chart[chartId] = new ApexCharts(document.getElementById(chartId), {
              series: [value],
              chart: {
                height,
                type: 'radialBar',
              },
              plotOptions: {
                radialBar: {
                  startAngle: -120,
                  endAngle: 120,
                  hollow: {
                    margin: 15,
                    size: '70%',
                  },
                  dataLabels: {
                    name: {
                      show: true,
                      offsetY: -20,
                      fontSize: '14px',
                      fontFamily: 'inherit',
                      fontWeight: 400,
                      color: 'var(--tblr-secondary)',
                    },
                    value: {
                      show: true,
                      fontSize: '30px',
                      fontWeight: 700,
                      fontFamily: 'inherit',
                      offsetY: 0,
                      color: 'var(--tblr-body-color)',
                      formatter: (val) => `${val}%`,
                    },
                  },
                },
              },
              colors: ['var(--tblr-primary)'],
              stroke: {
                lineCap: 'round',
              },
              labels: [fixedTitle],
            })).render()
        }

        document.readyState !== 'loading' ? initRadialChart() : document.addEventListener('DOMContentLoaded', initRadialChart, { once: true })
      })()
    </script>

    <script>
      ;(function () {
        const chartKey = 'chart-revenue-bg'
        const elementId = 'chart-revenue-bg'
        const config = {
          chart: { id: 'revenue-bg', type: 'area', fontFamily: 'inherit', height: 40, sparkline: { enabled: true }, animations: { enabled: false } },
          dataLabels: { enabled: false },
          fill: { colors: ['var(--chart-revenue-bg-fill-0)'], type: 'solid' },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [{ name: 'Profits', data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67] }],
          grid: { strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, type: 'datetime' },
          yaxis: { labels: { padding: 4 } },
          labels: [
            '2020-06-20',
            '2020-06-21',
            '2020-06-22',
            '2020-06-23',
            '2020-06-24',
            '2020-06-25',
            '2020-06-26',
            '2020-06-27',
            '2020-06-28',
            '2020-06-29',
            '2020-06-30',
            '2020-07-01',
            '2020-07-02',
            '2020-07-03',
            '2020-07-04',
            '2020-07-05',
            '2020-07-06',
            '2020-07-07',
            '2020-07-08',
            '2020-07-09',
            '2020-07-10',
            '2020-07-11',
            '2020-07-12',
            '2020-07-13',
            '2020-07-14',
            '2020-07-15',
            '2020-07-16',
            '2020-07-17',
            '2020-07-18',
            '2020-07-19',
          ],
          colors: ['var(--chart-revenue-bg-color-0)'],
          legend: { show: false },
        }
        const xFormatter = undefined
        const yFormatter = undefined

        window.tabler_chart ??= {}

        const formatters = {
          'thousands': (val) => val.toLocaleString('en-US'),
          'suffix-k': (val) => val + 'K',
        }

        // Heatmap and treemap shade each cell by computing off the literal base color in JS
        // (light -> full color-mix by value), unlike other chart types where the
        // SVG `fill` attribute just holds `var(--chart-...)` and the browser paints
        // it directly. A raw var()/color-mix() string can't be parsed by that color
        // math, so it falls back to gray — and ApexCharts' heatmap parser only
        // accepts hex, not rgb()/rgba() either. Probing a real element's computed
        // `color` resolves var()/color-mix() (Chromium serializes it as a CSS Color 4
        // `color(srgb ...)` string), then a 1x1 canvas round-trip converts that to hex.
        function resolveCssVar(value) {
          if (typeof value !== 'string' || !value.includes('var(')) return value
          const probe = document.createElement('span')
          probe.style.cssText = 'position:absolute;visibility:hidden'
          probe.style.color = value
          document.body.appendChild(probe)
          const resolved = getComputedStyle(probe).color
          probe.remove()
          if (!resolved) return value

          const canvas = document.createElement('canvas')
          canvas.width = canvas.height = 1
          const ctx = canvas.getContext('2d')
          ctx.fillStyle = resolved
          ctx.fillRect(0, 0, 1, 1)
          const [r, g, b] = ctx.getImageData(0, 0, 1, 1).data
          return `#${[r, g, b].map((c) => c.toString(16).padStart(2, '0')).join('')}`
        }

        function initChart() {
          if (Object.hasOwn(formatters, xFormatter) && config.xaxis?.labels) {
            config.xaxis.labels.formatter = formatters[xFormatter]
          }

          if (Object.hasOwn(formatters, yFormatter) && config.yaxis?.labels) {
            config.yaxis.labels.formatter = formatters[yFormatter]
          }

          if ((config.chart?.type === 'heatmap' || config.chart?.type === 'treemap') && Array.isArray(config.colors)) {
            config.colors = config.colors.map(resolveCssVar)
          }

          window.ApexCharts && (window.tabler_chart[chartKey] = new ApexCharts(document.getElementById(elementId), config)).render()
        }

        document.readyState !== 'loading' ? initChart() : document.addEventListener('DOMContentLoaded', initChart, { once: true })
      })()
    </script>

    <script>
      ;(function () {
        const chartKey = 'chart-new-clients'
        const elementId = 'chart-new-clients'
        const config = {
          chart: { id: 'new-clients', type: 'line', fontFamily: 'inherit', height: 40, sparkline: { enabled: true }, animations: { enabled: false } },
          stroke: { width: [2, 1], dashArray: [0, 3], lineCap: 'round', curve: 'smooth' },
          series: [
            { name: 'May', data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 4, 46, 39, 62, 51, 35, 41, 67] },
            { name: 'April', data: [93, 54, 51, 24, 35, 35, 31, 67, 19, 43, 28, 36, 62, 61, 27, 39, 35, 41, 27, 35, 51, 46, 62, 37, 44, 53, 41, 65, 39, 37] },
          ],
          grid: { strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, type: 'datetime' },
          yaxis: { labels: { padding: 4 } },
          labels: [
            '2020-06-20',
            '2020-06-21',
            '2020-06-22',
            '2020-06-23',
            '2020-06-24',
            '2020-06-25',
            '2020-06-26',
            '2020-06-27',
            '2020-06-28',
            '2020-06-29',
            '2020-06-30',
            '2020-07-01',
            '2020-07-02',
            '2020-07-03',
            '2020-07-04',
            '2020-07-05',
            '2020-07-06',
            '2020-07-07',
            '2020-07-08',
            '2020-07-09',
            '2020-07-10',
            '2020-07-11',
            '2020-07-12',
            '2020-07-13',
            '2020-07-14',
            '2020-07-15',
            '2020-07-16',
            '2020-07-17',
            '2020-07-18',
            '2020-07-19',
          ],
          colors: ['var(--chart-new-clients-color-0)', 'var(--chart-new-clients-color-1)'],
          legend: { show: false },
        }
        const xFormatter = undefined
        const yFormatter = undefined

        window.tabler_chart ??= {}

        const formatters = {
          'thousands': (val) => val.toLocaleString('en-US'),
          'suffix-k': (val) => val + 'K',
        }

        // Heatmap and treemap shade each cell by computing off the literal base color in JS
        // (light -> full color-mix by value), unlike other chart types where the
        // SVG `fill` attribute just holds `var(--chart-...)` and the browser paints
        // it directly. A raw var()/color-mix() string can't be parsed by that color
        // math, so it falls back to gray — and ApexCharts' heatmap parser only
        // accepts hex, not rgb()/rgba() either. Probing a real element's computed
        // `color` resolves var()/color-mix() (Chromium serializes it as a CSS Color 4
        // `color(srgb ...)` string), then a 1x1 canvas round-trip converts that to hex.
        function resolveCssVar(value) {
          if (typeof value !== 'string' || !value.includes('var(')) return value
          const probe = document.createElement('span')
          probe.style.cssText = 'position:absolute;visibility:hidden'
          probe.style.color = value
          document.body.appendChild(probe)
          const resolved = getComputedStyle(probe).color
          probe.remove()
          if (!resolved) return value

          const canvas = document.createElement('canvas')
          canvas.width = canvas.height = 1
          const ctx = canvas.getContext('2d')
          ctx.fillStyle = resolved
          ctx.fillRect(0, 0, 1, 1)
          const [r, g, b] = ctx.getImageData(0, 0, 1, 1).data
          return `#${[r, g, b].map((c) => c.toString(16).padStart(2, '0')).join('')}`
        }

        function initChart() {
          if (Object.hasOwn(formatters, xFormatter) && config.xaxis?.labels) {
            config.xaxis.labels.formatter = formatters[xFormatter]
          }

          if (Object.hasOwn(formatters, yFormatter) && config.yaxis?.labels) {
            config.yaxis.labels.formatter = formatters[yFormatter]
          }

          if ((config.chart?.type === 'heatmap' || config.chart?.type === 'treemap') && Array.isArray(config.colors)) {
            config.colors = config.colors.map(resolveCssVar)
          }

          window.ApexCharts && (window.tabler_chart[chartKey] = new ApexCharts(document.getElementById(elementId), config)).render()
        }

        document.readyState !== 'loading' ? initChart() : document.addEventListener('DOMContentLoaded', initChart, { once: true })
      })()
    </script>

    <script>
      ;(function () {
        const chartKey = 'chart-active-users'
        const elementId = 'chart-active-users'
        const config = {
          chart: { id: 'active-users', type: 'bar', fontFamily: 'inherit', height: 40, sparkline: { enabled: true }, animations: { enabled: false } },
          plotOptions: { bar: { columnWidth: '50%' } },
          dataLabels: { enabled: false },
          series: [{ name: 'Profits', data: [37, 35, 44, 28, 36, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46, 39, 62, 51, 35, 41, 67] }],
          grid: { strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, type: 'datetime' },
          yaxis: { labels: { padding: 4 } },
          labels: [
            '2020-06-20',
            '2020-06-21',
            '2020-06-22',
            '2020-06-23',
            '2020-06-24',
            '2020-06-25',
            '2020-06-26',
            '2020-06-27',
            '2020-06-28',
            '2020-06-29',
            '2020-06-30',
            '2020-07-01',
            '2020-07-02',
            '2020-07-03',
            '2020-07-04',
            '2020-07-05',
            '2020-07-06',
            '2020-07-07',
            '2020-07-08',
            '2020-07-09',
            '2020-07-10',
            '2020-07-11',
            '2020-07-12',
            '2020-07-13',
            '2020-07-14',
            '2020-07-15',
            '2020-07-16',
            '2020-07-17',
            '2020-07-18',
            '2020-07-19',
          ],
          colors: ['var(--chart-active-users-color-0)'],
          legend: { show: false },
        }
        const xFormatter = undefined
        const yFormatter = undefined

        window.tabler_chart ??= {}

        const formatters = {
          'thousands': (val) => val.toLocaleString('en-US'),
          'suffix-k': (val) => val + 'K',
        }

        // Heatmap and treemap shade each cell by computing off the literal base color in JS
        // (light -> full color-mix by value), unlike other chart types where the
        // SVG `fill` attribute just holds `var(--chart-...)` and the browser paints
        // it directly. A raw var()/color-mix() string can't be parsed by that color
        // math, so it falls back to gray — and ApexCharts' heatmap parser only
        // accepts hex, not rgb()/rgba() either. Probing a real element's computed
        // `color` resolves var()/color-mix() (Chromium serializes it as a CSS Color 4
        // `color(srgb ...)` string), then a 1x1 canvas round-trip converts that to hex.
        function resolveCssVar(value) {
          if (typeof value !== 'string' || !value.includes('var(')) return value
          const probe = document.createElement('span')
          probe.style.cssText = 'position:absolute;visibility:hidden'
          probe.style.color = value
          document.body.appendChild(probe)
          const resolved = getComputedStyle(probe).color
          probe.remove()
          if (!resolved) return value

          const canvas = document.createElement('canvas')
          canvas.width = canvas.height = 1
          const ctx = canvas.getContext('2d')
          ctx.fillStyle = resolved
          ctx.fillRect(0, 0, 1, 1)
          const [r, g, b] = ctx.getImageData(0, 0, 1, 1).data
          return `#${[r, g, b].map((c) => c.toString(16).padStart(2, '0')).join('')}`
        }

        function initChart() {
          if (Object.hasOwn(formatters, xFormatter) && config.xaxis?.labels) {
            config.xaxis.labels.formatter = formatters[xFormatter]
          }

          if (Object.hasOwn(formatters, yFormatter) && config.yaxis?.labels) {
            config.yaxis.labels.formatter = formatters[yFormatter]
          }

          if ((config.chart?.type === 'heatmap' || config.chart?.type === 'treemap') && Array.isArray(config.colors)) {
            config.colors = config.colors.map(resolveCssVar)
          }

          window.ApexCharts && (window.tabler_chart[chartKey] = new ApexCharts(document.getElementById(elementId), config)).render()
        }

        document.readyState !== 'loading' ? initChart() : document.addEventListener('DOMContentLoaded', initChart, { once: true })
      })()
    </script>

    <script>
      ;(function () {
        const chartKey = 'chart-mentions'
        const elementId = 'chart-mentions'
        const config = {
          chart: { id: 'mentions', type: 'bar', fontFamily: 'inherit', height: 240, parentHeightOffset: 0, toolbar: { show: false }, animations: { enabled: false }, stacked: true },
          plotOptions: { bar: { columnWidth: '50%' } },
          dataLabels: { enabled: false },
          series: [
            { name: 'Web', data: [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 2, 12, 5, 8, 22, 6, 8, 6, 4, 1, 8, 24, 29, 51, 40, 47, 23, 26, 50, 26, 41, 22, 46, 47, 81, 46, 6] },
            { name: 'Social', data: [2, 5, 4, 3, 3, 1, 4, 7, 5, 1, 2, 5, 3, 2, 6, 7, 7, 1, 5, 5, 2, 12, 4, 6, 18, 3, 5, 2, 13, 15, 20, 47, 18, 15, 11, 10, 0] },
            { name: 'Other', data: [2, 9, 1, 7, 8, 3, 6, 5, 5, 4, 6, 4, 1, 9, 3, 6, 7, 5, 2, 8, 4, 9, 1, 2, 6, 7, 5, 1, 8, 3, 2, 3, 4, 9, 7, 1, 6] },
          ],
          grid: { padding: { top: -20, right: 0, left: -4, bottom: -4 }, strokeDashArray: 4, xaxis: { lines: { show: true } } },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, type: 'datetime' },
          yaxis: { labels: { padding: 4 } },
          labels: [
            '2020-06-20',
            '2020-06-21',
            '2020-06-22',
            '2020-06-23',
            '2020-06-24',
            '2020-06-25',
            '2020-06-26',
            '2020-06-27',
            '2020-06-28',
            '2020-06-29',
            '2020-06-30',
            '2020-07-01',
            '2020-07-02',
            '2020-07-03',
            '2020-07-04',
            '2020-07-05',
            '2020-07-06',
            '2020-07-07',
            '2020-07-08',
            '2020-07-09',
            '2020-07-10',
            '2020-07-11',
            '2020-07-12',
            '2020-07-13',
            '2020-07-14',
            '2020-07-15',
            '2020-07-16',
            '2020-07-17',
            '2020-07-18',
            '2020-07-19',
            '2020-07-20',
            '2020-07-21',
            '2020-07-22',
            '2020-07-23',
            '2020-07-24',
            '2020-07-25',
            '2020-07-26',
          ],
          colors: ['var(--chart-mentions-color-0)', 'var(--chart-mentions-color-1)', 'var(--chart-mentions-color-2)'],
          legend: { show: false },
        }
        const xFormatter = undefined
        const yFormatter = undefined

        window.tabler_chart ??= {}

        const formatters = {
          'thousands': (val) => val.toLocaleString('en-US'),
          'suffix-k': (val) => val + 'K',
        }

        // Heatmap and treemap shade each cell by computing off the literal base color in JS
        // (light -> full color-mix by value), unlike other chart types where the
        // SVG `fill` attribute just holds `var(--chart-...)` and the browser paints
        // it directly. A raw var()/color-mix() string can't be parsed by that color
        // math, so it falls back to gray — and ApexCharts' heatmap parser only
        // accepts hex, not rgb()/rgba() either. Probing a real element's computed
        // `color` resolves var()/color-mix() (Chromium serializes it as a CSS Color 4
        // `color(srgb ...)` string), then a 1x1 canvas round-trip converts that to hex.
        function resolveCssVar(value) {
          if (typeof value !== 'string' || !value.includes('var(')) return value
          const probe = document.createElement('span')
          probe.style.cssText = 'position:absolute;visibility:hidden'
          probe.style.color = value
          document.body.appendChild(probe)
          const resolved = getComputedStyle(probe).color
          probe.remove()
          if (!resolved) return value

          const canvas = document.createElement('canvas')
          canvas.width = canvas.height = 1
          const ctx = canvas.getContext('2d')
          ctx.fillStyle = resolved
          ctx.fillRect(0, 0, 1, 1)
          const [r, g, b] = ctx.getImageData(0, 0, 1, 1).data
          return `#${[r, g, b].map((c) => c.toString(16).padStart(2, '0')).join('')}`
        }

        function initChart() {
          if (Object.hasOwn(formatters, xFormatter) && config.xaxis?.labels) {
            config.xaxis.labels.formatter = formatters[xFormatter]
          }

          if (Object.hasOwn(formatters, yFormatter) && config.yaxis?.labels) {
            config.yaxis.labels.formatter = formatters[yFormatter]
          }

          if ((config.chart?.type === 'heatmap' || config.chart?.type === 'treemap') && Array.isArray(config.colors)) {
            config.colors = config.colors.map(resolveCssVar)
          }

          window.ApexCharts && (window.tabler_chart[chartKey] = new ApexCharts(document.getElementById(elementId), config)).render()
        }

        document.readyState !== 'loading' ? initChart() : document.addEventListener('DOMContentLoaded', initChart, { once: true })
      })()
    </script>

    <script>
      /*
            Toggles a chart series when its legend item is clicked.
            The chart is exposed by the demo Chart component as window.tabler_chart['chart-mentions'].
            */
      document.querySelectorAll('#traffic-summary-legend .legend').forEach((item) => {
        item.addEventListener('click', () => {
          const chart = window.tabler_chart && window.tabler_chart['chart-mentions']
          if (!chart) return
          chart.toggleSeries(item.dataset.series)
          item.classList.toggle('legend-off')
        })
      })
    </script>

    <script>
      ;(function () {
        const chartKey = 'chart-development-activity'
        const elementId = 'chart-development-activity'
        const config = {
          chart: { id: 'development-activity', type: 'area', fontFamily: 'inherit', height: 192, sparkline: { enabled: true }, animations: { enabled: false } },
          dataLabels: { enabled: false },
          fill: { colors: ['var(--chart-development-activity-fill-0)'], type: 'solid' },
          stroke: { width: 2, lineCap: 'round', curve: 'smooth' },
          series: [{ name: 'Purchases', data: [3, 5, 4, 6, 7, 5, 6, 8, 24, 7, 12, 5, 6, 3, 8, 4, 14, 30, 17, 19, 15, 14, 25, 32, 40, 55, 60, 48, 52, 70] }],
          grid: { strokeDashArray: 4 },
          xaxis: { labels: { padding: 0 }, tooltip: { enabled: false }, axisBorder: { show: false }, type: 'datetime' },
          yaxis: { labels: { padding: 4 } },
          labels: [
            '2020-06-20',
            '2020-06-21',
            '2020-06-22',
            '2020-06-23',
            '2020-06-24',
            '2020-06-25',
            '2020-06-26',
            '2020-06-27',
            '2020-06-28',
            '2020-06-29',
            '2020-06-30',
            '2020-07-01',
            '2020-07-02',
            '2020-07-03',
            '2020-07-04',
            '2020-07-05',
            '2020-07-06',
            '2020-07-07',
            '2020-07-08',
            '2020-07-09',
            '2020-07-10',
            '2020-07-11',
            '2020-07-12',
            '2020-07-13',
            '2020-07-14',
            '2020-07-15',
            '2020-07-16',
            '2020-07-17',
            '2020-07-18',
            '2020-07-19',
          ],
          colors: ['var(--chart-development-activity-color-0)'],
          legend: { show: false },
          markers: { size: 0, hover: { sizeOffset: 0 } },
        }
        const xFormatter = undefined
        const yFormatter = undefined

        window.tabler_chart ??= {}

        const formatters = {
          'thousands': (val) => val.toLocaleString('en-US'),
          'suffix-k': (val) => val + 'K',
        }

        // Heatmap and treemap shade each cell by computing off the literal base color in JS
        // (light -> full color-mix by value), unlike other chart types where the
        // SVG `fill` attribute just holds `var(--chart-...)` and the browser paints
        // it directly. A raw var()/color-mix() string can't be parsed by that color
        // math, so it falls back to gray — and ApexCharts' heatmap parser only
        // accepts hex, not rgb()/rgba() either. Probing a real element's computed
        // `color` resolves var()/color-mix() (Chromium serializes it as a CSS Color 4
        // `color(srgb ...)` string), then a 1x1 canvas round-trip converts that to hex.
        function resolveCssVar(value) {
          if (typeof value !== 'string' || !value.includes('var(')) return value
          const probe = document.createElement('span')
          probe.style.cssText = 'position:absolute;visibility:hidden'
          probe.style.color = value
          document.body.appendChild(probe)
          const resolved = getComputedStyle(probe).color
          probe.remove()
          if (!resolved) return value

          const canvas = document.createElement('canvas')
          canvas.width = canvas.height = 1
          const ctx = canvas.getContext('2d')
          ctx.fillStyle = resolved
          ctx.fillRect(0, 0, 1, 1)
          const [r, g, b] = ctx.getImageData(0, 0, 1, 1).data
          return `#${[r, g, b].map((c) => c.toString(16).padStart(2, '0')).join('')}`
        }

        function initChart() {
          if (Object.hasOwn(formatters, xFormatter) && config.xaxis?.labels) {
            config.xaxis.labels.formatter = formatters[xFormatter]
          }

          if (Object.hasOwn(formatters, yFormatter) && config.yaxis?.labels) {
            config.yaxis.labels.formatter = formatters[yFormatter]
          }

          if ((config.chart?.type === 'heatmap' || config.chart?.type === 'treemap') && Array.isArray(config.colors)) {
            config.colors = config.colors.map(resolveCssVar)
          }

          window.ApexCharts && (window.tabler_chart[chartKey] = new ApexCharts(document.getElementById(elementId), config)).render()
        }

        document.readyState !== 'loading' ? initChart() : document.addEventListener('DOMContentLoaded', initChart, { once: true })
      })()
    </script>

    <!-- BEGIN PAGE SCRIPTS -->
    <script>
      ;(function () {
        const themeDefaults = {
          'theme': 'auto',
          'theme-base': 'neutral',
          'theme-font': 'sans-serif',
          'theme-primary': 'blue',
          'theme-radius': '1',
          'layout': 'default',
          'navbar': 'default',
          'navbar-position': 'horizontal',
          'navbar-style': 'default',
          'navbar-theme': 'default',
          'offcanvas-style': 'default',
          'sidebar': 'default',
        }
        const themePresets = {
          scheme: { 'auto': { 'theme': 'auto', 'navbar-theme': 'default' }, 'light': { 'theme': 'light', 'navbar-theme': 'default' }, 'dark': { 'theme': 'dark', 'navbar-theme': 'default' }, 'dark-nav': { 'theme': 'light', 'navbar-theme': 'dark' }, 'colored': { 'theme': 'light', 'navbar-theme': 'primary' } },
        }
        const sidebarOnlyKeys = ['sidebar']
        const navbarOnlyKeys = ['navbar']

        /*
			This script handles the theme settings offcanvas functionality
			It saves the selected settings to localStorage and applies them to the document
			It also updates the URL with the selected settings as query parameters
			It also has a reset button to clear all settings and revert to default

			This is just a demo script to show how to implement theme settings. You can modify it as needed.
			*/
        document.addEventListener('DOMContentLoaded', function () {
          var url = new URL(window.location)
          var form = document.getElementById('offcanvas-settings')
          var resetButton = document.getElementById('reset-changes')

          // Same rule as the theme script: the default state is the absence of the
          // attribute, so only a non-default value is written.
          var applyValue = function (key, value) {
            var applied = value

            if (key === 'theme' && value === 'auto') {
              applied = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
            }

            if (applied !== themeDefaults[key]) {
              document.documentElement.setAttribute('data-bs-' + key, applied)
            } else {
              document.documentElement.removeAttribute('data-bs-' + key)
            }
          }

          // Same precedence as the theme script: a stored choice wins, otherwise
          // the attribute the page rendered for its own layout, otherwise the
          // default. Reading the attribute matters on the layout demo pages,
          // where the page states its variant and nothing is stored yet.
          //
          // Color mode is the exception: data-bs-theme holds the resolved value,
          // so "auto" on a light system looks exactly like an explicit "light"
          // and reading it back would silently turn the default into a choice.
          var currentValue = function (key) {
            var stored = window.localStorage['tabler-' + key]
            var rendered = key === 'theme' ? null : document.documentElement.getAttribute('data-bs-' + key)

            return stored || rendered || themeDefaults[key]
          }

          // Some settings only do something with one of the navigations on
          // screen; the others are hidden rather than left to do nothing.
          var toggleSidebarSettings = function () {
            var vertical = currentValue('navbar-position') === 'vertical'
            var setHidden = function (keys, hidden) {
              keys.forEach(function (key) {
                var fieldset = form.querySelector('[data-theme-setting="' + key + '"]')

                if (fieldset) {
                  fieldset.hidden = hidden
                }
              })
            }

            setHidden(sidebarOnlyKeys, !vertical)
            setHidden(navbarOnlyKeys, vertical)
          }

          var setValue = function (key, value) {
            applyValue(key, value)
            window.localStorage.setItem('tabler-' + key, value)
            url.searchParams.set(key, value)
          }

          // A preset tile stands for several keys; it reads as checked only
          // while every one of them holds the tile's value.
          var presetMatches = function (values) {
            return Object.keys(values).every(function (key) {
              return currentValue(key) === values[key]
            })
          }

          var checkItems = function () {
            for (var key in themeDefaults) {
              var value = currentValue(key)

              form.querySelectorAll('[name="' + key + '"]').forEach(function (radio) {
                radio.checked = radio.value === value
              })
            }

            for (var name in themePresets) {
              form.querySelectorAll('[name="' + name + '"]').forEach(function (radio) {
                radio.checked = presetMatches(themePresets[name][radio.value])
              })
            }

            toggleSidebarSettings()
          }

          form.addEventListener('change', function (event) {
            var target = event.target,
              name = target.name,
              value = target.value

            if (name in themePresets) {
              var values = themePresets[name][value]

              for (var presetKey in values) {
                setValue(presetKey, values[presetKey])
              }
            } else if (name in themeDefaults) {
              setValue(name, value)
            }

            toggleSidebarSettings()
            // Plugins that measured the old width (charts, maps) need a nudge.
            window.dispatchEvent(new Event('resize'))
            window.history.pushState({}, '', url)
          })

          resetButton.addEventListener('click', function () {
            for (var key in themeDefaults) {
              applyValue(key, themeDefaults[key])
              window.localStorage.removeItem('tabler-' + key)
              url.searchParams.delete(key)
            }

            checkItems()

            window.dispatchEvent(new Event('resize'))
            window.history.pushState({}, '', url)
          })

          checkItems()
        })
      })()
    </script>
    <!-- END PAGE SCRIPTS -->
