function hexToRGB(o, i) {
  var l = parseInt(o.slice(1, 3), 16),
    r = parseInt(o.slice(3, 5), 16),
    o = parseInt(o.slice(5, 7), 16);
  return i
    ? "rgba(" + l + ", " + r + ", " + o + ", " + i + ")"
    : "rgb(" + l + ", " + r + ", " + o + ")";
}
$(document).ready(function () {
  function i() {
    var o = ["#3bc0c3", "#4489e4"],
      i = $("#sparkline1").data("colors"),
      o =
        (i && (o = i.split(",")),
        $("#sparkline1").sparkline([42, 48, 56, 45, 60, 58, 42, 40, 60], {
          type: "line",
          width: "100%",
          height: "165",
          chartRangeMax: 50,
          lineColor: o[0],
          fillColor: hexToRGB(o[0], 0.3),
          highlightLineColor: "rgba(0,0,0,.1)",
          highlightSpotColor: "rgba(0,0,0,.2)",
          maxSpotColor: !1,
          minSpotColor: !1,
          spotColor: !1,
          lineWidth: 1,
        }),
        $("#sparkline1").sparkline([35, 55, 48, 45, 58, 62, 42, 52, 32], {
          type: "line",
          width: "100%",
          height: "165",
          chartRangeMax: 40,
          lineColor: o[1],
          fillColor: hexToRGB(o[1], 0.3),
          composite: !0,
          highlightLineColor: "rgba(0,0,0,.1)",
          highlightSpotColor: "rgba(0,0,0,.2)",
          maxSpotColor: !1,
          minSpotColor: !1,
          spotColor: !1,
          lineWidth: 1,
        }),
        ["#3bc0c3"]),
      o =
        ((i = $("#sparkline2").data("colors")) && (o = i.split(",")),
        $("#sparkline2").sparkline(
          [8, 14, 16, 12, 18, 20, 10, 14, 22, 12, 14, 10, 14, 16, 13, 16],
          {
            type: "bar",
            height: "165",
            barWidth: "10",
            barSpacing: "3",
            barColor: o,
          }
        ),
        ["#3bc0c3", "#4489e4", "#d03f3f", "#716cb0"]),
      o =
        ((i = $("#sparkline3").data("colors")) && (o = i.split(",")),
        $("#sparkline3").sparkline([20, 15, 20, 5], {
          type: "pie",
          width: "165",
          height: "165",
          sliceColors: o,
        }),
        ["#3bc0c3", "#716cb0"]),
      o =
        ((i = $("#sparkline4").data("colors")) && (o = i.split(",")),
        $("#sparkline4").sparkline([5, 48, 30, 40, 49, 50, 62, 42, 44], {
          type: "line",
          width: "100%",
          height: "165",
          chartRangeMax: 50,
          lineColor: o[0],
          fillColor: "transparent",
          lineWidth: 2,
          highlightLineColor: "rgba(0,0,0,.1)",
          highlightSpotColor: "rgba(0,0,0,.2)",
          maxSpotColor: !1,
          minSpotColor: !1,
          spotColor: !1,
        }),
        $("#sparkline4").sparkline([3, 24, 25, 35, 40, 45, 42, 24, 42], {
          type: "line",
          width: "100%",
          height: "165",
          chartRangeMax: 40,
          lineColor: o[1],
          fillColor: "transparent",
          composite: !0,
          lineWidth: 2,
          maxSpotColor: !1,
          minSpotColor: !1,
          spotColor: !1,
          highlightLineColor: "rgba(0,0,0,1)",
          highlightSpotColor: "rgba(0,0,0,1)",
        }),
        ["#f2f2f7", "#3bc0c3"]),
      o =
        ((i = $("#sparkline6").data("colors")) && (o = i.split(",")),
        $("#sparkline6").sparkline(
          [3, 6, 7, 8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12],
          {
            type: "line",
            width: "100%",
            height: "165",
            lineColor: o[0],
            lineWidth: 2,
            fillColor: "rgba(227,234,239,0.3)",
            highlightLineColor: "rgba(0,0,0,.1)",
            highlightSpotColor: "rgba(0,0,0,.2)",
          }
        ),
        $("#sparkline6").sparkline(
          [3, 6, 7, 8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12],
          {
            type: "bar",
            height: "165",
            barWidth: "10",
            barSpacing: "5",
            composite: !0,
            barColor: o[1],
          }
        ),
        ["#33b0e0"]),
      o =
        ((i = $("#sparkline7").data("colors")) && (o = i.split(",")),
        $("#sparkline7").sparkline(
          [
            8, 12, 14, 14, 8, 6, 4, 2, 8, 8, 10, 12, 6, 8, 10, 16, 14, 12, 18,
            6, 4, 8, 2, 10, 12, 8, 6, 14,
          ],
          { type: "discrete", width: "280", height: "165", lineColor: o }
        ),
        ["#3bc0c3", "#4489e4"]),
      o =
        ((i = $("#sparkline8").data("colors")) && (o = i.split(",")),
        $("#sparkline8").sparkline([12, 14, 16, 12, 9], {
          type: "bullet",
          width: "280",
          height: "80",
          targetColor: o[0],
          performanceColor: o[1],
        }),
        ["#3bc0c3", "#1a2942", "#d1d7d973"]),
      o =
        ((i = $("#sparkline9").data("colors")) && (o = i.split(",")),
        $("#sparkline9").sparkline(
          [8, 42, 36, 49, 56, 50, 70, 66, 98, 92, 75, 89, 90, 89, 100],
          {
            type: "box",
            width: "280",
            height: "80",
            boxLineColor: o[0],
            boxFillColor: "transparent",
            whiskerColor: o[1],
            medianColor: o[1],
            targetColor: o[1],
          }
        ),
        ["#3bc0c3", "#1a2942", "#d1d7d973"]);
    (i = $("#sparkline10").data("colors")) && (o = i.split(",")),
      $("#sparkline10").sparkline([1, 1, 0, 1, -1, -1, 1, -1, 0, 0, 1, 1], {
        height: "80",
        width: "100%",
        type: "tristate",
        posBarColor: o[0],
        negBarColor: o[1],
        zeroBarColor: o[2],
        barWidth: 8,
        barSpacing: 3,
        zeroAxis: !1,
      });
  }
  function l() {
    function r() {
      var o,
        i,
        l = new Date().getTime();
      e &&
        e != l &&
        ((o = Math.round((a / (l - e)) * 1e3)),
        n.push(o),
        30 < n.length && n.splice(0, 1),
        (a = 0),
        (o = ["#f1556c"]),
        (i = $("#sparkline5").data("colors")) && (o = i.split(",")),
        $("#sparkline5").sparkline(n, {
          tooltipSuffix: " pixels per second",
          type: "line",
          width: "100%",
          height: "165",
          chartRangeMax: 77,
          maxSpotColor: !1,
          minSpotColor: !1,
          spotColor: !1,
          lineWidth: 1,
          lineColor: o,
          fillColor: hexToRGB(o[0], 0.3),
          highlightLineColor: "rgba(24,147,126,.1)",
          highlightSpotColor: "rgba(24,147,126,.2)",
        })),
        (e = l),
        setTimeout(r, 500);
    }
    var e,
      l = -1,
      t = -1,
      a = 0,
      n = [];
    $("html").mousemove(function (o) {
      var i = o.pageX,
        o = o.pageY;
      -1 < l && (a += Math.max(Math.abs(i - l), Math.abs(o - t))),
        (l = i),
        (t = o);
    }),
      setTimeout(r, 500);
  }
  var r;
  i(),
    l(),
    $(window).resize(function (o) {
      clearTimeout(r),
        (r = setTimeout(function () {
          i(), l();
        }, 300));
    });
});
