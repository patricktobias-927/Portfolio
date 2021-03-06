"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = _default;

var _lodash = _interopRequireDefault(require("lodash"));

var _postcss = _interopRequireDefault(require("postcss"));

var _substituteTailwindAtRules = _interopRequireDefault(require("./lib/substituteTailwindAtRules"));

var _evaluateTailwindFunctions = _interopRequireDefault(require("./lib/evaluateTailwindFunctions"));

var _substituteVariantsAtRules = _interopRequireDefault(require("./lib/substituteVariantsAtRules"));

var _substituteResponsiveAtRules = _interopRequireDefault(require("./lib/substituteResponsiveAtRules"));

var _convertLayerAtRulesToControlComments = _interopRequireDefault(require("./lib/convertLayerAtRulesToControlComments"));

var _substituteScreenAtRules = _interopRequireDefault(require("./lib/substituteScreenAtRules"));

var _substituteClassApplyAtRules = _interopRequireDefault(require("./lib/substituteClassApplyAtRules"));

var _applyImportantConfiguration = _interopRequireDefault(require("./lib/applyImportantConfiguration"));

var _purgeUnusedStyles = _interopRequireDefault(require("./lib/purgeUnusedStyles"));

var _corePlugins = _interopRequireDefault(require("./corePlugins"));

var _processPlugins = _interopRequireDefault(require("./util/processPlugins"));

var _cloneNodes = _interopRequireDefault(require("./util/cloneNodes"));

var _featureFlags = require("./featureFlags.js");

var _darkModeVariantPlugin = _interopRequireDefault(require("./flagged/darkModeVariantPlugin"));

var _objectHash = _interopRequireDefault(require("object-hash"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

let previousConfig = null;
let processedPlugins = null;
let getProcessedPlugins = null;

function _default(getConfig) {
  return function (css) {
    const config = getConfig();
    const configChanged = (0, _objectHash.default)(previousConfig) !== (0, _objectHash.default)(config);
    previousConfig = config;

    if (configChanged) {
      (0, _featureFlags.issueFlagNotices)(config);
      processedPlugins = (0, _processPlugins.default)([...(0, _corePlugins.default)(config), ...[(0, _featureFlags.flagEnabled)(config, 'darkModeVariant') ? _darkModeVariantPlugin.default : () => {}], ..._lodash.default.get(config, 'plugins', [])], config);

      getProcessedPlugins = function () {
        return { ...processedPlugins,
          base: (0, _cloneNodes.default)(processedPlugins.base),
          components: (0, _cloneNodes.default)(processedPlugins.components),
          utilities: (0, _cloneNodes.default)(processedPlugins.utilities)
        };
      };
    }

    return (0, _postcss.default)([(0, _substituteTailwindAtRules.default)(config, getProcessedPlugins()), (0, _evaluateTailwindFunctions.default)(config), (0, _substituteVariantsAtRules.default)(config, getProcessedPlugins()), (0, _substituteResponsiveAtRules.default)(config), (0, _convertLayerAtRulesToControlComments.default)(config), (0, _substituteScreenAtRules.default)(config), (0, _substituteClassApplyAtRules.default)(config, getProcessedPlugins, configChanged), (0, _applyImportantConfiguration.default)(config), (0, _purgeUnusedStyles.default)(config, configChanged)]).process(css, {
      from: _lodash.default.get(css, 'source.input.file')
    });
  };
}