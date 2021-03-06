"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = _default;

function _default() {
  return function ({
    addUtilities,
    variants,
    target
  }) {
    addUtilities({
      '.block': {
        display: 'block'
      },
      '.inline-block': {
        display: 'inline-block'
      },
      '.inline': {
        display: 'inline'
      },
      '.flex': {
        display: 'flex'
      },
      '.inline-flex': {
        display: 'inline-flex'
      },
      '.table': {
        display: 'table'
      },
      '.table-caption': {
        display: 'table-caption'
      },
      '.table-cell': {
        display: 'table-cell'
      },
      '.table-column': {
        display: 'table-column'
      },
      '.table-column-group': {
        display: 'table-column-group'
      },
      '.table-footer-group': {
        display: 'table-footer-group'
      },
      '.table-header-group': {
        display: 'table-header-group'
      },
      '.table-row-group': {
        display: 'table-row-group'
      },
      '.table-row': {
        display: 'table-row'
      },
      ...(target('display') === 'ie11' ? {} : {
        '.flow-root': {
          display: 'flow-root'
        },
        '.grid': {
          display: 'grid'
        },
        '.inline-grid': {
          display: 'inline-grid'
        },
        '.contents': {
          display: 'contents'
        }
      }),
      '.hidden': {
        display: 'none'
      }
    }, variants('display'));
  };
}