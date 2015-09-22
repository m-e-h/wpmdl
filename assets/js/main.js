
function DropPanel(element) {
    'use strict';
    this.element_ = element;
    this.init();
}

DropPanel.prototype.init = function() {
    "use strict";
    this.boundClickHandler = this.clickHandler.bind(this);
    this.element_.addEventListener('click', this.boundClickHandler);
};


DropPanel.prototype.clickHandler = function(event) {
    "use strict";
    var target = event.target;
    if( ! target.classList.contains(this.CssClasses_.PANEL_IS_ACTIVE)){
        target.classList.add(this.CssClasses_.PANEL_IS_ACTIVE);
        target.nextElementSibling.classList.add(this.CssClasses_.PANEL_IS_VISIBLE);
    } else {
        target.nextElementSibling.classList.remove(this.CssClasses_.PANEL_IS_VISIBLE);
        target.classList.remove(this.CssClasses_.PANEL_IS_ACTIVE);
    }
};


DropPanel.prototype.CssClasses_ = {
    PANEL_IS_ACTIVE: 'is-active',
    PANEL_IS_VISIBLE: 'is-visible'
};

DropPanel.prototype.mdlDowngrade_ = function() {
  'use strict';
  this.element_.removeEventListener('click', this.boundClickHandler);
};

componentHandler.register({
    constructor: DropPanel,
    classAsString: 'DropPanel',
    cssClass: 'js-drop-panel'
});
