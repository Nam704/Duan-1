function hexToRGB(t, e) {
  var i = parseInt(t.slice(1, 3), 16),
    o = parseInt(t.slice(3, 5), 16),
    t = parseInt(t.slice(5, 7), 16);
  return e
    ? "rgba(" + i + ", " + o + ", " + t + ", " + e + ")"
    : "rgb(" + i + ", " + o + ", " + t + ")";
}
function skipped(t, e) {
  return t.p0.skip || t.p1.skip ? e : void 0;
}
function down(t, e) {
  return t.p0.parsed.y > t.p1.parsed.y ? e : void 0;
}
!(function (i) {
  "use strict";
  function t() {
    (this.$body = i("body")),
      (this.charts = []),
      (this.defaultColors = ["#3bc0c3", "#4489e4", "#d03f3f", "#716cb0"]);
  }
  (t.prototype.interpolationExample = function () {
    var t = document.getElementById("interpolation-example"),
      e = t.getAttribute("data-colors"),
      e = e ? e.split(",") : this.defaultColors,
      t = t.getContext("2d"),
      i = [0, 20, 20, 60, 60, 120, NaN, 180, 120, 125, 105, 110, 170],
      t = new Chart(t, {
        type: "line",
        data: {
          labels: [
            "1",
            "2",
            "3",
            "4",
            "5",
            "6",
            "7",
            "8",
            "9",
            "10",
            "11",
            "12",
          ],
          datasets: [
            {
              label: "Fully Rounded",
              data: i,
              borderColor: e[0],
              fill: !1,
              cubicInterpolationMode: "monotone",
              tension: 0.4,
            },
            {
              label: "Small Radius",
              data: i,
              borderColor: e[1],
              fill: !1,
              tension: 0.4,
            },
            { label: "Small Radius", data: i, borderColor: e[2], fill: !1 },
          ],
        },
        options: {
          responsive: !0,
          maintainAspectRatio: !1,
          interaction: { intersect: !1 },
          plugins: { legend: { display: !1, position: "top" } },
          scales: {
            x: { grid: { display: !1 } },
            y: { grid: { display: !1 }, suggestedMin: -10, suggestedMax: 200 },
          },
        },
      });
    this.charts.push(t);
  }),
    (t.prototype.lineExample = function () {
      var t = document.getElementById("line-example"),
        e = t.getAttribute("data-colors"),
        e = e ? e.split(",") : this.defaultColors,
        t = t.getContext("2d"),
        t = new Chart(t, {
          type: "line",
          data: {
            labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
            datasets: [
              {
                label: "Fully Rounded",
                data: [32, 42, 42, 62, 52, 75, 62],
                borderColor: e[0],
                fill: !0,
                backgroundColor: hexToRGB(e[0], 0.3),
              },
              {
                label: "Small Radius",
                data: [42, 58, 66, 93, 82, 105, 92],
                fill: !0,
                backgroundColor: "transparent",
                borderColor: e[1],
                borderDash: [5, 5],
              },
            ],
          },
          options: {
            responsive: !0,
            maintainAspectRatio: !1,
            plugins: { legend: { display: !1, position: "top" } },
            tension: 0.3,
            scales: {
              x: { grid: { display: !1 } },
              y: { grid: { display: !1 } },
            },
          },
        });
      this.charts.push(t);
    }),
    (t.prototype.init = function () {
      var e = this;
      (Chart.defaults.font.family =
        '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif'),
        (Chart.defaults.color = "#8391a2"),
        (Chart.defaults.scale.grid.color = "#8391a2"),
        this.interpolationExample(),
        this.lineExample(),
        i(window).on("resizeEnd", function (t) {
          i.each(e.charts, function (t, e) {
            try {
              e.destroy();
            } catch (t) {}
          }),
            e.interpolationExample(),
            e.lineExample();
        }),
        i(window).resize(function () {
          this.resizeTO && clearTimeout(this.resizeTO),
            (this.resizeTO = setTimeout(function () {
              i(this).trigger("resizeEnd");
            }, 500));
        });
    }),
    (i.ChartJs = new t()),
    (i.ChartJs.Constructor = t);
})(window.jQuery),
  (function () {
    "use strict";
    window.jQuery.ChartJs.init();
  })();
