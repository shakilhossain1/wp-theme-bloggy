import Alpine from "alpinejs";
import app from "./app";
import dropdown from "./dropdown.js";

window.Alpine = Alpine;

Alpine.data('app', app);
Alpine.data('dropdown', dropdown);

Alpine.start();