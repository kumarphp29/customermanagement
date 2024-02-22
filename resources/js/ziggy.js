const Ziggy = {"url":"http:\/\/localhost","port":null,"defaults":{},"routes":{"sanctum.csrf-cookie":{"uri":"sanctum\/csrf-cookie","methods":["GET","HEAD"]},"ignition.healthCheck":{"uri":"_ignition\/health-check","methods":["GET","HEAD"]},"ignition.executeSolution":{"uri":"_ignition\/execute-solution","methods":["POST"]},"ignition.updateConfig":{"uri":"_ignition\/update-config","methods":["POST"]},"home":{"uri":"\/","methods":["GET","HEAD"]},"customer.index":{"uri":"customer","methods":["GET","HEAD"]},"customer.create":{"uri":"customer\/create","methods":["GET","HEAD"]},"customer.store":{"uri":"customer","methods":["POST"]},"customer.show":{"uri":"customer\/{customer}","methods":["GET","HEAD"],"parameters":["customer"]},"customer.edit":{"uri":"customer\/{customer}\/edit","methods":["GET","HEAD"],"parameters":["customer"]},"customer.update":{"uri":"customer\/{customer}","methods":["PUT","PATCH"],"parameters":["customer"]},"customer.destroy":{"uri":"customer\/{customer}","methods":["DELETE"],"parameters":["customer"]}}};

if (typeof window !== 'undefined' && typeof window.Ziggy !== 'undefined') {
    Object.assign(Ziggy.routes, window.Ziggy.routes);
}

export { Ziggy };
