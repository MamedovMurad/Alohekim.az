/*!
 * Remark (http://getbootstrapadmin.com/remark)
 * Copyright 2017 amazingsurge
 * Licensed under the Themeforest Standard Licenses
 */

!function(global,factory){if("function"==typeof define&&define.amd)define("/uikit/progress-bars",["jquery","Site"],factory);else if("undefined"!=typeof exports)factory(require("jquery"),require("Site"));else{var mod={exports:{}};factory(global.jQuery,global.Site),global.uikitProgressBars=mod.exports}}(this,function(_jquery,_Site){"use strict";var _jquery2=babelHelpers.interopRequireDefault(_jquery),Site=babelHelpers.interopRequireWildcard(_Site);(0,_jquery2.default)(document).ready(function($){Site.run()}),(0,_jquery2.default)("#exampleButtonStart").on("click",function(){(0,_jquery2.default)('[data-plugin="progress"]').asProgress("start")}),(0,_jquery2.default)("#exampleButtonFinish").on("click",function(){(0,_jquery2.default)('[data-plugin="progress"]').asProgress("finish")}),(0,_jquery2.default)("#exampleButtonGoto").on("click",function(){(0,_jquery2.default)('[data-plugin="progress"]').asProgress("go",50)}),(0,_jquery2.default)("#exampleButtonGotoPercentage").on("click",function(){(0,_jquery2.default)('[data-plugin="progress"]').asProgress("go","50%")}),(0,_jquery2.default)("#exampleButtonStop").on("click",function(){(0,_jquery2.default)('[data-plugin="progress"]').asProgress("stop")}),(0,_jquery2.default)("#exampleButtonReset").on("click",function(){(0,_jquery2.default)('[data-plugin="progress"]').asProgress("reset")}),(0,_jquery2.default)("#exampleButtonRandom").on("click",function(e){e.preventDefault(),(0,_jquery2.default)('[data-plugin="progress"]').each(function(){var number=Math.round(100*Math.random(1))+"%";(0,_jquery2.default)(this).asProgress("go",number)})})});