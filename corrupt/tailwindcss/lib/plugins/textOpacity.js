"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = _default;

var _createUtilityPlugin = _interopRequireDefault(require("../util/createUtilityPlugin"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _default() {
  return function ({
    target,
    ...args
  }) {
    if (target('textOpacity') === 'ie11') {
      return;
    }

    (0, _createUtilityPlugin.default)('textOpacity', [['text-opacity', ['--text-opacity']]])({
      target,
      ...args
    });
  };
}