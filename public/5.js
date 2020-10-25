(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[5],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/admin/Dashboard.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/admin/Dashboard.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
/* harmony default export */ __webpack_exports__["default"] = ({
  created: function created() {
    this.$store.dispatch('admin/fetchDashboard');
  },
  computed: {
    dashboard: function dashboard() {
      return this.$store.getters['admin/getDashboard'];
    }
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/admin/Dashboard.vue?vue&type=template&id=af0944b4&":
/*!*******************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/admin/Dashboard.vue?vue&type=template&id=af0944b4& ***!
  \*******************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _c("div", { staticClass: "row" }, [
      _vm._m(0),
      _vm._v(" "),
      _c("div", { staticClass: "col-md-3 col-sm-6 col-12" }, [
        _c("div", { staticClass: "info-box" }, [
          _vm._m(1),
          _vm._v(" "),
          _c("div", { staticClass: "info-box-content" }, [
            _c("span", { staticClass: "info-box-text" }, [_vm._v("Users")]),
            _vm._v(" "),
            _c("span", { staticClass: "info-box-number" }, [
              _vm._v(_vm._s(_vm.dashboard.users_total))
            ])
          ])
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-md-3 col-sm-6 col-12" }, [
        _c("div", { staticClass: "info-box" }, [
          _vm._m(2),
          _vm._v(" "),
          _c("div", { staticClass: "info-box-content" }, [
            _c("span", { staticClass: "info-box-text" }, [_vm._v("Posts")]),
            _vm._v(" "),
            _c("span", { staticClass: "info-box-number" }, [
              _vm._v(_vm._s(_vm.dashboard.posts_total))
            ])
          ])
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-md-3 col-sm-6 col-12" }, [
        _c("div", { staticClass: "info-box" }, [
          _vm._m(3),
          _vm._v(" "),
          _c("div", { staticClass: "info-box-content" }, [
            _c("span", { staticClass: "info-box-text" }, [_vm._v("Comments")]),
            _vm._v(" "),
            _c("span", { staticClass: "info-box-number" }, [
              _vm._v(_vm._s(_vm.dashboard.comments_total))
            ])
          ])
        ])
      ])
    ]),
    _vm._v(" "),
    _c("hr"),
    _vm._v(" "),
    _vm._m(4)
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "col-md-3 col-sm-6 col-12" }, [
      _c("div", { staticClass: "info-box" }, [
        _c("span", { staticClass: "info-box-icon bg-success" }, [
          _c("i", { staticClass: "fa fa-eye" })
        ]),
        _vm._v(" "),
        _c("div", { staticClass: "info-box-content" }, [
          _c("span", { staticClass: "info-box-text" }, [
            _vm._v("Total Visits")
          ]),
          _vm._v(" "),
          _c("span", { staticClass: "info-box-number" }, [_vm._v("0")])
        ])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("span", { staticClass: "info-box-icon bg-info" }, [
      _c("i", { staticClass: "fa fa-users" })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("span", { staticClass: "info-box-icon bg-secondary" }, [
      _c("i", { staticClass: "fa fa-newspaper" })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("span", { staticClass: "info-box-icon bg-warning" }, [
      _c("i", { staticClass: "far fa-comments" })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "row" }, [
      _c("div", { staticClass: "col-md-4" }, [
        _c("div", { staticClass: "card" }, [
          _c("div", { staticClass: "card-header" }, [
            _c("h3", { staticClass: "card-title" }, [_vm._v("Latest Members")]),
            _vm._v(" "),
            _c("div", { staticClass: "card-tools" }, [
              _c("span", { staticClass: "badge badge-danger" }, [
                _vm._v("8 New Members")
              ]),
              _vm._v(" "),
              _c(
                "button",
                {
                  staticClass: "btn btn-tool",
                  attrs: { type: "button", "data-card-widget": "collapse" }
                },
                [_c("i", { staticClass: "fas fa-minus" })]
              ),
              _vm._v(" "),
              _c(
                "button",
                {
                  staticClass: "btn btn-tool",
                  attrs: { type: "button", "data-card-widget": "remove" }
                },
                [_c("i", { staticClass: "fas fa-times" })]
              )
            ])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "card-body p-0" }, [
            _c("ul", { staticClass: "users-list clearfix" }, [
              _c("li", [
                _c("img", {
                  attrs: {
                    src: "/adminlte/dist/img/user1-128x128.jpg",
                    alt: "User Image"
                  }
                }),
                _vm._v(" "),
                _c(
                  "a",
                  { staticClass: "users-list-name", attrs: { href: "#" } },
                  [_vm._v("Alexander Pierce")]
                ),
                _vm._v(" "),
                _c("span", { staticClass: "users-list-date" }, [
                  _vm._v("Today")
                ])
              ]),
              _vm._v(" "),
              _c("li", [
                _c("img", {
                  attrs: {
                    src: "/adminlte/dist/img/user8-128x128.jpg",
                    alt: "User Image"
                  }
                }),
                _vm._v(" "),
                _c(
                  "a",
                  { staticClass: "users-list-name", attrs: { href: "#" } },
                  [_vm._v("Norman")]
                ),
                _vm._v(" "),
                _c("span", { staticClass: "users-list-date" }, [
                  _vm._v("Yesterday")
                ])
              ]),
              _vm._v(" "),
              _c("li", [
                _c("img", {
                  attrs: {
                    src: "/adminlte/dist/img/user7-128x128.jpg",
                    alt: "User Image"
                  }
                }),
                _vm._v(" "),
                _c(
                  "a",
                  { staticClass: "users-list-name", attrs: { href: "#" } },
                  [_vm._v("Jane")]
                ),
                _vm._v(" "),
                _c("span", { staticClass: "users-list-date" }, [
                  _vm._v("12 Jan")
                ])
              ]),
              _vm._v(" "),
              _c("li", [
                _c("img", {
                  attrs: {
                    src: "/adminlte/dist/img/user6-128x128.jpg",
                    alt: "User Image"
                  }
                }),
                _vm._v(" "),
                _c(
                  "a",
                  { staticClass: "users-list-name", attrs: { href: "#" } },
                  [_vm._v("John")]
                ),
                _vm._v(" "),
                _c("span", { staticClass: "users-list-date" }, [
                  _vm._v("12 Jan")
                ])
              ]),
              _vm._v(" "),
              _c("li", [
                _c("img", {
                  attrs: {
                    src: "/adminlte/dist/img/user2-160x160.jpg",
                    alt: "User Image"
                  }
                }),
                _vm._v(" "),
                _c(
                  "a",
                  { staticClass: "users-list-name", attrs: { href: "#" } },
                  [_vm._v("Alexander")]
                ),
                _vm._v(" "),
                _c("span", { staticClass: "users-list-date" }, [
                  _vm._v("13 Jan")
                ])
              ]),
              _vm._v(" "),
              _c("li", [
                _c("img", {
                  attrs: {
                    src: "/adminlte/dist/img/user5-128x128.jpg",
                    alt: "User Image"
                  }
                }),
                _vm._v(" "),
                _c(
                  "a",
                  { staticClass: "users-list-name", attrs: { href: "#" } },
                  [_vm._v("Sarah")]
                ),
                _vm._v(" "),
                _c("span", { staticClass: "users-list-date" }, [
                  _vm._v("14 Jan")
                ])
              ])
            ])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "card-footer text-center" }, [
            _c("a", { attrs: { href: "" } }, [_vm._v("View All Users")])
          ])
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-md-4" }, [
        _c("div", { staticClass: "card" }, [
          _c("div", { staticClass: "card-header" }, [
            _c("h3", { staticClass: "card-title" }, [
              _vm._v("Recently Added Posts")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "card-tools" }, [
              _c(
                "button",
                {
                  staticClass: "btn btn-tool",
                  attrs: { type: "button", "data-card-widget": "collapse" }
                },
                [_c("i", { staticClass: "fas fa-minus" })]
              ),
              _vm._v(" "),
              _c(
                "button",
                {
                  staticClass: "btn btn-tool",
                  attrs: { type: "button", "data-card-widget": "remove" }
                },
                [_c("i", { staticClass: "fas fa-times" })]
              )
            ])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "card-body p-0" }, [
            _c(
              "ul",
              { staticClass: "products-list product-list-in-card pl-2 pr-2" },
              [
                _c("li", { staticClass: "item" }, [
                  _c("div", { staticClass: "product-img" }, [
                    _c("img", {
                      staticClass: "img-size-50",
                      attrs: {
                        src: "/adminlte/dist/img/default-150x150.png",
                        alt: "Product Image"
                      }
                    })
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "product-info" }, [
                    _c(
                      "a",
                      {
                        staticClass: "product-title",
                        attrs: { href: "javascript:void(0)" }
                      },
                      [
                        _vm._v(
                          "Samsung TV\n                                    "
                        ),
                        _c(
                          "span",
                          { staticClass: "badge badge-warning float-right" },
                          [_vm._v("$1800")]
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c("span", { staticClass: "product-description" }, [
                      _vm._v(
                        '\n                                    Samsung 32" 1080p 60Hz LED Smart HDTV.\n                                '
                      )
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("li", { staticClass: "item" }, [
                  _c("div", { staticClass: "product-img" }, [
                    _c("img", {
                      staticClass: "img-size-50",
                      attrs: {
                        src: "/adminlte/dist/img/default-150x150.png",
                        alt: "Product Image"
                      }
                    })
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "product-info" }, [
                    _c(
                      "a",
                      {
                        staticClass: "product-title",
                        attrs: { href: "javascript:void(0)" }
                      },
                      [
                        _vm._v("Bicycle\n                                    "),
                        _c(
                          "span",
                          { staticClass: "badge badge-info float-right" },
                          [_vm._v("$700")]
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c("span", { staticClass: "product-description" }, [
                      _vm._v(
                        "\n                                    26\" Mongoose Dolomite Men's 7-speed, Navy Blue.\n                                "
                      )
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("li", { staticClass: "item" }, [
                  _c("div", { staticClass: "product-img" }, [
                    _c("img", {
                      staticClass: "img-size-50",
                      attrs: {
                        src: "/adminlte/dist/img/default-150x150.png",
                        alt: "Product Image"
                      }
                    })
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "product-info" }, [
                    _c(
                      "a",
                      {
                        staticClass: "product-title",
                        attrs: { href: "javascript:void(0)" }
                      },
                      [
                        _vm._v(
                          "\n                                    Xbox One "
                        ),
                        _c(
                          "span",
                          { staticClass: "badge badge-danger float-right" },
                          [
                            _vm._v(
                              "\n                                        $350\n                                    "
                            )
                          ]
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c("span", { staticClass: "product-description" }, [
                      _vm._v(
                        "\n                                    Xbox One Console Bundle with Halo Master Chief Collection.\n                                "
                      )
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("li", { staticClass: "item" }, [
                  _c("div", { staticClass: "product-img" }, [
                    _c("img", {
                      staticClass: "img-size-50",
                      attrs: {
                        src: "/adminlte/dist/img/default-150x150.png",
                        alt: "Product Image"
                      }
                    })
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "product-info" }, [
                    _c(
                      "a",
                      {
                        staticClass: "product-title",
                        attrs: { href: "javascript:void(0)" }
                      },
                      [
                        _vm._v(
                          "PlayStation 4\n                                    "
                        ),
                        _c(
                          "span",
                          { staticClass: "badge badge-success float-right" },
                          [_vm._v("$399")]
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c("span", { staticClass: "product-description" }, [
                      _vm._v(
                        "\n                                    PlayStation 4 500GB Console (PS4)\n                                "
                      )
                    ])
                  ])
                ])
              ]
            )
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "card-footer text-center" }, [
            _c(
              "a",
              {
                staticClass: "uppercase",
                attrs: { href: "javascript:void(0)" }
              },
              [_vm._v("View All Posts")]
            )
          ])
        ])
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-md-4" }, [
        _c("div", { staticClass: "card" }, [
          _c("div", { staticClass: "card-header" }, [
            _c("h3", { staticClass: "card-title" }, [
              _vm._v("Latest Comments")
            ]),
            _vm._v(" "),
            _c("div", { staticClass: "card-tools" }, [
              _c(
                "button",
                {
                  staticClass: "btn btn-tool",
                  attrs: { type: "button", "data-card-widget": "collapse" }
                },
                [_c("i", { staticClass: "fas fa-minus" })]
              ),
              _vm._v(" "),
              _c(
                "button",
                {
                  staticClass: "btn btn-tool",
                  attrs: { type: "button", "data-card-widget": "remove" }
                },
                [_c("i", { staticClass: "fas fa-times" })]
              )
            ])
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "card-body p-0" }, [
            _c(
              "ul",
              { staticClass: "products-list product-list-in-card pl-2 pr-2" },
              [
                _c("li", { staticClass: "item" }, [
                  _c("div", { staticClass: "product-img" }, [
                    _c("img", {
                      staticClass: "img-size-50",
                      attrs: {
                        src: "/adminlte/dist/img/default-150x150.png",
                        alt: "Product Image"
                      }
                    })
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "product-info" }, [
                    _c(
                      "a",
                      {
                        staticClass: "product-title",
                        attrs: { href: "javascript:void(0)" }
                      },
                      [
                        _vm._v(
                          "Samsung TV\n                                    "
                        ),
                        _c(
                          "span",
                          { staticClass: "badge badge-warning float-right" },
                          [_vm._v("$1800")]
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c("span", { staticClass: "product-description" }, [
                      _vm._v(
                        '\n                                    Samsung 32" 1080p 60Hz LED Smart HDTV.\n                                '
                      )
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("li", { staticClass: "item" }, [
                  _c("div", { staticClass: "product-img" }, [
                    _c("img", {
                      staticClass: "img-size-50",
                      attrs: {
                        src: "/adminlte/dist/img/default-150x150.png",
                        alt: "Product Image"
                      }
                    })
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "product-info" }, [
                    _c(
                      "a",
                      {
                        staticClass: "product-title",
                        attrs: { href: "javascript:void(0)" }
                      },
                      [
                        _vm._v("Bicycle\n                                    "),
                        _c(
                          "span",
                          { staticClass: "badge badge-info float-right" },
                          [_vm._v("$700")]
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c("span", { staticClass: "product-description" }, [
                      _vm._v(
                        "\n                                    26\" Mongoose Dolomite Men's 7-speed, Navy Blue.\n                                "
                      )
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("li", { staticClass: "item" }, [
                  _c("div", { staticClass: "product-img" }, [
                    _c("img", {
                      staticClass: "img-size-50",
                      attrs: {
                        src: "/adminlte/dist/img/default-150x150.png",
                        alt: "Product Image"
                      }
                    })
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "product-info" }, [
                    _c(
                      "a",
                      {
                        staticClass: "product-title",
                        attrs: { href: "javascript:void(0)" }
                      },
                      [
                        _vm._v(
                          "\n                                    Xbox One "
                        ),
                        _c(
                          "span",
                          { staticClass: "badge badge-danger float-right" },
                          [
                            _vm._v(
                              "\n                                        $350\n                                    "
                            )
                          ]
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c("span", { staticClass: "product-description" }, [
                      _vm._v(
                        "\n                                    Xbox One Console Bundle with Halo Master Chief Collection.\n                                "
                      )
                    ])
                  ])
                ]),
                _vm._v(" "),
                _c("li", { staticClass: "item" }, [
                  _c("div", { staticClass: "product-img" }, [
                    _c("img", {
                      staticClass: "img-size-50",
                      attrs: {
                        src: "/adminlte/dist/img/default-150x150.png",
                        alt: "Product Image"
                      }
                    })
                  ]),
                  _vm._v(" "),
                  _c("div", { staticClass: "product-info" }, [
                    _c(
                      "a",
                      {
                        staticClass: "product-title",
                        attrs: { href: "javascript:void(0)" }
                      },
                      [
                        _vm._v(
                          "PlayStation 4\n                                    "
                        ),
                        _c(
                          "span",
                          { staticClass: "badge badge-success float-right" },
                          [_vm._v("$399")]
                        )
                      ]
                    ),
                    _vm._v(" "),
                    _c("span", { staticClass: "product-description" }, [
                      _vm._v(
                        "\n                                    PlayStation 4 500GB Console (PS4)\n                                "
                      )
                    ])
                  ])
                ])
              ]
            )
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "card-footer text-center" }, [
            _c(
              "a",
              {
                staticClass: "uppercase",
                attrs: { href: "javascript:void(0)" }
              },
              [_vm._v("View All Products")]
            )
          ])
        ])
      ])
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/admin/Dashboard.vue":
/*!******************************************!*\
  !*** ./resources/js/admin/Dashboard.vue ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Dashboard_vue_vue_type_template_id_af0944b4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Dashboard.vue?vue&type=template&id=af0944b4& */ "./resources/js/admin/Dashboard.vue?vue&type=template&id=af0944b4&");
/* harmony import */ var _Dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Dashboard.vue?vue&type=script&lang=js& */ "./resources/js/admin/Dashboard.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _Dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _Dashboard_vue_vue_type_template_id_af0944b4___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Dashboard_vue_vue_type_template_id_af0944b4___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/admin/Dashboard.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/admin/Dashboard.vue?vue&type=script&lang=js&":
/*!*******************************************************************!*\
  !*** ./resources/js/admin/Dashboard.vue?vue&type=script&lang=js& ***!
  \*******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib??ref--4-0!../../../node_modules/vue-loader/lib??vue-loader-options!./Dashboard.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/admin/Dashboard.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_Dashboard_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/js/admin/Dashboard.vue?vue&type=template&id=af0944b4&":
/*!*************************************************************************!*\
  !*** ./resources/js/admin/Dashboard.vue?vue&type=template&id=af0944b4& ***!
  \*************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Dashboard_vue_vue_type_template_id_af0944b4___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./Dashboard.vue?vue&type=template&id=af0944b4& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/admin/Dashboard.vue?vue&type=template&id=af0944b4&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Dashboard_vue_vue_type_template_id_af0944b4___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Dashboard_vue_vue_type_template_id_af0944b4___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);