$(function () {
  "use strict";
  var p,
    c = window.console || { log: function () {} },
    i = window.URL || window.webkitURL,
    n = $("#image"),
    l = $("#download"),
    t = $("#dataX"),
    a = $("#dataY"),
    o = $("#dataHeight"),
    r = $("#dataWidth"),
    d = $("#dataRotate"),
    s = $("#dataScaleX"),
    g = $("#dataScaleY"),
    v = {
      aspectRatio: 16 / 9,
      preview: ".img-preview",
      crop: function (e) {
        t.val(Math.round(e.detail.x)),
          a.val(Math.round(e.detail.y)),
          o.val(Math.round(e.detail.height)),
          r.val(Math.round(e.detail.width)),
          d.val(e.detail.rotate),
          s.val(e.detail.scaleX),
          g.val(e.detail.scaleY);
      },
    },
    h = n.attr("src"),
    m = "cropped.jpg",
    u = "image/jpeg",
    f =
      ($('[data-toggle="tooltip"]').tooltip(),
      n
        .on({
          ready: function (e) {
            c.log(e.type);
          },
          cropstart: function (e) {
            c.log(e.type, e.detail.action);
          },
          cropmove: function (e) {
            c.log(e.type, e.detail.action);
          },
          cropend: function (e) {
            c.log(e.type, e.detail.action);
          },
          crop: function (e) {
            c.log(e.type);
          },
          zoom: function (e) {
            c.log(e.type, e.detail.ratio);
          },
        })
        .cropper(v),
      $.isFunction(document.createElement("canvas").getContext) ||
        $('button[data-method="getCroppedCanvas"]').prop("disabled", !0),
      void 0 === document.createElement("cropper").style.transition &&
        ($('button[data-method="rotate"]').prop("disabled", !0),
        $('button[data-method="scale"]').prop("disabled", !0)),
      void 0 === l[0].download && l.addClass("disabled"),
      $(".docs-toggles").on("change", "input", function () {
        var e,
          t,
          a = $(this),
          o = a.attr("name"),
          r = a.prop("type");
        n.data("cropper") &&
          ("checkbox" === r
            ? ((v[o] = a.prop("checked")),
              (e = n.cropper("getCropBoxData")),
              (t = n.cropper("getCanvasData")),
              (v.ready = function () {
                n.cropper("setCropBoxData", e), n.cropper("setCanvasData", t);
              }))
            : "radio" === r && (v[o] = a.val()),
          n.cropper("destroy").cropper(v));
      }),
      $(".docs-buttons").on("click", "[data-method]", function () {
        var e,
          t,
          a,
          o = $(this),
          r = o.data(),
          d = n.data("cropper");
        if (!o.prop("disabled") && !o.hasClass("disabled") && d && r.method) {
          if (
            void 0 !== (r = $.extend({}, r)).target &&
            ((t = $(r.target)), void 0 === r.option)
          )
            try {
              r.option = JSON.parse(t.val());
            } catch (e) {
              c.log(e.message);
            }
          switch (((e = d.cropped), r.method)) {
            case "rotate":
              e && 0 < v.viewMode && n.cropper("clear");
              break;
            case "getCroppedCanvas":
              "image/jpeg" === u &&
                (r.option || (r.option = {}), (r.option.fillColor = "#fff"));
          }
          switch (
            ((a = n.cropper(r.method, r.option, r.secondOption)), r.method)
          ) {
            case "rotate":
              e && 0 < v.viewMode && n.cropper("crop");
              break;
            case "scaleX":
            case "scaleY":
              $(this).data("option", -r.option);
              break;
            case "getCroppedCanvas":
              a &&
                ($("#getCroppedCanvasModal")
                  .modal()
                  .find(".modal-body")
                  .html(a),
                l.hasClass("disabled") ||
                  ((download.download = m), l.attr("href", a.toDataURL(u))));
              break;
            case "destroy":
              p && (i.revokeObjectURL(p), (p = ""), n.attr("src", h));
          }
          if ($.isPlainObject(a) && t)
            try {
              t.val(JSON.stringify(a));
            } catch (e) {
              c.log(e.message);
            }
        }
      }),
      $(document.body).on("keydown", function (e) {
        if (e.target === this && n.data("cropper") && !(300 < this.scrollTop))
          switch (e.which) {
            case 37:
              e.preventDefault(), n.cropper("move", -1, 0);
              break;
            case 38:
              e.preventDefault(), n.cropper("move", 0, -1);
              break;
            case 39:
              e.preventDefault(), n.cropper("move", 1, 0);
              break;
            case 40:
              e.preventDefault(), n.cropper("move", 0, 1);
          }
      }),
      $("#inputImage"));
  i
    ? f.change(function () {
        var e = this.files;
        n.data("cropper") &&
          e &&
          e.length &&
          ((e = e[0]),
          /^image\/\w+$/.test(e.type)
            ? ((m = e.name),
              (u = e.type),
              p && i.revokeObjectURL(p),
              (p = i.createObjectURL(e)),
              n.cropper("destroy").attr("src", p).cropper(v),
              f.val(""))
            : window.alert("Please choose an image file."));
      })
    : f.prop("disabled", !0).parent().addClass("disabled");
});
