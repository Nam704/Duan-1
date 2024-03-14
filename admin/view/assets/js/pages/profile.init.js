!(function (d) {
  "use strict";
  function t() {
    (this.$body = d("body")), (this.charts = []);
  }
  (t.prototype.respChart = function (t, r, a, e) {
    var o,
      n = Chart.controllers.bar.prototype.draw,
      i =
        ((Chart.controllers.bar.draw = function () {
          n.apply(this, arguments);
          var t = this.chart.ctx,
            r = t.fill;
          t.fill = function () {
            t.save(),
              (t.shadowColor = "rgba(0,0,0,0.01)"),
              (t.shadowBlur = 5),
              (t.shadowOffsetX = 4),
              (t.shadowOffsetY = 5),
              r.apply(this, arguments),
              t.restore();
          };
        }),
        (Chart.defaults.font.color = "rgba(93,106,120,0.2)"),
        (Chart.defaults.scale.grid.color = "rgba(93,106,120,0.2)"),
        t.get(0).getContext("2d")),
      s = d(t).parent();
    switch ((t.attr("width", d(s).width()), r)) {
      case "Line":
        o = new Chart(i, { type: "line", data: a, options: e });
        break;
      case "Doughnut":
        o = new Chart(i, { type: "doughnut", data: a, options: e });
        break;
      case "Pie":
        o = new Chart(i, { type: "pie", data: a, options: e });
        break;
      case "Bar":
        o = new Chart(i, { type: "bar", data: a, options: e });
        break;
      case "Radar":
        o = new Chart(i, { type: "radar", data: a, options: e });
        break;
      case "PolarArea":
        o = new Chart(i, { data: a, type: "polarArea", options: e });
    }
    return o;
  }),
    (t.prototype.initCharts = function () {
      var t;
      0 < d("#high-performing-product").length &&
        ((t = document
          .getElementById("high-performing-product")
          .getContext("2d")
          .createLinearGradient(0, 500, 0, 150)).addColorStop(0, "#409c6b"),
        t.addColorStop(1, "#3e60d5"),
        (t = {
          labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          datasets: [
            {
              label: "Orders",
              backgroundColor: t,
              borderColor: t,
              hoverBackgroundColor: t,
              hoverBorderColor: t,
              data: [65, 59, 80, 81, 56, 89, 40, 32, 65, 59, 80, 81],
            },
            {
              label: "Revenue",
              backgroundColor: "rgba(93,106,120,0.2)",
              borderColor: "rgba(93,106,120,0.2)",
              hoverBackgroundColor: "rgba(93,106,120,0.2)",
              hoverBorderColor: "rgba(93,106,120,0.2)",
              data: [89, 40, 32, 65, 59, 80, 81, 56, 89, 40, 65, 59],
            },
          ],
        }),
        [].push(
          this.respChart(d("#high-performing-product"), "Bar", t, {
            maintainAspectRatio: !1,
            datasets: { bar: { barPercentage: 0.7, categoryPercentage: 0.5 } },
            plugins: { legend: { display: !1 } },
            scales: {
              y: {
                grid: { display: !1, color: "rgba(0,0,0,0.05)" },
                stacked: !1,
                ticks: { stepSize: 20 },
              },
              x: { stacked: !1, grid: { color: "rgba(0,0,0,0.01)" } },
            },
          })
        ));
    }),
    (t.prototype.init = function () {
      var r = this;
      (Chart.defaults.font.family =
        '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif'),
        (r.charts = this.initCharts()),
        d(window).on("resize", function (t) {
          d.each(r.charts, function (t, r) {
            try {
              r.destroy();
            } catch (t) {}
          }),
            (r.charts = r.initCharts());
        });
    }),
    (d.Profile = new t()),
    (d.Profile.Constructor = t);
})(window.jQuery),
  (function () {
    "use strict";
    window.jQuery.Profile.init();
  })();
