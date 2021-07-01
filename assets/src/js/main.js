import Alpine from "alpinejs";
import app from "./app";
import dropdown from "./dropdown.js";
import searchForm from "./searchForm";

window.Alpine = Alpine;

Alpine.data('app', app);
Alpine.data('dropdown', dropdown);
Alpine.data('searchForm', searchForm);

Alpine.start();